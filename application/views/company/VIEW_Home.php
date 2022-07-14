<section class="jumbotron text-center">
  <?php foreach ($isiH as $row) { ?>
    <div class="container">
      <h1 class="display-4 fw-bold"><?php echo $row->tittle; ?></h1><br><!-- Menampilkan Tittle -->
      <p class="lead" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="200">
        <?php echo $row->info; ?>
        <!-- Menampilkan Isi -->
      </p>
    </div>
  <?php } ?>
</section>
<!-- Akhir Home -->