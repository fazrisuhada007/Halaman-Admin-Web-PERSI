<style type="text/css" media="screen">  
.mdi-comment-text-outline::before {
    font-size: 30px;
    /* color: #66BB6A; */
} 
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
                        <a class="nav-link" href="<?=base_url('admin/forum/tambah') ?>">
                    <button type="button" class="btn btn-gradient-primary mr-1" style="background: none;background-color: #00acee;">
                    <!-- <i class="mdi mdi-plus  btn-icon-prepend"></i> -->Add </button>
                  </a>
                    </div>
                </div>
                <table align="center" id="example" class="table table-striped table-bordered">  <!-- style="overflow: auto; width:auto; display:block!important;"-->
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Kompartemen</th>
                      <th>Judul Forum</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $no=1; foreach ($forum as $forum) { ?>
                      <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $forum->nama_kompartemen ?></td>
                        <td><?php echo $forum->judul_forum ?></td>
                        <td class="text-center">

                          <a href="<?php echo base_url('admin/komentar/?id_forum='.$forum->id_forum)?>"><i class="mdi mdi-comment-text-outline btn-icon-append"></i></a>  
                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            
                          <a href="<?php echo base_url('admin/forum/edit/'.$forum->id_forum)?>"><i class="mdi mdi-pencil-box-outline btn-icon-append"></i></a>  
                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                          <a href="<?php echo base_url('admin/forum/delete/'.$forum->id_forum)?>"onclick="return confirm('Hapus Data ini?')"><i class="mdi mdi-delete btn-icon-append"></i></a>
                         <!--  <a href="<?php echo base_url('admin/forum/delete/'.$forum->id_forum)?>"class="tombol-hapus"><i class="mdi mdi mdi-delete btn-icon-append"></i></a> -->
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
   