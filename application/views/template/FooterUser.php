</div>
<!-- End of Main Content -->

<!-- Footer -->
<footer class="sticky-footer bg-white mt-5">
    <div class="container">
        <div class="copyright text-center my-auto">
            <div class="row justify-content-center">
                <div class="footer col-sm-4 text-start">
                    <h3>Proton Techindo</h3>
                    <div class="hubungi">
                        <h6>Proton Location</h6>
                        <p>Jl. Mohammad Yamin</p>
                        <p>Duren Jaya, Bekasi Timur</p>
                        <p>Telp / Fax: 021-88397553</p>
                    </div>
                </div>
                <div class="footer col-sm-4 align-center">
                    <img src="<?php echo base_url(); ?>assets/img/logo/proton.png" class="img-thumbnail card-img" style="width: 130px;">
                    <p>Penjualan Barang dan Jasa Terpecaya</p>
                </div>

                <div class="footer col-sm-4" style="text-align: end;">
                    <h4>Follow US</h4>
                    <ul>
                        <a href="https://www.instagram.com/"><i class="bi bi-instagram" style="font-size:40px; color:black"></i></a>
                        <a href="https://www.facebook.com/"><i class="bi bi-facebook" style="font-size:40px; color:black"></i></a>
                        <a href="https://www.youtube.com/"><i class="bi bi-youtube" style="font-size:40px; color:black"></i></a>
                    </ul>
                </div>
            </div>
        </div>
        <hr>
        <div class="row footer-copyright text-center">
            <center>
                Copyright &copy; 2021 - <?php echo date('Y') ?> <b>Ahmad Firdaus</b>
            </center>
        </div>
    </div>
</footer>
<!-- End of Footer -->
</div>
<!-- End of Content Wrapper -->
</div>
<!-- End of Page Wrapper -->
<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <!-- <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5> -->
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
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
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
<!-- <script src="<?php echo base_url(); ?>assets/css/js/bootsrap.js"></script> -->
<script src="<?php echo base_url(); ?>assets/css/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/css/js/bootstrap.bundle.js"></script>
<script src="<?php echo base_url(); ?>assets/css/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- <script src="<?php echo base_url(); ?>assets/css/js/bootstrap.bundle.js.map.js"></script> -->
<!-- <script src="<?php echo base_url(); ?>assets/css/js/bootstrap-dropdown.js"></script> -->
<!-- <script src="<?php echo base_url(); ?>assets/css/js/sidebars.js"></script> -->
<script src="<?php echo base_url(); ?>assets/css/jquery/jquery.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?php echo base_url(); ?>assets/css/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?php echo base_url(); ?>assets/css/js/sb-admin-2.min.js"></script>

<!-- Select2 -->
<script src="<?php echo base_url() ?>assets/plugin/select2/js/select2.full.min.js"></script>

<!-- Javascript AOS -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>

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
    gsap.from('.profilee', {
        duration: 1,
        y: '-100%',
        opacity: 0
    });

    // gsap.from('.sidebar', {
    //     duration: 1,
    //     x: '-100%',
    //     opacity: 0
    // });
</script>

<!-- SweetAlert2 -->
<script src="<?php echo base_url() ?>assets/plugin/sweetalert2/sweetalert2.min.js"></script>
<script type="text/javascript">
    $(function() {
        var Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
        });

        $('.swalDefaultSuccess').click(function() {
            Toast.fire({
                icon: 'success',
                title: 'Barang berhasil ditambahkan ke keranjang.'
            })
        });
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
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": true,
            "ordering": true,
            "info": false,
            "autoWidth": false,
            "responsive": true,
            "language": {
                "emptyTable": "Tidak ada data yang tersedia",
                "sZeroRecords": "Tidak ada data yang dicari"
            }
        });
        $('#example3').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": true,
            "ordering": true,
            "info": false,
            "autoWidth": false,
            "responsive": true,
            "language": {
                "emptyTable": "Tidak ada data yang tersedia",
                "sZeroRecords": "Tidak ada data yang dicari"
            }
        });
        $('#example4').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": true,
            "ordering": true,
            "info": false,
            "autoWidth": false,
            "responsive": true,
            "language": {
                "emptyTable": "Tidak ada data yang tersedia",
                "sZeroRecords": "Tidak ada data yang dicari"
            }
        });
    });
    $(function() {
        //Initialize Select2 Elements
        $('.select2').select2()
    })
</script>
</body>

</html>