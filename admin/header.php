<!DOCTYPE html>
<?php 
	$cn=mysqli_connect("localhost","root","","aavishkar_institute"); 
	echo "<link rel='stylesheet' href='style.css'>";
	session_start();
	if(!isset($_SESSION['admin']))
	{
		header('location:../login.php');
	}
?>

<html>
   <head>
	<meta charset="UTF-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<title>Aavishkar Institute</title>
  	<link rel="icon" type="image/ico" href="../images/favicon.ico">
  	<link rel="stylesheet" href="../user/headerstyle.css">
	<script>
		function openNav() {
  		document.getElementById("mySidepanel").style.width = "250px";
		}

		function closeNav() {
  		document.getElementById("mySidepanel").style.width = "0";
		}
	</script>
  </head>
   <body>
	<div class="header"><span class="openbtn" onclick="openNav()">☰ &nbsp;Aavishkar Institute</span></div>
	<div id="mySidepanel" class="sidepanel">
  	<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
	 <a href="index.php">Home</a>
  	<a href="admissionlist.php">Manage Admissions</a>
  	<a href="courses.php">Manage Courses</a>
  	<a href="users.php">Manage Users</a>
  	<a href="messages.php">Send Message</a>
  	<a href="studquery.php">Manage Student Query</a>
  	<a href="lv_app.php">Manage Leave Application</a>
  	<a href="inquiry.php">Inquiry</a>
  	<a href="feedback.php">Manage Feedback</a>
  	<a href="profile.php">Profile</a>
  	<a href="chngpswd.php">Change Password</a>
  	<a href="logout.php">Logout</a>
	</div>   
</body>
</html> 
