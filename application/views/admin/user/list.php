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
                    </li>
                    <div class="row">
                        <div>
                      <a class="nav-link" href="<?=base_url('admin/user/tambah') ?>">
                        <button type="button" class="btn btn-gradient-primary mr-1" style="background: none;background-color: #00acee;">Add</button>
                      </a>
                        </div>
                    </div>
                   <table align="center" id="example" class="table table-striped table-bordered" style="overflow: auto; width:auto; display:block!important;">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama Anggota</th>
                          <th>Nama Rumah sakit</th>
                          <th>Telepon</th>
                          <th>Alamat Rumah Sakit</th>
                          <th>Provinsi</th>
                          <!-- <th>Level</th> -->
                          <th>Aksi</th>
                        </tr>
                      </thead>
    <tbody>
      <?php $no=1; foreach ($user as $user) { ?>
        <tr>
          <td><?php echo $no++ ?></td>
          <!-- <td>
            <img src="<?php echo base_url('asset/upload/image/thumbs/'.$user->photo) ?>" style="width:30%; height:30%;" class="rounded"/>
          </td> -->
          <td><?php echo $user->nama_lengkap ?></td>
          <td><?php echo $user->nama_rumah_sakit ?></td>
          <td><?php echo $user->telp ?></td>
          <td><?php echo $user->alamat_rumah_sakit ?></td>
          <td><?php echo $user->nama_provinsi ?></td>
         <!--  <td>
            <?php
              if($this->$user->level == '1'){
                echo 'Admin';
              }elseif($this->$user->level == '2'){ 
                echo 'User';
              }
            ?>  
          </td> --> 
          <td class="text-center">
            
            <a href="<?php echo base_url('admin/user/edit/'.$user->id_rumah_sakit)?>"><i class="mdi mdi-pencil-box-outline btn-icon-append"></i></a> 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

            <a href="<?php echo base_url('admin/user/delete/'.$user->id_rumah_sakit)?>"onclick="return confirm('Hapus Data ini?')"><i class="mdi mdi mdi-delete btn-icon-append"></i></a>

           
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
   