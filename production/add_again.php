<?php
    require_once "connect.php";
    echo "<tr>";
    $date = "2020-07-18";
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
    $set = round($as2 / $as1,2);
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
    $set = round($as2 / $as1,2);

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
    $set = round($as2 / $as1,2);

    $userQuery = "select * from cost where date = '$date' and gas_id = 3";
    $result = mysqli_query($connect, $userQuery);
    if (mysqli_num_rows($result) == 0) {
        $userQuery = "insert into cost(gas_id,value,date) values(3,$set,'$date')";
        $result = mysqli_query($connect, $userQuery);
        
    } else {
        $userQuery = "update cost set value = $set where date = '$date' and gas_id = 3";
        $result = mysqli_query($connect, $userQuery);
        
    }
    echo "</tr>";