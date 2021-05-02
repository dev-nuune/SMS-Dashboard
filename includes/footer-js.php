 <!-- BEGIN BASE JS -->
    <script src="<?php echo BASE_URL ?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo BASE_URL ?>assets/vendor/popper.js/umd/popper.min.js"></script>
    <script src="<?php echo BASE_URL ?>assets/vendor/bootstrap/js/bootstrap.min.js"></script> <!-- END BASE JS -->
    <!-- BEGIN PLUGINS JS -->
    <script src="<?php echo BASE_URL ?>assets/vendor/pace-progress/pace.min.js"></script>
    <script src="<?php echo BASE_URL ?>assets/vendor/stacked-menu/js/stacked-menu.min.js"></script>
    <script src="<?php echo BASE_URL ?>assets/vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="<?php echo BASE_URL ?>assets/vendor/flatpickr/flatpickr.min.js"></script>
    <script src="<?php echo BASE_URL ?>assets/vendor/easy-pie-chart/jquery.easypiechart.min.js"></script>
    <script src="<?php echo BASE_URL ?>assets/vendor/chart.js/Chart.min.js"></script> <!-- END PLUGINS JS -->
    <!-- BEGIN THEME JS -->
    <script src="<?php echo BASE_URL ?>assets/javascript/theme.min.js"></script> <!-- END THEME JS -->
    <!-- BEGIN PAGE LEVEL JS -->
    <script src="<?php echo BASE_URL ?>assets/javascript/pages/dashboard-demo.js"></script> <!-- END PAGE LEVEL JS -->
    <!-- DataTables -->
    <script src="<?php echo BASE_URL ?>assets/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo BASE_URL ?>assets/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?php echo BASE_URL ?>assets/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?php echo BASE_URL ?>assets/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

    <script src="<?php echo BASE_URL ?>assets/vendor/text-mask-addons/textMaskAddons.js"></script>
    <script src="<?php echo BASE_URL ?>assets/vendor/bs-stepper/js/bs-stepper.min.js"></script> <!-- END PLUGINS JS -->
    <script src="<?php echo BASE_URL ?>assets/javascript/pages/steps-demo.js"></script> <!-- END PAGE LEVEL JS -->


    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-116692175-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag()
      {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      gtag('config', 'UA-116692175-1');
    </script>

    <script>
      $(function () {
        
        $("#example1").DataTable({
          "responsive": true,
          "autoWidth": true,
          "responsive": true,

        });
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": false,
          "info": true,
          "autoWidth": true,
          "responsive": true,
        });
      });
    </script>
  </body>

</html>

