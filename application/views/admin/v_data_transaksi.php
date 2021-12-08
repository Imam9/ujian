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
                <th>Driver</th>
                <th>Plat Number</th>
                <th>Date</th>
                <th>Point Start</th>
                <th>Point End</th>
                <th>Distance</th>
                <th>Standart Time</th>
                <th>Price Per KM</th>
                <th>Actual Time</th>
                <th>Total Cost</th>
                <th class ="text-center">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php $no = 1;
                foreach ($data_transaksi as $key => $value) :?>
                <tr>
                  <td><?= $no++ ?></td>
                  <td><?= $value->nama ?></td>
                  <td><?= $value->platno ?></td>
                  <td><?= $value->date?></td>
                  <td><?= $value->point_start ?></td>
                  <td><?= $value->point_end ?></td>
                  <td><?= $value->distance ?></td>
                  <td><?= $value->standart_time ?></td>
                  <td><?= $value->priceperkm ?></td>
                  <td><?= $value->actual_time?></td>
                  <td><?= $value->total_cost?></td>
                  <td class ="text-center"> 
                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#updatedata<?= $value->id_transaksi ?>">
                      <i class="fas fa-edit"></i>
                    </button>
                    <a href="<?= base_url('data_transaksi/delete/' . $value->id_transaksi) ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
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
      <form action="<?= base_url('data_transaksi/insert') ?>" method="post">
        <div class="modal-body">
          <div class="form-group">
            <label for="">Driver</label>
            <select name="id_driver" id="" class ="form-control">
                <option>--Pilih Driver--</option>
                <?php foreach ($data_driver as $key => $value) { ?>
                    <option value="<?= $value->id_driver?>"><?= $value->nama?> - <?= $value->platno?></option>
                <?php } ?>
            </select>
          </div>
          <div class="form-group">
            <label for="">Rute</label>
            <select name="id_rute" id="" class ="form-control">
                <option>--Pilih Rute--</option>
                <?php foreach ($data_rute as $key => $value) { ?>
                    <option value="<?= $value->id_rute?>">Dari <?= $value->point_start?> Ke <?= $value->point_end?> Jarak <?= $value->distance?>Km Estimate <?= $value->standart_time?> Jam Price - <?= $value->priceperkm?></option>
                <?php } ?>
            </select>
          </div>
          <div class="form-group">
            <label for="">Tanggal</label>
            <input type="date" name="date" id="" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="">Actual Time</label>
            <input type="number" name="actual_time" id="" class="form-control" required>
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
foreach ($data_transaksi as $key => $value) :?>
<div class="modal fade" id="updatedata<?= $value->id_transaksi?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('data_transaksi/update') ?>" method="post">
        <div class="modal-body">
        <div class="form-group">
            <input type="hidden" name = "id_transaksi" value = "<?= $value->id_transaksi?>">
            <label for="">Driver</label>
            <select name="id_driver" id="" class ="form-control">
                <option value="<?= $value->id_driver?>"><?= $value->nama?> - <?= $value->platno?></option>
                <?php foreach ($data_driver as $key => $driver) { ?>
                    <option value="<?= $driver->id_driver?>"><?= $driver->nama?> - <?= $driver->platno?></option>
                <?php } ?>
            </select>
          </div>
          <div class="form-group">
            <label for="">Rute</label>
            <select name="id_rute" id="" class ="form-control">
                <option value="<?= $value->id_rute?>">Dari <?= $value->point_start?> Ke <?= $value->point_end?> Jarak <?= $value->distance?>Km Estimate <?= $value->standart_time?> Jam Price - <?= $value->priceperkm?></option>
                <?php foreach ($data_rute as $key => $rute) { ?>
                    <option value="<?= $rute->id_rute?>">Dari <?= $rute->point_start?> Ke <?= $rute->point_end?> Jarak <?= $rute->distance?>Km Estimate <?= $rute->standart_time?> Jam Price - <?= $rute->priceperkm?></option>
                <?php } ?>
            </select>
          </div>
          <div class="form-group">
            <label for="">Tanggal</label>
            <input type="date" name="date" id="" class="form-control" value = "<?= $value->date?>">
          </div>
          <div class="form-group">
            <label for="">Actual Time</label>
            <input type="number" name="actual_time" id="" class="form-control" value = "<?= $value->actual_time?>">
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
