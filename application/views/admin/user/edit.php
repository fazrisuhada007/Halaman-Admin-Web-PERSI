
<div class="main-panel">
<div class="content-wrapper">
<div class="row">
<div class="col-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
          <h4 class="card-title"><?php echo $title ?></h4>

          <?php
            //Error upload
            if(isset($error)) {
              echo '<div class="alert alert-danger alert-dismissible">
                                  <button type="button" class="close" data-dismiss="alert">&times;</button>
                                  <strong>Peringatan!</strong> ';
              echo 'Upload Photo.';
              echo '</div>';
            }
            //NOTIFIKASI
           echo validation_errors('<div class="alert alert-danger alert-dismissible">
                                  <button type="button" class="close" data-dismiss="alert">&times;</button>
                                  <strong>Peringatan!</strong> ','</div>');
          ?><br>
          <form method="POST" action="<?php base_url('admin/user/edit')?>" enctype="multipart/form-data">

            <div class="form-group">
              <label for="exampleInputName1">Nama Rumah Sakit</label>
              <input type="text" name="nama_rumah_sakit" class="form-control" value="<?php echo $anggota_rumah_sakit->nama_rumah_sakit ?>" placeholder="Inputkan nama rumah sakit" autocomplete="off" autofocus/>
            </div>

           <div class="form-group">
              <label for="exampleInputName1">Alamat Rumah Sakit</label>
              <input type="text" name="alamat_rumah_sakit" class="form-control" value="<?php echo $anggota_rumah_sakit->alamat_rumah_sakit ?>" placeholder="Inputkan nama rumah sakit" autocomplete="off" autofocus/>
            </div>

            <div class="form-group">
              <label for="exampleSelectGender">Provinsi</label>
               <select class="form-control" name="id_provinsi">
                  <?php foreach($provinsi as $provinsi) { ?>
                    <option value="<?php echo $provinsi->id_provinsi ?>" <?php if($user->id_provinsi==$provinsi->id_provinsi) { echo "selected"; } ?>>
                      <?php echo $provinsi->nama_provinsi ?>
                    </option>
                  <?php } ?>
                </select>
            </div>

            <div class="form-group">
              <label for="">Telepon Rumah Sakit</label>
              <input type="text" name="telp_rumah_sakit"  class="form-control" value="<?php echo $anggota_rumah_sakit->telp_rumah_sakit ?>" placeholder="Inputkan telephon rumah sakit" autocomplete="off" />
            </div>

            <div class="form-group">
              <label for="">Nama User</label>
              <input type="text" name="nama_lengkap"  class="form-control" value="<?php echo $user->nama_lengkap ?>" placeholder="Inputkan nama user" autocomplete="off" />
            </div>

            <div class="form-group">
              <label for="">Email User</label>
              <input type="text" name="email"  class="form-control" value="<?php echo $user->email ?>" placeholder="Inputkan email user" autocomplete="off" />
            </div>

            <div class="form-group">
              <label for="">Telepon User</label>
              <input type="text" name="telp"  class="form-control" value="<?php echo $user->telp ?>" placeholder="Inputkan nomor telepon user" autocomplete="off" />
            </div>

            <input type="hidden" name="level" value="2" class="form-control" placeholder="Level" />

            <input type="hidden" name="status_buka" value="24 Jam" class="form-control" placeholder="status_buka" />
            
            <div class="form-group">
              <label>Photo User</label>
              <input type="file" name="photo" class="file-upload-default">
              <div class="input-group col-xs-12">
                <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Photo User">
                <span class="input-group-append">
                  <button class="file-upload-browse btn btn-gradient-primary" type="button" style="background: none;background-color: #00acee;">Upload</button>
                </span>
              </div>
            </div>
          
            <button type="submit" name="submit" class="btn btn-gradient-primary mr-2" style="background: none;background-color: #00acee;">
              Simpan
            </button>

            <a href="<?=base_url('admin/user') ?>" type="reset" name="reset"  class="btn btn-light">
              Batal 
            </a>

          </form>
        </div>
      </div>
    </div>
  </div>
