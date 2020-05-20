<?php 
session_start();
 $t = $_GET['t'];
 $file = fopen('note.txt','w');
 $text= str_replace("\n", "<br>\n", $t);
 fprintf($file,"%s",$text);
 fclose($file);
 $_SESSION['msg'] = "ดำเนินการสำเร็จ";
 header("Location:management.php");
