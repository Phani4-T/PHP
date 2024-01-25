<html>
<head>
<title>GET COOKIE</title>
</head>
<body>
<?php
$user = $_POST['username'];
$pwd = $_POST['password'];
echo "$user";
echo "$pwd";
if($user == "student")
{
	if($pwd == "student")
	echo "<h2>WELCOME $user WE ARE GLAD FOR U R VISIT.</h2>";
	else
	echo "<h2>You Are Not a Athenticated user.</h2>";
}
elseif($user == "phanindra")
{
	if($pwd == "Phani")
	echo "<h2>WELCOME $user WE ARE GLAD FOR U R VISIT.</h2>";
	else
	echo "<h2>You Are Not a Athenticated user.</h2>";
}
elseif($user == "pavan")
{
	if($pwd == "srkrit")
	echo "<h2>WELCOME $user WE ARE GLAD FOR U R VISIT.</h2>";
	else
	echo "<h2>You Are Not a Athenticated user.</h2>";
}
elseif($user == "Avinash")
{
	if($pwd == "srkrit")
	echo "<h2>WELCOME $user WE ARE GLAD FOR U R VISIT.</h2>";
	else
	echo "<h2>You Are Not a Athenticated user.</h2>";
}
else
{
	echo "<h2>INVALID USER/PASSWORD</h2>";
}
?>
</body>
</html>