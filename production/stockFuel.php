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

    @media only screen and (max-width: 1366px) {}

    @media only screen and (max-width: 1024px) {}

    @media only screen and (min-width: 1367px) {
      div.c1 table tr.setheader th {
        width: 7.5%;
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
              ?>



              <?php if ($_SESSION['user_level'] != 1) { ?>
                <div class="setfont1">
                  <div class="c1">
                    <h1 style="font-weight: 800;color: #2B3E54;font-size: 180%;">ปริมาณน้ำมัน</h1>
                    <table border="1" style="text-align: center; width: 100%;">
                      <tr>
                        <th rowspan="2" style="height: 50px;">วันที่</th>
                        <th rowspan="2" style="width: 3%;">กะ</th>
                        <th colspan="3">Tank</th>
                        <th colspan="3">ซื้อมา</th>
                        <th colspan="3">รวม</th>
                        <th colspan="3">รถอีซูซุ</th>
                      </tr>
                      <tr class="setheader">
                        <th>G95</th>
                        <th>G91</th>
                        <th>Desel</th>
                        <th>G95</th>
                        <th>G91</th>
                        <th>Desel</th>
                        <th>G95</th>
                        <th>G91</th>
                        <th>Desel</th>
                        <th>G95</th>
                        <th>G91</th>
                        <th>Desel</th>
                      </tr>
                      <?php
                      require_once "connect.php";
                      date_default_timezone_set("Asia/Bangkok");
                      $d = date("Y-m-d");
                      $month = array('-', 'มกราคม', 'กุมภาพันธ์', 'มีนาคม', 'เมษายน', 'พฤษภาคม', 'มิถุนายน', 'กรกฎาคม', 'สิงหาคม', 'กันยายน', 'ตุลาคม', 'พฤศจิกายน', 'ธันวาคม');
                      $userQuery = "select date from gastank group by date order by date DESC limit 7";
                      $result1 = mysqli_query($connect, $userQuery);
                      while ($lop = mysqli_fetch_assoc($result1)) {
                        $da = $lop['date'];
                        $Tdate = explode("-", $lop['date']);
                        $Sdate = array($Tdate[2], $month[(int) $Tdate[1]], $Tdate[0] + 543);
                        $date  = implode(" ", $Sdate);
                      ?>
                        <?php
                        for ($i = 0; $i < 2; $i++) {
                        ?>
                          <tr>
                            <?php if ($i == 0) { ?>
                              <td rowspan="2"><?php echo $date; ?></td>
                              <td style="height: 35px;"> เช้า </td>
                            <?php
                            } else {
                            ?>
                              <td style="height: 35px;"> เย็น </td>
                              <?php
                            }
                            if ($i == 0) {
                              $userQuery = "select value from gastank where date = '$da' and substr(timestamp,9) = 'am' order by gas_id";
                              $result = mysqli_query($connect, $userQuery);
                              if (mysqli_num_rows($result) == 0) {
                              ?>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <?php
                              } else {
                                while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                  <td><?php echo number_format($row['value']); ?></td>
                                <?php
                                }
                              }
                            } else {
                              $userQuery = "select value from gastank where date = '$da' and substr(timestamp,9) = 'pm' order by gas_id";
                              $result = mysqli_query($connect, $userQuery);
                              if (mysqli_num_rows($result) == 0) {
                                ?>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <?php
                              } else {
                                while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                  <td><?php echo number_format($row['value']); ?></td>
                                <?php
                                }
                              }
                            }
                            if ($i == 0) {
                              $userQuery = "select current_price from today_price where date = '$da'";
                              $result = mysqli_query($connect, $userQuery);
                              if (mysqli_num_rows($result) == 0) {
                                ?>
                                <td rowspan="2">0</td>
                                <td rowspan="2">0</td>
                                <td rowspan="2">0</td>
                                <?php
                              } else {
                                while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                  <td rowspan="2"><?php echo $row['current_price']; ?></td>
                                <?php
                                }
                              }
                            }
                            if ($i == 0) {
                              $userQuery = "select value from gastank where date = '$da' and substr(timestamp,9) = 'pm' order by gas_id";
                              $result = mysqli_query($connect, $userQuery);
                              if (mysqli_num_rows($result) == 0) {
                                ?>
                                <td rowspan="2">0</td>
                                <td rowspan="2">0</td>
                                <td rowspan="2">0</td>
                                <?php
                              } else {
                                while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                  <td rowspan="2"><?php echo number_format($row['value']); ?></td>
                            <?php
                                }
                              }
                            }
                            if($i == 0)
                            {
                              $userQuery = "select value from gastank where date = '$da' and substr(timestamp,9) = 'pm' order by gas_id";
                              $result = mysqli_query($connect, $userQuery);
                              if (mysqli_num_rows($result) == 0) {
                                ?>
                                <td rowspan="2">0</td>
                                <td rowspan="2">0</td>
                                <td rowspan="2">0</td>
                                <?php
                              } else {
                                while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                  <td rowspan="2"><?php echo number_format($row['value']); ?></td>
                            <?php
                                }
                              }
                            }
                            ?>
                          </tr>
                      <?php
                        }
                      } ?>
                    </table>
                  </div>
                  <div class="c2">
                    <h1 style="font-weight: 800;color: #2B3E54;font-size: 180%;">ยอดขายประจำวัน</h1>
                    <table border="1" style="text-align: center; width: 60%;">
                      <tr>
                        <th style="width: 23%;height: 25px;">วันที่</th>
                        <th style="width: 9%;">กะ</th>
                        <th style="width: 20%;">G95</th>
                        <th style="width: 20%;">G91</th>
                        <th style="width: 20%;">Desel</th>
                      </tr>
                      <?php
                      require_once "connect.php";
                      date_default_timezone_set("Asia/Bangkok");
                      $d = date("Y-m-d");
                      $month = array('-', 'มกราคม', 'กุมภาพันธ์', 'มีนาคม', 'เมษายน', 'พฤษภาคม', 'มิถุนายน', 'กรกฎาคม', 'สิงหาคม', 'กันยายน', 'ตุลาคม', 'พฤศจิกายน', 'ธันวาคม');
                      $userQuery = "select date from gastank group by date order by date DESC limit 7";
                      $result1 = mysqli_query($connect, $userQuery);
                      while ($lop = mysqli_fetch_assoc($result1)) {
                        $da = $lop['date'];
                        $Tdate = explode("-", $lop['date']);
                        $Sdate = array($Tdate[2], $month[(int) $Tdate[1]], $Tdate[0] + 543);
                        $date  = implode(" ", $Sdate);
                      ?>
                        <?php
                        for ($i = 0; $i < 2; $i++) {
                        ?>
                          <tr>
                            <?php if ($i == 0) { ?>
                              <td rowspan="2"><?php echo $date; ?></td>
                              <td style="height: 35px;"> เช้า </td>
                            <?php
                            } else {
                            ?>
                              <td style="height: 35px;"> เย็น </td>
                              <?php
                            }
                            if ($i == 0) {
                              ?>
                              
                              <?php
                              $userQuery = "select (select value from gastank where date < '$d' and substr(timestamp,9)= 'pm' and gas_id = 1 limit 1)-value as dif from gastank where date = '$d' and substr(timestamp,9)= 'am' and gas_id = 1";
                              $result = mysqli_query($connect, $userQuery);
                              if (mysqli_num_rows($result) == 0) {
                              ?>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <?php
                              } else {
                                $row = mysqli_fetch_assoc($result);
                                ?>
                                  <td><?php echo number_format($row['dif']); ?></td>
                                <?php
                                $userQuery = "select (select value from gastank where date < '$d' and substr(timestamp,9)= 'pm' and gas_id = 2 limit 1)-value as dif from gastank where date = '$d' and substr(timestamp,9)= 'am' and gas_id = 2";
                                $result = mysqli_query($connect, $userQuery);
                                $row = mysqli_fetch_assoc($result);
                                ?>
                                  <td><?php echo number_format($row['dif']); ?></td>
                                <?php
                                $userQuery = "select (select value from gastank where date < '$d' and substr(timestamp,9)= 'pm' and gas_id = 3 limit 1)-value as dif from gastank where date = '$d' and substr(timestamp,9)= 'am' and gas_id = 3";
                                $result = mysqli_query($connect, $userQuery);
                                $row = mysqli_fetch_assoc($result);
                                ?>
                                  <td><?php echo number_format($row['dif']); ?></td>
                                  
                                <?php                                
                              }
                            } else {
                              ?>
                              
                              <?php
                              $userQuery = "select (select value from gastank where date = '$d' and substr(timestamp,9)= 'am' and gas_id = 1 limit 1)-value as dif from gastank where date = '$d' and substr(timestamp,9)= 'pm' and gas_id = 1";
                              $result = mysqli_query($connect, $userQuery);
                              if (mysqli_num_rows($result) == 0) {
                              ?>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <?php
                              } else {
                                $row = mysqli_fetch_assoc($result);
                                ?>
                                  <td><?php echo number_format($row['dif']); ?></td>
                                <?php
                                $userQuery = "select (select value from gastank where date = '$d' and substr(timestamp,9)= 'am' and gas_id = 2 limit 1)-value as dif from gastank where date = '$d' and substr(timestamp,9)= 'pm' and gas_id = 2";
                                $result = mysqli_query($connect, $userQuery);
                                $row = mysqli_fetch_assoc($result);
                                ?>
                                  <td><?php echo number_format($row['dif']); ?></td>
                                <?php
                                $userQuery = "select (select value from gastank where date = '$d' and substr(timestamp,9)= 'am' and gas_id = 3 limit 1)-value as dif from gastank where date = '$d' and substr(timestamp,9)= 'pm' and gas_id = 3";
                                $result = mysqli_query($connect, $userQuery);
                                $row = mysqli_fetch_assoc($result);
                                ?>
                                  <td><?php echo number_format($row['dif']); ?></td>
                                  
                                <?php                                
                              }
                                
                               
                            }                      
                            ?>
                          </tr>
                      <?php
                        }
                      } ?>
                    </table>
                  </div>
                </div>


              <?php } else { ?>
                <div class="setfont1">
                  <h1 style="font-weight: 800;color: #2B3E54;font-size: 180%;">กรอกข้อมูลน้ำมันในหลุม</h1>
                  <div class="setborder" style="width: 25%">
                    <form action="add-stock.php" method="get">
                      <div class="showdetail">ปริมาณน้ำมันในหลุม</div>
                      <table class="account">
                        <tr>
                          <td class="name">G91</td>
                          <td><input type="text" name="g91" placeholder="ปริมาณ"></td>
                          <td>ลิตร</td>
                        </tr>
                        <tr>
                          <td class="name">G95</td>
                          <td><input type="text" name="g95" placeholder="ปริมาณ"></td>
                          <td>ลิตร</td>
                        </tr>
                        <tr>
                          <td class="name">Desel</td>
                          <td><input type="text" name="de" placeholder="ปริมาณ"></td>
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
                            <td class="name">G91</td>
                            <td><input type="text" name="6134g91" placeholder="ปริมาณ"></td>
                            <td>ลิตร</td>
                          </tr>
                          <tr>
                            <td class="name">G95</td>
                            <td><input type="text" name="6134g95" placeholder="ปริมาณ"></td>
                            <td>ลิตร</td>
                          </tr>
                          <tr>
                            <td class="name">Desel</td>
                            <td><input type="text" name="6134de" placeholder="ปริมาณ"></td>
                            <td>ลิตร</td>
                          </tr>
                        </table>
                      </div>
                      <div class="col2">
                        <div class="showdetail">ปริมาณน้ำมันบนรถทะเบียน 1815</div>
                        <table class="account">
                          <tr>
                            <td class="name">G91</td>
                            <td><input type="text" name="1815g91" placeholder="ปริมาณ"></td>
                            <td>ลิตร</td>
                          </tr>
                          <tr>
                            <td class="name">G95</td>
                            <td><input type="text" name="1815g95" placeholder="ปริมาณ"></td>
                            <td>ลิตร</td>
                          </tr>
                          <tr>
                            <td class="name">Desel</td>
                            <td><input type="text" name="1815de" placeholder="ปริมาณ"></td>
                            <td>ลิตร</td>
                          </tr>
                        </table>
                      </div>
                      <div class="col3">
                        <div class="showdetail">ปริมาณน้ำมันบนรถ ISUZU</div>
                        <table class="account">
                          <tr>
                            <td class="name">G91</td>
                            <td><input type="text" name="isg91" placeholder="ปริมาณ"></td>
                            <td>ลิตร</td>
                          </tr>
                          <tr>
                            <td class="name">G95</td>
                            <td><input type="text" name="isg95" placeholder="ปริมาณ"></td>
                            <td>ลิตร</td>
                          </tr>
                          <tr>
                            <td class="name">Desel</td>
                            <td><input type="text" name="isde" placeholder="ปริมาณ"></td>
                            <td>ลิตร</td>
                          </tr>
                        </table>
                      </div>
                      <input style="border-radius: 10px;" type="submit" class="btn btn-success" value="Submit">
                    </form>
                  </div>
                  <h1 style="font-weight: 800;color: #2B3E54;font-size: 180%;">ปริมาณน้ำมัน</h1>
                  <div class="table_em" style="width: 100%;">
                    <table border="1" style="text-align: center; display:inline-block;width:70%;">
                      <tr>
                        <th rowspan="2" style="width: 15%;">วันที่</th>
                        <th rowspan="2" style="width: 1%;">กะ</th>
                        <th colspan="3" style="height: 25px;">Tank</th>
                        <th colspan="3">ซิ้อมา</th>
                        <th colspan="3">รวม</th>
                      </tr>
                      <tr class="w">
                        <th>G91</th>
                        <th>G95</th>
                        <th>Desel</th>
                        <th>G91</th>
                        <th>G95</th>
                        <th>Desel</th>
                        <th>G91</th>
                        <th>G95</th>
                        <th>Desel</th>
                      </tr>
                      <?php
                      require_once "connect.php";
                      date_default_timezone_set("Asia/Bangkok");
                      $d = date("Y-m-d");
                      $month = array('-', 'มกราคม', 'กุมภาพันธ์', 'มีนาคม', 'เมษายน', 'พฤษภาคม', 'มิถุนายน', 'กรกฎาคม', 'สิงหาคม', 'กันยายน', 'ตุลาคม', 'พฤศจิกายน', 'ธันวาคม');
                      $userQuery = "select date from gastank group by date order by date DESC limit 7";
                      $result1 = mysqli_query($connect, $userQuery);
                      while ($lop = mysqli_fetch_assoc($result1)) {
                        $da = $lop['date'];
                        $Tdate = explode("-", $lop['date']);
                        $Sdate = array($Tdate[2], $month[(int) $Tdate[1]], $Tdate[0] + 543);
                        $date  = implode(" ", $Sdate);
                      ?>
                        <?php
                        for ($i = 0; $i < 2; $i++) {
                        ?>
                          <tr>
                            <?php if ($i == 0) { ?>
                              <td rowspan="2"><?php echo $date; ?></td>
                              <td style="height: 35px;"> เช้า </td>
                            <?php
                            } else {
                            ?>
                              <td style="height: 35px;"> เย็น </td>
                              <?php
                            }
                            if ($i == 0) {
                              $userQuery = "select value from gastank where date = '$da' and substr(timestamp,9) = 'am' order by gas_id";
                              $result = mysqli_query($connect, $userQuery);
                              if (mysqli_num_rows($result) == 0) {
                              ?>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <?php
                              } else {
                                while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                  <td><?php echo number_format($row['value']); ?></td>
                                <?php
                                }
                              }
                            } else {
                              $userQuery = "select value from gastank where date = '$da' and substr(timestamp,9) = 'pm' order by gas_id";
                              $result = mysqli_query($connect, $userQuery);
                              if (mysqli_num_rows($result) == 0) {
                                ?>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <?php
                              } else {
                                while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                  <td><?php echo number_format($row['value']); ?></td>
                                <?php
                                }
                              }
                            }
                            if ($i == 0) {
                              $userQuery = "select current_price from today_price where date = '$da'";
                              $result = mysqli_query($connect, $userQuery);
                              if (mysqli_num_rows($result) == 0) {
                                ?>
                                <td rowspan="2">0</td>
                                <td rowspan="2">0</td>
                                <td rowspan="2">0</td>
                                <?php
                              } else {
                                while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                  <td rowspan="2"><?php echo $row['current_price']; ?></td>
                                <?php
                                }
                              }
                            }
                            if ($i == 0) {
                              $userQuery = "select value from gastank where date = '$da' and substr(timestamp,9) = 'pm' order by gas_id";
                              $result = mysqli_query($connect, $userQuery);
                              if (mysqli_num_rows($result) == 0) {
                                ?>
                                <td rowspan="2">0</td>
                                <td rowspan="2">0</td>
                                <td rowspan="2">0</td>
                                <?php
                              } else {
                                while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                  <td rowspan="2"><?php echo number_format($row['value']); ?></td>
                            <?php
                                }
                              }
                            }
                            ?>
                          </tr>
                      <?php
                        }
                      } ?>
                    </table>
                    <table border="1" style="display: inline-block; margin-left:2%;text-align: center;width:25%;">
                      <tr>
                        <th colspan="3" style="height: 25px;">รถอีซูซุ</th>
                      </tr>
                      <tr class="w">
                        <th>G91</th>
                        <th>G95</th>
                        <th>Desel</th>
                      </tr>
                      <?php
                      $userQuery = "select date from gasisuzu group by date order by date DESC limit 7";
                      $result1 = mysqli_query($connect, $userQuery);
                      while ($lop = mysqli_fetch_assoc($result1)) {
                        $da = $lop['date'];
                        $userQuery = "select * from gasisuzu where date = '$da' ";
                        $result = mysqli_query($connect, $userQuery);
                        $row = mysqli_fetch_assoc($result);
                        if (mysqli_num_rows($result) == 0) {
                      ?>
                          <tr>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                          </tr>
                        <?php
                        } else {
                        ?>

                          <tr>
                            <td style="height: 70px;"><?php echo $row['g91'];  ?></td>
                            <td style="height: 70px;"><?php echo $row['g95'];  ?></td>
                            <td style="height: 70px;"><?php echo $row['diesel'];  ?></td>
                          </tr>
                      <?php }
                      } ?>
                    </table>
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