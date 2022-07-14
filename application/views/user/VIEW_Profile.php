<div class="container-fluid">
    <div class="card">
        <div class="container">
            <div class="profile m-3 mb-0 " style="font-family: 'Franklin Gothic Medium';">
                <h1>Edit Profile</h1>
            </div>
            <hr>
            <?php echo $this->session->flashdata('msg'); ?>
            <div class="card-body">
                <form method="POST" action="<?php echo site_url('CTR_Pelanggan/EditUser') ?>" enctype="multipart/form-data">
                    <input type="hidden" name="id" class="form-control" value="<?php echo $user['id'] ?>">
                    <div class="row">
                        <div class="col-sm-4"></div>
                        <div class="col-sm-4">
                            <div class="text-center">
                                <img class="img-thumbnail" src="<?php echo base_url('assets/img/profile/' . $user['image']) ?>" width="120px">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Ubah Gambar</label>
                                <input type="file" name="image" id="image" class="form-control mb-3">
                                <input type="hidden" name="old" class="form-control" value="<?php echo $user['image']; ?>">
                            </div>
                        </div>
                        <div class="col-sm-4"></div>
                        <div class="col-sm-4">
                            <div class="mb-3">
                                <label class="form-label">Username</label>
                                <input type="text" name="username" required class="form-control" value="<?php echo $user['username'] ?>">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input type="text" readonly name="email" class="form-control" value="<?php echo $user['email'] ?>">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="mb-3">
                                <label class="form-label">No Telephone</label>
                                <input type="text" name="no_telp" class="form-control" placeholder="*Tambahkan No Telephone" required value="<?php echo $user['no_telp'] ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <div class="form-group">
                                    <label>Provinsi</label>
                                    <select class="form-select" name="provinsi" data-placeholder="Pilih Provinsi" style="width: 100%;">
                                        <option value="" selected disabled>Pilih Provinsi</option>
                                        <?php if (isset($user['alamat']) == NULL) { ?>
                                            <option value="DKI Jakarta">DKI Jakarta</option>
                                        <?php } else { ?>
                                            <option value="DKI Jakarta" <?php echo (explode("`", $user['alamat'])[0] == "DKI Jakarta" ? "selected" : ""); ?>>DKI Jakarta</option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <div class="form-group">
                                    <label>Kabupaten / Kota</label>
                                    <select class="form-select" name="kota" data-placeholder="Pilih Kabupaten" style="width: 100%;">
                                        <?php if (isset($user['alamat']) == NULL) { ?>
                                            <option value="" selected disabled>Pilih Kabupaten / Kota</option>
                                            <option value="Jakarta Selatan">Jakarta Selatan</option>
                                            <option value="Jakarta Pusat">Jakarta Pusat</option>
                                            <option value="Jakarta Barat">Jakarta Barat</option>
                                            <option value="Jakarta Timur">Jakarta Timur</option>
                                            <option value="Jakarta Utara">Jakarta Utara</option>
                                        <?php } else { ?>
                                            <option value="Jakarta Selatan" <?php echo (explode("`", $user['alamat'])[1] == "Jakarta Selatan" ? "selected" : ""); ?>>Jakarta Selatan</option>
                                            <option value="Jakarta Pusat" <?php echo (explode("`", $user['alamat'])[1] == "Jakarta Pusat" ? "selected" : ""); ?>>Jakarta Pusat</option>
                                            <option value="Jakarta Barat" <?php echo (explode("`", $user['alamat'])[1] == "Jakarta Barat" ? "selected" : ""); ?>>Jakarta Barat</option>
                                            <option value="Jakarta Timur" <?php echo (explode("`", $user['alamat'])[1] == "Jakarta Timur" ? "selected" : ""); ?>>Jakarta Timur</option>
                                            <option value="Jakarta Utara" <?php echo (explode("`", $user['alamat'])[1] == "Jakarta Utara" ? "selected" : ""); ?>>Jakarta Utara</option>
                                        <?php } ?>
                                        <!-- <?php foreach ($kabupaten as $row) { ?>
                                            <option value="<?php echo $row->id ?>"><?php echo $row->name ?></option>
                                        <?php } ?> -->
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <div class="form-group">
                                    <label>Kecamatan</label>
                                    <select class="form-select" name="kecamatan" data-placeholder="Pilih Kecamatan" style="width: 100%;">
                                        <?php if (isset($user['alamat']) == NULL) { ?>
                                            <option value="" disabled selected>Pilih Kecamatan</option>
                                            <option value="Jatinegara">Jatinegara</option>
                                            <option value="Duren Sawit">Duren Sawit</option>
                                            <option value="Cakung">Cakung</option>
                                            <option value="Pasar Rebo">Pasar Rebo</option>
                                            <option value="Cipayung">Cipayung</option>
                                        <?php } else { ?>
                                            <option value="Jatinegara" <?php echo (explode("`", $user['alamat'])[2] == "Jatinegara" ? "selected" : ""); ?>>Jatinegara</option>
                                            <option value="Duren Sawit" <?php echo (explode("`", $user['alamat'])[2] == "Duren Sawit" ? "selected" : ""); ?>>Duren Sawit</option>
                                            <option value="Cakung" <?php echo (explode("`", $user['alamat'])[2] == "Cakung" ? "selected" : ""); ?>>Cakung</option>
                                            <option value="Pasar Rebo" <?php echo (explode("`", $user['alamat'])[2] == "Pasar Rebo" ? "selected" : ""); ?>>Pasar Rebo</option>
                                            <option value="Cipayung" <?php echo (explode("`", $user['alamat'])[2] == "Cipayung" ? "selected" : ""); ?>>Cipayung</option>
                                        <?php } ?>
                                        <!-- <?php foreach ($kecamatan as $row) { ?>
                                                <option value="<?php echo $row->id ?>"><?php echo $row->name ?></option>
                                            <?php } ?> -->
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <div class="form-group">
                                    <label>Kelurahan</label>
                                    <select class="form-select" name="kelurahan" data-placeholder="Pilih Kelurahan" style="width: 100%;">
                                        <?php if (isset($user['alamat']) == NULL) { ?>
                                            <option value="" selected disabled>Pilih Kelurahan</option>
                                            <option value="Cipinang Muara">Cipinang Muara</option>
                                            <option value="Cipinang Besar Selatan">Cipinang Besar Selatan</option>
                                            <option value="Malaka Jaya">Malaka Jaya</option>
                                            <option value="Kampung Melayu">Kampung Melayu</option>
                                            <option value="Rawamangun">Rawamangun</option>
                                        <?php } else { ?>
                                            <option value="Malaka Jaya" <?php echo (explode("`", $user['alamat'])[3] == "Malaka Jaya" ? "selected" : ""); ?>>Malaka Jaya</option>
                                            <option value="Cipinang Muara" <?php echo (explode("`", $user['alamat'])[3] == "Cipinang Muara" ? "selected" : ""); ?>>Cipinang Muara</option>
                                            <option value="Rawamangun" <?php echo (explode("`", $user['alamat'])[3] == "Rawamangun" ? "selected" : ""); ?>>Rawamangun</option>
                                            <option value="Kampung Melayu" <?php echo (explode("`", $user['alamat'])[3] == "Kampung Melayu" ? "selected" : ""); ?>>Kampung Melayu</option>
                                            <option value="Cipinang Besar Selatan" <?php echo (explode("`", $user['alamat'])[3] == "Cipinang Besar Selatan" ? "selected" : ""); ?>>Cipinang Besar Selatan</option>
                                        <?php } ?>
                                        <!-- <?php foreach ($kelurahan as $row) { ?>
                                            <option value="<?php echo $row->id ?>"><?php echo $row->name ?></option>
                                        <?php } ?> -->
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Alamat</label>
                        <textarea name="alamat" id="" required rows="4" class="form-control" placeholder="*Masukan Nama Jalan lengkap"><?php if (isset($user['alamat']) == NULL) {
                                                                                                                                            echo '';
                                                                                                                                        } else {
                                                                                                                                            echo (explode("`", $user['alamat'])[4]);
                                                                                                                                        } ?></textarea>
                    </div>
                    <div class="row">
                        <div class="col-sm-6"></div>
                        <div class="col-sm-6">
                            <label class="form-label">Ubah Password</label>
                            <div class="input-group mb-3">
                                <input type="password" name="password" class="form-control" value="<?php echo $user['password'] ?>" id="myInput" aria-label="Text input with checkbox">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <input type="checkbox" name="password" onclick="myFunction()" aria-label="Checkbox for following text input">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 float-right">
                        <button type=" submit" class="btn btn-primary"><i class="fas fa-save"></i> Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

</html>
<script>
    function myFunction() {
        var x = document.getElementById("myInput");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }

    $(function() {
        //Initialize Select2 Elements
        $('.select2').select2()
    })
</script>