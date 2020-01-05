<?php
session_start();
include("connect.php");
$op=$_POST['op'];
$np=$_POST['np'];
$cnp=$_POST['cmp'];
$email=$_SESSION['patient'];
$query="select password from tbl_p where email='$email'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	$pp=$row['password'];
	if($pp==$op)
	{
	    if($op==$np)
		{
			/*echo"no change";*/
		}
		else if($np==$cnp)
		{
			/*echo "change";*/
		    $query2="update tbl_p set password='$cnp' where email='$email'";
			mysql_query($query2);
			session_destroy();
			header("Location:login.php?msg=4");
		}
		else
		{
			/*echo"no change";*/
			header("Location:pchange.php");
		}
	}
	else
	{
		/*else"no change";*/
		header("Location:pchange.php");
    }
}
?>