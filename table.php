<?php
include "dbcreation.php";
mysqli_select_db($con,"userinformation");
$sq = "create table registerhere(fname varchar(10),lname varchar(10),phone int(10),gender varchar(2),dob DATE,email varchar(10),uname varchar(10) primary key,pwd varchar(10),city varchar(10),country varchar(10),state varchar(10));";
if(mysqli_query($con,$sq))
{
echo "table created successfully<br>";
}
else{
echo "table not created".mysqli_error($con);
}

