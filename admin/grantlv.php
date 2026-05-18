<?php
	$cn=mysqli_connect("localhost","root","","aavishkar_institute");

	$id=$_GET['id'];

	$q=mysqli_query($cn,"update lv_app set status='granted' where id=$id");	
	
	echo "<script> alert('Leave Granted')</script>";
	echo "<script>window.location='lv_app.php'</script>";
?>