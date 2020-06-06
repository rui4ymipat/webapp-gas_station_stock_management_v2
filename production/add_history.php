<?php

require_once "connect.php";
session_start();
function check($a)
{
    if (empty($a)) {
        return "0";
    } else {
        return $a;
    }
}
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
        $a1_91_p = check($_GET['91p_a1']);
        $a1_91_v = check($_GET['91d_a1']);
        $a1_95_p = check($_GET['95p_a1']);
        $a1_95_v = check($_GET['95d_a1']);
        $a1_de_p = check($_GET['Dep_a1']);
        $a1_de_v = check($_GET['Ded_a1']);

        $a2_91_p = check($_GET['91p_a2']);
        $a2_91_v = check($_GET['91d_a2']);
        $a2_95_p = check($_GET['95p_a2']);
        $a2_95_v = check($_GET['95d_a2']);
        $a2_de_p = check($_GET['Dep_a2']);
        $a2_de_v = check($_GET['Ded_a2']);

        $a3_91_p = check($_GET['91p_a3']);
        $a3_91_v = check($_GET['91d_a3']);
        $a3_95_p = check($_GET['95p_a3']);
        $a3_95_v = check($_GET['95d_a3']);
        $a3_de_p = check($_GET['Dep_a3']);
        $a3_de_v = check($_GET['Ded_a3']);
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

        $Qa1 = "insert into history(car_id,gas_id,price,value,tran_price,account,date,timestamp,name_stamp) 
    values($car,1,$a3_91_p,$a3_91_v,$tran,3,'$date','$time','$name')";
        mysqli_query($connect, $Qa1);

        $Qa1 = "insert into history(car_id,gas_id,price,value,tran_price,account,date,timestamp,name_stamp) 
    values($car,2,$a3_95_p,$a3_95_v,$tran,3,'$date','$time','$name')";
        mysqli_query($connect, $Qa1);

        $Qa1 = "insert into history(car_id,gas_id,price,value,tran_price,account,date,timestamp,name_stamp) 
    values($car,3,$a3_de_p,$a3_de_v,$tran,3,'$date','$time','$name')";
        mysqli_query($connect, $Qa1);
    } else {
        $userQuery = "update history set car_id = $car where date = '$date'";
        $result = mysqli_query($connect, $userQuery);
        $userQuery = "update history set tran_price = $tran where date = '$date'";
        $result = mysqli_query($connect, $userQuery);
        //account 1
        $userQuery = "update history set price = $a1_91_p , value = $a1_91_v , timestamp = '$time' , name_stamp = '$name' where date = '$date' and gas_id = 1 and account = 1";
        $result = mysqli_query($connect, $userQuery);
        $userQuery = "update history set price = $a1_95_p , value = $a1_95_v  , timestamp = '$time' , name_stamp = '$name' where date = '$date' and gas_id = 2 and account = 1";
        $result = mysqli_query($connect, $userQuery);
        $userQuery = "update history set price = $a1_de_p , value = $a1_de_v  , timestamp = '$time' , name_stamp = '$name' where date = '$date' and gas_id = 3 and account = 1";
        $result = mysqli_query($connect, $userQuery);
        //account2
        $userQuery = "update history set price = $a2_91_p , value = $a2_91_v  , timestamp = '$time' , name_stamp = '$name' where date = '$date' and gas_id = 1 and account = 2";
        $result = mysqli_query($connect, $userQuery);
        $userQuery = "update history set price = $a2_95_p , value = $a2_95_v  , timestamp = '$time' , name_stamp = '$name' where date = '$date' and gas_id = 2 and account = 2";
        $result = mysqli_query($connect, $userQuery);
        $userQuery = "update history set price = $a2_de_p , value = $a2_de_v  , timestamp = '$time' , name_stamp = '$name' where date = '$date' and gas_id = 3 and account = 2";
        $result = mysqli_query($connect, $userQuery);

        $userQuery = "update history set price = $a3_91_p , value = $a3_91_v  , timestamp = '$time' , name_stamp = '$name' where date = '$date' and gas_id = 1 and account = 3";
        $result = mysqli_query($connect, $userQuery);
        $userQuery = "update history set price = $a3_95_p , value = $a3_95_v  , timestamp = '$time' , name_stamp = '$name' where date = '$date' and gas_id = 2 and account = 3";
        $result = mysqli_query($connect, $userQuery);
        $userQuery = "update history set price = $a3_de_p , value = $a3_de_v  , timestamp = '$time' , name_stamp = '$name' where date = '$date' and gas_id = 3 and account = 3";
        $result = mysqli_query($connect, $userQuery);
    }

    date_default_timezone_set("Asia/Bangkok");
    $date = date("Y-m-d");
    $sum_91 = 0;
    $userQuery = "select price,value from history where date = '$date' and gas_id = 1 and account = 1";
    $result = mysqli_query($connect, $userQuery);
    if (mysqli_num_rows($result) == 0) {
        $sum_91 += 0;
        $s += 0;
    } else {
        $row = mysqli_fetch_assoc($result);
        $sum_91 += $row['value'];
        $s += $row['value'] * $row['price'];
    }

    $userQuery = "select price,value from history where date = '$date' and gas_id = 1 and account = 2";
    $result = mysqli_query($connect, $userQuery);
    if (mysqli_num_rows($result) == 0) {

        $sum_91 += 0;
        $s += 0;
    } else {
        $row = mysqli_fetch_assoc($result);
        $sum_91 += $row['value'];
        $s += $row['value'] * $row['price'];
    }
    $userQuery = "select price,value,tran_price from history where date = '$date' and gas_id = 1 and account = 3";
    $result = mysqli_query($connect, $userQuery);
    if (mysqli_num_rows($result) == 0) {
        $bb = 0;
        $sum_91 += 0;
        $s += 0;
    } else {
        $row = mysqli_fetch_assoc($result);
        $sum_91 += $row['value'];
        $s += $row['value'] * $row['price'];
    }
    $userQuery = "select tran_price from history where date = '$date' group by tran_price";
    $result = mysqli_query($connect, $userQuery);
    $row = mysqli_fetch_assoc($result);
    if ($sum_91 == 0) {
        echo "<td>0</td>";
    } else { ?>
        <td><?php echo number_format($bb = ($s / $sum_91) + $row['tran_price'], 2); ?> </td>
    <?php
    }
    $userQuery = "select value from gastank where date = '$date' and substr(timestamp,1,2) in (11,12,13,14,15,16,17,18) and gas_id = 1";
    $result = mysqli_query($connect, $userQuery);
    if (mysqli_num_rows($result) == 0) {
        $aa = 0;
    } else {
        $row = mysqli_fetch_assoc($result);
    ?>
        <td><?php echo number_format($aa = $row['value']); ?> </td>
    <?php
    }
    $userQuery = "select value from cost where date < '$date' and gas_id = 1 limit 1";
    $result = mysqli_query($connect, $userQuery);
    $row = mysqli_fetch_assoc($result);
    if (mysqli_num_rows($result) == 0) {
        $cc = 0;
    } else {
    ?>
        <td><?php echo number_format($cc = $row['value'], 2); ?></td>
    <?php }

    ?>
    <td><?php echo number_format($as1 = $sum_91 + $aa); ?> </td>
    <?php if ($sum_91 == 0) {

    ?><td><?php echo number_format(($as2 = $aa * $cc), 2); ?></td>
    <?php
    } else { ?>
        <td><?php echo number_format(($as2 = $bb * $sum_91) + ($aa * $cc), 2); ?></td>
<?php }
    $set = $as2 / $as1;
    $userQuery = "select * from cost where date = '$date' and gas_id = 1";
    $result = mysqli_query($connect, $userQuery);
    if (mysqli_num_rows($result) == 0) {
        $userQuery = "insert into cost(gas_id,value,date) values(1,$set,'$date')";
        $result = mysqli_query($connect, $userQuery);
        if (!$result) {
            die("Could not successfully run the query $userQuery " . mysqli_error($connect));
        }
    } else {
        $userQuery = "update cost set value = $set where date = '$date' and gas_id = 1";
        $result = mysqli_query($connect, $userQuery);
        if (!$result) {
            die("Could not successfully run the query $userQuery " . mysqli_error($connect));
        }
    }


    $sum_91 = 0;
    $userQuery = "select price,value from history where date = '$date' and gas_id = 2 and account = 1";
    $result = mysqli_query($connect, $userQuery);
    if (mysqli_num_rows($result) == 0) {
        $sum_91 += 0;
        $s += 0;
    } else {
        $row = mysqli_fetch_assoc($result);
        $sum_91 += $row['value'];
        $s += $row['value'] * $row['price'];
    }

    $userQuery = "select price,value from history where date = '$date' and gas_id = 2 and account = 2";
    $result = mysqli_query($connect, $userQuery);
    if (mysqli_num_rows($result) == 0) {

        $sum_91 += 0;
        $s += 0;
    } else {
        $row = mysqli_fetch_assoc($result);
        $sum_91 += $row['value'];
        $s += $row['value'] * $row['price'];
    }
    $userQuery = "select price,value,tran_price from history where date = '$date' and gas_id = 2 and account = 3";
    $result = mysqli_query($connect, $userQuery);
    if (mysqli_num_rows($result) == 0) {
        $bb = 0;
        $sum_91 += 0;
        $s += 0;
    } else {
        $row = mysqli_fetch_assoc($result);
        $sum_91 += $row['value'];
        $s += $row['value'] * $row['price'];
    }
    $userQuery = "select tran_price from history where date = '$date' group by tran_price";
    $result = mysqli_query($connect, $userQuery);
    $row = mysqli_fetch_assoc($result);
    if ($sum_91 == 0) {
        echo "<td>0</td>";
    } else { ?>
        <td><?php echo number_format($bb = ($s / $sum_91) + $row['tran_price'], 2); ?> </td>
    <?php
    }
    $userQuery = "select value from gastank where date = '$date' and substr(timestamp,1,2) in (11,12,13,14,15,16,17,18) and gas_id = 2";
    $result = mysqli_query($connect, $userQuery);
    if (mysqli_num_rows($result) == 0) {
        $aa = 0;
    } else {
        $row = mysqli_fetch_assoc($result);
    ?>
        <td><?php echo number_format($aa = $row['value']); ?> </td>
    <?php
    }
    $userQuery = "select value from cost where date < '$date' and gas_id = 2 limit 1";
    $result = mysqli_query($connect, $userQuery);
    $row = mysqli_fetch_assoc($result);
    if (mysqli_num_rows($result) == 0) {
        $cc = 0;
    } else {
    ?>
        <td><?php echo number_format($cc = $row['value'], 2); ?></td>
    <?php }

    ?>
    <td><?php echo number_format($as1 = $sum_91 + $aa); ?> </td>
    <?php if ($sum_91 == 0) {

    ?><td><?php echo number_format(($as2 = $aa * $cc), 2); ?></td>
    <?php
    } else { ?>
        <td><?php echo number_format(($as2 = $bb * $sum_91) + ($aa * $cc), 2); ?></td>
<?php }
    $set = $as2 / $as1;

    $userQuery = "select * from cost where date = '$date' and gas_id = 2";
    $result = mysqli_query($connect, $userQuery);
    if (mysqli_num_rows($result) == 0) {
        $userQuery = "insert into cost(gas_id,value,date) values(2,$set,'$date')";
        $result = mysqli_query($connect, $userQuery);
        if (!$result) {
            die("Could not successfully run the query $userQuery " . mysqli_error($connect));
        }
    } else {
        $userQuery = "update cost set value = $set where date = '$date' and gas_id = 2";
        $result = mysqli_query($connect, $userQuery);
        if (!$result) {
            die("Could not successfully run the query $userQuery " . mysqli_error($connect));
        }
    }


    $sum_91 = 0;
    $userQuery = "select price,value from history where date = '$date' and gas_id = 3 and account = 1";
    $result = mysqli_query($connect, $userQuery);
    if (mysqli_num_rows($result) == 0) {
        $sum_91 += 0;
        $s += 0;
    } else {
        $row = mysqli_fetch_assoc($result);
        $sum_91 += $row['value'];
        $s += $row['value'] * $row['price'];
    }

    $userQuery = "select price,value from history where date = '$date' and gas_id = 3 and account = 2";
    $result = mysqli_query($connect, $userQuery);
    if (mysqli_num_rows($result) == 0) {

        $sum_91 += 0;
        $s += 0;
    } else {
        $row = mysqli_fetch_assoc($result);
        $sum_91 += $row['value'];
        $s += $row['value'] * $row['price'];
    }
    $userQuery = "select price,value,tran_price from history where date = '$date' and gas_id = 3 and account = 3";
    $result = mysqli_query($connect, $userQuery);
    if (mysqli_num_rows($result) == 0) {
        $bb = 0;
        $sum_91 += 0;
        $s += 0;
    } else {
        $row = mysqli_fetch_assoc($result);
        $sum_91 += $row['value'];
        $s += $row['value'] * $row['price'];
    }
    $userQuery = "select tran_price from history where date = '$date' group by tran_price";
    $result = mysqli_query($connect, $userQuery);
    $row = mysqli_fetch_assoc($result);
    if ($sum_91 == 0) {
        echo "<td>0</td>";
    } else { ?>
        <td><?php echo number_format($bb = ($s / $sum_91) + $row['tran_price'], 2); ?> </td>
    <?php
    }
    $userQuery = "select value from gastank where date = '$date' and substr(timestamp,1,2) in (11,12,13,14,15,16,17,18) and gas_id = 3";
    $result = mysqli_query($connect, $userQuery);
    if (mysqli_num_rows($result) == 0) {
        $aa = 0;
    } else {
        $row = mysqli_fetch_assoc($result);
    ?>
        <td><?php echo number_format($aa = $row['value']); ?> </td>
    <?php
    }
    $userQuery = "select value from cost where date < '$date' and gas_id = 2 limit 1";
    $result = mysqli_query($connect, $userQuery);
    $row = mysqli_fetch_assoc($result);
    if (mysqli_num_rows($result) == 0) {
        $cc = 0;
    } else {
    ?>
        <td><?php echo number_format($cc = $row['value'], 2); ?></td>
    <?php }

    ?>
    <td><?php echo number_format($as1 = $sum_91 + $aa); ?> </td>
    <?php if ($sum_91 == 0) {

    ?><td><?php echo number_format(($as2 = $aa * $cc), 2); ?></td>
    <?php
    } else { ?>
        <td><?php echo number_format(($as2 = $bb * $sum_91) + ($aa * $cc), 2); ?></td>
<?php }
    $set = $as2 / $as1;

    $userQuery = "select * from cost where date = '$date' and gas_id = 3";
    $result = mysqli_query($connect, $userQuery);
    if (mysqli_num_rows($result) == 0) {
        $userQuery = "insert into cost(gas_id,value,date) values(3,$set,'$date')";
        $result = mysqli_query($connect, $userQuery);
        if (!$result) {
            die("Could not successfully run the query $userQuery " . mysqli_error($connect));
        }
    } else {
        $userQuery = "update cost set value = $set where date = '$date' and gas_id = 3";
        $result = mysqli_query($connect, $userQuery);
        if (!$result) {
            die("Could not successfully run the query $userQuery " . mysqli_error($connect));
        }
    }



    $_SESSION['msg'] = "ดำเนินการสำเร็จ";
    header("Location:history.php");
}
