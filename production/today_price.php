<?php
date_default_timezone_set("Asia/Bangkok");
$date = date("Y-m-d");
$g91_c = $_GET['g91-c'];
$g91_s = $_GET['g91-s'];
$g95_c = $_GET['g95-c'];
$g95_s = $_GET['g95-s'];
$de_c = $_GET['desel-c'];
$de_s = $_GET['desel-s'];

require_once "connect.php";

$userQuery = "select * from today_price where date = '$date' ";
$result = mysqli_query($connect, $userQuery);
if (mysqli_num_rows($result) == 0){
    $userQuery = "INSERT INTO today_price(gas_id,current_price,sell_price,date) VALUES(1,$g91_c,$g91_s,'$date') ";
    $result = mysqli_query($connect, $userQuery);
    $userQuery = "INSERT INTO today_price(gas_id,current_price,sell_price,date) VALUES(2,$g95_c,$g95_s,'$date') ";
    $result = mysqli_query($connect, $userQuery);
    $userQuery = "INSERT INTO today_price(gas_id,current_price,sell_price,date) VALUES(3,$de_c,$de_s,'$date') ";
    $result = mysqli_query($connect, $userQuery);
}


$userQuery = "select * from sell where date = '$date' ";
$result = mysqli_query($connect, $userQuery);
if (mysqli_num_rows($result) == 0) {
    for ($i = 1; $i < 4; $i++) {
        for ($j = 1; $j < 4; $j++) {
            $userQuery = "INSERT INTO sell(gas_id,account,price,date,timestamp,name_stamp) VALUES($j,$i,0,'$date','-','-') ";
            $result = mysqli_query($connect, $userQuery);
        }
    }
}
