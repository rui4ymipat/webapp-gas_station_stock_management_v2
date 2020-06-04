<?php

require_once "connect.php";
session_start();


$a1_91_p = $_GET['91p_a1'];
$a1_91_v = $_GET['91d_a1'];
$a1_95_p = $_GET['95p_a1'];
$a1_95_v = $_GET['95d_a1'];
$a1_de_p = $_GET['Dep_a1'];
$a1_de_v = $_GET['Ded_a1'];

$a2_91_p = $_GET['91p_a2'];
$a2_91_v = $_GET['91d_a2'];
$a2_95_p = $_GET['95p_a2'];
$a2_95_v = $_GET['95d_a2'];
$a2_de_p = $_GET['Dep_a2'];
$a2_de_v = $_GET['Ded_a2'];

$a3_91_p = $_GET['91p_a3'];
$a3_91_v = $_GET['91d_a3'];
$a3_95_p = $_GET['95p_a3'];
$a3_95_v = $_GET['95d_a3'];
$a3_de_p = $_GET['Dep_a3'];
$a3_de_v = $_GET['Ded_a3'];
$car = $_GET['cars'];
$tran = $_GET['a'];
date_default_timezone_set("Asia/Bangkok");
$date = date("Y-m-d");
$time = date("h:i:sa");
$name = $_SESSION['user_name'];
if (empty($car) && empty($a)) {
    $_SESSION['msg'] = "โปรดกรอกข้อมูลให้ครบ";
    header("Location:history.php");
} else {
    $userQuery = "select * from history where date = '$date'";
    $result = mysqli_query($connect, $userQuery);
    if (mysqli_num_rows($result) == 0) {
        $Qa1 = "insert into history(car_id,gas_id,price,value,tran_price,account,date,timestamp,name_stamp) 
        values($car,1,$a1_91_p,$a1_91_v,$tran,1,'$date','$time','$name')";
        mysqli_query($connect, $Qa1);

        $Qa1 = "insert into history(car_id,gas_id,price,value,tran_price,account,date,timestamp,name_stamp) 
        values($car,2,$a1_95_p,$a1_95_v,$tran,1,'$date','$time','$name')";
        mysqli_query($connect, $Qa1);

        $Qa1 = "insert into history(car_id,gas_id,price,value,tran_price,account,date,timestamp,name_stamp) 
    values($car,3,$a1_de_p,$a1_de_v,$tran,1,'$date','$time','$name')";
        mysqli_query($connect, $Qa1);

        $Qa1 = "insert into history(car_id,gas_id,price,value,tran_price,account,date,timestamp,name_stamp) 
    values($car,1,$a2_91_p,$a2_91_v,$tran,2,'$date','$time','$name')";
        mysqli_query($connect, $Qa1);

        $Qa1 = "insert into history(car_id,gas_id,price,value,tran_price,account,date,timestamp,name_stamp) 
    values($car,2,$a2_95_p,$a2_95_v,$tran,2,'$date','$time','$name')";
        mysqli_query($connect, $Qa1);

        $Qa1 = "insert into history(car_id,gas_id,price,value,tran_price,account,date,timestamp,name_stamp) 
    values($car,3,$a2_de_p,$a2_de_v,$tran,2,'$date','$time','$name')";
        mysqli_query($connect, $Qa1);
        if (!$result) {
            die ("Could not successfully run the query $userQuery ".mysqli_error($connect));
            }

        $Qa1 = "insert into history(car_id,gas_id,price,value,tran_price,account,date,timestamp,name_stamp) 
    values($car,1,$a3_91_p,$a3_91_v,$tran,3,'$date','$time','$name')";
        mysqli_query($connect, $Qa1);

        $Qa1 = "insert into history(car_id,gas_id,price,value,tran_price,account,date,timestamp,name_stamp) 
    values($car,2,$a3_95_p,$a3_95_v,$tran,3,'$date','$time','$name')";
        mysqli_query($connect, $Qa1);

        $Qa1 = "insert into history(car_id,gas_id,price,value,tran_price,account,date,timestamp,name_stamp) 
    values($car,3,$a3_de_p,$a3_de_v,$tran,3,'$date','$time','$name')";
        mysqli_query($connect, $Qa1);
        if (!$result) {
            die ("Could not successfully run the query $userQuery ".mysqli_error($connect));
            }
    } else {
        $userQuery = "update history set car_id = $car where date = '$date'";
        $result = mysqli_query($connect, $userQuery);
        //account 1
        $userQuery = "update history set price = $a1_91_p , values = $a1_91_v , timestamp = '$time' , name_stamp = '$name' where date = '$date' and gas_id = 1 and account = 1";
        $result = mysqli_query($connect, $userQuery);
        $userQuery = "update history set price = $a1_95_p , values = $a1_95_v  , timestamp = '$time' , name_stamp = '$name' where date = '$date' and gas_id = 2 and account = 1";
        $result = mysqli_query($connect, $userQuery);
        $userQuery = "update history set price = $a1_de_p , values = $a1_de_v  , timestamp = '$time' , name_stamp = '$name' where date = '$date' and gas_id = 3 and account = 1";
        $result = mysqli_query($connect, $userQuery);
        //account2
        $userQuery = "update history set price = $a2_91_p , values = $a2_91_v  , timestamp = '$time' , name_stamp = '$name' where date = '$date' and gas_id = 1 and account = 2";
        $result = mysqli_query($connect, $userQuery);
        $userQuery = "update history set price = $a2_95_p , values = $a2_95_v  , timestamp = '$time' , name_stamp = '$name' where date = '$date' and gas_id = 2 and account = 2";
        $result = mysqli_query($connect, $userQuery);
        $userQuery = "update history set price = $a2_de_p , values = $a2_de_v  , timestamp = '$time' , name_stamp = '$name' where date = '$date' and gas_id = 3 and account = 2";
        $result = mysqli_query($connect, $userQuery);
        if (!$result) {
            die ("Could not successfully run the query $userQuery ".mysqli_error($connect));
            }

        $userQuery = "update history set price = $a3_91_p , values = $a3_91_v  , timestamp = '$time' , name_stamp = '$name' where date = '$date' and gas_id = 1 and account = 3";
        $result = mysqli_query($connect, $userQuery);
        $userQuery = "update history set price = $a3_95_p , values = $a3_95_v  , timestamp = '$time' , name_stamp = '$name' where date = '$date' and gas_id = 2 and account = 3";
        $result = mysqli_query($connect, $userQuery);
        $userQuery = "update history set price = $a3_de_p , values = $a3_de_v  , timestamp = '$time' , name_stamp = '$name' where date = '$date' and gas_id = 3 and account = 3";
        $result = mysqli_query($connect, $userQuery);
        if (!$result) {
            die ("Could not successfully run the query $userQuery ".mysqli_error($connect));
            }
    }

    date_default_timezone_set("Asia/Bangkok");
    $date = date("Y-m-d");

    $userQuery = "select sum(value*price)/sum(value)+tran_price as sum from history where date = '$date' and gas_id = 1";
    $result = mysqli_query($connect, $userQuery);
    $row = mysqli_fetch_assoc($result);
    $s1 = $row['sum'];
    $userQuery = "select tran_price from history where date = '$date' and gas_id = 1 limit 1";
    $result = mysqli_query($connect, $userQuery);
    $row = mysqli_fetch_assoc($result);
    $s2 = $row['tran_price'];

    $rp = $s1 + $s2;

    $userQuery = "select sum(value) as sum from history where date = '$date' and gas_id = 1";
    $result = mysqli_query($connect, $userQuery);
    $row = mysqli_fetch_assoc($result);
    $s_val = $row['sum'];

    $p1 = $s_val * $rp;

    $userQuery = "select sum(value) as sum from history where date = (select date from history where date < '$date' group by date order by date DESC limit 1) and gas_id = 1";
    $result = mysqli_query($connect, $userQuery);
    $row = mysqli_fetch_assoc($result);
    $old_sum = $row['sum'];

    $userQuery = "select value from cost where date < '$date' and gas_id = 1 limit 1";
    $result = mysqli_query($connect, $userQuery);
    $row = mysqli_fetch_assoc($result);
    $old_price = $row['value'];

    $p2 = $old_sum * $old_price;
    $set = ($p1 / $p2) / ($old_sum + $s_val);
?>
    <script type="text/javascript">
        console.log("<?php echo "$set | $p1 | $p2 | $s_val | $old_sum  | $old_price"; ?>")
    </script>
<?php
    $userQuery = "select * from cost where date = '$date' and gas_id = 1";
    $result = mysqli_query($connect, $userQuery);
    if (mysqli_num_rows($result) == 0) {
        $userQuery = "insert into cost(gas_id,value,date) values(1,$set,'$date')";
        $result = mysqli_query($connect, $userQuery);
    } else {
        $userQuery = "update cost set value = $set where date = '$date' and gas_id = 1";
        $result = mysqli_query($connect, $userQuery);
    }


    $userQuery = "select sum(value*price)/sum(value)+tran_price as sum from history where date = '$date' and gas_id = 2";
    $result = mysqli_query($connect, $userQuery);
    $row = mysqli_fetch_assoc($result);
    $s1 = $row['sum'];
    $userQuery = "select tran_price from history where date = '$date' and gas_id = 2";
    $result = mysqli_query($connect, $userQuery);
    $row = mysqli_fetch_assoc($result);
    $s2 = $row['tran_price'];

    $rp = $s1 + $s2;

    $userQuery = "select sum(value) as sum from history where date = '$date' and gas_id = 2";
    $result = mysqli_query($connect, $userQuery);
    $row = mysqli_fetch_assoc($result);
    $s_val = $row['sum'];

    $p1 = $s_val * $rp;

    $userQuery = "select sum(value) as sum from history where date = (select date from history where date < '$date' group by date order by date DESC limit 1) and gas_id = 2";
    $result = mysqli_query($connect, $userQuery);
    $row = mysqli_fetch_assoc($result);
    $old_sum = $row['sum'];

    $userQuery = "select value from cost where date < '$date' and gas_id = 2 limit 1";
    $result = mysqli_query($connect, $userQuery);
    $row = mysqli_fetch_assoc($result);
    $old_price = $row['value'];

    $p2 = $old_sum * $old_price;
    $set = ($p1 / $p2) / ($old_sum + $s_val);

    $userQuery = "select * from cost where date = '$date' and gas_id = 2";
    $result = mysqli_query($connect, $userQuery);
    if (mysqli_num_rows($result) == 0) {
        $userQuery = "insert into cost(gas_id,value,date) values(2,$set,'$date')";
        $result = mysqli_query($connect, $userQuery);
    } else {
        $userQuery = "update cost set value = $set where date = '$date' and gas_id = 2";
        $result = mysqli_query($connect, $userQuery);
    }


    $userQuery = "select sum(value*price)/sum(value)+tran_price as sum from history where date = '$date' and gas_id = 3";
    $result = mysqli_query($connect, $userQuery);
    $row = mysqli_fetch_assoc($result);
    $s1 = $row['sum'];
    $userQuery = "select tran_price from history where date = '$date' and gas_id = 3";
    $result = mysqli_query($connect, $userQuery);
    $row = mysqli_fetch_assoc($result);
    $s2 = $row['tran_price'];

    $rp = $s1 + $s2;

    $userQuery = "select sum(value) as sum from history where date = '$date' and gas_id = 3";
    $result = mysqli_query($connect, $userQuery);
    $row = mysqli_fetch_assoc($result);
    $s_val = $row['sum'];

    $p1 = $s_val * $rp;

    $userQuery = "select sum(value) as sum from history where date = (select date from history where date < '$date' group by date order by date DESC limit 1) and gas_id = 3";
    $result = mysqli_query($connect, $userQuery);
    $row = mysqli_fetch_assoc($result);
    $old_sum = $row['sum'];

    $userQuery = "select value from cost where date < '$date' and gas_id = 3 limit 1";
    $result = mysqli_query($connect, $userQuery);
    $row = mysqli_fetch_assoc($result);
    $old_price = $row['value'];

    $p2 = $old_sum * $old_price;
    $set = ($p1 / $p2) / ($old_sum + $s_val);

    $userQuery = "select * from cost where date = '$date' and gas_id = 3";
    $result = mysqli_query($connect, $userQuery);
    if (mysqli_num_rows($result) == 0) {
        $userQuery = "insert into cost(gas_id,value,date) values(3,$set,'$date')";
        $result = mysqli_query($connect, $userQuery);
    } else {
        $userQuery = "update cost set value = $set where date = '$date' and gas_id = 3";
        $result = mysqli_query($connect, $userQuery);
    }



    $_SESSION['msg'] = "ดำเนินการสำเร็จ";
    header("Location:history.php");
}
