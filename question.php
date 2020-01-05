<?php
session_start();
include("connect.php");
$question=$_POST['ques'];
//echo $question;
$email=$_SESSION['patient'];
$query="select * from tbl_p where email='$email'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
$pid=$row['pid'];
echo $pid;	
}
$query2="insert into tbl_question(question,pid,date) values('$question','$pid',curdate())";
mysql_query($query2);
header("Location:discuss.php");
?>