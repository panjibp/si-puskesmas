<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel" style="margin-top: 5px;">
        <div class="pull-left image">
          <?php if($user['tipe_user'] === 'Dokter'): ?>
            <img src="<?= base_url('assets/') ?>dist/img/Dokter.png" class="img-circle" alt="User Image">
          <?php elseif($user['tipe_user'] === 'Admin'): ?>
            <img src="<?= base_url('assets/') ?>dist/img/Admin.png" class="img-circle" alt="User Image">
          <?php elseif($user['tipe_user'] === 'Petugas Pendaftaran'): ?>
          <img src="<?= base_url('assets/') ?>dist/img/PP.png" class="img-circle" alt="User Image">
          <?php endif; ?>
        </div>
        <div class="pull-left info">
          <p><?= $user['fullname'] ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i><?= $user['tipe_user'] ?></a>
        </div>
      </div>

    <!-- Sidebar Menu -->
    <?php
      $s1 = $this->uri->segment(1);
      $s2 = $this->uri->segment(2);
      $s3 = $this->uri->segment(3);
      $a = 'active';
    ?>
    <ul class="sidebar-menu" data-widget="tree" style="margin-top: 5px;">
      <li class="header" style="color: white;">Informasi</li>
        <li class="<?php if($s2=='home'){echo $a;} ?>">
          <a href="<?= base_url('main/home'); ?>"><i class="fa fa-tachometer"></i><span>Dashboard</span></a>
        </li>

      <li class="header" style="color: white;">Menu Utama</li>
        <li class="<?php if($s2=='datapasien'){echo $a;} elseif($s2=='datapasientambah'){echo $a;} elseif($s2=='datapasienedit'){echo $a;} ?>">
          <a href="<?= base_url('main/datapasien'); ?>"><i class="fa fa-users"></i><span>Data Pasien</span></a>
        </li>
        <li class="<?php if($s2=='datakeluhan'){echo $a;} elseif($s2=='datakeluhantambah'){echo $a;} elseif($s2=='datakeluhanedit'){echo $a;} ?>">
          <a href="<?= base_url('main/datakeluhan'); ?>"><i class="fa fa-user-md"></i><span>Data Keluhan</span></a>
        </li>
        <?php if ($user['tipe_user'] === 'Admin'): ?>
        <li>
          <a href="<?= base_url('main/laporan'); ?>" target="_blank"><i class="fa fa-print"></i><span>Laporan</span></a>
        </li>
        <?php elseif ($user['tipe_user'] === 'Petugas Pendaftaran'): ?>
        <li>
          <a href="<?= base_url('main/laporan'); ?>" target="_blank"><i class="fa fa-print"></i><span>Laporan</span></a>
        </li>
        <?php endif; ?>

      <li class="header" style="color: white;">Lainnya</li>
        <?php if ($user['tipe_user'] === 'Admin'): ?>
        <li class="<?php if($s2=='datapengguna'){echo $a;} elseif($s2=='datapenggunatambah'){echo $a;} elseif($s2=='datapenggunaedit'){echo $a;} ?>">
          <a href="<?= base_url('main/datapengguna'); ?>"><i class="fa fa-user"></i><span>Data Pengguna</span></a>
        </li>
      <?php endif; ?>
        <li>
          <a href="<?= base_url('auth/logout') ?>"><i class="fa fa-sign-out"></i><span>Keluar</span></a>
        </li>
    </ul>
    <!-- /.sidebar-menu -->
  </section>
  <!-- /.sidebar -->
</aside>