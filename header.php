<!DOCTYPE html>

<?php 
	$cn=mysqli_connect("localhost","root","","aavishkar_institute"); 
?>

<html>
   <head>
   	<meta charset="UTF-8">
   	<meta http-equiv="X-UA-Compatible" content="IE=edge">
   	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Aavishkar Institute</title>
  	<link rel="stylesheet" href="headerstyle.css">
  	<link rel="icon" type="image/ico" href="images/favicon.ico">
   </head>
   <body>
	<div class="header">
 	 <span><img src="images/logo1.png" width="60px"></span><span> Aavishkar Institute</span>
  	<div class="header-right">
    	<a href="index.php">Home</a>
    	<a href="login.php">Admission</a>
    	<a href="courses.php">Courses</a>
    	<a href="about us.php">About Us</a>
    	<a href="inquiry.php">Inquiry</a>
    	<a href="login.php">Login</a>
    	<a href="signup.php" class="border">Sign Up</a>
  	</div>
	</div>
   </body>
</html>
