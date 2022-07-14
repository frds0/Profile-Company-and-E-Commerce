<!-- Awal Info -->
<section id="info">
    <style>
        a {
            text-decoration: none;
            color: black;
        }

        a:hover {
            text-decoration: none;
            color: red;
        }
    </style>
    <div class="container">
        <div class="row">
            <div class="col text-center mb-5" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="200">
                <h1>New Information</h1>
            </div>
        </div>
        <?php foreach ($isiI as $row) { ?>
            <div class="row mb-5" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                <div class="col-md-12 justify-content-center mb-4">
                    <h2 class="judul" style="text-align: center;"><?php echo $row->tittle; ?></h2>
                </div>
                <div class="col-md-5">
                    <img src="<?php echo base_url('assets/img/info/' . $row->photo) ?>" class="card-img-top shadow-lg rounded-3 img-thumbnail">
                </div>
                <div class="col-md-7">
                    <p style="font-size: 14px;" class="tanggal text-center">Published Date: <?php echo date('d F Y', strtotime($row->tgl_info)); ?></p>
                    <p class="content" style="text-align: justify;"><?php echo $row->content_awal; ?> Selengkapnya <a href="#" data-bs-toggle="modal" data-bs-target="#klik<?php echo $row->id_info; ?>"><b> Klik Disini</b></a></p>
                </div>
            </div>
        <?php } ?>
        <!-- Pagination -->
        <div data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
            <?php echo $this->pagination->create_links(); ?>
        </div>
    </div>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" data-aos="fade-in" data-aos-duration="2000">
        <path fill="#FDE660" fill-opacity="1" d="M0,192L40,176C80,160,160,128,240,122.7C320,117,400,139,480,154.7C560,171,640,181,720,154.7C800,128,880,64,960,37.3C1040,11,1120,21,1200,42.7C1280,64,1360,96,1400,112L1440,128L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path>
    </svg>
</section>
<!-- Akir Info -->

<!-- Modal Klik -->
<?php foreach ($isiI as $row) { ?>
    <div class="modal fade" id="klik<?php echo $row->id_info; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content text-center" style="width: 900px;  margin-left: -200px;">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New Information</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-tittle">
                    <h1><?php echo $row->tittle ?></h1>
                </div>
                <hr>
                <div class="text-center">
                    <img src="<?php echo base_url('assets/img/info/' . $row->photo) ?>" class="card-img-top shadow-lg rounded-3" style="width: 400px;">
                </div><br>
                <p class="tanggal text-center"><?php echo date('d F Y', strtotime($row->tgl_info)); ?></p>
                <hr>
                <p class="content p-3" style="text-align: justify;"><?php echo $row->content_modal; ?></p>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
<?php } ?>