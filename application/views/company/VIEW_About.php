<!-- Halaman About -->
<section id="about">
  <div class="container">
    <div class="row text-center mb-4" data-aos="fade-up" data-aos-duration="1500">
      <div class="col">
      <h2>About Us</h2>
      </div>
    </div>
    <?php foreach ($isiA as $row) { ?>
      <div class="row fs-5" data-aos="fade-in" data-aos-duration="2000" style="text-align: justify;">
        <div class="col-12 mb-3">
          <p>
            <?php echo $row->info; ?>
          </p>
        </div>
      </div>
    <?php } ?>
  </div>
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" data-aos="fade-in" data-aos-duration="2000">
    <path fill="#ececec" fill-opacity="1" d="M0,192L40,176C80,160,160,128,240,122.7C320,117,400,139,480,154.7C560,171,640,181,720,154.7C800,128,880,64,960,37.3C1040,11,1120,21,1200,42.7C1280,64,1360,96,1400,112L1440,128L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path>
  </svg>
</section>
<!-- Akhir About -->