<html>
<head>
<link href="css/pprofile.css" rel="stylesheet" type="text/css"></link>
</head>
<body>
<div id="outer">
<div id="menu">
    <ul>
	
     <li><a href="pbook.php">BOOK APPOINTMENT</a></li>
     <li><a href="myapp.php">MY APPOINTMENTS</a></li>
     <li><a href="discuss.php">DISCUSSION BOARD</a></li>
     <li><a href="pup.php?=<?php ?>">UPDATE PROFILE</a></li>
     <li><a href="pchange.php">CHANGE PASSWORD</a></li>
     <li><a href="pfeed.php">FEEDBACK</a></li>
	 <li><a href="plogout.php">LOGOUT</a></li>
    </ul>
   </div> <hr style="border:2px solid #1ab2fd;width:100%;"/>
<div id="block">
<br/><br/><br/><br/><br/><br/>
<center>
<?php
session_start();
if($_SESSION['patient']=="")
{
	session_destroy();
	header("Location:login.php");
}
include("connect.php");
echo "welcome user";
echo"<br/>";
echo $_SESSION['patient'];
?>
<br/>

</center></div>
</div></body>
</html>