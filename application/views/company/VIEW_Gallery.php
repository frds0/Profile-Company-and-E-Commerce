<section id="gallery">
  <div class="container">
    <div class="row mb-4">
      <div class="col text-center" data-aos="fade-down" data-aos-duration="2000">
        <h2>Gallery</h2>
      </div>
    </div>
    <div class="row justify-content-center">
      <?php foreach ($isiG as $row) { ?>
        <div class="col-md-4 mb-5" data-aos="fade-down" data-aos-duration="2000" data-aos-delay="300">
          <p>
            <img src=" <?php echo base_url('assets/img/gallery/' . $row->photo) ?>" class="card-img shadow-lg rounded-3 img-thumbnail border-0" style="width: 400px auto; height: 300px;">
          </p>
        </div>
      <?php } ?>
    </div>
  </div>
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" data-aos="zoom-in-up" data-aos-duration="2000">
    <path fill="#ececec" fill-opacity="1" d="M0,192L40,176C80,160,160,128,240,122.7C320,117,400,139,480,154.7C560,171,640,181,720,154.7C800,128,880,64,960,37.3C1040,11,1120,21,1200,42.7C1280,64,1360,96,1400,112L1440,128L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path>
  </svg>
</section>
<!-- Akhir Gallery -->