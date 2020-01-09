
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

                    <form action="<?php base_url('admin/provinsi/tambah')?>" method="POST">
                      <div class="form-group">
                        <label>Nama Provinsi</label>
                        <input type="text" name="nama_provinsi" placeholder="Nama Provinsi" value="<?php echo set_value('nama_provinsi')?>" class="form-control col-md-5" autocomplete="off" autofocus />
                      </div>
                      <button type="submit" name="submit" id="Swal.fire" class="btn btn-gradient-primary mr-2" style="background: none;background-color: #00acee;">
                        Simpan
                      </button>

                      <a href="<?=base_url('admin/provinsi') ?>" type="reset" name="reset"  class="btn btn-light">
                        Batal 
                      </a>
                      </button>
                    </form>
                  </div>
                </div>
              </div>