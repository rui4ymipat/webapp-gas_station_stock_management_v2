<?php 
require_once "connect.php";
session_start();
date_default_timezone_set("Asia/Bangkok");
$date = date("Y-m-d");
$yes_date = date("Y-m-d", strtotime("yesterday"));
$time = date("h:i:sa");
$name = $_SESSION['user_name'];
$g91 = $_GET['g91'];
$g95 = $_GET['g95'];
$die = $_GET['die'];
$t = substr($time, 8);
if ($t == 'pm') {
    if ((int) substr($time, 0, 2) != 12) {
        $st = explode(":", $time);
        $time_set = array($st[0] + 12, $st[1], $st[2]);
        $check_time = (int)$st[0] + 12;
        $time = implode(":", $time_set);
    }
} else if ($t == 'am') {
    if ((int) substr($time, 0, 2) == 12) {
        $st = explode(":", $time);
        $time_set = array($st[0] + 12, $st[1], $st[2]);
        $check_time = (int) $st[0] + 12;
        $time = implode(":", $time_set);
    } else {
        $st = explode(":", $time);
        $check_time = (int)$st[0];
    }
}
if ($check_time <= 24 && $check_time >= 19){
    $userQuery = "select * from buy_gas where date = '$date' and substr(time_stamp,1,2) in (19,20,21,22,23,24,1,2,3,4,5,6,7,8,9,10)";
    $result1 = mysqli_query($connect, $userQuery);
    if (mysqli_num_rows($result1) == 0) {
        $userQuery = "insert into buy_gas(date,name_stamp,time_stamp,G91,G95,Desel) values('$date','$name','$time',$g91,$g95,$die)";
        $result = mysqli_query($connect, $userQuery);       
    }
    else{
        if(!empty($g91) || $g1 >= 0)
        {
            $userQuery = "update buy_gas set G91 = $g91 ,name_stamp = '$name', time_stamp = '$time' where date = '$date' and substr(time_stamp,1,2) in (19,20,21,22,23,24,1,2,3,4,5,6,7,8,9,10)";
            $result = mysqli_query($connect, $userQuery);
        }
        if(!empty($g95) || $g95 >= 0)
        {
            $userQuery = "update buy_gas set G95 = $g95 ,name_stamp = '$name', time_stamp = '$time' where date = '$date' and substr(time_stamp,1,2) in (19,20,21,22,23,24,1,2,3,4,5,6,7,8,9,10)";
            $result = mysqli_query($connect, $userQuery);
        }
        if(!empty($die) || $die >= 0)
        {
            $userQuery = "update buy_gas set Desel = $die ,name_stamp = '$name', time_stamp = '$time' where date = '$date' and substr(time_stamp,1,2) in (19,20,21,22,23,24,1,2,3,4,5,6,7,8,9,10)";
            $result = mysqli_query($connect, $userQuery);
        }
    }
}

else if ($check_time >= 1 && $check_time <= 10){
    $userQuery = "select * from buy_gas where date = '$yes_date' and substr(time_stamp,1,2) in (19,20,21,22,23,24,1,2,3,4,5,6,7,8,9,10)";
    $result1 = mysqli_query($connect, $userQuery);
    if (mysqli_num_rows($result1) == 0) {
        $userQuery = "insert into buy_gas(date,name_stamp,time_stamp,G91,G95,Desel) values('$yes_date','$name','$time',$g91,$g95,$die)";
        $result = mysqli_query($connect, $userQuery);       
    }
    else{
        if(!empty($g91) || $g1 >= 0)
        {
            $userQuery = "update buy_gas set G91 = $g91 ,name_stamp = '$name', time_stamp = '$time' where date = '$yes_date' and substr(time_stamp,1,2) in (19,20,21,22,23,24,1,2,3,4,5,6,7,8,9,10)";
            $result = mysqli_query($connect, $userQuery);
        }
        if(!empty($g95) || $g95 >= 0)
        {
            $userQuery = "update buy_gas set G95 = $g95 ,name_stamp = '$name', time_stamp = '$time' where date = '$yes_date' and substr(time_stamp,1,2) in (19,20,21,22,23,24,1,2,3,4,5,6,7,8,9,10)";
            $result = mysqli_query($connect, $userQuery);
        }
        if(!empty($die) || $die >= 0)
        {
            $userQuery = "update buy_gas set Desel = $die ,name_stamp = '$name', time_stamp = '$time' where date = '$yes_date' and substr(time_stamp,1,2) in (19,20,21,22,23,24,1,2,3,4,5,6,7,8,9,10)";
            $result = mysqli_query($connect, $userQuery);
        }
    }
}

else if ($check_time >= 11 && $check_time <=18){
    $userQuery = "select * from buy_gas where date = '$date' and substr(time_stamp,1,2) in (11,12,13,14,15,16,17,18)";
    $result1 = mysqli_query($connect, $userQuery);
    if (mysqli_num_rows($result1) == 0) {
        $userQuery = "insert into buy_gas(date,name_stamp,time_stamp,G91,G95,Desel) values('$date','$name','$time',$g91,$g95,$die)";
        $result = mysqli_query($connect, $userQuery);       
    }
    else{
        if(!empty($g91) || $g1 >= 0)
        {
            $userQuery = "update buy_gas set G91 = $g91 ,name_stamp = '$name', time_stamp = '$time' where date = '$date' and substr(time_stamp,1,2) in (11,12,13,14,15,16,17,18)";
            $result = mysqli_query($connect, $userQuery);
        }
        if(!empty($g95) || $g95 >= 0)
        {
            $userQuery = "update buy_gas set G95 = $g95 ,name_stamp = '$name', time_stamp = '$time' where date = '$date' and substr(time_stamp,1,2) in (11,12,13,14,15,16,17,18)";
            $result = mysqli_query($connect, $userQuery);
        }
        if(!empty($die) || $die >= 0)
        {
            $userQuery = "update buy_gas set Desel = $die ,name_stamp = '$name', time_stamp = '$time' where date = '$date' and substr(time_stamp,1,2) in (11,12,13,14,15,16,17,18)";
            $result = mysqli_query($connect, $userQuery);
        }
    }
}

$_SESSION['msg'] = "ดำเนินการสำเร็จ";
header("Location:stockFuel.php");
