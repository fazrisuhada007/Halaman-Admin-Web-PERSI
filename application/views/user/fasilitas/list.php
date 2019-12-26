 <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title"><?php echo $title ?></h4>
                      <div class="row">
                        <div>
                          <a class="nav-link" href="<?=base_url('user/fasilitas/tambah') ?>">
                          <button type="button" class="btn btn-gradient-primary mr-2">Add </button>
                        </a>
                        </div>
                     </div>
                     <table id="example" class="table table-striped table-bordered" style="width:100%">
                      <thead class="text-center">
                        <tr>
                          <th>No</th>
                          <th>Nama Fasilitas</th>
                          <th >Aksi</th>
                        </tr>
                      </thead>
    <tbody>
     <?php echo $this->session->userdata('nama_rumah_sakit') ?>
      <?php $no=1; foreach ($tbl_anggota_rs as $tbl_anggota_rs) { ?>
        <tr>
          <td><?php echo $no++ ?></td>
          <td><?php echo $tbl_anggota_rs->nama_fasilitas ?></td>
          <td class="text-right">

            <a href="<?php echo base_url('user/fasilitas/delete/'.$tbl_anggota_rs->id_fasilitas)?>" class="btn btn-gradient-danger btn-icon-text" onclick="return confirm('Hapus Data ini?')"><!-- <i class="mdi mdi mdi-delete btn-icon-append"> --></i>Delete</a>

          </td>
        </tr>
      <?php }?>
    </tbody>
  </table>
                  </div>
                </div>
              </div>
            </div>
