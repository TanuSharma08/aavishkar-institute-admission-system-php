<!DOCTYPE html>
<?php include("header.php"); ?>

<html>
   <body>
	<h1>Admission List</h1>
	<center><a href="newstud.php">Add New Student</a></center><br><br> 

	<table border="1" bordercolor="black">
		<tr>
		<th>ID</th>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Father's Name</th>
		<th>DOB</th>
		<th>Gender</th>	
		<th>Adhaar No.</th>
		<th>Photo</th>
		<th>Parent's Profession</th>
		<th>Co./Department Name</th>
		<th>Designation</th>
		<th>Address</th>
		<th>Whatsapp No.</th>		
		<th>Email</th>
		<th>Student's Mobile No.</th>
		<th>Parent's Mobile No.</th>			
		<th>Last Appeared/Passed Exam</th>	
		<th>Year Of Passing</th>	
		<th>Institute Name</th>			
		<th>Percentage</th>	
		<th>Standard</th>
		<th>School Name</th>	
		<th>Course</th>	
		<th>Semester</th>	
		<th>College Name</th>
		<th>Other Course</th>	
		<th>Status</th>	
		<th>Date</th>
		<th>Confirm</th>	
		<th>Delete</th>
		</tr>
<?php
	$query=mysqli_query($cn,"select * from admission");
	
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
		<td><img src='../images/".$rec[7]."' height=100 width=100></td>
		<td>".$rec[8]."</td>
		<td>".$rec[9]."</td>
		<td>".$rec[10]."</td>
		<td>".$rec[11]."</td>
		<td>".$rec[12]."</td>
		<td>".$rec[13]."</td>
		<td>".$rec[14]."</td>
		<td>".$rec[15]."</td>
		<td>".$rec[16]."</td>
		<td>".$rec[17]."</td>
		<td>".$rec[18]."</td>
		<td>".$rec[19]."</td>
		<td>".$rec[20]."</td>
		<td>".$rec[21]."</td>
		<td>".$rec[22]."</td>
		<td>".$rec[23]."</td>
		<td>".$rec[24]."</td>
		<td>".$rec[25]."</td>
		<td>".$rec[26]."</td>
		<td>".$rec[27]."</td>		
		<td><a href='confirmad.php?id=".$rec[0]."'>Confirm</a></td>
		<td><a href='delstud.php?id=".$rec[0]."'>Delete</a></td>
		</tr>";
	}		
?>
	</table>
   </body>
</html>

<?php include("../footer.php"); ?>


