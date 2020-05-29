<?php
require_once "connect.php";
date_default_timezone_set("Asia/Bangkok");
session_start();
$date = date("Y-m-d");
$g91 = $_GET['g91'];
$g95 = $_GET['g95'];
$de = $_GET['de'];
$time = date("h:i:sa");
$t = substr($time,8);
if($t == 'pm'){
    if((int)substr($time,0,2) != 12)
    {
        $st = explode(":",$time);
        $time_set = array($st[0]+12,$st[1],$st[2]);
        $time = implode(":",$time_set);
    }  
}
else if($t == 'am'){
    if((int)substr($time,0,2) == 12)
    {
        $st = explode(":",$time);
        $time_set = array($st[0]+12,$st[1],$st[2]);
        $time = implode(":",$time_set);
    }
}
$name = $_SESSION['user_name'];
if (empty($g91) && empty($g95) && empty($de)) {
    $_SESSION['msg'] = "กรุณากรอกข้อมูลให้ครบ";
    header("Location:stockFuel.php");
} else {
    $userQuery = "select * from gastank where gas_id = 1 and date = '$date' and substr(timestamp,9) = '$t'";
    $result = mysqli_query($connect, $userQuery);
    if (mysqli_num_rows($result) == 0) {
        $userQuery = "insert into gastank(gas_id,value,date,timestamp,name_stamp) values(1,$g91,'$date','$time','$name')";
        $result = mysqli_query($connect, $userQuery);
    } else {
        $userQuery = "update gastank set value = $g91 , name_stamp = '$name' ,timestamp = '$time' where gas_id = 1 and date = '$date' and substr(timestamp,9) = '$t'";
        $result = mysqli_query($connect, $userQuery);
    }

    $userQuery = "select * from gastank where gas_id = 2 and date = '$date' and substr(timestamp,9) = '$t'";
    $result = mysqli_query($connect, $userQuery);
    if (mysqli_num_rows($result) == 0) {
        $userQuery = "insert into gastank(gas_id,value,date,timestamp,name_stamp) values(2,$g95,'$date','$time','$name')";
        $result = mysqli_query($connect, $userQuery);
    } else {
        $userQuery = "update gastank set value = $g95 , name_stamp = '$name' ,timestamp = '$time' where gas_id = 2 and date = '$date' and substr(timestamp,9) = '$t'";
        $result = mysqli_query($connect, $userQuery);
    }

    $userQuery = "select * from gastank where gas_id = 3 and date = '$date' and substr(timestamp,9) = '$t'";
    $result = mysqli_query($connect, $userQuery);
    if (mysqli_num_rows($result) == 0) {
        $userQuery = "insert into gastank(gas_id,value,date,timestamp,name_stamp) values(3,$de,'$date','$time','$name') ";
        $result = mysqli_query($connect, $userQuery);
    } else {
        $userQuery = "update gastank set value = $de , name_stamp = '$name' ,timestamp = '$time' where gas_id = 3 and date = '$date' and substr(timestamp,9) = '$t'";
        $result = mysqli_query($connect, $userQuery);
    }
    $_SESSION['msg'] = "ดำเนินการสำเร็จ";
    header("Location:stockFuel.php");
}
