<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n">
            <i class="fas fa-chart-bar"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Data ITSNU</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="<?= base_url('admin/dashboard') ?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-graduation-cap"></i>
          <span>Akademik</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-6 collapse-inner rounded">
            <a class="collapse-item" href="<?= base_url('admin/jumlahPeminat') ?>">Jumlah Peminat</a>
            <a class="collapse-item" href="<?= base_url('admin/monitoringPerkuliahan') ?>">Monitoring Perkuliahan</a>
            <a class="collapse-item" href="<?= base_url('admin/bebanMengajar') ?>">Beban Mengajar Dosen</a>
            <a class="collapse-item" href="<?= base_url('admin/perwalian') ?>">Perwalian</a>
            <a class="collapse-item" href="<?= base_url('admin/kinerjaDosen') ?>">Kinerja Publikasi Dosen</a>
            <a class="collapse-item" href="<?= base_url('admin/rekapRegis') ?>">Rekap Registrasi Mhs</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
        <i class="fas fa-fw fa-school"></i>
          <span>Program Studi</span>
        </a>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?=base_url('admin/programstudi')?>">Kurikulum Program Studi</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
        <i class="fas fa-fw fa-user"></i>
          <span>Sumber Daya Manusia</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded" style="word-break: break-word;">
            <a class="collapse-item" href="login.html">Profil Staff ITSNU</a>
            <a class="collapse-item" href="register.html">Dosen Tetap Menurut Jabatan</a>
            <a class="collapse-item" href="forgot-password.html">Dosen Tetap Menurut Pangkat dan Golongan</a>
            <a class="collapse-item" href="404.html">Jumlah Dosen Tetap Menurut Ijazah dan Pendidikan</a>
            <a class="collapse-item" href="blank.html">Jumlah Dosen Tetap yang Tugas Belajar</a>
            <a class="collapse-item" href="blank.html">Jumlah Guru Besar</a>
            <a class="collapse-item" href="blank.html">Rasio Jumlah Dosen dengan Mahasiswa</a>
            <a class="collapse-item" href="blank.html">Jumlah Dosen 5 Tahun Terakhir</a>
            <a class="collapse-item" href="blank.html">Jumlah Dosen Tetap (BLU)</a>
            <a class="collapse-item" href="blank.html">Jumlah Dosen Tidak Tetap (Kontrak)</a>
            <a class="collapse-item" href="blank.html">Jumlah Tendik Pramubakti Menurut Pendidikan</a>
          </div>
        </div>
      </li>
      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Data UKT</span>
        </a>
        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="utilities-color.html">Berdasarkan Kategori</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="<?= base_url('admin/dataMhs')?>" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Data Mahasiswa</span>
        </a>
        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?= base_url('admin/dataMhs')?>">Mahasiswa Aktif</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="tables.html">
          <i class="fas fa-fw fa-lock"></i>
          <span>Ubah Password</span></a>
      </li>
      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="tables.html">
          <i class="fas fa-fw fa-sign-out-alt"></i>
          <span>Login</span></a>
      </li>

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
          <h5>Selamat datang di Sistem Data ITSNU Pasuruan</h5>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"></span>
                <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
              </a>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->