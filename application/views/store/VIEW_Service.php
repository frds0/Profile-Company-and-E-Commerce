<section class="jumbotron text-center">
  <!-- <img src="img/timthumb.jfif" alt="Proton Techindo" width="200" class="rounded-circle img-thumbnail" /> -->
  <h1 class="display-4 fw-bold">Halaman Service</h1><br>
  <p class="lead" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="200">Hello selamat datang di Halaman Service disini anda dapat menginput barang yang akan anda service di toko kami.</p>
</section>
<!-- Akhir section -->
<section id="service">
  <div class="container">
    <div class="alert alert-danger" role="alert">
      <b>Harap melakukan login terlebih dahulu untuk melakukan service pada barang yang ingin di service.</b>
    </div>
    <div class="row text-center mb-2">
      <div class="col">
        <h2>Services</h2>
      </div>
    </div>
    <hr>
    <div class="row justify-content-center">
      <div class="col-md-8">
        <?php echo $this->session->flashdata('msg'); ?>
        <form method="POST" action="<?php echo site_url('CTR_Company/Alert'); ?>">
          <div class="mb-3 text-center">
            <h2>Identitas Pemilik Barang</h2>
          </div>

          <div class="mb-3">
            <label for="name" class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control" id="name" readonly name="name" aria-describedby="name" />
          </div>

          <div class="mb-3">
            <label for="email" class="form-label">Email</label> <span class="float-end text-danger" style="font-style: italic; font-size: 12px;">*Email Valid</span>
            <input type="email" class="form-control" id="email" readonly name="email" aria-describedby="email" />
          </div>

          <div class="mb-3">
            <label for="no_telp" class="form-label">No Telephone</label>
            <input type="text" class="form-control" id="no_telp" readonly name="no_telp" aria-describedby="no_telp" />
          </div>

          <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <textarea class="form-control ckeditor" id="ckeditor" readonly name="alamat" rows="3"></textarea>
          </div>
      </div>
    </div>

    <hr>
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="mb-3 text-center">
          <h2>Barang Yang di Service</h2>
        </div>
        <div class="mb-3">
          <label for="nama_b" class="form-label">Nama Barang</label>
          <input type="text" class="form-control" id="nama_b" readonly name="nama_b" aria-describedby="nama_b" />
        </div>

        <div class="mb-3">
          <label for="jenis_b" class="form-label">Jenis Barang</label>
          <input type="text" class="form-control" id="jenis_b" readonly name="jenis_b" aria-describedby="jenis_b" />
        </div>

        <div class="mb-3">
          <label for="merk_b" class="form-label">Merk Barang</label>
          <input type="text" class="form-control" id="merk_b" readonly name="merk_b" aria-describedby="merk_b" />
        </div>

        <div class="mb-3">
          <label for="pesan" class="form-label">Pesan</label>
          <textarea class="form-control" id="pesan" readonly name="pesan" rows="3"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Kirim</button>
        </form>
      </div>
    </div>
</section>