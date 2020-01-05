<?php
error_reporting(0);
$msg=$_REQUEST['msg'];
//echo $msg;
if($msg==1)
{
	echo "invalid email or password";
}

?>
<html>
<head>
<link href="css/login.css" rel="stylesheet" type="text/css"></link>
</head>

<body>
<div id="outer">
<div id="menu">
    <ul>
     <li><a href="index.php">HOME</a></li>
     <li><a href="about.php">ABOUT</a></li>
     <li><a href="patient.php">PATIENT</a></li>
     <li><a href="doctor.php">DOCTOR</a></li>
     <li><a href="login.php">LOGIN</a></li>
	 <li><a href="contact.php">CONTACT US</a></li>
    </ul>
   </div> 

<div id="form">
<div style="min-height:300px;width:500px;padding:5%;background-color:rgba(0,0,0,0.6);box-shadow:3px 3px 3px 3px;margin-left:-150px;margin-top:-20px;">
<center><h1 style="font-family:calibri;color:white;font-size:39;margin-left:-50px;">LOGIN HERE!</h1>
<hr style="border:1px solid #1ab2fd;width:50%;margin-top:-20px;margin-left:98px;"/><br/>
<form action="logcode.php" method="post">
<select name="who" placeholder="who you are" style="box-shadow:2px 2px 2px 2px #c1b1a4; border-radius:20px;margin-left:-38px; height:32px;width:300px;">
<option value="">Who You ARE</option>
<option>Doctor</option>
<option>Patient</option></select><br/>
<br/>
<input type="email" name="email" placeholder="email" style="box-shadow:2px 2px 2px 2px #c1b1a4; border-radius:20px;margin-left:-38px; height:32px;width:300px;"/></br>
<br/>
<input type="password" name="password" placeholder="password" style="box-shadow:2px 2px 2px 2px #c1b1a4; border-radius:20px;margin-left:-38px; height:32px;width:300px;"/>
<br/>
<br/>

<input type="submit" value="login" style="background-color:#01b4dd; border-radius:20px;margin-left:-38px; height:32px;width:300px;"/><br/>
<br/>
<a href="#" style="font-size:20px; color:white;font-family:calibri;margin-left:-20px;">Don't Yet Register.</a><br/><br/>
<t style="font-size:20px;color:white;font-family:calibri;margin-left:-30px";></t><a href="doctor.php" style="font-size:20 px; color:white;font-family:calibri;margin-left:0px;">Doctor Registration</a>
<t style="font-size:20px; color:white;font-family:calibri;margin-left:30px;"></t><a href="patient.php" style="font-size:20 px; color:white;font-family:calibri;margin-left:10px;">Patient Registration</a>
</center></div>
</form>

</div>


</div>

<div id="up">

		  <div id="fi">
		  <a href="#">ABOUT US</a>
		  <p>During extended interviews with Patient sat 50 Clinic, we found different processes leading to the successful development and deployment of portals. The portal does not have to be expensive. It should support multiple campus goals. It is clear that the functionality of a portal develops over time. Epulseline.com is not only a web portal.it is a live project  of Epulseline (India). </p>
		  </div>
		  <div id="dn">
		  <a href="#">DOCTORS NETWORK</a>
		  <ul>
		  <li><a href="#">Doctor in Mumbai</a></li>
		  <li><a href="#">Doctor in Benglore</a></li>
		  <li><a href="#">Doctor in Hydrabad</a></li>
		  <li><a href="#">Doctor in Delhi NCR</a></li>
		  <li><a href="#">Doctor in Dubai</a></li>
		  <li><a href="#">Doctor in Kolkata</a></li>
		  <li><a href="#">Doctor in Jaipur</a></li>
		  <li><a href="#">Doctor in Ajmer</a></li>
		  <li><a href="#">Doctor in Delhi</a></li>
		  <li><a href="#">Doctor in Gujrat<a href="#" style="margin-left:10px;color:black;text-decoration:underline;font-size:15px;">more</a></a></li>
		  </ul>
		  </div>
		   <div id="hn">
		   <a href="#">HOSPITAL NETWORKS</a>
		   <ul>
		  <li><a href="#">Medanta Hospital</a></li>
		  <li><a href="#">Manipal Hospital </a></li>
		  <li><a href="#">BLK Hospital</a></li>
		  <li><a href="#" style="margin-left:-35px;">Nanavati Speciality Hospital</a></li>
		  <li><a href="#">Forties Gurgaon</a></li>
		  <li><a href="#">Forties Noida</a></li>
		  <li><a href="#">Global Hospital Chennai</a></li>
		  <li><a href="#">Artemis Hospital</a></li>
		  <li><a href="#">Jaypee Hospital</a></li>
		  <li><a href="#">Kokilaben Hospital<a href="#" style="margin-left:10px;color:black;text-decoration:underline;font-size:15px;">more</a></a></li>
		  </ul>
		   </div>
		   <div id="con">
		   <a href="#">COMMUNITY</a>
		   <ul>
		  <li><a href="#">Degree holder doctors</a></li>
		  <li><a href="#">Cancer Care </a></li>
		  <li><a href="#">Moms Club</a></li>
		  <li><a href="#">Medical Assistance</a></li>
		  <li><a href="#">Neuro surgens</a></li>
		  <li><a href="#">Orthopadix</a></li>
		  <li><a href="#">Cardiologist</a></li>
		  <li><a href="#">Hemopathic<a href="#" style="margin-left:10px;color:black;text-decoration:underline;font-size:15px;">more</a></a></li>
		  </ul>
		   </div>
		  
           </div>		  
</div>
<div id="footer">
  <hr style="margin-top:-5px;height:1px; background-color:white"></hr>
  <div id="left">&copy;:reserved</div>
  <div id="right">DESIGNED BY:TANISHKA</div>
  </div>
</body>
</html>

