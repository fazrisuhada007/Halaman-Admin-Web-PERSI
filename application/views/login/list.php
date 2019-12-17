<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo $title ?></title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?php echo base_url() ?>asset/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>asset/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="<?php echo base_url() ?>asset/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="<?php echo base_url() ?>asset/assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
          <div class="row flex-grow">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-light text-left p-5">
                <div class="brand-logo">
                  <img src="<?php echo base_url() ?>asset/assets/images/logo_login.svg">
                </div>
                <h4> <?php echo $title ?> </h4>
                <h6 class="font-weight-light"> Masuk untuk melanjutkan. </h6>

                <?php
                  // //NOTIFIKASI ERROR
                  echo validation_errors('<div class="alert alert-success">','</div>');

                  //NOTIFIKASI GAGAL LOGIN
                  if($this->session->flashdata('warning')) {
                    echo '<div class="alert alert-warning">';
                    echo $this->session->flashdata('warning');
                    echo '</div>';
                  }

                  //NOTIFIKASI LOGOUT
                  if($this->session->flashdata('sukses')) {
                    echo '<div class="alert alert-success">';
                    echo $this->session->flashdata('sukses');
                    echo '</div>';
                  }

                  //FORM OPEN LOGIN
                  echo form_open(base_url('login'));
                ?>
                
                  <div class="form-group">
                    <input type="text" name="email" id="email" class="form-control form-control-lg"  placeholder="Email">
                  </div>
                  <div class="form-group">
                    <input type="password" name="password" id="email" class="form-control form-control-lg"  placeholder="Password">
                  </div>
                  <div class="mt-3">
                    <button type="submit" class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn" >SIGN IN</button>
                  </div>
                  <div class="my-2 d-flex justify-content-between align-items-center">
                    <div class="form-check">
                      <label class="form-check-label text-muted">
                        <input type="checkbox" class="form-check-input"> Keep me signed in </label>
                    </div>
                <?php echo form_close(); ?>

              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="<?php echo base_url() ?>asset/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="<?php echo base_url() ?>asset/assets/js/off-canvas.js"></script>
    <script src="<?php echo base_url() ?>asset/assets/js/hoverable-collapse.js"></script>
    <script src="<?php echo base_url() ?>asset/assets/js/misc.js"></script>
    <!-- endinject -->
  </body>
</html>