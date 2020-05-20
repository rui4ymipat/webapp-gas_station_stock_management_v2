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

    .setfont1 table {
      width: 100%;
      text-align: center
    }

    .setfont1 table tr th {
      FONT-WEIGHT: 800;
      font-size: 111%;
      color: #2B3E54;
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
                <h1 style="font-weight: 800;color: #2B3E54;font-size: 180%;">กรอกข้อมูลประจำวัน</h1>
                <table border="1">
                  <tr>
                    <th rowspan="2" style="height: 65px;width:13%;">วันที่</th>
                    <th rowspan="2">ชนิด</th>
                    <th colspan="5"><a href="cost_price.php" style="color: #2B3E54;">ปริมาณ/ราคา <i class="fa fa-retweet"></i></a></th>
                    <th colspan="2">น้ำมันเดิม</th>
                    <th colspan="3">สรุป</th>
                  </tr>
                  <tr>
                    <th>บัญชี 1</th>
                    <th>บัญชี 2</th>
                    <th>บัญชี 3</th>
                    <th>ค่าขนส่ง</th>
                    <th>ราคาสุทธิ</th>
                    <th>ปริมาณเดิม</th>
                    <th>ราคาเดิม</th>
                    <th>ปริมาณรวม</th>
                    <th>มูลค่ารวม</th>
                    <th>ราคาต้นทุน</th>
                  </tr>
                  <?php
                  require_once "connect.php";
                  $month = array('-', 'มกราคม', 'กุมภาพันธ์', 'มีนาคม', 'เมษายน', 'พฤษภาคม', 'มิถุนายน', 'กรกฎาคม', 'สิงหาคม', 'กันยายน', 'ตุลาคม', 'พฤศจิกายน', 'ธันวาคม');
                  $userQuery = "select date from history group by date order by date DESC";
                  $result1 = mysqli_query($connect, $userQuery);
                  while ($lop = mysqli_fetch_assoc($result1)) {

                    $da = $lop['date'];
                    $Tdate = explode("-", $lop['date']);
                    $Sdate = array($Tdate[2], $month[(int) $Tdate[1]], $Tdate[0] + 543);
                    $show_date  = implode(" ", $Sdate);

                    for ($j = 0; $j < 3; $j++) {
                      $sum_91 = 0;
                      $sum_95 = 0;
                      $sum_die = 0;
                      $s = 0;
                  ?>
                      <?php if ($j == 0) { ?>
                        <tr>
                          <td style="height: 30px;" rowspan="3"><?php echo $show_date; ?></td>
                          <td style="height: 30px;">G91</td>
                          <?php
                          $userQuery = "select price,value from history where date = '$da' and gas_id = 1 and account = 1";
                          $result = mysqli_query($connect, $userQuery);
                          if (mysqli_num_rows($result) == 0) {
                            $sum_91 += 0;
                            $s += 0;
                          ?>
                            <td>0</td>
                            <script type="text/javascript">
                              console.log("บัญชี1")
                            </script>
                          <?php
                          } else {
                            $row = mysqli_fetch_assoc($result);
                            $sum_91 += $row['value'];
                            $s += $row['value'] * $row['price'];
                          ?>
                            <td><?php echo number_format($row['value']); ?> </td>
                            <script type="text/javascript">
                              console.log("บัญชี1")
                            </script>
                          <?php
                          }

                          $userQuery = "select price,value from history where date = '$da' and gas_id = 1 and account = 2";
                          $result = mysqli_query($connect, $userQuery);
                          if (mysqli_num_rows($result) == 0) {

                            $sum_91 += 0;
                            $s += 0;
                          ?>
                            <td>0</td>
                            <script type="text/javascript">
                              console.log("บัญชี2")
                            </script>
                          <?php
                          } else {
                            $row = mysqli_fetch_assoc($result);
                            $sum_91 += $row['value'];
                            $s += $row['value'] * $row['price'];
                          ?>
                            <td><?php echo number_format($row['value']); ?> </td>
                            <script type="text/javascript">
                              console.log("บัญชี2")
                            </script>
                          <?php
                          }

                          $userQuery = "select price,value,tran_price from history where date = '$da' and gas_id = 1 and account = 3";
                          $result = mysqli_query($connect, $userQuery);
                          if (mysqli_num_rows($result) == 0) {
                            $bb = 0;
                            $sum_91 += 0;
                            $s += 0;
                          ?>
                            <td>0</td>
                            <script type="text/javascript">
                              console.log("บัญชี3")
                            </script>
                          <?php
                          } else {
                            $row = mysqli_fetch_assoc($result);
                            $sum_91 += $row['value'];
                            $s += $row['value'] * $row['price'];
                          ?>
                            <td><?php echo number_format($row['value']); ?> </td>
                            <script type="text/javascript">
                              console.log("บัญชี3")
                            </script>


                          <?php
                          }
                          ?>
                          <td><?php echo number_format($row['tran_price'], 2); ?> </td>
                          <script type="text/javascript">
                            console.log("ค่าขนส่ง = <?php echo $row['tran_price']; ?> ")
                          </script>
                          <td><?php echo number_format($bb = ($s / $sum_91) + $row['tran_price'], 2); ?> </td>
                          <script type="text/javascript">
                            console.log("ราคาสุทธิ = <?php echo number_format($bb = ($s / $sum_91) + $row['tran_price'], 2);  ?>")
                          </script>
                          <?php
                          $userQuery = "select sum(value) as sum from history where date = (select date from history where date < '$da' group by date order by date DESC limit 1) and gas_id = 1";
                          $result = mysqli_query($connect, $userQuery);
                          if (mysqli_num_rows($result) == 0) {
                            $aa = 0;
                          ?>
                            <script type="text/javascript">
                              console.log("ปริมาณเดิม")
                            </script>
                            <td>0</td>
                          <?php
                          } else {
                            $row = mysqli_fetch_assoc($result);
                          ?>
                            <td><?php echo number_format($aa = $row['sum']); ?> </td>
                            <script type="text/javascript">
                              console.log("ปริมาณเดิม")
                            </script>
                          <?php
                          }
                          $userQuery = "select value from cost where date < '$da' and gas_id = 1 limit 1";
                          $result = mysqli_query($connect, $userQuery);
                          $row = mysqli_fetch_assoc($result);
                          if (mysqli_num_rows($result) == 0) {
                            $cc = 0;
                          ?>
                            <script type="text/javascript">
                              console.log("ราคาเดิม")
                            </script>
                            <td>0</td>
                          <?php
                          } else {
                          ?>
                            <script type="text/javascript">
                              console.log("ราคาเดิม")
                            </script>
                            <td><?php echo number_format($cc = $row['value'], 2); ?></td>
                          <?php }

                          ?>
                          <td><?php echo number_format($sum_91 + $aa); ?> </td>
                          <script type="text/javascript">
                            console.log("ปริมาณรวม = <?php echo number_format($sum_91 + $aa); ?> ")
                          </script>
                          <td><?php echo number_format(($bb * $sum_91) + ($aa * $cc), 2); ?></td>
                          <script type="text/javascript">
                            console.log("มูลค่ารวม = <?php echo number_format(($bb * $sum_91) + ($aa * $cc), 2); ?> ")
                          </script>
                          <?php
                          $userQuery = "select value from cost where date = '$da' and gas_id = 1 ";
                          $result = mysqli_query($connect, $userQuery);
                          $row = mysqli_fetch_assoc($result);
                          if (mysqli_num_rows($result) == 0) {
                            echo "<td>0</td>";
                          ?>
                            <script type="text/javascript">
                              console.log("ราคาต้นทุน")
                            </script>
                          <?php
                          } else {
                          ?>
                            <script type="text/javascript">
                              console.log("ราคาต้นทุน")
                            </script>
                            <td><?php echo number_format($row['value']) ?></td>
                          <?php } ?>
                        </tr>

                      <?php
                      }



                      if ($j == 1) { ?>
                        <tr>

                          <td style="height: 30px;">G95</td>
                          <?php
                          $userQuery = "select price,value from history where date = '$da' and gas_id = 2 and account = 1";
                          $result = mysqli_query($connect, $userQuery);
                          if (mysqli_num_rows($result) == 0) {
                            $sum_91 += 0;
                            $s += 0;
                          ?>
                            <td>0</td>
                          <?php
                          } else {
                            $row = mysqli_fetch_assoc($result);
                            $sum_91 += $row['value'];
                            $s += $row['value'] * $row['price'];
                          ?>
                            <td><?php echo number_format($row['value']); ?> </td>
                          <?php
                          }

                          $userQuery = "select price,value from history where date = '$da' and gas_id = 2 and account = 2";
                          $result = mysqli_query($connect, $userQuery);
                          if (mysqli_num_rows($result) == 0) {
                            $sum_91 += 0;
                            $s += 0;
                          ?>
                            <td>0</td>
                          <?php
                          } else {
                            $row = mysqli_fetch_assoc($result);
                            $sum_91 += $row['value'];
                            $s += $row['value'] * $row['price'];
                          ?>
                            <td><?php echo number_format($row['value']); ?> </td>
                          <?php
                          }

                          $userQuery = "select price,value,tran_price from history where date = '$da' and gas_id = 2 and account = 3";
                          $result = mysqli_query($connect, $userQuery);
                          if (mysqli_num_rows($result) == 0) {
                            $bb = 0;
                            $sum_91 += 0;
                            $s += 0;
                          ?>
                            <td>0</td>
                          <?php
                          } else {
                            $row = mysqli_fetch_assoc($result);
                            $sum_91 += $row['value'];
                            $s += $row['value'] * $row['price'];
                          ?>
                            <td><?php echo number_format($row['value']); ?> </td>

                          <?php
                          }
                          ?>
                          <td><?php echo number_format($row['tran_price'], 2); ?> </td>
                          <td><?php echo number_format($bb = ($s / $sum_91) + $row['tran_price'], 2); ?> </td>
                          <?php
                          $userQuery = "select sum(value) as sum from history where date = (select date from history where date < '$da' group by date order by date DESC limit 1) and gas_id = 2";
                          $result = mysqli_query($connect, $userQuery);
                          if (mysqli_num_rows($result) == 0) {
                            $aa = 0;
                          ?>
                            <td>0</td>
                          <?php
                          } else {
                            $row = mysqli_fetch_assoc($result);
                          ?>
                            <td><?php echo number_format($aa = $row['sum']); ?> </td>
                          <?php
                          }
                          $userQuery = "select value from cost where date < '$da' and gas_id = 2 limit 1";
                          $result = mysqli_query($connect, $userQuery);
                          $row = mysqli_fetch_assoc($result);
                          if (mysqli_num_rows($result) == 0) {
                            $cc = 0;
                          ?>
                            <td>0</td>
                          <?php
                          } else {
                          ?>
                            <td><?php echo number_format($cc = $row['value'], 2); ?></td>
                          <?php } ?>
                          <td><?php echo number_format($sum_91 + $aa); ?> </td>
                          <td><?php echo number_format(($bb * $sum_91) + ($aa * $cc), 2); ?></td>

                          <?php
                          $userQuery = "select value from cost where date = '$da' and gas_id = 2 ";
                          $result = mysqli_query($connect, $userQuery);
                          $row = mysqli_fetch_assoc($result);
                          if (mysqli_num_rows($result) == 0) {
                            echo "<td>0</td>";
                          } else {
                          ?>
                            <td><?php echo number_format($row['value']) ?></td>
                          <?php } ?>
                        </tr>
                      <?php
                      }



                      if ($j == 2) { ?>
                        <tr>

                          <td style="height: 30px;">Diesel</td>
                          <?php
                          $userQuery = "select price,value from history where date = '$da' and gas_id = 3 and account = 1";
                          $result = mysqli_query($connect, $userQuery);
                          if (mysqli_num_rows($result) == 0) {
                            $sum_91 += 0;
                            $s += 0;
                          ?>
                            <td>0</td>
                          <?php
                          } else {
                            $row = mysqli_fetch_assoc($result);
                            $sum_91 += $row['value'];
                            $s += $row['value'] * $row['price'];
                          ?>
                            <td><?php echo number_format($row['value']); ?> </td>
                          <?php
                          }

                          $userQuery = "select price,value from history where date = '$da' and gas_id = 3 and account = 2";
                          $result = mysqli_query($connect, $userQuery);
                          if (mysqli_num_rows($result) == 0) {
                            $sum_91 += 0;
                            $s += 0;
                          ?>
                            <td>0</td>
                          <?php
                          } else {
                            $row = mysqli_fetch_assoc($result);
                            $sum_91 += $row['value'];
                            $s += $row['value'] * $row['price'];
                          ?>
                            <td><?php echo number_format($row['value']); ?> </td>
                          <?php
                          }

                          $userQuery = "select price,value,tran_price from history where date = '$da' and gas_id = 3 and account = 3";
                          $result = mysqli_query($connect, $userQuery);
                          if (mysqli_num_rows($result) == 0) {
                            $sum_91 += 0;
                            $s += 0;
                            $bb = 0;
                          ?>
                            <td>0</td>
                          <?php
                          } else {
                            $row = mysqli_fetch_assoc($result);
                            $sum_91 += $row['value'];
                            $s += $row['value'] * $row['price'];
                          ?>
                            <td><?php echo number_format($row['value']); ?> </td>

                          <?php
                          }
                          ?>
                          <td><?php echo number_format($row['tran_price'], 2); ?> </td>
                          <td><?php echo number_format($bb = ($s / $sum_91) + $row['tran_price'], 2); ?> </td>
                          <?php
                          $userQuery = "select sum(value) as sum from history where date = (select date from history where date < '$da' group by date order by date DESC limit 1) and gas_id = 3";
                          $result = mysqli_query($connect, $userQuery);
                          if (mysqli_num_rows($result) == 0) {
                            $aa = 0;
                          ?>
                            <td>0</td>
                          <?php
                          } else {
                            $row = mysqli_fetch_assoc($result);
                          ?>
                            <td><?php echo number_format($aa = $row['sum']); ?> </td>
                          <?php
                          }
                          $userQuery = "select value from cost where date < '$da' and gas_id = 3 limit 1";
                          $result = mysqli_query($connect, $userQuery);
                          $row = mysqli_fetch_assoc($result);
                          if (mysqli_num_rows($result) == 0) {
                            $cc = 0;
                          ?>
                            <td>0</td>
                          <?php
                          } else {
                          ?>
                            <td><?php echo number_format($cc = $row['value'], 2); ?></td>
                          <?php } ?>
                          <td><?php echo number_format($sum_91 + $aa); ?> </td>
                          <td><?php echo number_format(($bb * $sum_91) + ($aa * $cc), 2); ?></td>

                          <?php
                          $userQuery = "select value from cost where date = '$da' and gas_id = 3 ";
                          $result = mysqli_query($connect, $userQuery);
                          $row = mysqli_fetch_assoc($result);
                          if (mysqli_num_rows($result) == 0) {
                            echo "<td>0</td>";
                          } else {
                          ?>
                            <td><?php echo number_format($row['value']) ?></td>
                          <?php } ?>
                        </tr>
                  <?php
                      }
                    }
                  }

                  ?>
                </table>
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