<div class="container mt-5">
    <div class="row">
        <div class="alert alert-success mt-3">
            <div class="row">
                <div class="col-sm-6">
                    <h4>Home</h4>
                </div>
                <div class="col-sm-6" style="text-align: right;">
                    <h5>
                        Welcome: <?php echo $user['username'] ?>
                    </h5>
                </div>
            </div>
        </div>
        <hr style="border: 3px;">
        <div class="mb-4" style="text-align: end;">
            <!-- Button Add Modal -->
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addContent" title="Add Content">
                <i class="fas fa-plus"></i> Tambah Admin
            </button>
            <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#logoutModal" style="text-decoration: none; color:white"><i class="bi bi-person-fill"> </i>Logout</a>
        </div>
        <table id="example2" class="table table-bordered table-striped " width="100%">
            <thead class="bg-dark text-white">
                <tr class="text-center">
                    <th>Username</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Role</th>
                    <th>Alamat</th>
                    <th>No Telephone</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($isi as $row) { ?>
                    <tr>
                        <td><?php echo $row->username; ?></td>
                        <td><?php echo $row->email; ?></td>
                        <td><?php echo $row->password; ?></td>
                        <td><?php echo $row->role; ?></td>
                        <td><?php echo $row->alamat; ?></td>
                        <td><?php echo $row->no_telp; ?></td>
                        <td>
                            <a href="edit<?php echo $row->id; ?>" data-bs-toggle="modal" data-bs-target="#edit<?php echo  $row->id ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                            <?php echo anchor(
                                'CTR_Pemilik/HapusUser/' . $row->id,
                                "<button type='button' class='btn btn-danger btn-sm' data-placement='top' data-toggle='tooltip' title='Hapus'><i class='fas fa-trash'></i>
                            </button>",
                                array('onclick' => "return confirm('Hapus data $row->username?');")
                            ); ?>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>

<!-- Modal Add Data -->
<div class="modal fade" id="addContent" tabindex="-1" aria-labelledby="addContent" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addContent">Add Content</h5>

                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="<?php echo site_url() . '/CTR_Pemilik/SimpanUser'; ?>">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="control-group mb-2">
                                <label class="control-label mb-2">Username</label>
                                <div class="controls">
                                    <input type="text" class="form-control" name="username" placeholder="username">
                                </div>
                            </div>
                            <div class="control-group mb-2">
                                <label class="control-label mb-2">Email</label>
                                <div class="controls">
                                    <input type="email" class="form-control" name="email" placeholder="Email">
                                </div>
                            </div>
                            <div class="control-group mb-2">
                                <label class="control-label mb-2">Password</label>
                                <div class="controls">
                                    <input type="password" class="form-control" name="password" placeholder="Password">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="control-group mb-2">
                                <label class="control-label mb-2">Role</label>
                                <div class="controls">
                                    <select name="role" class="form-select">
                                        <option value="" disabled selected>Pilih Role</option>
                                        <option value="Admin">Admin</option>
                                        <option value="Pemilik">Pemilik</option>
                                    </select>
                                </div>
                            </div>
                            <div class="control-group mb-2">
                                <label class="control-label mb-2">No Telp</label>
                                <div class="controls">
                                    <input type="text" class="form-control" name="no_telp" placeholder="No Telphone">
                                </div>
                            </div>
                            <div class="control-group mb-5">
                                <label class="control-label mb-2">Alamat</label>
                                <div class="controls">
                                    <textarea name="alamat" rows="4" class="form-control" placeholder="Alamat Lengkap"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="reset" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal Edit -->
<?php foreach ($isi as $row) { ?>
    <div class="modal hide fade" aria-labelledby="edit<?php echo $row->id; ?>" id="edit<?php echo $row->id; ?>" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="edit">Edit Data</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <hr>
                </div>
                <div class="modal-body">
                    <form method="POST" action="<?php echo site_url() . '/CTR_Pemilik/UpdateUser'; ?>">
                        <input type="hidden" class="form-control" name="id" value="<?php echo $row->id ?>">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="control-group mb-2">
                                    <label class="control-label mb-2">Username</label>
                                    <div class="controls">
                                        <input type="text" class="form-control" name="username" value="<?php echo $row->username ?>">
                                    </div>
                                </div>
                                <div class="control-group mb-2">
                                    <label class="control-label mb-2">Email</label>
                                    <div class="controls">
                                        <input type="email" class="form-control" name="email" value="<?php echo $row->email ?>">
                                    </div>
                                </div>
                                <div class="control-group mb-2">
                                    <label class="control-label mb-2">Password</label>
                                    <div class="controls">
                                        <input type="password" class="form-control" name="password" value="<?php echo $row->password ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="control-group mb-2">
                                    <label class="control-label mb-2">Role</label>
                                    <div class="controls">
                                        <select name="role" class="form-select">
                                            <option value="" disabled selected>Pilih Role</option>
                                            <?php if ($row->role == 'Admin') { ?>
                                                <option value="Admin" selected>Admin</option>
                                                <option value="Pemilik">Pemilik</option>
                                            <?php } ?>
                                            <?php if ($row->role == 'Pemilik') { ?>
                                                <option value="Admin">Admin</option>
                                                <option value="Pemilik" selected>Pemilik</option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="control-group mb-2">
                                    <label class="control-label mb-2">No Telp</label>
                                    <div class="controls">
                                        <input type="text" class="form-control" name="no_telp" value="<?php echo $row->no_telp ?>">
                                    </div>
                                </div>
                                <div class="control-group mb-5">
                                    <label class="control-label mb-2">Alamat</label>
                                    <div class="controls">
                                        <textarea name="alamat" rows="4" class="form-control"><?php echo $row->alamat ?></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="reset" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
<!-- Akhir Modal Edit -->
</div>