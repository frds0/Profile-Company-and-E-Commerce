<div class="container-fluid">
    <div class="card">
        <div class="container">
            <h1>Proton Store</h1>
        </div>
        <div class="container-fluid">
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-sm-12">
                        <div class="card-header">
                            <h4>History</h4>
                        </div>
                        <div class="card-body">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table id="example2" class="table table-bordered table-striped">
                                            <thead class="text-center font-weight-bold">
                                                <tr>
                                                    <td>#</td>
                                                    <td>Nama Barang</td>
                                                    <td>Qty</td>
                                                    <td>Total Harga</td>
                                                    <td>Status</td>
                                                    <!-- <td>Action</td> -->
                                                </tr>
                                            </thead>
                                            <tbody class="text-center">
                                                <?php
                                                $no = 1;
                                                foreach ($history as $row)
                                                    if ($row->status == 'Diterima') { ?>
                                                    <input type="hidden" name="id" value="<?php echo $row->id ?>">
                                                    <tr>
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
                                                            <?php echo $row->status ?> <i class="fas fa-check-circle text-success"></i>
                                                        </td>
                                                        <!-- <td>
                                                        <a href="<?php echo site_url('') ?>" class="btn btn-success btn-sm"><i class="fas fa-check"></i></a>
                                                        <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-times "></i></a>
                                                    </td> -->
                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>