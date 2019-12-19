 <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                      <h4 class="card-title"><?php echo $title ?></h4>
                      <div class="row">
                          <div>
                              <a class="nav-link" href="<?=base_url('admin/forum/tambah') ?>">
                          <button type="button" class="btn btn-gradient-primary mr-2">
                          <!-- <i class="mdi mdi-plus  btn-icon-prepend"></i> -->Add </button>
                        </a>
                          </div>
                      </div>
                      <table align="center" id="example" class="table table-striped table-bordered" style="overflow: auto; width:auto; display:block!important;">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Nama Rumah sakit</th>
                            <th>Kompartemen</th>
                            <th>Judul Forum</th>
                            <th>Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php $no=1; foreach ($forum as $forum) { ?>
                            <tr>
                              <td><?php echo $no++ ?></td>
                              <td><?php echo $forum->nama_rumah_sakit ?></td>
                              <td><?php echo $forum->nama_kompartemen ?></td>
                              <td><?php echo $forum->judul_forum ?></td>
                              <td >
                                <a href="<?php echo base_url('admin/forum/edit/'.$forum->id_forum)?>" class="btn btn-gradient-success btn-icon-text" ><!-- <i class="mdi mdi-file-check btn-icon-append"> --></i>Update</a>

                                <a href="<?php echo base_url('admin/forum/delete/'.$forum->id_forum)?>" class="btn btn-gradient-danger btn-icon-text" onclick="return confirm('Hapus Data ini?')"><!-- <i class="mdi mdi mdi-delete btn-icon-append"> --></i>Delete</a>
                               
                              </td>
                            </tr>
                          <?php }?>
                        </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
 <script> $(document).ready( function () {
    $('#myTable').DataTable();
} );</script>
   