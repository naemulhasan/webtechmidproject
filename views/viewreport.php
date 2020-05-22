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
  <title>Medical Report</title>
  <link rel="stylesheet" href="viewrestyle.css">
</head>
<body>
<form class="box">
<table border=1 align="center">
   <tr>
     <td colspan="3" align="center"><u><b>Medical Incident Report</b></u></td>
   </tr>
   
   <tr>
     <td><b>Nature of Injury</b></td>
   <td>Broken leg with bleeding</td>
   
   </tr>
   
   <tr>
     <td><b>Conscious</b></td>
   <td>Yes</td>
   
   </tr>
   
   <tr>
     <td><b>Cause of injury</b></td>
   <td>Accident</td>
   </tr>
   
   <tr>
     <td><b>Temperture</b></td>
   <td>98 degree</td>
   </tr>
   <tr>
   
   <tr>
     <td><b>Action Taken</td>
   <td>Surgery</td>
   </tr>
   <tr>
     <td colspan="3" align="center"><u><b>Prescription</b></u></td>
   </tr>
   
   <tr>
     <td><b>Medicine</b></td>
   <td><b>Dose</b></td>
   
   </tr>
   
   <tr>
     <td>Tylenol</td>
   <td>1+0+1</td>
   
   </tr>
   
   <tr>
     <td>Advil</td>
   <td>1+1+1</td>
   </tr>
   
   <tr>
     <td>Motrin IB</td>
   <td>0+0+1</td>
   </tr>
   <tr>
   
   <tr>
     <td>Next Visit</td>
   <td>15/03/2020</td>
   </tr>

</table><br><br>



<u><a href="pprofile.php" class="back">Back</u>
 
  


</body>

</html>

