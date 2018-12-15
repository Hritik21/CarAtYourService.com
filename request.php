<?php 
include "checksession.php";
$link = mysqli_connect("localhost","root","","UserInformation");

$username=$usercheck;
$no=$_POST['no'];
$cc=$_POST['cc'];
$dc=$_POST['dc'];
$doi=$_POST['doi'];
$dor=$_POST['dor'];
$distance=$_POST['distance'];
$carid=$_POST['carid'];
$dln=$_POST['dln'];
$sql = "INSERT INTO request(uname,no,cc,dc,doi,dor,distance,carid,dln) values('$username','$no','$cc','$dc','$doi','$dor','$distance','$carid','$dln')";
mysqli_query($link,$sql);
header("location:rent.php");
?>















