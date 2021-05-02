<?php include('../path.php'); ?>
<?php include_once(ROOT_PATH . '../includes/header.php'); ?>
      <!-- .app-header -->
        <?php include_once(ROOT_PATH . '../includes/nav.php'); ?>
      <!-- .app-aside -->
        <?php include_once(ROOT_PATH . '../includes/sidebar.php');?>
      <!-- .app-main -->
      <main class="app-main">
        <!-- .wrapper -->
        <div class="wrapper">
          <!-- .page -->
          <div class="page">
            <!-- .page-inner -->
            <div class="page-inner">
              <!-- .page-title-bar -->
                <div class="row">
                    <div class="col-md-12">
                      <?php include_once(ROOT_PATH . '/student/add.php'); ?>
                    </div>
                    <div class="col-md-12">
                        <div class="card bg-light ">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h5>Student Admission</h5>
                                    </div>
                                    <div class="col-md-6 ">
                                        <button class="btn btn-info float-right" id='btnAddNewStud'>Add New</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                      <div class="card">
                        <div class="card-body">
                          <table id="example1" class="table table-bordered table-striped ">
                              <thead>
                                  <tr class='bg-light'>
                                      <th colspan='8'> 
                                          <h3>Students</h3>
                                      </th>
                                  </tr>
                              <tr>
                                  <th>#</th>
                                  <th>Admission number</th>
                                  <th>Student name</th>
                                  <th>Class</th>
                                  <th>Shif</th>
                                  <th>Status</th>
                                  <th>Actions</th>
                              </tr>
                              </thead>
                              <tbody id=''>
                                  <tr>
                                    <td>1</td>
                                    <td>10001</td>
                                    <td>Yakub Ahmed</td>
                                    <td>FORM4-A Apr 2020 - Apr 2021</td>
                                    <td>Morning</td>
                                    <td>Active</td>
                                    <td>
                                      <div class='btn-group btn-group-sm' role='group' aria-label='Basic example'>
                                        <button type='button' class='btn btn-info' data-toggle='modal' data-target='#VeiwOrder'  data-toggle='tooltip' data-placement='top' title='View student information' id='btnviewOrder' data-id='$id'><i class='fa fa-list'></i></button>
                                        <button type='button' class='btn btn-secondary' data-toggle='modal' data-target='#AddPayment'   data-toggle='tooltip' data-placement='top' title='Edit student information' data-id='$id' id='btnAddPayment'><i class='fa fa-edit'></i></button>
                                        <button type='button' class='btn btn-danger' id='deleteOrder' data-id='$id'  data-toggle='tooltip' data-placement='top' title='Delete'> <i class='fa fa-trash'></i> </button>
                                      </div>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>1</td>
                                    <td>10002</td>
                                    <td>Abdulkadir Hassan</td>
                                    <td>FORM4-A Apr 2020 - Apr 2021</td>
                                    <td>Afternoon</td>
                                    <td>Active</td>
                                    <td>
                                      <div class='btn-group btn-group-sm' role='group' aria-label='Basic example'>
                                        <button type='button' class='btn btn-info' data-toggle='modal' data-target='#VeiwOrder'  data-toggle='tooltip' data-placement='top' title='View student information' id='btnviewOrder' data-id='$id'><i class='fa fa-list'></i></button>
                                        <button type='button' class='btn btn-secondary' data-toggle='modal' data-target='#AddPayment'   data-toggle='tooltip' data-placement='top' title='Edit student information' data-id='$id' id='btnAddPayment'><i class='fa fa-edit'></i></button>
                                        <button type='button' class='btn btn-danger' id='deleteOrder' data-id='$id'  data-toggle='tooltip' data-placement='top' title='Delete'> <i class='fa fa-trash'></i> </button>
                                      </div>
                                    </td>
                                  </tr>
                              </tbody>
                
                          </table>
                        </div>
                      </div>
                    </div>

                </div>
              </div><!-- /.page-section -->
            </div><!-- /.page-inner -->
          </div><!-- /.page -->
        </div><!-- .app-footer -->
        <footer class="app-footer">
          <?php include('../includes/footer.php'); ?>
        </footer><!-- /.app-footer -->
        <!-- /.wrapper -->
      </main><!-- /.app-main -->
    </div><!-- /.app -->
    <!-- BEGIN BASE JS -->
    <script src="../assets/vendor/jquery/jquery.min.js"></script>
    <script src="../assets/vendor/popper.js/umd/popper.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.min.js"></script> <!-- END BASE JS -->
    <!-- BEGIN PLUGINS JS -->
    <script src="../assets/vendor/pace-progress/pace.min.js"></script>
    <script src="../assets/vendor/stacked-menu/js/stacked-menu.min.js"></script>
    <script src="../assets/vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="../assets/vendor/flatpickr/flatpickr.min.js"></script>
    <script src="../assets/vendor/easy-pie-chart/jquery.easypiechart.min.js"></script>
    <script src="../assets/vendor/chart.js/Chart.min.js"></script> <!-- END PLUGINS JS -->
    <!-- BEGIN THEME JS -->
    <script src="../assets/javascript/theme.min.js"></script> <!-- END THEME JS -->
    <!-- BEGIN PAGE LEVEL JS -->
    <script src="../assets/javascript/pages/dashboard-demo.js"></script> <!-- END PAGE LEVEL JS -->
    <!-- DataTables -->
    <script src="../assets/datatables/jquery.dataTables.min.js"></script>
    <script src="../assets/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="../assets/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../assets/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

    <script src="../assets/vendor/text-mask-addons/textMaskAddons.js"></script>
    <script src="../assets/vendor/bs-stepper/js/bs-stepper.min.js"></script> <!-- END PLUGINS JS -->
    <script src="../assets/javascript/pages/steps-demo.js"></script> <!-- END PAGE LEVEL JS -->


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


<script>

    $(document).ready(function(){
      $(document).on('click', '#btnAddNewStud', function(){
        $('#studentRegForm').css('display','block')
      });
    });

</script>