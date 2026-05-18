<?php
	$cn=mysqli_connect("localhost","root","","aavishkar_institute");

	$id=$_GET['id'];	
	$q=mysqli_query($cn,"delete from user_login where id=$id");

	echo "<script>alert('Record Deleted Successfully...')</script> ";
	echo "<script>window.location='users.php'</script>";
?>