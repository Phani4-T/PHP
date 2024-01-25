<html>
<head>
<title>SET COOKIE</title>
</head>
<body>
<?php
$user = $_POST['username'];
$pwd = $_POST['password'];
setcookie("user",$user,time()+ 3600 * 2);
setcookie("pwd",$pwd,time()+ 3600 * 2);
echo "<h3>THE COOKIE ADDED.....</h3>";
?>
</body>
</html>
