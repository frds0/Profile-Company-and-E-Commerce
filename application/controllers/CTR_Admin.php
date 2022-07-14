<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CTR_Admin extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->helper('url', 'form');
        $this->load->model('MODEL_Admin', 'data');

        date_default_timezone_set("Asia/Jakarta");

        if ($this->session->userdata('status_login') != 'Status Login')
            redirect(base_url());
        elseif ($this->session->userdata('role') != "Admin") {
            redirect(base_url());
        }
    }

    // Admin Home Start
    public function index()
    {
        $data['judul'] = 'Halaman Admin';
        $data['isiH'] = $this->data->GetAllDataH();

        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('template/headerAdmin', $data);
        $this->load->view('admin/VIEW_Home', $data);
        $this->load->view('template/Footer');
    }

    public function SimpanDataH()
    {
        $this->data->InsertDataH();
    }

    public function EditData()
    {
        $this->data->UpdateData();
    }

    public function HapusData($id)
    {
        $where = array('id_home' => $id);
        $this->data->DeleteData($where, 'tbl_home');
        $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">Data Berhasil Dihapus!</div>');
        redirect('CTR_Admin');
    }
    // Home End

    // Information Start
    public function Information()
    {
        $data['judul'] = 'Admin Info';
        $data['isiI'] = $this->data->GetAllDataI();
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('template/HeaderAdmin', $data);
        $this->load->view('admin/VIEW_Info');
        $this->load->view('template/Footer');
    }

    public function SimpanDataI()
    {
        $this->data->InsertDataI();
    }

    public function EditDataI()
    {
        $this->data->UpdateDataI();
    }

    public function HapusDataI($id)
    {
        $where = array('id_info' => $id);
        $this->data->DeleteDataI($where, 'tbl_info');
        $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">Data Berhasil Dihapus!</div>');
        redirect('CTR_Admin/Information');
    }
    // Information End

    // Start About
    public function About()
    {
        $data['judul'] = 'Admin About';
        $data['isiA'] = $this->data->GetAllDataA();
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('template/headerAdmin', $data);
        $this->load->view('admin/VIEW_About');
        $this->load->view('template/footer');
    }

    public function SimpanDataA()
    {
        $this->data->InsertDataA();
    }

    public function EditDataA()
    {
        $this->data->UpdateDataA();
    }

    public function HapusDataA($id)
    {
        $where = array('id_about' => $id);
        $this->data->DeleteDataA($where, 'tbl_about');
        $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">Data Berhasil Dihapus!</div>');
        redirect('CTR_Admin/About');
    }
    // End About

    // Start Visi
    public function Visi()
    {
        $data['judul'] = 'Halaman Visi Admin';
        $data['isiV'] = $this->data->GetAllDataV();
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('template/headerAdmin', $data);
        $this->load->view('admin/VIEW_Visi');
        $this->load->view('template/footer');
    }

    public function SimpanDataV()
    {
        $this->data->InsertDataV();
    }

    public function EditDataV()
    {
        $this->data->UpdateDataV();
    }

    public function HapusDataV($id)
    {
        $where = array('id_visi' => $id);
        $this->data->DeleteDataV($where, 'tbl_visi');
        $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">Data Berhasil Dihapus!</div>');
        redirect('CTR_Admin/Visi');
    }
    // End Visi

    // Start Gallery
    public function Gallery()
    {
        $data['judul'] = 'Admin Gallery';
        $data['isiG'] = $this->data->GetAllDataG();
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('template/headerAdmin', $data);
        $this->load->view('admin/VIEW_Gallery');
        $this->load->view('template/footer');
    }

    public function SimpanDataG()
    {
        $this->data->InsertDataG();
    }

    public function EditDataG()
    {
        $this->data->UpdateDataG();
    }

    public function HapusDataG($id)
    {
        $where = array('id_gallery' => $id);
        $this->data->DeleteDataG($where, 'tbl_gallery');
        $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">Data Berhasil Dihapus!</div>');
        redirect('CTR_Admin/Gallery');
    }
    // End Gallery

    // Start Contact
    public function Contact()
    {
        $data['judul'] = 'Admin Contact';
        $data['isiC'] = $this->data->GetAllDataC();
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('template/headerAdmin', $data);
        $this->load->view('admin/VIEW_Contact');
        $this->load->view('template/footer');
    }

    public function HapusDataC($id)
    {
        $where = array('id_contact' => $id);
        $this->data->DeleteDataC($where, 'tbl_contact');
        $this->session->set_flashdata('msg', '<div class="alert alert-danger text-center" role="alert">Data Sukses Dihapus!</div>');
        redirect('CTR_Admin/Contact');
    }
    // End Contact

    // Start Services
    // public function Services()
    // {
    //     $data['judul'] = 'Admin Service';
    //     $data['isiS'] = $this->data->GetAllDataS();
    //     $data['user'] = $this->db->get_where('user', ['email' =>
    //     $this->session->userdata('email')])->row_array();

    //     $this->load->view('template/headerAdmin', $data);
    //     $this->load->view('admin/VIEW_Service');
    //     $this->load->view('template/footer');
    // }

    // public function EditDataS()
    // {
    //     $this->data->UpdateDataS();
    // }

    // public function HapusDataS($id)
    // {
    //     $where = array('id_services' => $id);
    //     $this->data->DeleteDataS($where, 'tbl_services');
    //     redirect('CTR_Admin/Services');
    // }
    // End Services

    // Start Barang
    public function Barang()
    {
        $data['judul'] = 'Admin Barang';
        $data['barang'] = $this->data->GetAllBarang();
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('template/HeaderAdmin', $data);
        $this->load->view('admin/VIEW_Barang');
        $this->load->view('template/Footer');
    }

    public function SimpanBarang()
    {
        $this->data->InsertBarang();
    }

    public function EditBarang()
    {
        $this->data->UpdateBarang();
    }

    public function HapusBarang($id)
    {
        $where = array('id_barang' => $id);
        $this->data->DeleteBarang($where, 'tbl_barang');
        $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">Data Berhasil Dihapus!</div>');
        redirect('CTR_Admin/Barang');
    }
    // End Barang

    // // Start Laptop
    // public function Laptop()
    // {
    //     $data['judul'] = 'Admin Laptop';
    //     $data['isiL'] = $this->data->GetAllDataL();

    //     $this->load->view('template/headerAdmin', $data);
    //     $this->load->view('admin/VIEW_Laptop');
    //     $this->load->view('template/footer');
    // }

    // public function SimpanDataL()
    // {
    //     $this->data->InsertDataL();
    // }

    // public function EditDataL()
    // {
    //     $this->data->UpdateDataL();
    // }

    // public function HapusDataL($id)
    // {
    //     $where = array('id_laptop' => $id);
    //     $this->data->DeleteData($where, 'tbl_laptop');
    //     redirect('CTR_Admin/Laptop');
    // }
    // // End Laptop

    // // Start Printer
    // public function Printer()
    // {
    //     $data['judul'] = 'Admin Printer';
    //     $data['isiP'] = $this->data->GetAllDataP();

    //     $this->load->view('template/headerAdmin', $data);
    //     $this->load->view('admin/VIEW_Printer');
    //     $this->load->view('template/footer');
    // }

    // public function SimpanDataP()
    // {
    //     $this->data->InsertDataP();
    // }

    // public function EditDataP()
    // {
    //     $this->data->UpdateDataP();
    // }

    // public function HapusDataP($id)
    // {
    //     $where = array('id_printer' => $id);
    //     $this->data->DeleteDataP($where, 'tbl_printer');
    //     redirect('CTR_Admin/Printer');
    // }
    // // End Printer

    // Start Pesanan 
    public function Pesanan()
    {
        $data['judul'] = 'Pesanan';
        $data['isi'] = $this->data->JoinTransaksi();
        $data['tbl'] = $this->data->tbl();
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $id_transaksi = $this->input->post('id_transaksi');
        $data['id_transaksi'] = $id_transaksi;

        $this->load->view('template/headerAdmin', $data);
        $this->load->view('admin/Pesanan/VIEW_Pesanan');
        $this->load->view('template/footer');
    }

    public function KirimPesanan()
    {
        $id = $this->input->post('id_transaksi');
        $this->db->set('status', 'Dikirim');
        $this->db->set('tgl_dikirim', date('Y-m-d H:i:s'));
        $this->db->where('id_transaksi', $id);
        $this->db->update('tbl_transaksi');
        $this->session->set_flashdata('msg', '<div class="alert alert-success text-center" role="alert">Pesanan Dikirim!</div>');
        redirect('CTR_Admin/Pesanan');
    }

    public function TolakPesanan()
    {
        $id = $this->input->post('id_transaksi');
        $this->db->set('status', 'Ditolak');
        $this->db->where('id_transaksi', $id);
        $this->db->update('tbl_transaksi');
        $this->session->set_flashdata('msg', '<div class="alert alert-danger text-center" role="alert">Pesanan Ditolak!</div>');
        redirect('CTR_Admin/Pesanan');
    }
    // End Pesanan

    // Start Dikirim 
    public function Dikirim()
    {
        $data['judul'] = 'Dikirim Pengiriman';
        $data['isi'] = $this->data->JoinTransaksi();
        $data['tbl'] = $this->data->tbl();
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('template/headerAdmin', $data);
        $this->load->view('admin/Pesanan/VIEW_Dikirim');
        $this->load->view('template/footer');
    }
    // End Dikirim

    // Start Terkirim 
    public function Terkirim()
    {
        $data['judul'] = 'Terkirim';
        $data['isi'] = $this->data->JoinTransaksi();
        $data['tbl'] = $this->data->tbl();
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['date1'] = "";
        $data['date2'] = "";

        $this->load->view('template/headerAdmin', $data);
        $this->load->view('admin/Pesanan/VIEW_Terkirim', $data);
        $this->load->view('template/footer');
    }

    public function Tampilkan()
    {
        $data['judul'] = 'Terkirim';
        // $data['isi'] = $this->data->JoinTransaksi();
        // $data['tbl'] = $this->data->tbl();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $date1 = $this->input->post('date1');
        $data['date1'] = $date1;
        $date2 = $this->input->post('date2');
        $data['date2'] = $date2;
        if ($date1 != null) {
            $data['isi'] = $this->data->periode($date1, $date2);
            $data['tbl'] = $this->data->tbl1($date1, $date2);
        } else {
            $data['isi'] = $this->data->JoinTransaksi();
            $data['tbl'] = $this->data->tbl();
        }

        $this->load->view('template/headerAdmin', $data);
        $this->load->view('admin/Pesanan/VIEW_Terkirim', $data);
        $this->load->view('template/footer');
    }
    // End Terkirim

    // public function Tampilkan()
    // {
    //     $data['judul'] = 'Proton Techindo';
    //     $data['detailbiaya'] = $this->data->GetDataDetail();
    //     $date1 = $this->input->post('date1');
    //     $data['date1'] = $date1;
    //     $date2 = $this->input->post('date2');
    //     $data['date2'] = $date2;
    //     if ($date1 != null) {
    //         $data['laporan'] = $this->data->periode($date1, $date2);
    //     } else {
    //         $data['laporan'] = $this->data->GetAllData();
    //     }
    //     $this->load->view('Template/Header', $data);
    //     $this->load->view('Template/Sidebaradmin', $data);
    //     $this->load->view('Admin/Laporan', $data);
    //     $this->load->view('Template/Footer');
    // }
}
