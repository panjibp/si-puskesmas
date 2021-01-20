<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Main content -->
  <section class="content container-fluid">
    <div class="row">
      <div class="col-xs-12">
        <h3>Dashboard</h3>
        <div class="box">
          <div class="box-body">
            <?php if($user['tipe_user'] === 'Dokter'): ?>
              <div class="col-lg-6 col-xs-6">
            <?php else: ?>
              <div class="col-lg-4 col-xs-6">
            <?php endif; ?>
              <div class="small-box bg-purple">
                  <div class="inner">
                      <h3><?= $jmlDataPasien; ?></h3>
                      <p><a href="<?= base_url('main/datapasien'); ?>" class="btn" style="background-color: white;">Jumlah Data Pasien</a></p>
                  </div>
                  <div class="icon">
                      <i class="ion ion-document-text"></i>
                  </div>
              </div>
            </div>
            <?php if($user['tipe_user'] === 'Dokter'): ?>
              <div class="col-lg-6 col-xs-6">
            <?php else: ?>
              <div class="col-lg-4 col-xs-6">
            <?php endif; ?>
                <div class="small-box bg-red">
                    <div class="inner">
                        <h3><?= $jmlDataKeluhan; ?></h3>
                        <p><a href="<?= base_url('main/datakeluhan'); ?>" class="btn" style="background-color: white;">Jumlah Data Keluhan</a></p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-ios-list"></i>
                    </div>
                </div>
            </div>
            <?php if($user['tipe_user'] != 'Dokter'): ?>
            <div class="col-lg-4 col-xs-6">
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3><?= $jmlPengguna; ?></h3>
                        <p><a href="<?= base_url('main/datapengguna'); ?>" class="btn" style="background-color: white;">Jumlah Data Pengguna</a></p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person"></i>
                    </div>
                </div>
            </div>
          <?php endif ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->