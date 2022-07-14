<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{

    public function index()
    {
        $this->load->helper('url', 'form');
        $this->load->model('MODEL_Admin', 'data');
        $this->load->library('mypdf');
        $date1 = $this->input->post('date1');
        $date2 = $this->input->post('date2');
        if ($date1 != null) {
            $data['isi'] = $this->data->periode($date1, $date2);
            $data['tbl'] = $this->data->tbl1($date1, $date2);
        } else {
            $data['isi'] = $this->data->JoinTransaksi();
            $data['tbl'] = $this->data->tbl();
        }

        $data['judul'] = 'Laporan';
        $data['isi'] = $this->data->JoinTransaksi();
        // $data['tbl'] = $this->data->tbl();

        $this->mypdf->generate('admin/VIEW_Laporan', $data);
    }

    public function PrintID()
    {
        $this->load->helper('url', 'form');
        $this->load->model('MODEL_Admin', 'data');
        $this->load->library('mypdf');

        $id_transaksi = $this->uri->segment(3);
        $data['judul'] = 'Laporan';
        $data['isi'] = $this->data->JoinTransaksiID($id_transaksi);
        $data['tbl'] = $this->data->tblID($id_transaksi);

        $this->mypdf->generate('admin/VIEW_Laporan', $data);
    }
}
