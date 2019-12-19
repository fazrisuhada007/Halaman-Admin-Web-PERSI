
 <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title"><?php echo $title ?></h4>
                    <?php
                    //NOTIFIKASI
                    echo validation_errors('<div class="alert alert-warning col-md-5">','</div>');
                    ?>
                    <form method="POST" action="<?php base_url('admin/forum/tambah')?>" enctype="multipart/form-data">
                      <div class="form-group">
                        <label>Kompartemen</label>
                        <select class="form-control" name="id_kompartemen">
                               <?php foreach($kompartemen as $kompartemen) { ?>
                                  <option value="<?php echo $kompartemen->id_kompartemen ?>">
                                    <?php echo $kompartemen->nama_kompartemen ?>
                                  </option>
                               <?php } ?>
                        </select>
                      </div>

                      <div class="form-group">
                        <label>Judul</label>
                        <input type="text" name="judul_forum" value="<?php echo set_value('judul_forum')?>" class="form-control" placeholder="Judul Forum" />
                      </div>

                       <div class="form-group">
                        <label>Deskripsi</label>
                        <textarea name="deskripsi" class="form-control" placeholder="Isi Berita" id="editor"><?php echo set_value('deskripsi')?></textarea>
                      </div>

                      <div class="form-group">
                        <label>Upload Photo</label><br>
                        <input type="file" name="photo_forum" required="required">
                      </div>

                      <button type="submit" name="submit" class="btn btn-gradient-primary mr-2">
                        Simpan
                      </button>

                     <a href="<?=base_url('admin/forum') ?>" type="reset" name="reset"  class="btn btn-light">
                        Batal 
                      </a>
                    </form>
                  </div>
                </div>
              </div>