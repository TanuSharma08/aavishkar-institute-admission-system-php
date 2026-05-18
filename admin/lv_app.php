<!DOCTYPE html>
<?php include("header.php"); ?>

<html>
   <body>
	<h1>Leave Application</h1>
	<table border="1" bordercolor="black" width="100%">
		<tr>
		<th>ID</th> 
		<th>Name</th> 
		<th>Email</th> 
		<th>Mobile No.</th>
		<th>Subject</th>
		<th>From Date</th> 
		<th>To Date</th>
		<th>Leave Reason</th>
		<th>Status</th>
		<th>Grant Leave</th>
		</tr>
<?php
	$query=mysqli_query($cn,"select * from lv_app");
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
		<td>".$rec[7]."</td>
		<td>".$rec[8]."</td>
		<td><a href='grantlv.php?id=".$rec[0]."'>Grant</a></td>
		</tr>";
	}	
?>

	</table>
   </body>
</html>

<?php include("../footer.php"); ?>