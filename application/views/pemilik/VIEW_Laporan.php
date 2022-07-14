<div class="container mt-5">
    <div class="row">
        <div class="alert alert-success mt-3">
            <div class="row">
                <div class="col-sm-6">
                    <h4>Home</h4>
                </div>
            </div>
        </div>
        <hr style="border: 3px;">
        <table id="example2" class="table table-bordered table-striped " width="100%">
            <thead class="bg-dark text-white">
                <tr class="text-center">
                    <th>No</th>
                    <th>No Transaksi</th>
                    <th>Pembeli</th>
                    <th>Status</th>
                    <th>Alamat</th>
                    <th>No Telephone</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                <?php $no = 1;
                foreach ($laporan as $row) if ($row->status == 'Diterima') { ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $row->no_transaksi; ?></td>
                        <td><?php echo $row->username; ?></td>
                        <td><?php echo $row->status; ?></td>
                        <td><?php echo $row->alamat; ?></td>
                        <td><?php echo $row->no_telp; ?></td>
                        <td class="text-center">
                            <a href="#laporanModal<?php echo $row->id_transaksi ?>" data-toggle="modal" data-target="#laporanModal<?php echo $row->id_transaksi ?>" class="btn btn-info btn-sm"><i class="fas fa-eye"></i></a>
                            <!-- <a href="" class="btn btn-warning btn-sm"><i class="fas fa-trash"></i></a> -->
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>

<!-- Modal Laporan -->
<?php foreach ($laporan as $row) { ?>
    <div class="modal hide fade" id="laporanModal<?php echo $row->id_transaksi ?>" tabindex="-1" aria-labelledby="laporanModal<?php echo $row->id_transaksi ?>" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">No Transaksi: <?php echo $row->no_transaksi ?></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="card mb-3">
                        <div class="card-header">
                            <span>
                                <h3>Customer</h3>
                            </span>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3 mb-2">
                                    <h5>Nama Pembeli</h5>
                                    <?php echo $row->username ?>
                                </div>
                                <div class="col-sm-3">
                                    <h5>Alamat</h5>
                                    <?php echo $row->alamat ?>
                                </div>
                                <div class="col-sm-3">
                                    <h5>No Telephone</h5>
                                    <?php echo $row->no_telp ?>
                                </div>
                                <div class="col-sm-3">
                                    <h5>Status</h5>
                                    <?php echo $row->status ?>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-sm-3">
                                    <h5>Tanggal Pemesanan</h5>
                                    <?php echo $row->tgl_pemesanan ?>
                                </div>
                                <div class="col-sm-3">
                                    <h5>Tanggal Diterima</h5>
                                    <?php echo $row->tgl_diterima ?>
                                </div>
                                <div class="col-sm-5">
                                    <h5>Total Belanja Kesuluruhan</h5>
                                    <a class="btn btn-success disabled">
                                        <?php $harga1 =  $row->total_harga;
                                        $angka_format = number_format($harga1, 0, ",", ".");
                                        echo "Rp. " . $angka_format; ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php $no = 1;
                    foreach ($laporan_detail as $rowi) if ($row->id_transaksi == $rowi->id_transaksi) { ?>
                        <div class="card-header bg-secondary text-white ">
                            <h3>Pesanan <?php echo $no++ ?></h3>
                        </div>
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-3 mb-2">
                                        <h5>Nama Barang</h5>
                                        <?php echo $rowi->nama_barang ?>
                                    </div>
                                    <div class="col-sm-3">
                                        <h5>Harga</h5>
                                        <?php $harga1 =  $rowi->harga;
                                        $angka_format = number_format($harga1, 0, ",", ".");
                                        echo "Rp. " . $angka_format; ?>
                                    </div>
                                    <div class="col-sm-3">
                                        <h5>Qty</h5>
                                        <?php echo $rowi->qty ?>
                                    </div>
                                    <div class="col-sm-3">
                                        <h5>Total Harga x Qty</h5>
                                        <?php $harga1 =  $rowi->harga * $rowi->qty;
                                        $angka_format = number_format($harga1, 0, ",", ".");
                                        echo "Rp. " . $angka_format; ?>
                                    </div>
                                    <div class="col-sm-3">
                                        <h5>Foto Barang</h5>
                                        <img src="<?php echo base_url('assets/img/barang/' . $rowi->gambar) ?>" class="img-thumbnail" width="200px" height="auto" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    <div class="modal-footer">
                        <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
</div>