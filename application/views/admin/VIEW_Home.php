<div class="container mt-5">
  <div class="row">
    <div class="alert alert-dark mt-3">
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
        <i class="fas fa-plus"></i> Add Content
      </button>
      <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#logoutModal" style="text-decoration: none; color:white"><i class="bi bi-person-fill"> </i>Logout</a>
    </div>
    <?php echo $this->session->flashdata('msg'); ?>
    <table id="example2" class="table table-bordered table-striped " width="100%">
      <thead class="bg-dark text-white">
        <tr class="text-center">
          <th class="col-2">Title</th>
          <th class="col-8">Info</th>
          <th class="col-2">Action</th>
        </tr>
      </thead>

      <tbody>
        <?php foreach ($isiH as $row) { ?>
          <tr>
            <td><?php echo $row->tittle; ?></td>
            <td style="text-align:justify; padding: 10px"><?php echo $row->info; ?></td>
            <td style="text-align:center;" class="align-middle">
              <!-- Edit Data -->
              <a href="#edit<?php echo $row->id_home; ?>" data-bs-target="#edit<?php echo $row->id_home; ?>" data-bs-toggle="modal" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
              <!-- Hapus Data -->
              <?php echo anchor(
                'CTR_Admin/HapusData/' . $row->id_home,
                "<button type='button' class='btn btn-danger btn-sm' data-placement='top' data-toggle='tooltip' title='Hapus'><i class='fas fa-trash'></i>
                  </button>",
                array('onclick' => "return confirm('Hapus data $row->tittle?');")
              ); ?>
            </td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
    <!-- <a href="" class="btn btn-danger btn-sm">ts</a> -->
  </div>
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
        <form method="POST" action="<?php echo site_url() . '/CTR_Admin/SimpanDataH'; ?>">
          <div class="control-group">
            <label class="control-label">Tittle</label>
            <div class="controls">
              <input type="text" class="form-control" name="tittle" placeholder="Tittle">
            </div>
          </div>
          <div class="control-group">
            <label class="control-label">Info</label>
            <div class="controls">
              <textarea name="info" class="form-control" id="info" placeholder="Info" rows="4"></textarea>
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
<?php foreach ($isiH as $row) { ?>
  <div aria-labelledby="edit<?php echo $row->id_home; ?>" id="edit<?php echo $row->id_home; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="edit">Edit Data</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          <hr>
        </div>

        <div class="modal-body">
          <form class="form-horizontal" method="POST" action="<?php echo site_url('CTR_Admin/EditData'); ?>">
            <input type="hidden" name="id_home" placeholder="Username" value="<?php echo $row->id_home; ?>" required>
            <div class="control-group">
              <label class="control-label">Tittle</label>
              <div class="controls">
                <input type="text" class="form-control" name="tittle" placeholder="Tittle" value="<?php echo $row->tittle; ?>">
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Info</label>
              <div class="controls">
                <textarea name="info" class="form-control" id="info" cols="40" rows="5"><?php echo $row->info; ?></textarea>
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