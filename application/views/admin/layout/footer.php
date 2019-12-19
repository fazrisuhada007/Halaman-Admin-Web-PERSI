<!-- untuk ckeditor -->
<script>
  initSample();
</script>

<!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted text-center text-sm-left d-block d-sm-inline-block"><?php echo " Copyright © 2019 - " . date("Y") ?>
              <a href="https://www.persi.or.id/">PERSI (Persatuan Rumah Sakit Indonesia)</a>. All rights reserved.</span>
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
    <!-- End custom js for this page -->
    <!-- Data tabel -->
   
   <!-- Data Tabel -->
   <script src="<?php echo base_url() ?>asset/assets/js/jquery-3.3.1.js"></script>
   <script src="<?php echo base_url() ?>asset/assets/js/jquery.dataTables.min.js"></script>
   <script src="<?php echo base_url() ?>asset/assets/js/dataTables.bootstrap4.min.js"></script>
   <script >
    $(document).ready(function() {
    $('#example').DataTable();
    } )
   </script>
  </body>
</html>