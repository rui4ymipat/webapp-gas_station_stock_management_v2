<!DOCTYPE html>
<html lang="en">

<head>

  <style>
    @import url('https://fonts.googleapis.com/css2?family=Prompt:ital,wght@0,100;0,200;0,300;1,100;1,200;1,300&display=swap');

    table.showgas tr.name td {
      padding-right: 100px;
      padding-top: 7px;
      font-size: 130%;

    }

    h1.todayprice {
      font-weight: 900;
      color: #2B3E54;
      font-size: 180%
    }

    .setfont1,
    .menu_section,
    .profile_info,
    .site_title {
      font-family: 'Prompt', sans-serif;
    }

    table.showgas tr.price td {
      padding-right: 100px;
      font-size: 80%;
      color: #73879C;
    }

    .stock .setline {
      display: inline-table;
    }

    .stock .setfont1 {
      display: inline-table;
    }

    .outer-wrapper {
      display: inline-block;
      margin: 5px 15px;
      padding: 25px 15px;
      background: #eee;
      min-width: 50px;
    }

    .column-wrapper {
      height: 200px;
      width: 20px;
      background: #CFD8DC;
      transform: rotate(180deg);
      margin: 0 auto;
    }

    .column , .column2 , .column3 {

      width: 20px;
      height: 0%;
      background: #90A4AE;

    }

    .percentage1,
    .percentage2,
    .percentage3, .value {
      margin-top: 10px;
      padding: 5px 10px;
      color: #FFF;
      background: #263238;
      position: relative;
      border-radius: 4px;
      text-align: center;
    }

    .value {
      background: #7986CB;
    }
  </style>
  <?php
  session_start();

  if (empty($_SESSION['user_level'])) {
    $_SESSION['error'] = "Username หรือ Password ผิด";
    header("Location:login.php");
  }
  require_once "connect.php";
  $userQuery = "select value from gastank where gas_id = 1 order by date DESC limit 1";
  $result3 = mysqli_query($connect, $userQuery);
  $row3 = mysqli_fetch_assoc($result3);
  $s = ($row3['value'] / 20000) * 100;
  ?>

  <script type="text/javascript">
    setInterval(function() {
      var randPercent = <?php echo $s; ?>;
      //Generic column color
      var color = '#90A4AE';

      if (randPercent >= 90) {
        color = '#00E676';
      } else if (randPercent < 90 && randPercent >= 60) {
        color = '#81C784';
      } else if (randPercent < 60 && randPercent >= 40) {
        color = '#FFEB3B';
      } else if (randPercent < 40 && randPercent >= 10) {
        color = '#FF9800';
      } else if (randPercent < 10 && randPercent >= 0) {
        color = '#FF3D00';
      }

      $('.column').css({
        background: color
      });

      $('.column').animate({
        height: randPercent + '%',
      });

      $('.percentage1').text(randPercent + '%');

    });
  </script>
  <?php
  require_once "connect.php";
  $userQuery = "select value from gastank where gas_id = 2 order by date DESC limit 1";
  $result3 = mysqli_query($connect, $userQuery);
  $row3 = mysqli_fetch_assoc($result3);
  $s = ($row3['value'] / 20000) * 100;
  ?>

  <script type="text/javascript">
    setInterval(function() {
      var randPercent2 = <?php echo $s; ?>;
      //Generic column color
      var color = '#90A4AE';

      if (randPercent2 >= 90) {
        color = '#00E676';
      } else if (randPercent2 < 90 && randPercent2 >= 60) {
        color = '#81C784';
      } else if (randPercent2 < 60 && randPercent2 >= 40) {
        color = '#FFEB3B';
      } else if (randPercent2 < 40 && randPercent2 >= 10) {
        color = '#FF9800';
      } else if (randPercent2 < 10 && randPercent2 >= 0) {
        color = '#FF3D00';
      }

      $('.column2').css({
        background: color
      });

      $('.column2').animate({
        height: randPercent2 + '%',
      });

      $('.percentage2').text(randPercent2 + '%');

    });
  </script>
  <?php
  require_once "connect.php";
  $userQuery = "select value from gastank where gas_id = 3 order by date DESC limit 1";
  $result3 = mysqli_query($connect, $userQuery);
  $row3 = mysqli_fetch_assoc($result3);
  $s = ($row3['value'] / 20000) * 100;
  ?>
  <script type="text/javascript">
    setInterval(function() {
      var randPercent3 = <?php echo $s; ?>;
      //Generic column color
      var color = '#90A4AE';

      if (randPercent3 >= 90) {
        color = '#00E676';
      } else if (randPercent3 < 90 && randPercent3 >= 60) {
        color = '#81C784';
      } else if (randPercent3 < 60 && randPercent3 >= 40) {
        color = '#FFEB3B';
      } else if (randPercent3 < 40 && randPercent3 >= 10) {
        color = '#FF9800';
      } else if (randPercent3 < 10 && randPercent3 >= 0) {
        color = '#FF3D00';
      }

      $('.column3').css({
        background: color
      });

      $('.column3').animate({
        height: randPercent3 + '%',
      });

      $('.percentage3').text(randPercent3 + '%');

    });
  </script>
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
  <script src="https://www.koolchart.com/demo/LicenseKey/KoolChartLicense.js"></script>
  <script src="https://www.koolchart.com/demo/KoolChart/JS/KoolChart.js"></script>
  <link rel="stylesheet" href="https://www.koolchart.com/demo/KoolChart/Assets/Css/KoolChart.css" />
</head>


<body class="nav-md" style="background-color: white;">
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col" style="min-height: 275%;">
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

              <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
              <script type="text/javascript">
                google.charts.load('current', {
                  'packages': ['corechart']
                });
                google.charts.setOnLoadCallback(drawChart);

                function drawChart() {
                  var data = google.visualization.arrayToDataTable([
                    ['ยอดขาย', 'แก๊สโซฮอล์ 91'],
                    <?php
                    $userQuery = "select date from gastank group by date order by date DESC limit 15";
                    $result1 = mysqli_query($connect, $userQuery);
                    $date = [];
                    while ($lop = mysqli_fetch_assoc($result1)) {
                      $date[] = $lop['date'];
                    }
                    for ($i = 0; $i < count($date); $i++) {
                      $da = $date[$i];
                      $Tdate = explode("-", $date[$i]);
                      $Sdate = array($Tdate[2], $Tdate[1]);
                      $date2  = implode("/", $Sdate);
                      $userQuery = "select (select value from gastank where date < '$da' and substr(timestamp,1,2) in (19,20,21,22,23,24,1,2,3,4,5,6,7,8,9,10) and gas_id = 1 limit 1)-value as dif from gastank where date = '$da' and substr(timestamp,1,2) in (11,12,13,14,15,16,17,18) and gas_id = 1";
                      $result = mysqli_query($connect, $userQuery);
                      $row = mysqli_fetch_assoc($result);
                      $p1 = $row['dif'];

                      $userQuery = "select * from buy_gas where date = '$da'";
                      $result3 = mysqli_query($connect, $userQuery);
                      if (mysqli_num_rows($result3) == 0) {
                        $b91 = 0;
                        $b95 = 0;
                        $bdie = 0;
                      } else {
                        $row3 = mysqli_fetch_assoc($result3);
                        $b91 = $row3['G91'];
                        $b95 = $row3['G95'];
                        $bdie = $row3['Desel'];
                      }

                      $userQuery = "select (select value from gastank where date = '$da' and substr(timestamp,1,2) in (11,12,13,14,15,16,17,18) and gas_id = 1 limit 1)-value as dif from gastank where date = '$da' and substr(timestamp,1,2) in (19,20,21,22,23,24,1,2,3,4,5,6,7,8,9,10) and gas_id = 1";
                      $result = mysqli_query($connect, $userQuery);
                      $row = mysqli_fetch_assoc($result);
                      $p2 = $row['dif'] + $b91;
                      if ($i == count($date) - 1) {
                        echo "['$date2',", $p1 + $p2, "]";
                      } else {
                        echo "['$date2',", $p1 + $p2, "],";
                      }
                    }
                    ?>
                  ]);

                  var options = {

                    curveType: 'function',
                    legend: {
                      position: 'none'
                    }
                  };

                  var chart = new google.visualization.LineChart(document.getElementById('G91'));

                  chart.draw(data, options);
                }
              </script>

              <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
              <script type="text/javascript">
                google.charts.load('current', {
                  'packages': ['corechart']
                });
                google.charts.setOnLoadCallback(drawChart);

                function drawChart() {
                  var data = google.visualization.arrayToDataTable([
                    ['ยอดขาย', 'แก๊สโซฮอล์ 95'],
                    <?php
                    $userQuery = "select date from gastank group by date order by date DESC limit 15";
                    $result1 = mysqli_query($connect, $userQuery);
                    $date = [];
                    while ($lop = mysqli_fetch_assoc($result1)) {
                      $date[] = $lop['date'];
                    }
                    for ($i = 0; $i < count($date); $i++) {
                      $da = $date[$i];
                      $Tdate = explode("-", $date[$i]);
                      $Sdate = array($Tdate[2], $Tdate[1]);
                      $date2  = implode("/", $Sdate);
                      $userQuery = "select (select value from gastank where date < '$da' and substr(timestamp,1,2) in (19,20,21,22,23,24,1,2,3,4,5,6,7,8,9,10) and gas_id = 2 limit 1)-value as dif from gastank where date = '$da' and substr(timestamp,1,2) in (11,12,13,14,15,16,17,18) and gas_id = 2";
                      $result = mysqli_query($connect, $userQuery);
                      $row = mysqli_fetch_assoc($result);
                      $p1 = $row['dif'];

                      $userQuery = "select * from buy_gas where date = '$da'";
                      $result3 = mysqli_query($connect, $userQuery);
                      if (mysqli_num_rows($result3) == 0) {
                        $b91 = 0;
                        $b95 = 0;
                        $bdie = 0;
                      } else {
                        $row3 = mysqli_fetch_assoc($result3);
                        $b91 = $row3['G91'];
                        $b95 = $row3['G95'];
                        $bdie = $row3['Desel'];
                      }

                      $userQuery = "select (select value from gastank where date = '$da' and substr(timestamp,1,2) in (11,12,13,14,15,16,17,18) and gas_id = 2 limit 1)-value as dif from gastank where date = '$da' and substr(timestamp,1,2) in (19,20,21,22,23,24,1,2,3,4,5,6,7,8,9,10) and gas_id = 2";
                      $result = mysqli_query($connect, $userQuery);
                      $row = mysqli_fetch_assoc($result);
                      $p2 = $row['dif'] + $b95;
                      if ($i == count($date) - 1) {
                        echo "['$date2',", $p1 + $p2, "]";
                      } else {
                        echo "['$date2',", $p1 + $p2, "],";
                      }
                    }
                    ?>
                  ]);

                  var options = {

                    curveType: 'function',

                    legend: {
                      position: 'none'
                    }
                  };

                  var chart = new google.visualization.LineChart(document.getElementById('G95'));

                  chart.draw(data, options);
                }
              </script>

              <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
              <script type="text/javascript">
                google.charts.load('current', {
                  'packages': ['corechart']
                });
                google.charts.setOnLoadCallback(drawChart);

                function drawChart() {
                  var data = google.visualization.arrayToDataTable([
                    ['ยอดขาย', 'ดีเซล'],
                    <?php
                    $userQuery = "select date from gastank group by date order by date DESC limit 15";
                    $result1 = mysqli_query($connect, $userQuery);
                    $date = [];
                    while ($lop = mysqli_fetch_assoc($result1)) {
                      $date[] = $lop['date'];
                    }
                    for ($i = 0; $i < count($date); $i++) {
                      $da = $date[$i];
                      $Tdate = explode("-", $date[$i]);
                      $Sdate = array($Tdate[2], $Tdate[1]);
                      $date2  = implode("/", $Sdate);
                      $userQuery = "select (select value from gastank where date < '$da' and substr(timestamp,1,2) in (19,20,21,22,23,24,1,2,3,4,5,6,7,8,9,10) and gas_id = 3 limit 1)-value as dif from gastank where date = '$da' and substr(timestamp,1,2) in (11,12,13,14,15,16,17,18) and gas_id = 3";
                      $result = mysqli_query($connect, $userQuery);
                      $row = mysqli_fetch_assoc($result);
                      $p1 = $row['dif'];

                      $userQuery = "select * from buy_gas where date = '$da'";
                      $result3 = mysqli_query($connect, $userQuery);
                      if (mysqli_num_rows($result3) == 0) {
                        $b91 = 0;
                        $b95 = 0;
                        $bdie = 0;
                      } else {
                        $row3 = mysqli_fetch_assoc($result3);
                        $b91 = $row3['G91'];
                        $b95 = $row3['G95'];
                        $bdie = $row3['Desel'];
                      }

                      $userQuery = "select (select value from gastank where date = '$da' and substr(timestamp,1,2) in (11,12,13,14,15,16,17,18) and gas_id = 3 limit 1)-value as dif from gastank where date = '$da' and substr(timestamp,1,2) in (19,20,21,22,23,24,1,2,3,4,5,6,7,8,9,10) and gas_id = 3";
                      $result = mysqli_query($connect, $userQuery);
                      $row = mysqli_fetch_assoc($result);
                      $p2 = $row['dif'] + $bdie;
                      if ($i == count($date) - 1) {
                        echo "['$date2',", $p1 + $p2, "]";
                      } else {
                        echo "['$date2',", $p1 + $p2, "],";
                      }
                    }
                    ?>
                  ]);

                  var options = {

                    curveType: 'function',

                    legend: {
                      position: 'none'
                    }
                  };

                  var chart = new google.visualization.LineChart(document.getElementById('De'));

                  chart.draw(data, options);
                }
              </script>


              <?php if ($_SESSION['user_level'] == 2 || $_SESSION['user_level'] == 3) { ?>
                <?php
                require_once "connect.php";
                date_default_timezone_set("Asia/Bangkok");
                $date = date("Y-m-d");
                $userQuery = "select sell_price from today_price where date = '$date' order by gas_id";
                $result = mysqli_query($connect, $userQuery);
                if (mysqli_num_rows($result) == 0) {
                  for ($i = 0; $i < 3; $i++) {
                    $data_sell[] = 0;
                  }
                } else {
                  while ($row = mysqli_fetch_assoc($result)) {
                    $data_sell[] = $row['sell_price'];
                  }
                }
                ?>

                <div class="setfont1">
                  <h1 class="todayprice">ราคาน้ำมันหน้าปั้ม</h1>
                  <table class="showgas">
                    <tr class="name">
                      <td><img src="https://crmmobile.bangchak.co.th/icon/E20evoWeb1-120.jpg"></td>
                      <td><img src="https://www.bangchak.co.th/img/logo-oil/logo-gasohol-95.png" alt="g95"></td>
                      <td><img src="https://www.bangchak.co.th/img/logo-oil/logo-Hi-diesel.png" alt="desel"></td>
                    </tr>
                    <tr class="price">
                      <td><?php echo number_format($data_sell[0], 2); ?><div style="font-size: 40%;">บาท/ลิตร</div>
                      </td>
                      <td><?php echo number_format($data_sell[1], 2); ?><div style="font-size: 40%;">บาท/ลิตร</div>
                      </td>
                      <td><?php echo number_format($data_sell[2], 2); ?><div style="font-size: 40%;">บาท/ลิตร</div>
                      </td>
                    </tr>
                  </table>
                </div>
                <br>
                <div class="setfont1">
                  <?php
                  require_once "connect.php";
                  date_default_timezone_set("Asia/Bangkok");
                  $date = date("Y-m-d");
                  $userQuery = "select current_price from today_price where date = '$date' order by gas_id";
                  $result = mysqli_query($connect, $userQuery);
                  if (mysqli_num_rows($result) == 0) {
                    for ($i = 0; $i < 3; $i++) {
                      $data_current[] = 0;
                    }
                  } else {
                    while ($row = mysqli_fetch_assoc($result)) {
                      $data_current[] = $row['current_price'];
                    }
                  }
                  ?>
                  <h1 class="todayprice">ราคาน้ำมันกทม.</h1>
                  <table class="showgas">
                    <tr class="name">
                      <td><img src="https://crmmobile.bangchak.co.th/icon/E20evoWeb1-120.jpg"></td>
                      <td><img src="https://www.bangchak.co.th/img/logo-oil/logo-gasohol-95.png" alt="g95"></td>
                      <td><img src="https://www.bangchak.co.th/img/logo-oil/logo-Hi-diesel.png" alt="desel"></td>
                    </tr>
                    <tr class="price">
                      <td><?php echo number_format($data_current[0], 2); ?><div style="font-size: 40%;">บาท/ลิตร</div>
                      </td>
                      <td><?php echo number_format($data_current[1], 2); ?><div style="font-size: 40%;">บาท/ลิตร</div>
                      </td>
                      <td><?php echo number_format($data_current[2], 2); ?><div style="font-size: 40%;">บาท/ลิตร</div>
                      </td>
                    </tr>
                  </table>
                </div>
                <br>
                <div class="setfont1">
                  <h1 class="todayprice">ประวัติการสั่งซื้อ</h1>
                  <table class="showgas">
                    <tr class="name">
                      <td>บัญชี 1</td>
                      <td>บัญชี 2</td>
                      <td>บัญชี 3</td>
                      <td>ส่วนลดจากบริษัท</td>
                    </tr>
                    <tr class="price">
                      <td><?php
                          date_default_timezone_set("Asia/Bangkok");
                          $date_start = date("Y-m-01");
                          $date_end = date("Y-m-31");
                          $userQuery = "select sum(value) as sum from history where account = 1 and date between '$date_start' and '$date_end'";
                          $result = mysqli_query($connect, $userQuery);
                          $row = mysqli_fetch_assoc($result);
                          echo number_format($row['sum']) ?> <div style="font-size: 40%;">ลิตร</div>
                      </td>
                      <td>
                        <?php $userQuery = "select sum(value) as sum from history where account = 2 and date between '$date_start' and '$date_end'";
                        $result = mysqli_query($connect, $userQuery);
                        $row = mysqli_fetch_assoc($result);
                        echo number_format($row['sum']) ?> <div style="font-size: 40%;">ลิตร</div>
                      </td>
                      <td><?php $userQuery = "select sum(value) as sum from history where account = 3 and date between '$date_start' and '$date_end'";
                          $result = mysqli_query($connect, $userQuery);
                          $row = mysqli_fetch_assoc($result);
                          echo number_format($row['sum']) ?> <div style="font-size: 40%;">ลิตร</div>
                      </td>
                      <td><?php $userQuery = "select sum(value) as sum from history where account = 2 and date between '$date_start' and '$date_end'";
                          $result = mysqli_query($connect, $userQuery);
                          $row = mysqli_fetch_assoc($result);
                          if ($row['sum'] <= 40000) {
                            echo number_format($row['sum'] * 0.7, 2);
                          } else {
                            echo number_format(28000 + ($row['sum']-40000), 2);
                          } ?> <div style="font-size: 40%;">บาท</div>
                      </td>
                    </tr>
                  </table>
                </div>
                <br>
                <h1 class="todayprice">สต็อกน้ำมัน</h1>
                <table>
                  <tr>
                    <td>
                      <div class="setfont1">
                        <?php
                        require_once "connect.php";
                        $userQuery = "select value from gastank where gas_id = 1 order by date DESC limit 1";
                        $result3 = mysqli_query($connect, $userQuery);
                        $row3 = mysqli_fetch_assoc($result3);
                        $v = $row3['value'];
                        $s = ($row3['value'] / 20000) * 100;
                        ?>
                        <h1 style="font-size: 170%;"><?php echo "G91 $v ลิตร($s%)";  ?></h1>
                      </div>
                    </td>
                    <td style="padding-left: 100px;">
                      <?php
                      require_once "connect.php";
                      $userQuery = "select value from gastank where gas_id = 2 order by date DESC limit 1";
                      $result3 = mysqli_query($connect, $userQuery);
                      $row3 = mysqli_fetch_assoc($result3);
                      $v = $row3['value'];
                      $s = ($row3['value'] / 20000) * 100;
                      ?>
                      <div class="setfont1">
                        <h1 style="font-size: 170%;"><?php echo "G95 $v ลิตร($s%)";  ?></h1>
                      </div>
                    </td>
                    <td style="padding-left: 100px;">
                      <?php
                      require_once "connect.php";
                      $userQuery = "select value from gastank where gas_id = 3 order by date DESC limit 1";
                      $result3 = mysqli_query($connect, $userQuery);
                      $row3 = mysqli_fetch_assoc($result3);
                      $v = $row3['value'];
                      $s = ($row3['value'] / 20000) * 100;
                      ?>
                      <div class="setfont1">
                        <h1 style="font-size: 170%;"><?php echo "Diesel $v ลิตร($s%)";  ?></h1>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="outer-wrapper">
                        <div class="column-wrapper">
                          <div class="column"></div>
                        </div>
                        <div class="percentage1">--</div>
                      </div>
                    </td>
                    <td style="padding-left: 100px;">
                      <div class="outer-wrapper">
                        <div class="column-wrapper">
                          <div class="column2"></div>
                        </div>
                        <div class="percentage2">--</div>
                      </div>
                    </td>
                    <td style="padding-left: 100px;">
                      <div class="outer-wrapper">
                        <div class="column-wrapper">
                          <div class="column3"></div>
                        </div>
                        <div class="percentage3">--</div>
                      </div>
                    </td>
                  </tr>
                </table>

                <br>
                <div class="setfont1">
                  <h1 class="todayprice">ยอดขายย้อนหลัง 15 วัน</h1>

                  <br>
                  <h1 style="font-size: 150%; padding-left: 26%;">แก็สโซฮอล์ 91</h1>
                  <div id="G91" style="width: 1000px; height: 400px;"></div>
                  <br>
                  <h1 style="font-size: 150%;padding-left: 26%;">แก็สโซฮอล์ 95</h1>
                  <div id="G95" style="width: 1000px; height: 400px;"></div>
                  <br>
                  <h1 style="font-size: 150%; padding-left: 29%;">ดีเซล</h1>
                  <div id="De" style="width: 1000px; height: 400px;"></div>
                </div>

              <?php } else { ?>
                <div class="setfont1">
                  <?php
                  require_once "connect.php";
                  date_default_timezone_set("Asia/Bangkok");
                  $date = date("Y-m-d");
                  $userQuery = "select * from gas6134 where date = '$date'";
                  $result = mysqli_query($connect, $userQuery);
                  if (mysqli_num_rows($result) == 0) {
                    $g91 = 0;
                    $g95 = 0;
                    $die = 0;
                  } else {
                    $row = mysqli_fetch_assoc($result);
                    $g91 = $row['g91'];
                    $g95 = $row['g95'];
                    $die = $row['diesel'];
                  }
                  ?>
                  <h1 class="todayprice">ปริมาณน้ำมันบนรถทะเบียน 6134</h1>
                  <table class="showgas">
                    <tr class="name">
                      <td><img src="https://crmmobile.bangchak.co.th/icon/E20evoWeb1-120.jpg"></td>
                      <td><img src="https://www.bangchak.co.th/img/logo-oil/logo-gasohol-95.png" alt="g95"></td>
                      <td><img src="https://www.bangchak.co.th/img/logo-oil/logo-Hi-diesel.png" alt="desel"></td>
                    </tr>
                    <tr class="price">
                      <td><?php echo number_format($g91)  ?> <div style="font-size: 40%;">ลิตร</div>
                      </td>
                      <td><?php echo number_format($g95)  ?> <div style="font-size: 40%;">ลิตร</div>
                      </td>
                      <td><?php echo number_format($die)  ?> <div style="font-size: 40%;">ลิตร</div>
                      </td>
                    </tr>
                  </table>
                  <br>
                  <?php
                  date_default_timezone_set("Asia/Bangkok");
                  $date = date("Y-m-d");
                  $userQuery = "select * from gas1815 where date = '$date'";
                  $result = mysqli_query($connect, $userQuery);
                  if (mysqli_num_rows($result) == 0) {
                    $g91 = 0;
                    $g95 = 0;
                    $die = 0;
                  } else {
                    $row = mysqli_fetch_assoc($result);
                    $g91 = $row['g91'];
                    $g95 = $row['g95'];
                    $die = $row['diesel'];
                  }
                  ?>
                  <h1 class="todayprice">ปริมาณน้ำมันบนรถทะเบียน 1815</h1>
                  <table class="showgas">
                    <tr class="name">
                      <td><img src="https://crmmobile.bangchak.co.th/icon/E20evoWeb1-120.jpg"></td>
                      <td><img src="https://www.bangchak.co.th/img/logo-oil/logo-gasohol-95.png" alt="g95"></td>
                      <td><img src="https://www.bangchak.co.th/img/logo-oil/logo-Hi-diesel.png" alt="desel"></td>
                    </tr>
                    <tr class="price">
                      <td><?php echo number_format($g91)  ?> <div style="font-size: 40%;">ลิตร</div>
                      </td>
                      <td><?php echo number_format($g95)  ?> <div style="font-size: 40%;">ลิตร</div>
                      </td>
                      <td><?php echo number_format($die)  ?> <div style="font-size: 40%;">ลิตร</div>
                      </td>
                    </tr>
                  </table>
                  <br>
                  <?php
                  date_default_timezone_set("Asia/Bangkok");
                  $date = date("Y-m-d");
                  $userQuery = "select * from gasisuzu where date = '$date'";
                  $result = mysqli_query($connect, $userQuery);
                  if (mysqli_num_rows($result) == 0) {
                    $g91 = 0;
                    $g95 = 0;
                    $die = 0;
                  } else {
                    $row = mysqli_fetch_assoc($result);
                    $g91 = $row['g91'];
                    $g95 = $row['g95'];
                    $die = $row['diesel'];
                  }
                  ?>
                  <h1 class="todayprice">ปริมาณน้ำมันบนรถทะเบียน ISUZU</h1>
                  <table class="showgas">
                    <tr class="name">
                      <td><img src="https://crmmobile.bangchak.co.th/icon/E20evoWeb1-120.jpg"></td>
                      <td><img src="https://www.bangchak.co.th/img/logo-oil/logo-gasohol-95.png" alt="g95"></td>
                      <td><img src="https://www.bangchak.co.th/img/logo-oil/logo-Hi-diesel.png" alt="desel"></td>
                    </tr>
                    <tr class="price">
                      <td><?php echo number_format($g91)  ?> <div style="font-size: 40%;">ลิตร</div>
                      </td>
                      <td><?php echo number_format($g95)  ?> <div style="font-size: 40%;">ลิตร</div>
                      </td>
                      <td><?php echo number_format($die)  ?> <div style="font-size: 40%;">ลิตร</div>
                      </td>
                    </tr>
                  </table>
                  <br>
                  <h1 class="todayprice">ตารางงานประจำวัน</h1>
                  <?php require_once "connect.php";
                  $userQuery = "select text from text where id = 1";
                  $result3 = mysqli_query($connect, $userQuery);
                  $row3 = mysqli_fetch_assoc($result3);    ?>
                  <table class="showgas">
                    <tr class="price">
                      <td style="font-size: 65%"><?php echo nl2br($row3['text']); ?></td>
                    </tr>
                  </table>


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