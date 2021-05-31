<?php include('../path.php'); ?>
<?php include(ROOT_PATH . 'includes/functions.php'); ?>
<?php $title = "Level"; include_once(ROOT_PATH. 'includes/layouts/header.php'); ?>
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
                    <?php
                      if(isset($_GET['id'])):
                    ?>
                    <form id="edit_level_form">
                        <div class="card">
                            <div class="card-header bg-info text-light"> Edit Level</div>
                            <div class="card-body">
                              <span id="msg"></span>
                                <div class="row">
                                <?php $id = $_GET['id']; 
                                  $sql = "SELECT * FROM levels WHERE id = " . $id;
                                  $resultQuery = mysqli_query($con, $sql);
                                  $count = mysqli_num_rows($resultQuery);
                                  if( $count > 0 ):
                                      $levelRecord = mysqli_fetch_assoc($resultQuery);
                                ?>
                                  <div class="form-group col-md-12">
                                        <input type="text" name="level_id" id="level_id" class="form-control" placeholder='1' value="<?php echo $levelRecord['id']; ?>">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="">level name</label>
                                        <input type="text" name="level_name" id="level_name" class="form-control" placeholder='Class One' value="<?php echo $levelRecord['name']; ?>">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="">Description</label>
                                        <input type="text" name="description" id="description" class="form-control" placeholder='....' value="<?php echo $levelRecord['description']; ?>">
                                    </div>                                   
                                    <div class="form-group col-md-12">
                                        <button type="submit" name="edit_level" class="btn btn-info float-right" id='edit_level'> Update</button>
                                    </div>
                                <?php else: header('Location: ../index.php'); endif; ?>
                                </div>
                            </div>
                        </div>
                    </form>
                  <?php else: ?>
                    <form id="save_level_form">
                        <div class="card">
                            <div class="card-header bg-info text-light"> Add new level </div>
                            <div class="card-body">
                              <span id="msg"></span>
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <label for="">level name</label>
                                        <input type="text" name="level_name" id="level_name" class="form-control" placeholder='Class One'>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="">Description</label>
                                        <input type="text" name="description" id="description" class="form-control" placeholder='....'>
                                    </div>                                   
                                    <div class="form-group col-md-12">
                                        <button type="submit" name="save_level" class="btn btn-info float-right" id='save_level'> Save level</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                  <?php endif; ?>
                    </div>
                    <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <h2>levels</h2>
                          <table id="example1" class="table table-bordered table-striped ">
                              <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Level name</th>
                                    <th>Description</th>                                
                                    <th>Actions</th>
                                </tr>
                              </thead>
                              <tbody id='load_level_table'>
                              <?php
                                $sql = "SELECT * FROM levels";
                                $record = getAllRecord($sql); 
                              foreach($record as $key => $recordLevel): ?>
                                  <tr>
                                    <td><?php echo $key + 1; ?></td>
                                    <td><?php echo $recordLevel['name']; ?></td>
                                    <td><?php echo $recordLevel['description']; ?></td>
                                    <td>
                                      <div class='btn-group btn-group-sm' role='group'>
                                        <a href="level.php?id=<?php echo $recordLevel['id']; ?>" class='btn btn-secondary'><i class='fa fa-edit'></i></a>
                                        <button type='button' class='btn btn-danger' id='deleteOrder' data-id='$id'  data-toggle='tooltip' data-placement='top' title='Delete'> <i class='fa fa-trash'></i> </button>
                                      </div>
                                    </td>
                                  </tr>
                                <?php endforeach; ?>
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
      $(document).ready(function(){

        var DOMAIN = "http://localhost/sms-dashboard/";


        // Preventform Submittion
        $('#save_level_form').submit(function(e){
          event.preventDefault();
          var level_name = $('#level_name').val();
          var description = $('#description').val();

          if( level_name == "" || description == "" ){
            $('#msg').fadeIn().html('<div class="alert alert-warning"> <a href="" class="close" data-dismiss="alert" aria-label="close">&times;</a> All fields are required. please fill it. </div>');
            // alert('All fields are required. please fill it.');
            setTimeout(() => {
              $('#msg').fadeOut();
            }, 4000);
          }else{

            $.ajax({
              url: DOMAIN + "/includes/insert.php?action=insert",
              method: "POST",
              data: $(this).serialize(),
              success: function(data){
                $('#msg').fadeIn().html(data);
                // console.log(data);
                setTimeout(() => {
                  $('#msg').fadeOut();
                }, 4000);
              }
            });

            // alert(level_name);
            // alert(description);
          }
        });

        $('#edit_level_form').submit(function(e){
          event.preventDefault();
          var level_name = $('#level_name').val();
          var description = $('#description').val();

          if( level_name == "" || description == "" ){
            $('#msg').fadeIn().html('<div class="alert alert-warning"> <a href="" class="close" data-dismiss="alert" aria-label="close">&times;</a> All fields are required. please fill it. </div>');
            // alert('All fields are required. please fill it.');
            setTimeout(() => {
              $('#msg').fadeOut();
            }, 4000);
          }else{

            $.ajax({
              url: DOMAIN + "/includes/insert.php?action=update",
              method: "POST",
              data: $(this).serialize(),
              success: function(data){
                $('#msg').fadeIn().html(data);
                // console.log(data);
                setTimeout(() => {
                  $('#msg').fadeOut();
                }, 4000);
              }
            });

            // alert(level_name);
            // alert(description);
          }
        });
      });

      $('#btnEditLevel').click(function(){
        alert('Make Edit.');
      })
    </script>