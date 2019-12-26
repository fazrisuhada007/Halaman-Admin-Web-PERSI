
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
                    <form action="<?php base_url('admin/fasilitas/edit'.$fasilitas->id_fasilitas)?>" method="POST">
                      <div class="form-group">
                        <label>Nama Fasilitas</label>
                        <input type="text" name="nama_fasilitas"  class="form-control col-md-5" placeholder="Nama Fasilitas" value="<?php echo $fasilitas->nama_fasilitas?>">
                      </div>
                      
                      <button type="submit" name="submit" class="btn btn-gradient-primary mr-2"  style="background: none;background-color: #00acee;">
                        Simpan
                      </button>

                     <a href="<?=base_url('admin/fasilitas') ?>" type="reset" name="reset"  class="btn btn-light">
                        Batal 
                      </a>
                    </form>
                  </div>
                </div>
              </div>