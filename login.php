<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"><!-- End Required meta tags -->
    <!-- Begin SEO tag -->
    <title> Sign In | School System </title>
    <meta property="og:title" content="Sign In">
    <meta name="author" content="Beni Arisandi">
    <meta property="og:locale" content="en_US">
    <meta name="description" content="Responsive admin theme build on top of Bootstrap 4">
    <meta property="og:description" content="Responsive admin theme build on top of Bootstrap 4">
    <link rel="canonical" href="index.html">
    <meta property="og:url" content="index.html">
    <meta property="og:site_name" content="Looper - Bootstrap 4 Admin Theme">
    <script type="application/ld+json">
     
    </script><!-- End SEO tag -->
    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="144x144" href="assets/images/logo/logo-icon.png">
    <link rel="shortcut icon" href="assets/favicon.ico">
    <meta name="theme-color" content="#3063A0"><!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500,600" rel="stylesheet"><!-- End Google font -->
    <!-- BEGIN PLUGINS STYLES -->
    <link rel="stylesheet" href="assets/vendor/%40fortawesome/fontawesome-free/css/all.min.css"><!-- END PLUGINS STYLES -->
    <!-- BEGIN THEME STYLES -->
    <link rel="stylesheet" href="assets/stylesheets/theme.min.css" data-skin="default">
    <link rel="stylesheet" href="assets/stylesheets/theme-dark.min.css" data-skin="dark">
    <link rel="stylesheet" href="assets/stylesheets/custom.css">
    <script>
      var skin = localStorage.getItem('skin') || 'default';
      var disabledSkinStylesheet = document.querySelector('link[data-skin]:not([data-skin="' + skin + '"])');
      // Disable unused skin immediately
      disabledSkinStylesheet.setAttribute('rel', '');
      disabledSkinStylesheet.setAttribute('disabled', true);
      // add loading class to html immediately
      document.querySelector('html').classList.add('loading');
    </script><!-- END THEME STYLES -->
      <style>
        .hide{
          display: none;
        }
      </style>
  </head>
  <body>
    <!--[if lt IE 10]>
    <div class="page-message" role="alert">You are using an <strong>outdated</strong> browser. Please <a class="alert-link" href="http://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</div>
    <![endif]-->
    <!-- .auth -->
    <main class="auth">
      <header id="auth-header" class="auth-header" style="background-image: url(assets/images/illustration/img-1.png);">
        <h1>
          <img src="assets/images/logo/logo-white.png" alt="" height='80'>
           <span class="sr-only">Sign In</span>
        </h1>
<br>
        
      </header><!-- form -->
      <form class="auth-form" method='post' id='frmLogin' action='Dashboard/'>
        <!-- .form-group -->
        <div class="alert alert-warning alert-dismissible fade show" id='alertContainer' role="alert" style='display:none;'>
          <strong id='msg' class=''></strong>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="form-group">
          <div class="form-label-group">
            <input type="text" id="email" name='email' class="form-control" placeholder="Username" autofocus="" autocomplete="off"> <label for="inputUser">Username</label>
          </div>
        </div><!-- /.form-group -->
        <!-- .form-group -->
        <div class="form-group">
          <div class="form-label-group">
            <input type="password" id="password" name="password" class="form-control" placeholder="Password"> <label for="inputPassword">Password</label>
          </div>
        </div><!-- /.form-group -->
        <!-- .form-group -->
        <div class="form-group">
          <button class="btn btn-lg btn-primary btn-block" type="submit" id='btnLogin' ><i class='fa fa-spinner fa-spin hide' id='spinner' ></i> Sign In</button>
        </div><!-- /.form-group -->
       
        <!-- recovery links -->
        <div class="text-center pt-3">
          <a href="auth-recovery-username.html" class="link">Forgot Username?</a> <span class="mx-2">·</span> <a href="auth-recovery-password.html" class="link">Forgot Password?</a>
        </div><!-- /recovery links -->
      </form><!-- /.auth-form -->
      <!-- copyright -->
      <footer class="auth-footer"> © <?= date('Y') ?> All Rights Reserved. Developed by <a href="#">Somware Tech</a>
      </footer>
    </main><!-- /.auth -->
    <!-- BEGIN BASE JS -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/popper.js/umd/popper.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script> <!-- END BASE JS -->
    <!-- BEGIN PLUGINS JS -->
    <script src="assets/vendor/particles.js/particles.js"></script>
    <script>
      /**
       * Keep in mind that your scripts may not always be executed after the theme is completely ready,
       * you might need to observe the `theme:load` event to make sure your scripts are executed after the theme is ready.
       */
      $(document).on('theme:init', () =>
      {
        /* particlesJS.load(@dom-id, @path-json, @callback (optional)); */
        particlesJS.load('auth-header', 'assets/javascript/pages/particles.json');
      })
    </script> <!-- END PLUGINS JS -->
    <!-- BEGIN THEME JS -->
    <script src="assets/javascript/theme.js"></script> <!-- END THEME JS -->
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
  </body>

</html>

<script>
  $('document').ready(function(){
    /*
    //Forgot 
    $('#forgotPassword').on('click', function(){
      $('#loginBody').css('display','none')
      $('#Forgot').css('display','block')
    })

    $('#btnBack').on('click', function(){
      $('#loginBody').css('display','block')
      $('#Forgot').css('display','none')
    })

    //Login
    $('#btnLogin').on('click', function(){
      var email = $('#email').val();
      var pwd = $('#password').val();
      if(email == ''){
        $('#msg').html('Email address is required')
        $('#alertContainer').css('display','block')
        setTimeout(function(){ 
          $('#alertContainer').css('display','none')
         }, 3500)
      }else if(pwd == ''){
        $('#msg').html('Password is required')
        $('#alertContainer').css('display','block')
        setTimeout(function(){ 
          $('#alertContainer').css('display','none')
         }, 3500)
      }else{
        $('#spinner').removeClass('hide')
        $('#btnLogin').attr('disabled', true)

        $.ajax({
            url:'data/login.php',
            type:'post',
            data:$('#frmLogin').serialize(),
            success: function(msg){
              if(msg == 'success'){
                $('#spinner').addClass('hide')
                $('#btnLogin').attr('disabled', false)
                window.location = 'sell.php'
              }else{
                $('#msg').html('Invalid email address or password ')
                $('#alertContainer').css('display','block')
                $('#spinner').addClass('hide')
                $('#btnLogin').attr('disabled', false)
              }
            }
          });
      }
    })
  })*/
</script>
