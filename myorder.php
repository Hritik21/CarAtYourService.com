<!DOCTYPE html>
<?php
	include "checksession.php";
	
	

$sql = "select fname from registerhere where uname='$usercheck'";
$link = mysqli_connect("localhost","root","","UserInformation");
$r=mysqli_query($link,$sql);
$rs = mysqli_fetch_array($r);
    	
	?>
<html>
<head>
<link rel="stylesheet" href="carrental.css">
</head>
<body>
<div class="navbar">
  <a href="carrental.php">Home</a>
  <a href="tarrif.php">Tarrifs</a>
  <a href="#">About us</a>
  <a href="#">Contact us</a>
  
  <a href="logout.php" class="right">logout</a>
  <a href="#" class="right">
  <?php
     echo "Hello! ".$rs['fname'];
    	
	?>
	</a>
  <a href="myorder.php" class="right">mybookings

	</a>
  
</div>

<div class="bg-image"></div>


<div class="bg-text">
 
<div class="header">
<center>
 <?php

$sql = "select cc,dc,doi,dor from request where uname='$usercheck'";
$link = mysqli_connect("localhost","root","","UserInformation");
$r=mysqli_query($link,$sql);
$rs = mysqli_fetch_array($r);

echo "Starting point : ".$rs['cc']."<br>";
echo "Destination point : ".$rs['dc']."<br>";
echo "Starting date : ".$rs['doi']."<br>";
echo "Ending point : ".$rs['dor']."<br>";

?>
</div>

 
 
  
  
  </div>
</div>



</body>
</html>



