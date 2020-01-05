<?php
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$message=$_POST['message'];
echo $name;
echo $email;
echo $password;
echo $message;

include("connect.php");
$query="insert into tbl_contact(name,email,password,message,date) values('$name','$email','$password','$message',now())";
mysql_query($query);
header("Location:contact.php?msg=1");
?>