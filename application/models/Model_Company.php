<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MODEL_Company extends CI_Model
{
    //Home
    function GetAllDataH()
    {
        $this->db->select('*')->from('tbl_home');
        $rs = $this->db->get();
        return $rs->result();
    }

    //Awal Function Pagination 
    function GetAllDataI($limit, $start)
    {
        $this->db->order_by('tgl_info', 'DESC');
        $rs = $this->db->get('tbl_info', $limit, $start);
        return $rs->result();
    }

    // untuk menemukan berapa rows yang ada di tbl
    function baris()
    {
        return $this->db->get('tbl_info')->num_rows();
    }

    //About
    function GetAllDataA()
    {
        $this->db->select('*')->from('tbl_about');
        $rs = $this->db->get();
        return $rs->result();
    }

    //Visi
    function GetAllDataV()
    {
        $this->db->select('*')->from('tbl_visi');
        $rs = $this->db->get();
        return $rs->result();
    }

    //Gallery
    function GetAllDataG()
    {
        $this->db->select('*')->from('tbl_gallery');
        $rs = $this->db->get();
        return $rs->result();
    }

    //Contact
    function GetAllDataC()
    {
        $this->db->select('*')->from('tbl_contact');
        $rs = $this->db->get();
        return $rs->result();
    }

    function InsertData()
    {
        $data = array(
            'id_contact'        => $this->input->post('id_contact'),
            'nama'              => $this->input->post('nama'),
            'email'             => $this->input->post('email'),
            'pesan'             => $this->input->post('pesan')
        );
        $this->db->insert('tbl_contact', $data);
        $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Pesan Anda Sudah Kami Terima!</div>');
        redirect('CTR_Company/#contact');
    }
    // End Contact

    // Services Home
    function GetAllDataS()
    {
        $this->db->select('*')->from('tbl_services');
        $rs = $this->db->get();
        return $rs->result();
    }

    function InsertDataS()
    {
        $data = array(
            'id_services'      => $this->input->post('id_services'),
            'name'              => $this->input->post('name'),
            'email'             => $this->input->post('email'),
            'no_telp'           => $this->input->post('no_telp'),
            'alamat'            => $this->input->post('alamat'),
            'nama_b'        => $this->input->post('nama_b'),
            'jenis_b'       => $this->input->post('jenis_b'),
            'merk_b'        => $this->input->post('merk_b'),
            'pesan'         => $this->input->post('pesan')
        );

        $this->db->insert('tbl_services', $data);
        $this->session->set_flashdata('msg', '<div class="alert alert-success text-center" role="alert">Pesanan Sudah Diterima! Harap Menunggu Informasi Kami!</div>');
        redirect('CTR_Pelanggan/ServicesU');
    }
    // End Services

    // Komputer Home
    function GetAllDataK()
    {
        $this->db->select('*')->from('tbl_barang')->where('kategori', 'Komputer');
        $rs = $this->db->get();
        return $rs->result();
    }
    // End Komputer

    // Laptop Home
    function GetAllDataL()
    {
        $this->db->select('*')->from('tbl_barang')->where('kategori', 'Laptop');
        $rs = $this->db->get();
        return $rs->result();
    }
    // End Laptop

    // Printer Home
    function GetAllDataP()
    {
        $this->db->select('*')->from('tbl_barang')->where('kategori', 'Printer');
        $rs = $this->db->get();
        return $rs->result();
    }
    // End Printer
}
