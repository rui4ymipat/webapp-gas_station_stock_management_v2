<?php 
 $t = $_GET['t'];
 $file = fopen('note.txt','w+');
 fprintf($file,"%s",$t);
 $_SESSION['msg'] = "ดำเนินการสำเร็จ";
 // header("Location:management.php");
 ?>
<script type="text/javascript"> 
    console.log("<?php echo $t; ?>");
</script>