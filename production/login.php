<!DOCTYPE html>
<html lang="en">
  <head>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Prompt:ital,wght@0,100;0,200;0,300;1,100;1,200;1,300&display=swap');

    .setfont1,
    .menu_section,
    .profile_info,
    .site_title ,
    {
      font-family: 'Prompt', sans-serif;
    }
  </style>
  <?php session_start(); ?>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login</title>
      <!-- Bootstrap -->
  <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- NProgress -->
  <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
  <!-- iCheck -->
  <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">

  <!-- bootstrap-progressbar -->
  <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
  <!-- JQVMap -->
  <link href="../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet" />
  <!-- bootstrap-daterangepicker -->
  <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

  <!-- Custom Theme Style -->
  <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  
  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
            <form action="login-pro.php" method="POST" >
              <h1>หจก.บ้านท่าบริการ </h1>
              <?php 
              if(!empty($_SESSION['error']))
              {
                ?>
                <h6 style="color: red"><?php echo $_SESSION['error'] ?></h6>
                <br>
                <?php
                session_unset();
                session_destroy();
              } 
              ?>
              <div>
                <input type="text" class="form-control" placeholder="Username"  name="id" >
              </div>
              <div>
                <input type="password"  class="form-control" placeholder="Password"  name="password">
              </div>
              <div>
                <button type="submit" class="btn btn-success">Login</button>
              </div>


            </form>

        </div>
  </body>
</html>
