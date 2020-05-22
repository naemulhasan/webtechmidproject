<?php
	session_start();

	if(!isset($_SESSION['name']))
	{
		header("location:login.php");
	}
?>
<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
<title>Appoinment History</title>
<link rel="stylesheet" href="apoinmentstyle.css">
</head>
<body>

			<?php
			$con =mysqli_connect('127.0.0.1','root','','webtech');
			$sql = "select * from appoinmenthistory";
			$result = mysqli_query($con, $sql);
			?>

   <form class="box" ><table border=1 align="center">
   <tr>
     <td colspan="3" align="center"><u><b>Upcoming Appoinments</b></u></td>
	 </tr>
	 
	 <tr>
     <td><b>Date</b></td>
	 <td><b>Time</b></td>
	 <td><b>Patient Name</b></td>
	 
	 </tr>
	 
	 <?php


			while($row=mysqli_fetch_assoc($result))
			{
				?>

				<tr>
					<td><?=$row['date']?></td>
					<td><?=$row['time']?></td>
					<td><a href="pprofile.php"><?=$row['name']?></a></td>
					
				</tr>
		<?php
	}
	 ?>
	 <tr>
     <td><u><a href="newapoinment.php" class="link">Canel Appoinments</a></u></td>
	 <td><u><a href="searchpatient.php" class="button">Search Patient</a></td>
	 <td><u><a href="profile.php" class="button">Back</a></u></td>
	 </tr>
	 
	 </table>
	</form>
	 </body>
	 </html>