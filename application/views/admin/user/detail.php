
 <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title"><?php echo $title ?></h4>
                    <?php
                      //Error upload
                      if(isset($error)) {
                        echo '<div class="alet alert-warning col-md-4">';
                        echo 'Ukuran photo yang anda upload terlalu besar.';
                        echo '</div>';
                      }
                      //NOTIFIKASI
                      echo validation_errors('<div class="alert alert-warning">','</div>');
                    ?>
                    <form method="POST" action="<?php base_url('admin/user/tambah')?>" enctype="multipart/form-data">
                      <div class="form-group">
                        <label>Nama</label>
                        <input type="text" name="nama_lengkap" class="form-control col-md-5" placeholder="Inputkan Nama Lengkap Anggota" value="<?php echo set_value('nama_lengkap')?>">
                      </div>

                      <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="email" class="form-control col-md-5" placeholder="Inputkan Alamat Email Anggota" value="<?php echo set_value('email')?>">
                      </div>

                      <div class="form-group">
                        <label>Password</label>
                        <input type="text" name="password" class="form-control col-md-5" placeholder="Password Anggota" value="<?php echo set_value('password')?>">
                      </div>

                      <div class="form-group">
                        <label>Telephon</label>
                        <input type="text" name="telp" class="form-control col-md-5" placeholder="Inputkan Nomor Telephon Anggota" value="<?php echo set_value('telp')?>">
                      </div>

                      <div class=" form-group">
                        <label for="exampleSelectGender">Level</label>
                        <select class="form-control col-md-5" name="level">
                          <option value="1">Admin</option>
                          <option value="2">User</option>
                        </select>
                      </div>

                      <div class=" form-group">
                        <label for="exampleSelectGender">Provinsi</label>
                        <select class="form-control col-md-5" name="id_provinsi">
                        <?php foreach($provinsi as $provinsi) { ?>
                          <option value="<?php echo $provinsi->id_provinsi ?>">
                            <?php echo $provinsi->nama_provinsi ?>
                          </option>
                        <?php } ?>
                        <!-- <option>--Alamat Provinsi Anggota--</option> -->
                        </select>
                      </div>
  

                      <div class="form-group">
                        <label>Upload Photo</label><br>
                        <input type="file" name="photo">
                      </div>

                      <!-- <div class="form-group">
                        <label>File upload</label>
                        <input type="file" name="img[]" class="file-upload-default">
                        <div class="input-group col-xs-12">
                          <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                          <span class="input-group-append">
                            <button class="file-upload-browse btn btn-gradient-primary" type="button">Upload</button>
                          </span>
                        </div>
                      </div> -->

                      <button type="submit" name="submit" class="btn btn-gradient-primary mr-2">
                        Simpan
                      </button>

                     <a href="<?=base_url('admin/user') ?>" type="reset" name="reset"  class="btn btn-light">
                        Batal 
                      </a>
                    </form>
                  </div>
                </div>
              </div>
