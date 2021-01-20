<header class="main-header">
  <!-- Logo -->
  <a href="<?= base_url('main/home'); ?>" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><b>PC</b></span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><marquee><b>Sistem Informasi Puskesmas Desa Munjul</b></marquee></span>
  </a>
  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a>

    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <!-- User Account: style can be found in dropdown.less -->
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <?php if($user['tipe_user'] === 'Dokter'): ?>
              <img src="<?= base_url('assets/') ?>dist/img/Dokter.png" class="user-image" alt="User Image">
            <?php elseif($user['tipe_user'] === 'Admin'): ?>
              <img src="<?= base_url('assets/') ?>dist/img/Admin.png" class="user-image" alt="User Image">
            <?php elseif($user['tipe_user'] === 'Petugas Pendaftaran'): ?>
              <img src="<?= base_url('assets/') ?>dist/img/PP.png" class="user-image" alt="User Image">
            <?php endif; ?>
            <span class="hidden-xs"><?= $user['fullname']; ?></span>
          </a>
          <ul class="dropdown-menu">
            <!-- User image -->
            <li class="user-header">
              <?php if($user['tipe_user'] === 'Dokter'): ?>
                <img src="<?= base_url('assets/') ?>dist/img/Dokter.png" class="img-circle" alt="User Image">
              <?php elseif($user['tipe_user'] === 'Admin'): ?>
                <img src="<?= base_url('assets/') ?>dist/img/Admin.png" class="img-circle" alt="User Image">
              <?php elseif($user['tipe_user'] === 'Petugas Pendaftaran'): ?>
                <img src="<?= base_url('assets/') ?>dist/img/PP.png" class="img-circle" alt="User Image">
              <?php endif; ?>
              <p>
                <?= $user['fullname']; ?>
                <small><?= $user['tipe_user']; ?></small>
              </p>
            </li>
            <!-- Menu Footer-->
            <li class="user-footer">
              <div class="pull-right">
                <a href="<?= base_url('auth/logout'); ?>" class="btn btn-default btn-flat">Keluar</a>
              </div>
            </li>
          </ul>
        </li>
        <!-- Control Sidebar Toggle Button -->
        <li>
          <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
        </li>
      </ul>
    </div>
  </nav>
</header>