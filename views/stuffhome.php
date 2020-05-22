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
	<title>Staff home page</title>
	<link rel="stylesheet" href="staffhomestyle.css">
</head>
<body>
	<center>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<div class="home">
		<u><b><a href="staff.php">See Apointed Nurse Profile</a></b></u><br>
		<u><b><a href="staff02.php">See Apointed Assistant</a></b></u><br>
		<div class="link">
		<center><button><a href="profile.php" class="button">Back</a></button><br><br>
			</div>
		</div>
	</center>

			
            
			

</body>
</html>