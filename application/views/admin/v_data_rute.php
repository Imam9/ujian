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
                <th>Point Start</th>
                <th>Point End</th>
                <th>Distance</th>
                <th>Standart Time</th>
                <th>Price Per KM</th>
                <th class ="text-center">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php $no = 1;
                foreach ($data_rute as $key => $value) :?>
                <tr>
                  <td><?= $no++ ?></td>
                  <td><?= $value->point_start ?></td>
                  <td><?= $value->point_end ?></td>
                  <td><?= $value->distance ?></td>
                  <td><?= $value->standart_time ?></td>
                  <td><?= $value->priceperkm ?></td>
                  <td class ="text-center"> 
                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#updatedata<?= $value->id_rute ?>">
                      <i class="fas fa-edit"></i>
                    </button>
                    <a href="<?= base_url('admin/data_rute_admin/delete/' . $value->id_rute) ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
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
      <form action="<?= base_url('data_rute/insert') ?>" method="post">
        <div class="modal-body">
          <div class="form-group">
            <label for="">Point Start</label>
            <input type="text" name="point_start" id="" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="">Point End</label>
            <input type="text" name="point_end" id="" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="">Distance</label>
            <input type="number" name="distance" id="" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="">Standart Time</label>
            <input type="number" name="standart_time" id="" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="">Price Per Km</label>
            <input type="number" name="priceperkm" id="" class="form-control" required>
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
foreach ($data_rute as $key => $value) :?>
<div class="modal fade" id="updatedata<?= $value->id_rute?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('admin/data_rute_admin/update') ?>" method="post">
        <div class="modal-body">
          <div class="form-group">
            <label for="">Point Start</label>
            <input type="text" name="point_start" id="" class="form-control" value = "<?= $value->point_start?>">
          </div>
          <div class="form-group">
            <label for="">Point End</label>
            <input type="text" name="point_end" id="" class="form-control" value = "<?= $value->point_end?>">
          </div>
          <div class="form-group">
            <label for="">Distance</label>
            <input type="number" name="distance" id="" class="form-control" value = "<?= $value->distance?>">
          </div>
          <div class="form-group">
            <label for="">Standart Time</label>
            <input type="number" name="standart_time" id="" class="form-control" value = "<?= $value->standart_time?>">
          </div>
          <div class="form-group">
            <label for="">Price Per Km</label>
            <input type="number" name="priceperkm" id="" class="form-control" value = "<?= $value->priceperkm?>">
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
