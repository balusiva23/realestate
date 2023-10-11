  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?php echo base_url(); ?>assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- <script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.min.js"></script> -->
  <script src="<?php echo base_url(); ?>assets/vendor/chart.js/chart.umd.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/echarts/echarts.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/quill/quill.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->

  <script src="<?php echo base_url(); ?>assets/js/main.js"></script>

  	<script src="<?php echo base_url(); ?>assets/js/jquery/jquery.min.js"></script>


	<script src="<?php echo base_url(); ?>assets/wnoty/wnoty.js"></script>
    <script src="<?php echo base_url(); ?>assets/wnoty/jquery-confirm.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.validate.min.js"></script> 


     <!-- datatable -->
    <script src="<?php echo base_url(); ?>assets/datatables/jquery.dataTables.min.js"></script>

    <script type="text/javascript">
      //    $('#example4').DataTable({
       
      
      // });
    $(document).ready(function() {
        $('#example4').DataTable({
          
            "scrollX": true // Enable horizontal scrolling 
        });
    }); 
    $(document).ready(function() {
        $('#bannertbl').DataTable({
          
         "scrollX": true,
        "scroller": true
        });
    });
    </script>