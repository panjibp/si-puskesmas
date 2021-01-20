<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Main content -->
  <section class="content container-fluid">
    <div class="row">
      <div class="col-xs-12">
        <h3>Data Keluhan</h3>
        <div class="box">
          <div class="box-header">
            <a href="<?= base_url('main/datakeluhantambah'); ?>" class="btn btn-primary"><i class="fa fa-plus" style="margin-right: 8px;"></i>Tambah Data</a>
          </div>
          <div class="box-body">
            <table id="mytable" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Nama Pasien</th>
                  <th>Tanggal</th>
                  <th>Diagnosa</th>
                  <th>Obat</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php $no=1;
                foreach($daftarkeluhan as $dk) { ?>
                <tr>
                  <td style="width: 5px;"><?= $no++; ?></td>
                  <td><?= $dk->nama; ?></td>
                  <td><?= dateFormat('d-m-Y', $dk->tanggal); ?></td>
                  <td><?= $dk->diagnosa; ?></td>
                  <td><?= $dk->obat ?></td>
                  <td>
                    <a href="<?= base_url('main/datakeluhanedit?id=' . $dk->id); ?>" class="btn btn-sm btn-primary" style="margin-right: 8px;"><i class="fa fa-pencil-square-o"></i></a>
                    <a href="<?= base_url('main/datakeluhanhapus?id=' . $dk->id); ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin?')"><i class="fa fa-trash-o"></i></a>
                  </td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->