<?php
session_start();
include("connect.php");
$email=$_POST['email'];
echo $email;
$password=$_POST['password'];
echo $password;
$who=$_POST['who'];
echo $who;
if($who=='Doctor')
{
$query="select * from tb_d where email='$email' and password='$password'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	$_SESSION['doctor']=$email;
	header("Location:dprofile.php");
}	
else
{
	header("Location:login.php");
}
}
if($who=='Patient')
{
	$query="select * from tbl_p where email='$email' and password='$password'";
    $res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	$_SESSION['patient']=$email;
	header("Location:pprofile.php");
}	
else
{
	header("Location:login.php");
}
}


?>