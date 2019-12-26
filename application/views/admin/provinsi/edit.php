<style type="text/css" media="screen">
.mdi-pencil-box-outline::before {
    font-size: 30px;
    /* color: #66BB6A; */
} 
.mdi-delete::before {
    font-size: 30px;
    /* color: #66BB6A; */
}   
</style>

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
                    <form action="<?php base_url('admin/provinsi/edit'.$provinsi->id_provinsi)?>" method="POST">
                      <div class="form-group">
                        <label>Nama Provinsi</label>
                        <input type="text" name="nama_provinsi"  class="form-control col-md-5" placeholder="Nama Provinsi" value="<?php echo $provinsi->nama_provinsi?>">
                      </div>
                      <button type="submit" name="submit" class="btn btn-gradient-primary mr-2" style="background: none;background-color: #00acee;">
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