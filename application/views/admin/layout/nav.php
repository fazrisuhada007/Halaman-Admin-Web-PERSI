 <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="nav-profile-image">
                   <img src="<?php echo base_url('asset/upload/image/'.$this->session->userdata('photo')) ?>" />

                  <span class="login-status online"></span>
                  <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                  <span class="font-weight-bold mb-2"><?php echo $this->session->userdata('nama') ?></span>
                  <span class="text-secondary text-small">
                  <?php echo $this->session->userdata('status') ?>
                  </span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
              </a>
            </li>
           <!-- Halaman Admin -->
                  <li class="nav-item">
                    <a class="nav-link" href="<?=base_url('admin/dashboard')?>">
                      <span class="menu-title">Dashboard</span>
                      <i class="mdi mdi-home menu-icon"></i>
                    </a>
                  </li>
                  <!-- <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                      <span class="menu-title">Basic UI Elements</span>
                      <i class="menu-arrow"></i>
                      <i class="mdi mdi-crosshairs-gps menu-icon"></i>
                    </a>
                    <div class="collapse" id="ui-basic">
                      <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a></li>
                        <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Typography</a></li>
                      </ul>
                    </div>
                  </li> -->
                  <li class="nav-item">
                    <a class="nav-link" href="<?=base_url('admin/user') ?>">
                      <span class="menu-title">Anggota</span>
                      <i class="mdi mdi-account-card-details menu-icon"></i>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?=base_url('admin/berita')?>">
                      <span class="menu-title">Berita</span>
                      <i class="mdi mdi-newspaper  menu-icon"></i>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="<?=base_url('admin/kompartemen')?>">
                      <span class="menu-title">Kompartemen</span>
                      <i class="mdi mdi-sitemap menu-icon"></i>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="<?=base_url('admin/forum')?>">
                      <span class="menu-title">Forum</span>
                      <i class="mdi mdi-forum menu-icon"></i>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="<?=base_url('admin/Fasilitas')?>">
                      <span class="menu-title">Fasilitas</span>
                      <i class="mdi mdi-ambulance menu-icon"></i>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="<?=base_url('admin/Pelayanan_medis')?>">
                      <span class="menu-title">Pelayanan Medis</span>
                      <i class="mdi mdi-needle  menu-icon"></i>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="<?=base_url('admin/Pelayanan_penunjang')?>">
                      <span class="menu-title">Pelayanan Penunjang</span>
                      <i class="mdi mdi-monitor menu-icon"></i>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="<?=base_url('admin/Provinsi')?>">
                      <span class="menu-title">Provinsi</span>
                      <i class="mdi mdi-city menu-icon"></i>
                    </a>
                  </li>

          </ul>
        </nav>
        <!-- partial -->