<?php
    require_once "connect.php";
    session_start();
    date_default_timezone_set("Asia/Bangkok");
    function check($a){
        if(empty($a)){
            return (int)0;
        }
        else{
            return $a;
        }
    }
    $date = date("Y-m-d");
    $C6134_num = check($_GET['6134_num']);
    $C6134_val  = check($_GET['6134_value']);
    $C1815_num = check($_GET['1815_num']);
    $C1815_val  = check($_GET['1815_value']);
    $is_num = check($_GET['IS_num']);
    $is_val = check($_GET['IS_value']);
        $Q = "Select * from C6134 where date = '$date'";
        $Check_result = mysqli_query($connect , $Q);
        if(mysqli_num_rows($Check_result) == 0)
        {
            $q1 = "insert into C6134(number,value,date) values($C6134_num,$C6134_val,'$date')";
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
            $q1 = "update C6134 set number = $C6134_num , value = $C6134_val where date = '$date'";
            $result = mysqli_query($connect,$q1);
        }

        $Q = "Select * from C1815 where date = '$date'";
        $Check_result = mysqli_query($connect , $Q);
        if(mysqli_num_rows($Check_result) == 0)
        {
            $q1 = "insert into C1815(number,value,date) values($C1815_num,$C1815_val,'$date')";
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
            $q1 = "update C1815 set number = $C1815_num , value = $C1815_val where date = '$date'";
            $result = mysqli_query($connect,$q1);
        }
        
        $Q = "Select * from ISUZU where date = '$date'";
        $Check_result = mysqli_query($connect , $Q);
        if(mysqli_num_rows($Check_result) == 0)
        {
            $q1 = "insert into ISUZU(number,value,date) values($is_num,$is_val,'$date')";
            $result = mysqli_query($connect , $q1);
        }
        else
        {
            $row = mysqli_fetch_assoc($Check_result);
            if(empty($is_num))
            {
                $is_num = $row['number'];
            }
            if(empty($is_val))
            {
                $is_val = $row['value'];
            }
            $q1 = "update ISUZU set number = $is_num , value = $is_val where date = '$date'" ;
            $result = mysqli_query($connect,$q1);
        }

        $_SESSION['msg'] = "ดำเนินการสำเร็จ";
        header("Location:informationGasCar.php");
