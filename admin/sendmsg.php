<!DOCTYPE html>
<?php
	include("header.php"); 
	
	if(isset($_POST['submit']))
	{		
		$subject=$_POST['subject'];
		$message=$_POST['message'];
		$date=$_POST['date'];

		$q=mysqli_query($cn,"insert into messages(subject,message,date) values('$subject','$message','$date')");
		
		echo "<script> alert('Message Sent Successfully')</script>";
		echo "<script>window.location='messages.php'</script>";
	}
?>
<html>
   <head>
	<style>
		tr {
			text-align:left;
		}
	</style>
   </head>
   <body>
    	<form method="POST" action="">
	<table bordercolor="black" align="center" cellpadding="6px">
	<h1>Send Message</h1>
	
	<tr>
		<td><b>Subject</b></td>
		<td><input type="text" name="subject"></td>
	</tr>
	<tr>
		<td><b>Message</b></td>
		<td><textarea name="message"></textarea></td>
	</tr>
	<tr>
		<td><b>Date</b></td>
		<td><input type="date" name="date"></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" name="submit" value="Send"></td>
	</tr>
	</table>
	</form>
   </body>
</html><br><br><br>

<?php include("../footer.php"); ?>