<div class="container mt-5">
    <div class="row">
        <div class="alert alert-dark mt-3">
            <div class="row">
                <div class="col-sm-6">
                    <h4>Contact Us</h4>
                </div>
            </div>
        </div>
        <hr>
        <?php echo $this->session->flashdata('msg'); ?>
        <table id="example2" class="table table-bordered table-striped " width="100%">
            <thead class="bg-dark text-white">
                <tr class="text-center">
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">Pesan</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($isiC as $row) { ?>
                    <tr>
                        <td><?php echo $row->nama; ?></td>
                        <td><?php echo $row->email; ?></td>
                        <td><?php echo $row->pesan; ?></td>
                        <td style="text-align: center;">
                            <!-- Hapus Data -->
                            <?php echo anchor(
                                'CTR_Admin/HapusDataC/' . $row->id_contact,
                                "<button type='button' class='btn btn-danger btn-sm' data-placement='top' data-toggle='tooltip' title='Hapus'><i class='fas fa-trash'></i></button>",
                                array('onclick' => "return confirm('Hapus data $row->nama?');")
                            ); ?>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
</div>