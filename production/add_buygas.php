<?php 
require_once "connect.php";
session_start();
date_default_timezone_set("Asia/Bangkok");
$date = date("Y-m-d");
$time = date("h:i:sa");
$name = $_SESSION['user_name'];
$g91 = $_GET['g91'];
$g95 = $_GET['g95'];
$die = $_GET['die'];

$userQuery = "select * from gastank where gas_id = 1 and date = '$date'";
$result = mysqli_query($connect, $userQuery);
if (mysqli_num_rows($result) == 0) {
    $userQuery = "insert into gastank(gas_id,value,date,timestamp,name_stamp) values(1,0,'$date','$time','$name')";
    $result = mysqli_query($connect, $userQuery);
}

$userQuery = "select * from gastank where gas_id = 2 and date = '$date' ";
$result = mysqli_query($connect, $userQuery);
if (mysqli_num_rows($result) == 0) {
    $userQuery = "insert into gastank(gas_id,value,date,timestamp,name_stamp) values(2,0,'$date','$time','$name')";
    $result = mysqli_query($connect, $userQuery);
} 

$userQuery = "select * from gastank where gas_id = 3 and date = '$date' ";
$result = mysqli_query($connect, $userQuery);
if (mysqli_num_rows($result) == 0) {
    $userQuery = "insert into gastank(gas_id,value,date,timestamp,name_stamp) values(3,0,'$date','$time','$name') ";
    $result = mysqli_query($connect, $userQuery);
} 
$userQuery = "select * from buy_gas where date = '$date'";
$result1 = mysqli_query($connect, $userQuery);
if (mysqli_num_rows($result1) == 0) {
    $userQuery = "insert into buy_gas(date,name_stamp,time_stamp,G91,G95,Desel) values('$date','$name','$time',$g91,$g95,$die)";
    $result = mysqli_query($connect, $userQuery);       
}
else{
    if(!empty($g91) || $g1 >= 0)
    {
        $userQuery = "update buy_gas set G91 = $g91 ,name_stamp = '$name', time_stamp = '$time' where date = '$date'";
        $result = mysqli_query($connect, $userQuery);
    }
    if(!empty($g95) || $g95 >= 0)
    {
        $userQuery = "update buy_gas set G95 = $g95 ,name_stamp = '$name', time_stamp = '$time' where date = '$date'";
        $result = mysqli_query($connect, $userQuery);
    }
    if(!empty($die) || $die >= 0)
    {
        $userQuery = "update buy_gas set Desel = $die ,name_stamp = '$name', time_stamp = '$time' where date = '$date'";
        $result = mysqli_query($connect, $userQuery);
    }
}
$_SESSION['msg'] = "ดำเนินการสำเร็จ";
header("Location:stockFuel.php");
