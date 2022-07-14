<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CTR_Pemilik extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->helper('url', 'form');
        $this->load->model('MODEL_Pemilik', 'data');

        date_default_timezone_set("Asia/Jakarta");
    }

    public function index()
    {
        $data['judul'] = 'Proton Techindo';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['isi'] = $this->data->GetAllUser();

        $this->load->view('template/HeaderAdmin', $data);
        $this->load->view('pemilik/VIEW_Home', $data);
        $this->load->view('template/Footer');
    }

    public function Laporan()
    {
        $data['judul'] = 'Laporan';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['isi'] = $this->data->GetAllUser();
        $data['laporan'] = $this->data->GetLaporan();
        $data['laporan_detail'] = $this->data->GetAllLaporan();

        $this->load->view('template/HeaderAdmin', $data);
        $this->load->view('pemilik/VIEW_Laporan', $data);
        $this->load->view('template/Footer');
    }

    public function SimpanUser()
    {
        $data = array(
            'username' => $this->input->post('username'),
            'email' => $this->input->post('email'),
            'image' => 'default.jpg',
            'password' => $this->input->post('password'),
            'role' => $this->input->post('role'),
            'is_active' => 1,
            'date_created' => time(),
            'alamat' => $this->input->post('alamat'),
            'no_telp' => $this->input->post('no_telp'),
        );
        $this->db->insert('user', $data);
        redirect('CTR_Pemilik');
    }

    public function UpdateUser()
    {
        $id = $this->input->post('id');
        $data = array(
            'username' => $this->input->post('username'),
            'email' => $this->input->post('email'),
            'image' => 'default.jpg',
            'password' => $this->input->post('password'),
            'role' => $this->input->post('role'),
            'is_active' => 1,
            'date_created' => time(),
            'alamat' => $this->input->post('alamat'),
            'no_telp' => $this->input->post('no_telp'),
        );
        $this->db->where('id', $id);
        $this->db->update('user', $data);
        redirect('CTR_Pemilik');
    }

    public function HapusUser($id)
    {
        $where = array('id' => $id);
        $this->data->DeleteUser($where, 'user');
        redirect('CTR_Pemilik');
    }
}
