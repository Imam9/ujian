<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
        </form>
        <ul class="navbar-nav navbar-right">
            <!-- menu drop down sebelah kanan untuk lougout -->
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
   
            <div class="d-sm-none d-lg-inline-block">Hi, <?= $this->session->userdata('nama') ?></div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <div class="dropdown-title"><?= $this->session->userdata('is_aktif') ?></div>
           
              <div class="dropdown-divider"></div>
              <a href="<?= base_url('logout') ?>" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <!-- custom menu dalam dashboard -->
      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <img src="<?= base_url() ?>assets/img/logo.png" width = "80px" alt="" class = "mt-3">
            <br>
            <a href="" class = "">Ujian</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">EM</a>
          </div>
          <!-- Sidebar Untuk Admin -->
            
              <!-- Untuk Sidebar Penjual -->
              <ul class="sidebar-menu mt-3">
                <li class="menu-header">Dashboard</li>
                <?php $halaman = $this->uri->segment('1'); ?>
                <li><a class="nav-link" href="<?= base_url('dashboard')?>"><i class="fas fa-fire"></i> <span>Dashboard</span></a></li>
                <li class="menu-header">Data Master</li>
                <li class="nav-item dropdown  <?php if($halaman == 'data-driver' || $halaman == 'data-rute'){echo 'active';}?>">
                  <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-database"></i> <span>Master Data</span></a>
                  <ul class="dropdown-menu">
                    <li class="<?php if($halaman == 'data-driver'){echo 'active';}?>"><a class="nav-link" href="<?= base_url('data-driver')?>">Data Driver</a></li>
                    <li class="<?php if($halaman == 'data-rute'){echo 'active';}?>"><a class="nav-link" href="<?= base_url('data-rute')?>">Data Rute</a></li>
                  </ul>
                </li>
              </ul>
        </aside>
      </div>
