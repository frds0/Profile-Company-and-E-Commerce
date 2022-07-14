<div class="container mt-5">
    <div class="row">
        <div class="alert alert-success mt-3 mb-4">
            <h4>Service Admin</h4>
        </div>
        <table id="example2" class="table table-bordered table-striped " width="100%">
            <thead class="bg-dark text-white align-middle">
                <tr class="text-center">
                    <th scope="col">No</th>
                    <th scope="col">Nama Lengkap</th>
                    <th scope="col">Email</th>
                    <th scope="col">No Telephone</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Nama Barang</th>
                    <th scope="col">Jenis Barang</th>
                    <th scope="col">Merk Barang</th>
                    <th scope="col">Pesan</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <?php $no = 1;
            foreach ($isiS as $row) { ?>
                <tr>
                    <td class="text-center"><?php echo $no++ ?></td>
                    <td><?php echo $row->name; ?></td>
                    <td><?php echo $row->email; ?></td>
                    <td><?php echo $row->no_telp; ?></td>
                    <td><?php echo $row->alamat; ?></td>
                    <td><?php echo $row->nama_b; ?></td>
                    <td><?php echo $row->jenis_b; ?></td>
                    <td><?php echo $row->merk_b; ?></td>
                    <td><?php echo $row->pesan; ?></td>
                    <td class="text-center">
                        <!-- Edit Pelanggan -->
                        <a href="#edit<?php echo $row->id_services; ?>" data-bs-target="#edit<?php echo $row->id_services; ?>" data-bs-toggle="modal" class="btn btn-warning"><i class="bi bi-pencil icon-large"></i></a>
                        <!-- Delete Pelanggan -->
                        <?php echo anchor(
                            'CTR_Admin/HapusDataS/' . $row->id_services,
                            "<button type='button' class='btn btn-danger' data-placement='top' data-toggle='tooltip' title='Hapus'><i class='bi bi-trash'></i></button>",
                            array('onclick' => "return confirm('Hapus data $row->name?');")
                        ); ?>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>
    <!-- Modal Edit Pelanggan -->
    <?php foreach ($isiS as $row) { ?>
        <div aria-labelledby="edit<?php echo $row->id_services; ?>" id="edit<?php echo $row->id_services; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog  modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="edit">Edit Data</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <hr>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <form class="form-horizontal" method="POST" action="<?php echo site_url('CTR_Admin/EditDataP'); ?>" enctype="multipart/form-data">
                                    <input type="hidden" name="id_services" placeholder="ID" value="<?php echo $row->id_services; ?>" required>
                                    <div class="control-group">
                                        <label class="control-label">Nama</label>
                                        <div class="controls">
                                            <input type="text" name="name" placeholder="Nama" value="<?php echo $row->name; ?>">
                                        </div>
                                    </div>

                                    <div class="control-group">
                                        <label class="control-label">Email</label>
                                        <div class="controls">
                                            <input type="text" name="email" placeholder="Email" value="<?php echo $row->email; ?>">
                                        </div>
                                    </div>

                                    <div class="control-group">
                                        <label class="control-label">No Telephone</label>
                                        <div class="controls">
                                            <input type="text" name="no_telp" placeholder="No Telephone" value="<?php echo $row->no_telp; ?>">
                                        </div>
                                    </div>

                                    <div class="control-group">
                                        <label class="control-label">Alamat</label>
                                        <div class="controls">
                                            <textarea name="alamat" cols="30" rows="4" placeholder="Alamat"><?php echo $row->alamat; ?></textarea>
                                        </div>
                                    </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="control-group">
                                    <label class="control-label">Nama Barang</label>
                                    <div class="controls">
                                        <input type="text" name="nama_b" placeholder="Nama Barang" value="<?php echo $row->nama_b; ?>">
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label">Jenis Barang</label>
                                    <div class="controls">
                                        <input type="text" name="jenis_b" placeholder="Jenis Barang" value="<?php echo $row->jenis_b; ?>">
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label">Merek Barang</label>
                                    <div class="controls">
                                        <input type="text" name="merk_b" placeholder="Merek Barang" value="<?php echo $row->merk_b; ?>">
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label">Pesan</label>
                                    <div class="controls">
                                        <textarea name="pesan" cols="30" rows="4" placeholder="Detail Content"><?php echo $row->pesan; ?></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center mb-5">
                        <button type="reset" class="btn btn-danger" data-bs-dismiss="modal">Reset</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
    <!-- Akhir Modal Pelanggan -->
</div>