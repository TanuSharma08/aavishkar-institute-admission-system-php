<!DOCTYPE html>
<?php include("header.php"); ?>

<html>
   <body>
	<h1>Courses</h1>
	<center><a href="newcourse.php">Add New Course</a></center><br><br>

	<table border="1" bordercolor="black" width="100%">
		<tr>
		<th>Id</th>
		<th>Category</th>
		<th>Course Name</th>
		<th>Fees</th>
		<th>Duration</th>
		<th>Delete</th>
		</tr>
<?php 
	$query = mysqli_query($cn,"select * from courses");

	while($rec = mysqli_fetch_array($query))
	{
		echo "<tr>
		<td>".$rec[0]."</td>
		<td>".$rec[1]."</td>
		<td>".$rec[2]."</td>
		<td>".$rec[3]."</td>
		<td>".$rec[4]."</td>
		<td><a href='delcourse.php?id=".$rec[0]."'>Delete</a></td>
		</tr>";		
	}

?>
	</table>
   </body>
</html>

<?php include("../footer.php"); ?>
