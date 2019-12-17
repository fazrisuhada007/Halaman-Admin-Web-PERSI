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
                            <a class="nav-link" href="<?=base_url('admin/berita/tambah') ?>">
                        <button type="button" class="btn btn-gradient-primary mr-2">
                        <!-- <i class="mdi mdi-plus  btn-icon-prepend"></i> -->Add </button>
                      </a>
                        </div>
                    </div>
                   <table id="example" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th>No</th>
                          <!-- <th>Photo Berita</th> -->
                          <th>Judul Berita</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
    <tbody>
      <?php $no=1; foreach ($berita as $berita) { ?>
        <tr>
          <td><?php echo $no++ ?></td>
         <!--  <td>
            <img src="<?php echo base_url('asset/upload/image/thumbs/'.$berita->photo) ?>" style="width:30%; height:30%;" class="rounded"/>
          </td> -->
          <td><?php echo $berita->judul_berita ?></td>
          <td>
            <a href="<?php echo base_url('admin/berita/edit/'.$berita->id_berita)?>" class="btn btn-gradient-success btn-icon-text" ><!-- <i class="mdi mdi-file-check btn-icon-append"> --></i>Update</a>

            <a href="<?php echo base_url('admin/berita/delete/'.$berita->id_berita)?>" class="btn btn-gradient-danger btn-icon-text" onclick="return confirm('Hapus Data ini?')"><!-- <i class="mdi mdi mdi-delete btn-icon-append"> --></i>Delete</a>
           
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
   