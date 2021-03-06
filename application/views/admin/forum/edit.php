
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
                        echo '<div class="alet alert-warning col-sm-3">';
                        echo 'File photo yang anda terlalu besar.';
                        echo '</div>';
                      }
                      //NOTIFIKASI
                      echo validation_errors('<div class="alert alert-warning">','</div>');
                    ?>
                    <form method="POST" action="<?php base_url('admin/forum/edit')?>" enctype="multipart/form-data">
                      <div class="form-group">
                        <label>Kompartemen</label>
                        <select class="form-control" name="id_kompartemen">
                              <?php foreach($kompartemen as $kompartemen) { ?>
                                <option value="<?php echo $kompartemen->id_kompartemen ?>" <?php if($forum->id_kompartemen==$kompartemen->id_kompartemen) { echo "selected"; } ?>>
                                  <?php echo $kompartemen->nama_kompartemen ?>
                                </option>
                              <?php } ?>
                        </select>
                      </div>

                      <div class="form-group">
                        <label>Judul</label>
                        <input type="text" name="judul_forum" value="<?php echo $forum->judul_forum ?>" class="form-control" placeholder="Judul Forum" />
                      </div>

                       <div class="form-group">
                        <label>Deskripsi</label>
                        <textarea name="deskripsi" class="form-control" placeholder="Isi Berita" id="editor"><?php echo $forum->deskripsi ?></textarea>
                      </div>

                      <div class="form-group">
                        <input type="file" name="photo_forum" class="file-upload-default">
                        <div class="input-group col-xs-12">
                          <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Photo">
                          <span class="input-group-append">
                            <button class="file-upload-browse btn btn-gradient-primary" type="button" style="background: none;background-color: #00acee;">Upload</button>
                          </span>
                        </div>
                      </div>

                      <button type="submit" name="submit" class="btn btn-gradient-primary mr-2"  style="background: none;background-color: #00acee;">
                        Simpan
                      </button>

                     <a href="<?=base_url('admin/forum') ?>" type="reset" name="reset"  class="btn btn-light">
                        Batal 
                      </a>
                    </form>
                  </div>
                </div>
              </div>