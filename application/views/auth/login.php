<div class="login-logo">
</div>
  <br>
  <!-- /.login-logo -->
  <p style="text-align: center; font-size: 28px;"><a href="<?= base_url('auth'); ?>"><b>Sistem Informasi Puskesmas</b><br>Desa Munjul</a></p>
  <br>
  <br>
  <div class="login-box-body">
    <p style="text-align: center; font-size: 18px;"><b>HALAMAN LOGIN</b></p>
    <br>
    <?= $this->session->flashdata('message'); ?>
    <form class="user" method="post" action="<?= base_url('auth'); ?>">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Username" id="username" name="username" value="<?= set_value('username'); ?>">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        <?= form_error('username', '<small class="text-danger">', '</small>') ?>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" id="password" name="password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        <?= form_error('password', '<small class="text-danger">', '</small>') ?>
      </div>
      <br>
      <div class="row">
        <!-- /.col -->
        <div class="col-xs-12">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Login</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->