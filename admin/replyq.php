<?php
	include("header.php"); 
	$id=$_GET['id'];
	$query=mysqli_query($cn,"select * from studquery where id=$id");

	echo "<form method='POST' action='reply.php'>";
	echo "<table align='center' cellpadding='6px'><h1 align='center'>Reply to Student Query</h1>";
	echo "<input type='hidden' name='id' value='".$id."'>";
	
	while($rec=mysqli_fetch_array($query))
	{
		echo "<tr><td>Query</td>
		<td><input type='text' name='query' value='".$rec[4]."' readonly></td></tr>
		<tr><td>Reply</td>
		<td><textarea name='reply' value='".$rec[5]."'></textarea></td></tr>
		<tr><td></td><td><input type='submit' name='submit' value='Send'></td></tr>";
	}
	echo "</table></form><br><br><br><br><br>";
?>

<?php include("../footer.php"); ?>