<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
  <path fill="#8ae0fafd" fill-opacity="1" d="M0,288L40,261.3C80,235,160,181,240,170.7C320,160,400,192,480,213.3C560,235,640,245,720,229.3C800,213,880,171,960,176C1040,181,1120,235,1200,245.3C1280,256,1360,224,1400,208L1440,192L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path>
</svg>
<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body ">
        <h5> Yakin Logout?</h5>
      </div>
      <div class="modal-footer">
        <button class="btn btn-secondary btn-sm" type="button" data-dismiss="modal">Cancel</button>
        <a class="btn btn-danger btn-sm" href="<?php echo site_url('CTR_Login/logout') ?>">Logout</a>
      </div>
    </div>
  </div>
</div>
<!-- Footer -->
<footer>
  <div class="container">
    <div class="row">
      <div class="footer col-sm-4">
        <h3>Proton Techindo</h3>
        <div class="hubungi">
          <h6>Proton Location</h6>
          <p>Jl. Mohammad Yamin</p>
          <p>Duren Jaya, Bekasi Timur</p>
          <p>Telp / Fax: 021-88397553</p>
        </div>
      </div>
      <div class="footer col-sm-4 text-center">
        <img src="<?php echo base_url(); ?>assets/img/logo/proton.png" style="width: 120px;">
        <p>Penjualan Barang dan Jasa Terpecaya</p>
      </div>

      <div class="footer col-sm-4 text-end">
        <h4>Follow US</h4>
        <ul>
          <a href="https://www.instagram.com/"><i class="bi bi-instagram" style="font-size:40px; color:black"></i></a>
          <a href="https://www.facebook.com/"><i class="bi bi-facebook" style="font-size:40px; color:black"></i></a>
          <a href="https://www.youtube.com/"><i class="bi bi-youtube" style="font-size:40px; color:black"></i></a>
        </ul>
      </div>
    </div>
    <div class="row">
      <div class="footer">
        <hr>
        <center>
          <p class="Copyright">Copyright &copy; 2021 - <?php echo date('Y') ?> <b>Ahmad Firdaus</b></p>
        </center>
      </div>
    </div>
  </div>
</footer>
<!-- Akhir Footer -->

<!-- Javascript Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
<!-- <script src="<?php echo base_url(); ?>assets/css/js/bootsrap.js"></script> -->
<script src="<?php echo base_url(); ?>assets/css/js/bootstrap.min.js"></script>
<!-- <script src="<?php echo base_url(); ?>assets/css/js/bootstrap.bundle.js"></script>
<script src="<?php echo base_url(); ?>assets/css/js/bootstrap.bundle.js.map.js"></script>
<script src="<?php echo base_url(); ?>assets/css/js/bootstrap-dropdown.js"></script> -->
<script src="<?php echo base_url(); ?>assets/css/js/sidebars.js"></script>

<!-- jquery -->
<script type="text/javascript" src="<?php echo base_url() ?>assets/css/jquery/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/css/jquery/jquery.js"></script>

<!-- Javascript ckeditor -->

<!-- <script src="https://cdn.ckeditor.com/ckeditor5/33.0.0/classic/ckeditor.js"></script> -->

<!-- Javascript AOS -->
<script type="text/javascript" src="<?php echo base_url() ?>assets/plugin/aos-master/dist/aos.js"></script>
<!-- <script src="https://unpkg.com/aos@next/dist/aos.js"></script> -->

<script>
  AOS.init({
    once: true, //untuk menonaktifkan animasi sroll yang terus menerus
  });
</script>

<!-- Javascript GSAP -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/gsap.min.js"></script>

<script>
  gsap.from('.jumbotron h1', {
    duration: 1,
    y: -100,
    opacity: 0,
    ease: 'bounce'
  });
  gsap.from('.navbar-g', {
    duration: 1,
    y: '-100%',
    opacity: 0
  });
</script>

<!-- DataTables  & Plugins -->
<script src="<?php echo base_url() ?>assets/plugin/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugin/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugin/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugin/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugin/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugin/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugin/jszip/jszip.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugin/pdfmake/pdfmake.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugin/pdfmake/vfs_fonts.js"></script>
<script src="<?php echo base_url() ?>assets/plugin/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugin/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugin/datatables-buttons/js/buttons.colVis.min.js"></script>
<script>
  $(function() {
    $("#example1").DataTable({
      "responsive": true,
      "lengthChange": false,
      "autoWidth": false,
      "info": false,
      // "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      "buttons": ["print"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

    $('table.table').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": false,
      "info": false,
      "autoWidth": false,
      "responsive": true,
      "buttons": ["print"],
      "language": {
        "emptyTable": "Tidak ada data yang tersedia",
        "sZeroRecords": "Tidak ada data yang dicari"
      },
      "lengthMenu": [
        [5, 10, 25, 50, -1],
        [5, 10, 25, 50, "All"]
      ]
    });
  });
</script>

</body>

</html>