<?php 
 $t = $_GET['t'];
 $file = fopen('note.txt','w+');
 file_put_contents($file,$t);
 $_SESSION['msg'] = "ดำเนินการสำเร็จ";
header("Location:management.php");