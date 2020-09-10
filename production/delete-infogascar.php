<?php
session_start();
require_once "connect.php";
$date = $_GET['date'];
$car = $_GET['cars'];
if ($car == 1) {
    $check = 'C6134';
} else if ($car == 2) {
    $check = 'C1815';
} else if ($car == 3) {
    $check = 'ISUZU';
}
$userQuery= "DELETE FROM $check WHERE date = '$date' ";
$result=mysqli_query($connect, $userQuery); 
if (!$result) {
    die ("Could not successfully run the query $userQuery ".mysqli_error($connect));
    }
$_SESSION['msg'] = 'การดำเนินการสำเร็จ';
header("Location:informationGasCar.php");
?>