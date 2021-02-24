<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url('user') ;?>" class="brand-link">
      <img width="100px" src="<?= base_url('assets') ;?>/img/logo.png"  class="brand-image img-circle elevation-3">
      <span class="brand-text font-weight-light">SPK Prakerin Mugawa</span>
    </a> 
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->

      <!-- Sidebar Menu siswa dan lokasi -->
    <div class="user-panel mt-3 pb-3 mb-3">
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="<?= base_url('lokasi/') ;?>" class="nav-link active">
            <i class="fas fa-fw fa-building mr-3"></i>
              <p>
                Lokasi
              </p>
            </a>
          </li>
          
          <li class="nav-item mt-2">
            <a href="<?= base_url('siswa/') ;?>" class="nav-link active">
              <i class="nav-icon fas fa-user-alt mr-2"></i>
              <p>
                Siswa
              </p>
            </a>
          </li>
        </ul>
      </nav>
    </div>


    <!-- Penilaian -->
    <div class="user-panel mt-3 pb-3 mb-3">
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="<?= base_url('perhitungan/') ;?>" class="nav-link active">
            <i class="fas fa-fw fa-calculator mr-3"></i>
              <p>
                Perhitungan
              </p>
            </a>
          </li>
      </nav>
    </div>

    <div class="d-flex justify-content-center">
            <a href="<?= base_url('auth/logout') ;?>" class="nav-link active btn btn-danger">
            <i class="fas fa-sign-out-alt"></i>
            </a>
    </div>

    
    <!-- end sidebar Menu -->
    
    </div>

  </aside>