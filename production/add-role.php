<?php
session_start();
$t = $_GET['t'];
require_once "connect.php";
$text = str_replace("\n", " ", $t);
$userQuery = "update text set text = '$text' where id = 1";
$result3 = mysqli_query($connect, $userQuery);
$_SESSION['msg'] = "ดำเนินการสำเร็จ";
header("Location:management.php");
