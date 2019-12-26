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
                </div>
                <table align="center" id="example" class="table table-striped table-bordered" style="overflow: auto; width:auto; display:block!important;">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Rumah sakit</th>
                      <th>Komentar</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $no=1; foreach ($komentar as $komentar) { ?>
                      <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $komentar->nama_rumah_sakit ?></td>
                        <td style="width:100%; height:100%;"><?php echo $komentar->komentar ?></td>
                        <td class="text-center">

                          <a href="<?php echo base_url('admin/komentar/delete/'.$komentar->id_komentar)?>"onclick="return confirm('Hapus Data ini?')"><i class="mdi mdi mdi-delete btn-icon-append"></i></a>

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
   