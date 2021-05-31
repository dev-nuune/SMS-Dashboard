<?php include('../path.php'); ?>
<?php $title = "Shift"; include_once(ROOT_PATH. 'includes/layouts/header.php'); ?>
      <!-- .app-header -->
        <?php include_once(ROOT_PATH. 'includes/layouts/nav.php'); ?>
      <!-- .app-aside -->
        <?php include_once(ROOT_PATH. 'includes/layouts/sidebar.php');?>
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
                            <div class="card-header bg-info text-light"> Add new shift </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <label for="">Shift name</label>
                                        <input type="text" name="" id="" class="form-control">
                                    </div>   
                                    
                                    <div class="form-group col-md-12">
                                        <label for="">Description</label>
                                        <input type="date" name="" id="" class="form-control">
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
                            <h2>Shift</h2>
                          <table id="example1" class="table table-bordered table-striped ">
                              <thead>
                                  
                              <tr>
                                  <th>#</th>
                                  <th>Shift name</th>
                                  <th>Description</th>
                                  <th>Actions</th>
                              </tr>
                              </thead>
                              <tbody id=''>
                                  <tr>
                                    <td>1</td>
                                    <td>Morning</td>
                                    <td>Morning shift</td>
                                    <td>
                                      <div class='btn-group btn-group-sm' role='group' aria-label='Basic example'>
                                        <button type='button' class='btn btn-info' data-toggle='modal' data-target='#VeiwOrder'  data-toggle='tooltip' data-placement='top' title='View student information' id='btnviewOrder' data-id='$id'><i class='fa fa-list'><i></button>
                                        <button type='button' class='btn btn-danger' id='deleteOrder' data-id='$id'  data-toggle='tooltip' data-placement='top' title='Delete'> <i class='fa fa-trash'><i> </button>
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
          <?php include(ROOT_PATH . 'includes/layouts/footer.php'); ?>
        </footer><!-- /.app-footer -->
        <!-- /.wrapper -->
      </main><!-- /.app-main -->
    </div><!-- /.app -->

 <?php include(ROOT_PATH . 'includes/layouts/footer-js.php'); ?>
 
<script>
    $(document).ready(()=>{
        $(document).on('click','#search-attendance', ()=>{
            $('#attendance-information').css('display','block')
        })
    });
</script>