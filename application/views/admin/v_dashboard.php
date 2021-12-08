<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Dashboard</h1>
    </div>
    <div class="section-body">
      <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
          <div class="card card-statistic-1">
            <div class="card-icon bg-primary">
              <i class="fas fa-users"></i>
            </div>
            <div class="card-wrap">
              <div class="card-header">
                <h4>Driver Jarak Terjauh 2021/01/03 yaitu : <?= $driver_jarak_jauh->nama?> dengan jarak</h4> 
              </div>
              <div class="card-body">
                <?= $driver_jarak_jauh->jumlah?> Km
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
          <div class="card card-statistic-1">
            <div class="card-icon bg-danger">
              <i class="fas fa-user-friends"></i>
            </div>
            <div class="card-wrap">
              <div class="card-header">
                <h4>Rute Cost Terbanyak rute dari <?= $rute_cost_terbanyak->point_start?> sampai <?= $rute_cost_terbanyak->point_end?>  Jarak <?= $rute_cost_terbanyak->distance?></h4>
              </div>
              <div class="card-body">
                , Cost <?= $rute_cost_terbanyak->total?>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
          <div class="card card-statistic-1">
            <div class="card-icon bg-warning">
              <i class="fas fa-user-circle"></i>
            </div>
            <div class="card-wrap">
              <div class="card-header">
                <h4></h4>
              </div>
              <div class="card-body">
               
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>