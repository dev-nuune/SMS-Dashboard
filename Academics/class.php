<?php include('../path.php'); ?>

<?php include(ROOT_PATH. '/includes/functions.php'); ?>
<?php $title = "Classes"; include_once(ROOT_PATH. '/includes/layouts/header.php'); ?>
      <!-- .app-header -->
        <?php include_once(ROOT_PATH. '/includes/layouts/nav.php'); ?>
      <!-- .app-aside -->
        <?php include_once(ROOT_PATH. '/includes/layouts/sidebar.php');?>
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
                            <div class="card-header bg-info text-light"> Add new Class </div>
                            <div class="card-body">
                              <form action="" method="POST">
                                <div class="row">
                                  
                                    <div class="form-group col-md-12">
                                        <label for="">Class name</label>
                                        <input type="text" name="class_name" id="" class="form-control" placeholder='Class One'>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="">Description</label>
                                        <input type="text" name="description" id="" class="form-control" placeholder='....'>
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label for="">Level</label>
                                        <select name="level_name" id="select2-single" class='form-control' data-toggle="select2" data-placeholder="Select a class" data-allow-clear="true">
                                          <option value="">Select subject</option>
                                          <?php $sql = "SELECT * FROM levels"; 
                                            $records = getAllRecord($sql);
                                            foreach ($records as $record) { ?>
                                            <option value="<?php echo $record['id']; ?>"><?php echo $record['name']; ?></option>
                                          <?php } ?>
                                        </select>
                                    </div>

                                    <div class="form-group col-md-12">
                                        <button class="btn btn-info float-right" id=''> Save class</button>
                                    </div>
                                </div>
                              </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <h2>Classes</h2>
                          <table id="example1" class="table table-bordered table-striped ">
                              <thead>
                                  
                              <tr>
                                  <th>#</th>
                                  <th>Class name</th>
                                  <th>Description</th>
                                  <th>Level</th>
                                 
                                  <th>Actions</th>
                              </tr>
                              </thead>
                              <tbody id=''>
                                <?php 
                                  $sql = "SELECT * FROM class";
                                  $records = getAllRecord($sql);
                                  foreach ($records as $inc => $record) { ?>
                                  <tr>
                                    <td><?php echo $inc+1 ; ?></td>
                                    <td><?php echo $record['name']; ?></td>
                                    <td><?php echo $record['description']; ?></td>
                                    <td><?php echo $record['lvl_id']; ?></td>
                                    <td>
                                      <div class='btn-group btn-group-sm' role='group' aria-label='Basic example'>
                                        <button type='button' class='btn btn-info' data-toggle='modal' data-target='#VeiwOrder'  data-toggle='tooltip' data-placement='top' title='View student information' id='btnviewOrder' data-id='$id'><i class='fa fa-list'></i></button>
                                        <button type='button' class='btn btn-danger' id='deleteOrder' data-id='$id'  data-toggle='tooltip' data-placement='top' title='Delete'> <i class='fa fa-trash'></i> </button>
                                      </div>
                                    </td>
                                  </tr>
                                  <?php } ?>
                              </tbody>
                
                          </table>

                          <div id="table"></div>
                        </div>
                      </div>
                    </div>
                </div>
       
              </div><!-- /.page-section -->
            </div><!-- /.page-inner -->
          </div><!-- /.page -->
        </div><!-- .app-footer -->
        <footer class="app-footer">
          <?php include(ROOT_PATH. '/includes/layouts/footer.php'); ?>
        </footer><!-- /.app-footer -->
        <!-- /.wrapper -->
      </main><!-- /.app-main -->
    </div><!-- /.app -->
 

<?php include(ROOT_PATH . '/includes/layouts/footer-js.php'); ?>

<script>
    $(document).ready(()=>{
      var DOMAIN = <?php echo dirname(__FILE__); ?>
        $(document).on('click','#search-attendance', ()=>{
            $('#attendance-information').css('display','block')
        });

        // $("#table").load('display.php');

    });
</script>