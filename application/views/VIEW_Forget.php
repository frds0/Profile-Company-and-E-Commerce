<link href="<?php echo base_url(); ?>assets/css/css/bootstrap.css" rel="stylesheet">
<title><?php echo $judul ?></title>
<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/img/logo/proton.png" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css" />
<link href="<?php echo base_url(); ?>assets/css/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<div class="account-page text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mb-3">
                <a href="<?php echo base_url(); ?>">
                    <img src="https://dlh.ponorogo.go.id/eppid/assets/front/images/details-1-office-worker.svg" width="100%">
                    <!-- <img src="<?php echo base_url() ?>assets/img/slider/office1.png" width="100%"> -->
                </a>
            </div>
            <div class="col-md-6">
                <div class="form-container-login">
                    <?php echo $this->session->flashdata('massage'); ?>
                    <?php echo $this->session->flashdata('alert'); ?>
                    <form id="LoginForm" method="POST" action="<?php echo site_url('CTR_Login/forgot') ?>">
                        <div class="form-btn mt-5">
                            <h3>Lupa Password?</h3>
                        </div>

                        <div class="form-group">
                            <!-- <label for="">Masukan Alamat Email</label> -->
                            <input type="text" id="email" name="email" placeholder="Masukan Alamat Email" value="<?php echo set_value('email') ?>" class="mt-5"><br>
                            <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
                        </div>

                        <div class="form-group">
                            <p class="acc mt-4"><a href="<?php echo site_url('CTR_Login') ?>" class="Butuh text-end"> <b><i class="fas fa-arrow-alt-circle-left fa-1x"></i> Kembali</b></a></p>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-dark btn-sm mt-5 ">Riset Password</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>