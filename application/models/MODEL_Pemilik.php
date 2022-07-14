<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MODEL_Pemilik extends CI_Model
{
    //Home
    function GetAllUser()
    {
        $this->db->select('*')->from('user')->where_in('role', array('Admin', 'Pemilik'))->order_by('role', 'desc');
        $rs = $this->db->get();
        return $rs->result();
    }

    function GetLaporan()
    {
        $this->db->select('*')->from('tbl_transaksi');
        $this->db->join('user', 'tbl_transaksi.id = user.id');
        $rs = $this->db->get();
        return $rs->result();
    }

    function GetAllLaporan()
    {
        $this->db->select('*');
        $this->db->from('dtl_transaksi');
        $this->db->join('tbl_transaksi', 'dtl_transaksi.id_transaksi = tbl_transaksi.id_transaksi');
        $this->db->join('tbl_barang', 'dtl_transaksi.id_barang = tbl_barang.id_barang');;
        $this->db->join('user', 'tbl_transaksi.id = user.id');
        $query = $this->db->get();
        return $query->result();
    }

    function DeleteUser($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
}
