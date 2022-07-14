<div class="container-fluid">
    <div class="card">
        <div class="container">
            <h1>Proton Store</h1>
            <div class="float-end mb-3">
                <span><a href="#" class="btn btn-success disabled btn-sm"><i class="fas fa-check"></i></a> Sudah Diterima</span>
            </div>
            <!-- <div class="float-end mb-2">
                <span><a href="#" class="btn btn-danger disabled btn-sm"><i class="fas fa-times"></i></a> Belum Diterima</span>&nbsp;
            </div> -->
            <?php echo $this->session->flashdata('msg'); ?>
        </div>
        <div class="container-fluid">
            <div class="card mb-3">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card card-dark card-tabs">
                            <div class="card-header p-0 pt-1 bg-gray-200 fw-bold">
                                <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="custom-tabs-one-settings-tab" data-toggle="pill" href="#custom-tabs-one-settings" role="tab" aria-controls="custom-tabs-one-settings" aria-selected="false">Belum Dibayar <span class="badge badge-info"><?php echo $belum_bayar ?></span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="custom-tabs-one-home-tab" data-toggle="pill" href="#custom-tabs-one-home" role="tab" aria-controls="custom-tabs-one-home" aria-selected="false">Pesanan Sedang Diproses <span class="badge badge-info"><?php echo $proses ?></span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="custom-tabs-one-profile-tab" data-toggle="pill" href="#custom-tabs-one-profile" role="tab" aria-controls="custom-tabs-one-profile" aria-selected="false">Pesanan Dikirim <span class="badge badge-info"><?php echo $dikirim ?></span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="custom-tabs-one-messages-tab" data-toggle="pill" href="#custom-tabs-one-messages" role="tab" aria-controls="custom-tabs-one-messages" aria-selected="false">Pesanan Selesai <span class="badge badge-info"><?php echo $diterima ?></span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="custom-tabs-two-messages-tab" data-toggle="pill" href="#custom-tabs-two-messages" role="tab" aria-controls="custom-tabs-two-messages" aria-selected="false">Pesanan Ditolak <span class="badge badge-info"><?php echo $ditolak ?></span></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body" style="overflow: auto;">
                                <div class="tab-content" id="custom-tabs-zero-tabContent">
                                    <div class="tab-pane fade show active" id="custom-tabs-one-settings" role="tabpanel" aria-labelledby="custom-tabs-one-settings-tab">
                                        <?php
                                        $no = 1;
                                        foreach ($tbl as $rowi) if ($rowi->status == "Belum Dibayar") { ?>
                                            <!-- <span class="fw-bold fs-4">No Transaksi : <?php echo $rowi->no_transaksi ?></span> -->
                                            <span class="fs-4">Kirim Ke Rekening :
                                                <?php if ($rowi->pembayaran == 'BCA') { ?>
                                                    <b>4960380971</b> (<?php echo $rowi->pembayaran ?>)
                                                <?php } elseif ($rowi->pembayaran == 'Mandiri') { ?>
                                                    <b>01768730120310</b> (<?php echo $rowi->pembayaran ?>)
                                                <?php } ?>
                                            </span>
                                            <span class="float-end fs-4 mb-3">Total Harga :
                                                <b class="text-success">
                                                    <?php
                                                    $harga1 =  $rowi->total_harga;
                                                    $angka_format = number_format($harga1, 0, ",", ".");
                                                    echo "Rp. " . $angka_format;
                                                    ?>
                                                </b><br>
                                                <span class="float-end">
                                                    <a href="#batalModal<?php echo $rowi->id_transaksi ?>" data-toggle="modal" data-target="#batalModal<?php echo $rowi->id_transaksi ?>" class="btn btn-danger btn-sm "><i class="fas fa-times"></i> Batalkan</a>
                                                </span>
                                                <span class="float-end mr-3">
                                                    <a href="#bayarModal<?php echo $rowi->id_transaksi ?>" data-toggle="modal" data-target="#bayarModal<?php echo $rowi->id_transaksi ?>" class="btn btn-success btn-sm "><i class="fas fa-wallet"></i> Bayar Sekarang</a>
                                                </span>
                                            </span>
                                            <table class=" table table-bordered mb-5">
                                                <thead class="text-center font-weight-bold">
                                                    <tr>
                                                        <td>No</td>
                                                        <td>Nama Barang</td>
                                                        <td>Qty</td>
                                                        <td>Harga</td>
                                                    </tr>
                                                </thead>
                                                <tbody class="text-center">
                                                    <?php
                                                    $no = 1;
                                                    foreach ($pesanan as $row)
                                                        if ($row->status == "Belum Dibayar" && $rowi->id_transaksi == $row->id_transaksi) { ?>
                                                        <tr>
                                                            <input type="hidden" name="id" value="<?php echo $row->id ?>">
                                                            <td><?php echo $no++ ?></td>
                                                            <td><?php echo $row->nama_barang ?></td>
                                                            <td><?php echo $row->qty ?></td>
                                                            <td>
                                                                <?php
                                                                $harga1 =  $row->harga;
                                                                $angka_format = number_format($harga1, 0, ",", ".");
                                                                echo "Rp. " . $angka_format;
                                                                ?>
                                                            </td>
                                                        </tr>
                                                    <?php } ?>
                                                </tbody>
                                            </table>
                                            <hr class="mt-5 mb-5">
                                        <?php } ?>
                                    </div>
                                    <div class="tab-pane fade" id="custom-tabs-one-home" role="tabpanel" aria-labelledby="custom-tabs-one-home-tab">
                                        <div class="col-sm-12">
                                            <?php
                                            $no = 1;
                                            foreach ($tbl as $rowi) if ($rowi->status == "Diproses" or $rowi->status == "Menunggu Diproses") { ?>
                                                <span class="fw-bold fs-4">No Transaksi : <?php echo $rowi->no_transaksi ?></span>
                                                <span class="float-end fs-4 mb-3">Total Harga :
                                                    <b class="text-success">
                                                        <?php
                                                        $harga1 =  $rowi->total_harga;
                                                        $angka_format = number_format($harga1, 0, ",", ".");
                                                        echo "Rp. " . $angka_format;
                                                        ?>
                                                    </b>
                                                </span>
                                                <table class=" table table-bordered mb-5">
                                                    <thead class="text-center font-weight-bold">
                                                        <tr>
                                                            <td>No</td>
                                                            <td>Nama Barang</td>
                                                            <td>Qty</td>
                                                            <td>Harga</td>
                                                            <td>Status</td>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="text-center">
                                                        <?php
                                                        $no = 1;
                                                        foreach ($pesanan as $row)
                                                            if ($row->status == "Diproses" && $rowi->id_transaksi == $row->id_transaksi) { ?>
                                                            <tr>
                                                                <input type="hidden" name="id" value="<?php echo $row->id ?>">
                                                                <td><?php echo $no++ ?></td>
                                                                <td><?php echo $row->nama_barang ?></td>
                                                                <td><?php echo $row->qty ?></td>
                                                                <td>
                                                                    <?php
                                                                    $harga1 =  $row->harga;
                                                                    $angka_format = number_format($harga1, 0, ",", ".");
                                                                    echo "Rp. " . $angka_format;
                                                                    ?>
                                                                </td>
                                                                <td>
                                                                    <?php switch ($row->status) {
                                                                        case 'Diproses':
                                                                            echo '<div>Diproses <i class="fas fa-clock text-warning"></i></div>';
                                                                            break;

                                                                        case 'Dikirim':
                                                                            echo '<div>Dikirim <i class="fas fa-truck-moving"></i></div>';
                                                                            break;

                                                                        case 'Diterima':
                                                                            echo '<div class="p-2">Diterima <i class="fas fa-check-circle text-success"></i></div>';
                                                                            break;
                                                                    } ?>
                                                                </td>
                                                            </tr>
                                                        <?php } ?>
                                                    </tbody>
                                                </table>
                                                <hr class="mt-5 mb-5">
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="custom-tabs-one-profile" role="tabpanel" aria-labelledby="custom-tabs-one-profile-tab">
                                        <div class="col-sm-12">
                                            <?php
                                            $no = 1;
                                            foreach ($tbl as $rowi) if ($rowi->status == "Dikirim") { ?>
                                                <span class="fw-bold fs-4">No Transaksi : <?php echo $rowi->no_transaksi ?></span>
                                                <span class="float-end fs-4 mb-3">Total Harga :
                                                    <b class="text-success">
                                                        <?php
                                                        $harga1 =  $rowi->total_harga;
                                                        $angka_format = number_format($harga1, 0, ",", ".");
                                                        echo "Rp. " . $angka_format;
                                                        ?>
                                                    </b><br>
                                                    <span class="float-end">
                                                        <a href="#terimaModal<?php echo $rowi->id_transaksi ?>" data-toggle="modal" data-target="#terimaModal<?php echo $rowi->id_transaksi ?>" class="btn btn-success btn-sm "><i class="fas fa-check"></i> Pesanan Diterima</a>
                                                    </span>
                                                </span>

                                                <table class="table table-bordered">
                                                    <thead class="text-center font-weight-bold">
                                                        <tr>
                                                            <td>No</td>
                                                            <td>Nama Barang</td>
                                                            <td>Qty</td>
                                                            <td>Total Harga</td>
                                                            <td>Status</td>
                                                            <!-- <td>Action</td> -->
                                                        </tr>
                                                    </thead>
                                                    <tbody class="text-center">
                                                        <?php
                                                        $r = 1;
                                                        $no = 1;
                                                        foreach ($pesanan as $row)
                                                            if ($row->status == "Dikirim" && $rowi->id_transaksi == $row->id_transaksi) { ?>
                                                            <tr>
                                                                <input type="hidden" name="id" value="<?php echo $row->id ?>">
                                                                <td><?php echo $no++ ?></td>
                                                                <td><?php echo $row->nama_barang ?></td>
                                                                <td><?php echo $row->qty ?></td>
                                                                <td>
                                                                    <?php
                                                                    $harga1 =  $row->total_harga;
                                                                    $angka_format = number_format($harga1, 0, ",", ".");
                                                                    echo "Rp. " . $angka_format;
                                                                    ?>
                                                                </td>
                                                                <td>
                                                                    <?php switch ($row->status) {
                                                                        case 'Diproses':
                                                                            echo '<div>Diproses <i class="fas fa-clock text-warning"></i></div>';
                                                                            break;

                                                                        case 'Dikirim':
                                                                            echo '<div>Dikirim <i class="fas fa-truck-moving"></i></div>';
                                                                            break;

                                                                        case 'Diterima':
                                                                            echo '<div class="p-2">Diterima <i class="fas fa-check-circle text-success"></i></div>';
                                                                            break;
                                                                    } ?>
                                                                </td>
                                                            </tr>
                                                        <?php } ?>
                                                    </tbody>
                                                </table>
                                                <hr class="mt-5 mb-5">
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="custom-tabs-one-messages" role="tabpanel" aria-labelledby="custom-tabs-one-messages-tab">
                                        <div class="col-sm-12">
                                            <?php
                                            $no = 1;
                                            foreach ($tbl as $rowi) if ($rowi->status == "Diterima") { ?>
                                                <span class="fw-bold fs-4">No Transaksi : <?php echo $rowi->no_transaksi ?></span><br>
                                                <span class="fs-5">
                                                    Pesanan Terkirim
                                                    <?php echo date('d F Y | H:i:s', strtotime($rowi->tgl_diterima)) ?>
                                                </span>
                                                <span class="float-end fs-4 mb-3">Total Harga :
                                                    <b class="text-success">
                                                        <?php
                                                        $harga1 =  $rowi->total_harga;
                                                        $angka_format = number_format($harga1, 0, ",", ".");
                                                        echo "Rp. " . $angka_format;
                                                        ?>
                                                    </b><br>
                                                </span>
                                                <table class="table table-bordered">
                                                    <thead class="text-center font-weight-bold">
                                                        <tr>
                                                            <td>No</td>
                                                            <td>Nama Barang</td>
                                                            <td>Qty</td>
                                                            <td>Total Harga</td>
                                                            <td>Status</td>
                                                        </tr>
                                                    </thead>
                                                    <?php $r = 1 ?>
                                                    <tbody class="text-center">
                                                        <?php
                                                        $no = 1;
                                                        foreach ($pesanan as $row)
                                                            if ($row->status == "Diterima" && $rowi->id_transaksi == $row->id_transaksi) { ?>
                                                            <tr>
                                                                <input type="hidden" name="id" value="<?php echo $row->id ?>">
                                                                <td class="align-middle"><?php echo $no++ ?></td>
                                                                <td class="align-middle"><?php echo $row->nama_barang ?></td>
                                                                <td class="align-middle"><?php echo $row->qty ?></td>
                                                                <td class="align-middle">
                                                                    <?php
                                                                    $harga1 =  $row->harga;
                                                                    $angka_format = number_format($harga1, 0, ",", ".");
                                                                    echo "Rp. " . $angka_format;
                                                                    ?>
                                                                </td>
                                                                <td>
                                                                    <?php switch ($row->status) {
                                                                        case 'Diproses':
                                                                            echo '<div>Diproses <i class="fas fa-clock text-warning"></i></div>';
                                                                            break;

                                                                        case 'Dikirim':
                                                                            echo '<div>Dikirim <i class="fas fa-truck-moving"></i></div>';
                                                                            break;

                                                                        case 'Diterima':
                                                                            echo '<div class="p-2">Diterima <i class="fas fa-check-circle text-success"></i></div>';
                                                                            break;
                                                                    } ?>
                                                                </td>
                                                            </tr>
                                                        <?php } ?>
                                                    </tbody>
                                                </table>
                                                <hr class="mb-5 mt-5">
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="custom-tabs-two-messages" role="tabpanel" aria-labelledby="custom-tabs-two-messages-tab">
                                        <div class="col-sm-12">
                                            <?php
                                            $no = 1;
                                            foreach ($tbl as $rowi) if ($rowi->status == "Ditolak") { ?>
                                                <span class="fw-bold fs-4">No Transaksi : <?php echo $rowi->no_transaksi ?></span><br>
                                                <span class="fs-5">
                                                    Pesanan Terkirim
                                                    <?php echo date('d F Y | H:i:s', strtotime($rowi->tgl_diterima)) ?>
                                                </span>
                                                <span class="float-end fs-4 mb-3">Total Harga :
                                                    <b class="text-success">
                                                        <?php
                                                        $harga1 =  $rowi->total_harga;
                                                        $angka_format = number_format($harga1, 0, ",", ".");
                                                        echo "Rp. " . $angka_format;
                                                        ?>
                                                    </b><br>
                                                    <a href="" class="btn btn-danger disabled float-end mt-3">Pesanan <?php echo $rowi->status ?> <i class="fas fa-times"></i></a>
                                                </span>
                                                <table class="table table-bordered">
                                                    <thead class="text-center font-weight-bold">
                                                        <tr>
                                                            <td>No</td>
                                                            <td>Nama Barang</td>
                                                            <td>Qty</td>
                                                            <td>Total Harga</td>
                                                            <!-- <td>Status</td> -->
                                                        </tr>
                                                    </thead>
                                                    <?php $r = 1 ?>
                                                    <tbody class="text-center">
                                                        <?php
                                                        $no = 1;
                                                        foreach ($pesanan as $row)
                                                            if ($row->status == "Ditolak" && $rowi->id_transaksi == $row->id_transaksi) { ?>
                                                            <tr>
                                                                <input type="hidden" name="id" value="<?php echo $row->id ?>">
                                                                <td class="align-middle"><?php echo $no++ ?></td>
                                                                <td class="align-middle"><?php echo $row->nama_barang ?></td>
                                                                <td class="align-middle"><?php echo $row->qty ?></td>
                                                                <td class="align-middle">
                                                                    <?php
                                                                    $harga1 =  $row->harga;
                                                                    $angka_format = number_format($harga1, 0, ",", ".");
                                                                    echo "Rp. " . $angka_format;
                                                                    ?>
                                                                </td>
                                                                <!-- <td>
                                                                    <?php switch ($row->status) {
                                                                        case 'Diproses':
                                                                            echo '<div>Diproses <i class="fas fa-clock text-warning"></i></div>';
                                                                            break;

                                                                        case 'Dikirim':
                                                                            echo '<div>Dikirim <i class="fas fa-truck-moving"></i></div>';
                                                                            break;

                                                                        case 'Diterima':
                                                                            echo '<div class="p-2">Diterima <i class="fas fa-check-circle text-success"></i></div>';
                                                                            break;
                                                                    } ?>
                                                                </td> -->
                                                            </tr>
                                                        <?php } ?>
                                                    </tbody>
                                                </table>
                                                <hr class="mb-5 mt-5">
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php foreach ($pesanan as $row) { ?>
    <div class="modal fade" id="terimaModal<?php echo $row->id_transaksi ?>" tabindex="-1" aria-labelledby="terimaModalLabel<?php echo $row->id_transaksi ?>" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-success">Pesanan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?php echo site_url('CTR_Pelanggan/BarangDiterima/' . $row->id_transaksi) ?>" method="POST">
                    <div class="modal-body">
                        <input type="hidden" name="id" value="<?php echo $row->id ?>">
                        Apakah <strong><?php echo $row->no_transaksi ?></strong> Sudah Diterima ?
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
<!-- Bayar Modal -->
<?php foreach ($pesanan as $row) { ?>
    <div class="modal fade" id="bayarModal<?php echo $row->id_transaksi ?>" tabindex="-1" aria-labelledby="bayarModalLabel<?php echo $row->id_transaksi ?>" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-success">Pesanan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?php echo site_url('CTR_Pelanggan/BayarSekarang/' . $row->id_transaksi) ?>" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">
                        <input type="hidden" name="id" value="<?php echo $row->id ?>">
                        <input type="hidden" name="id_transaksi" value="<?php echo $row->id_transaksi ?>">
                        <div class="form-group">
                            <label for="">Upload Bukti Transfer</label>
                            <input type="file" name="bukti_transfer" class="form-control">
                        </div>
                        <!-- Apakah <strong><?php echo $row->no_transaksi ?></strong> Sudah Diterima ? -->
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
<!-- Batalkan Modal -->
<?php foreach ($pesanan as $row) { ?>
    <div class="modal fade" id="batalModal<?php echo $row->id_transaksi ?>" tabindex="-1" aria-labelledby="batalModalLabel<?php echo $row->id_transaksi ?>" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-danger">Pesanan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?php echo site_url('CTR_Pelanggan/Batalkan/' . $row->id_transaksi) ?>" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">
                        <input type="hidden" name="id" value="<?php echo $row->id ?>">
                        <input type="hidden" name="id_transaksi" value="<?php echo $row->id_transaksi ?>">
                        Batalkan Pemesanan <strong><?php echo $row->no_transaksi ?></strong> ?
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