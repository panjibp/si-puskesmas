<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Main content -->
  <section class="content container-fluid">
    <div class="row">
      <div class="col-xs-12">
        <h3>Edit Data Pasien</h3>
        <div class="box">
          <div class="box-body">
            <div class="col-lg-6">
              <?php foreach($editpasien as $ep) {
                $nama = $ep->nama;
                $nomorkartu = $ep->nomorkartu;
                $tgl_lahir = $ep->tgl_lahir;
                $umur = $ep->umur;
                $jenis_kelamin = $ep->jenis_kelamin;
                $alamat = $ep->alamat;
              } ?>
              <?= form_open_multipart('main/datapasieneditproses') ?>
                <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama" class="form-control" value="<?= $nama; ?>" required>
                </div>
                <div class="form-group">
                <label for="nomorkartu">No. Kartu</label>
                <input type="text" name="nomorkartu" id="nomorkartu" class="form-control" value="<?= $nomorkartu; ?>" required>
                </div>
                <div class="form-group">
                <label>Status</label>
                <select class="form-control" name="status">
                  <?php foreach($editpasien as $e) { ?>
                    <option value="<?= $e->id; ?>" hidden></option>
                    <option selected hidden><?= $e->status; ?></option>
                  <?php } ?>
                  <option>Umum</option>
                  <option>BPJS</option>
                  <option>Lansia</option>
                  <option>Kader</option>
                </select>
                </div>
                <div class="form-group">
                <label for="t_lahir">Tgl. Lahir</label>
                <input type="date" name="t_lahir" id="t_lahir" class="form-control" value="<?= $tgl_lahir ?>" required>
                </div>
                <div class="form-group">
                <label for="umur">Umur</label>
                <input type="text" name="umur" id="umur" class="form-control" value="<?= $umur ?>" required>
                </div>
                <div class="form-group">
                <label>Jenis Kelamin</label>
                <select class="form-control" name="jk">
                  <?php foreach($editpasien as $e) { ?>
                    <option value="<?= $e->id; ?>" hidden></option>
                    <option selected hidden><?= $e->jenis_kelamin; ?></option>
                  <?php } ?>
                  <option>Laki-laki</option>
                  <option>Perempuan</option>
                </select>
                </div>
                <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" name="alamat" id="alamat" class="form-control"  value="<?= $alamat ?>" required>
                </div>
                <br>
                <button type="submit" class="btn btn-primary" style="margin-right: 10px;">Simpan</button>
                <a href="<?= base_url('main/datapasien'); ?>" class="btn btn-secondary" style="background-color: grey; color: white;">Kembali</a>
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