<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Main content -->
  <section class="content container-fluid">
    <div class="row">
      <div class="col-xs-12">
        <h3>Data Pengguna</h3>
        <div class="box">
          <div class="box-header">
            <a href="<?= base_url('main/datapenggunatambah') ?>" class="btn btn-primary"><i class="fa fa-plus" style="margin-right: 8px;"></i>Tambah Data</a>
          </div>
          <div class="box-body">
            <table id="mytable" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Username</th>
                  <th>Fullname</th>
                  <th>Tipe User</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                foreach ($daftaruser as $u) { ?>
                  <tr>
                    <td><?= $u->username; ?></td>
                    <td><?= $u->fullname; ?></td>
                    <td><?= $u->tipe_user; ?></td>
                    <td>
                      <a href="<?= base_url('main/datapenggunaedit?id=' . $u->id); ?>" class="btn btn-sm btn-primary" style="margin-right: 8px;"><i class="fa fa-pencil-square-o"></i></a>
                      <a href="<?= base_url('main/datapenggunahapus?id=' . $u->id); ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin?')"><i class="fa fa-trash-o"></i></a>
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