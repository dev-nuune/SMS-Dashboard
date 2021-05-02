<?php include('../path.php'); ?>
<?php $title = "Subject to Class"; include_once(ROOT_PATH. '/includes/header.php'); ?>
      <!-- .app-header -->
        <?php include_once(ROOT_PATH. '/includes/nav.php'); ?>
      <!-- .app-aside -->
        <?php include_once(ROOT_PATH. '/includes/sidebar.php');?>
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
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header bg-info text-light"> Assign subject to class </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <label for="">Subject</label>
                                        <select multiple name="" id="" class="form-control">
                                          <option value="">Select subject</option>
                                          <option value="Math">Math</option>
                                          <option value="English">English</option>
                                        </select>
                                    </div>   
                                    
                                    <div class="form-group col-md-12">
                                        <label for="">Class</label>
                                        <select name="" id="" class="form-control">
                                          <option value="">Select class</option>
                                          <option value="Form4">FORM-4</option>
                                          <option value="Form2">FORM-2</option>
                                        </select>
                                    </div>   

                                    <div class="form-group col-md-12">
                                        <button class="btn btn-info float-right" id=''> Save</button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <h2>Subject & Class</h2>
                          <table id="example1" class="table table-bordered table-striped ">
                              <thead>
                                  
                              <tr>
                                  <th>#</th>
                                  <th>Subject name</th>
                                  <th>CLass name</th>
                                  <th>Actions</th>
                              </tr>
                              </thead>
                              <tbody id=''>
                                  <tr>
                                    <td>1</td>
                                    <td>Chemistry</td>
                                    <td>Form3</td>
                                    <td>
                                      <div class='btn-group btn-group-sm' role='group' aria-label='Basic example'>
                                        <button type='button' class='btn btn-info' data-toggle='modal' data-target='#VeiwOrder'  data-toggle='tooltip' data-placement='top' title='View student information' id='btnviewOrder' data-id='$id'><i class='fa fa-list'></i></button>
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
    $(document).ready(()=>{
        $(document).on('click','#search-attendance', ()=>{
            $('#attendance-information').css('display','block')
        })
    });
</script>