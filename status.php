<?php
include("connect.php");
session_start();
$aid=$_REQUEST['aid'];
//echo $aid;
$query="select status from tbl_appointment where appid='$aid'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	$s=$row['0'];
//echo $s;
}
if($s=='Y')
{
	$query2="update tbl_appointment set status='N' where appid='$aid'";
//echo $query2;
	mysql_query($query2);
	header("Location:dcancel.php");
}
if($s=='N')
{
	$query2="update tbl_appointment set status='Y' where appid='$aid'";
 //echo $query2;
	mysql_query($query2);
	header("Location:dcancel.php");
}
?>