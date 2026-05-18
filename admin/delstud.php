<?php
	$cn=mysqli_connect("localhost","root","","aavishkar_institute");

	$id=$_GET['id'];	
	$q=mysqli_query($cn,"delete from admission where id=$id");

	echo "<script>alert('Record Deleted Successfully...')</script> ";
	echo "<script>window.location='admissionlist.php'</script>";
?>