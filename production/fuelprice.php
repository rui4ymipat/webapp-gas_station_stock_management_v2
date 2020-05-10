<!DOCTYPE html>
<html lang="en">

<head>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Prompt:ital,wght@0,100;0,200;0,300;1,100;1,200;1,300&display=swap');

    .setfont1,
    .menu_section,
    .profile_info,
    .site_title {
      font-family: 'Prompt', sans-serif;
    }

    @media only screen and (max-width: 1366px) {
      .column1 {
        width: 100%;
      }

      .set_col1 {
        width: 40%;
      }

      .set_col2 {
        width: 58%;
        margin-left: 5px;
      }
    }

    @media only screen and (max-width: 1024px) {
      .column1 {
        width: 100%;
      }

      .set_col1 {
        width: 40%;
      }

      .set_col2 {
        width: 58%;
        margin-left: 5px;
      }
    }

    @media only screen and (min-width: 1367px) {
      .column1 {
        width: 100%;
      }

      .set_col1 {
        width: 40%;
      }

      .set_col2 {
        width: 58%;
        margin-left: 5px;
      }

      .set_col2 table tr.setheader th {
        width: 10%
      }

      .set_col1 table tr.setheader th {
        width: 10%
      }

      .set_col1 table tr.setl th {
        width: 10%
      }

      .set_col1 table tr td {
        height: 25px;
      }

      .set_col2 table tr td {
        height: 25px;
      }
    }

    .set_col1,
    .set_col2 {
      display: inline-block;
    }

    form .showdetail {
      font-weight: 600;
      padding-bottom: 5px;
      margin-bottom: 10px;
      border-bottom: 0.5px solid rgb(202, 206, 215);
      font-size: 130%;
      color: #2B3E54;
    }

    .column1,
    .column2 {
      display: block;
    }

    .set_line {
      display: inline-block;
      width: 33%;
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
      font-size: 120%;
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
                  <li><a href="fuelprice.php"><i class="fa fa-money"></i> ราคาน้ำมัน</a></li>
                  <li><a href="history.php"><i class="fa fa-history"></i> ประวัติการสั่งซื้อ</a></li>
                  <li><a href="cost.php"><i class="fa fa-bar-chart"></i> ต้นทุน</a></li>
                  <li><a href="informationGasCar.php"><i class="fa fa-truck"></i> ข้อมูลรถน้ำมัน</a></li>
                  <li><a href="stockFuel.php"><i class="fa fa-cube"></i> สต็อกน้ำมัน</a></li>
                  <li><a href="management.php"><i class="fa fa-users"></i> จัดการบัญชีผู้ใช้</a></li>
                  <li><a href="logout.php"><i class="fa fa-sign-out"> </i>Log Out</a></li>
                <?php } else if ($_SESSION['user_level'] == 3) { ?>
                  <li><a href="fuelprice.php"><i class="fa fa-money"></i> ราคาน้ำมัน</a></li>
                  <li><a href="history.php"><i class="fa fa-history"></i> ประวัติการสั่งซื้อ</a></li>
                  <li><a href="cost.php"><i class="fa fa-bar-chart"></i> ต้นทุน</a></li>
                  <li><a href="informationGasCar.php"><i class="fa fa-truck"></i> ข้อมูลรถน้ำมัน</a></li>
                  <li><a href="stockFuel.php"><i class="fa fa-cube"></i> สต็อกน้ำมัน</a></li>
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

              <div class="setfont1">
                <div class="column1">
                  <h1 style="font-weight: 800;color: #2B3E54;font-size: 180%;">กรอกข้อมูลประจำวัน</h1>
                  <div class="setborder">

                    <?php
                    if (!empty($_SESSION['msg'])) {
                      session_start();
                    ?>
                      <script type="text/javascript">
                        alert('<?php echo $_SESSION['msg'] ?>');
                      </script>
                    <?php
                      unset($_SESSION['msg']);
                    }
                    ?>
                    <form action="add-pricegas.php">
                      <div class="set_line">
                        <div class="showdetail">ข้อมูลราคา บัญชี 1</div>
                        <table class="account">

                          <tr>
                            <td class="name">G91</td>
                            <td><input type="text" name="91p_a1" placeholder="ราคา"></td>
                            <td><input type="text" name="91d_a1" placeholder="ส่วนลด" style="margin-left: 15px"></td>
                          </tr>

                          <tr>
                            <td class="name">G95</td>
                            <td><input type="text" name="95p_a1" placeholder="ราคา"></td>
                            <td><input type="text" name="95d_a1" placeholder="ส่วนลด" style="margin-left: 15px"></td>
                          </tr>

                          <tr>
                            <td class="name">Diesel</td>
                            <td><input type="text" name="Dep_a1" placeholder="ราคา"></td>
                            <td><input type="text" name="Ded_a1" placeholder="ส่วนลด" style="margin-left: 15px"></td>
                          </tr>
                        </table>

                      </div>
                      <div class="set_line">
                        <div class="showdetail">ข้อมูลราคา บัญชี 2</div>
                        <table class="account">

                          <tr>
                            <td class="name">G91</td>
                            <td><input type="text" name="91p_a2" placeholder="ราคา"></td>
                            <td><input type="text" name="91d_a2" placeholder="ส่วนลด" style="margin-left: 15px"></td>
                          </tr>

                          <tr>
                            <td class="name">G95</td>
                            <td><input type="text" name="95p_a2" placeholder="ราคา"></td>
                            <td><input type="text" name="95d_a2" placeholder="ส่วนลด" style="margin-left: 15px"></td>
                          </tr>

                          <tr>
                            <td class="name">Diesel</td>
                            <td><input type="text" name="Dep_a2" placeholder="ราคา"></td>
                            <td><input type="text" name="Ded_a2" placeholder="ส่วนลด" style="margin-left: 15px"></td>
                          </tr>
                        </table>

                      </div>
                      <div class="set_line">
                        <div class="showdetail">ข้อมูลราคา บัญชี 3</div>
                        <table class="account">

                          <tr>
                            <td class="name">G91</td>
                            <td><input type="text" name="91p_a3" placeholder="ราคา"></td>
                            <td><input type="text" name="91d_a3" placeholder="ส่วนลด" style="margin-left: 15px"></td>
                          </tr>
                          <tr>
                            <td class="name">G95</td>
                            <td><input type="text" name="95p_a3" placeholder="ราคา"></td>
                            <td><input type="text" name="95d_a3" placeholder="ส่วนลด" style="margin-left: 15px"></td>
                          </tr>

                          <tr>
                            <td class="name">Diesel</td>
                            <td><input type="text" name="Dep_a3" placeholder="ราคา"></td>
                            <td><input type="text" name="Ded_a3" placeholder="ส่วนลด" style="margin-left: 15px"></td>
                          </tr>
                        </table>
                      </div>

                      <input type="submit" class="btn btn-success" value="Submit">
                    </form>
                  </div>
                </div>
                <br>
                <h1 style="font-weight: 800;color: #2B3E54;font-size: 180%;">ตารางค่ากลาง</h1>
                <div class="column2">
                  <div class="set_col1">
                    <table border="1" style="text-align: center;">
                      <tr class="setheader">
                        <th rowspan="2" style="height: 60px;">ว/ด/ป</th>
                        <th rowspan="2">ชนิด</th>
                        <th colspan="3" style="width: 24%;">กทม.</th>
                        <th rowspan="2">ราคาหน้าปั้ม</th>
                      </tr>
                      <tr class="setl">
                        <th>ราคา</th>
                        <th>ปรับราคา</th>
                        <th>เท่ากับ</th>
                      </tr>
                      <tr>
                        <td>1</td>
                        <td>2</td>
                        <td>3</td>
                        <td>4</td>
                        <td>5</td>
                        <td>6</td>
                      </tr>
                    </table>
                  </div>
                  <div class="set_col2">
                    <table border="1" style="text-align: center;">
                      <tr class="setheader">
                        <th colspan="3" style="height: 30px;">บัญชี 1</th>
                        <th colspan="3">บัญชี 2</th>
                        <th colspan="3">บัญชี 3</th>
                      </tr>
                      <tr>
                        <th style="height: 30px;">ราคา</th>
                        <th>ส่วนลด</th>
                        <th>เท่ากับ</th>
                        <th>ราคา</th>
                        <th>ส่วนลด</th>
                        <th>เท่ากับ</th>
                        <th>ราคา</th>
                        <th>ส่วนลด</th>
                        <th>เท่ากับ</th>
                      </tr>
                      <tr>
                        <td>1</td>
                        <td>2</td>
                        <td>3</td>
                        <td>4</td>
                        <td>5</td>
                        <td>6</td>
                        <td>7</td>
                        <td>8</td>
                        <td>9</td>
                      </tr>
                    </table>
                  </div>
                </div>
              </div>



              <!-- /page content -->

              <!-- footer content -->


              <div class="clearfix"></div>

              <!-- /footer content -->
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