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
                            <a class="nav-link" href="<?=base_url('admin/pelayanan_medis/tambah') ?>">
                        <button type="button" class="btn btn-gradient-primary mr-2" style="background: none;background-color: #00acee;">
                        <!-- <i class="mdi mdi-plus  btn-icon-prepend"></i> -->Add </button>
                      </a>
                        </div>
                    </div>
                     <table id="example" class="table table-striped table-bordered" style="width:100%">
                      <thead class="text-center">
                        <tr>
                          <th>No</th>
                          <th>Nama Pelayanan Medis</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
    <tbody>
      <?php $no=1; foreach ($pelayanan_medis as $pelayanan_medis) { ?>
        <tr>
          <td><?php echo $no++ ?></td>
          <td><?php echo $pelayanan_medis->nama_pelayanan_medis ?></td>
          <td class="text-center">

           <a href="<?php echo base_url('admin/pelayanan_medis/edit/'.$pelayanan_medis->id_pelayanan_medis)?>"><i class="mdi mdi-pencil-box-outline btn-icon-append"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

            <a href="<?php echo base_url('admin/pelayanan_medis/delete/'.$pelayanan_medis->id_pelayanan_medis)?>"onclick="return confirm('Hapus Data ini?')"><i class="mdi mdi mdi-delete btn-icon-append"></i></a>

          </td>
        </tr>
      <?php }?>
    </tbody>
  </table>
                  </div>
                </div>
              </div>
            </div>
