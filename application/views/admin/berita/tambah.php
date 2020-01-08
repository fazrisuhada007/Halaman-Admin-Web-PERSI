
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
                        echo '<div class="alert alert-warning">';
                        echo 'File photo terlalu besar.';
                        echo '</div>';
                      }
                      //NOTIFIKASI
                      echo validation_errors('<div class="alert alert-warning">','</div>');
                    ?><br>
                    <form method="POST" action="<?php base_url('admin/berita/tambah')?>" enctype="multipart/form-data">
                      <div class="form-group">
                        <label>Judul Berita</label>
                        <input type="text" name="judul_berita" class="form-control col-md-5" placeholder="Judul Berita" value="<?php echo set_value('judul_berita')?>">
                      </div>

                       <div class="form-group">
                        <label>Isi Berita</label>
                        <textarea name="isi" class="form-control" placeholder="Isi Berita" id="editor"><?php echo set_value('isi')?></textarea>
                      </div>

                      <div class="form-group">
                        <label>Upload Photo</label><br>
                        <input type="file" name="photo"  value="<?php echo set_value('photo')?>">
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

                      <button type="submit" name="submit" class="btn btn-gradient-primary mr-1" style="background: none;background-color: #00acee;">
                        Simpan
                      </button>

                     <a href="<?=base_url('admin/berita') ?>" type="reset" name="reset"  class="btn btn-light">
                        Batal 
                      </a>
                    </form>
                  </div>
                </div>
              </div>