<?php
    require_once "connect.php";
    session_start();
    date_default_timezone_set("Asia/Bangkok");
    $date = date("Y-m-d");
    $C6134_num = $_GET['6134_num'];
    $C6134_val  = $_GET['6134_value'];
    $C1815_num = $_GET['1815_num'];
    $C1815_val  = $_GET['1815_value'];
    if(empty($C6134_num) && empty($C6134_val) && empty($C1815_num) && empty($C1815_val) )
    {
        $_SESSION['msg'] = "โปรดกรอกข้อมูลให้ครบ";
        header("Location:informationGasCar.php");
    }
    else{
        $Q = "Select * from C6134 where date = '$date'";
        $Check_result = mysqli_query($connect , $Q);
        if(mysqli_num_rows($Check_result) == 0)
        {
            $q1 = "insert into C6134(number,value) values($C6134_num,$C6134_val)";
            $result = mysqli_query($connect , $q1);
        }
        else
        {
            $row = mysqli_fetch_assoc($Check_result);
            if(empty($C6134_num))
            {
                $C6134_num = $row['number'];
            }
            if(empty($C6134_val))
            {
                $C6134_val = $row['value'];
            }
            $q1 = "update C6134 set number = $C6134_num , value = $C6134_val";
            $result = mysqli_query($connect,$q1);
        }

        $Q = "Select * from C1815 where date = '$date'";
        $Check_result = mysqli_query($connect , $Q);
        if(mysqli_num_rows($Check_result) == 0)
        {
            $q1 = "insert into C1815(number,value) values($C1815_num,$C1815_val)";
            $result = mysqli_query($connect , $q1);
        }
        else
        {
            $row = mysqli_fetch_assoc($Check_result);
            if(empty($C1815_num))
            {
                $C1815_num = $row['number'];
            }
            if(empty($C1815_val))
            {
                $C1815_val = $row['value'];
            }
            $q1 = "update C1815 set number = $C1815_num , value = $C1815_val";
            $result = mysqli_query($connect,$q1);
        }
        $_SESSION['msg'] = "ดำเนินการสำเร็จ";
        header("Location:informationGasCar.php");
    }
?>