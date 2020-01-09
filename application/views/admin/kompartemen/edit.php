
 <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title"><?php echo $title ?></h4>
                    
                    <?php
                    //NOTIFIKASI
                    echo validation_errors('<div class="alert alert-danger alert-dismissible">
                                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                                            <strong>Peringatan!</strong> ','</div>');
                    ?>

                    <form action="<?php base_url('admin/kompartemen/edit'.$kompartemen->id_kompartemen)?>" method="POST">
                      <div class="form-group">
                        <label>Nama Kompartemen</label>
                        <input type="text" name="nama_kompartemen" placeholder="Nama Kompartemen" value="<?php echo $kompartemen->nama_kompartemen?>" class="form-control col-md-5" autocomplete="off" autofocus />
                      </div>
                      
                      <button type="submit" name="submit" class="btn btn-gradient-primary mr-2" style="background: none;background-color: #00acee;">
                        Simpan
                      </button>

                     <a href="<?=base_url('admin/kompartemen') ?>" type="reset" name="reset"  class="btn btn-light">
                        Batal 
                      </a>
                    </form>
                  </div>
                </div>
              </div>