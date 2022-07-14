<link href="<?php echo base_url(); ?>assets/css/css/bootstrap.css" rel="stylesheet">
<title><?php echo $judul ?></title>
<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/img/logo/proton.png" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css" />
<div class="account-page text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mb-3">
                <a href="<?php echo base_url(); ?>">
                    <img src="<?php echo base_url(); ?>assets/img/logo/laki4.png" class="mt-5" width="100%">
                    <!-- <img src="https://dlh.ponorogo.go.id/eppid/assets/front/images/details-1-office-worker.svg" width="100%"> -->
                    <!-- <img src="<?php echo base_url() ?>assets/img/slider/office1.png" width="100%"> -->
                </a>
            </div>
            <div class="col-md-6">
                <div class="form-container-login shadow-lg">
                    <div class="mt-0"><?php echo $this->session->flashdata('massage'); ?></div>
                    <div class="mt-0"><?php echo $this->session->flashdata('alert'); ?></div>
                    <form id="LoginForm" method="POST" action="<?php echo site_url('CTR_Login') ?>">
                        <div class="form-btn mt-4">
                            <h1>Login</h1>
                        </div>
                        <div class="form-group">
                            <input type="text" id="email" name="email" autofocus placeholder="Email Address" value="<?php echo set_value('email') ?>"><br>
                            <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
                        </div>

                        <div class="form-group">
                            <input type="password" id="password" name="password" placeholder="Password"><br>
                            <?= form_error('password', '<small class="text-danger">', '</small>'); ?>
                        </div><br>

                        <div class="form-group">
                            <p class="acc pt-2">Belum Mempunyai Akun?<a href="<?php echo site_url('CTR_Login/register') ?>" class="Butuh text-end"> <b>Klik Disini</b></a></p>
                        </div>

                        <div class="form-group">
                            <p class="acc pt-2">Lupa Password?<a href="<?php echo site_url('CTR_Login/forgot') ?>" class="Butuh text-end"> <b>Klik Disini</b></a></p>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary-ni btn-primary">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>