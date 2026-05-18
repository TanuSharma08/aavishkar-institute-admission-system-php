<?php
	$cn=mysqli_connect("localhost","root","","aavishkar_institute");
	$id=$_GET['id'];
	
	$q=mysqli_query($cn,"delete from feedback where id=$id");	
	
	echo "<script>alert('Feedback Deleted Successfully...')</script>";
	echo "<script>window.location='feedback.php'</script>";
?>