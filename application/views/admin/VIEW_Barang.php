<div class="container mt-5">
    <div class="row">
        <div class="alert alert-dark mt-3">
            <h4>Table Barang Admin</h4>
        </div>
        <hr style="border: 3px;">
        <div class="mb-4" style="text-align: end;">
            <!-- Button Add Modal -->
            <button type="button" class="btn btn-success " data-bs-toggle="modal" data-bs-target="#addContent" title="Add Content">
                <i class="fas fa-plus"></i> Add Content
            </button>
        </div>
        <?php echo $this->session->flashdata('msg'); ?>
        <table id="example2" class="table table-bordered table-striped" width="100%">
            <thead class="bg-dark text-white">
                <tr class="text-center">
                    <th>Title</th>
                    <th>Spek</th>
                    <th>Spesifikasi</th>
                    <th>Harga</th>
                    <th>Merek</th>
                    <th>Stok</th>
                    <th>Gambar</th>
                    <th>Kondisi</th>
                    <th><i class="fas fa-star"></i></th>
                    <th>Kategori</th>
                    <th style="width: 1px;">Action</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($barang as $row) { ?>
                    <tr>
                        <td><?php echo $row->nama_barang; ?></td>
                        <td><?php echo $row->spek; ?></td>
                        <td><?php echo $row->spesifikasi; ?></td>
                        <td><?php $harga1 =  $row->harga;
                            $angka_format = number_format($harga1, 0, ",", ".");
                            echo "Rp.&nbsp;" . $angka_format; ?>
                        </td>
                        <td><?php echo $row->merek; ?></td>
                        <td><?php echo $row->stok; ?></td>
                        <td><img src="<?php echo base_url('assets/img/barang/' . $row->gambar) ?>" width="110" alt=""></td>
                        <td><?php echo $row->kondisi; ?></td>
                        <td><?php echo $row->star; ?></td>
                        <td><?php echo $row->kategori; ?></td>
                        <td>
                            <!-- Edit Data -->
                            <a href="#edit<?php echo $row->id_barang; ?>" data-bs-target="#edit<?php echo $row->id_barang; ?>" data-bs-toggle="modal" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                            <!-- Hapus Data -->
                            <?php echo anchor(
                                'CTR_Admin/HapusBarang/' . $row->id_barang,
                                "<button type='button' class='btn btn-danger btn-sm' data-placement='top' data-toggle='tooltip' title='Hapus'><i class='fas fa-trash'></i></button>",
                                array('onclick' => "return confirm('Hapus data $row->nama_barang?');")
                            ); ?>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <!-- Modal Add Barang -->
    <div class="modal fade" id="addContent" tabindex="-1" aria-labelledby="addContent" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addContent">Add Content</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="<?php echo site_url('CTR_Admin/SimpanBarang') ?>" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group mb-2">
                                    <label class="control-label mb-2">Kategori</label>
                                    <select class="form-select" name="kategori" aria-placeholder="Kategori">
                                        <option value="" disabled selected>Pilih Kategori</option>
                                        <option value="Komputer">Komputer</option>
                                        <option value="Laptop">Laptop</option>
                                        <option value="Printer">Printer</option>
                                    </select>
                                </div>
                                <div class="control-group mb-2">
                                    <label class="control-label mb-2">Nama Barang</label>
                                    <div class="controls">
                                        <input type="text" class="form-control" name="nama_barang" placeholder="Nama Barang">
                                    </div>
                                </div>
                                <div class="control-group mb-2">
                                    <label class="control-label mb-2">Spek</label>
                                    <div class="controls">
                                        <input type="text" class="form-control" name="spek" placeholder="Spek">
                                    </div>
                                </div>
                                <div class="form-group mb-2">
                                    <label class="control-label mb-2">Kondisi</label>
                                    <select class="form-select" name="kondisi" aria-placeholder="Kondisi">
                                        <option value="" disabled selected>Pilih Kondisi</option>
                                        <option value="New">New</option>
                                        <option value="Second">Second</option>
                                    </select>
                                </div>
                                <div class="form-group mb-2">
                                    <label class="control-label mb-2">Bintang</label>
                                    <select class="form-select" name="star" aria-placeholder="Bintang">
                                        <option value="" disabled selected>Pilih Bintang Kondisi</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="control-group mb-2">
                                    <label class="control-label mb-2">Harga</label>
                                    <div class="controls">
                                        <input type="text" class="form-control" name="harga" placeholder="Harga">
                                    </div>
                                </div>
                                <div class="control-group mb-2">
                                    <label class="control-label mb-2">Merek</label>
                                    <div class="controls">
                                        <input type="text" class="form-control" name="merek" placeholder="Merek">
                                    </div>
                                </div>
                                <div class="control-group mb-2">
                                    <label class="control-label mb-2">Stok</label>
                                    <div class="controls">
                                        <input type="text" class="form-control" name="stok" placeholder="Stok">
                                    </div>
                                </div>
                                <div class="control-group mb-2">
                                    <label class="control-label mb-2">Gambar</label>
                                    <div class="input-group mb-3">
                                        <input type="file" class="form-control" name="gambar" id="gambar"><br>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="control-group mb-2">
                                    <label class="control-label mb-2">Spesifikasi</label>
                                    <div class="controls">
                                        <textarea name="spesifikasi" class="form-control" cols="40" rows="5" placeholder="Spesifikasi"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <a href="#" class="btn btn-danger" aria-label="close" data-bs-dismiss="modal">Cancel</a>
                            <!-- <button type="reset" class="btn btn-danger" aria-label="close" data-bs-dismiss="modal"></button> -->
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Akhir Modal Add Barang -->

    <!-- Modal Edit Komputer -->
    <?php foreach ($barang as $row) { ?>
        <div aria-labelledby="edit<?php echo $row->id_barang; ?>" id="edit<?php echo $row->id_barang; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="edit">Edit Data</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal" method="POST" action="<?php echo site_url('CTR_Admin/EditBarang'); ?>" enctype="multipart/form-data">
                            <input type="hidden" name="id_barang" placeholder="ID" value="<?php echo $row->id_barang; ?>" required>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group mb-2">
                                        <label class="control-label mb-2">Kategori</label>
                                        <select class="form-select" name="kategori" aria-placeholder="Kategori">
                                            <?php if ($row->kategori == 'Komputer') { ?>
                                                <option value="Komputer" selected>Komputer</option>
                                                <option value="Laptop">Laptop</option>
                                                <option value="Printer">Printer</option>
                                            <?php } else if ($row->kategori == 'Laptop') { ?>
                                                <option value="Komputer">Komputer</option>
                                                <option value="Laptop" selected>Laptop</option>
                                                <option value="Printer">Printer</option>
                                            <?php } else if ($row->kategori == 'Printer') { ?>
                                                <option value="Komputer">Komputer</option>
                                                <option value="Laptop">Laptop</option>
                                                <option value="Printer" selected>Printer</option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="control-group mb-2">
                                        <label class="control-label mb-2">Nama Barang</label>
                                        <div class="controls">
                                            <input type="text" class="form-control" name="nama_barang" placeholder="Nama Barang" value="<?php echo $row->nama_barang; ?>">
                                        </div>
                                    </div>
                                    <div class="control-group mb-2">
                                        <label class="control-label mb-2">Spek</label>
                                        <div class="controls">
                                            <input type="text" class="form-control" name="spek" placeholder="Spek" value="<?php echo $row->spek; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group mb-2">
                                        <label class="control-label mb-2">Kondisi</label>
                                        <select class="form-select" name="kondisi" aria-placeholder="Kondisi">
                                            <?php if ($row->kondisi == 'New') { ?>
                                                <option value="New" selected>New</option>
                                                <option value="Second">Second</option>
                                            <?php } else if ($row->kondisi == 'Second') { ?>
                                                <option value="New">New</option>
                                                <option value="Second" selected>Second</option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group mb-2">
                                        <label class="control-label mb-2">Bintang</label>
                                        <select class="form-select" name="star" aria-placeholder="Bintang">
                                            <?php if ($row->star == '1') { ?>
                                                <option value="1" selected>1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            <?php } else if ($row->star == '2') { ?>
                                                <option value="1">1</option>
                                                <option value="2" selected>2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            <?php } else if ($row->star == '3') { ?>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3" selected>3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            <?php } else if ($row->star == '4') { ?>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4" selected>4</option>
                                                <option value="5">5</option>
                                            <?php } else if ($row->star == '5') { ?>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5" selected>5</option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="control-group mb-2">
                                        <label class="control-label mb-2">Harga</label>
                                        <div class="controls">
                                            <input type="text" class="form-control" name="harga" placeholder="Harga" value="<?php echo $row->harga; ?>">
                                        </div>
                                    </div>
                                    <div class="control-group mb-2">
                                        <label class="control-label mb-2">Merek</label>
                                        <div class="controls">
                                            <input type="text" class="form-control" name="merek" placeholder="Merek" value="<?php echo $row->merek; ?>">
                                        </div>
                                    </div>
                                    <div class="control-group mb-2">
                                        <label class="control-label mb-2">Stok</label>
                                        <div class="controls">
                                            <input type="text" class="form-control" name="stok" placeholder="Stok" value="<?php echo $row->stok; ?>">
                                        </div>
                                    </div>
                                    <div class="control-group mb-2">
                                        <label class="control-label mb-2">Gambar</label>
                                        <div class="input-group mb-3">
                                            <input type="file" class="form-control" name="gambar" id="gambar" value="<?php echo $row->gambar; ?>"><br>
                                            <img src="<?php echo base_url('assets/img/barang/' . $row->gambar) ?>" width="90" style="text-align: center;" aria-valuenow="<?php echo $row->gambar; ?>">
                                            <input type="hidden" name="old" class="form-control" value="<?php echo $row->gambar; ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="control-group mb-2">
                                    <label class="control-label mb-2">Spesifikasi</label>
                                    <div class="controls">
                                        <textarea name="spesifikasi" class="form-control" cols="40" rows="5" placeholder="Spesifikasi"><?php echo $row->spesifikasi; ?></textarea>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <a href="#" class="btn btn-danger" aria-label="close" data-bs-dismiss="modal">Cancel</a>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    <?php } ?>
    <!-- Akhir Modal Edit Komputer -->
</div>