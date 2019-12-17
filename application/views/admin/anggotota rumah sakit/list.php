 <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title"><?php echo $title ?></h4>
                    </li>
                    <div class="row">
                        <div class="col-md-2">
                            <a class="nav-link" href="<?=base_url('admin/anggota_rs/tambah') ?>">
                        <button type="button" class="btn btn-gradient-primary mr-2">
                        <!-- <i class="mdi mdi-plus  btn-icon-prepend"></i> -->Add </button>
                      </a>
                        </div>
                    </div>
                   <table id="example" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Photo Rumah Sakit</th>
                          <th>Nama Rumah Sakit</th>
                          <th>Alamat Rumah Sakit</th>
                          <th>Telphon Rumah Sakit</th>
                          <th>Status Buka</th>
                          <th>Provinsi</th>
                          <!-- <th>Level</th> -->
                          <th>Aksi</th>
                        </tr>
                      </thead>
    <tbody>
      <?php $no=1; foreach ($anggota_rs as $anggota_rs) { ?>
        <tr>
          <td><?php echo $no++ ?></td>
          <td>
            <img src="<?php echo base_url('asset/upload/image/thumbs/'.$anggota_rs->photo) ?>" style="width:30%; height:30%;" class="rounded"/>
          <!-- </td> -->
          <td><?php echo $anggota_rs->nama_rumah_sakit ?></td>
          <td><?php echo $anggota_rs->alamat_rumah_sakit ?></td>
          <td><?php echo $anggota_rs->telp_rumah_akit ?></td>
          <td><?php echo $anggota_rs->status_buka ?></td>
          <td><?php echo $anggota_rs->id_rumah_sakit ?></td>
         <!--  <td>
            <?php
              if($this->$anggota_rs->level == '1'){
                echo 'Admin';
              }elseif($this->$anggota_rs->level == '2'){ 
                echo 'User';
              }
            ?>  
          </td> --> 
          <td >
            <a href="<?php echo base_url('admin/anggota_rs/detail/'.$anggota_rs->id_anggota_rs)?>"><i font-size="width:40%; height:30%;" class="mdi mdi-eye btn-icon-append"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

            <a href="<?php echo base_url('admin/anggota_rs/edit/'.$anggota_rs->id_anggota_rs)?>"><i class="mdi mdi mdi-pencil btn-icon-append"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

            <a href="<?php echo base_url('admin/anggota_rs/delete/'.$anggota_rs->id_anggota_rs)?>" onclick="return confirm('Hapus Data ini?')"><i class="mdi mdi mdi-delete btn-icon-append"></i></a>
           
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
   