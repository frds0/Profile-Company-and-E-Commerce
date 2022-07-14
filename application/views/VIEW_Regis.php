<link href="<?php echo base_url(); ?>assets/css/css/bootstrap.css" rel="stylesheet">
<title><?php echo $judul ?></title>
<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/img/ts.png" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css" />
<div class="container regis">
    <div class="row-regis">
        <div class="col">
            <div class="form-container-regis shadow-lg">
                <h1 class="text-center text-light">Register Now!</h1>
                <form class="RegForm" method="POST" action="<?php echo site_url('CTR_Login/register') ?>">
                    <div class="form-group">
                        <input type="text" id="username" name="username" placeholder="Username" value="<?php echo set_value('username') ?>"><br>
                        <?= form_error('username', '<small class="text-danger">', '</small>'); ?>
                    </div>

                    <div class="form-group">
                        <input type="text" id="email" name="email" placeholder="Email" value="<?php echo set_value('email') ?>"><br>
                        <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
                    </div>

                    <div class="form-group-pass">
                        <input type="password" id="password1" name="password1" placeholder="Password">
                        <input type="password" id="password2" name="password2" placeholder="Repeat Password"> <br>
                        <?= form_error('password1', '<small class="text-danger">', '</small>'); ?>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary-ni btn-primary">Register</button>
                    </div>

                    <div class="form-group">
                        <p class="acc pt-2 text-white">Sudah Punya Akun?<a href="<?php echo site_url('CTR_Login') ?>" class="text-white"> <b>Klik Disini<b></a></p><br>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>