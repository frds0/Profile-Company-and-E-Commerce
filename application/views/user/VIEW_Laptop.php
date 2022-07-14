<div class="container">
    <div class="row">
        <div class="col-12 mb-5 text-center">
            <h2>Laptop Store</h2>
        </div>
        <?php foreach ($isiL as $row) { ?>
            <div class="col-sm-4" style="overflow: auto;">
                <div class="card-img mb-5">
                    <form action="<?php echo site_url('CTR_Pelanggan/MasukanKeranjang') ?>" method="POST">
                        <input type="hidden" name="id_barang" value="<?php echo $row->id_barang ?>">
                        <input type="hidden" name="nama_barang" value="<?php echo $row->nama_barang ?>">
                        <input type="hidden" name="qty" value="1">
                        <input type="hidden" name="harga" value="<?php echo $row->harga ?>">
                        <a href="<?php echo site_url('CTR_Pelanggan/DetailLaptop/') . $row->id_barang ?>">
                            <img src="<?php echo base_url('assets/img/barang/' . $row->gambar); ?>" class="card-img-top shadow" style="width: 300px; height: 220px;">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row->nama_barang ?></h5>
                            <p class="card-text"><?php echo $row->spek ?> </p>
                        </div>
                        <ul class="list-group"><b>
                                <li class="list-group-item"><a href="#" class="card-link">
                                        <?php
                                        $harga1 =  $row->harga;
                                        $angka_format = number_format($harga1, 0, ",", ".");
                                        echo "Rp. " . $angka_format;
                                        ?>
                                    </a></li>
                                <?php if ($row->star == 1) { ?>
                                    <li class="list-group-item text-gray-500">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star"></i>
                                        <i class="bi bi-star"></i>
                                        <i class="bi bi-star"></i>
                                        <i class="bi bi-star"></i>
                                    </li>
                                <?php } ?>
                                <?php if ($row->star == 2) { ?>
                                    <li class="list-group-item text-gray-500">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star"></i>
                                        <i class="bi bi-star"></i>
                                        <i class="bi bi-star"></i>
                                    </li>
                                <?php } ?>
                                <?php if ($row->star == 3) { ?>
                                    <li class="list-group-item text-gray-500">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star"></i>
                                        <i class="bi bi-star"></i>
                                    </li>
                                <?php } ?>
                                <?php if ($row->star == 4) { ?>
                                    <li class="list-group-item text-gray-500">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star"></i>
                                    </li>
                                <?php } ?>
                                <?php if ($row->star == 5) { ?>
                                    <li class="list-group-item text-gray-500">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                    </li>
                                <?php } ?>
                                <li class="list-group-item"><?php echo $row->kondisi; ?>
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