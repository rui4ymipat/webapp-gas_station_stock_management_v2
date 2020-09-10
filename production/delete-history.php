<?php
session_start();
require_once "connect.php";
$date = $_GET['date'];
$userQuery= "DELETE FROM history WHERE date = '$date' ";
$result=mysqli_query($connect, $userQuery); 
if (!$result) {
    die ("Could not successfully run the query $userQuery ".mysqli_error($connect));
    }
$_SESSION['msg'] = 'การดำเนินการสำเร็จ';
header("Location:history.php");
?>