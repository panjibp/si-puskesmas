<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Main content -->
  <section class="content container-fluid">
    <div class="row">
      <div class="col-xs-12">
        <h3>Edit Data Keluhan</h3>
        <div class="box">
          <div class="box-body">
            <div class="col-lg-6">
              <?php foreach($editkeluhan as $ek) {
                $nama = $ek->nama;
                $tanggal = $ek->tanggal;
                $diagnosa = $ek->diagnosa;
                $obat = $ek->obat;
              } ?>
              <?= form_open_multipart('main/datakeluhaneditproses') ?>
                  <div class="form-group">
                  <label for="nama">Nama Pasien</label>
                  <input type="text" name="nama" id="nama" class="form-control" value="<?= $nama; ?>" required>
                  </div>
                  <div class="form-group">
                  <label for="tanggal">Tanggal</label>
                  <input type="date" name="tanggal" id="tanggal" class="form-control" value="<?= $tanggal; ?>" required>
                  </div>
                  <!-- <div class="form-group">
                  <label>Status</label>
                  <select class="form-control" name="status">
                    <?php foreach($editkeluhan as $e) { ?>
                      <option value="<?= $e->id; ?>" hidden></option>
                      <option selected hidden><?= $e->status; ?></option>
                    <?php } ?>
                    <option>Umum</option>
                    <option>BPJS</option>
                    <option>Lansia</option>
                    <option>Kader</option>
                  </select>
                  </div> -->
                  <div class="form-group">
                  <label for="diagnosa">Diagnosa</label>
                  <input type="text" name="diagnosa" id="diagnosa" class="form-control" value="<?= $diagnosa; ?>" required>
                  </div>
                  <!-- <div class="form-group">
                  <label for="sebab">Sebab</label>
                  <input type="text" name="sebab" id="sebab" class="form-control" value="<?= $sebab; ?>" required>
                  </div> -->
                  <div class="form-group">
                  <label for="obat">Obat</label>
                  <input type="text" name="obat" id="obat" class="form-control" value="<?= $obat; ?>" required>
                  </div>
                  <!-- <div class="form-group">
                  <label for="tindakan">Tindakan</label>
                  <input type="text" name="tindakan" id="tindakan" class="form-control" value="<?= $tindakan; ?>" required>
                  </div> -->
                <br>
                <div class="row">
                <div class="col-md-6">
                  <button type="submit" class="btn btn-primary" style="margin-right: 10px;">Simpan</button>
                  <a href="<?= base_url('main/datakeluhan'); ?>" class="btn btn-secondary" style="background-color: grey; color: white;">Kembali</a>
                </div>
                </div>
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