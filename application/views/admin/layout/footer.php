<!-- untuk ckeditor -->
<script>
  initSample();
</script>

<!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted text-center text-sm-left d-block d-sm-inline-block"><?php echo " Copyright © 2019 - " . date("Y") ?>
              <a href="https://www.persi.or.id/">PERSI (Perhimpunan Rumah Sakit Indonesia)</a>. All rights reserved.</span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="<?php echo base_url() ?>asset/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="<?php echo base_url() ?>asset/assets/vendors/chart.js/Chart.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="<?php echo base_url() ?>asset/assets/js/off-canvas.js"></script>
    <script src="<?php echo base_url() ?>asset/assets/js/hoverable-collapse.js"></script>
    <script src="<?php echo base_url() ?>asset/assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="<?php echo base_url() ?>asset/assets/js/dashboard.js"></script>
    <script src="<?php echo base_url() ?>asset/assets/js/todolist.js"></script>
    <!-- file upload -->
    <script src="<?php echo base_url() ?>asset/assets/js/file-upload.js"></script>
    <!-- End custom js for this page -->
    <!-- End custom js for this page -->
    <!-- Data tabel -->
   
   <!-- Data Tabel -->
   <script src="<?php echo base_url() ?>asset/assets/js/jquery-3.3.1.js"></script>
   <script src="<?php echo base_url() ?>asset/assets/js/jquery.dataTables.min.js"></script>
   <script src="<?php echo base_url() ?>asset/assets/js/dataTables.bootstrap4.min.js"></script>
   <script >
    $(document).ready(function() {
    $('#example').DataTable();

    // Memanggil function sweetalert berhasil
        alert();
        })
          function alert(){
          let flash = $('.flash').data('flash');
          if (!jQuery.isEmptyObject(flash)) {
              Swal.fire({
              position: 'center',
              icon    : 'success',
              title   : '',
              showConfirmButton: false,
              timer: 1500
            })
          }
        }
        //Memanggil function sweetalert hapus
        $('.tombol-hapus').on('click',function(hapus){
          hapus.preventDefault();
          let href = $(this).attr('href')
          Swal.fire({
            title: 'Hapus data ini?',
            text : "Data yang dihapus tidak bisa dikembalikan!",
            icon : 'warning',
            showCancelButton: true,
            confirmButtonColor:'#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, hapus data!'
          }).then((result) => {
            if (result.value) {
              window.location.href = href
            }
          })
        })
         </script>

<!-- sweetalert -->
<script src="<?php echo base_url() ?>asset/assets/sweetalert/sweetalert2.all.min.js"></script>
<script src="<?php echo base_url() ?>asset/assets/sweetalert/myscript.js"></script>

  </body>
</html>