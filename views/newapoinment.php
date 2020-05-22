<?php
	session_start();

	if(!isset($_SESSION['name']))
	{
		header("location:login.php");
	}
?>
<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Manage Apoinment</title>
	<link rel="stylesheet" href="napoinmentstyle.css">
</head>
<body>

	<center>
	<form class="box">
		<legend>
			<b>Update And Set Next Apointment</b><br>
		</legend>
	<input type="radio" name="utype" value="Date">Cancel All The Apoinment Today<br>
	<input type="radio" name="utype" value="Patient">Cancel All The Apoinment for next  working days<br>
	<input type="radio" name="utype" value="Date">Cancel All The Apoinment for next  working days<br>
	<input type="radio" name="utype" value="Patient">Cancel All The Apoinment for next Month<br>
	<legend>
		<b>Set Next Apointment On Your Schedule</b>
	</legend>
	<input type="date" name="date"><br><br>
	<center><a href="apoinmet.php">Submit</a>
	<a href="apoinmet.php">Back</a>

						</form>
</body>

</html>