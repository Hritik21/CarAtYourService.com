<?php
$server="localhost";
$username = "root";
$pwd="";
$con = mysqli_connect($server,$username,$pwd);

if(!$con){
echo"Connection failed".mysqli_error($con);

}else{

echo"connection established<br>";
}

$q_1="create database UserInformation";
mysqli_query($con,$q_1);

