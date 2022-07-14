<div class="container">
    <div class="row">
        <div class="col-12 mb-5 text-center">
            <h2>Komputer Store</h2>
        </div>
        <?php foreach ($isiK as $row => $value) { ?>
            <div class="col-sm-4" style="overflow: auto;">
                <div class="card-img mb-5">
                    <form action="<?php echo site_url('CTR_Pelanggan/MasukanKeranjang') ?>" method="POST">
                        <input type="hidden" name="id_barang" value="<?php echo $value->id_barang ?>">
                        <input type="hidden" name="nama_barang" value="<?php echo $value->nama_barang ?>">
                        <input type="hidden" name="qty" value="1">
                        <input type="hidden" name="harga" value="<?php echo $value->harga ?>">
                        <a href="<?php echo site_url('CTR_Pelanggan/DetailKomputer/') . $value->id_barang ?>">
                            <img src="<?php echo base_url('assets/img/barang/' . $value->gambar) ?>" class="card-img-top shadow">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $value->nama_barang; ?></h5>
                            <p class="card-text"><?php echo $value->spek; ?></p>
                        </div>
                        <ul class="list-group" style="text-decoration: none; color:black"><b>
                                <li class="list-group-item">
                                    <a href="<?php echo site_url('detail/CTR_DetailK'); ?>" class="card-link">
                                        <?php
                                        $harga1 =  $value->harga;
                                        $angka_format = number_format($harga1, 0, ",", ".");
                                        echo "Rp. " . $angka_format;
                                        ?>
                                    </a>
                                </li>
                                <?php if ($value->star == 1) { ?>
                                    <li class="list-group-item text-gray-500">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star"></i>
                                        <i class="bi bi-star"></i>
                                        <i class="bi bi-star"></i>
                                        <i class="bi bi-star"></i>
                                    </li>
                                <?php } ?>
                                <?php if ($value->star == 2) { ?>
                                    <li class="list-group-item text-gray-500">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star"></i>
                                        <i class="bi bi-star"></i>
                                        <i class="bi bi-star"></i>
                                    </li>
                                <?php } ?>
                                <?php if ($value->star == 3) { ?>
                                    <li class="list-group-item text-gray-500">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star"></i>
                                        <i class="bi bi-star"></i>
                                    </li>
                                <?php } ?>
                                <?php if ($value->star == 4) { ?>
                                    <li class="list-group-item text-gray-500">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star"></i>
                                    </li>
                                <?php } ?>
                                <?php if ($value->star == 5) { ?>
                                    <li class="list-group-item text-gray-500">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                    </li>
                                <?php } ?>
                                <li class="list-group-item"><?php echo $value->kondisi; ?>
                                    <button type="submit" class="btn btn-warning btn-sm float-right "><i class="fas fa-cart-plus"></i> Add Cart</button>
                                </li>
                            </b>
                        </ul>
                    </form>
                </div>
            </div>
        <?php } ?>
    </div>
</div>