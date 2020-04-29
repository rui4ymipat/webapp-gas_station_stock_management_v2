<!DOCTYPE html>
<html lang="en">

<head>
  <?php

  require_once "connect.php";
  $userQuery = "SELECT * from user";
  $result = mysqli_query($connect, $userQuery);

  while ($row = mysqli_fetch_assoc($result)) {
    $id[] = $row['id'];
    $Fname[] = $row['Fname'];
    $Lname[] = $row['Lname'];
    $username[] = $row['username'];
    $level[] = $row['level'];
  }
  ?>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Prompt:ital,wght@0,100;0,200;0,300;1,100;1,200;1,300&display=swap');

    .setfont1,
    .menu_section,
    .profile_info,
    .site_title {
      font-family: 'Prompt', sans-serif;
    }

    @media only screen and (max-width: 1366px) {
      .row1 {
        width: 100%;
      }
    }

    @media only screen and (max-width: 1024px) {
      .row1 {
        width: 100%;
      }

    }

    @media only screen and (min-width: 1367px) {
      .row1 {
        width: 100%;
      }

    }

    form .showdetail {
      font-weight: 600;
      padding-bottom: 5px;
      margin-bottom: 10px;
      border-bottom: 0.5px solid rgb(202, 206, 215);
      font-size: 165%;
      color: #2B3E54;
    }

    .column1,
    .column2 {
      display: inline-block;
    }

    input[type="text"] {
      border: 1px solid rgb(202, 206, 215);
      margin-right: 15px;
      width: 100%;
      height: 35px;
      text-align: center;
      margin-bottom: 10px;
      margin-top: 4%;
      border-radius: 5px;
    }

    input[type="submit"] {
      margin-left: 44%;
      margin-top: 3.5px;
      border-radius: 5px;
    }

    .setborder {
      border: 1px solid rgb(202, 206, 215);
      padding: 20px 20px 20px 20px;
      border-radius: 5px;
    }

    .account tr.detail {
      font-size: 60%;
    }



    td.name {
      font-size: 140%;
      padding-right: 20px;
      padding-top: 1%;

    }
  </style>
  <?php
  session_start();

  if (empty($_SESSION['user_level'])) {
    $_SESSION['error'] = "Username หรือ Password ผิด";
    header("Location:login.php");
  }

  ?>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php
  if (!empty($_SESSION['msg'])) {
    session_start();
  ?>
    <script type="text/javascript">
      alert('<?php echo $_SESSION['msg'] ?>');
    </script>
  <?php
    unset($_SESSION['error']);
  }


  ?>
  <title>ระบบจัดการสต็อกน้ำมัน</title>

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

<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;">
            <a href="index.php" class="site_title"><i class="fa fa-book"></i> <span>หจก.บ้านท่าบริการ</span></a>
          </div>

          <div class="clearfix"></div>

          <!-- menu profile quick info -->
          <div class="profile clearfix">
            <div class="profile_pic">
              <img src="images/user.png" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
              <span>ยินดีต้อนรับ</span>
              <h2>
                <?php
                session_start();
                echo $_SESSION['user_name'];
                ?>
              </h2>
            </div>
          </div>
          <!-- /menu profile quick info -->

          <br />

          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
              <h3>เมนู</h3>
              <ul class="nav side-menu">
                <li><a href="index.php"><i class="fa fa-home"></i> หน้าแรก</a></li>
                <?php if ($_SESSION['user_level'] == 2) { ?>
                  <li><a href="#"><i class="fa fa-money"></i> ราคาน้ำมัน</a></li>
                  <li><a href="#"><i class="fa fa-bar-chart"></i> ต้นทุน</a></li>
                  <li><a href="#"><i class="fa fa-history"></i> ประวัติการสั่งซื้อ</a></li>
                  <li><a href="informationGasCar.php"><i class="fa fa-truck"></i> ข้อมูลรถน้ำมัน</a></li>
                  <li><a href="stockFuel.php"><i class="fa fa-cube"></i> สต็อกน้ำมัน</a></li>
                  <li><a href="management.php"><i class="fa fa-users"></i> จัดการบัญชีผู้ใช้</a></li>
                  <li><a href="logout.php"><i class="fa fa-sign-out"> </i>Log Out</a></li>
                <?php } else { ?>
                  <li><a href="informationGasCar.php"><i class="fa fa-truck"></i> ข้อมูลรถน้ำมัน</a></li>
                  <li><a href="stockFuel.php"><i class="fa fa-cube"></i> สต็อกน้ำมัน</a></li>
                  <li><a href="logout.php"><i class="fa fa-sign-out"> </i>Log Out</a></li>
                <?php } ?>
              </ul>
            </div>


          </div>
          <!-- /sidebar menu -->


        </div>
      </div>



      <!-- page content -->
      <div class="right_col" role="main" style="background-color: white;">
        <!-- top tiles -->
        <div class="row" style="display: inline-block;">
          <div class="tile_count">


          </div>
        </div>
        <!-- /top tiles -->
        <div class="nav toggle">
          <a id="menu_toggle"><i class="fa fa-bars"></i></a>
        </div>
        <div class="row">
          <div class="col-md-12 col-sm-12 ">
            <div class="dashboard_graph">

              <div class="row x_title">

                <div class="col-md-6">

                </div>
              </div>
              <div class="row1">
                <div class="setborder">
                  <form action="addUser.php" method="POST">
                    <h1 style="font-weight: 800;color: #2B3E54;font-size: 200%;">จัดการบัญชีผู้ใช้</h1>
                    <div class="showdetail">เพิ่มบัญชีผู้ใช้</div>
                    <table>
                      <tr>
                        <td class="name">ID </td>
                        <td><input type="text" name="id" placeholder="ID"></td>
                        <td class="name">Password </td>
                        <td><input type="text" name="pass" placeholder="Password"></td>
                      </tr>
                      <tr>
                        <td class="name">ชื่อ</td>
                        <td><input type="text" name="Fname" placeholder="ชื่อจริง"></td>
                        <td class="name">นามสกุล</td>
                        <td><input type="text" name="Lname" placeholder="นามสกุล"></td>
                      </tr>
                    </table>
                    <input type="submit" class="btn btn-success" value="Submit">
                  </form>
                </div>
              </div>
              <div class="row2">

                <div class="x_panel">
                  <div class="x_title">
                    <h2>123 table <small>Stripped table subtitle</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="#">Settings 1</a>
                          <a class="dropdown-item" href="#">Settings 2</a>
                        </div>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_panel">
                    <div class="x_title">
                      <h2>บัญชีผู้ใช่ <small>จัดการบัญชีผู้ใช้</small></h2>
                      <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Settings 1</a>
                            <a class="dropdown-item" href="#">Settings 2</a>
                          </div>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                      </ul>
                      <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>ชื่อ</th>
                            <th>นามสกุล</th>
                            <th rowspan="3">จัดการบัญชี</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php for ($i = 0; $i < count($id); $i++) { ?>
                            <tr>
                              <td><?php echo $Fname[$i]; ?></td>
                              <td><?php echo $Lname[$i]; ?></td>
                              <td><button class="btn btn-round btn-danger"><a href="delete_user.php?id=<?php echo $id[$i]; ?>">ลบบัญชี</a></button></td>
                              <td><button class="btn btn-round btn-info"><a href="change_user.php?id=<?php echo $id[$i]; ?>">แก้ไขบัญชี</a></button></td>
                              <?php
                              if ($level[$i] == 1) {
                              ?>
                                <td><button class="btn btn-round btn-success"><a href="add_admin.php?id=<?php echo $id[$i]; ?>">เพิ่มสิทธิ์แอดมิน</a></button></td>
                              <?php
                              } else {
                              ?>
                                <td><button class="btn btn-round btn-success"><a href="drop_admin.php?id=<?php echo $id[$i]; ?>">ลดสิทธิ์แอดมิน</a></button></td>
                              <?php
                              }
                              ?>
                            </tr>
                          <?php } ?>
                        </tbody>
                      </table>

                    </div>
                  </div>

                </div>
              </div>








              <div class="clearfix"></div>


            </div>
          </div>

          <!-- jQuery -->
          <script src="../vendors/jquery/dist/jquery.min.js"></script>
          <!-- Bootstrap -->
          <script src="../vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
          <!-- FastClick -->
          <script src="../vendors/fastclick/lib/fastclick.js"></script>
          <!-- NProgress -->
          <script src="../vendors/nprogress/nprogress.js"></script>
          <!-- Chart.js -->
          <script src="../vendors/Chart.js/dist/Chart.min.js"></script>
          <!-- gauge.js -->
          <script src="../vendors/gauge.js/dist/gauge.min.js"></script>
          <!-- bootstrap-progressbar -->
          <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
          <!-- iCheck -->
          <script src="../vendors/iCheck/icheck.min.js"></script>
          <!-- Skycons -->
          <script src="../vendors/skycons/skycons.js"></script>
          <!-- Flot -->
          <script src="../vendors/Flot/jquery.flot.js"></script>
          <script src="../vendors/Flot/jquery.flot.pie.js"></script>
          <script src="../vendors/Flot/jquery.flot.time.js"></script>
          <script src="../vendors/Flot/jquery.flot.stack.js"></script>
          <script src="../vendors/Flot/jquery.flot.resize.js"></script>
          <!-- Flot plugins -->
          <script src="../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
          <script src="../vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
          <script src="../vendors/flot.curvedlines/curvedLines.js"></script>
          <!-- DateJS -->
          <script src="../vendors/DateJS/build/date.js"></script>
          <!-- JQVMap -->
          <script src="../vendors/jqvmap/dist/jquery.vmap.js"></script>
          <script src="../vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
          <script src="../vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
          <!-- bootstrap-daterangepicker -->
          <script src="../vendors/moment/min/moment.min.js"></script>
          <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

          <!-- Custom Theme Scripts -->
          <script src="../build/js/custom.min.js"></script>

</body>

</html>