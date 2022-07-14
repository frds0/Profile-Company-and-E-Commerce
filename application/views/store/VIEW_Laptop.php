<section class="jumbotron text-center">
  <!-- <img src="img/timthumb.jfif" alt="Proton Techindo" width="200" class="rounded-circle img-thumbnail" /> -->
  <h1 class="display-4 fw-bold">Halaman Laptop</h1><br>
  <p class="lead" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="200">Hello Selamat Datang di Store Halaman Laptop, disini anda dapat melihat-lihat berbagai Laptop dari yang baru/bekas. Tetapi sebalum anda ingin melihat detail dan ingin membelinya silahkan login terlebih dahulu, dan apabila tidak punya akun silahkan melakukan register</p>
</section>

<section id="#laptop">
  <div class="container">
    <div class="row text-center">
      <div class="col">
        <h1>Laptop</h1>
      </div>
    </div>

    <div class="row mt-4 mb-xl-5 justify-content-center">
      <?php foreach ($isi as $row) { ?>
        <div class="col-md-3">
          <div class="card card-img" style="width: 18rem;">
            <a href="<?php echo site_url('CTR_Company/Alert'); ?>">
              <img src="<?php echo base_url('assets/img/barang/' . $row->gambar); ?>" class="card-img shadow-lg img-thumbnail p-0" style="width: 230px;"></a>
            <div class="card-body">
              <h5 class="card-title"><?php echo $row->nama_barang ?></h5>
              <p class="card-text"><?php echo $row->spek ?> </p>
            </div>
            <a>
              <ul class="list-group"><b>
                  <li class="list-group-item"><a href="#" class="card-link">
                      <?php $harga1 =  $row->harga;
                      $angka_format = number_format($harga1, 0, ",", ".");
                      echo "Rp. " . $angka_format; ?></a></li>
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
                  <li class="list-group-item"><a href="#" class="card-link"><?php echo $row->kondisi ?></a></li>
                </b>
              </ul>
            </a>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
</section>
<!-- <div class="col-md-3">
    <div class="card" style="width: 18rem;">
      <img src="<?php echo base_url(); ?>assets/img/laptop/acer.png" class="card-img-top shadow-lg" alt="RAM">
      <div class="card-body">
        <h5 class="card-title">ACER Nitro 5 AN515-44</h5>
        <p class="card-text">Spesifikasi ACER ....</p>
      </div>

      <ul class="list-group list-group-flush"><b>
          <li class="list-group-item"><a href="#" class="card-link">Rp. 13.100.000</a></li>
          <li class="list-group-item"><a href="#" class="card-link">Bintangnya</a></li>
          <li class="list-group-item"><a href="#" class="card-link">New</a></li>
        </b>
      </ul>
    </div>
  </div>

  <div class="col-md-3">
    <div class="card" style="width: 18rem;">
      <img src="<?php echo base_url(); ?>assets/img/laptop/legion.png" class="card-img-top shadow-lg" alt="SSD">
      <div class="card-body">
        <h5 class="card-title">Lenovo legion 5 15ARH</h5>
        <p class="card-text">Spesifikasi Lenovo ....</p>
      </div>

      <ul class="list-group list-group-flush"><b>
          <li class="list-group-item"><a href="#" class="card-link">Rp. 14.899.000</a></li>
          <li class="list-group-item"><a href="#" class="card-link">Bintangnya</a></li>
          <li class="list-group-item"><a href="#" class="card-link">New</a></li>
        </b>
      </ul>
    </div>
  </div>

  <div class="col-md-3">
    <div class="card" style="width: 18rem;">
      <img src="<?php echo base_url(); ?>assets/img/laptop/pavilion.png" class="card-img-top shadow-lg" alt="HP">
      <div class="card-body">
        <h5 class="card-title">HP Pavilion Gaming 15-EC1076AX</h5>
        <p class="card-text">Spesifikasi HP Pavilion . . .</p>
      </div>

      <ul class="list-group list-group-flush"><b>
          <li class="list-group-item"><a href="#" class="card-link">Rp 14.799.000</a></li>
          <li class="list-group-item"><a href="#" class="card-link">Bintangnya</a></li>
          <li class="list-group-item"><a href="#" class="card-link">New</a></li>
      </ul></b>
    </div>
  </div>
</div>

<div class="row mt-4">
<div class="col-md-3">
  <div class="card" style="width: 18rem;">
    <img src="<?php echo base_url(); ?>assets/img/giant.jpg" class="card-img-top" alt="INI GIANT">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    </div>

    <ul class="list-group list-group-flush">
      <li class="list-group-item"><a href="#" class="card-link">Card link</a></li>
      <li class="list-group-item"><a href="#" class="card-link">Another link</a></li>
      <li class="list-group-item"><a href="#" class="card-link">Another link</a></li>
    </ul>
  </div>
</div>

<div class="col-md-3">
  <div class="card" style="width: 18rem;">
    <img src="<?php echo base_url(); ?>assets/img/chipset.jpg" class="card-img-top" alt="INI GIANT">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    </div>

    <ul class="list-group list-group-flush">
      <li class="list-group-item"><a href="#" class="card-link">Card link</a></li>
      <li class="list-group-item"><a href="#" class="card-link">Another link</a></li>
      <li class="list-group-item"><a href="#" class="card-link">Another link</a></li>
    </ul>
  </div>
</div>

<div class="col-md-3">
  <div class="card" style="width: 18rem;">
    <img src="<?php echo base_url(); ?>assets/img/chipset.jpg" class="card-img-top" alt="INI GIANT">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    </div>

    <ul class="list-group list-group-flush">
      <li class="list-group-item"><a href="#" class="card-link">Card link</a></li>
      <li class="list-group-item"><a href="#" class="card-link">Another link</a></li>
      <li class="list-group-item"><a href="#" class="card-link">Another link</a></li>
    </ul>
  </div>
</div>

<div class="col-md-3">
  <div class="card" style="width: 18rem;">
    <img src="<?php echo base_url(); ?>assets/img/headset.jpg" class="card-img-top" alt="INI GIANT">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    </div>

    <ul class="list-group list-group-flush">
      <li class="list-group-item"><a href="#" class="card-link">Card link</a></li>
      <li class="list-group-item"><a href="#" class="card-link">Another link</a></li>
      <li class="list-group-item"><a href="#" class="card-link">Another link</a></li>
    </ul>
  </div>
</div> -->