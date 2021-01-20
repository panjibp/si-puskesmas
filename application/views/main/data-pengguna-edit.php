<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Main content -->
  <section class="content container-fluid">
    <div class="row">
      <div class="col-xs-12">
        <h3>Edit Data Pengguna</h3>
        <div class="box">
          <div class="box-body">
            <div class="col-lg-6">
              <?php foreach($edituser as $eu) {
                $username = $eu->username;
                $fullname = $eu->fullname;
                $tipe_user = $eu->tipe_user;
              } ?>
              <?= form_open_multipart('main/datapenggunaeditproses') ?>
                <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" class="form-control" readonly value="<?= $username ?>">
                </div>
                <div class="form-group">
                <label for="fullname">Fullname</label>
                <input type="text" name="fullname" id="fullname" class="form-control" required value="<?= $fullname ?>">
                </div>
                <div class="form-group">
                <label>Tipe User</label>
                <select class="form-control" name="tipe_user">
                  <?php foreach($edituser as $e) { ?>
                    <option value="<?= $e->id; ?>" hidden></option>
                    <option selected hidden><?= $e->tipe_user; ?></option>
                  <?php } ?>
                  <option>Admin</option>
                  <option>Dokter</option>
                  <option>Petugas Pendaftaran</option>
                </select>
                </div>
                <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control">
                </div>
                <br>
                <button type="submit" class="btn btn-primary" style="margin-right: 10px;">Simpan</button>
                <a href="<?= base_url('main/datapengguna'); ?>" class="btn btn-secondary" style="background-color: grey; color: white;">Kembali</a>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->