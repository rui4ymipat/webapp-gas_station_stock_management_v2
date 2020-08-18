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
      .setborder {
        width: 55%;
      }

      select.from-control {
        width: 130px;
      }
    }

    @media only screen and (max-width: 1024px) {
      .setborder {
        width: 55%;
      }

      select.from-control {
        width: 130px;
      }
    }

    @media only screen and (min-width: 1367px) {
      div.c1 table tr.setheader th {
        width: 7.5%;
      }

      .setborder {
        width: 20%;
      }
    }

    form .showdetail {
      font-size: 130%;
      color: #2B3E54;
      font-weight: 600;
      padding-bottom: 5px;
      margin-bottom: 10px;
      border-bottom: 0.5px solid rgb(202, 206, 215);
    }

    input[type="text"] {
      border: 1px solid rgb(202, 206, 215);
      margin-right: 15px;
      width: 70%;
      height: 35px;
      text-align: center;
      margin-bottom: 10px;
      margin-top: 4%;
      border-radius: 5px;
    }

    input[type="submit"] {
      margin-left: 44%;
      margin-top: 10px;
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

    .col1 {
      display: inline-table;
      width: 30%;
    }

    .col2 {
      margin-left: 2%;
      display: inline-table;
      width: 30%;
    }

    .col3 {
      margin-left: 2%;
      display: inline-table;
      width: 30%;
    }

    tr.w th {
      width: 8%;
      height: 25px;
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
              $date = $_GET['date'];

              ?>



              <?php if ($_SESSION['user_level'] != 1) { ?>
                <div class="setfont1">
                  <?php

                  $month = array('-', 'มกราคม', 'กุมภาพันธ์', 'มีนาคม', 'เมษายน', 'พฤษภาคม', 'มิถุนายน', 'กรกฎาคม', 'สิงหาคม', 'กันยายน', 'ตุลาคม', 'พฤศจิกายน', 'ธันวาคม');
                  $Tdate = explode("-", $_GET['date']);
                  $Sdate = array($Tdate[2], $month[(int) $Tdate[1]], $Tdate[0] + 543);
                  $da  = implode(" ", $Sdate);


                  ?>
                  <h1 style="font-weight: 800;color: #2B3E54;font-size: 180%;">แก้ไขข้อมูลรอบเช้าวันที่ <?php echo $da; ?> </h1>
                  <div class="setborder">
                    <?php
                    require_once "connect.php";
                    $date = $_GET['date'];
                    $userQuery = "select * from buy_gas where date = '$date' and substr(time_stamp,1,2) in (11,12,13,14,15,16,17,18)";
                    $result = mysqli_query($connect, $userQuery);       
                    if (mysqli_num_rows($result) == 0) {
                      $e20 = 0;
                      $g95 = 0;
                      $die = 0;
                      $time = '17:25:17pm';
                      ?>
                      <script type="text/javascript">
                    console.log("<?php echo mysqli_num_rows($result); ?>")
                    </script>
                      <?php
                    } else {
                      $row = mysqli_fetch_assoc($result);
                      $e20 = $row['G91'];
                      $g95 = $row['G95'];
                      $die = $row['Desel'];
                      $time = $row['time_stamp'];
                      ?>
                      <script type="text/javascript">
                    console.log("!= 0")
                    </script>
                      <?php
                    }

                    ?>
                    
                    <h1 style="font-weight: 800;color: #2B3E54;font-size: 200%;">กรอกข้อมูล</h1>
                    <form action="edit-buygas.php" method="GET">
                      <div class="showdetail">ปริมาณที่ลง Tank</div>
                      <table style="margin-top:20px;">
                        <tr>
                          <td class="name">E20</td>
                          <td><input type="text" value="<?php echo $e20; ?>" onKeyUp="if(isNaN(this.value)){ alert('กรุณากรอกตัวเลข'); this.value='';}" name="g95" style="width: 90%;" onKeyUp="if(isNaN(this.value)){ alert('กรุณากรอกตัวเลข'); this.value='';}"></td>
                          <td style="font-size: 100%;">ลิตร</td>
                        </tr>
                        <tr>
                          <td class="name">G95</td>
                          <td><input type="text" value="<?php echo $g95; ?>" onKeyUp="if(isNaN(this.value)){ alert('กรุณากรอกตัวเลข'); this.value='';}" name="g91" style="width: 90%;" onKeyUp="if(isNaN(this.value)){ alert('กรุณากรอกตัวเลข'); this.value='';}"></td>
                          <td style="font-size: 100%;">ลิตร</td>
                        </tr>
                        <tr>
                          <td class="name">Diesel</td>
                          <td><input type="text" value="<?php echo $die; ?>" onKeyUp="if(isNaN(this.value)){ alert('กรุณากรอกตัวเลข'); this.value='';}" name="die" style="width: 90%;" onKeyUp="if(isNaN(this.value)){ alert('กรุณากรอกตัวเลข'); this.value='';}"></td>
                          <td style="font-size: 100%;">ลิตร</td>
                        </tr>
                        <input type="hidden" name="date" value="<?php echo $date; ?>">
                        <input type="hidden" name="timestamp" value="<?php echo $time; ?>">
                      </table>
                      <input type="submit" class="btn btn-success" value="Submit">
                    </form>
                  </div>

                  <h1 style="font-weight: 800;color: #2B3E54;font-size: 180%;">แก้ไขข้อมูลรอบเย็นวันที่ <?php echo $da; ?> </h1>
                  <div class="setborder">
                    <?php
                    require_once "connect.php";
                    $date = $_GET['date'];
                    $userQuery = "select * from buy_gas where date = '$date' and substr(time_stamp,1,2) in (19,20,21,22,23,24,1,2,3,4,5,6,7,8,9,10)";
                    $result = mysqli_query($connect, $userQuery);
                    if (mysqli_num_rows($result) == 0) {
                      $e20 = 0;
                      $g95 = 0;
                      $die = 0;
                      $time = '20:25:17pm';
                    } else {
                      $row = mysqli_fetch_assoc($result);
                      $e20 = $row['G91'];
                      $g95 = $row['G95'];
                      $die = $row['Desel'];
                      $time = $row['time_stamp'];
                    }

                    ?>
                    <h1 style="font-weight: 800;color: #2B3E54;font-size: 200%;">กรอกข้อมูล</h1>
                    <form action="edit-buygas.php" method="GET">
                      <div class="showdetail">ปริมาณที่ลง Tank</div>
                      <table style="margin-top:20px;">
                        <tr>
                          <td class="name">E20</td>
                          <td><input type="text" value="<?php echo $e20; ?>" onKeyUp="if(isNaN(this.value)){ alert('กรุณากรอกตัวเลข'); this.value='';}" name="g95" style="width: 90%;" onKeyUp="if(isNaN(this.value)){ alert('กรุณากรอกตัวเลข'); this.value='';}"></td>
                          <td style="font-size: 100%;">ลิตร</td>
                        </tr>
                        <tr>
                          <td class="name">G95</td>
                          <td><input type="text" value="<?php echo $g95; ?>" onKeyUp="if(isNaN(this.value)){ alert('กรุณากรอกตัวเลข'); this.value='';}" name="g91" style="width: 90%;" onKeyUp="if(isNaN(this.value)){ alert('กรุณากรอกตัวเลข'); this.value='';}"></td>
                          <td style="font-size: 100%;">ลิตร</td>
                        </tr>
                        <tr>
                          <td class="name">Diesel</td>
                          <td><input type="text" value="<?php echo $die; ?>" onKeyUp="if(isNaN(this.value)){ alert('กรุณากรอกตัวเลข'); this.value='';}" name="die" style="width: 90%;" onKeyUp="if(isNaN(this.value)){ alert('กรุณากรอกตัวเลข'); this.value='';}"></td>
                          <td style="font-size: 100%;">ลิตร</td>
                        </tr>
                        <input type="hidden" name="date" value="<?php echo $date; ?>">
                        <input type="hidden" name="timestamp" value="<?php echo $time; ?>">
                      </table>
                      <input type="submit" class="btn btn-success" value="Submit">
                    </form>
                  </div>
                </div>


              <?php } else { ?>
                <div class="setfont1">
                  <h1 style="font-weight: 800;color: #2B3E54;font-size: 180%;">กรอกข้อมูลน้ำมันในหลุม</h1>
                  <div class="setborder" style="width: 36%">
                    <form action="add-stock.php" method="get">
                      <div class="showdetail">ปริมาณน้ำมันในหลุม</div>
                      <table class="account">
                        <tr>
                          <td class="name">E20</td>
                          <td><input type="text" onKeyUp="if(isNaN(this.value)){ alert('กรุณากรอกตัวเลข'); this.value='';}" name="g91" placeholder="ปริมาณ"></td>
                          <td>ลิตร</td>
                        </tr>
                        <tr>
                          <td class="name">G95</td>
                          <td><input type="text" onKeyUp="if(isNaN(this.value)){ alert('กรุณากรอกตัวเลข'); this.value='';}" name="g95" placeholder="ปริมาณ"></td>
                          <td>ลิตร</td>
                        </tr>
                        <tr>
                          <td class="name">Diesel</td>
                          <td><input type="text" onKeyUp="if(isNaN(this.value)){ alert('กรุณากรอกตัวเลข'); this.value='';}" name="de" placeholder="ปริมาณ"></td>
                          <td>ลิตร</td>
                        </tr>
                      </table>
                      <input style="border-radius: 10px;" type="submit" class="btn btn-success" value="Submit">
                    </form>
                  </div>
                  <br>
                  <h1 style="font-weight: 800;color: #2B3E54;font-size: 180%;">กรอกข้อมูลน้ำมันบนรถ</h1>
                  <div class="setborder" style="width: 100%;">

                    <form action="add-stock_in_car.php" method="get">
                      <div class="col1">
                        <div class="showdetail">ปริมาณน้ำมันบนรถทะเบียน 6134</div>
                        <table class="account">
                          <tr>
                            <td class="name">E20</td>
                            <td><input type="text" onKeyUp="if(isNaN(this.value)){ alert('กรุณากรอกตัวเลข'); this.value='';}" name="6134g91" placeholder="ปริมาณ"></td>
                            <td>ลิตร</td>
                          </tr>
                          <tr>
                            <td class="name">G95</td>
                            <td><input type="text" onKeyUp="if(isNaN(this.value)){ alert('กรุณากรอกตัวเลข'); this.value='';}" name="6134g95" placeholder="ปริมาณ"></td>
                            <td>ลิตร</td>
                          </tr>
                          <tr>
                            <td class="name">Diesel</td>
                            <td><input type="text" onKeyUp="if(isNaN(this.value)){ alert('กรุณากรอกตัวเลข'); this.value='';}" name="6134de" placeholder="ปริมาณ"></td>
                            <td>ลิตร</td>
                          </tr>
                        </table>
                      </div>
                      <div class="col2">
                        <div class="showdetail">ปริมาณน้ำมันบนรถทะเบียน 1815</div>
                        <table class="account">
                          <tr>
                            <td class="name">E20</td>
                            <td><input type="text" onKeyUp="if(isNaN(this.value)){ alert('กรุณากรอกตัวเลข'); this.value='';}" name="1815g91" placeholder="ปริมาณ"></td>
                            <td>ลิตร</td>
                          </tr>
                          <tr>
                            <td class="name">G95</td>
                            <td><input type="text" onKeyUp="if(isNaN(this.value)){ alert('กรุณากรอกตัวเลข'); this.value='';}" name="1815g95" placeholder="ปริมาณ"></td>
                            <td>ลิตร</td>
                          </tr>
                          <tr>
                            <td class="name">Diesel</td>
                            <td><input type="text" onKeyUp="if(isNaN(this.value)){ alert('กรุณากรอกตัวเลข'); this.value='';}" name="1815de" placeholder="ปริมาณ"></td>
                            <td>ลิตร</td>
                          </tr>
                        </table>
                      </div>
                      <div class="col3">
                        <div class="showdetail">ปริมาณน้ำมันบนรถ ISUZU</div>
                        <table class="account">
                          <tr>
                            <td class="name">E20</td>
                            <td><input type="text" onKeyUp="if(isNaN(this.value)){ alert('กรุณากรอกตัวเลข'); this.value='';}" name="isg91" placeholder="ปริมาณ"></td>
                            <td>ลิตร</td>
                          </tr>
                          <tr>
                            <td class="name">G95</td>
                            <td><input type="text" onKeyUp="if(isNaN(this.value)){ alert('กรุณากรอกตัวเลข'); this.value='';}" name="isg95" placeholder="ปริมาณ"></td>
                            <td>ลิตร</td>
                          </tr>
                          <tr>
                            <td class="name">Diesel</td>
                            <td><input type="text" onKeyUp="if(isNaN(this.value)){ alert('กรุณากรอกตัวเลข'); this.value='';}" name="isde" placeholder="ปริมาณ"></td>
                            <td>ลิตร</td>
                          </tr>
                        </table>
                      </div>
                      <input style="border-radius: 10px;" type="submit" class="btn btn-success" value="Submit">
                    </form>
                  </div>

                </div>
              <?php
              } ?>


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