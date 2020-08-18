<?php
require_once "connect.php";
session_start();
date_default_timezone_set("Asia/Bangkok");
$date = $_GET['date'];
$time = date("h:i:sa");
$name = $_SESSION['user_name'];
$car = $_GET['cars'];
$g91 = $_GET['g91'];
$g95 = $_GET['g95'];
$de = $_GET['de'];
$tran_price = $_GET['tp'];
$other_price = $_GET['other'];
$detail = $_GET['detail'];

if ($car == 1) {
    $check = 'C6134';
} else if ($car == 2) {
    $check = 'C1815';
} else if ($car == 3) {
    $check = 'ISUZU';
}
$qu = "update $check set cost = $tran_price, other_price = $other_price , detail = '$detail' ,name_stamp = '$name',time_stamp = '$time',G91 =$g91 , G95 =$g95 , Desel =$de where date = '$date'";
$result = mysqli_query($connect, $qu);
if (!$result) {
    die("Could not successfully run the query $userQuery " . mysqli_error($connect));
}
header("Location:informationGasCar.php");
