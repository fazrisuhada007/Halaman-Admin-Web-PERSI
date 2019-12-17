
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
                    <form action="<?php base_url('admin/kompartemen/edit'.$kompartemen->id_kompartemen)?>" method="POST">
                      <div class="form-group">
                        <label>Nama Kompartemen</label>
                        <input type="text" name="nama_kompartemen"  class="form-control col-md-5" placeholder="Nama Kompartemen" value="<?php echo $kompartemen->nama_kompartemen?>">
                      </div>
                      
                      <button type="submit" name="submit" class="btn btn-gradient-primary mr-2">
                        Simpan
                      </button>

                     <a href="<?=base_url('admin/kompartemen') ?>" type="reset" name="reset"  class="btn btn-light">
                        Batal 
                      </a>
                    </form>
                  </div>
                </div>
              </div>