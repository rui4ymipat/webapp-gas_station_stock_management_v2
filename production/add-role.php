<?php
session_start();
$t = $_GET['t'];
require_once "connect.php";
$userQuery = "update text set text = '$t' where id = 1";
$result3 = mysqli_query($connect, $userQuery);
$_SESSION['msg'] = "ดำเนินการสำเร็จ";
header("Location:management.php");
