<!-- Halaman Visi Misi -->
<section id="visi">
  <div class="container">
    <?php foreach ($isiV as $row) { ?>
      <div class="row text-center mb-4" data-aos="fade-down" data-aos-duration="1500">
        <div class="col">
          <h2><?php echo $row->tittle ?></h2>
        </div>
      </div>
      <div class="row fs-4 text-start">
        <div class="col-12 mb-5" data-aos="fade-down" data-aos-duration="1500">
          <h3>Visi</h3>
          <p style="text-align: justify;">
            <?php echo $row->visi ?>
          </p>
        </div>
        <div class="col-12 text-end" data-aos="fade-down" data-aos-duration="2000">
          <h3>Misi</h3>
          <p style="text-align: justify;">
            <?php echo $row->misi ?>
          </p>
        </div>
      </div>
    <?php } ?>
  </div>
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#b8fced" fill-opacity="1" d="M0,96L48,112C96,128,192,160,288,160C384,160,480,128,576,96C672,64,768,32,864,37.3C960,43,1056,85,1152,101.3C1248,117,1344,107,1392,101.3L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
    </svg>
  </svg>
</section>
<!-- Akhir Visi Misi -->