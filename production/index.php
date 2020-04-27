<!DOCTYPE html>
<html lang="en">

<head>

  <style>
    @import url('https://fonts.googleapis.com/css2?family=Prompt:ital,wght@0,100;0,200;0,300;1,100;1,200;1,300&display=swap');

    table.showgas tr.name td {
      padding-right: 100px;
      padding-top: 7px;
      font-size: 100%;

    }

    h1.todayprice {
      font-weight: 900;
      color: #2B3E54;
      font-size: 220%
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

    @media only screen and (min-width: 1200px) { 
   .col-xl-1 { width: 8.33% }
   .col-xl-2 { width: 16.66% }  
   .col-xl-3 { width: 25% }
   .col-xl-4 { width: 33.33% }
   .col-xl-5 { width: 41.66% }
   .col-xl-6 { width: 50% }
   .col-xl-7 { width: 58.33% }
   .col-xl-8 { width: 66/66% }
   .col-xl-9 { width: 75% }
   .col-xl-10 { width: 83.33% }
   .col-xl-11 { width: 91.66% }
   .col-xl-12 { width: 100% }
}
@media only screen and (min-width: 992px) { 
   .col-xl-1 { width: 8.33% }
   .col-xl-2 { width: 16.66% }  
   .col-xl-3 { width: 25% }
   .col-xl-4 { width: 33.33% }
   .col-xl-5 { width: 41.66% }
   .col-xl-6 { width: 50% }
   .col-xl-7 { width: 58.33% }
   .col-xl-8 { width: 66/66% }
   .col-xl-9 { width: 75% }
   .col-xl-10 { width: 83.33% }
   .col-xl-11 { width: 91.66% }
   .col-xl-12 { width: 100% }
}

@media only screen and (min-width: 768px) { 
   .col-xl-1 { width: 8.33% }
   .col-xl-2 { width: 16.66% }  
   .col-xl-3 { width: 25% }
   .col-xl-4 { width: 33.33% }
   .col-xl-5 { width: 41.66% }
   .col-xl-6 { width: 50% }
   .col-xl-7 { width: 58.33% }
   .col-xl-8 { width: 66/66% }
   .col-xl-9 { width: 75% }
   .col-xl-10 { width: 83.33% }
   .col-xl-11 { width: 91.66% }
   .col-xl-12 { width: 100% }
}
@media only screen and (min-width: 600px) { 
   .col-xl-1 { width: 8.33% }
   .col-xl-2 { width: 16.66% }  
   .col-xl-3 { width: 25% }
   .col-xl-4 { width: 33.33% }
   .col-xl-5 { width: 41.66% }
   .col-xl-6 { width: 50% }
   .col-xl-7 { width: 58.33% }
   .col-xl-8 { width: 66/66% }
   .col-xl-9 { width: 75% }
   .col-xl-10 { width: 83.33% }
   .col-xl-11 { width: 91.66% }
   .col-xl-12 { width: 100% }
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

<body class="nav-md" style="background-color: white;">
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
                  <li><a href="cost.php"><i class="fa fa-bar-chart"></i> ต้นทุน</a></li>
                  <li><a href="history.php"><i class="fa fa-history"></i> ประวัติการสั่งซื้อ</a></li>
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


              <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
              <script type="text/javascript">
                google.charts.load('current', {
                  'packages': ['bar']
                });
                google.charts.setOnLoadCallback(drawChart);

                function drawChart() {
                  var data = google.visualization.arrayToDataTable([
                    ['ยอดขาย', 'แก๊สโซฮอล์ 91', 'แก๊สโซฮอล์ 95', 'ดีเซล'],
                    ['1/04', 100, 400, 200],
                    ['2/04', 1170, 460, 250],
                    ['3/04', 660, 1120, 300],
                    ['4/04', 1030, 540, 350],
                    ['5/04', 1000, 400, 200],
                    ['6/04', 1170, 460, 250],
                    ['7/04', 660, 1120, 300],
                    ['8/04', 1030, 540, 350],
                    ['9/04', 1000, 400, 200],
                    ['10/04', 1170, 460, 250],
                    ['11/04', 660, 1120, 300],
                    ['12/04', 1030, 540, 350],
                    ['13/04', 1000, 400, 200],
                    ['14/04', 1170, 460, 250],
                    ['15/04', 1000, 400, 200],
                    ['16/04', 1170, 460, 250],
                    ['17/04', 660, 1120, 300],
                    ['18/04', 1030, 540, 350],
                    ['19/04', 1000, 400, 200],
                    ['20/04', 1170, 460, 250],
                    ['21/04', 660, 1120, 300],
                    ['22/04', 1030, 540, 350],
                    ['23/04', 1000, 400, 200],
                    ['24/04', 1170, 460, 250],
                    ['25/04', 660, 1120, 300],
                    ['26/04', 1030, 540, 350],
                    ['27/04', 1000, 400, 200],
                    ['28/04', 1170, 460, 250],
                    ['29/04', 660, 1120, 300],
                    ['30/04', 1030, 540, 350],
                    ['31/04', 1030, 540, 350]
                  ]);

                  var options = {
                    bars: 'vertical' // Required for Material Bar Charts.
                  };

                  var chart = new google.charts.Bar(document.getElementById('barchart_material'));

                  chart.draw(data, google.charts.Bar.convertOptions(options));
                }
              </script>

              <?php if ($_SESSION['user_level'] == 2) { ?>


                <div class="setfont1">
                  <h1 class="todayprice">ราคาน้ำมันวันนี้</h1>
                  <table class="showgas">
                    <tr class="name">
                      <td>Gasohol 91</td>
                      <td>Gasohol 95</td>
                      <td>Diesel</td>
                    </tr>
                    <tr class="price">
                      <td>16.68<div style="font-size: 40%;">บาท/ลิตร</div>
                      </td>
                      <td>16.95<div style="font-size: 40%;">บาท/ลิตร</div>
                      </td>
                      <td>14.72<div style="font-size: 40%;">บาท/ลิตร</div>
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
                      <td>32,000 <div style="font-size: 40%;">ลิตร</div>
                      </td>
                      <td>21,000 <div style="font-size: 40%;">ลิตร</div>
                      </td>
                      <td>11,000 <div style="font-size: 40%;">ลิตร</div>
                      </td>
                      <td>23,100 <div style="font-size: 40%;">บาท</div>
                      </td>
                    </tr>
                  </table>
                </div>
                <br>
                <div class="setfont1">
                  <h1 class="todayprice">ยอดขายประจำเดือน เมษายน</h1>
                </div>
                <br>
                <div id="barchart_material" style="width: 1450px; height: 450px;"></div>


              <?php } else { ?>
                <div class="setfont1">
                  <h1 class="todayprice">ปริมาณน้ำมันบนรถทะเบียน 6134</h1>
                  <table class="showgas">
                    <tr class="name">
                      <td>Gasohol 91</td>
                      <td>Gasohol 95</td>
                      <td>Diesel</td>
                    </tr>
                    <tr class="price">
                      <td>32,000 <div style="font-size: 40%;">ลิตร</div>
                      </td>
                      <td>21,000 <div style="font-size: 40%;">ลิตร</div>
                      </td>
                      <td>1,000 <div style="font-size: 40%;">ลิตร</div>
                      </td>
                    </tr>
                  </table>
                  <br>
                  <h1 class="todayprice">ปริมาณน้ำมันบนรถทะเบียน 1815</h1>
                  <table class="showgas">
                    <tr class="name">
                      <td>Gasohol 91</td>
                      <td>Gasohol 95</td>
                      <td>Diesel</td>
                    </tr>
                    <tr class="price">
                      <td>32,000 <div style="font-size: 40%;">ลิตร</div>
                      </td>
                      <td>21,000 <div style="font-size: 40%;">ลิตร</div>
                      </td>
                      <td>1,000 <div style="font-size: 40%;">ลิตร</div>
                      </td>
                    </tr>
                  </table>
                  <br>
                  <h1 class="todayprice">ปริมาณน้ำมันบนรถทะเบียน ISUZU</h1>
                  <table class="showgas">
                    <tr class="name">
                      <td>Gasohol 91</td>
                      <td>Gasohol 95</td>
                      <td>Diesel</td>
                    </tr>
                    <tr class="price">
                      <td>32,000 <div style="font-size: 40%;">ลิตร</div>
                      </td>
                      <td>21,000 <div style="font-size: 40%;">ลิตร</div>
                      </td>
                      <td>1,000 <div style="font-size: 40%;">ลิตร</div>
                      </td>
                    </tr>
                  </table>
                  <br>
                  <h1 class="todayprice">ตารางงานประจำวัน</h1>
                  <table class="showgas">
                    <tr class="price">
                      <td style="font-size: 65%">- กรอกข้อมูลลงตาราง</td>
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