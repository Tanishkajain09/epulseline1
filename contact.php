<?php

include("connect.php");
error_reporting(0);
$msg=$_REQUEST['msg'];
//echo $msg;
if($msg==1)
{
	echo "THANKS!ADMIN WILL CONTACT YOU SOON";
}

?>
<html>
<head>
<link href="css/contact.css" rel="stylesheet" type="text/css"></link>
</head>
<body>

<div id="outer">
<div id="menu">

    <ul style="margin-left:20px;">
     <li><a href="index.php">HOME</a></li>
     <li><a href="about.php">ABOUT</a></li>
     <li><a href="patient.php">PATIENT</a></li>
     <li><a href="doctor.php">DOCTOR</a></li>
     <li><a href="login.pho">LOGIN</a></li>
	 <li><a href="contact.php">CONTACT US</a></li>
    </ul>
   </div>
   <div id="img">
     <div id="pic">
	 </div>
	 <div id="theory"><h1 align="center" style="font-family:roboto;">CONTACT US</h1>
	 <p align="justify" style="margin-left:50px;font-family:roboto;">From here you can easly contact with us.</p>
	 </div>
	 </div>
<div id="form" align="center">
<form action="concode.php" method="post">
<input type="text" name="name" placeholder="enter your name" style="height:32px;width:300px; box-shadow:2px 2px 5px #c1b1a4; border-radius:20px;"/></br>
<input type="email" name="email" placeholder="enter your email" style="height:32px;width:300px; box-shadow:2px 2px 5px #c1b1a4; border-radius:20px"/></br>
<input type="password" name="password" placeholder="enter your password" style="height:32px;width:300px; box-shadow:2px 2px 5px #c1b1a4; border-radius:20px"/></br>
<textarea maxlength=200 name=message placeholder="enter the message" style="height:32px;width:300px; box-shadow:2px 2px 5px #c1b1a4; border-radius:20px"></textarea></br>
<input type="submit" value="send" style="height:32px;width:300px; box-shadow:2px 2px 5px #c1b1a4; border-radius:20px;background-color:#c1b1a4"/>
</div>

</div>
</form>
</body>
</html>