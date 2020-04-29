<?php
session_start();

require_once "connect.php";

$id = $_POST['id'];
$pass = $_POST['pass'];
$Fname = $_POST['Fname'];
$Lname = $_POST['Lname'];
if (empty($_POST['id'])) {
    $_SESSION['msg'] = 'การดำเนินการไม่สำเร็จ กรุณาลองใหม่อีกครั้ง';
    header("Location:management.php");
} else if (empty($_POST['pass'])) {
    $_SESSION['msg'] = 'การดำเนินการไม่สำเร็จ กรุณาลองใหม่อีกครั้ง';
    header("Location:management.php");
} else if (empty($_POST['Lname'])) {
    $_SESSION['msg'] = 'การดำเนินการไม่สำเร็จ กรุณาลองใหม่อีกครั้ง';
    header("Location:management.php");
} else if (empty($_POST['Fname'])) {
    $_SESSION['msg'] = 'การดำเนินการไม่สำเร็จ กรุณาลองใหม่อีกครั้ง';
    header("Location:management.php");
} else {

        $userQuery = "UPDATE user SET username = '$id' , password = '$pass' , Fname = '$Fname' , Lname = '$Lname'";
        $result = mysqli_query($connect, $userQuery);
        if (!$result) {
            $_SESSION['msg'] = 'การดำเนินการไม่สำเร็จ กรุณาลองใหม่อีกครั้ง';
            header("Location:management.php");
        } else {
            $_SESSION['msg'] = 'การดำเนินการสำเร็จ';
            header("Location:management.php");
        }
    
    
}
