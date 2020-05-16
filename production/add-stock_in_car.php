<?php
require_once "connect.php";
date_default_timezone_set("Asia/Bangkok");
session_start();
$date = date("Y-m-d");
$time = date("h:i:sa");
$f_time = substr($time,8);
$name = $_SESSION['user_name'];

$g91_6134 = $_GET['6134g91'];
$g95_6134 = $_GET['6134g95'];
$de_6134 = $_GET['6134de'];

$g91_1815 = $_GET['1815g91'];
$g95_1815 = $_GET['1815g95'];
$de_1815 = $_GET['1815de'];

$g91_is = $_GET['isg91'];
$g95_is = $_GET['isg95'];
$de_is = $_GET['isde'];

$userQuery = "select * from gas6134 where date = '$date' and substr(timestamp,9) = '$f_time'";
$result = mysqli_query($connect, $userQuery);
if (mysqli_num_rows($result) == 0) {
    $userQuery = "insert into gas6134(g91,g95,diesel,date,timestamp,name_stamp) values($g91_6134,$g95_6134,$de_6134,'$date','$time','$name')";
    $result = mysqli_query($connect, $userQuery);
} else {
    $userQuery = "update gas6134 set g91 = $g91_6134, g95 = $g95_6134, diesel = $de_6134  , name_stamp = '$name' ,timestamp = '$time' where date = '$date'";
    $result = mysqli_query($connect, $userQuery);
}

$userQuery = "select * from gas1815 where date = '$date' and substr(timestamp,9) = '$f_time'";
$result = mysqli_query($connect, $userQuery);
if (mysqli_num_rows($result) == 0) {
    $userQuery = "insert into gas1815(g91,g95,diesel,date,timestamp,name_stamp) values($g91_1815,$g95_1815,$de_1815,'$date','$time','$name')";
    $result = mysqli_query($connect, $userQuery);
} else {
    $userQuery = "update gas1815 set g91 = $g91_1815, g95 = $g95_1815, diesel = $de_1815  , name_stamp = '$name' ,timestamp = '$time' where date = '$date'";
    $result = mysqli_query($connect, $userQuery);
}

$userQuery = "select * from gasisuzu where date = '$date' and substr(timestamp,9) = '$f_time'";
$result = mysqli_query($connect, $userQuery);
if (mysqli_num_rows($result) == 0) {
    $userQuery = "insert into gasisuzu(g91,g95,diesel,date,timestamp,name_stamp) values($g91_is,$g95_is,$de_is,'$date','$time','$name')";
    $result = mysqli_query($connect, $userQuery);
} else {
    $userQuery = "update gasisuzu set g91 = $g91_is, g95 = $g95_is, diesel = $de_is  , name_stamp = '$name' ,timestamp = '$time' where date = '$date'";
    $result = mysqli_query($connect, $userQuery);
}
$_SESSION['msg'] = "ดำเนินการสำเร็จ";
header("Location:stockFuel.php");