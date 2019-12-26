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
                  <span class="font-weight-bold mb-2"><?php echo $this->session->userdata('nama_lengkap') ?></span>
                  <span class="text-secondary text-small">
                   <?php
                    if($this->session->userdata('level') == '1'){
                      echo 'Admin';
                    }elseif($this->session->userdata('level') == '2'){ 
                      echo 'User';
                    }
                    ?>  
                  </span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
              </a>
            </li>              
            <!-- Halaman user -->
             <?php if($this->session->userdata('level') == 2) { ?>
                  <li class="nav-item">
                    <a class="nav-link" href="<?=base_url('user/forum')?>">
                      <span class="menu-title">Forum</span>
                      <i class="mdi mdi-forum menu-icon"></i>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="<?=base_url('user/Fasilitas')?>">
                      <span class="menu-title">Fasilitas</span>
                      <i class="mdi mdi-ambulance menu-icon"></i>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="<?=base_url('user/Pelayanan_medis')?>">
                      <span class="menu-title">Pelayanan Medis</span>
                      <i class="mdi mdi-needle  menu-icon"></i>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="<?=base_url('user/Pelayanan_penunjang')?>">
                      <span class="menu-title">Pelayanan Penunjang</span>
                      <i class="mdi mdi-monitor menu-icon"></i>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="<?=base_url('user/Provinsi')?>">
                      <span class="menu-title">Provinsi</span>
                      <i class="mdi mdi-castle menu-icon"></i>
                    </a>
                  </li>
             <?php } ?>
          </ul>
        </nav>
        <!-- partial -->