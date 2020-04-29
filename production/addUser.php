<?php
session_start();
require_once "connect.php";
$userQuery = "SELECT username from user";
$result = mysqli_query($connect, $userQuery);
while ($row = mysqli_fetch_assoc($result)) {
    $username[] = $row['username'];
}
$id = $_POST['id'];
$pass = $_POST['pass'];
$Fname = $_POST['Fname'];
$Lname = $_POST['Lname'];
for ($i = 0; $i < count($username); $i++) {
    if ($id == $username[$i]) {
        $_SESSION['msg'] = 'การดำเนินการไม่สำเร็จ ID ถูกใช้ไปแล้ว';
        header("Location:management.php");
    }
}


$userQuery = "INSERT INTO user(Fname,Lname,username,password) VALUES('$Fname','$Lname','$id','$pass')";
$result = mysqli_query($connect, $userQuery);
if (!$result) {
    $_SESSION['msg'] = 'การดำเนินการไม่สำเร็จ กรุณาลองใหม่อีกครั้ง';
    header("Location:management.php");
} else {
    $_SESSION['msg'] = 'การดำเนินการสำเร็จ';
    header("Location:management.php");
}
