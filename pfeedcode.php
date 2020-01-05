<?php
session_start();
include("connect.php");

$feed=$_POST['feed'];
echo $feed;
$email=$_SESSION['patient'];
$query="select * from tbl_p where email='$email'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	$pid=$row['pid'];
}

$query2="insert into tbl_feed(feedback,pid,date) values('$feed','$pid',curdate())";
mysql_query($query2);
header("Location:pprofile.php");
?>