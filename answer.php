<?php
session_start();
if($_SESSION['patient']=="")
{
	session_destroy();
	header("Location:login.php");
	
}
include("connect.php");

$ans=$_POST['ans'];
//echo $ans;
$qid=$_POST['qid'];
//echo $qid;
$email=$_SESSION['patient'];
$query="select * from tbl_p where email='$email'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	$pid=$row['pid'];
}
$query2="insert into tbl_answer(qid,pid,answer,date) values('$qid','$pid','$ans',curdate())";
//echo $query2;
mysql_query($query2);
header("Location:discuss.php");
?>