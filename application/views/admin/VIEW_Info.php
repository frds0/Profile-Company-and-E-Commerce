<div class="container mt-5">
    <div class="row">
        <div class="alert alert-dark mt-3">
            <div class="row">
                <div class="col-sm-6">
                    <h4>Information</h4>
                </div>
            </div>
        </div>
        <hr style="border: 3px;">
        <div class="mb-4" style="text-align: end;">
            <!-- Button Add Modal -->
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addContent" title="Add Content">
                <i class="fas fa-plus"></i> Add Content
            </button>
        </div>
        <?php echo $this->session->flashdata('msg'); ?>
        <table id="example2" style="border-bottom: 1px;" class="table table-bordered table-striped" width="100%">
            <thead class="bg-dark text-white">
                <tr class="text-center" style="vertical-align: middle;">
                    <th class="col-2">Title</th>
                    <th class="col-1">Tanggal Info</th>
                    <th class="col-2">Content Awal</th>
                    <th class="col-5">Content Akhir</th>
                    <th class="col-1">Photo</th>
                    <th class="col-1">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($isiI as $row) { ?>
                    <tr style="text-align:justify;">
                        <td><?php echo $row->tittle; ?></td>
                        <td><?php echo $row->tgl_info; ?></td>
                        <td style="padding: 10px;"><?php echo $row->content_awal; ?></td>
                        <td style="padding: 10px;"><?php echo $row->content_modal; ?></td>
                        <td><img src="<?php echo base_url('assets/img/info/' . $row->photo) ?>" width="110" alt=""></td>
                        <td style="text-align: center;">
                            <!-- Edit Data -->
                            <a href="#edit<?php echo $row->id_info; ?>" data-bs-target="#edit<?php echo $row->id_info; ?>" data-bs-toggle="modal" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>

                            <!-- Hapus Data -->
                            <?php echo anchor(
                                'CTR_Admin/HapusDataI/' . $row->id_info,
                                "<button type='button' class='btn btn-danger btn-sm' data-placement='top' data-toggle='tooltip' title='Hapus'><i class='fas fa-trash'></i></button>",
                                array('onclick' => "return confirm('Hapus data $row->tittle?');")
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
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addContent">Add Content</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="<?php echo site_url('CTR_Admin/SimpanDataI') ?>" enctype="multipart/form-data">
                    <div class="row">
                        <div class="control-group mb-3">
                            <label class="control-label">Tittle</label>
                            <input type="text" name="tittle" placeholder="Tittle" class="form-control">
                        </div>

                        <div class="control-group mb-3">
                            <label class="control-label">Tanggal Info</label>
                            <input type="date" name="tgl_info" placeholder="Tanggal Info" class="form-control">
                        </div>

                        <div class="control-group mb-3">
                            <label class="control-label">Content Awal</label>
                            <textarea id="ckeditor" name="content_awal" class="form-control ckeditor"></textarea>
                        </div>

                        <div class="control-group mb-3">
                            <label class="control-label">Content Akhir</label>
                            <textarea name="content_modal" id="ckeditor" cols="40" rows="5" placeholder="Detail Content" class="form-control ckeditor"></textarea>
                        </div>

                        <div class="control-group mb-3">
                            <label class="control-label">Photo</label>
                            <input type="file" name="photo" placeholder="Photo" class="form-control">
                        </div>
                    </div>

                    <div class="text-center">
                        <button type="reset" class="btn btn-danger" data-bs-dismiss="modal">Reset</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal Edit -->
<?php foreach ($isiI as $row) { ?>
    <div aria-labelledby="edit<?php echo $row->id_info; ?>" id="edit<?php echo $row->id_info; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="edit">Edit Data</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <hr>
                </div>

                <div class="modal-body">
                    <form class="form-horizontal" method="POST" action="<?php echo site_url('CTR_Admin/EditDataI'); ?>" enctype="multipart/form-data">
                        <input type="hidden" name="id_info" placeholder="ID" value="<?php echo $row->id_info; ?>" required>

                        <div class="control-group mb-3">
                            <label class="control-label">Tittle</label>
                            <div class="controls">
                                <input type="text" class="form-control" name="tittle" placeholder="Tittle" value="<?php echo $row->tittle; ?>">
                            </div>
                        </div>

                        <div class="control-group mb-3">
                            <label class="control-label">Tanggal Info</label>
                            <div class="controls">
                                <input type="date" class="form-control" name="tgl_info" placeholder="Tanggal Info" value="<?php echo $row->tgl_info; ?>">
                            </div>
                        </div>

                        <div class="control-group mb-3">
                            <label class="control-label">Content Awal</label>
                            <div class="controls">
                                <textarea name="content_awal" id="ckeditor" class="ckeditor form-control" placeholder="Content Awal"><?php echo $row->content_awal; ?></textarea>
                            </div>
                        </div>

                        <div class="control-group mb-3">
                            <label class="control-label">Content Akhir</label>
                            <div class="controls">
                                <textarea name="content_modal" id="ckeditor" class="ckeditor form-control" placeholder="Detail Content"><?php echo $row->content_modal; ?></textarea>
                            </div>
                        </div>

                        <div class="control-group mb-3">
                            <label class="control-label">Photo</label>
                            <div class="input-group mb-3">
                                <input type="file" class="form-control" name="photo" id="photo"><br>
                                <img src="<?php echo base_url('assets/img/info/' . $row->photo) ?>" width="90" style="text-align: center;">
                            </div>
                        </div>
                </div>
                <div class="text-center mb-5">
                    <button type="reset" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
<script type="text/javascript" src="<?php echo base_url() ?>assets/plugin/ckeditor/ckeditor.js"></script>
<script>
    CKEDITOR.replace('ckeditor');
</script>
<!-- Akhir Modal Edit -->