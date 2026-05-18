<?php
	$cn=mysqli_connect("localhost","root","","aavishkar_institute");
	$id=$_GET['id'];
	
	$q=mysqli_query($cn,"delete from courses where id=$id");	
	
	echo "<script>alert('Course Deleted Successfully...')</script>";
	echo "<script>window.location='courses.php'</script>";
?>