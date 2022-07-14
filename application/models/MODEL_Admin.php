<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MODEL_Admin extends CI_Model
{
    //Home
    function GetAllDataH()
    {
        $this->db->select('*')->from('tbl_home');
        $rs = $this->db->get();
        return $rs->result();
    }

    function GetAllDataU()
    {
        $this->db->select('*')->from('user');
        $rs = $this->db->get();
        return $rs->result();
    }

    function InsertDataH()
    {
        $data = array(
            'id_home' => $this->input->post('id_home'),
            'tittle' => $this->input->post('tittle'),
            'info' => $this->input->post('info')
        );
        $this->db->insert('tbl_home', $data);
        $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Data Berhasil Ditambahkan!</div>');
        redirect('CTR_Admin');
    }

    function UpdateData()
    {
        $id = $this->input->post('id_home');
        $data = array(

            'tittle' => $this->input->post('tittle'),
            'info' => $this->input->post('info'),
        );

        $this->db->where('id_home', $id);
        $this->db->update('tbl_home', $data);
        $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Data Berhasil Diubah!</div>');
        redirect('CTR_Admin');
    }

    function DeleteData($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    //Info Start
    function GetAllDataI()
    {
        $this->db->select('*')->from('tbl_info');
        $rs = $this->db->get();
        return $rs->result();
    }

    function InsertDataI()
    {
        $config['upload_path']          = './assets/img/info/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['max_size']             = 10000;
        $config['max_width']            = 10000;
        $config['max_height']           = 10000;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('photo')) {
            echo "Gagal Tambah";
        } else {
            $photo = $this->upload->data();
            $photo = $photo['file_name'];

            $id_info = $this->input->post('id_info', true);
            $tittle = $this->input->post('tittle', true);
            $tgl_info = $this->input->post('tgl_info', true);
            $content_awal = $this->input->post('content_awal', true);
            $content_modal = $this->input->post('content_modal', true);

            $data = array(
                'id_info' => $id_info,
                'tittle' => $tittle,
                'tgl_info' => $tgl_info,
                'content_awal' => $content_awal,
                'content_modal' => $content_modal,
                'photo' => $photo
            );
            $this->db->insert('tbl_info', $data);
            $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Data Berhasil Ditambahkan!</div>');
            redirect('CTR_Admin/Information');
        }
    }

    function UpdateDataI()
    {
        $id = $this->input->post('id_info');
        $config['upload_path']          = './assets/img/info/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['max_size']             = 10000;
        $config['max_width']            = 10000;
        $config['max_height']           = 10000;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('photo')) {
            echo "Gagal Tambah";
        } else {
            $photo = $this->upload->data();
            $photo = $photo['file_name'];

            $id_info = $this->input->post('id_info', true);
            $tittle = $this->input->post('tittle', true);
            $tgl_info = $this->input->post('tgl_info', true);
            $content_awal = $this->input->post('content_awal', true);
            $content_modal = $this->input->post('content_modal', true);

            $data = array(
                'id_info' => $id_info,
                'tittle' => $tittle,
                'tgl_info' => $tgl_info,
                'content_awal' => $content_awal,
                'content_modal' => $content_modal,
                'photo' => $photo
            );

            $this->db->where('id_info', $id);
            $this->db->update('tbl_info', $data);
            $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Data Berhasil Diubah!</div>');
            redirect('CTR_Admin/Information');
        }
    }

    function DeleteDataI($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
    // End Information

    // Start About
    //About
    function GetAllDataA()
    {
        $this->db->select('*')->from('tbl_about');
        $rs = $this->db->get();
        return $rs->result();
    }

    function InsertDataA()
    {
        $data = array(
            'id_about' => $this->input->post('id_about'),
            'tittle' => $this->input->post('tittle'),
            'info' => $this->input->post('info')
        );
        $this->db->insert('tbl_about', $data);
        $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Data Berhasil Ditambahkan!</div>');
        redirect('CTR_Admin/About');
    }

    function UpdateDataA()
    {
        $id = $this->input->post('id_about');
        $data = array(
            'tittle' => $this->input->post('tittle'),
            'info' => $this->input->post('info')
        );

        $this->db->where('id_about', $id);
        $this->db->update('tbl_about', $data);
        $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Data Berhasil Diubah!</div>');
        redirect('CTR_Admin/About');
    }

    function DeleteDataA($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
    // End About

    // Start Visi
    function GetAllDataV()
    {
        $this->db->select('*')->from('tbl_visi');
        $rs = $this->db->get();
        return $rs = $this->db->get('tbl_visi')->result();
    }

    function InsertDataV()
    {
        $data = array(
            'id_visi' => $this->input->post('id_visi'),
            'tittle' => $this->input->post('tittle'),
            'visi' => $this->input->post('visi'),
            'misi' => $this->input->post('misi')
        );
        $this->db->insert('tbl_visi', $data);
        $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Data Berhasil Ditambahkan!</div>');
        redirect('CTR_Admin/Visi');
    }

    function UpdateDataV()
    {
        $id = $this->input->post('id_visi');
        $data = array(
            'tittle' => $this->input->post('tittle'),
            'visi' => $this->input->post('visi'),
            'misi' => $this->input->post('misi')
        );

        $this->db->where('id_visi', $id);
        $this->db->update('tbl_visi', $data);
        $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Data Berhasil Diubah!</div>');
        redirect('CTR_Admin/Visi');
    }

    function DeleteDataV($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
    // End Visi

    // Start Gallery
    function GetAllDataG()
    {
        $this->db->select('*')->from('tbl_gallery');
        $rs = $this->db->get();
        return $rs->result();
    }

    function InsertDataG()
    {
        $config['upload_path']          = './assets/img/gallery/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('photo')) {
            echo "Gagal Tambah";
        } else {
            $photo = $this->upload->data();
            $photo = $photo['file_name'];

            $config['image_library'] = 'gd2';
            $config['source_image'] = './assets/img/gallery/' . $photo;
            $config['create_thumb'] = false;
            $config['maintain_ratio'] = false;
            $config['quality'] = '100%';
            $config['width'] = 384;
            $config['height'] = 216;
            $config['new_image'] = './assets/img/gallery/' . $photo;
            $this->load->library('image_lib', $config);
            $this->image_lib->resize();

            $id_gallery = $this->input->post('id_gallery', true);

            $data = array(
                'id_gallery' => $id_gallery,
                'photo' => $photo
            );
            $this->db->insert('tbl_gallery', $data);
            $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Data Berhasil Ditambahkan!</div>');
            redirect('CTR_Admin/Gallery');
        }
    }

    function UpdateDataG()
    {

        $id = $this->input->post('id_gallery');
        $config['upload_path']          = './assets/img/gallery/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['max_size']             = 10000;
        $config['max_width']            = 10000;
        $config['max_height']           = 10000;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('photo')) {
            echo "Gagal Tambah";
        } else {
            $photo = $this->upload->data();
            $photo = $photo['file_name'];

            $id_gallery = $this->input->post('id_gallery', true);
            $data = array(
                'id_gallery' => $id_gallery,
                'photo' => $photo
            );

            $this->db->where('id_gallery', $id);
            $this->db->update('tbl_gallery', $data);
            $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Data Berhasil Diubah!</div>');
            redirect('CTR_Admin/Gallery');
        }
    }

    function GetDataG($id)
    {
        $this->db->select('*')->from('tbl_gallery')->where('id_gallery', $id);
        $rs = $this->db->get();
        return $rs->result();
    }

    function DeleteDataG($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
    // End Gallery

    // Start Contact
    function GetAllDataC()
    {
        $this->db->select('*')->from('tbl_contact');
        $rs = $this->db->get();
        return $rs->result();
    }

    function DeleteDataC($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
    // End Contact

    // Start Services
    function GetAllDataS()
    {
        $this->db->select('*')->from('tbl_services');
        $rs = $this->db->get();
        return $rs->result();
    }

    function UpdateDataS()
    {
        $id = $this->input->post('id_services');
        $data = array(

            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'no_telp' => $this->input->post('no_telp'),
            'alamat' => $this->input->post('alamat'),
            'nama_b' => $this->input->post('nama_b'),
            'jenis_b' => $this->input->post('jenis_b'),
            'merk_b' => $this->input->post('merk_b'),
            'pesan' => $this->input->post('pesan')
        );

        $this->db->where('id_services', $id);
        $this->db->update('tbl_services', $data);
        redirect('CTR_Admin/Service');
    }

    function DeleteDataS($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
    // End Services

    // Start Barang
    function GetAllBarang()
    {
        $this->db->select('*')->from('tbl_barang');
        $rs = $this->db->get();
        return $rs->result();
    }

    function InsertBarang()
    {
        $config['upload_path']          = './assets/img/barang/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['max_size']             = 10000;
        $config['max_width']            = 10000;
        $config['max_height']           = 10000;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('gambar')) {
            echo "Gagal Tambah";
        } else {
            $gambar = $this->upload->data();
            $gambar = $gambar['file_name'];

            $id_barang = $this->input->post('id_barang', true);
            $nama_barang = $this->input->post('nama_barang', true);
            $spek = $this->input->post('spek', true);
            $spesifikasi = $this->input->post('spesifikasi', true);
            $harga = $this->input->post('harga', true);
            $merek = $this->input->post('merek', true);
            $stok = $this->input->post('stok', true);
            $kondisi = $this->input->post('kondisi', true);
            $star = $this->input->post('star', true);
            $kategori = $this->input->post('kategori', true);

            $data = array(
                'id_barang' => $id_barang,
                'nama_barang' => $nama_barang,
                'spek' => $spek,
                'spesifikasi' => $spesifikasi,
                'harga' => $harga,
                'merek' => $merek,
                'stok' => $stok,
                'gambar' => $gambar,
                'kondisi' => $kondisi,
                'star' => $star,
                'kategori' => $kategori
            );
            $this->db->insert('tbl_barang', $data);
            $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Data Berhasil Ditambahkan!</div>');
            redirect('CTR_Admin/Barang');
        }
    }

    function UpdateBarang()
    {
        $id_barang = $this->input->post('id_barang');
        $nama_barang = $this->input->post('nama_barang');
        $spek = $this->input->post('spek');
        $spesifikasi = $this->input->post('spesifikasi');
        $harga = $this->input->post('harga');
        $merek = $this->input->post('merek');
        $stok = $this->input->post('stok');
        $kondisi = $this->input->post('kondisi');
        $star = $this->input->post('star');
        $kategori = $this->input->post('kategori');
        $old = $this->input->post('old');
        $gambar = $_FILES['gambar'];

        if ($gambar = NULL) {
            $gambar = $old;
        } else {
            $config['upload_path']          = './assets/img/barang/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg|jfif';
            $config['max_size']             = 10000;
            $config['max_width']            = 10000;
            $config['max_height']           = 10000;

            $this->load->library('upload', $config);
            if ($this->upload->do_upload('gambar')) {
                $gambar = $this->upload->data('file_name');
            } else {
                $gambar = $old;
            }
        }
        $data = array(
            'id_barang' => $id_barang,
            'nama_barang' => $nama_barang,
            'spek' => $spek,
            'spesifikasi' => $spesifikasi,
            'harga' => $harga,
            'merek' => $merek,
            'stok' => $stok,
            'gambar' => $gambar,
            'kondisi' => $kondisi,
            'star' => $star,
            'kategori' => $kategori,
        );

        $this->db->where('id_barang', $id_barang);
        $this->db->update('tbl_barang', $data);
        $this->session->set_flashdata('msg', '<div class="alert alert-success text-center" role="alert">Data Berhasil Diubah!</div>');
        redirect('CTR_Admin/Barang');
    }

    function DeleteBarang($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
    // End Komputer

    // // Start Laptop
    // function GetAllDataL()
    // {
    //     $this->db->select('*')->from('tbl_laptop');
    //     $rs = $this->db->get();
    //     return $rs->result();
    // }

    // function InsertDataL()
    // {
    //     $config['upload_path']          = './assets/img/laptop/';
    //     $config['allowed_types']        = 'gif|jpg|png|jpeg';
    //     $config['max_size']             = 10000;
    //     $config['max_width']            = 10000;
    //     $config['max_height']           = 10000;

    //     $this->load->library('upload', $config);

    //     if (!$this->upload->do_upload('gambarL')) {
    //         echo "Gagal Tambah";
    //     } else {
    //         $gambarL = $this->upload->data();
    //         $gambarL = $gambarL['file_name'];

    //         $id_laptop = $this->input->post('id_laptop', true);
    //         $tittleL = $this->input->post('tittleL', true);
    //         $spekL = $this->input->post('spekL', true);
    //         $spesifikasiL = $this->input->post('spesifikasiL', true);
    //         $hargaL = $this->input->post('hargaL', true);
    //         $jenisL = $this->input->post('jenisL', true);

    //         $data = array(
    //             'id_laptop' => $id_laptop,
    //             'tittleL' => $tittleL,
    //             'spekL' => $spekL,
    //             'spesifikasiL' => $spesifikasiL,
    //             'hargaL' => $hargaL,
    //             'gambarL' => $gambarL,
    //             'jenisL' => $jenisL
    //         );
    //         $this->db->insert('tbl_laptop', $data);
    //         redirect('CTR_Admin?Laptop');
    //     }
    // }

    // function UpdateDataL()
    // {
    //     $id_laptop = $this->input->post('id_laptop');
    //     $tittleL = $this->input->post('tittleL');
    //     $spekL = $this->input->post('spekL');
    //     $spesifikasiL = $this->input->post('spesifikasiL');
    //     $hargaL = $this->input->post('hargaL');
    //     $merekL = $this->input->post('merekL');
    //     $stokL = $this->input->post('stokL');
    //     $jenisL = $this->input->post('jenisL');
    //     $oldL = $this->input->post('oldL');
    //     $gambarL = $_FILES['gambarL'];

    //     if ($gambarL = NULL) {
    //         $gambarL = $oldL;
    //     } else {
    //         $config['upload_path']          = './assets/img/laptop/';
    //         $config['allowed_types']        = 'gif|jpg|png|jpeg|jfif';
    //         $config['max_size']             = 10000;
    //         $config['max_width']            = 10000;
    //         $config['max_height']           = 10000;

    //         $this->load->library('upload', $config);
    //         if ($this->upload->do_upload('gambarL')) {
    //             $gambarL = $this->upload->data('file_name');
    //         } else {
    //             $gambarL = $oldL;
    //         }
    //     }
    //     $data = array(
    //         'id_laptop' => $id_laptop,
    //         'tittleL' => $tittleL,
    //         'spekL' => $spekL,
    //         'spesifikasiL' => $spesifikasiL,
    //         'hargaL' => $hargaL,
    //         'merekL' => $merekL,
    //         'stokL' => $stokL,
    //         'gambarL' => $gambarL,
    //         'jenisL' => $jenisL,
    //     );

    //     $this->db->where('id_laptop', $id_laptop);
    //     $this->db->update('tbl_laptop', $data);
    //     $this->session->set_flashdata('msg', '<div class="alert alert-success text-center" role="alert">Data Berhasil Diubah!</div>');
    //     redirect('CTR_Admin/Laptop');
    // }

    // function DeleteDataL($where, $table)
    // {
    //     $this->db->where($where);
    //     $this->db->delete($table);
    // }
    // // End Laptop

    // // Start Printer
    // function GetAllDataP()
    // {
    //     $this->db->select('*')->from('tbl_printer');
    //     $rs = $this->db->get();
    //     return $rs->result();
    // }

    // function InsertDataP()
    // {
    //     $config['upload_path']          = './assets/img/printer/';
    //     $config['allowed_types']        = 'gif|jpg|png|jpeg';
    //     $config['max_size']             = 10000;
    //     $config['max_width']            = 10000;
    //     $config['max_height']           = 10000;

    //     $this->load->library('upload', $config);

    //     if (!$this->upload->do_upload('gambarP')) {
    //         echo "Gagal Tambah";
    //     } else {
    //         $gambarP = $this->upload->data();
    //         $gambarP = $gambarP['file_name'];

    //         $id_printer = $this->input->post('id_printer', true);
    //         $tittleP = $this->input->post('tittleP', true);
    //         $spekP = $this->input->post('spekP', true);
    //         $spesifikasiP = $this->input->post('spesifikasiP', true);
    //         $hargaP = $this->input->post('hargaP', true);
    //         $jenisP = $this->input->post('jenisP', true);

    //         $data = array(
    //             'id_printer' => $id_printer,
    //             'tittleP' => $tittleP,
    //             'spekP' => $spekP,
    //             'spesifikasiP' => $spesifikasiP,
    //             'hargaP' => $hargaP,
    //             'gambarP' => $gambarP,
    //             'jenisP' => $jenisP
    //         );
    //         $this->db->insert('tbl_printer', $data);
    //         redirect('CTR_Admin/Printer');
    //     }
    // }

    // function UpdateDataP()
    // {
    //     $id_printer = $this->input->post('id_printer');
    //     $tittleP = $this->input->post('tittleP');
    //     $spekP = $this->input->post('spekP');
    //     $spesifikasiP = $this->input->post('spesifikasiP');
    //     $hargaP = $this->input->post('hargaP');
    //     $merekP = $this->input->post('merekP');
    //     $stokP = $this->input->post('stokP');
    //     $jenisP = $this->input->post('jenisP');
    //     $oldP = $this->input->post('oldP');
    //     $gambarP = $_FILES['gambarP'];

    //     if ($gambarP = NULL) {
    //         $gambarP = $oldP;
    //     } else {
    //         $config['upload_path']          = './assets/img/printer/';
    //         $config['allowed_types']        = 'gif|jpg|png|jpeg|jfif';
    //         $config['max_size']             = 10000;
    //         $config['max_width']            = 10000;
    //         $config['max_height']           = 10000;

    //         $this->load->library('upload', $config);
    //         if ($this->upload->do_upload('gambarP')) {
    //             $gambarP = $this->upload->data('file_name');
    //         } else {
    //             $gambarP = $oldP;
    //         }
    //     }
    //     $data = array(
    //         'id_printer' => $id_printer,
    //         'tittleP' => $tittleP,
    //         'spekP' => $spekP,
    //         'spesifikasiP' => $spesifikasiP,
    //         'hargaP' => $hargaP,
    //         'merekP' => $merekP,
    //         'stokP' => $stokP,
    //         'gambarP' => $gambarP,
    //         'jenisP' => $jenisP,
    //     );

    //     $this->db->where('id_printer', $id_printer);
    //     $this->db->update('tbl_printer', $data);
    //     $this->session->set_flashdata('msg', '<div class="alert alert-success text-center" role="alert">Data Berhasil Diubah!</div>');
    //     redirect('CTR_Admin/Printer');
    // }

    // function DeleteDataP($where, $table)
    // {
    //     $this->db->where($where);
    //     $this->db->delete($table);
    // }
    // // End Printer


    // Pesanan
    function JoinTransaksi()
    {
        // $id_wawancara = $this->input->post('id_wawancara');
        $this->db->select('*');
        $this->db->from('dtl_transaksi');
        $this->db->join('tbl_transaksi', 'dtl_transaksi.id_transaksi = tbl_transaksi.id_transaksi');
        $this->db->join('tbl_barang', 'dtl_transaksi.id_barang = tbl_barang.id_barang');;
        $this->db->join('user', 'tbl_transaksi.id = user.id');
        $query = $this->db->get();
        return $query->result();
    }

    function JoinTransaksiID($id_transaksi)
    {
        $this->db->select('*');
        $this->db->from('dtl_transaksi a');
        $this->db->join('tbl_transaksi b', 'a.id_transaksi = b.id_transaksi');
        $this->db->join('tbl_barang c', 'a.id_barang = c.id_barang');;
        $this->db->join('user d', 'b.id = d.id');
        $this->db->where('b.id_transaksi', $id_transaksi);
        $query = $this->db->get();
        return $query->result();
    }

    function tbl()
    {
        $this->db->select('*')->from('tbl_transaksi a');
        $this->db->join('user b', 'a.id = b.id');
        $rs = $this->db->get();
        return $rs->result();
    }

    function tblID($id_transaksi)
    {
        $this->db->select('*')->from('tbl_transaksi a');
        $this->db->join('user b', 'a.id = b.id');
        $this->db->where('a.id_transaksi', $id_transaksi);
        $rs = $this->db->get();
        return $rs->result();
    }

    function periode($date1, $date2)
    {
        $this->db->select('*');
        $this->db->from('dtl_transaksi');
        $this->db->join('tbl_transaksi', 'dtl_transaksi.id_transaksi = tbl_transaksi.id_transaksi');
        $this->db->join('tbl_barang', 'dtl_transaksi.id_barang = tbl_barang.id_barang');;
        $this->db->join('user', 'tbl_transaksi.id = user.id');
        $this->db->where('tgl_diterima >=', $date1);
        $this->db->where('tgl_diterima <=', $date2);
        $query = $this->db->get();
        return $query->result();
    }

    function tbl1($date1, $date2)
    {
        $this->db->select('*')->from('tbl_transaksi');
        $this->db->join('user', 'tbl_transaksi.id = user.id');
        $this->db->where('tgl_diterima >=', $date1);
        $this->db->where('tgl_diterima <=', $date2);
        $rs = $this->db->get();
        return $rs->result();
    }
    // public function GetDataPesanan()
    // {
    //     $this->db->select('*')->from('tbl_transaksi');
    //     // $this->db->join('user', 'user.id = tbl_transaksi.no_transaksi', 'LEFT');
    //     $rs = $this->db->get();
    //     return $rs->result();
    // }
}
