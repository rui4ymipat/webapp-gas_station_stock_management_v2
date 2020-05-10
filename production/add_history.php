<?php

    require_once "connect.php";
    session_start();
    $a1_91_p = $_GET['91p_a1'];
    $a1_91_v = $_GET['91d_a1'];
    $a1_95_p = $_GET['95p_a1'];
    $a1_95_v = $_GET['91d_a1'];
    $a1_de_p = $_GET['Dep_a1'];
    $a1_de_v = $_GET['Ded_a1'];
    
    $a2_91_p = $_GET['91p_a2'];
    $a2_91_v = $_GET['91d_a2'];
    $a2_95_p = $_GET['95p_a2'];
    $a2_95_v = $_GET['91d_a2'];
    $a2_de_p = $_GET['Dep_a2'];
    $a2_de_v = $_GET['Ded_a2'];

    $a3_91_p = $_GET['91p_a3'];
    $a3_91_v = $_GET['91d_a3'];
    $a3_95_p = $_GET['95p_a3'];
    $a3_95_v = $_GET['91d_a3'];
    $a3_de_p = $_GET['Dep_a3'];
    $a3_de_v = $_GET['Ded_a3'];
    $car = $_GET['cars'];
    if(empty($a1_91_p) && empty($a1_91_v) && empty($a1_95_p) && empty($a1_95_v) && empty($a1_de_p) && empty($a1_de_v) && empty($a2_91_p)  && empty($a2_91_v) && empty($a2_95_p) && empty($a2_95_v) && empty($a2_de_p)  && empty($a2_de_v) && empty($a3_91_p) && empty($a3_91_v) && empty($a3_91_d) && empty($a3_91_v) && empty($a3_95_p) && empty($a3_95_v) && empty($a3_de_p)&& empty($a3_de_v))
    {
        $_SESSION['msg'] = "โปรดกรอกข้อมูลให้ครบ";
        header("Location:history.php"); 
    }
    else{
    date_default_timezone_set("Asia/Bangkok");
    $date = date("Y-m-d");
    $time = date("h:i:sa");
    $name = $_SESSION['user_name'];
    $tran = $_GET['a'];
    //account 1
    $Qa1="insert into history(car_id,gas_id,price,value,tran_price,account,date,timestamp,name_stamp) 
            values($car,1,$a1_91_p,$a1_91_v,$tran,1,'$date','$time','$name')";
    mysqli_query($connect, $Qa1);
    $Qa1="insert into history(car_id,gas_id,price,value,tran_price,account,date,timestamp,name_stamp) 
            values($car,2,$a1_95_p,$a1_95_v,$tran,1,'$date','$time','$name')";
    mysqli_query($connect, $Qa1);
    $Qa1="insert into history(car_id,gas_id,price,value,tran_price,account,date,timestamp,name_stamp) 
            values($car,3,$a1_de_p,$a1_de_v,$tran,1,'$date','$time','$name')";
    mysqli_query($connect, $Qa1);
    //acount 2
    $Qa1="insert into history(car_id,gas_id,price,value,tran_price,account,date,timestamp,name_stamp) 
            values($car,1,$a2_91_p,$a2_91_v,$tran,2,'$date','$time','$name')";
    mysqli_query($connect, $Qa1);
    $Qa1="insert into history(car_id,gas_id,price,value,tran_price,account,date,timestamp,name_stamp) 
            values($car,2,$a2_95_p,$a2_95_v,$tran,2,'$date','$time','$name')";
    mysqli_query($connect, $Qa1);
    $Qa1="insert into history(car_id,gas_id,price,value,tran_price,account,date,timestamp,name_stamp) 
            values($car,3,$a2_de_p,$a2_de_v,$tran,2,'$date','$time','$name')";
    mysqli_query($connect, $Qa1);          
    //acount 3
    $Qa1="insert into history(car_id,gas_id,price,value,tran_price,account,date,timestamp,name_stamp) 
            values($car,1,$a3_91_p,$a3_91_v,$tran,3,'$date','$time','$name')";
    mysqli_query($connect, $Qa1);
    $Qa1="insert into history(car_id,gas_id,price,value,tran_price,account,date,timestamp,name_stamp) 
            values($car,2,$a3_95_p,$a3_95_v,$tran,3,'$date','$time','$name')";
    mysqli_query($connect, $Qa1);
    $Qa1="insert into history(car_id,gas_id,price,value,tran_price,account,date,timestamp,name_stamp) 
            values($car,3,$a3_de_p,$a3_de_v,$tran,3,'$date','$time','$name')";
    mysqli_query($connect, $Qa1); 

    $_SESSION['msg'] = "ดำเนินการสำเร็จ";
        header("Location:history.php"); 
    }
