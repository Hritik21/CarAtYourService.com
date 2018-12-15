<?php
session_start();
$uname1 = $_POST['uname'];
$pwd1 = $_POST['pwd'];

$con = mysqli_connect("localhost","root","","UserInformation");
mysqli_select_db($con,"userinformation");
$q = "select uname from registerhere where uname='$uname1' and pwd='$pwd1'";

$r = mysqli_query($con,$q);
$n = mysqli_num_rows($r);

if($n==1){

$_SESSION['username']=$uname1;
header("location:rent.php");
}else{
echo "<script>alert('invalid username or password')</script>";
header("location:login.php");

}

?>