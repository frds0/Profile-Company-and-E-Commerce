<link href="<?php echo base_url(); ?>assets/css/css/bootstrap.css" rel="stylesheet">
<title><?php echo $judul ?></title>
<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/img/logo/proton.png" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css" />
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
                    <form id="LoginForm" method="POST" action="<?php echo site_url('CTR_Login/changePassword') ?>">
                        <div class="row">
                            <div class="form-btn">
                                <h3 class="mb-4">Change Your Password For</h3>
                                <h6><?php echo $this->session->userdata('reset_email'); ?></h6>
                            </div>

                            <div class="form-group">
                                <input type="password" id="password1" name="password1" placeholder="Enter New Password . . ."><br>
                                <?= form_error('password1', '<small class="text-danger">', '</small>'); ?>
                            </div>

                            <div class="form-group">
                                <input type="password" id="password2" name="password2" placeholder="Repeat New Password . . ."><br>
                                <?= form_error('password2', '<small class="text-danger">', '</small>'); ?>
                            </div>

                            <div class="form-group">
                                <p class="acc mt-4"><a href="<?php echo site_url('CTR_Login') ?>" class="Butuh text-end"> <b>Back to Login</b></a></p>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-dark btn-sm mt-5 ">Riset Password</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>