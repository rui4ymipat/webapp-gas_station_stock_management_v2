<?php
require_once "connect.php";
date_default_timezone_set("Asia/Bangkok");
session_start();
$date = date("Y-m-d");
$yes_date = date("Y-m-d", strtotime("yesterday"));
$g91 = $_GET['g91'];
$g95 = $_GET['g95'];
$de = $_GET['de'];
$time = date("h:i:sa");
$t = substr($time, 8);
if ($t == 'pm') {
    if ((int) substr($time, 0, 2) != 12) {
        $st = explode(":", $time);
        $time_set = array($st[0] + 12, $st[1], $st[2]);
        $check_time = (int)$st[0] + 12;
        $time = implode(":", $time_set);
    }
} else if ($t == 'am') {
    if ((int) substr($time, 0, 2) == 12) {
        $st = explode(":", $time);
        $time_set = array($st[0] + 12, $st[1], $st[2]);
        $check_time = (int) $st[0] + 12;
        $time = implode(":", $time_set);
    } else {
        $st = explode(":", $time);
        $check_time = (int)$st[0];
    }
}
$name = $_SESSION['user_name'];
$che = 0;
if($g91 >= 0 || $g95 >= 0 || $de >= 0)
{
    $che = 1;
}
if (empty($g91) && empty($g95) && empty($de) && $che == 0) {
    $_SESSION['msg'] = "กรุณากรอกข้อมูลให้ครบ";
    header("Location:stockFuel.php");
} else {
    if ($check_time <= 24 && $check_time >= 19) {
        $userQuery = "select * from gastank where gas_id = 1 and date = '$date' and substr(timestamp,1,2) in (19,20,21,22,23,24,1,2,3,4,5,6,7,8,9,10)";
        $result = mysqli_query($connect, $userQuery);
        if (mysqli_num_rows($result) == 0) {
            $userQuery = "insert into gastank(gas_id,value,date,timestamp,name_stamp) values(1,$g91,'$date','$time','$name')";
            $result = mysqli_query($connect, $userQuery);
        } else {
            $userQuery = "update gastank set value = $g91 , name_stamp = '$name' ,timestamp = '$time' where gas_id = 1 and date = '$date' and substr(timestamp,1,2) in (19,20,21,22,23,24,1,2,3,4,5,6,7,8,9,10)";
            $result = mysqli_query($connect, $userQuery);
        }

        $userQuery = "select * from gastank where gas_id = 2 and date = '$date' and substr(timestamp,1,2) in (19,20,21,22,23,24,1,2,3,4,5,6,7,8,9,10)";
        $result = mysqli_query($connect, $userQuery);
        if (mysqli_num_rows($result) == 0) {
            $userQuery = "insert into gastank(gas_id,value,date,timestamp,name_stamp) values(2,$g95,'$date','$time','$name')";
            $result = mysqli_query($connect, $userQuery);
        } else {
            $userQuery = "update gastank set value = $g95 , name_stamp = '$name' ,timestamp = '$time' where gas_id = 2 and date = '$date' and substr(timestamp,1,2) in (19,20,21,22,23,24,1,2,3,4,5,6,7,8,9,10)";
            $result = mysqli_query($connect, $userQuery);
        }

        $userQuery = "select * from gastank where gas_id = 3 and date = '$date' and substr(timestamp,1,2) in (19,20,21,22,23,24,1,2,3,4,5,6,7,8,9,10)";
        $result = mysqli_query($connect, $userQuery);
        if (mysqli_num_rows($result) == 0) {
            $userQuery = "insert into gastank(gas_id,value,date,timestamp,name_stamp) values(3,$de,'$date','$time','$name')";
            $result = mysqli_query($connect, $userQuery);
        } else {
            $userQuery = "update gastank set value = $de , name_stamp = '$name' ,timestamp = '$time' where gas_id = 3 and date = '$date' and substr(timestamp,1,2) in (19,20,21,22,23,24,1,2,3,4,5,6,7,8,9,10)";
            $result = mysqli_query($connect, $userQuery);
        }
    }
    else if ($check_time >= 1 && $check_time <= 10) {
        $userQuery = "select * from gastank where gas_id = 1 and date = '$yes_date' and substr(timestamp,1,2) in (19,20,21,22,23,24,1,2,3,4,5,6,7,8,9,10)";
        $result = mysqli_query($connect, $userQuery);
        if (!$result) {
            die ("Could not successfully run the query $userQuery ".mysqli_error($connect));
            }
        if (mysqli_num_rows($result) == 0) {
            $userQuery = "insert into gastank(gas_id,value,date,timestamp,name_stamp) values(1,$g91,'$yes_date','$time','$name')";
            $result = mysqli_query($connect, $userQuery);
        } else {
            $userQuery = "update gastank set value = $g91 , name_stamp = '$name' ,timestamp = '$time' where gas_id = 1 and date = '$yes_date' and substr(timestamp,1,2) in (19,20,21,22,23,24,1,2,3,4,5,6,7,8,9,10)";
            $result = mysqli_query($connect, $userQuery);
        }

        $userQuery = "select * from gastank where gas_id = 2 and date = '$yes_date' and substr(timestamp,1,2) in (19,20,21,22,23,24,1,2,3,4,5,6,7,8,9,10)";
        $result = mysqli_query($connect, $userQuery);
        if (!$result) {
            die ("Could not successfully run the query $userQuery ".mysqli_error($connect));
            }
        if (mysqli_num_rows($result) == 0) {
            $userQuery = "insert into gastank(gas_id,value,date,timestamp,name_stamp) values(2,$g95,'$yes_date','$time','$name')";
            $result = mysqli_query($connect, $userQuery);
        } else {
            $userQuery = "update gastank set value = $g95 , name_stamp = '$name' ,timestamp = '$time' where gas_id = 2 and date = '$yes_date' and substr(timestamp,1,2) in (19,20,21,22,23,24,1,2,3,4,5,6,7,8,9,10)";
            $result = mysqli_query($connect, $userQuery);
        }

        $userQuery = "select * from gastank where gas_id = 3 and date = '$yes_date' and substr(timestamp,1,2) in (19,20,21,22,23,24,1,2,3,4,5,6,7,8,9,10)";
        $result = mysqli_query($connect, $userQuery);
        if (!$result) {
            die ("Could not successfully run the query $userQuery ".mysqli_error($connect));
            }
        if (mysqli_num_rows($result) == 0) {
            $userQuery = "insert into gastank(gas_id,value,date,timestamp,name_stamp) values(3,$de,'$yes_date','$time','$name')";
            $result = mysqli_query($connect, $userQuery);
        } else {
            $userQuery = "update gastank set value = $de , name_stamp = '$name' ,timestamp = '$time' where gas_id = 3 and date = '$yes_date' and substr(timestamp,1,2) in (19,20,21,22,23,24,1,2,3,4,5,6,7,8,9,10)";
            $result = mysqli_query($connect, $userQuery);
        }
    } else if ($check_time >= 11 && $check_time <=18) {
        $userQuery = "select * from gastank where gas_id = 1 and date = '$date' and substr(timestamp,1,2) in (11,12,13,14,15,16,17,18)";
        $result = mysqli_query($connect, $userQuery);
        if (mysqli_num_rows($result) == 0) {
            $userQuery = "insert into gastank(gas_id,value,date,timestamp,name_stamp) values(1,$g91,'$date','$time','$name')";
            $result = mysqli_query($connect, $userQuery);
        } else {
            $userQuery = "update gastank set value = $g91 , name_stamp = '$name' ,timestamp = '$time' where gas_id = 1 and date = '$date' and substr(timestamp,1,2) in (11,12,13,14,15,16,17,18)";
            $result = mysqli_query($connect, $userQuery);
        }

        $userQuery = "select * from gastank where gas_id = 2 and date = '$date' and substr(timestamp,1,2) in (11,12,13,14,15,16,17,18)";
        $result = mysqli_query($connect, $userQuery);
        if (mysqli_num_rows($result) == 0) {
            $userQuery = "insert into gastank(gas_id,value,date,timestamp,name_stamp) values(2,$g95,'$date','$time','$name')";
            $result = mysqli_query($connect, $userQuery);
        } else {
            $userQuery = "update gastank set value = $g95 , name_stamp = '$name' ,timestamp = '$time' where gas_id = 2 and date = '$date' and substr(timestamp,1,2) in (11,12,13,14,15,16,17,18)";
            $result = mysqli_query($connect, $userQuery);
        }

        $userQuery = "select * from gastank where gas_id = 3 and date = '$date' and substr(timestamp,1,2) in (11,12,13,14,15,16,17,18)";
        $result = mysqli_query($connect, $userQuery);
        if (mysqli_num_rows($result) == 0) {
            $userQuery = "insert into gastank(gas_id,value,date,timestamp,name_stamp) values(3,$de,'$date','$time','$name')";
            $result = mysqli_query($connect, $userQuery);
        } else {
            $userQuery = "update gastank set value = $de , name_stamp = '$name' ,timestamp = '$time' where gas_id = 3 and date = '$date' and substr(timestamp,1,2) in (11,12,13,14,15,16,17,18)";
            $result = mysqli_query($connect, $userQuery);
        }
    }
    $userQuery = "select * from cost where date = '$date'";
    $result = mysqli_query($connect, $userQuery);
    $row = mysqli_fetch_assoc($result);
    if (mysqli_num_rows($result) > 0){
    date_default_timezone_set("Asia/Bangkok");
    $date = date("Y-m-d");
    $sum_91 = 0;
    $s = 0;
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
    $userQuery = "select value from cost where date < '$date' and gas_id = 1 order by date DESC limit 1";
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
        <td><?php echo number_format($as2 = ($bb * $sum_91) + ($aa * $cc), 2); ?></td>
<?php }
    if($as1 == 0 || $as2 == 0){
        $set = 0;
    }
    else{
        $set = round($as2 / $as1,2);
    }
    $userQuery = "select * from cost where date = '$date' and gas_id = 1";
    $result = mysqli_query($connect, $userQuery);
    if (mysqli_num_rows($result) == 0) {
        $userQuery = "insert into cost(gas_id,value,date) values(1,$set,'$date')";
        $result = mysqli_query($connect, $userQuery);
        
    } else {
        $userQuery = "update cost set value = $set where date = '$date' and gas_id = 1";
        $result = mysqli_query($connect, $userQuery);
        
    }


    $sum_91 = 0;
    $s = 0;
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
    $userQuery = "select value from cost where date < '$date' and gas_id = 2  order by date DESC limit 1";
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
        <td><?php echo number_format($as2 = ($bb * $sum_91) + ($aa * $cc), 2); ?></td>
<?php }
    if($as1 == 0 || $as2 == 0){
        $set = 0;
    }
    else{
        $set = round($as2 / $as1,2);
    }

    $userQuery = "select * from cost where date = '$date' and gas_id = 2";
    $result = mysqli_query($connect, $userQuery);
    if (mysqli_num_rows($result) == 0) {
        $userQuery = "insert into cost(gas_id,value,date) values(2,$set,'$date')";
        $result = mysqli_query($connect, $userQuery);
        
    } else {
        $userQuery = "update cost set value = $set where date = '$date' and gas_id = 2";
        $result = mysqli_query($connect, $userQuery);
        
    }


    $sum_91 = 0;
    $s = 0;
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
    $userQuery = "select value from cost where date < '$date' and gas_id = 3  order by date DESC limit 1";
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
        <td><?php echo number_format($as2 = ($bb * $sum_91) + ($aa * $cc), 2); ?></td>
<?php }
    if($as1 == 0 || $as2 == 0){
        $set = 0;
    }
    else{
        $set = round($as2 / $as1,2);
    }

    $userQuery = "select * from cost where date = '$date' and gas_id = 3";
    $result = mysqli_query($connect, $userQuery);
    if (mysqli_num_rows($result) == 0) {
        $userQuery = "insert into cost(gas_id,value,date) values(3,$set,'$date')";
        $result = mysqli_query($connect, $userQuery);
        
    } else {
        $userQuery = "update cost set value = $set where date = '$date' and gas_id = 3";
        $result = mysqli_query($connect, $userQuery);
        
    }
    }
    

    $_SESSION['msg'] = "ดำเนินการสำเร็จ";
    header("Location:stockFuel.php");
}
