<?php include('../path.php'); ?>
<?php $title = "Finance"; include_once(ROOT_PATH . '../includes/header.php'); ?>
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
                                        <h5>Student Payments Information</h5>
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

<?php include('../includes/footer-js.php'); ?>

<script>

    $(document).ready(function(){
      $(document).on('click', '#btnAddNewStud', function(){
        $('#studentRegForm').css('display','block')
      });
    });

</script>