<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1><?= $title ?></h1>
    </div>
    <button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#tambahdata">
      Tambah Data
    </button>
    <?php echo $this->session->flashdata('pesan') ?>
    <div class="section-body">
      <div class="card table-responsive">
        <div class="card-body ">
          <table class="table table-hover" id="data_tabel">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Plat No</th>
                <th class ="text-center">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php $no = 1;
                foreach ($data_driver as $key => $value) :?>
                <tr>
                  <td><?= $no++ ?></td>
                  <td><?= $value->nama?></td>
                  <td><?= $value->platno?></td>
                  <td class ="text-center"> 
                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#updatedata<?= $value->id_driver ?>">
                      <i class="fas fa-edit"></i>
                    </button>
                    <a href="<?= base_url('data_driver/delete/' . $value->id_driver) ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                  </td>
                </tr>
              <?php endforeach; ?>

            </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>
</div>

<!-- Modal -->
<div class="modal fade" id="tambahdata" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('data_driver/insert') ?>" method="post">
        <div class="modal-body">
          <div class="form-group">
            <label for="">Nama Driver</label>
            <input type="text" name="nama" id="" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="">Plat Nomor</label>
            <input type="text" name="platno" id="" class="form-control" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save</button>
        </div>
      </form>
    </div>
  </div>
</div>

<?php $no = 1;
foreach ($data_driver as $key => $value) :?>
<div class="modal fade" id="updatedata<?= $value->id_driver?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('data_driver/update') ?>" method="post">
        <div class="modal-body">
          <div class="form-group">
            <label for="">Nama Driver</label>
            <input type="hidden" name = "id_driver" value = "<?= $value->id_driver?>">
            <input type="text" name="nama" id="" class="form-control" value = "<?= $value->nama?>">
          </div>
          <div class="form-group">
            <label for="">Plat Nomor</label>
            <input type="text" name="platno" id="" class="form-control"  value = "<?= $value->platno?>">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Update</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?php endforeach; ?>
