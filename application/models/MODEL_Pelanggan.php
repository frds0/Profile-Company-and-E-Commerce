<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MODEL_Pelanggan extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('session');
    }

    //Home
    function GetAllDataU()
    {
        $this->db->select('*')->from('user');
        $rs = $this->db->get();
        return $rs->result();
    }

    // function GetProvinsi()
    // {
    //     $this->db->select('*')->from('provinces');
    //     $rs = $this->db->get();
    //     return $rs->result();
    // }

    // function GetKabupaten()
    // {
    //     $this->db->select('*')->from('regencies');
    //     $rs = $this->db->get();
    //     return $rs->result();
    // }

    // function GetKecamatan()
    // {
    //     $this->db->select('*')->from('districts');
    //     $rs = $this->db->get();
    //     return $rs->result();
    // }

    // function GetKelurahan()
    // {
    //     $this->db->select('*')->from('villages');
    //     $rs = $this->db->get();
    //     return $rs->result();
    // }

    public function GetId($id)
    {
        return $this->db->get_where('user', array('id' => $id))->row();
    }

    function UpdateUser()
    {
        $id = $this->input->post('id');
        $username = $this->input->post('username');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $alamat = $this->input->post('alamat');
        $provinsi = $this->input->post('provinsi');
        $kota = $this->input->post('kota');
        $kecamatan = $this->input->post('kecamatan');
        $kelurahan = $this->input->post('kelurahan');
        $no_telp = $this->input->post('no_telp');
        $old = $this->input->post('old');
        $image = $_FILES['image'];

        if ($image = NULL) {
            $image = $old;
        } else {
            $config['upload_path']          = './assets/img/profile/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg|jfif';
            $config['max_size']             = 10000;
            $config['max_width']            = 10000;
            $config['max_height']           = 10000;

            $this->load->library('upload', $config);
            if ($this->upload->do_upload('image')) {
                $image = $this->upload->data('file_name');
            } else {
                $image = $old;
            }
        }
        $data = array(
            'id' => $id,
            'username' => $username,
            'email' => $email,
            'password' => $password,
            'alamat' =>  $provinsi . '`' . $kota . '`' . $kecamatan . '`' . $kelurahan . '`' .  $alamat,
            'no_telp' => $no_telp,
            'image' => $image
        );

        $this->db->where('id', $id);
        $this->db->update('user', $data);
        $this->session->set_flashdata('msg', '<div class="alert alert-success text-center" role="alert">Data Berhasil Diubah!</div>');
        redirect('CTR_Pelanggan');
    }

    // function UpdateUser()
    // {
    //     $id = $this->input->post('id');
    //     $config['upload_path']          = './assets/img/profile/';
    //     $config['allowed_types']        = 'gif|jpg|png|jpeg';
    //     $config['max_size']             = 10000;
    //     $config['max_width']            = 10000;
    //     $config['max_height']           = 10000;

    //     $this->load->library('upload', $config);

    //     if (!$this->upload->do_upload('image')) {
    //         $this->session->set_flashdata('msg', '<div class="alert alert-danger text-center" role="alert">Harap mengisi foto terlebih dahulu!</div>');
    //         redirect('CTR_Pelanggan/profile');
    //     } else {
    //         $image = $this->upload->data();
    //         $image = $image['file_name'];

    //         $id = $this->input->post('id', true);
    //         $username = $this->input->post('username', true);
    //         $email = $this->input->post('email', true);
    //         $data = array(
    //             'id' => $id,
    //             'username' => $username,
    //             'email' => $email,
    //             'image' => $image
    //         );

    //         $this->db->where('id', $id);
    //         $this->db->update('user', $data);
    //         redirect('CTR_Pelanggan');
    //     }
    // }

    function tbl($id)
    {
        $this->db->select('*')->from('tbl_transaksi')->where('id', $id);
        $rs = $this->db->get();
        return $rs->result();
    }

    function GetAllBarang()
    {
        $this->db->select('*')->from('tbl_barang')->order_by('spesifikasi', 'asc');
        $rs = $this->db->get();
        return $rs->result();
    }

    // function GetKategoriBarang()
    // {
    //     $this->db->select('*')->from('tbl_kategori');
    //     $rs = $this->db->get();
    //     return $rs->result();
    // }

    function GetBarang($id_barang)
    {
        $this->db->select('*')->from('tbl_barang')->where('id_barang', $id_barang);
        $rs = $this->db->get();
        return $rs->result();
    }
    // Komputer
    function GetAllDataK()
    {
        $this->db->select('*')->from('tbl_barang')->where('kategori', 'Komputer');
        $rs = $this->db->get();
        return $rs->result();
    }


    public function get_detailK($id)
    {
        $query = $this->db->query("SELECT * FROM tbl_barang WHERE id_barang = '$id'");
        return $query->result();
    }
    // End Komputer

    // Laptop
    function GetAllDataL()
    {
        $this->db->select('*')->from('tbl_barang')->where('kategori', 'Laptop');
        $rs = $this->db->get();
        return $rs->result();
    }

    public function get_detailL($id)
    {
        $query = $this->db->query("SELECT * FROM tbl_barang WHERE id_barang = '$id'");
        return $query->result();
    }
    // End Laptop

    // Printer
    function GetAllDataP()
    {
        $this->db->select('*')->from('tbl_barang')->where('kategori', 'Printer');
        $rs = $this->db->get();
        return $rs->result();
    }

    public function get_detailP($id)
    {
        $query = $this->db->query("SELECT * FROM tbl_barang WHERE id_barang = '$id'");
        return $query->result();
        // End Printer
    }

    // Pesanan
    function JumlahBelumBayar($id)
    {
        $query = $this->db->query("SELECT * FROM tbl_transaksi WHERE status= 'Belum Dibayar' AND id= '$id' ");
        $proses = $query->num_rows();
        return $proses;
    }

    function JumlahProses($id)
    {
        $query = $this->db->query("SELECT * FROM tbl_transaksi WHERE status= 'Diproses' AND id= '$id' ");
        $proses = $query->num_rows();
        return $proses;
    }

    function JumlahDikirim($id)
    {
        $query = $this->db->query("SELECT * FROM tbl_transaksi WHERE status= 'Dikirim' AND id= '$id' ");
        $dikirim = $query->num_rows();
        return $dikirim;
    }

    function JumlahDiterima($id)
    {
        $query = $this->db->query("SELECT * FROM tbl_transaksi WHERE status= 'Diterima' AND id= '$id' ");
        $diterima = $query->num_rows();
        return $diterima;
    }

    function JumlahDitolak($id)
    {
        $query = $this->db->query("SELECT * FROM tbl_transaksi WHERE status= 'Ditolak' AND id= '$id' ");
        $diterima = $query->num_rows();
        return $diterima;
    }

    // Transaksi
    function GetNoTransaksi()
    {
        $this->db->select('id_transaksi')->from('tbl_transaksi');
        $rs = $this->db->get();
        return $rs->result();
    }

    function GetNoTransaksi2()
    {
        $query = $this->db->query("SELECT id_transaksi FROM tbl_transaksi");
        $keranjang = $query->num_rows();
        return $keranjang;
    }

    function JoinTransaksi($id)
    {
        // $id_wawancara = $this->input->post('id_wawancara');
        $this->db->select('*');
        $this->db->from('dtl_transaksi');
        $this->db->join('tbl_transaksi', 'dtl_transaksi.id_transaksi = tbl_transaksi.id_transaksi');
        $this->db->join('tbl_barang', 'dtl_transaksi.id_barang = tbl_barang.id_barang');
        $this->db->where('tbl_transaksi.id', $id);
        $query = $this->db->get();
        return $query->result();
    }
    // function InsertTransaksi()
    // {
    //     $data = array(
    //         'no_transaksi' => $this->input->post('no_transaksi'),
    //         'id' => $this->input->post('id'),
    //         'nama_lengkap' => $this->input->post('nama_lengkap'),
    //         'nama_barang' => $this->input->post('nama_barang'),
    //         'no_telp' => $this->input->post('no_telp'),
    //         'alamat' => $this->input->post('alamat'),
    //         'harga' => $this->input->post('harga'),
    //         'qty' => $this->input->post('qty'),
    //         'total_harga' => $this->input->post('total_harga'),
    //         'pembayaran' => $this->input->post('pembayaran'),
    //         'pengiriman' => $this->input->post('pengiriman'),
    //         'status' => 'Diproses'
    //     );
    //     $this->db->insert('tbl_transaksi', $data);
    //     // $stok = 
    //     // $sisa = $stok-$qty;

    //     // $no_transaksi = $this->db->insert_id('no_transaksi');
    //     // $this->db->set('stok', 'Dikirim');
    //     // $this->db->where('no_transaksi', $no_transaksi);
    //     // $this->db->update('tbl_transaksi');

    //     $this->session->set_flashdata('msg', '<div class="alert alert-success text-center" role="alert">Pesanan Sudah Diterima! Harap Menunggu Informasi Kami!</div>');
    //     redirect('CTR_Pelanggan');
    // }

    // Keranjang
    // function InsertKeranjang()
    // {
    //     $data = array(
    //         'no_transaksi' => $this->input->post('no_transaksi'),
    //         'id' => $this->input->post('id'),
    //         'nama_lengkap' => $this->input->post('nama_lengkap'),
    //         'tittle' => $this->input->post('tittle'),
    //         'no_telp' => $this->input->post('no_telp'),
    //         'alamat' => $this->input->post('alamat'),
    //         'harga' => $this->input->post('harga'),
    //         'qty' => $this->input->post('qty'),
    //         'total_harga' => $this->input->post('total_harga'),
    //         'pembayaran' => $this->input->post('pembayaran'),
    //         'pengiriman' => $this->input->post('pengiriman'),
    //         'status' => 'Keranjang'
    //     );
    //     $this->db->insert('tbl_transaksi', $data);
    //     redirect('CTR_Pelanggan');
    // }

    // function get_keranjang($id)
    // {
    //     $query = $this->db->query("SELECT * FROM tbl_transaksi WHERE id = '$id' AND status = 'Keranjang'");
    //     return $query->result();
    // }

    // End Keranjang

    function get_transaksi($id)
    {
        $query = $this->db->query("SELECT * FROM dtl_transaksi WHERE id = '$id' AND status != 'keranjang'");
        return $query->result();
    }

    function BatalPesanan($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
}
