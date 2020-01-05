<html>
<head>
<link href="css/booknow.css" rel="stylesheet" type="text/css"></link>
</head>
<body>

<div id="outer">
<div id="head"><img src="images/Online-Appointment-Hospital-Banner2.png" style="height:400px;width:100%;float:left;opacity:0.9px;margin-top:100px;"></img>
  <div id="menu"><hr>
    <ul>
     <li><a href="pbook.php">Book Appointments</a></li>
     <li><a href="myapp.php">My Appointments</a></li>
     <li><a href="discuss.php">Disscussion Board</a></li>
     <li><a href="pup.php">Update Profile</a></li>
     <li><a href="pchange.php">Change Password</a></li>
	 <li><a href="pfeed.php">Feedback</a></li>
	 <li><a href="logout.php">Logout</a></li>
	
    </ul>
   </div><img src="images/ap.png" style="height:100px;width:100px; margin-top:-490px;"></img> </hr></div>
<div id="special">
<center>
<?php
session_start();
if($_SESSION['patient']=="")
{
	session_destroy();
	header("Location:login.php");
}
include("connect.php");
$query="select distinct speciality from tb_d";
$res=mysql_query($query);
?>
<form action="book.php" method="post">
<select name="spec" style="height:40px;width:200px; border-radius:50px;background-color:#0aa5e8;border:5px solid white;margin-top:-240px;margin-left:525px;color:white;font-family:calibri;font-size:22px" >
<option value="">--Select Speciality--</option>

<?php
while($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	?>
	<option><?php echo $row['speciality']?></option>
	<?php
}
?>
</center>
</select></br>
<input type="submit" value="Search Doctor"style="height:40px;width:200px; border-radius:50px;background-color:#dde5f0;background-color:#0aa5e8;border:5px solid white;margin-top:-180px;margin-left:525px;color:white;font-family:calibri;font-size:23px"/>
</div>
         
           <div id="container">
		   <div id="app"><center><h1 style="font-family:calibri;font-size:20px;">Get In Touch With Our MULTILINGUAL Exprienced Team</h1></center>
		  <img src="images/d.jpg" style="height:460px;width:1332px;opacity:0.9px;float:left;">
		   </div>
		   <div id="team"> 
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
  <div id="left">&copy;:reserved 
  <div id="right">DESIGNED BY:TANISHKA</div></div>

</div>
</body>
</html>

</form>
</div>

