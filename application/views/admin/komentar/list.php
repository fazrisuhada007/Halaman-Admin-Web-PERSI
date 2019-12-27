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
    font-size: 20px;
    /* color: #66BB6A; */
}   
</style>
 <script src="<?php echo base_url('asset/jquery.min.js'); ?>"></script> 

 <div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
                <h4 class="card-title"><?php echo $title ?></h4>
                <div class="row">
                  <div>
                    <a class="nav-link">
                      <button type="button" id="btn-delete" class="btn btn-gradient-primary mr-1" style="background: none;background-color: #00acee;"><i class="mdi mdi-delete btn-icon-append"></i>Delete
                      </button>
                    </a>
                    </div>
                </div>
                <form method="post" action="<?php echo base_url('admin/komentar/delete') ?>" id="form-delete">
                <table align="center" id="example" class="table table-striped table-bordered" style="overflow: auto; width:auto; display:block!important;">
                  <thead>
                    <tr class="text-center">
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
                          <div class="form-check form-check-info">
                           <label class="form-check-label">
                            <input style="position:static;" type='checkbox' class='form-check-input' name='id_komentar[]' value='<?=$komentar->id_komentar;?>'>
                          </label>
                        </div>
                        </td>
                      </tr>
                        <?php }?>
                  </tbody>
                </table>
              </form>
        </div>
      </div>
    </div>
  </div>
 <script> $(document).ready( function () {
    $('#myTable').DataTable();
} );</script>
   
   <script>
  $(document).ready(function(){ // Ketika halaman sudah siap (sudah selesai di load)
    $('#btn-delete').on('click', function(){
      let check =[];
      $('table').find('input[type="checkbox"]').each(function(){
        if($(this).is(':checked')){
          check.push($(this).val())
        }
      })
      $.ajax({
        url : '<?php echo base_url('admin/komentar/delete') ?>',
        method  : 'post',
        type    : 'ajax',
        data    : {id : check},
        success : function(data)
                  {
                    alert(data);
                    window.location.reload();
                  },
        error   : function(){
          alert('Gagal')
        }
      })
    })
  });
  </script>