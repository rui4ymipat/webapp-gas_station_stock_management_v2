<?php 
 $t = $_GET['t'];
 $file = fopen('note.txt','w+');
 $text= str_replace("\n", "<br>\n", $t);
 fprintf($file,"%s",$text);
 fclose($file);
 $_SESSION['msg'] = "ดำเนินการสำเร็จ";
 header("Location:management.php");
 ?>
<script type="text/javascript"> 
    console.log("<?php echo $text; ?>");
</script>