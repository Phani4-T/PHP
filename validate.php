<?php
$server="itserver2";
  $user="root";
  $pass="root";
  $db="418";
  $con=mysqli_connect($server,$user,$pass,$db);
  if(!$con)
  {
	die("Error::".mysqli_connect_error());
  }
if(isset($_POST['username']))
{
$uname=$_POST['username'];
$pass=$_POST['Password'];
$query="SELECT * FROM userdetails WHERE username='$uname' and Password='$pass';
$res=mysqli_query($con,$query);
$count=mysqli_num_rows($res);
if($count)
{
  echo"<script>alert('Welcome $uname');</script>";
}
else
{
  echo"<script>alert('YOU ARE NOT A AUTHENTICATED USER!!');</script>";
}
}
?>