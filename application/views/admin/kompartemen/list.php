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
                      <div class="row">
                        <div>
                           <a class="nav-link" href="<?=base_url('admin/kompartemen/tambah') ?>">
                            <button type="button" class="btn btn-gradient-primary mr-1" style="background: none;background-color:#00acee;">Add </button>
                          </a>
                        </div>
                    </div>
                     <table id="example" class="table table-striped table-bordered" style="width:100%">
                      <thead class="text-center">
                        <tr>
                          <th>No</th>
                          <th>Nama Kompartemen</th>
                          <th >Aksi</th>
                        </tr>
                      </thead>
    <tbody>
      <?php $no=1; foreach ($kompartemen as $kompartemen) { ?>
        <tr>
          <td><?php echo $no++ ?></td>
          <td><?php echo $kompartemen->nama_kompartemen ?></td>
         <td class="text-center">
            
            <a href="<?php echo base_url('admin/kompartemen/edit/'.$kompartemen->id_kompartemen)?>"><i class="mdi mdi-pencil-box-outline btn-icon-append"></i></a> 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

            <a href="<?php echo base_url('admin/kompartemen/delete/'.$kompartemen->id_kompartemen)?>"onclick="return confirm('Hapus Data ini?')"><i class="mdi mdi mdi-delete btn-icon-append"></i></a>

          </td>
        </tr>
      <?php }?>
    </tbody>
  </table>
                  </div>
                </div>
              </div>
            </div>
