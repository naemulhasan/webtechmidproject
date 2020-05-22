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
<title>Staff Profile</title>
<link rel="stylesheet" href="staffstyle.css">
</head>
<body>
	<div class="profile">
		<img src="nurse.jpg" alt="Avatar" class="pp">
		<h1 class="name">Fahmida Zaman</h1>
		<h4 class="tags"><p><i>House-26,Road-13
13 Uttara,Dhaka-1230.</i><br><br>
<b>Contact No:</b>01770000000<br>
<b>Email:</b>zaman@gmail.com<br></h4>


<p class="intro">
	Registred Nurse, Popular Diagnostic Centre Ltd.
</p>
<div class="edu">
	<h1>Education</h1>
</div>
<div class="details">
	<div class="info">
		
 <li><b>Bachelor of Science in Nursing (BSN)</b></li>
 <i><b>Dhaka Nursing College, Dhaka.</b><br><b>Year:</b>2001<br></i>
	</div>
	<div class="info">
		<li><b>Associate Degree in Nursing (ADN)</b></li>
 <i>College of Nursing, Fauzderhat, Chittagong.<br><b>Year:</b>2005<br>
 </div>

	</div> 
	<div class="education">
		<div class="info">
 	<h2>Working Experience</h2><br>
<li>Nurse Practinioner, Labaid Specialized Hospital.</li>
<li>Registred Nurse, Popular Diagnostic Centre Ltd.</li>

</div>
	</div>
 

	
<div class="c2a">
	
	<a href="pprofile.php" class="see"><i class="fas fa-envelope"></i>Patient</a>
	<a href="stuffhome.php" class="back"><i class="fas fa-envelope"></i>Back</a>
	

	
</div>

	</div>
</body>
</html>