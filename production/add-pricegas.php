<?php

require_once "connect.php";
session_start();
$c = 0;
$a1_91_p = $_GET['91p_a1'];
if (empty($a1_91_d)) {
    $a1_91_d = 0;
    $c = 1;
}
$a1_91_d = $_GET['91d_a1'];
if (empty($a1_91_p)) {
    $a1_91_p = 0;
    $c = 1;
}
$a1_95_p = $_GET['95p_a1'];
if (empty($a1_95_p)) {
    $a1_95_p = 0;
    $c = 1;
}
$a1_95_d = $_GET['95d_a1'];
if (empty($a1_95_d)) {
    $a1_95_d = 0;
    $c = 1;
}
$a1_de_p = $_GET['Dep_a1'];
if (empty($a1_de_p)) {
    $a1_de_p = 0;
    $c = 1;
}
$a1_de_d = $_GET['Ded_a1'];
if (empty($a1_de_d)) {
    $a1_de_d = 0;
    $c = 1;
}

$a2_91_p = $_GET['91p_a2'];
if (empty($a2_91_d)) {
    $a2_91_d = 0;
    $c = 1;
}
$a2_91_d = $_GET['91d_a2'];
if (empty($a2_91_p)) {
    $a2_91_p = 0;
    $c = 1;
}
$a2_95_p = $_GET['95p_a2'];
if (empty($a2_95_p)) {
    $a2_95_p = 0;
    $c = 1;
}
$a2_95_d = $_GET['95d_a2'];
if (empty($a2_95_d)) {
    $a2_95_d = 0;
    $c = 1;
}
$a2_de_p = $_GET['Dep_a2'];
if (empty($a2_de_p)) {
    $a2_de_p = 0;
    $c = 1;
}
$a2_de_d = $_GET['Ded_a2'];
if (empty($a2_de_d)) {
    $a2_de_d = 0;
    $c = 1;
}

$a3_91_p = $_GET['91p_a3'];
if (empty($a3_91_d)) {
    $a3_91_d = 0;
    $c = 1;
}
$a3_91_d = $_GET['91d_a3'];
if (empty($a3_91_p)) {
    $a3_91_p = 0;
    $c = 1;
}
$a3_95_p = $_GET['95p_a3'];
if (empty($a3_95_p)) {
    $a3_95_p = 0;
    $c = 1;
}
$a3_95_d = $_GET['95d_a3'];
if (empty($a3_95_d)) {
    $a3_95_d = 0;
    $c = 1;
}
$a3_de_p = $_GET['Dep_a3'];
if (empty($a3_de_p)) {
    $a3_de_p = 0;
    $c = 1;
}
$a3_de_d = $_GET['Ded_a3'];
if (empty($a3_de_d)) {
    $a3_de_d = 0;
    $c = 1;
}
if ($c != 1 && empty($a1_91_p) && empty($a1_95_p) && empty($a1_de_p) && empty($a2_91_p) && empty($a2_95_p) && empty($a2_de_p) && empty($a3_91_p) && empty($a3_91_d) && empty($a3_95_p) && empty($a3_de_p)) {
    $_SESSION['msg'] = "โปรดกรอกข้อมูลให้ครบ";
    header("Location:fuelprice.php");
} else {
    date_default_timezone_set("Asia/Bangkok");
    $date = date("Y-m-d");
    $time = date("h:i:sa");
    $name = $_SESSION['user_name'];

    $userQuery = "select * from sell where gas_id = 1 and account = 1 and date = '$date'";
    $result = mysqli_query($connect, $userQuery);
    if ($result) {
        $userQuery = "delete from sell where gas_id = 1 and account = 1 and date = '$date'";
        mysqli_query($connect, $userQuery);
    }
    $Qa1 = "insert into sell(gas_id,account,price,discount,date,timestamp,name_stamp) values(1,1,$a1_91_p,$a1_91_d,'$date','$time','$name')";
    mysqli_query($connect, $Qa1);

    $userQuery = "select * from sell where gas_id = 2 and account = 1 and date = '$date'";
    $result = mysqli_query($connect, $userQuery);
    if ($result) {
        $userQuery = "delete from sell where gas_id = 2 and account = 1 and date = '$date'";
        mysqli_query($connect, $userQuery);
    }
    $Qa1 = "insert into sell(gas_id,account,price,discount,date,timestamp,name_stamp) values(2,1,$a1_95_p,$a1_95_d,'$date','$time','$name')";
    mysqli_query($connect, $Qa1);

    $userQuery = "select * from sell where gas_id = 3 and account = 1 and date = '$date'";
    $result = mysqli_query($connect, $userQuery);
    if ($result) {
        $userQuery = "delete from sell where gas_id = 3 and account = 1 and date = '$date'";
        mysqli_query($connect, $userQuery);
    }
    $Qa1 = "insert into sell(gas_id,account,price,discount,date,timestamp,name_stamp) values(3,1,$a1_de_p,$a1_de_d,'$date','$time','$name')";
    mysqli_query($connect, $Qa1);

    $userQuery = "select * from sell where gas_id = 1 and account = 2 and date = '$date'";
    $result = mysqli_query($connect, $userQuery);
    if ($result) {
        $userQuery = "delete from sell where gas_id = 1 and account = 2 and date = '$date'";
        mysqli_query($connect, $userQuery);
    }
    $Qa1 = "insert into sell(gas_id,account,price,discount,date,timestamp,name_stamp) values(1,2,$a2_91_p,$a2_91_d,'$date','$time','$name')";
    mysqli_query($connect, $Qa1);

    $userQuery = "select * from sell where gas_id = 2 and account = 2 and date = '$date'";
    $result = mysqli_query($connect, $userQuery);
    if ($result) {
        $userQuery = "delete from sell where gas_id = 2 and account = 2 and date = '$date'";
        mysqli_query($connect, $userQuery);
    }
    $Qa1 = "insert into sell(gas_id,account,price,discount,date,timestamp,name_stamp) values(2,2,$a2_95_p,$a2_95_d,'$date','$time','$name')";
    mysqli_query($connect, $Qa1);

    $userQuery = "select * from sell where gas_id = 3 and account = 2 and date = '$date'";
    $result = mysqli_query($connect, $userQuery);
    if ($result) {
        $userQuery = "delete from sell where gas_id = 3 and account = 2 and date = '$date'";
        mysqli_query($connect, $userQuery);
    }
    $Qa1 = "insert into sell(gas_id,account,price,discount,date,timestamp,name_stamp) values(3,2,$a2_de_p,$a2_de_d,'$date','$time','$name')";
    mysqli_query($connect, $Qa1);

    $userQuery = "select * from sell where gas_id = 1 and account = 3 and date = '$date'";
    $result = mysqli_query($connect, $userQuery);
    if ($result) {
        $userQuery = "delete from sell where gas_id = 1 and account = 3 and date = '$date'";
        mysqli_query($connect, $userQuery);
    }
    $Qa1 = "insert into sell(gas_id,account,price,discount,date,timestamp,name_stamp) values(1,3,$a3_91_p,$a3_91_d,'$date','$time','$name')";
    mysqli_query($connect, $Qa1);

    $userQuery = "select * from sell where gas_id = 2 and account = 3 and date = '$date'";
    $result = mysqli_query($connect, $userQuery);
    if ($result) {
        $userQuery = "delete from sell where gas_id = 2 and account = 3 and date = '$date'";
        mysqli_query($connect, $userQuery);
    }
    $Qa1 = "insert into sell(gas_id,account,price,discount,date,timestamp,name_stamp) values(2,3,$a3_95_p,$a3_95_d,'$date','$time','$name')";
    mysqli_query($connect, $Qa1);

    $userQuery = "select * from sell where gas_id = 3 and account = 3 and date = '$date'";
    $result = mysqli_query($connect, $userQuery);
    if ($result) {
        $userQuery = "delete from sell where gas_id = 3 and account = 3 and date = '$date'";
        mysqli_query($connect, $userQuery);
    }
    $Qa1 = "insert into sell(gas_id,account,price,discount,date,timestamp,name_stamp) values(3,3,$a3_de_p,$a3_de_d,'$date','$time','$name')";
    mysqli_query($connect, $Qa1);
    $_SESSION['msg'] = "ดำเนินการสำเร็จ";
    header("Location:fuelprice.php");
}
