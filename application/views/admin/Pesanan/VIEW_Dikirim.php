<div class="container mt-5">
    <div class="row">
        <div class="alert alert-dark mt-3 mb-4">
            <div class="row">
                <div class="col-sm-6">
                    <h4>Pesanan Dikirim</h4>
                </div>
            </div>
        </div>
        <?php echo $this->session->flashdata('msg'); ?>
        <?php
        $no = 1;
        foreach ($tbl as $rowi) if ($rowi->status == "Dikirim") { ?>
            <div class="card bg-white">
                <div class="card-body">
                    <div class="float-end">
                        <span class="fs-4 mb-5">Total Harga :
                            <b class="text-success">
                                <?php
                                $harga1 =  $rowi->total_harga;
                                $angka_format = number_format($harga1, 0, ",", ".");
                                echo "Rp. " . $angka_format;
                                ?>
                            </b><br>
                            <a href="" class="btn btn-secondary disabled float-end mt-3">Pesanan Sedang <?php echo $rowi->status ?> <i class="fas fa-truck-moving"></i></a>
                        </span>
                    </div>
                    <div class="mb-4">
                        <span class="fw-bold fs-4">No Transaksi : <?php echo $rowi->no_transaksi ?></span><br>
                        <span class="fs-6">Tangal Dikirim : <?php echo date('d F Y | H:i:s', strtotime($rowi->tgl_dikirim)) ?></span><br>
                        <span class="fs-6">Nama : <?php echo $rowi->username ?></span><br>
                        <span class="fs-6">No Telphone : <?php echo $rowi->no_telp ?></span><br>
                        <span class="fs-6">Alamat : <?php echo $rowi->alamat ?></span>
                    </div>
                    <table class="table table-bordered table-striped" width="100%" style="overflow: auto;">
                        <thead class="bg-dark text-white">
                            <tr class="text-center align-middle">
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
                                if ($row->status == 'Dikirim' && $rowi->id_transaksi == $row->id_transaksi) { ?>
                                <tr>
                                    <td class="text-center"><?php echo $no++ ?></td>
                                    <!-- <td><?php echo $row->username; ?></td>
                                        <td><?php echo $row->alamat; ?></td>
                                        <td><?php echo $row->no_telp; ?></td> -->
                                    <td><?php echo $row->nama_barang; ?></td>
                                    <td><?php $harga1 =  $row->harga;
                                        $angka_format = number_format($harga1, 0, ",", ".");
                                        echo "Rp.&nbsp;" . $angka_format; ?></td>
                                    <td class="text-center"><?php echo $row->qty; ?></td>
                                    <td><?php $harga1 =  $row->harga * $row->qty;
                                        $angka_format = number_format($harga1, 0, ",", ".");
                                        echo "Rp.&nbsp;" . $angka_format; ?></td>
                                    <!-- <td><?php echo $row->status; ?> <i class="fas fa-truck-moving"></i></td> -->
                                    <!-- <td style="text-align: center;">
                            <a href="" class="btn btn-success btn-sm">Kirim</a>
                        </td> -->
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table><br><br>
                    <hr size="5px">
                </div>
            </div>
        <?php } ?>
    </div>
</div>