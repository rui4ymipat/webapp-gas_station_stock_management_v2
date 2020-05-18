<?php 
 $t = $_GET['t'];

 $file = fopen('note.txt','w+');
 fwrite($file,$t);
 $_SESSION['msg'] = "ดำเนินการสำเร็จ";
header("Location:management.php");