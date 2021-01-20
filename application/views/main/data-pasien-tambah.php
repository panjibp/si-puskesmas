<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Main content -->
  <section class="content container-fluid">
    <div class="row">
      <div class="col-xs-12">
        <h3>Tambah Data Pasien</h3>
        <div class="box">
          <div class="box-body">
            <div class="col-lg-6">
              <?= form_open_multipart('main/datapasientambahproses') ?>
                <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama" class="form-control" required>
                </div>
                <div class="form-group">
                <label for="nomorkartu">No. Kartu</label>
                <input type="text" name="nomorkartu" id="nomorkartu" class="form-control" required>
                </div>
                <div class="form-group">
                <label>Status</label>
                <select class="form-control" name="status" required>
                  <option selected disabled hidden>Pilih status</option>
                  <option>Umum</option>
                  <option>BPJS</option>
                  <option>Lansia</option>
                  <option>Kader</option>
                </select>  
                </div>
                <div class="form-group">
                <label for="t_lahir">Tgl. Lahir</label>
                <input type="date" name="t_lahir" id="t_lahir" class="form-control" required>
                </div>
                <div class="form-group">
                <label for="umur">Umur</label>
                <input type="text" name="umur" id="umur" class="form-control" required>
                </div>
                <div class="form-group">
                <label>Jenis Kelamin</label>
                <select class="form-control" name="jk">
                  <option selected disabled hidden>Pilih jenis kelamin</option>
                  <option>Laki-laki</option>
                  <option>Perempuan</option>
                </select>
                </div>
                <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" name="alamat" id="alamat" class="form-control" required>
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