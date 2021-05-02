<?php include_once('../includes/header.php'); ?>
      <!-- .app-header -->
        <?php include_once('../includes/nav.php'); ?>
      <!-- .app-aside -->
        <?php include_once('../includes/sidebar.php');?>
      <!-- .app-main -->
      <main class="app-main">
        <!-- .wrapper -->
        <div class="wrapper">
          <!-- .page -->
          <div class="page">
            <!-- .page-inner -->
            <div class="page-inner">
         
            
              <!-- .page-section -->
              <div class="page-section">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header bg-info text-light"> Student Attendance </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label for="">Class</label>
                                        <select name="" id="select2-single" class='form-control' data-toggle="select2" data-placeholder="Select a class" data-allow-clear="true">
                                            <option value="">Select Class</option>
                                            <option value="FORM4-B">FORM4-B</option>
                                            <option value="CLass8-A">Class8-A</option>
                                            <option value="FORM-4A">FORM4-A</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="">Subject</label>
                                        <select name="" id="select2-single" class='form-control' data-toggle="select2" data-placeholder="Select a class" data-allow-clear="true">
                                            <option value="">Select subject</option>
                                            <option value="English">English</option>
                                            <option value="Math">Math</option>
                                            <option value="Arabic">Arabic</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="">Attendance date</label>
                                        <input type="date" name="" id="" class="form-control">
                                    </div>

                                    <div class="form-group col-md-12">
                                        <button class="btn btn-info float-right" id='search-attendance'> <i class='fa fa-search'></i> </button>
                                    </div>

                                    <div class="table-responsive "id='attendance-information' style='display:none;'>
                                        <table class="table table-bordered table-striped table-sm">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Student name</th>
                                                    <th>Attendance</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Yakub Ahmed Yakub</td>
                                                    <td> 
                                                        Present <input type="radio" name="attendance" id="" >
                                                        Absent <input type="radio" name="attendance" id="" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Abdulkadir Hassan</td>
                                                    <td> 
                                                        Present <input type="radio" name="attendance" id="" >
                                                        Absent <input type="radio" name="attendance" id="" >
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <div class="form-group col-md-12">
                                            <button class='btn btn-info float-right'>Save attendance</button>
                                        </div>
                                    </div>


                                </div>
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
        <!-- select2 -->
        <link rel="stylesheet" href="../assets/vendor/select2/js/select2.min.js">
    <!-- END select2 -->
  </body>

</html>


<script>
    $(document).ready(()=>{
        $(document).on('click','#search-attendance', ()=>{
            $('#attendance-information').css('display','block')
        })
    });
</script>