<!DOCTYPE html>
<?php include("header.php"); ?>

<html>
   <body>
	<h1>Student Query</h1>
	<table border="1" bordercolor="black" width="100%" align="center">
		<tr>
		<th>ID</th> 
		<th>Name</th> 
		<th>Email</th> 
		<th>Mobile No.</th>
		<th>Query</th> 
		<th>Reply</th>
		<th>Date Time</th>
		<th>Reply Query</th>
		</tr>
<?php
	$query=mysqli_query($cn,"select * from studquery");
	while($rec=mysqli_fetch_array($query))
	{
		echo "<tr>
		<td>".$rec[0]."</td>
		<td>".$rec[1]."</td>
		<td>".$rec[2]."</td>
		<td>".$rec[3]."</td>
		<td>".$rec[4]."</td>
		<td>".$rec[5]."</td>
		<td>".$rec[6]."</td>
		<td><a href='replyq.php?id=".$rec[0]."'>Reply</a></td>
		</tr>";
	}	
?>
	</table>
   </body>
</html>

<?php include("../footer.php"); ?>