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
	<title>UPDATE SChedule</title>
	<link rel="stylesheet" href="updtstyle.css">
</head>
	<body>
		<form class="box">
		<table border ="1" cellspacing="0" width="100%">
	<tr>
		<td colspan="8"><center>DAY</td> 
	</tr>
	<tr>
		<td rowspan="2">TIME</td>
		<td><Center>Saturday</td>
		<td><Center>Sunday</td>
		<td><Center>Monday</td>
		<td><Center>Tuesday</td>
		<td><Center>Wednesday</td>
		<td><Center>Thursday</td>
		<td><Center>Friday</td>
	</tr>
	<tr>
		<td></td>
		<td><Center>7:00pm-9:30pm</td>
		<td><Center></td>
		<td><Center>7:00pm-9:30pm</td>
		<td><Center></td>
		<td><Center>7:00pm-9:30pm</td>
		<td><Center><br>7:00-10:00pm</td>
	</tr>
</table>

<center>
<button><u><a href="doctorprofile.php">Back</a></u></</button>
	</body>
</html>