<div class="container">
    <?php foreach ($isiL as $row) { ?>
        <div class="row mt-lg-5" style="margin-bottom: 8rem;">
            <div class="col-sm-6">
                <img src="<?php echo base_url('assets/img/laptop/' . $row->gambar) ?>" class="card-img-top shadow-lg" style="width: 500px; height: 500px;"></a>
            </div>
            <div class="col-sm-6">
                <form action="<?php echo site_url('CTR_Pelanggan/MasukanKeranjang') ?>" method="POST">
                    <input type="hidden" name="id_barang" value="<?php echo $row->id_barang ?>">
                    <input type="hidden" name="nama_barang" value="<?php echo $row->nama_barang ?>">
                    <input type="hidden" name="harga" value="<?php echo $row->harga ?>">
                    <input type="hidden" name="id_barang" value="<?php echo $row->id_barang ?>">
                    <div class="form-group">
                        <h1 class="card-title" style="font-size: 5rem;"><?php echo $row->nama_barang ?></h1>
                    </div>
                    <div class="form-group">
                        <h4>
                            <?php
                            $harga1 =  $row->harga;
                            $angka_format = number_format($harga1, 0, ",", ".");
                            echo "Rp. " . $angka_format;
                            ?>
                        </h4>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-2">
                                <input type="number" class="form-control" name="qty" min="1" required value="0">
                            </div>
                            <div class="col-sm-5">
                                <button type="submit" class="btn btn-warning"><i class="fas fa-shopping-cart"></i> Masukan Keranjang</button>
                            </div>
                            <div class="col-sm-5">
                                <a href="#BuyLaptop<?php echo $id_barang ?>" data-toggle="modal" data-target="#BuyLaptop<?php echo $id_barang ?>" class="btn text-white" style="background-color: #0099cc;">Beli Sekarang </a>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-4">
                                Merek
                            </div>
                            <div class="col-sm-8">
                                : <?php echo $row->merek ?>
                            </div>
                        </div>
                        <hr class="sidebar-divider">
                        <div class="row">
                            <div class="col-sm-4">
                                Stok
                            </div>
                            <div class="col-sm-8">
                                : <?php echo $row->stok ?>
                            </div>
                        </div>
                        <hr class="sidebar-divider">
                        <div class="row">
                            <div class="col-sm-4">
                                Kondisi
                            </div>
                            <div class="col-sm-8">
                                : <?php echo $row->kondisi ?>
                            </div>
                        </div>
                        <hr class="sidebar-divider">
                        <div class="row">
                            <div class="col-sm-4">
                                Dikirim Dari
                            </div>
                            <div class="col-sm-8">
                                : Bekasi
                            </div>
                        </div>
                        <hr class="sidebar-divider">
                        <div class="row">
                            <div class="col-sm-12 mb-2">
                                <b>Deskirpsi Lainnya</b>
                            </div>
                            <div class="col-sm-12">
                                <p class="card-text"><?php echo $row->spesifikasi ?></p>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    <?php } ?>
</div>
<!-- Modal Buy Now -->
<?php foreach ($isiL as $row) { ?>
    <div class="modal fade" id="BuyLaptop<?php echo $id_barang ?>" tabindex="-1" aria-labelledby="BuyLaptop<?php echo $id_barang ?>Label" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><?php echo $row->nama_barang ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?php echo site_url('CTR_Pelanggan/Transaksi') ?>" method="POST">
                    <div class="modal-body">
                        <input type="hidden" name="id_barang" value="<?php echo $row->id_barang ?>">
                        <input type="hidden" name="id" value="<?php echo $user['id'] ?>">
                        <input type="hidden" name="stok" value="<?php echo $row->stok ?>">
                        <div class="control-group">
                            <div class="card-header bg-secondary text-light fs-5">
                                <i class="fas fa-map-marker-alt"></i> Alamat Pengiriman
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="form-label">Username</label>
                                                <input class="form-control" type="text" name="nama_lengkap" placeholder="Nama Lengkap" readonly value="<?php echo $user['username'] ?>" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="form-label">No Telephone</label>
                                                <input class="form-control" type="text" name="no_telp" placeholder="No Telephone" readonly value="<?php echo $user['no_telp'] ?>" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <div class="mb-3">
                                                <label class="form-label">Provinsi</label>
                                                <select name="provinsi" id="" disabled class="form-select" required>
                                                    <option value="" selected disabled>*Pilih Provinsi</option>
                                                    <option value="DKI Jakarta" <?php echo (explode("`", $user['alamat'])[0] == "DKI Jakarta" ? "selected" : ""); ?>>DKI Jakarta</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="mb-3">
                                                <label class="form-label">Kabupaten / Kota</label>
                                                <select name="kota" id="" disabled class="form-select" required>
                                                    <option value="" selected disabled>*Pilih Kabupaten</option>
                                                    <option value="Jakarta Timur" <?php echo (explode("`", $user['alamat'])[1] == "Jakarta Timur" ? "selected" : ""); ?>>Jakarta Timur</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="mb-3">
                                                <label class="form-label">Kecamatan</label>
                                                <select name="kecamatan" disabled id="" class="form-select" required>
                                                    <option value="" selected disabled>*Pilih Kecamatan</option>
                                                    <option value="Jatinegara" <?php echo (explode("`", $user['alamat'])[2] == "Jatinegara" ? "selected" : ""); ?>>Jatinegara</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="mb-3">
                                                <label class="form-label">Kelurahan</label>
                                                <select name="kelurahan" disabled id="" class="form-select" required>
                                                    <option value="" selected disabled>*Pilih Kelurahan</option>
                                                    <option value="Cipinang Muara" <?php echo (explode("`", $user['alamat'])[3] == "Cipinang Muara" ? "selected" : ""); ?>>Cipinang Muara</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Alamat</label>
                                        <textarea name="alamat" id="" readonly required rows="4" class="form-control" placeholder="*Masukan Nama Jalan lengkap"><?php echo (explode("`", $user['alamat'])[4]) ?></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="card mt-4">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <label class="control-label">Nama Barang</label>
                                            <div class="form-group">
                                                <input type="hidden" class="form-control" name="nama_barang" value="<?php echo $row->nama_barang ?>" readonly>
                                                <p><?php echo $row->nama_barang ?></p>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <label class="control-label">Harga</label>
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="harga" onchange="total()" name="harga" value="<?php echo $row->harga ?>" readonly>
                                                <!-- <p>
                                            <?php
                                            $harga1 =  $row->harga;
                                            $angka_format = number_format($harga1, 0, ",", ".");
                                            echo "Rp. " . $angka_format;
                                            ?>
                                        </p> -->
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <label class="control-label">Qty</label>
                                            <div class="form-group">
                                                <input type="number" class="form-control" id="qty" onchange="total()" min="1" max="100" value="0" name="qty">
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <label class="control-label">Total</label>
                                            <label class="control-label text-danger float-right" style="font-size: 10px;">*Pilih Biaya Pengiriman</label>
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="total_harga" id="total_harga" onchange="total()" value="" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <img src="<?php echo base_url('assets/img/barang/' . $row->gambar) ?>" class="card-img-top shadow-lg" style="width: 200px;">
                                        </div>
                                        <div class="col-sm-3">
                                            <label class="control-label">Pembayaran</label>
                                            <div class="form-group">
                                                <select class="custom-select" name="pembayaran" required>
                                                    <option value="" selected disabled>Pilih Pembayaran</option>
                                                    <!-- <option value="COD">COD</option> -->
                                                    <option value="BCA">BCA</option>
                                                    <option value="Mandiri">Mandiri</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <label class="control-label">Pengiriman</label>
                                            <div class="form-group">
                                                <select class="custom-select" onchange="total()" name="pengiriman" id="pengiriman" required>
                                                    <option value="" selected disabled>Pilih Pengiriman</option>
                                                    <option value="Hemat">Hemat</option>
                                                    <option value="Standard">Standard</option>
                                                    <option value="Express">Express</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" modal-footer">
                        <button type="submit" class="btn text-white" style="background-color: #0099cc;"><i class="fas fa-shopping-cart"></i> Pesan Sekarang</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php } ?>
<script type="text/javascript">
    function total() {
        var harga = document.getElementById('harga').value
        var qty = document.getElementById('qty').value
        // var pengiriman = document.getElementById('pengiriman').value

        if (document.getElementById('pengiriman').value == 'Hemat') {
            document.getElementById('total_harga').value = (harga * qty) + 12000;
        } else if (document.getElementById('pengiriman').value == 'Standard') {
            document.getElementById('total_harga').value = (harga * qty) + 15000;
        } else if (document.getElementById('pengiriman').value == 'Express') {
            document.getElementById('total_harga').value = (harga * qty) + 20000;
        }
    }
</script>