<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CTR_Pelanggan extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->helper('url', 'form');
        $this->load->library(array('cart'), 'upload');
        $this->load->model('MODEL_Pelanggan', 'data');

        date_default_timezone_set("Asia/Jakarta");

        // if ($this->session->userdata('status_login') != 'Status Login')
        //     redirect(base_url());
        // elseif ($this->session->userdata('role') != 'Pelanggan') {
        //     redirect(base_url());
        // }
    }

    public function index()
    {
        $data['judul'] = 'Halaman User';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['barang'] = $this->data->GetAllBarang();
        // $data['barangg'] = $this->data->GetKategoriBarang();

        $id_transaksi = $this->input->post('id_transaksi');
        $data['id_transaksi'] = $id_transaksi;
        $id_user = $this->input->post('id_user');
        $data['id_user'] = $id_user;


        $this->load->view('template/Sidebaruser', $data);
        $this->load->view('template/HeaderUser', $data);
        $this->load->view('user/VIEW_Home');
        $this->load->view('template/FooterUser');
    }

    // Profile
    public function profile()
    {
        $data['judul'] = 'Profile User';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        // $data['provinsi'] = $this->data->GetProvinsi();
        // $data['kabupaten'] = $this->data->GetKabupaten();
        // $data['kecamatan'] = $this->data->GetKecamatan();
        // $data['kelurahan'] = $this->data->GetKelurahan();

        $this->load->view('template/sidebaruser', $data);
        $this->load->view('template/headerUser', $data);
        $this->load->view('user/VIEW_Profile');
        $this->load->view('template/footerUser');
    }

    public function EditUser()
    {
        $this->data->UpdateUser();
    }
    // End Profile

    // Pesanan
    public function Pesanan()
    {
        $data['judul'] = 'Pesanan';
        $id = $this->uri->segment(3);
        $data['pesanan'] = $this->data->JoinTransaksi($id);
        $data['tbl'] = $this->data->tbl($id);
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['belum_bayar'] = $this->data->JumlahBelumBayar($id);
        $data['proses'] = $this->data->JumlahProses($id);
        $data['dikirim'] = $this->data->JumlahDikirim($id);
        $data['diterima'] = $this->data->JumlahDiterima($id);
        $data['ditolak'] = $this->data->JumlahDitolak($id);

        $data['no_transaksi'] = $this->input->post('no_transaksi');

        $this->load->view('template/sidebaruser', $data);
        $this->load->view('template/headerUser', $data);
        $this->load->view('user/Pesanan/VIEW_Pesanan', $data);
        $this->load->view('template/FooterUser');
    }
    // End Pesanan

    // Keranjang
    public function Keranjang($id_barang)
    {
        $data['judul'] = 'Keranjang';
        $id_transaksi = $this->input->post('id_transaksi');
        $data['id_transaksi'] = $id_transaksi;

        // $barang = $this->data->GetAllBarang($id_barang);
        // foreach ($barang as $r) {
        //     $stok = $r->stok;
        //     $id_barang = $r->id_barang;
        //     $data['stok'] = $stok;
        //     $data['id_barang'] = $id_barang;
        // }

        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('template/sidebaruser', $data);
        $this->load->view('template/headerUser', $data);
        $this->load->view('user/Pesanan/VIEW_Keranjang', $data);
        $this->load->view('template/FooterUser');
    }

    public function MasukanKeranjang()
    {
        $data = array(
            'id'      => $this->input->post('id_barang'),
            'qty'     => $this->input->post('qty'),
            'price'   => $this->input->post('harga'),
            'name'    => $this->input->post('nama_barang')
        );
        $this->cart->insert($data);
        $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Barang berhasil ditambahkan ke keranjang.</div>');
        redirect('CTR_Pelanggan');
        // print_r($this->cart->contents());
    }

    public function UpdateKeranjang()
    {
        $id_user = $this->uri->segment(3);
        $i = 1;
        foreach ($this->cart->contents() as $items) {
            $data = array(
                'rowid' => $items['rowid'],
                'qty' => $this->input->post('qty' . $i++),
            );
            $this->cart->update($data);
        }
        redirect('CTR_Pelanggan/Keranjang/' . $id_user);
    }

    public function DeleteKeranjang($rowid)
    {
        $id_user = $this->uri->segment(3);
        $data = array(
            'rowid' => $rowid,
            'qty' => 0
        );
        $this->cart->update($data);
        redirect('CTR_Pelanggan/Keranjang/' . $id_user);
    }
    // End Keranjang

    // Beli Sekarang
    public function Transaksi()
    {
        $notrans = $this->data->GetNoTransaksi();
        $jumlahdata = $this->data->GetNoTransaksi2();
        if ($notrans) {
            $nilaikode = substr($jumlahdata, 0, 1);
            $kode      = (int) $nilaikode;
            //setiap $kode ditambah 1
            $kode = $jumlahdata + 1;
            //angka 3 untuk menambahkan empat angka setelah B
            //dan angka 0 sebelum $kode
            $notrans = "TR" . str_pad($kode, 3, "0", STR_PAD_LEFT);
        } else {
            $notrans = "TR001";
            // date_default_timezone_set('Asia/Jakarta');
            // $tr = date('dmy') . $notrans;
        }

        $data = array(
            'no_transaksi' => $notrans,
            'id' => $this->input->post('id'),
            'total_harga' => $this->input->post('total_harga'),
            'pembayaran' => $this->input->post('pembayaran'),
            'pengiriman' => $this->input->post('pengiriman'),
            'status' => 'Belum Dibayar',
            // 'tgl_pemesanan' => date('Y-m-d H:i:s')
        );
        $this->db->insert('tbl_transaksi', $data);

        $id_transaksi = $this->db->insert_id('id_transaksi');

        $data = array(
            'id_transaksi' => $id_transaksi,
            'id_barang' => $this->input->post('id_barang'),
            'qty' => $this->input->post('qty')
        );
        $this->db->insert('dtl_transaksi', $data);

        $id_barang = $this->input->post('id_barang');
        $qty = $this->input->post('qty');
        $stok = $this->input->post('stok');
        $data = $stok - $qty;

        $this->db->set('stok', $data);
        $this->db->where('id_barang', $id_barang);
        $this->db->update('tbl_barang');
        $this->session->set_flashdata('msg', '<div class="alert alert-success text-center" role="alert">Pesanan Sudah Ditambah! Silahkan Untuk Melakukan Pembayaran!</div>');
        redirect('CTR_Pelanggan');
    }

    public function BayarSekarang()
    {
        $id_transaksi = $this->input->post('id_transaksi');
        $id = $this->input->post('id');

        $config['upload_path']          = './assets/img/bukti_transfer/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['max_size']             = 10000;
        $config['max_width']            = 10000;
        $config['max_height']           = 10000;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('bukti_transfer')) {
            echo "Gagal Tambah";
        } else {
            $tf = $this->upload->data();
            $bukti_transfer = $tf['file_name'];

            $data = array(
                'id_transaksi' => $id_transaksi,
                'bukti_transfer' => $bukti_transfer,
                'status' => 'Diproses',
                'tgl_pemesanan' => date('Y-m-d H:i:s')
            );

            $this->db->where('id_transaksi', $id_transaksi);
            $this->db->update('tbl_transaksi', $data);
            $this->session->set_flashdata('msg', '<div class="alert alert-success text-center" role="alert">Pesanan Diproses!</div>');
            redirect('CTR_Pelanggan/Pesanan/' . $id);
        }
    }
    // End Beli Sekarang

    // Batalkan
    public function Batalkan()
    {
        $id_transaksi = $this->input->post('id_transaksi');
        $id = $this->input->post('id');

        // $this->db->set($id_transaksi);
        // $this->db->where('id_transaksi', $id_transaksi);
        $this->db->delete('tbl_transaksi', ['id_transaksi' => $id_transaksi]);
        $this->session->set_flashdata('msg', '<div class="alert alert-danger text-center" role="alert">Pesanan Dibatalkan!</div>');
        redirect('CTR_Pelanggan/Pesanan/' . $id);
    }

    public function TransaksiLanjut()
    {
        // Beli Sekarang
        $notrans = $this->input->post('no_transaksi');
        $id = $this->input->post('id');
        $total_harga = $this->input->post('total_harga');
        $pembayaran = $this->input->post('pembayaran');
        $pengiriman = $this->input->post('pengiriman');

        $data = array(
            'no_transaksi' => $notrans,
            'id' => $id,
            'total_harga' => $total_harga,
            'pembayaran' => $pembayaran,
            'pengiriman' => $pengiriman,
            'status' => 'Belum Dibayar',
            // 'tgl_pemesanan' => date('Y-m-d H:i:s')
        );
        $this->db->insert('tbl_transaksi', $data);

        $id_transaksi = $this->db->insert_id('id_transaksi'); //insert last id
        $id_barang = $this->input->post('id_barang');
        $qty = $this->input->post('qty');

        $result = array();
        foreach ($id_barang as $key => $val) {
            $result[] = array(
                'id_transaksi' => $id_transaksi,
                'id_barang' => $id_barang[$key],
                'qty' => $qty[$key],
            );
        }
        $this->db->insert_batch('dtl_transaksi', $result);


        // $id_transaksi = $this->db->insert_id('id_transaksi');
        // $id_barang = $this->input->post('id_barang');
        // $qty = $this->input->post('qty');
        // $stok = $this->input->post('stok');
        // $data = $stok - $qty;

        // $this->db->set('stok', $data);
        // $this->db->where('id_barang', $id_barang);
        // $this->db->update('tbl_barang');
        $this->cart->destroy();
        $this->session->set_flashdata('msg', '<div class="alert alert-success text-center" role="alert">Pesanan Sudah Diterima! Harap Menunggu Informasi Kami!</div>');
        redirect('CTR_Pelanggan');
    }

    // History
    public function History()
    {
        $data['judul'] = 'History';
        $id = $this->uri->segment(3);
        $data['history'] = $this->data->JoinTransaksi($id);


        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('template/sidebaruser', $data);
        $this->load->view('template/headerUser', $data);
        $this->load->view('user/Pesanan/VIEW_History', $data);
        $this->load->view('template/FooterUser');
    }
    // End History

    // Services User
    public function ServicesU()
    {
        $data['judul'] = 'Halaman Services';
        $data['isiK'] = $this->data->GetAllDataK();

        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();


        $id_services = $this->input->post('id_services');
        $data['id_services'] = $id_services;

        $this->load->view('template/sidebaruser', $data);
        $this->load->view('template/headerUser', $data);
        $this->load->view('user/VIEW_Services', $data);
        $this->load->view('template/footerUser');
    }
    // End Services

    // Komputer User
    public function KomputerU()
    {
        $data['judul'] = 'Halaman Komputer';
        $data['isiK'] = $this->data->GetAllDataK();
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();


        $id_barang = $this->input->post('id_barang');
        $data['id_barang'] = $id_barang;

        $this->load->view('template/sidebaruser', $data);
        $this->load->view('template/headerUser', $data);
        $this->load->view('user/VIEW_Komputer', $data);
        $this->load->view('template/footerUser');
    }

    public function DetailKomputer()
    {
        $data['judul'] = 'Halaman Komputer';
        $id = $this->uri->segment(3);
        $data['isiK'] = $this->data->get_detailK($id);

        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();


        $id_barang = $this->input->post('id_barang');
        $data['id_barang'] = $id_barang;

        $this->load->view('template/sidebaruser', $data);
        $this->load->view('template/headerUser', $data);
        $this->load->view('user/detail/Detail_Komputer', $data);
        $this->load->view('template/footerUser');
    }
    // End Komputer

    // Laptop User
    public function LaptopU()
    {
        $data['judul'] = 'Halaman Laptop';
        $data['isiL'] = $this->data->GetAllDataL();
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();


        $this->load->view('template/sidebaruser', $data);
        $this->load->view('template/headerUser', $data);
        $this->load->view('user/VIEW_Laptop');
        $this->load->view('template/footerUser');
    }

    public function DetailLaptop()
    {
        $data['judul'] = 'Halaman Laptop';
        $id = $this->uri->segment(3);
        $data['isiL'] = $this->data->get_detailL($id);

        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();


        $id_barang = $this->input->post('id_barang');
        $data['id_barang'] = $id_barang;

        $this->load->view('template/sidebaruser', $data);
        $this->load->view('template/headerUser', $data);
        $this->load->view('user/detail/Detail_Laptop', $data);
        $this->load->view('template/footerUser');
    }
    // End Laptop

    // Printer User
    public function PrinterU()
    {
        $data['judul'] = 'Halaman Printer';
        $data['isiP'] = $this->data->GetAllDataP();
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();


        $this->load->view('template/sidebaruser', $data);
        $this->load->view('template/headerUser', $data);
        $this->load->view('user/VIEW_Printer');
        $this->load->view('template/footerUser');
    }

    public function DetailPrinter()
    {
        $data['judul'] = 'Halaman Printer';
        $id = $this->uri->segment(3);
        $data['isiP'] = $this->data->get_detailP($id);

        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();


        $id_barang = $this->input->post('id_barang');
        $data['id_barang'] = $id_barang;

        $this->load->view('template/sidebaruser', $data);
        $this->load->view('template/headerUser', $data);
        $this->load->view('user/detail/Detail_Printer', $data);
        $this->load->view('template/footerUser');
    }
    // End Printer

    // Barang Diterima
    public function BarangDiterima()
    {
        $id_transaksi = $this->input->post('id_transaksi');
        $id = $this->input->post('id');

        $this->db->set('status', 'Diterima');
        $this->db->set('tgl_diterima', date('Y-m-d H:i:s'));
        $this->db->where('id_transaksi', $id_transaksi);
        $this->db->update('tbl_transaksi');
        $this->session->set_flashdata('msg', '<div class="alert alert-danger text-center" role="alert">Pesanan Diterima!</div>');
        redirect('CTR_Pelanggan/Pesanan/' . $id);
    }
    // End Diterima
}
