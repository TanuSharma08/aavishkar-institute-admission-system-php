<!DOCTYPE html>
<?php
	include("header.php"); 
	
	if(isset($_POST['submit']))
	{		
		$category=$_POST['category'];
		$coursenm=$_POST['coursenm'];
		$fees=$_POST['fees'];
		$duration=$_POST['duration'];

		$q=mysqli_query($cn,"insert into courses(category,coursenm,fees,duration) values('$category','$coursenm','$fees','$duration')");
	
		echo "<script> alert('New Course Added Successfully....')</script>";
		echo "<script>window.location='courses.php'</script>";
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
	<table bordercolor="black" align="center" cellpadding="6px"><h1>Add New Course</h1>
	<tr>
		<td><b>Category</b></td>
		<td><input type="text" name="category"></td>
	</tr>
	<tr>
		<td><b>Course Name</b></td>
		<td><input type="text" name="coursenm"></td>
	</tr>
	<tr>
		<td><b>Fees</b></td>
		<td><input type="text" name="fees"></td>
	</tr>
	<tr>
		<td><b>Duration</b></td>
		<td><input type="text" name="duration"></td>
	</tr>
	</table>
		<br><center><input type="submit" name="submit" value="Add Course"></center>
	</form>
   </body>
</html><br><br>

<?php include("../footer.php"); ?>