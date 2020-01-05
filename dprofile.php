<html>
<head>
<link href="css/dprofile.css" rel="stylesheet" type="text/css"></link>
</head>
<body>
<div id="outer">
<?php 
session_start();
if($_SESSION['doctor']=="")
{
	session_destroy();
	header("Location:login.php");
}
include("connect.php");
?>
<div id="menu">
    <ul>
	
     <li><a href="dbook.php">HOME</a></li>
     <li><a href="dview.php">VIEW APPOIMNTMENT</a></li>
     <li><a href="dcancel.php">CANCEL APPOINTMENTS</a></li>
     <li><a href="dchange.php">CHANGE PASSWORD</a></li>
     <li><a href="dupdate.php">UPDATE PROFILE</a></li>
	 <li><a href="dlogout.php">LOGOUT</a></li>
    </ul>
   </div> 
<div id="sess">
<center>
<h2 style="font-family:roboto;margin-top:100px;">WELCOME DOCTOR</h2>
<?php

//echo "welcome user";
echo "<br/>";
echo $_SESSION['doctor'];
?>
<br/>

</center>
</div>
<div id="footer">
  <hr style="margin-top:-5px;height:1px; background-color:white"></hr>
  <div id="left">&copy;:reserved</div>
  <div id="right">DESIGNED BY:TANISHKA</div>
  </div>	
</div>

</body>
</html>