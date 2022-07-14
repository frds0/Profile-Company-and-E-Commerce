<section class="jumbotron text-center">
  <h1 class="display-4 fw-bold">Halaman Komputer</h1><br>
  <p class="lead" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="200">Hello Selamat Datang di Store Halaman Komponen Komputer, disini anda dapat melihat-lihat berbagai kompunen komputer dari yang baru/bekas. Tetapi sebalum anda ingin melihat detail dan ingin membelinya silahkan login terlebih dahulu, dan apabila tidak punya akun silahkan melakukan register</p>
</section>

<section id="#komputer">
  <div class="container">
    <div class="row text-center">
      <div class="col">
        <h1>Komponen Komputer</h1>
      </div>
    </div>

    <div class="row mt-4 mb-xl-5 justify-content-center">
      <?php foreach ($isi as $row) { ?>
        <div class="col-md-3">
          <div class="card card-img">
            <a href="<?php echo site_url('CTR_Company/Alert'); ?>">
              <img src="<?php echo base_url('assets/img/barang/' . $row->gambar) ?>" class="card-img shadow-lg img-thumbnail p-0" style="width: 230px;"></a>
            <div class="card-body">
              <h5 class="card-title"><?php echo $row->nama_barang; ?></h5>
              <p class="card-text"><?php echo $row->spek; ?></p>
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
                  <li class="list-group-item"><a href="#" class="card-link"><?php echo $row->kondisi; ?></a></li>
                </b>
              </ul>
            </a>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
</section>