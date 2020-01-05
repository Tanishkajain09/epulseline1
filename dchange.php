<?php
session_start();
if($_SESSION['doctor']=="")
{
	session_destroy();
	header("Location:login.php");
}
include("connect.php");

?>

<html>
<head>
<link href="css/dchange.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<div id="outer">
<div id="menu">
    <ul>
     <li><a href="dprofile.php">HOME</a></li>
     <li><a href="dview.php">VIEW APPOIMNTMENT</a></li>
     <li><a href="dcancel.php">CANCEL APPOINTMENTS</a></li>
     <li><a href="dchange.php">CHANGE PASSWORD</a></li>
     <li><a href="dupdate.php">UPDATE PROFILE</a></li>
	 <li><a href="dlogout.php">LOGOUT</a></li>
    </ul>
   </div> 
<div id="form">

<form action="dchangecode.php" method="post">
<center><h1>Change Password!</h1></center>

<input type="text" name="op"style="border-radius:50px;height:40px;width:300px;margin-left:70px;box-shadow:2px 2px 2px 5px #5b8cd9 "  placeholder="Enter Your Old Password"/><br/>
<br/>
<input type="text" name="np" style="border-radius:50px;height:40px;width:300px;margin-left:70px;box-shadow:2px 2px 2px 5px #5b8cd9 "  placeholder="Enter Your New Password;"/><br/>
<br/>
<input type="text" name="cmp" style="border-radius:50px;height:40px;width:300px;margin-left:70px;box-shadow:2px 2px 2px 5px #5b8cd9 "  placeholder="Confirm Password;"/><br/><br/>
<input type="submit" value="change" style="border-radius:40px;height:30px;width:100px;font-family:calibri;color:white;font-size:20px;background-color:#5484d6;margin-top:14px;margin-left:350px;box-shadow:2px 2px 2px 5px #5b8cd9 ";/>
</form>
</div>
</div>
</body>
</html>