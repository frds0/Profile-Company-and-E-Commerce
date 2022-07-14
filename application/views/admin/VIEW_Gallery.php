<div class="container mt-5">
    <div class="row">
        <div class="alert alert-dark mt-3">
            <div class="row">
                <div class="col-sm-6">
                    <h4>Gallery</h4>
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
        <table id="example2" class="table table-bordered table-striped " width="100%">
            <thead class="bg-dark text-white">
                <tr class="text-center">
                    <th scope="col">Picture</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($isiG as $row) { ?>
                    <tr class="text-center">
                        <td>
                            <img src="<?php echo base_url('assets/img/gallery/' . $row->photo) ?>" width="110" alt="">
                            <input type="hidden" name="gallery" value="<?php echo $row->photo ?>">
                        </td>
                        <td class="align-middle">
                            <a href="#edit<?php echo $row->id_gallery; ?>" data-bs-target="#edit<?php echo $row->id_gallery; ?>" data-bs-toggle="modal" class="btn btn-warning "><i class="fas fa-edit"></i></a>

                            <!-- Hapus Data -->
                            <?php echo anchor(
                                'CTR_Admin/HapusDataG/' . $row->id_gallery,
                                "<button type='button' class='btn btn-danger' data-placement='top' data-toggle='tooltip' title='Hapus'><i class='fas fa-trash'></i></button>",
                                array('onclick' => "return confirm('Hapus data $row->photo?');")
                            ); ?>
                            </button>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <!-- Modal Add Data -->
    <div class="modal fade" id="addContent" tabindex="-1" aria-labelledby="addContent" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addContent">Add Content</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <hr>
                    <form method="POST" action="<?php echo site_url('CTR_Admin/SimpanDataG') ?>" enctype="multipart/form-data">
                        <div class="row">
                            <div class="control-group">
                                <label class="control-label">Gallery</label>
                                <div class="input-group mb-3">
                                    <input type="file" class="form-control" name="photo" id="photo">
                                    <label class="input-group-text" for="photo">Browse</label>
                                </div>
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
    <?php foreach ($isiG as $row) { ?>
        <div aria-labelledby="edit<?php echo $row->id_gallery; ?>" id="edit<?php echo $row->id_gallery; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="edit">Edit Data</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <hr>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal" method="POST" action="<?php echo site_url('CTR_Admin/EditDataG'); ?>" enctype="multipart/form-data">
                            <input type="hidden" name="id_gallery" placeholder="ID" value="<?php echo $row->id_gallery; ?>" required>
                            <div class="control-group">
                                <label class="control-label">Gallery</label>
                                <div class="input-group mb-3">
                                    <input type="file" class="form-control" name="photo" id="photo"><br>
                                    <img src="<?php echo base_url('assets/img/gallery/' . $row->photo) ?>" width="90" style="text-align: center;">
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
    <!-- Akhir Modal Edit -->
</div>