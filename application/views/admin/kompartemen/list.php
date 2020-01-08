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
                    <div class="flash" data-flash="<?= $this->session->flashdata('sukses');?>">
                    <h4 class="card-title"><?php echo $title ?></h4>

                    <!-- <?php if (!empty($this->session->flashdata('sukses'))): ?> -->
                      
                   <!--  <?php endif; ?> -->

                      <div class="row">
                        <div>
                           <a class="nav-link" href="<?=base_url('admin/kompartemen/tambah') ?>">
                            <button type="button" class="btn btn-gradient-primary mr-1" style="background: none;background-color:#00acee;">Add </button>
                          </a>
                        </div>
                    </div>
                     <table id="example" class="table table-striped table-bordered" style="width:100%">
                      <thead class="text-center">
                        <tr>
                          <th>No</th>
                          <th>Nama Kompartemen</th>
                          <th >Aksi</th>
                        </tr>
                      </thead>
    <tbody>
      <?php $no=1; foreach ($kompartemen as $kompartemen) { ?>
        <tr>
          <td><?php echo $no++ ?></td>
          <td><?php echo $kompartemen->nama_kompartemen ?></td>
         <td class="text-center">
            
            <a href="<?php echo base_url('admin/kompartemen/edit/'.$kompartemen->id_kompartemen)?>"><i class="mdi mdi-pencil-box-outline btn-icon-append"></i></a> 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<!-- 
              <a href="<?php echo base_url('admin/kompartemen/delete/'.$kompartemen->id_kompartemen)?>"onclick="return confirm('Hapus Data ini?')"><i class="mdi mdi mdi-delete btn-icon-append"></i></a> -->
            <!-- <a onclick="deletedata(<?php echo $kompartemen->id_kompartemen ?>)" href="#"><i class="mdi mdi mdi-delete btn-icon-append"></i></a> -->
            <a  href="<?php echo base_url('admin/kompartemen/delete/'.$kompartemen->id_kompartemen)?>" class="tombol-hapus"><i class="mdi mdi mdi-delete btn-icon-append"></i></a>
             <!-- <a href="<?php echo base_url('admin/kompartemen/delete/'.$kompartemen->id_kompartemen)?>" onclick="deletedata(<?php echo $kompartemen->id_kompartemen ?>)"><i class="mdi mdi mdi-delete btn-icon-append"></i></a> -->
        </td>
    </tr>

           
          </td>
        </tr>
      <?php }?>
    </tbody>
  </table>
                  </div>
                </div>
              </div>
            </div>

<script>
  function deletedata(id_kompartemen) 
    {
        Swal.fire({
        title: 'Hapus data ini?',
        text: "Data yang telah dihapus tidak dapat dikembalikan!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, hapus data!',
        // closeOnConfirm: true
      },
      function() {
        $.ajax({
          url  : '<?php echo base_url('admin/kompartemen/delete/'.$kompartemen->id_kompartemen)?>',
          method :'post',
          type : 'delete',
          data : {id_kompartemen:id_kompartemen},
          success:function(){
            Swal.fire('Data berhasil dihapus', 'success');
          },
          error:function(){
            Swal.fire('Data gagal dihapus', 'error');
          }
        });
      });
    }
</script>
.then((result) => {
  if (result.value) {
    Swal.fire(
      'Deleted!',
      'Your file has been deleted.',
      'success'
    )
  }
})
