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
                        <button type="button" class="btn btn-gradient-primary mr-2">
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
          <td class="text-right">
            <a href="<?php echo base_url('admin/pelayanan_medis/edit/'.$pelayanan_medis->id_pelayanan_medis)?>" class="btn btn-gradient-success btn-icon-text" ><!-- <i class="mdi mdi-file-check btn-icon-append"> --></i>Update</a>

            <a href="<?php echo base_url('admin/pelayanan_medis/delete/'.$pelayanan_medis->id_pelayanan_medis)?>" class="btn btn-gradient-danger btn-icon-text" onclick="return confirm('Hapus Data ini?')"><!-- <i class="mdi mdi mdi-delete btn-icon-append"> --></i>Delete</a>
          </td>
        </tr>
      <?php }?>
    </tbody>
  </table>
                  </div>
                </div>
              </div>
            </div>
