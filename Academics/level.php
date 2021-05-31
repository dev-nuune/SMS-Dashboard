<?php include('../path.php'); ?>
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
                                  <tr>
                                    <td>1</td>
                                    <td>Hoose</td>
                                    <td>Dugsi Hoose</td>
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

        })
      })
    </script>