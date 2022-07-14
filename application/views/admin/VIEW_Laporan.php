<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Penjualan Proton Techindo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link href="<?php echo base_url(); ?>assets/css/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <link rel="shortcut icon" href="<?= base_url('assets/img/logo/proton.png') ?>" />
</head>
<style>
    body h1 {
        font-family: sans-serif;
    }

    .page-break {
        width: 100%;
        height: 90%;
    }
</style>

<body>
    <!-- <div class="container"> -->
    <!-- <img style="float: left; width: 100px;" src="http://www.domain.com/assets/img/logo/proton.png" alt=""> -->
    <div class="row">
        <div class="col-sm-12">
            <?php
            $no = 1;
            foreach ($tbl as $rowi) if ($rowi->status == "Diterima") { ?>
                <div class="page-break">
                    <img style="float: left; width: 100px;" src="<?= base_url('assets/img/logo/proton.png') ?>" alt="">
                    <div class="text-center">
                        <h1>CV Proton Techindo</h1>
                        Jl. Prof Moch Yamin No. 126 Rt 001 Rw 006,
                        Duren jaya Bekasi Timur,
                        Kota&nbsp;Bekasi&nbsp;Jawa&nbsp;Barat
                    </div>
                    <hr style="border: 2px;">
                    <div class="card bg-grey mb-5">
                        <div class="card-body">
                            <div>
                                <span class=" bg-green float-right">Total Harga :
                                    <b class="fs-4 mb-5">
                                        <?php
                                        $harga1 =  $rowi->total_harga;
                                        $angka_format = number_format($harga1, 0, ",", ".");
                                        echo "Rp. " . $angka_format;
                                        ?>
                                    </b><br>
                                    <a href="" class="btn btn-success disabled float-end mt-3">Pesanan <?php echo $rowi->status ?> <i class="fas fa-check "></i></a>
                                </span>
                            </div>
                            <div class="mb-4">
                                <span class="fw-bold fs-4" style="font-size: 25px; font-weight: bold;">No Transaksi : <?php echo $rowi->no_transaksi ?></span><br>
                                <span>
                                    Tangal Pemesanan : <?php echo date('d F Y H:i:s', strtotime($rowi->tgl_pemesanan)) ?>
                                </span><br>
                                <span>
                                    Tangal Diterima : <?php echo date('d F Y H:i:s', strtotime($rowi->tgl_diterima)) ?>
                                </span><br><br>
                                <span class="fs-6">Nama : <?php echo $rowi->username ?></span><br>
                                <span class="fs-6">No Telphone : <?php echo $rowi->no_telp ?></span><br>
                                <span class="fs-6">Alamat : <?php echo $rowi->alamat ?></span>
                            </div>
                            <table class="table table-bordered table-striped" width="100%">
                                <thead class="bg-dark text-white align-middle" style="background-color: grey;">
                                    <tr class=" text-center">
                                        <th>No</th>
                                        <!-- <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>No Telp</th> -->
                                        <th>Barang yang&nbsp;dipesan</th>
                                        <th>Harga</th>
                                        <th>Qty</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php $no = 1;
                                    foreach ($isi as $row)
                                        if ($row->status == 'Diterima' && $rowi->id_transaksi == $row->id_transaksi) { ?>
                                        <tr>
                                            <td align="center"><?php echo $no++ ?></td>
                                            <td><?php echo $row->nama_barang; ?></td>
                                            <td><?php $harga1 =  $row->harga;
                                                $angka_format = number_format($harga1, 0, ",", ".");
                                                echo "Rp.&nbsp;" . $angka_format; ?></td>
                                            <td align="center"><?php echo $row->qty; ?></td>
                                            <td><?php $harga1 =  $row->harga * $row->qty;
                                                $angka_format = number_format($harga1, 0, ",", ".");
                                                echo "Rp.&nbsp;" . $angka_format; ?></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- <hr size="3px" style="border: dashed; margin-bottom: 5rem;"> -->
            <?php } ?>
        </div>
    </div>
    <!-- </div> -->
</body>

</html>