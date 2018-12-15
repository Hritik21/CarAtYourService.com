 <?php
 session_start();
$usercheck = $_SESSION['username'];

$con = mysqli_connect("localhost","root","","UserInformation");
mysqli_select_db($con,"userinformation");
$q = "select uname from registerhere where uname='$usercheck'";

$r = mysqli_query($con,$q);
$n = mysqli_num_rows($r);

if($n==0){

header("location:login.php");
}

?>
	
	