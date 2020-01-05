<?php
error_reporting(0);
$msg=$_REQUEST['msg'];
//echo $msg;
if($msg==1)
{
	echo "invalid email or password";
}
if($msg==2)
{
	echo"succefully logout";
}
if($msg==3)
{
	echo"plz login first";
}
if($msg==4)
{
	echo"Password changed Sucessfully";
}
?>
<html>
<head>
</head>
<h1>LOGIN HERE!</h1>
<body>
<form action="logcode.php" method="post">
EMAIL:-
<input type="email" name="email"/></br>
PASSWORD:-
<input type="password" name="password"/></br>
<input type="submit" value="login"/>
</form>
</body>
</html>

</form>