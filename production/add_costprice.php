<?php

require_once "connect.php";
session_start();
date_default_timezone_set("Asia/Bangkok");
$date = date("Y-m-d");

$userQuery = "select sum(value*price)/sum(value)+tran_price as sum from history where date = '$date' and gas_id = 1";
$result = mysqli_query($connect, $userQuery);
$row = mysqli_fetch_assoc($result);
$s1 = $row['sum'];
$userQuery = "select tran_price from history where date = '$date' and gas_id = 1";
$result = mysqli_query($connect, $userQuery);
$row = mysqli_fetch_assoc($result);
$s2 = $row['tran_price'];

$rp = $s1 + $s2;

$userQuery = "select sum(value) as sum from history where date = '$date' and gas_id = 1";
$result = mysqli_query($connect, $userQuery);
$row = mysqli_fetch_assoc($result);
$s_val = $row['sum'];

$p1 = $s_val * $rp;

$userQuery = "select sum(value) as sum from history where date = (select date from history where date < '$date' group by date order by date DESC limit 1) and gas_id = 1";
$result = mysqli_query($connect, $userQuery);
$row = mysqli_fetch_assoc($result);
$old_sum = $row['sum'];

$userQuery = "select value from cost where date < '$date' and gas_id = 1 limit 1";
$result = mysqli_query($connect, $userQuery);
$row = mysqli_fetch_assoc($result);
$old_price = $row['sum'];

$p2 = $old_sum * $old_price;
$set = ($p1 / $p2) / ($old_sum + $s_val);

$userQuery = "select * from cost where date = '$date' and gas_id = 1";
$result = mysqli_query($connect, $userQuery);
if (mysqli_num_rows($result) == 0) {
    $userQuery = "insert into cost(gas_id,value,date) values(1,$set,'$date')";
    $result = mysqli_query($connect, $userQuery);
}
else{
    $userQuery = "update cost set value = $set where date = '$date' and gas_id = 1";
    $result = mysqli_query($connect, $userQuery);
}


$userQuery = "select sum(value*price)/sum(value)+tran_price as sum from history where date = '$date' and gas_id = 2";
$result = mysqli_query($connect, $userQuery);
$row = mysqli_fetch_assoc($result);
$s1 = $row['sum'];
$userQuery = "select tran_price from history where date = '$date' and gas_id = 2";
$result = mysqli_query($connect, $userQuery);
$row = mysqli_fetch_assoc($result);
$s2 = $row['tran_price'];

$rp = $s1 + $s2;

$userQuery = "select sum(value) as sum from history where date = '$date' and gas_id = 2";
$result = mysqli_query($connect, $userQuery);
$row = mysqli_fetch_assoc($result);
$s_val = $row['sum'];

$p1 = $s_val * $rp;

$userQuery = "select sum(value) as sum from history where date = (select date from history where date < '$date' group by date order by date DESC limit 1) and gas_id = 2";
$result = mysqli_query($connect, $userQuery);
$row = mysqli_fetch_assoc($result);
$old_sum = $row['sum'];

$userQuery = "select value from cost where date < '$date' and gas_id = 2 limit 1";
$result = mysqli_query($connect, $userQuery);
$row = mysqli_fetch_assoc($result);
$old_price = $row['sum'];

$p2 = $old_sum * $old_price;
$set = ($p1 / $p2) / ($old_sum + $s_val);

$userQuery = "select * from cost where date = '$date' and gas_id = 2";
$result = mysqli_query($connect, $userQuery);
if (mysqli_num_rows($result) == 0) {
    $userQuery = "insert into cost(gas_id,value,date) values(1,$set,'$date')";
    $result = mysqli_query($connect, $userQuery);
}
else{
    $userQuery = "update cost set value = $set where date = '$date' and gas_id = 2";
    $result = mysqli_query($connect, $userQuery);
}


$userQuery = "select sum(value*price)/sum(value)+tran_price as sum from history where date = '$date' and gas_id = 3";
$result = mysqli_query($connect, $userQuery);
$row = mysqli_fetch_assoc($result);
$s1 = $row['sum'];
$userQuery = "select tran_price from history where date = '$date' and gas_id = 3";
$result = mysqli_query($connect, $userQuery);
$row = mysqli_fetch_assoc($result);
$s2 = $row['tran_price'];

$rp = $s1 + $s2;

$userQuery = "select sum(value) as sum from history where date = '$date' and gas_id = 3";
$result = mysqli_query($connect, $userQuery);
$row = mysqli_fetch_assoc($result);
$s_val = $row['sum'];

$p1 = $s_val * $rp;

$userQuery = "select sum(value) as sum from history where date = (select date from history where date < '$date' group by date order by date DESC limit 1) and gas_id = 3";
$result = mysqli_query($connect, $userQuery);
$row = mysqli_fetch_assoc($result);
$old_sum = $row['sum'];

$userQuery = "select value from cost where date < '$date' and gas_id = 3 limit 1";
$result = mysqli_query($connect, $userQuery);
$row = mysqli_fetch_assoc($result);
$old_price = $row['sum'];

$p2 = $old_sum * $old_price;
$set = ($p1 / $p2) / ($old_sum + $s_val);

$userQuery = "select * from cost where date = '$date' and gas_id = 3";
$result = mysqli_query($connect, $userQuery);
if (mysqli_num_rows($result) == 0) {
    $userQuery = "insert into cost(gas_id,value,date) values(1,$set,'$date')";
    $result = mysqli_query($connect, $userQuery);
}
else{
    $userQuery = "update cost set value = $set where date = '$date' and gas_id = 3";
    $result = mysqli_query($connect, $userQuery);
}
