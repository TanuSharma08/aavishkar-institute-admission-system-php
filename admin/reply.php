<?php
	$cn=mysqli_connect("localhost","root","","aavishkar_institute");
	$id=$_POST['id'];
	$reply=$_POST['reply'];

	$q=mysqli_query($cn,"update studquery set reply='$reply' where id=$id");	
	echo "<script> alert('Reply Sent Successfully')</script>";
	echo "<script>window.location='studquery.php'</script>";
?>

