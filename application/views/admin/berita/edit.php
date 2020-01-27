
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
                        echo validation_errors('<div class="alert alert-danger alert-dismissible">
                                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                                            <strong>Peringatan!</strong> ','</div>');
                    ?><br>
                    <form method="POST" action="<?php base_url('admin/berita/edit')?>" enctype="multipart/form-data">
                      <div class="form-group">
                        <label>Judul Berita</label>
                        <input type="text" name="judul_berita" class="form-control col-md-5" placeholder="Judul Berita" value="<?php echo $berita->judul_berita ?>">
                      </div>

                       <div class="form-group">
                        <label>Isi Berita</label>
                        <textarea name="isi" class="form-control" placeholder="Isi Berita" id="editor"><?php echo  $berita->isi ?></textarea>
                      </div>

                     <div class="form-group">
                        <input type="file" name="photo" class="file-upload-default">
                        <div class="input-group col-xs-12">
                          <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Photo">
                          <span class="input-group-append">
                            <button class="file-upload-browse btn btn-gradient-primary" type="button" style="background: none;background-color: #00acee;">Upload</button>
                          </span>
                        </div>
                      </div>

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