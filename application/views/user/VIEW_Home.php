<!-- Begin Page Content -->
<div class="container">
    <?php echo $this->session->flashdata('msg'); ?>
    <div class="card mb-3 shadow-lg" style="height: 300px; background: url(../assets/img/slider-bg1.jpg);background-size: cover;">
        <div class="card-body text-center text-white pt-5">
            <h1 class="pt-5"><i>Selamat Datang di Store Kami <b><?php echo $user['username'] ?></b> </i></h1>
        </div>
    </div>
    <!-- <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../assets/img/slider-bg1.jpg" class="d-block w-100" alt="../assets/img/slider-bg1.jpg">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="../assets/img/slider-bg1.jpg" class="d-block w-100" alt="../assets/img/slider-bg1.jpg">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="../assets/img/slider-bg1.jpg" class="d-block w-100" alt="../assets/img/slider-bg1.jpg">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </button>
    </div> -->

    <div class="row">
        <?php foreach ($barang as $row => $value) { ?>
            <div class="col-sm-3">
                <div class="card-img mb-5">
                    <form action="<?php echo site_url('CTR_Pelanggan/MasukanKeranjang') ?>" method="POST">
                        <input type="hidden" name="id_barang" value="<?php echo $value->id_barang ?>">
                        <input type="hidden" name="nama_barang" value="<?php echo $value->nama_barang ?>">
                        <input type="hidden" name="qty" value="1">
                        <input type="hidden" name="harga" value="<?php echo $value->harga ?>">
                        <a href="<?php echo site_url('CTR_Pelanggan/DetailKomputer/') . $value->id_barang ?>">
                            <img src="<?php echo base_url('assets/img/barang/' . $value->gambar) ?>" class="card-img-top img-thumbnail shadow" style="width: 400px; height: 200px;">
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
<!-- <style>
    a {
        text-decoration: none;
        color: black;
    }

    a:hover {
        text-decoration: none;
        color: gray;
    }
</style>
<div class="container-fluid profile">
    <?php echo $this->session->flashdata('msg'); ?>
    <div class="col-md-6">
        <div class="card mb-3">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="<?php echo base_url('assets/img/profile/' . $user['image']) ?>" class="img-thumbnail" width="400px">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $user['username'] ?></h5>
                        <p class="card-text"><?php echo $user['email'] ?></p>
                        <a class="card-text" href="<?php echo site_url('CTR_Pelanggan/Profile'); ?>">Edit Profile</a>
                        <p class=" card-text"><small class=" text-muted">Dibuat Pada Tanggal <?php echo date('d F Y', $user['date_created']); ?></small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- /.container-fluid -->