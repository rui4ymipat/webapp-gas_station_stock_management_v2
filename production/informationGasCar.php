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
        width: 100%;
      }
    }

    @media only screen and (max-width: 1024px) {
      .setborder {
        width: 100%;
      }

    }

    @media only screen and (min-width: 1367px) {
      .setborder {
        width: 100%;
      }

      .setcol1 {
        display: inline-table;

      }

      .setcol2 {
        display: inline-table;
        width: 53%;
        margin-left: 2%;
      }
    }

    .show_information table {
      width: 100%;
      text-align: center;
    }

    .show_information table tr.setwid th {
      FONT-WEIGHT: 800;
      font-size: 111%;
      color: #2B3E54;
      width: 7%;
    }

    .show_information table tr th {
      FONT-WEIGHT: 800;
      font-size: 111%;
      color: #2B3E54;
    }

    form .showdetail {
      font-size: 165%;
      color: #2B3E54;
      font-weight: 600;
      padding-bottom: 5px;
      margin-bottom: 10px;
      border-bottom: 0.5px solid rgb(202, 206, 215);
    }


    input[type="text"] {
      border: 1px solid rgb(202, 206, 215);
      margin-right: 15px;
      width: 93%;
      height: 35px;
      text-align: center;
      margin-bottom: 10px;
      margin-top: 4%;
      border-radius: 5px;
    }

    input[type="submit"] {
      margin-left: 88%;
      margin-top: 3.5px;
      border-radius: 5px;
    }

    .setborder {
      width: 100%;
      border: 1px solid rgb(202, 206, 215);
      padding: 20px 20px 20px 20px;
      border-radius: 5px;
    }

    .column1 {
      display: inline-table;
      width: 25%;
      margin-left: 5px;
      margin-right: 5px;
    }

    .column2,
    .column3 {
      display: inline-table;
      width: 33%;
      margin-left: 5px;
      margin-right: 5px;
    }

    .account tr.detail {
      font-size: 60%;
    }

    td.lit {
      font-size: 100%;
    }

    td.name {
      font-size: 131%;
      padding-right: 20px;
      padding-top: 1%;
      font-weight: 550;
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
                require_once "connect.php";
                $userQuery = "SELECT * from car";
                $result = mysqli_query($connect, $userQuery);
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
                  <h1 style="font-weight: 800;color: #2B3E54;font-size: 180%;">กรอกข้อมูลประจำวัน</h1>
                  <div class="setborder">
                    <form action="inforCar-pro.php" method="GET">

                      <div class="column1">
                        <div class="showdetail">รถขนน้ำมัน</div>
                        <select name="cars" style="padding-left: 5%;width: 71%;height: 35px;margin-bottom: 15px;" class="form-control">
                          <option value="none" selected disabled hidden>เลือกรถ</option>
                          <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                            <option value="<?php echo $id[] = $row['id'] ?>"><?php echo $name[] = $row['name'] ?></option>
                          <?php } ?>
                        </select>
                      </div>
                      <div class="column2">
                        <div class="showdetail">ปริมาณที่รับมา</div>
                        <table>
                          <tr>
                            <td class="name">G91</td>
                            <td><input type="text" name="g91"></td>
                            <td class="lit">ลิตร</td>
                          </tr>
                          <tr>
                            <td class="name">G95</td>
                            <td><input type="text" name="g95"></td>
                            <td class="lit">ลิตร</td>
                          </tr>
                          <tr>
                            <td class="name">Diesel</td>
                            <td><input type="text" name="de"></td>
                            <td class="lit">ลิตร</td>
                          </tr>
                        </table>
                      </div>
                      <div class="column3">
                        <div class="showdetail">ค่าเที่ยว</div>
                        <table>
                          <tr>
                            <td class="name">ค่าเที่ยวต่อรอบ</td>
                            <td><input type="text" name="tp" placeholder="2,800"></td>
                            <td class="lit">บาท</td>
                          </tr>
                          <tr>
                            <td class="name">ค่าอื่นๆ</td>
                            <td><input type="text" name="other"></td>
                            <td class="lit">บาท</td>
                          </tr>
                          <tr>
                            <td class="name">หมายเหตุ</td>
                            <td><input type="text" name="detail"></td>
                            <td class="lit">บาท</td>
                          </tr>
                        </table>
                      </div>
                      <input type="submit" class="btn btn-success" value="Submit">
                    </form>
                  </div>
                  <br>
                  <div class="show_information">
                    <?php

                    $table = array('C6134', 'C1815', 'ISUZU');
                    ?>
                    <h1 style="font-weight: 800;color: #2B3E54;font-size: 180%;">ข้อมูลรถน้ำมัน</h1>
                    <?php for ($i = 0; $i < count($id); $i++) { ?>
                      <br>
                      <table border="1">
                        <tr>
                          <th rowspan="2" style="height: 65px;">วันที่</th>
                          <th colspan="7">ทะเบียน <?php echo $name[$i] ?></th>
                          <th colspan="3">ปริมาณที่รับมา</th>
                        </tr>
                        <tr>
                          <th>เลขไมค์</th>
                          <th>เติมลิตร</th>
                          <th>ราคา</th>
                          <th>ค่าน้ำมัน</th>
                          <th>ค่าเที่ยว</th>
                          <th style="width: 13%;">ค่าอื่นๆ</th>
                          <th style="width: 10%;">รวมค่าขนส่ง</th>
                          <th style="width: 7%;">G91</th>
                          <th style="width: 7%;">G95</th>
                          <th style="width: 7%;">Diesel</th>
                        </tr>
                        <?php
                        $month = array('-', 'มกราคม', 'กุมภาพันธ์', 'มีนาคม', 'เมษายน', 'พฤษภาคม', 'มิถุนายน', 'กรกฎาคม', 'สิงหาคม', 'กันยายน', 'ตุลาคม', 'พฤศจิกายน', 'ธันวาคม');
                        $Q = "Select * from $table[$i] order by date DESC";
                        $Check_result = mysqli_query($connect, $Q);
                        while ($row = mysqli_fetch_assoc($Check_result)) {
                          $d = $row['date'];
                          $date = explode("-", $row['date']);
                          $Sdate = array($date[2], $month[(int) $date[1]], $date[0] + 543);
                          $Tdate = implode(" ", $Sdate);
                          $Q2 = "select current_price from today_price where date = '$d' and gas_id = 3";
                          $re1 = mysqli_query($connect, $Q2);
                          if (!$re1) {
                            die("Could not successfully run the query $userQuery " . mysqli_error($connect));
                          }
                          $Dep = mysqli_fetch_assoc($re1);
                        ?>
                          <tr>
                            <td style="height: 30px;"><?php echo $Tdate  ?></td>
                            <td><?php echo $row['number']; ?></td>
                            <td><?php echo number_format($row['value'], 2); ?></td>
                            <td><?php echo number_format($Dep['current_price'], 2); ?></td>
                            <td><?php echo number_format($Dep['current_price'] * $row['value'], 2); ?></td>
                            <td><?php echo number_format($row['cost'], 2); ?></td>
                            <td><?php echo number_format($row['other_price']);
                                echo "(", $row['detail'], ")"; ?></td>
                            <td><?php echo number_format($row['cost'] + $row['other_price'] + ($Dep['current_price'] * $row['value']), 2); ?></td>
                            <td><?php echo $row['G91']; ?></td>
                            <td><?php echo $row['G95']; ?></td>
                            <td><?php echo $row['Desel']; ?></td>
                          </tr>
                        <?php } ?>
                      </table>
                    <?php } ?>
                  </div>
                </div>


              <?php } else { ?>
                <div class="setfont1">
                  <div class="setcol1">
                    <h1 style="font-weight: 800;color: #2B3E54;font-size: 180%;">กรอกข้อมูลประจำวัน</h1>
                    <div class="setborder">

                      <form action="inforCar-Em-pro.php" method="get">
                        <div class="showdetail">ข้อมูลราคาบัญชี 1</div>
                        <table>
                          <tr>
                            <td class="name">ทะเบียน 6134</td>
                            <td><input type="text" name="6134_num" placeholder="เลขไมค์"></td>
                            <td><input type="text" name="6134_value" placeholder="ปริมาณที่เติม"></td>
                          </tr>
                          <tr>
                            <td class="name">ทะเบียน 1815</td>
                            <td><input type="text" name="1815_num" placeholder="เลขไมค์"></td>
                            <td><input type="text" name="1815_value" placeholder="ปริมาณที่เติม"></td>
                          </tr>
                          <tr>
                            <td class="name">ทะเบียน ISUZU</td>
                            <td><input type="text" name="IS_num" placeholder="เลขไมค์"></td>
                            <td><input type="text" name="IS_value" placeholder="ปริมาณที่เติม"></td>
                          </tr>
                        </table>
                        <input type="submit" class="btn btn-success" value="Submit" style="margin-left:43%;">
                      </form>
                    </div>
                  </div>
                  <div class="setcol2">
                    <div class="show_information">
                      <h1 style="font-weight: 800;color: #2B3E54;font-size: 180%;">ข้อมูล</h1>
                      <table border="1" style="text-align: center; width:104%; ">
                        <tr>
                          <th rowspan="2" style="width: 13.2%;">วันที่</th>
                          <th colspan="3">ทะเบียน 6134</th>
                          <th colspan="3">ทะเบียน 1815</th>
                          <th colspan="3">อีซูซุ</th>
                        </tr>
                        <tr class="setwid">
                          <th>เลขไมค์</th>
                          <th>เติม(ลิตร)</th>
                          <th>ราคา</th>
                          <th>เลขไมค์</th>
                          <th>เติม(ลิตร)</th>
                          <th>ราคา</th>
                          <th>เลขไมค์</th>
                          <th>เติม(ลิตร)</th>
                          <th>ราคา</th>
                        </tr>
                        <?php
                        date_default_timezone_set("Asia/Bangkok");
                        $day = date("d");
                        for ($i = $day; $i >= $day - 7; $i--) {
                          $d = date("Y-m-d");
                          $month = array('-', 'มกราคม', 'กุมภาพันธ์', 'มีนาคม', 'เมษายน', 'พฤษภาคม', 'มิถุนายน', 'กรกฎาคม', 'สิงหาคม', 'กันยายน', 'ตุลาคม', 'พฤศจิกายน', 'ธันวาคม');
                          $Tdate = explode("-", date("Y-m-$i"));
                          $Sdate = array($Tdate[2], $month[(int) $Tdate[1]], $Tdate[0] + 543);
                          $date = implode(" ", $Sdate);
                          $dt = date("Y-m-$i");
                          $q1 = "select current_price from today_price where date = '$dt' and gas_id = 3";
                          $result = mysqli_query($connect, $q1);
                          $row = mysqli_fetch_assoc($result);
                          $current_price = $row['current_price'];

                          $q1 = "select number,value from C6134 where date = '$dt'";
                          $result = mysqli_query($connect, $q1);
                          if (!$result) {
                            die("Could not successfully run the query $userQuery " . mysqli_error($connect));
                          }
                          $row = mysqli_fetch_assoc($result);
                          $num_6134 = $row['number'];
                          $val_6134 = $row['value'];
                          if (empty($num_6134)) {
                            $num_6134 = 0;
                          }
                          if (empty($val_6134)) {
                            $val_6134 = 0;
                          }


                          $q1 = "select number,value from C1815 where date = '$dt'";
                          $result = mysqli_query($connect, $q1);
                          if (!$result) {
                            die("Could not successfully run the query $userQuery " . mysqli_error($connect));
                          }
                          $row = mysqli_fetch_assoc($result);
                          $num_1815 = $row['number'];
                          $val_1815 = $row['value'];
                          if (empty($num_1815)) {
                            $num_1815 = 0;
                          }
                          if (empty($val_1815)) {
                            $val_1815 = 0;
                          }




                          $q1 = "select number,value from ISUZU where date = '$dt'";
                          $result = mysqli_query($connect, $q1);
                          if (!$result) {
                            die("Could not successfully run the query $userQuery " . mysqli_error($connect));
                          }
                          $row = mysqli_fetch_assoc($result);
                          $num_isuzu = $row['number'];
                          $val_isuzu = $row['value'];
                          if (empty($num_isuzu)) {
                            $num_isuzu = 0;
                          }
                          if (empty($val_isuzu)) {
                            $val_isuzu = 0;
                          }

                        ?>
                          <tr>
                            <td style="height: 35px;"><?php echo $date; ?></td>
                            <td><?php echo $num_6134; ?></td>
                            <td><?php echo $val_6134; ?></td>
                            <td><?php echo $current_price; ?></td>
                            <td><?php echo $num_1815; ?></td>
                            <td><?php echo $val_1815; ?></td>
                            <td><?php echo $current_price; ?></td>
                            <td><?php echo $num_isuzu; ?></td>
                            <td><?php echo $val_isuzu; ?></td>
                            <td><?php echo $current_price; ?></td>
                          </tr>
                        <?php }
                        ?>
                      </table>
                    </div>
                  </div>
                </div>
              <?php } ?>


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