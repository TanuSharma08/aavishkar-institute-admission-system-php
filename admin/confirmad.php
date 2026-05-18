<?php
	$cn=mysqli_connect("localhost","root","","aavishkar_institute");

	$id=$_GET['id'];

	$q=mysqli_query($cn,"update admission set status='confirmed' where id=$id");	
	
	echo "<script> alert('Admission Confirmed')</script>";
	echo "<script>window.location='admissionlist.php'</script>";
?>