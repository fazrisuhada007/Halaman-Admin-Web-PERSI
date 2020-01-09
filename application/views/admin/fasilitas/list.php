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

                    <!-- Perintah menampilkan sweet alert -->
                    <div class="flash" data-flash="<?= $this->session->flashdata('sukses');?>">

                    <h4 class="card-title"><?php echo $title ?></h4>

                      <div class="row">
                        <div>
                            <a class="nav-link" href="<?=base_url('admin/fasilitas/tambah') ?>">
                        <button type="button" class="btn btn-gradient-primary mr-2" style="background: none;background-color: #00acee;">Add </button>
                      </a>
                        </div>
                    </div>
                     <table id="example" class="table table-striped table-bordered" style="width:100%">
                      <thead class="text-center">
                        <tr>
                          <th>No</th>
                          <th>Nama Fasilitas</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
    <tbody>
      <?php $no=1; foreach ($fasilitas as $fasilitas) { ?>
        <tr>
          <td><?php echo $no++ ?></td>
          <td><?php echo $fasilitas->nama_fasilitas ?></td>
          <td class="text-center">
            
            <a href="<?php echo base_url('admin/fasilitas/edit/'.$fasilitas->id_fasilitas)?>"><i class="mdi mdi-pencil-box-outline btn-icon-append"></i></a>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

           <a href="<?php echo base_url('admin/fasilitas/delete/'.$fasilitas->id_fasilitas)?>" class="tombol-hapus"><i class="mdi mdi mdi-delete btn-icon-append"></i></a>

          </td>
        </tr>
      <?php }?>
    </tbody>
  </table>
                  </div>
                </div>
              </div>
            </div>
