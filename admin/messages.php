<!DOCTYPE html>
<?php include("header.php"); ?>

<html>
   <body>
	<h1>Messages</h1>
	<center><a href="sendmsg.php">Send Message</a></center><br><br> 
	<table border="1" bordercolor="black" width="100%">
		<tr>
		<th>ID</th> 
		<th>Subject</th>
		<th>Message</th>
		<th>Date</th>
		</tr>
<?php
	$query=mysqli_query($cn,"select * from messages");
	while($rec=mysqli_fetch_array($query))
	{
		echo "<tr>
		<td>".$rec[0]."</td>
		<td>".$rec[1]."</td>
		<td>".$rec[2]."</td>
		<td>".$rec[3]."</td>
		</tr>";
	}	
?>
	</table>
   </body>
</html><br>

<?php include("../footer.php"); ?>