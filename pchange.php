<html>
<head>
<link href="css/pchange.css" rel="stylesheet" type="text/css"></link>
</head>
<body>
<div id="outer">
<div id="menu">
    <ul>
     <li><a href="pbook.php">Book Appointments</a></li>
     <li><a href="myapp.php">My Appointments</a></li>
     <li><a href="discuss.php">Disscussion Board</a></li>
     <li><a href="pup.php">Update Profile</a></li>
     <li><a href="pchange.php">Change Password</a></li>
	 <li><a href="pfeed.php">Feedback</a></li>
	 <li><a href="logout.php">Logout</a></li>
	
    </ul>
   </div>
<?php
session_start();
if($_SESSION['patient']=="")
{
	session_destroy();
	header("Location:login.php");
}
include("connect.php");                                               
?>

<div id="form">
<form action="changecode.php" method="post">
<center><h1 style="">Change Password!</h1>

<input type="password" name="op"style="border-radius:50px;height:35px;width:250px;margin-left:;box-shadow:2px 2px 2px 5px #5b8cd9 "  placeholder="Enter Your Old Password";/><br/>
<br/>
<input type="password" name="np" style="border-radius:50px;height:35px;width:250px;margin-left:;box-shadow:2px 2px 2px 5px #5b8cd9 "  placeholder="Enter Your New Password";/><br/>
<br/>
<input type="password" name="cmp" style="border-radius:50px;height:35px;width:250px;margin-left:;box-shadow:2px 2px 2px 5px #5b8cd9 "  placeholder="confirm your password";/><br/>
<input type="submit" value="change" style="border-radius:40px;height:30px;width:100px;font-family:calibri;color:white;font-size:20px;background-color:#5484d6;margin-top:50px;margin-left:350px;box-shadow:2px 2px 2px 5px #5b8cd9";/>
</center>
</form>
</div>
<div id="kch">
</div>
<div id="footer">
<div id="left">&copy;:reserved 
  <div id="right">DESIGNED BY:TANISHKA</div></div>
</div>
</div>
</body>