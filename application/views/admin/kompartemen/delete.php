<!-- Button trigger modal -->
<button type="button" data-toggle="modal" data-target="#delete-<?php echo $kompartemen->id_kompartemen ?>"><i class="mdi mdi mdi-delete btn-icon-append"></i>
</button>

<!-- Modal -->
<div class="modal fade" id="delete-<?php echo $kompartemen->id_kompartemen ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Hapus Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        	Data yang sudah dihapus tidak dapat dikembalikan.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">Batal</button>
        <a class="btn btn-danger" href="<?php echo base_url('admin/kompartemen/delete/'.$kompartemen->id_kompartemen)?>">Ya, Hapus data ini</a>
      </div>
    </div>
  </div>
</div>