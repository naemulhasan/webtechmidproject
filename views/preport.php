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
	<link rel="stylesheet" href="apoinhiststyle.css">
<title>Doctor's list</title>
</head>
<body>
	<form class="box">
   <table border=1 align="center">
   <tr>
     <td colspan="3" align="center"><u><b>Paitent List</b></u>(click on names to view profile)</td>
	 </tr>
	 
	 <tr>
     <td><b>Name</b></td>
	 <td><b>Sickness</b></td>
	 <?php
			$con =mysqli_connect('127.0.0.1','root','','webtech');
			$sql = "select * from makeappoinment";
			$result = mysqli_query($con, $sql);
			
	?>
	
	 </tr>
	 <?php


			while($row=mysqli_fetch_assoc($result))
			{
				?>

				<tr>
					<td><a href="doctor1.php?id=<?=$row['id']?>"><?=$row['name']?></a></td>
					<td><?=$row['specialization']?></td>
					
					
				</tr>
		<?php	} ?>
	 
	 </table>
	 
	 <a href="viewreport.php" class="button">Report</a>
	 
	<a href="apoinmet.php" class="back">Back</a>
	

	</form>
	 </body>
	 </html>