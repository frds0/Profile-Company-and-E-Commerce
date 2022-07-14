<div class="container">
    <?php echo $this->session->flashdata('msg'); ?>
    <!-- <div class="row text-center mb-2">
        <div class="col">
            <h2>Services Store</h2>
        </div>
    </div> -->
    <!-- <div class="row justify-content-center">
        <div class="col-md-8">
            <form method="POST" action="<?php echo site_url() ?>/CTR_Company/SimpanDataS">
                <div class="mb-3">
                    <h2>Identitas Pemilik Barang</h2>
                </div>

                <div class="mb-3">
                    <label for="name" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" id="name" name="name" aria-describedby="name" value="<?php echo $user['username'] ?>" />
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label> <span class="float-end text-danger" style="font-style: italic; font-size: 12px;">*Email Valid</span>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="email" value="<?php echo $user['email'] ?>" />
                </div>

                <div class="mb-3">
                    <label for="no_telp" class="form-label">No Telephone</label>
                    <input type="text" class="form-control" id="no_telp" name="no_telp" aria-describedby="no_telp" value="<?php echo $user['no_telp'] ?>" />
                </div>

                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <textarea class="form-control ckeditor" id="ckeditor" name="alamat" rows="3"><?php echo $user['alamat'] ?></textarea>
                </div>
        </div>
    </div> -->

    <!-- <div>
        <hr>
    </div> -->
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="mb-3">
                <h2>Barang Yang Ingin di Service</h2>
            </div>
            <div class="mb-3">
                <label for="nama_b" class="form-label">Nama Barang</label>
                <input type="text" class="form-control" id="nama_b" name="nama_b" aria-describedby="nama_b" />
            </div>

            <div class="mb-3">
                <label for="jenis_b" class="form-label">Jenis Barang</label>
                <input type="text" class="form-control" id="jenis_b" name="jenis_b" aria-describedby="jenis_b" />
            </div>

            <div class="mb-3">
                <label for="merk_b" class="form-label">Merk Barang</label>
                <input type="text" class="form-control" id="merk_b" name="merk_b" aria-describedby="merk_b" />
            </div>

            <div class="mb-3">
                <label for="pesan" class="form-label">Pesan</label>
                <textarea class="form-control" id="pesan" name="pesan" rows="3"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Kirim</button>
            </form>
        </div>
    </div>