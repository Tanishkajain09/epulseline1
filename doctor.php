<?php
?>
<html>
<head>
<link href="css/doctor1.css" rel="stylesheet" type="text/css"></link>
</head>
<body>
<div id="outer"><img src="images/bg.jpg"></img>
 <div id="head">
  <div id="menu"><hr>
    <ul>
     <li><a href="index.php">Home</a></li>
     <li><a href="about.php">About</a></li>
     <li><a href="patient.php">Patient</a></li>
     <li><a href="doctor.php">Doctor</a></li>
     <li><a href="contact.php">Contact Us</a></li>
     <li><a href="login.php">Login</a></li>
	     </ul>
   </div> </hr></div>
<div id="form" >
<center><h1>DOCTOR'S REGISTRATION FORM!</h1></center>
<form action="dcode.php" method="post" enctype="multipart/form-data">
<table align="center"><tr><td><input type="text" name="name" placeholder="plese enter your name" style="box-shadow:2px 2px 2px 2px #c1b1a4;border-radius:20px;margin-left:-42px;width:300px;height:32px;" /></br></td></tr>
<tr><td><input type="text" name="fname" placeholder="plese enter your fname"style="box-shadow:2px 2px 2px 2px #c1b1a4; border-radius:20px;margin-top:8px;margin-left:-40px;width:300px;height:32px;" /><br/></td></tr>
<tr><td style="color:white;font-family:calibri;"><input type="radio" name="a" value="male" style="circle-shadow:2px 2px 2px 2px #c1b1a4; border-radius:20px;margin-left:35px;"/>Male
<input type="radio" name="a" value="female" style="circle-shadow:2px 2px 2px 2px #c1b1a4; border-radius:20px;"/>Female<br/></td></tr>
<tr><td><input type="number" name="fees" placeholder="plese enter your fees"style="box-shadow:2px 2px 2px 2px #c1b1a4; border-radius:20px; margin-top:8px;margin-left:-90px;margin-left:-38px;width:300px;height:30px;"/><br/><td></tr>
<tr><td><input type="email" name="email" placeholder="plese enter your email"style="box-shadow:2px 2px 2px 2px #c1b1a4; border-radius:20px;margin-top:8px;margin-left:-38px;width:300px;height:32px;"/><br/></td></tr>
<tr><td><input type="Password" name="pas"placeholder="plese enter your password" style="box-shadow:2px 2px 2px 2px #c1b1a4; border-radius:20px;margin-top:8px;margin-left:-38px;width:300px;height:32px;"/><br/></td></tr>
<tr><td></td><td><input type="time" name="time"style="box-shadow:2px 2px 2px 2px #c1b1a4; border-radius:20px;margin-top:8px;margin-left:-302px;width:300px;height:32px;"/><br/></td></tr>
<tr><td><input type="number" name="mb"placeholder="plese enter your mobile number" style="box-shadow:2px 2px 2px 2px #c1b1a4; border-radius:20px;margin-top:8px;margin-left:-38px;width:300px;height:32px"/><br/><br/></td></tr>

<tr><td><textarea maxlength="100" name="ad" placeholder="plese enter your address"style="box-shadow:1px 1px 1px 1px #c1b1a4; border-radius:20px;margin-left:-38px;margin-top:-10px;width:300px;height:32px"></textarea><br/></td></tr>
<tr><td ><select placeholder="select your speciality"  style="box-shadow:2px 2px 2px 2px #c1b1a4; border-radius:20px;margin-left:-38px;margin-top:10px;width:300px;height:32px" name="c">
<option value=""  style="box-shadow:2px 2px 2px 2px #c1b1a4;width:300px;height:32px"></option>
<option name="" style="box-shadow:2px 2px 2px 2px #c1b1a4">neurosurgen</option>
<option name="" style="box-shadow:2px 2px 2px 2px #c1b1a4">eyespecialist</option>
<option name="" style="box-shadow:2px 2px 2px 2px #c1b1a4">surgen</option>
<option name="" style="box-shadow:2px 2px 2px 2px #c1b1a4">physician</option>
<option name="" style="box-shadow:2px 2px 2px 2px #c1b1a4">cardiologist</option>
<option name="" style="box-shadow:2px 2px 2px 2px #c1b1a4">orthospecialist</option></td>
</select></tr>
<tr><td><br/><input type="file" name="file" style="color:white;"/>
<tr><td><input type="submit" value="register" style="width:140px; height:22px; background-color:#c1b1a4;margin-left:-35px; box-shadow:2px 2px 2px 2px #c1b1a4; border-radius:20px;margin-top:10px;width:300px;height:32px"/></td></tr>

</div>

</table>
</form>

<div id="upper">

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
		  <div id="logo"><img src="images/logo1.png"  style="margin-left:230px;margin-top:40px;height:50px;width:50px"/></div>
		   </div>
		  </div>
		  

</div>
  <div id="footer">
  <hr style="margin-top:-5px;height:1px; background-color:white"></hr>
  <div id="left">&copy;:reserved
  <div id="right">DESIGNED BY:TANISHKA</div>
  </div>
  </div>         		  


</body>
</html>