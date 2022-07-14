<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CTR_Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation', 'email');
    }

    public function index()
    {
        // Form Validation untuk memvalidasi email dan password yang sesuai
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if ($this->form_validation->run() == false) { //jika salah jalankan yang ini
            $data['judul'] = 'Halaman Login';
            $this->load->view('VIEW_Login', $data);
            $this->load->view('template/Footer');
        } else {
            // kalau validdasinya berhasil
            $this->_login(); //melakukan validasi login private
        }
    }

    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        //query ke database
        $user = $this->db->get_where('user', ['email' => $email])->row_array();
        //get_where merupakan fungsi dr ci yangdibaca Select * From user Where (,) 

        //jika usernya ada maka akan masuk
        if ($user) {
            //jika usernya aktif
            if ($user['is_active'] == 1) {
                //cek password
                if ($password == $user['password']) {
                    $data = [
                        'email' => $user['email'],
                        'role' => $user['role'],
                        'is_active' => $user['is_active'],
                        'status_login' => 'Status Login'
                    ];
                    $this->session->set_userdata($data);
                    //untuk melakukan login ke admin/user
                    if ($user['role'] == 'Admin') {
                        redirect('CTR_Admin');
                    } else if ($user['role'] == 'Pelanggan') {
                        $this->session->set_flashdata('msg', '<div class="alert alert-warning" role="alert">Anda Berhasil Login! <b>Harap Isi Data Profile Dahulu Sebelum Melakukan Pemesanan</b></div>');
                        redirect('CTR_Pelanggan');
                    } else {
                        redirect('CTR_Pemilik');
                    }
                } else {
                    $this->session->set_flashdata('massage', '<div class="alert alert-danger" role="alert">Password Anda Salah</div>');
                    redirect('CTR_Login');
                }
            } else {
                $this->session->set_flashdata('massage', '<div class="alert alert-danger" role="alert">Email Tidak Aktif</div>');
                redirect('CTR_Login');
            }
        } else {
            $this->session->set_flashdata('massage', '<div class="alert alert-danger" role="alert">Email Belum Terdaftar</div>');
            redirect('CTR_Login');
        }
    }

    //melakukan register
    public function register()
    {
        $this->form_validation->set_rules('username', 'Username', 'required|trim'); //memvalidasi username agar required/harus di isi dan trim/kalau ada spasi di usernamenya
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'Email Sudah Terdaftar' //array ini untuk mengubah tampilan allertnya
        ]); //is_unique[user.email] untuk melihat ke table user kalau emailnya ada yang sama maka tidak bisa dimasukan
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[2]|matches[password2]', [
            'matches' => 'Password Tidak sama',
            'min_length' => 'Password Terlalu Pendek'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {

            $data['judul'] = 'Halaman Regis';
            // $this->load->view('template/header');
            $this->load->view('VIEW_Regis', $data);
            $this->load->view('template/Footer');
        } else {
            $data = [ //jika data ini sudah disiapkan tinggal dipanggil di $this di bawah
                'username' => $this->input->post('username', true),
                'email' => $this->input->post('email', true),
                'image' => 'default.png',
                'password' => $this->input->post('password1'),
                'role' => 'Pelanggan',
                'is_active' => 1,
                'date_created' => time()
            ];

            $this->db->insert('user', $data); // yang ditaruh ke table user
            $this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert">Data Anda Berhasil Ditambahkan! Silahkan Login!</div>');
            redirect('CTR_Login');
        }
    }

    // Forgot Password
    private function _sendemail($token, $type)
    {
        // $config = [
        //     'protocol' => 'smtp',
        //     'smtp_host' => 'ssl://smtp.googlemail.com',
        //     'smtp_user' => 'pattinson0303@gmail.com',
        //     'smtp_pass' => 'oktober03',
        //     'smtp_port' => 465,
        //     'mailtype' => 'html',
        //     'charset' => 'utf-8',
        //     'newline' => "\r\n"
        // ];

        // $this->load->library('email', $config);

        $this->load->library('email');

        $config = array();
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'ssl://smtp.googlemail.com';
        $config['smtp_user'] = 'ahmad03firdaus@gmail.com';
        $config['smtp_pass'] = 'oktober03';
        $config['smtp_port'] = 465;
        $config['mailtype'] = 'html';
        $config['charset'] = 'utf-8';
        $this->email->initialize($config);

        $this->email->set_newline("\r\n");

        $this->email->from('ahmad03firdaus@gmail.com', 'Ahmad Firdaus');
        $this->email->to($this->input->post('email'));

        if ($type == 'forgot') {
            $this->email->subject('Reset Password');
            $this->email->message('Click this link to create new Password : <a href="' . base_url() . 'index.php/CTR_Login/resetPassword?email=' . $this->input->post('email') . '&token=' . urlencode($token) . '">Reset</a>');
        }

        if ($this->email->send()) {
            return true;
        } else {
            echo $this->email->print_debugger();
            die;
        }
    }

    public function forgot()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        if ($this->form_validation->run() == false) {
            $data['judul'] = 'Halaman Forget Password';
            // $this->load->view('template/header');
            $this->load->view('VIEW_Forget', $data);
            $this->load->view('template/Footer');
        } else {
            $email = $this->input->post('email');
            $user = $this->db->get_where('user', ['email' => $email])->row_array();

            if ($user) {
                $token = base64_encode(random_bytes(32));
                $user_token = [
                    'email' => $email,
                    'token' => $token,
                    'date_created' => time()
                ];

                $this->db->insert('user_token', $user_token);
                $this->_sendemail($token, 'forgot');

                $this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert">Silahkan cek email untuk mereset password anda!</div>');
                redirect('CTR_Login/forgot');
            } else {
                $this->session->set_flashdata('massage', '<div class="alert alert-danger" role="alert">Email Anda Tidak Terdaftar!</div>');
                redirect('CTR_Login/forgot');
            }
        }
    }

    public function resetPassword()
    {
        $email = $this->input->get('email');
        $token = $this->input->get('token');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        if ($user) {
            $user_token = $this->db->get_where('user_token', ['token' => $token])->row_array();

            if ($user_token) {
                $this->session->set_userdata('reset_email', $email);
                $this->changePassword();
            } else {
                $this->session->set_flashdata('massage', '<div class="alert alert-danger" role="alert">Reset Password Failed! Wrong Token</div>');
                redirect('CTR_Login/forgot');
            }
        } else {
            $this->session->set_flashdata('massage', '<div class="alert alert-danger" role="alert">Reset Password Failed! Wrong Email</div>');
            redirect('CTR_Login/forgot');
        }
    }

    public function changePassword()
    {

        if (!$this->session->userdata('reset_email')) {
            redirect('CTR_Login');
        }

        $this->form_validation->set_rules('password1', 'Password', 'trim|required|min_length[2]|matches[password2]');
        $this->form_validation->set_rules('password2', 'Repeat Password', 'trim|required|min_length[2]|matches[password1]');

        if ($this->form_validation->run() == false) {
            $data['judul'] = 'Halaman New Password';
            // $this->load->view('template/header');
            $this->load->view('VIEW_ChangePassword', $data);
            $this->load->view('template/Footer');
        } else {
            $password = $this->input->post('password1');
            $email = $this->session->userdata('reset_email');

            $this->db->set('password', $password);
            $this->db->where('email', $email);
            $this->db->update('user');

            $this->session->unset_userdata('reset_email');

            $this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert">Password anda berhasil di ubah!</div>');
            redirect('CTR_Login');
        }
    }

    function logout()
    {
        // $this->session->sess_destroy();
        redirect('CTR_Login');
    }
}
