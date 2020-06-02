<?php
require_once "connect.php";
date_default_timezone_set("Asia/Bangkok");
session_start();
$date = date("Y-m-d");
$yes_date = date("Y-m-d", strtotime("yesterday"));
$g91 = $_GET['g91'];
$g95 = $_GET['g95'];
$de = $_GET['de'];
$time = date("h:i:sa");
$t = substr($time, 8);
if ($t == 'pm') {
    if ((int) substr($time, 0, 2) != 12) {
        $st = explode(":", $time);
        $time_set = array($st[0] + 12, $st[1], $st[2]);
        $check_time = $st[0] + 12;
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
        $check_time = $st[0];
    }
}
$name = $_SESSION['user_name'];
if (empty($g91) && empty($g95) && empty($de)) {
    $_SESSION['-msg'] = "กรุณากรอกข้อมูลให้ครบ";
    header("Location:stockFuel.php");
} else {
    if ($check_time <= 24 && $check_time >= 19)
    {
        $g91 = 1;
        $userQuery = "select * from gastank where gas_id = 1 and date = '$date' and substr(timestamp,1,2) in (19,20,21,22,23,24,1,2,3,4,5,6,7,8,9,10)";
            $result = mysqli_query($connect, $userQuery);
            if (mysqli_num_rows($result) == 0) {
                $userQuery = "insert into gastank(gas_id,value,date,timestamp,name_stamp) values(1,$g91,'$date','$time','$name')";
                $result = mysqli_query($connect, $userQuery);
            } else {
                $userQuery = "update gastank set value = $g91 , name_stamp = '$name' ,timestamp = '$time' where gas_id = 1 and date = '$date' and substr(timestamp,1,2) in (19,20,21,22,23,24,1,2,3,4,5,6,7,8,9,10)";
                $result = mysqli_query($connect, $userQuery);
            }

            $userQuery = "select * from gastank where gas_id = 2 and date = '$date' and substr(timestamp,1,2) in (19,20,21,22,23,24,1,2,3,4,5,6,7,8,9,10)";
            $result = mysqli_query($connect, $userQuery);
            if (mysqli_num_rows($result) == 0) {
                $userQuery = "insert into gastank(gas_id,value,date,timestamp,name_stamp) values(2,$g95,'$date','$time','$name')";
                $result = mysqli_query($connect, $userQuery);
            } else {
                $userQuery = "update gastank set value = $g95 , name_stamp = '$name' ,timestamp = '$time' where gas_id = 2 and date = '$date' and substr(timestamp,1,2) in (19,20,21,22,23,24,1,2,3,4,5,6,7,8,9,10)";
                $result = mysqli_query($connect, $userQuery);
            }

            $userQuery = "select * from gastank where gas_id = 3 and date = '$date' and substr(timestamp,1,2) in (19,20,21,22,23,24,1,2,3,4,5,6,7,8,9,10)";
            $result = mysqli_query($connect, $userQuery);
            if (mysqli_num_rows($result) == 0) {
                $userQuery = "insert into gastank(gas_id,value,date,timestamp,name_stamp) values(3,$de,'$date','$time','$name')";
                $result = mysqli_query($connect, $userQuery);
            } else {
                $userQuery = "update gastank set value = $de , name_stamp = '$name' ,timestamp = '$time' where gas_id = 3 and date = '$date' and substr(timestamp,1,2) in (19,20,21,22,23,24,1,2,3,4,5,6,7,8,9,10)";
                $result = mysqli_query($connect, $userQuery);
            }
    }
    if ( $check_time >= 1 && $check_time <= 10) {
            $g91 = 2 ;
            $userQuery = "select * from gastank where gas_id = 1 and date = '$yes_date' and substr(timestamp,1,2) in (19,20,21,22,23,24,1,2,3,4,5,6,7,8,9,10)";
            $result = mysqli_query($connect, $userQuery);
            if (mysqli_num_rows($result) == 0) {
                $userQuery = "insert into gastank(gas_id,value,date,timestamp,name_stamp) values(1,$g91,'$date','$time','$name')";
                $result = mysqli_query($connect, $userQuery);
            } else {
                $userQuery = "update gastank set value = $g91 , name_stamp = '$name' ,timestamp = '$time' where gas_id = 1 and date = '$yes_date' and substr(timestamp,1,2) in (19,20,21,22,23,24,1,2,3,4,5,6,7,8,9,10)";
                $result = mysqli_query($connect, $userQuery);
            }

            $userQuery = "select * from gastank where gas_id = 2 and date = '$yes_date' and substr(timestamp,1,2) in (19,20,21,22,23,24,1,2,3,4,5,6,7,8,9,10)";
            $result = mysqli_query($connect, $userQuery);
            if (mysqli_num_rows($result) == 0) {
                $userQuery = "insert into gastank(gas_id,value,date,timestamp,name_stamp) values(2,$g95,'$date','$time','$name')";
                $result = mysqli_query($connect, $userQuery);
            } else {
                $userQuery = "update gastank set value = $g95 , name_stamp = '$name' ,timestamp = '$time' where gas_id = 2 and date = '$yes_date' and substr(timestamp,1,2) in (19,20,21,22,23,24,1,2,3,4,5,6,7,8,9,10)";
                $result = mysqli_query($connect, $userQuery);
            }

            $userQuery = "select * from gastank where gas_id = 3 and date = '$yes_date' and substr(timestamp,1,2) in (19,20,21,22,23,24,1,2,3,4,5,6,7,8,9,10)";
            $result = mysqli_query($connect, $userQuery);
            if (mysqli_num_rows($result) == 0) {
                $userQuery = "insert into gastank(gas_id,value,date,timestamp,name_stamp) values(3,$de,'$date','$time','$name')";
                $result = mysqli_query($connect, $userQuery);
            } else {
                $userQuery = "update gastank set value = $de , name_stamp = '$name' ,timestamp = '$time' where gas_id = 3 and date = '$yes_date' and substr(timestamp,1,2) in (19,20,21,22,23,24,1,2,3,4,5,6,7,8,9,10)";
                $result = mysqli_query($connect, $userQuery);
            }
        
    } else {

        $g91 = 3 ;
            $userQuery = "select * from gastank where gas_id = 1 and date = '$date' and substr(timestamp,1,2) in (11,12,13,14,15,16,17,18)";
            $result = mysqli_query($connect, $userQuery);
            if (mysqli_num_rows($result) == 0) {
                $userQuery = "insert into gastank(gas_id,value,date,timestamp,name_stamp) values(1,$g91,'$date','$time','$name')";
                $result = mysqli_query($connect, $userQuery);
            } else {
                $userQuery = "update gastank set value = $g91 , name_stamp = '$name' ,timestamp = '$time' where gas_id = 1 and date = '$date' and substr(timestamp,1,2) in (11,12,13,14,15,16,17,18)";
                $result = mysqli_query($connect, $userQuery);
            }

            $userQuery = "select * from gastank where gas_id = 2 and date = '$date' and substr(timestamp,1,2) in (11,12,13,14,15,16,17,18)";
            $result = mysqli_query($connect, $userQuery);
            if (mysqli_num_rows($result) == 0) {
                $userQuery = "insert into gastank(gas_id,value,date,timestamp,name_stamp) values(2,$g95,'$date','$time','$name')";
                $result = mysqli_query($connect, $userQuery);
            } else {
                $userQuery = "update gastank set value = $g95 , name_stamp = '$name' ,timestamp = '$time' where gas_id = 2 and date = '$date' and substr(timestamp,1,2) in (11,12,13,14,15,16,17,18)";
                $result = mysqli_query($connect, $userQuery);
            }

            $userQuery = "select * from gastank where gas_id = 3 and date = '$date' and substr(timestamp,1,2) in (11,12,13,14,15,16,17,18)";
            $result = mysqli_query($connect, $userQuery);
            if (mysqli_num_rows($result) == 0) {
                $userQuery = "insert into gastank(gas_id,value,date,timestamp,name_stamp) values(3,$de,'$date','$time','$name')";
                $result = mysqli_query($connect, $userQuery);
            } else {
                $userQuery = "update gastank set value = $de , name_stamp = '$name' ,timestamp = '$time' where gas_id = 3 and date = '$date' and substr(timestamp,1,2) in (11,12,13,14,15,16,17,18)";
                $result = mysqli_query($connect, $userQuery);
            }
        
    }
    $_SESSION['msg'] = "ดำเนินการสำเร็จ";
    header("Location:stockFuel.php");
}
