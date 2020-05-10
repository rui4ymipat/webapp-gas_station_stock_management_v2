<?php

    require_once "connect.php";
    session_start();
    $a1_91_p = $_GET['91p_a1'];
    $a1_91_d = $_GET['91d_a1'];
    $a1_95_p = $_GET['95p_a1'];
    $a1_95_d = $_GET['91d_a1'];
    $a1_de_p = $_GET['Dep_a1'];
    $a1_de_d = $_GET['Ded_a1'];
    
    $a2_91_p = $_GET['91p_a2'];
    $a2_91_d = $_GET['91d_a2'];
    $a2_95_p = $_GET['95p_a2'];
    $a2_95_d = $_GET['91d_a2'];
    $a2_de_p = $_GET['Dep_a2'];
    $a2_de_d = $_GET['Ded_a2'];

    $a3_91_p = $_GET['91p_a3'];
    $a3_91_d = $_GET['91d_a3'];
    $a3_95_p = $_GET['95p_a3'];
    $a3_95_d = $_GET['91d_a3'];
    $a3_de_p = $_GET['Dep_a3'];
    $a3_de_d = $_GET['Ded_a3'];
    if(empty($a1_91_p) && empty($a1_91_d) && empty($a1_95_p) && empty($a1_95_d) && empty($a1_de_p) && empty($a1_de_d) && empty($a2_91_p) && empty($a2_91_d) && empty($a2_95_p) && empty($a2_95_d) && empty($a2_de_p) && empty($a2_de_d) && empty($a3_91_p) && empty($a3_91_d) && empty($a3_95_p) && empty($a3_95_d) && empty($a3_de_p) && empty($a3_de_d))
    {
        $_SESSION['msg'] = "โปรดกรอกข้อมูลให้ครบ";
        header("Location:fuelprice.php"); 
    }
    else{
    date_default_timezone_set("Asia/Bangkok");
    $date = date("Y-m-d");
    $time = date("h:i:sa");
    $name = $_SESSION['user_name'];
    $Qa1="insert into sell(gas_id,account,price,discount,date,timestamp,name_stamp) values(1,1,$a1_91_p,$a1_91_d,'$date','$time','$name')";
    mysqli_query($connect, $Qa1);
    $Qa1="insert into sell(gas_id,account,price,discount,date,timestamp,name_stamp) values(1,1,$a1_95_p,$a1_95_d,'$date','$time','$name')";
    mysqli_query($connect, $Qa1);
    $Qa1="insert into sell(gas_id,account,price,discount,date,timestamp,name_stamp) values(1,1,$a1_de_p,$a1_de_d,'$date','$time','$name')";
    mysqli_query($connect, $Qa1);
    $Qa1="insert into sell(gas_id,account,price,discount,date,timestamp,name_stamp) values(1,2,$a2_91_p,$a2_91_d,'$date','$time','$name')";
    mysqli_query($connect, $Qa1);
    $Qa1="insert into sell(gas_id,account,price,discount,date,timestamp,name_stamp) values(1,2,$a2_95_p,$a2_95_d,'$date','$time','$name')";
    mysqli_query($connect, $Qa1);
    $Qa1="insert into sell(gas_id,account,price,discount,date,timestamp,name_stamp) values(1,2,$a2_de_p,$a2_de_d,'$date','$time','$name')";
    mysqli_query($connect, $Qa1);
    $Qa1="insert into sell(gas_id,account,price,discount,date,timestamp,name_stamp) values(1,3,$a3_91_p,$a3_91_d,'$date','$time','$name')";
    mysqli_query($connect, $Qa1);
    $Qa1="insert into sell(gas_id,account,price,discount,date,timestamp,name_stamp) values(1,3,$a3_95_p,$a3_95_d,'$date','$time','$name')";
    mysqli_query($connect, $Qa1);
    $Qa1="insert into sell(gas_id,account,price,discount,date,timestamp,name_stamp) values(1,3,$a3_de_p,$a3_de_d,'$date','$time','$name')";
    mysqli_query($connect, $Qa1);
    $_SESSION['msg'] = "ดำเนินการสำเร็จ";
        header("Location:fuelprice.php"); 
    }
