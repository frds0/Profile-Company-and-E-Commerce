<div class="container-fluid">
    <div class="card">
        <div class="container">
            <h1>Keranjang <?php echo $user['username'] ?></h1>
        </div>
        <div class="container-fluid mt-3">
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-sm-12">
                        <div class="card-header">
                            <span>
                                <!-- <a href="<?php echo site_url('CTR_Pelanggan/UpdateKeranjang') ?>" class="btn btn-success"><i class="fas fa-save"></i> Update</a> -->
                                <a href="<?php echo site_url('CTR_Pelanggan/UpdateKeranjang') ?>" class="btn btn-success disabled"><br></a>
                                <?php if ($this->cart->total() == 0) { ?>
                                    <a href="#" class="btn btn-success btn-sm float-end">Pesan Sekarang</a>
                                    <p class="float-end fs-5 mr-3">Total Belanja:
                                        <b>Rp. 0</b>
                                    </p>
                                <?php } else { ?>
                                    <a href="#LanjutkanKeranjang<?php echo $user['id'] ?>" data-toggle="modal" data-target="#LanjutkanKeranjang<?php echo $user['id'] ?>" class="btn btn-success btn-sm float-end">Pesan Sekarang</a>
                                    <p class="float-end fs-5 mr-3">Total Belanja:
                                        <?php
                                        $keranjang = $this->cart->contents();
                                        $tott = 0;
                                        foreach ($keranjang as $r) {
                                            $total_bayar = $tott += $r['subtotal'];
                                        }
                                        $angka_format = number_format($total_bayar, 0, ",", ".");
                                        echo "<b>Rp. " . $angka_format . "</b>";
                                        ?></p>
                                <?php } ?>
                            </span>
                        </div>
                        <div class="card-body">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table id="example2" class="table table-bordered table-striped">
                                            <thead class="text-center font-weight-bold">
                                                <tr>
                                                    <td>#</td>
                                                    <td>Nama Barang</td>
                                                    <td style="width: 45px;">Qty</td>
                                                    <td>Harga</td>
                                                    <td>Total Harga</td>
                                                    <td>Action</td>
                                                </tr>
                                            </thead>
                                            <tbody class="text-center">
                                                <?php
                                                $keranjang = $this->cart->contents();
                                                $no = 1;
                                                $i = 1;
                                                foreach ($keranjang as $row => $value) { ?>
                                                    <input type="hidden" value="<?php echo $value['id'] ?>">
                                                    <tr>
                                                        <td><?php echo $no++ ?></td>
                                                        <td><?php echo $value['name'] ?></td>
                                                        <td><input type="number" name="qty<?php echo $i++; ?>" min="0" class="form-control" readonly style="width: 55px;" value="<?php echo $value['qty'] ?>">
                                                        </td>
                                                        <td>
                                                            <?php
                                                            $harga1 =  $value['price'];
                                                            $angka_format = number_format($harga1, 0, ",", ".");
                                                            echo "Rp. " . $angka_format;
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <?php
                                                            $harga1 =  $value['subtotal'];
                                                            $angka_format = number_format($harga1, 0, ",", ".");
                                                            echo "Rp. " . $angka_format;
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <a href="<?php echo site_url('CTR_Pelanggan/DeleteKeranjang/' . $value['rowid']) ?>" class="btn btn-danger btn-sm">Hapus</a>
                                                        </td>
                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal Lanjutkan Keranjang -->
<?php $keranjang = $this->cart->contents();
foreach ($keranjang as $row) { ?>
    <div class="modal fade" id="LanjutkanKeranjang<?php echo $user['id'] ?>" tabindex="-1" aria-labelledby="LanjutkanKeranjang<?php echo $user['id'] ?>Label" aria-hidden="true">
        <div class="modal-dialog modal-xl   ">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><?php echo $row['name'] ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php
                $notrans = $this->data->GetNoTransaksi();
                $jumlahdata = $this->data->GetNoTransaksi2();
                if ($notrans) {
                    $nilaikode = substr($jumlahdata, 0, 1);
                    $kode      = (int) $nilaikode;
                    //setiap $kode ditambah 1
                    $kode = $jumlahdata + 1;
                    //angka 3 untuk menambahkan empat angka setelah B
                    //dan angka 0 sebelum $kode
                    $notrans = "TR" . str_pad($kode, 3, "0", STR_PAD_LEFT);
                } else {
                    $notrans = "TR001";
                    // date_default_timezone_set('Asia/Jakarta');
                    // $tr = date('dmy') . $notrans;
                } ?>
                <form action="<?php echo site_url('CTR_Pelanggan/TransaksiLanjut') ?>" method="POST">
                    <div class="modal-body">
                        <input type="hidden" name="no_transaksi" value="<?php echo $notrans ?>">
                        <input type="hidden" name="id" value="<?php echo $user['id'] ?>">
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
                                                <input class="form-control" type="text" name="nama_lengkap" placeholder="Nama Lengkap" value="<?php echo $user['username'] ?>" readonly required>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="form-label">No Telephone</label>
                                                <input class="form-control" type="text" name="no_telp" placeholder="No Telephone" value="<?php echo $user['no_telp'] ?>" readonly required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <div class="mb-3">
                                                <label class="form-label">Provinsi</label>
                                                <select name="provinsi" disabled id="" class="form-select" required>
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
                                                <select name="kecamatan" id="" disabled class="form-select" required>
                                                    <option value="" selected disabled>*Pilih Kecamatan</option>
                                                    <option value="Jatinegara" <?php echo (explode("`", $user['alamat'])[2] == "Jatinegara" ? "selected" : ""); ?>>Jatinegara</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="mb-3">
                                                <label class="form-label">Kelurahan</label>
                                                <select name="kelurahan" id="" disabled class="form-select" required>
                                                    <option value="" selected disabled>*Pilih Kelurahan</option>
                                                    <option value="Cipinang Muara" <?php echo (explode("`", $user['alamat'])[3] == "Cipinang Muara" ? "selected" : ""); ?>>Cipinang Muara</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Alamat</label>
                                        <textarea name="alamat" readonly id="" required rows="4" class="form-control" placeholder="*Masukan Nama Jalan lengkap"><?php echo (explode("`", $user['alamat'])[4]) ?></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="card mt-4">
                                <div class="card-body">
                                    <?php $keranjang = $this->cart->contents();
                                    foreach ($keranjang as $row1) { ?>
                                        <input type="hidden" name="id_transaksi[]" value="<?php echo $id_transaksi ?>">
                                        <!-- <input type="text" name="stok[]" value="<?php echo $stok ?>">
                                        <input type="text" name="id_barang[]" value="<?php echo $id_barang ?>"> -->
                                        <div class="row mt-4">
                                            <div class="col-sm-3">
                                                <input type="hidden" name="id_barang[]" value="<?php echo $row1['id'] ?>">
                                                <label class="control-label fw-bold">Nama Barang</label>
                                                <div class="form-group">
                                                    <p><?php echo $row1['name'] ?></p>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <label class="control-label fw-bold">Harga</label>
                                                <div class="form-group">
                                                    <?php
                                                    $harga1 =  $row1['price'];
                                                    $angka_format = number_format($harga1, 0, ",", ".");
                                                    echo "Rp. " . $angka_format;
                                                    ?>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <label class="control-label fw-bold">Qty</label>
                                                <div class="form-group">
                                                    <input type="hidden" class="form-control" id="qty" min="1" max="100" value="<?php echo $row1['qty'] ?>" name="qty[]">
                                                    <?php echo $row1['qty'] ?>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <label class="control-label fw-bold">Total</label>
                                                <div class="form-group">
                                                    <input type="hidden" class="form-control" id="harga" min="1" max="100" value="<?php echo $row1['qty'] ?>" name="qty[]">
                                                    <?php
                                                    $tott = 0;
                                                    $total_bayar = $tott += $r['subtotal'];
                                                    $angka_format = number_format($harga1, 0, ",", ".");
                                                    echo "Rp. " . $angka_format;
                                                    ?>
                                                </div>
                                            </div>
                                            <div class="div">
                                                <hr>
                                            </div>
                                        </div>
                                    <?php } ?>
                                    <div class="row justify-content-end">
                                        <!-- <div class="col-sm-3">
                                                <img src="<?php echo base_url('assets/img/barang/' . $row1->gambar) ?>" class="card-img-top shadow-lg" style="width: 200px;">
                                            </div> -->
                                        <div class="col-sm-3">
                                            <label class="control-label fw-bold">Pembayaran</label>
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
                                            <label class="control-label fw-bold">Pengiriman</label>
                                            <div class="form-group">
                                                <select class="custom-select" name="pengiriman" id="pengiriman" required onchange="total()">
                                                    <option value="" selected disabled>Pilih Pengiriman</option>
                                                    <option value="Hemat">Hemat</option>
                                                    <option value="Standard">Standard</option>
                                                    <option value="Express">Express</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <label class="control-label fw-bold">Total Belanja</label>
                                            <label class="control-label text-danger float-right" style="font-size: 10px;">*Pilih Biaya Pengiriman</label>
                                            <div class="form-group fs-5 fw-bold disabled">
                                                <input type="text" class="form-control" name="total_harga" id="total_harga" value="<?php echo $this->cart->total() ?>" readonly>
                                                <!-- <?php
                                                        $hemat = 12000;
                                                        $standard = 15000;
                                                        $express = 20000;
                                                        $harga1 =  $this->cart->total() + ($row1['qty'] * $standard);
                                                        $angka_format = number_format($harga1, 0, ",", ".");
                                                        echo "Rp. " . $angka_format;
                                                        ?> -->
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
        var harga = <?php echo $this->cart->total() ?>
        // var qty = document.getElementById('qty').value
        // var pengiriman = document.getElementById('pengiriman').value

        if (document.getElementById('pengiriman').value == 'Hemat') {
            document.getElementById('total_harga').value = harga + 12000;
        } else if (document.getElementById('pengiriman').value == 'Standard') {
            document.getElementById('total_harga').value = harga + 15000;
        } else if (document.getElementById('pengiriman').value == 'Express') {
            document.getElementById('total_harga').value = harga + 20000;
        }
    }
</script>