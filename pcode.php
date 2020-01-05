<?php
$name=$_POST['name'];
//echo $name;
$fname=$_POST['fname'];
//echo $fname;
$email=$_POST['email'];
//echo $email;
$password=$_POST['pas'];
//echo $password;
//$gender=$_POST['a'];
//echo $gender;
$ad=$_POST['ad'];
//echo $ad;
$mobile=$_POST['mb'];
//echo $mobile;
$city=$_POST['c'];
//echo $city;
$age=$_POST['db'];
//echo $age;
$pincode=$_POST['pc'];
//echo $pincode;
include("connect.php");
$query="insert into tbl_p(name,fname,email,password,mobile_number,address,pin_code,city,age,date)values('$name','$fname','$email','$password','$mobile','$ad','$pincode','$city','$age',now())";
mysql_query($query);
echo "ho gya";
?>