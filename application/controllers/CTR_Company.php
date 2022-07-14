<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CTR_Company extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->helper('url', 'form');
        $this->load->model('MODEL_Company', 'data');
        $this->load->library('pagination');
    }

    // Home Base URLnya
    public function index()
    {
        //Pagination

        $row = $this->data->baris();

        $config['base_url'] = 'http://localhost/Proton/index.php/CTR_Company/index';
        $config['total_rows'] = $row;
        $config['per_page'] = 3;

        //Styling Pagination
        $config['full_tag_open'] = '<nav><ul class="pagination pagination-lg justify-content-center">';
        $config['full_tag_close'] = '</ul></nav>';

        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';

        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = 'Next';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = 'Prev';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="page-item active"> <a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a> </li>';

        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

        // Produces: class="myclass"
        $config['attributes'] = array('class' => 'page-link');

        $start = $this->uri->segment(3);
        // DiInitialize
        $this->pagination->initialize($config);
        //Akhir Pagination

        $data['judul'] = 'Proton Techindo';
        $data['isiH'] = $this->data->GetAllDataH();
        $data['isiI'] = $this->data->GetAllDataI($config['per_page'], $start);
        $data['isiA'] = $this->data->GetAllDataA();
        $data['isiV'] = $this->data->GetAllDataV();
        $data['isiG'] = $this->data->GetAllDataG();
        $data['isiC'] = $this->data->GetAllDataC();

        $this->load->view('template/Header', $data);
        $this->load->view('company/VIEW_Home', $data);
        $this->load->view('company/VIEW_Info', $data);
        $this->load->view('company/VIEW_About');
        $this->load->view('company/VIEW_Visi');
        $this->load->view('company/VIEW_Gallery');
        $this->load->view('company/VIEW_Contact');
        $this->load->view('template/Footer');
    }

    //Simpan Data Untuk Contact
    public function SimpanDataC()
    {
        $this->data->InsertData();
    }

    //Controller Services
    public function Services()
    {
        $data['judul'] = 'Halaman Service';
        $data['isiS'] = $this->data->GetAllDataS();
        // $data['isiP'] = $this->data->GetAllDataP();
        // $data['isiB'] = $this->data->GetAllDataB();

        $this->load->view('template/Header', $data);
        $this->load->view('store/VIEW_Service');
        $this->load->view('template/Footer');
    }

    //Simpan Data Untuk Services
    public function SimpanDataS()
    {
        $this->data->InsertDataS();
    }

    // Controller Komputer
    public function Komputer()
    {
        $data['judul'] = 'Halaman Komputer';
        $data['isi'] = $this->data->GetAllDataK();

        $this->load->view('template/Header', $data);
        $this->load->view('store/VIEW_Komputer');
        $this->load->view('template/Footer');
    }

    // Controller Laptop
    public function Laptop()
    {
        $data['judul'] = 'Halaman Laptop';
        $data['isi'] = $this->data->GetAllDataL();

        $this->load->view('template/Header', $data);
        $this->load->view('store/VIEW_Laptop');
        $this->load->view('template/Footer');
    }

    // Controller Printer
    public function Printer()
    {
        $data['judul'] = 'Halaman Printer';
        $data['isi'] = $this->data->GetAllDataP();

        $this->load->view('template/Header', $data);
        $this->load->view('store/VIEW_Printer');
        $this->load->view('template/Footer');
    }

    public function Alert()
    {
        $this->session->set_flashdata('alert', '<div class="alert alert-danger" role="alert">Silahkan Login Terlebih Dahulu</div>');
        redirect('CTR_Login');
    }
}
