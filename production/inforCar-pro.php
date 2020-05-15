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
        if(empty($g91))
        {
            $g91 = 0;
        }
        if(empty($g95))
        {
            $g95 = 0;
        }
        if(empty($de))
        {
            $g95 = 0;
        }
        if(empty($tran_price))
        {
            $tran_price = 2800;
        }
        if(empty($other_price))
        {
            $other_price = 0;
        }
        if(empty($detail))
        {
            $detail = '';
        }
        $qu = "insert into $check(cost,other_price,detail,date,name_stamp,timestamp,G91,G95,Desel) values($tran_price,$other_price,'$detail','$date','$name','$time',$g91,$g95,$de)";
        $result = mysqli_query($connect,$qu);
        if(!$result)
        {
            die ("Could not successfully run the query $qu ".mysqli_error($connect));
        }
        $_SESSION['msg'] = "ดำเนินการสำเร็จ";
        header("Location:informationGasCar.php");
    }
    else{ 
        $row = mysqli_fetch_assoc($Check_result);
        if(empty($g91))
        {
            $g91 = $row['G91'];
        }
        if(empty($g95))
        {
            $g95 = $row['G95'];
        }
        if(empty($de))
        {
            $de = $row['Desel'];
        }
        if(empty($tran_price))
        {
            $tran_price = $row['cost'];
        }
        if(empty($other_price))
        {
            $other_price = $row['other_price'];
        }
        if(empty($detail))
        {
            $detail = $row['detail'];
        }
        $qu = "update $check set cost = $tran_price, other_price = $other_price , detail = '$detail' ,name_stamp = '$name',timestamp = '$time',G91 =$g91 , G95 =$g95 , Desel =$de";
        $result = mysqli_query($connect,$qu);
        if(!$result)
        {
            die ("Could not successfully run the query $userQuery ".mysqli_error($connect));
        }
        $_SESSION['msg'] = "ดำเนินการสำเร็จ";
        header("Location:informationGasCar.php");
    }
    
}
