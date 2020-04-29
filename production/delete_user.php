<?php
 session_start();
require_once "connect.php";
$id = $_GET['id'];
$userQuery="DELETE FROM user WHERE id = $id";
$result=mysqli_query($connect, $userQuery);
if(!$result)
{
   
    $_SESSION['msg'] = 'การดำเนินการไม่สำเร็จ กรุณาลองใหม่อีกครั้ง';
    header("Location:management.php");    
}
else
{
    $_SESSION['msg'] = 'การดำเนินการสำเร็จ';
    header("Location:management.php");    
}