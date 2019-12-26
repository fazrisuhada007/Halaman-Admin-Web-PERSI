
 <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title"><?php echo $title ?></h4>
                    <?php
                      //Error upload
                      if(isset($error)) {
                        echo '<div class="alet alert-warning col-sm-3">';
                        echo 'File photo yang anda terlalu besar.';
                        echo '</div>';
                      }
                      //NOTIFIKASI
                      echo validation_errors('<div class="alert alert-warning">','</div>');
                    ?><br>
                    <form method="POST" action="<?php base_url('admin/user/edit')?>" enctype="multipart/form-data">
                      <div class="row">

                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Nama</label>
                            <div class="col-sm-9">
                              <input type="text" name="nama_lengkap" class="form-control" value="<?php echo $user->nama_lengkap ?>" placeholder="Nama Lengkap"/>
                            </div>
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                              <input type="text" name="email"  class="form-control" value="<?php echo  $user->email ?>" placeholder="Email User"/>
                            </div>
                          </div>
                        </div>

<!--                       <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Password</label>
                            <div class="col-sm-9">
                              <input type="text" name="password"  class="form-control" value="<?php echo set_value('password')?>" placeholder="Password User" />
                            </div>
                          </div>
                        </div> -->

                      <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Telphon</label>
                            <div class="col-sm-9">
                              <input type="text" name="telp" value="<?php echo  $user->telp ?>" class="form-control" placeholder="Nomor Telphon User" />
                            </div>
                          </div>
                        </div>

                      <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Level</label>
                            <div class="col-sm-9">
                              <select class="form-control" name="level">
                                <option value="1">Admin</option>
                                <option value="2" <?php if($user->level=="2") {echo "selected";} ?>>User</option>
                              </select>
                            </div>
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Provinsi</label>
                            <div class="col-sm-9">
                              <select class="form-control" name="id_provinsi">
                              <?php foreach($provinsi as $provinsi) { ?>
                                <option value="<?php echo $provinsi->id_provinsi ?>" <?php if($user->id_provinsi==$provinsi->id_provinsi) { echo "selected"; } ?>>
                                  <?php echo $provinsi->nama_provinsi ?>
                                </option>
                              <?php } ?>
                              </select>
                            </div>
                          </div>
                        </div>

                      <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Photo User</label>
                            <div class="col-sm-9">
                              <input type="file" name="photo"  class="form-control"/>
                            </div>
                          </div>
                      </div>

        <!-- form anggota -->
            <div class="row">
              <div class="col-24">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Organization</h4><br>
                      <div class="row">

                       <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Nama</label>
                            <div class="col-sm-9">
                              <input type="text" name="nama_rumah_sakit" class="form-control" placeholder="Nama Rumah Sakit" value="<?php echo  $anggota_rumah_sakit->nama_rumah_sakit ?>">
                            </div>
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Alamat</label>
                            <div class="col-sm-9">
                              <input type="text" name="alamat_rumah_sakit"  class="form-control" placeholder="Alamat Rumah Sakit" value="<?php echo  $anggota_rumah_sakit->alamat_rumah_sakit ?>">
                            </div>
                          </div>
                        </div>

                      <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Telephon</label>
                            <div class="col-sm-9">
                              <input type="text" name="telp_rumah_sakit"  class="form-control" placeholder="Telephon Rumah Sakit" value="<?php echo  $anggota_rumah_sakit->telp_rumah_sakit ?>">
                            </div>
                          </div>
                        </div>

                      <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Photo Rumah Sakit</label>
                            <div class="col-sm-9">
                              <input type="file" name="photo_rumah_sakit"  class="form-control">
                            </div>
                          </div>
                      </div>

                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Status</label>
                            <div class="col-sm-9">
                              <input type="text" name="status_buka"  class="form-control" placeholder="Status Buka Rumah Sakit" value="<?php echo  $anggota_rumah_sakit->status_buka ?>">
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <button type="submit" name="submit" class="btn btn-gradient-primary mr-2" style="background: none;background-color: #00acee;">
                          Simpan
                        </button>

                       <a href="<?=base_url('admin/user') ?>" type="reset" name="reset"  class="btn btn-light">
                          Batal 
                       </a>
                     </div>
                   </div>
                 </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
