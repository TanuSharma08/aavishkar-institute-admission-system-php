<!DOCTYPE html>
<?php include("header.php"); ?>

<html>
   <body>
	<h1>Inquiry</h1>
	<table border="1" bordercolor="black" width="100%">
		<tr>
		<th>ID</th> 
		<th>Name</th> 
		<th>Email</th> 
		<th>Mobile No.</th>
		<th>Message</th> 
		<th>Date Time</th>
		</tr>
<?php
	$query=mysqli_query($cn,"select * from contactus");
	while($rec=mysqli_fetch_array($query))
	{
		echo "<tr>
		<td>".$rec[0]."</td>
		<td>".$rec[1]."</td>
		<td>".$rec[2]."</td>
		<td>".$rec[3]."</td>
		<td>".$rec[4]."</td>
		<td>".$rec[5]."</td>
		</tr>";
	}	
?>
	</table>
   </body>
</html><br><br><br><br>

<?php  include("../footer.php"); ?>