<?php
	session_start();

	if(!isset($_SESSION['name']))
	{
		header("location:login.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>User's home page</title>
	<link rel="stylesheet" href="prostyle.css">
	</head>
	<body>
		<form class="box" method="POST" action="">
		
			<center>
				<h1>Welcome Doctor!</h1>
				<b><i><u><a href="doctorprofile.php">Profile</a></u></i></b><br>
				<br>
				<b><i><u><a href="changepassword.php">Change Password</a></u></i></b><br>
				<br>
				<b><i><u><a href="apoinmet.php">Todays Appoinments</a></u></i></b><br>
				<br>
				
				
				<b><i><u><a href="stuffhome.php">My Staff</a></u></i></b><br>
				<br>
				
				<b><i><u><a href="updateadmin.php">Update Profile</a></i></b><br>
					<br>
					<b><i><u><a href="home.php">Home</a></i></b><br>
						<br>
						<b><i><u><a href="Login.php">Log out</a></u></i></b><br>
				<br>
		
	</body>
</html>