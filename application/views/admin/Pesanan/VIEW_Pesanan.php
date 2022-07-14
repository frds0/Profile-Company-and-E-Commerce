<div class="container mt-5">
    <div class="row">
        <div class="alert alert-dark mt-3 mb-4">
            <div class="row">
                <div class="col-sm-6">
                    <h4>Pesanan</h4>
                </div>
            </div>
        </div>
        <?php echo $this->session->flashdata('msg'); ?>
        <?php
        $no = 1;
        foreach ($tbl as $rowi) if ($rowi->status == "Diproses") { ?>
            <div class="card bg-white">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-7">
                            <div class="mb-4">
                                <span class="fw-bold fs-4">No Transaksi : <?php echo $rowi->no_transaksi ?></span><br>
                                <span class="fs-6">Tangal Pemesanan : <?php echo date('d F Y | H:i:s', strtotime($rowi->tgl_pemesanan)) ?></span><br>
                                <span class="fs-6">Nama : <?php echo $rowi->username ?></span><br>
                                <span class="fs-6">No Telphone : <?php echo $rowi->no_telp ?></span><br>
                                <span class="fs-6">Alamat : <?php echo $rowi->alamat ?></span>
                            </div>
                        </div>
                        <div class="col-sm-5 text-end">
                            <h6 class="fs-4 mb-4">Total Harga :
                                <b class="text-success">
                                    <?php
                                    $harga1 =  $rowi->total_harga;
                                    $angka_format = number_format($harga1, 0, ",", ".");
                                    echo "Rp. " . $angka_format;
                                    ?>
                                </b>
                            </h6>
                            <h6 class="mb-4">
                                <a href="#tolakModal<?php echo $rowi->id_transaksi ?>" data-toggle="modal" data-target="#tolakModal<?php echo $rowi->id_transaksi ?>" class="btn btn-danger">Tolak <i class="fas fa-times"></i></a>
                                <a href="#kirimModal<?php echo $rowi->id_transaksi ?>" data-toggle="modal" data-target="#kirimModal<?php echo $rowi->id_transaksi ?>" class="btn btn-success">Kirim <i class="fas fa-arrow-right"></i></a>
                            </h6>
                            <h6 class="">
                                <a href="" class="text-dark" data-toggle="modal" data-target="#exampleModal<?php echo $rowi->id_transaksi ?>">Lihat Bukti Transfer</a>
                            </h6>
                        </div>
                    </div>
                </div>
                <table class="table table-bordered table-striped mb-5" width="100%">
                    <thead class="bg-dark text-white align-middle">
                        <tr class="text-center">
                            <th>No</th>
                            <!-- <th>Nama</th>
                            <th>Alamat</th>
                            <th>No Telp</th> -->
                            <th>Nama Barang</th>
                            <th>Harga</th>
                            <th>Qty</th>
                            <th>Total</th>
                            <!-- <th>Status</th> -->
                            <!-- <th>Action</th> -->
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($isi as $row)
                            if ($row->status == 'Diproses' && $rowi->id_transaksi == $row->id_transaksi) { ?>
                            <tr>
                                <td class="text-center"><?php echo $no++ ?></td>
                                <!-- <td><?php echo $row->username; ?></td>
                                <td><?php echo $row->alamat; ?></td>
                                <td><?php echo $row->no_telp; ?></td> -->
                                <td><?php echo $row->nama_barang; ?></td>
                                <td>
                                    <?php $harga1 =  $row->harga;
                                    $angka_format = number_format($harga1, 0, ",", ".");
                                    echo "Rp.&nbsp;" . $angka_format; ?></td>
                                <td class="text-center">
                                    <?php echo $row->qty; ?></td>
                                <td><?php $harga1 =  $row->harga * $row->qty;
                                    $angka_format = number_format($harga1, 0, ",", ".");
                                    echo "Rp.&nbsp;" . $angka_format; ?></td>
                                <!-- <td class="text-center">
                                    <?php echo $row->status; ?><i class="fas fa-clock text-warning"></i>
                                </td> -->
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
<!-- Modal Kirim -->
<?php foreach ($isi as $row) { ?>
    <div class="modal fade" id="kirimModal<?php echo $row->id_transaksi ?>" tabindex="-1" aria-labelledby="kirimModalLabel<?php echo $row->id_transaksi ?>" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-success">Pesanan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?php echo site_url('CTR_Admin/KirimPesanan/' . $id_transaksi) ?>" method="POST">
                    <div class="modal-body">
                        Kirim Pesanan <strong><?php echo $row->username ?></strong> ?
                        <input type="hidden" name="id_transaksi" value="<?php echo $row->id_transaksi ?>">
                    </div>
                    <div class="mb-4 mt-2 text-center">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                        <button type="submit" class="btn btn-success">Yes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php } ?>
<!-- Modal Tolak -->
<?php foreach ($isi as $row) { ?>
    <div class="modal fade" id="tolakModal<?php echo $row->id_transaksi ?>" tabindex="-1" aria-labelledby="tolakModalLabel<?php echo $row->id_transaksi ?>" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-danger">Pesanan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?php echo site_url('CTR_Admin/TolakPesanan/' . $id_transaksi) ?>" method="POST">
                    <div class="modal-body">
                        Tolak Pesanan <strong><?php echo $row->username ?></strong> ?
                        <input type="hidden" name="id_transaksi" value="<?php echo $row->id_transaksi ?>">
                    </div>
                    <div class="mb-4 mt-2 text-center">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                        <button type="submit" class="btn btn-danger">Yes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php } ?>
<!-- Modal Lihat Transfer -->
<?php foreach ($isi as $row) { ?>
    <div class="modal fade" id="exampleModal<?php echo $row->id_transaksi ?>" tabindex="-1" aria-labelledby="exampleModalLabel<?php echo $row->id_transaksi ?>" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" align="center">
                    <img src="<?php echo base_url('assets/img/bukti_transfer/' . $row->bukti_transfer) ?>" class="img-thumbnail" width="400px">
                    <!-- <input type="text" value="<?php echo $row->bukti_transfer ?>"> -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
<?php } ?>