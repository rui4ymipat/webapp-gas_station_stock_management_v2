<?php
require_once "connect.php";
session_start();
date_default_timezone_set("Asia/Bangkok");
$date = date("Y-m-d");
$time = date("h:i:sa");
$name = $_SESSION['user_name'];
$car = $_GET['cars'];
$g91 = $_GET['g91'];
$g95 = $_GET['g95'];
$de = $_GET['de'];
$tran_price = $_GET['tp'];
$other_price = $_GET['other'];
$detail = $_GET['detail'];
if (empty($car)) {
    $_SESSION['msg'] = "กรุณาเลือกรถขนน้ำมัน";
    header("Location:informationGasCar.php");
} else {
    if ($car == 1) {
        $check = 'C6134';
    } else if ($car == 2) {
        $check = 'C1815';
    } else if ($car == 3) {
        $check = 'ISUZU';
    }
    $Q = "Select * from $check where date = '$date'";
    $Check_result = mysqli_query($connect , $Q);
    if(mysqli_num_rows($Check_result) == 0)
    {
        $qu = "insert into $check(other_price,detail,date,name_stamp,timestamp,G91,G95,Desel) values($other_price,'$detail','$date','$name','$time',$g91,$g95,$de)";
        $result = mysqli_query($connect,$qu);
    }
    else{ 
        $qu = "update $check set other_price = $other_price , detail = '' ";
        $result = mysqli_query($connect,$qu);
    }
    
}
