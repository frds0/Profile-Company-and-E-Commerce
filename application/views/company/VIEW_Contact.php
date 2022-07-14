<!-- Halaman Kontak -->
<section id="contact">
  <div class="container">
    <div class="row text-center mb-4">
      <div class="col">
        <h2>Contact Us</h2>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-8">
        <?php echo $this->session->flashdata('msg'); ?>
        <form method="POST" action="<?php echo site_url('CTR_Company/SimpanDataC') ?>">
          <div class="mb-3" data-aos="fade-up" data-aos-duration="2000">
            <label for="nama" class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control" name="nama" id="nama" aria-describedby="name" />
          </div>

          <div class="mb-3" data-aos="fade-up" data-aos-duration="2000">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" id="email" aria-describedby="email" />
          </div>

          <div class="mb-3" data-aos="fade-up" data-aos-duration="2000">
            <label for="pesan" class="form-label">Pesan</label>
            <textarea class="form-control" name="pesan" id="pesan" rows="3"></textarea>
          </div>

          <button type="submit" name="k_contact" class="btn btn-primary" data-aos="fade-up" data-aos-duration="1000">Kirim</button>
        </form>
      </div>
    </div>
  </div>
</section>
<!-- Akhir Kontak -->