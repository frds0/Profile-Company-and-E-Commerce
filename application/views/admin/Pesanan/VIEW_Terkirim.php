<div class="container mt-5">
    <div class="row">
        <div class="alert alert-dark mt-3 mb-4">
            <div class="row">
                <div class="col-sm-6">
                    <h4>Terkirim</h4>
                </div>
            </div>
        </div>
        <form action="<?php echo site_url('CTR_Admin/Tampilkan') ?>" method="POST">
            <div class="row mb-3">
                <div class="col-sm-3">
                    <label>Tanggal Mulai</label>
                    <input type="date" class="form-control" name="date1">
                </div>
                <div class="col-sm-3">
                    <label>Tanggal Akhir</label>
                    <input type="date" class="form-control" name="date2">
                </div>
                <div class="col-sm-3"><br>
                    <button type="submit" class="btn btn-primary">Tampilkan</button>
                </div>
            </div>
        </form>
        <form action="<?php echo site_url('Laporan') ?>" method="POST">
            <input type="hidden" value="<?= $date1 ?>" class="form-control" name="date1">
            <input type="hidden" value="<?= $date2 ?>" class="form-control" name="date2">
            <div class="row mb-3">
                <div class="col-sm-12 float-end">
                    <button type="submit" class="btn btn-warning"><i class="fas fa-print"></i> Print Laporan</button>
                </div>
            </div>
        </form>
        <div class="card bg-white">
            <div class="card-body">
                <?php echo $this->session->flashdata('msg'); ?>
                <?php
                $no = 1;
                foreach ($tbl as $rowi) if ($rowi->status == "Diterima") { ?>
                    <div class="col-sm-12">
                        <div class="float-end">
                            <span class="fs-4 mb-5">Total Harga :
                                <b class="text-success">
                                    <?php
                                    $harga1 =  $rowi->total_harga;
                                    $angka_format = number_format($harga1, 0, ",", ".");
                                    echo "Rp. " . $angka_format;
                                    ?>
                                </b><br>
                                <a href="" class="btn btn-success disabled float-end mt-3">Pesanan <?php echo $rowi->status ?> <i class="fas fa-check "></i></a><br>
                                <a href="#printModal<?php echo $rowi->id_transaksi ?>" data-toggle="modal" data-target="#printModal<?php echo $rowi->id_transaksi ?>" class="btn btn-warning float-end mt-3"><i class="fas fa-print "></i> Print Laporan <?php echo $rowi->no_transaksi ?></a>
                            </span><br><br>
                        </div>
                        <div class="mb-4">
                            <span class="fw-bold fs-4">No Transaksi : <?php echo $rowi->no_transaksi ?></span><br>
                            <span class="fs-6">Tanggal Diterima : <?php echo date('d F Y | H:i:s', strtotime($rowi->tgl_diterima)) ?></span><br>
                            <span class="fs-6">Nama : <?php echo $rowi->username ?></span><br>
                            <span class="fs-6">No Telphone : <?php echo $rowi->no_telp ?></span><br>
                            <span class="fs-6">Alamat : <?php echo $rowi->alamat ?></span>
                        </div>
                        <table class="table table-bordered table-striped" width="100%">
                            <thead class="bg-dark text-white align-middle">
                                <tr class="text-center">
                                    <th scope="col">No</th>
                                    <th scope="col">Nama Barang</th>
                                    <th scope="col">Harga</th>
                                    <th scope="col">Qty</th>
                                    <th scope="col">Total</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php $no = 1;
                                foreach ($isi as $row)
                                    if ($row->status == 'Diterima' && $rowi->id_transaksi == $row->id_transaksi) { ?>
                                    <tr>
                                        <td class="text-center"><?php echo $no++ ?></td>
                                        <td><?php echo $row->nama_barang; ?></td>
                                        <td><?php $harga1 =  $row->harga;
                                            $angka_format = number_format($harga1, 0, ",", ".");
                                            echo "Rp.&nbsp;" . $angka_format; ?></td>
                                        <td class="text-center"><?php echo $row->qty; ?></td>
                                        <td><?php $harga1 =  $row->harga * $row->qty;
                                            $angka_format = number_format($harga1, 0, ",", ".");
                                            echo "Rp.&nbsp;" . $angka_format; ?></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table><br><br>
                        <hr size="5px">
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<?php foreach ($tbl as $row) { ?>
    <div class="modal fade" id="printModal<?php echo $row->id_transaksi ?>" tabindex="-1" aria-labelledby="printModalLabel<?php echo $row->id_transaksi ?>" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-success">Cetak Transaksi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?php echo site_url('Laporan/PrintID/' . $row->id_transaksi) ?>" method="POST">
                    <div class="modal-body">
                        Cetak Transaksi <strong><?php echo $row->no_transaksi ?></strong> ?
                        <input type="hidden" name="id_transaksi" value="<?php echo $row->id_transaksi ?>">
                    </div>
                    <div class="mb-4 mt-2 text-center">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                        <button type="submit" class="btn btn-success">Cetak</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php } ?>