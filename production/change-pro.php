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
    $uid = $_POST['Uid'];
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
        $add = TRUE;
        for ($i = 0; $i < count($username); $i++) {
            if ($id == $username[$i]) {
                $_SESSION['msg'] = 'การดำเนินการไม่สำเร็จ ID ถูกใช้ไปแล้ว';
                $add = FALSE;
                header("Location:management.php");
            }
        }
        if ($add) {
            $userQuery = "UPDATE user SET username = '$id' , password = '$pass' , Fname = '$Fname' , Lname = '$Lname' WHERE id = $uid";
            $result = mysqli_query($connect, $userQuery);
            if (!$result) {
                $_SESSION['msg'] = 'การดำเนินการไม่สำเร็จ กรุณาลองใหม่อีกครั้ง';
                header("Location:management.php");
            } else {
                $_SESSION['msg'] = 'การดำเนินการสำเร็จ';
                header("Location:management.php");
            }
        }
    }
