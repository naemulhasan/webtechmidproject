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
  <title>Patient Profile</title>
  <link rel="stylesheet" href="pprofilestyle.css">
</head>
<body>
  <div class="profile">
    <img src="dr01.jpg" alt="Avatar" class="pp">
    <h1 class="name">Maruf Ahamed</h1>
    <h4 class="tags"><p><i>police stuff college,</i><br><br><b>Contact No:</b>01779595471<br>
<b>Email:</b>dragarkhedkarshard@gmail.com<br></h4>
<h4 class="location"><i class="fas fa-map-marker-alter"></i>6/29Mirpur 14,Dhaka.</h4>

<p class="intro">
  General Surgery, Plastic surgery specialist.
</p>
<div class="edu">
  <h1>Education</h1>
</div>
<div class="details">
  <div class="info">
    
 <li><b>MBBS</b></li>
 <i><b>Dhaka Medical College and Hospital(DMC)</b><br><b>Year:</b>2001<br></i>
  </div>
  <div class="info">
    <li><b>FCPS</b></li>
 <i>Armed Forces Medical College and Hospital<br><b>Year:</b>2005<br>
 </div>

  </div> 
  <div class="education">
    <div class="info">
  <li><b>MS (General Surgery) M Ch (Plastic Surgery) Fellowship in Microsurgery and Cosmetic Surgery</b></li>
<i>Australia</i><br>
</div>
  </div>
 
 
<div class="intro">
  <span><i class="fas fa-star"></i>Doctor Rating : 4.8</span>
</div>

  
<div class="c2a">
  
  <a href="apoinmenthistory.php" class="see"><i class="fas fa-envelope"></i>See History</a>
  <a href="viewreport.php" class="back"><i class="fas fa-envelope"></i>Prescription</a>
  <a href="staff.php" class="Contact"><i class="fas fa-envelope"></i>Back</a>

  
</div>

  </div>
</body>
</html>