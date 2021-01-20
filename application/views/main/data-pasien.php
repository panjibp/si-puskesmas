<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Main content -->
  <section class="content container-fluid">
    <div class="row">
      <div class="col-xs-12">
        <h3>Data Pasien</h3>
        <div class="box">
          <?php if ($user['tipe_user'] != 'Dokter'): ?>
            <div class="box-header">
              <a href="<?= base_url('main/datapasientambah') ?>" class="btn btn-primary"><i class="fa fa-plus" style="margin-right: 8px;"></i>Tambah Data</a>
            </div>
          <?php endif; ?>
          <div class="box-body">
            <table id="mytable" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Nama</th>
                  <th>No. Kartu</th>
                  <th>Status</th>
                  <th>Tgl Lahir</th>
                  <th>Umur</th>
                  <th>Jenis Kelamin</th>
                  <th>Alamat</th>
                  <?php if ($user['tipe_user'] != 'Dokter'): ?>
                    <th>Aksi</th>
                  <?php endif; ?>
                </tr>
              </thead>
              <tbody>
                <?php $no=1;
                foreach($daftarpasien as $dp) { ?>
                <tr>
                  <td style="width: 5px;"><?= $no++; ?></td>
                  <td><?= $dp->nama; ?></td>
                  <td><?= $dp->nomorkartu ?></td>
                  <td><?= $dp->status; ?></td>
                  <td><?= dateFormat('d-m-Y', $dp->tgl_lahir); ?></td>
                  <td><?= $dp->umur; ?></td>
                  <td><?= $dp->jenis_kelamin; ?></td>
                  <td><?= $dp->alamat; ?></td>
                  <?php if ($user['tipe_user'] != 'Dokter'): ?>
                    <td>
                      <a href="<?= base_url('main/datapasienedit?id=' . $dp->id); ?>" class="btn btn-sm btn-primary" style="margin-right: 8px;"><i class="fa fa-pencil-square-o"></i></a>
                      <a href="<?= base_url('main/datapasienhapus?id=' . $dp->id); ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin?')"><i class="fa fa-trash-o"></i></a>
                    </td>
                  <?php endif; ?>
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