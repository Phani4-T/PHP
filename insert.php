<?php
	$server="itserver";
	$user="student";
	$pass="student";
	$db="Phanindra";
	$con=mysqli_connect($server,$user,$pass,$db);
	if(!$con)
	{
		die("Error: : ".mysqli_connect_error());
	}
if(isset($_POST['username']))
{
$username=$_POST['username'];
$Password=$_POST['Password'];
$email=$_POST['email'];
$Phno=(float)$_POST['Phno'];
$query= "INSERT INTO userdetails VALUES('$username','$Password','$email','$Phno')";
$res=mysqli_query($con,$query);
if($res)
{
$script="<script> alert('User Registration succesful!..');";
$script.="document.writeln('<center><h2><u>User Details</u></h2></center>');";
$script.="document.writeln('Your user name is:<b>$username</b><br>');</script>";
echo $script;
}
else
echo "<script>alert('User registration Failed!.');
 window.location = 'Register.html';
</script>";
}
?>