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
                            <a class="nav-link" href="<?=base_url('admin/berita/tambah') ?>">
                        <button type="button" class="btn btn-gradient-primary mr-1" style="background: none;background-color: #00acee;">
                        <!-- <i class="mdi mdi-plus  btn-icon-prepend"></i> -->Add </button>
                      </a>
                        </div>
                    </div>
                   <table align="center" id="example" class="table table-striped table-bordered" style="overflow: auto; width:auto; display:block!important;">
                      <thead>
                        <tr class="text-center">
                          <th>No</th>
                          <!-- <th>Photo Berita</th> -->
                          <th>Judul Berita</th>
                          <th>Tanggal Update</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
    <tbody>
      <?php $no=1; foreach ($berita as $berita) { ?>
        <tr>
          <td><?php echo $no++ ?></td>
         <!--  <td>
            <img src="<?php echo base_url('asset/upload/image/thumbs/'.$berita->photo) ?>" style="width:100%; height:100%;" class="rounded"/>
          </td> -->
          <td><?php echo $berita->judul_berita ?></td>
          <td><?php echo $berita->tanggal_update ?></td>
          <td class="text-center">
            
            <a href="<?php echo base_url('admin/berita/edit/'.$berita->id_berita)?>"><i class="mdi mdi-pencil-box-outline btn-icon-append"></i></a> 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

            <a href="<?php echo base_url('admin/berita/delete/'.$berita->id_berita)?>"onclick="return confirm('Hapus Data ini?')"><i class="mdi mdi mdi-delete btn-icon-append"></i></a>

           
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
   