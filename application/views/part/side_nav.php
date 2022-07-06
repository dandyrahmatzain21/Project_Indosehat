<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
          <img style="width: 100%;height: auto;" src="<?php echo base_url('argon-template/assets/img/brand/indosehat.png')?>" class="navbar-brand-img">
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" href="<?php echo base_url();?>index.php/home">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">Dashboard</span>
              </a>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-clinic-medical text-success"></i>
              <span class="mb-0 text-sm  font-weight">Admin Klinik</span>
              </a>
              <div class="dropdown-menu  dropdown-menu-right ">
                <a href="<?php echo base_url();?>index.php/pendaftar/add" class="dropdown-item">
                  <i class="fas fa-plus text-info"></i>
                  <span>Tambah Pendaftar</span>
                </a>
                <a href="<?php echo base_url();?>index.php/pendaftar/view" class="dropdown-item">
                  <i class="fas fa-user-injured text-yellow"></i>
                  <span>Data Pendaftar</span>
                </a>
              </div>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-vial text-warning"></i>
              <span class="mb-0 text-sm  font-weight">Admin Lab</span>
              </a>
              <div class="dropdown-menu  dropdown-menu-right ">
                <a href="<?php echo base_url();?>index.php/master_klinik/view" class="dropdown-item">
                  <i class="fas fa-database text-yellow"></i>
                  <span>Master Klinik</span>
                </a>
                <a href="<?php echo base_url();?>index.php/pendaftar/view" class="dropdown-item">
                  <i class="fas fa-procedures text-primary"></i>
                  <span>Data Pendaftar & Pemeriksaan</span>
                </a>
              </div>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-book-medical text-info"></i>
              <span class="mb-0 text-sm  font-weight">Laporan</span>
              </a>
              <div class="dropdown-menu  dropdown-menu-right ">
                <a href="<?php echo base_url();?>index.php/master_klinik/view" class="dropdown-item">
                  <i class="fas fa-hospital-user text-primary"></i>
                  <span>Seluruh Pendaftar</span>
                </a>
                <a href="<?php echo base_url();?>index.php/pendaftar/view" class="dropdown-item">
                  <i class="fas fa-clipboard-list text-success"></i>
                  <span>Pendaftar Klinik</span>
                </a>
              </div>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url();?>index.php/privacy">
                <i class="fas fa-info-circle text-yellow"></i>
                <span class="nav-link-text">Privacy Policy</span>
              </a>
            </li>

            <li class="nav-item">
              
              <div class="nav-link">
                  
             <form method="POST" action="<?php echo base_url();?>index.php/user/logout">
            <button class="btn btn-danger btn-sm btn-block" type="submit"><i class="fa fa-power-off"></i> Logout</button>
            </form>
              </div>
            </li>
            
          </ul>
        </div>
      </div>
    </div>
  </nav>