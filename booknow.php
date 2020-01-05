<html>
<head>
</head>
<body>
<?php
session_start();
if($_SESSION['patient']=="")
{
	session_destroy();
	header("Location:login.php");
}
include("connect.php");

$did=$_POST['did'];
//echo $did;
$doa=$_POST['date'];
//echo $doa;
$email=$_SESSION['patient'];
$query="select * from tbl_p where email='$email'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	$pid=$row['pid'];
}
$query2="insert into tbl_appointment (docid,pid,doa,status,date) values ('$did','$pid','$doa','Y',curdate())";
mysql_query($query2);
header("Location:pprofile.php");
?>
</div>
</div>
</body>
</html>