
<div class="main-panel">
  <div class="content-wrapper">
    <div class="row" id="proBanner">
      <div class="col-12">
      </div>
    </div>
    <div class="page-header">
      <h3 class="page-title">
        <span class="page-title-icon bg-gradient-success text-white mr-2" style="background: none;background-color: #66BB6A;">
          <i class="mdi mdi-home"></i>
        </span> Dashboard Admin </h3>
      <nav aria-label="breadcrumb">
        <ul class="breadcrumb">
          <li class="breadcrumb-item active" aria-current="page">
            <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
          </li>
        </ul>
      </nav>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-lg-4">
                <div class="border-bottom text-center pb-4">
                  <img src="<?php echo base_url('asset/upload/image/'.$this->session->userdata('photo')) ?>" alt="profile" class="img-lg rounded-circle mb-3" />   
                </div>
                <div class="py-4">
                  <p class="clearfix">
                    <span class="float-left"> Status </span>
                    <span class="float-right text-muted"> Active </span>
                  </p>
                  <p class="clearfix">
                    <span class="float-left"> Address </span>
                    <span class="float-right text-muted"><?php echo $this->session->userdata('alamat') ?></span>
                  </p> 
                  <p class="clearfix">
                    <span class="float-left"> Phone </span>
                    <span class="float-right text-muted"><?php echo $this->session->userdata('telp') ?></span>
                  </p>
                  <p class="clearfix">
                    <span class="float-left"> Mail </span>
                    <span class="float-right text-muted"><?php echo $this->session->userdata('email') ?></span>
                  </p> 
                </div>
               <!--  <button class="btn btn-gradient-primary btn-block" style="background: none;background-color: #66BB6A;">Edit</button> -->
              </div>
              <div class="col-lg-8">
                <div class="d-flex justify-content-between">
                  <div>
                    <h3><?php echo $this->session->userdata('nama') ?></h3>
                    <div class="d-flex align-items-center">
                      <h5 class="mb-0 mr-2 text-muted">
                          <?php echo $this->session->userdata('status') ?>
                      </h5>
                    </div>
                  </div>
                  <div>
                    <!-- <button class="btn btn-outline-secondary btn-icon">
                    </button>
                    <button class="btn btn-gradient-primary">Request</button> -->
                  </div>
                </div>
                <div class="mt-4 py-2 border-top border-bottom">
                  <ul class="nav profile-navbar">
                    <li class="nav-item">
                      <a class="nav-link" href="<?= base_url('admin/dashboard') ?>">
                        <i class="mdi mdi-account-outline"></i> Personal Detail </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" href="<?= base_url('admin/setting') ?>">
                        <i class="mdi mdi-settings "></i> Settings </a>
                    </li>
                  </ul>
                    <div class="form-group">
                        <input type="text" class="form-control" id="email" placeholder="Alamat Email" value=""> 
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="password" placeholder="Password Baru" value="">
                    </div>
                   <!--  <div class="form-group">
                      <input type="file" name="photo" class="file-upload-default">
                      <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info" disabled placeholder="Update Photo Profile">
                        <span class="input-group-append">
                          <button class="file-upload-browse btn btn-gradient-primary" type="button" style="background: none;background-color: #00acee;">Upload</button>
                        </span>
                      </div>
                    </div> -->
                    <div>
                    </button>
                    <button class="btn btn-gradient-primary btn-edit-profil" onclick="simpanProfil2()" style="background: none;background-color: #66BB6A;">Ubah Password</button>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
 <script >
    function simpanProfil2(){
      let data = {
          email : $('#email').val(),
          password : $('#password').val(),
          // alamat : $('#alamat').val(),
          // photo : $('#photo').val(),
      };
      $.ajax({
        url : '<?= base_url();?>admin/Dashboard/simpan2',
        method  : 'POST',
        type    : 'ajax',
        dataType: 'JSON',
        data     : data,
        success: function(data){
          window.location.href = "http://localhost/persi_ci/login";
        }
      })
    }
   
  </script>
