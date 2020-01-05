<?php
include("connect.php");
$spec=$_POST['spec'];
//echo $spec;
$query="select * from tb_d where speciality='$spec'";
$res=mysql_query($query);
?>
<html>
<head>
<link href="css/book.css" rel="stylesheet" type="text/css"></link>
</head>
<body>
<div id="outer">
<div id="image">
<div id="menu">
    <ul>
     <li><a href="pbook.php">Book Appointment</a></li>
     <li><a href="myapp.php">My Appointment</a></li>
     <li><a href="discuss.php">Discussion board</a></li>
     <li><a href="pup.php">Update Profile</a></li>
     <li><a href="pchange.php">Change Password</a></li>
     <li><a href="pfeed.php">Feedback</a></li>
	 <li><a href="logout.php">Logout</a></li>
    </ul>
   </div>
<div id="table">
<br/><br/><br/><br/><br/><br/><br/><br/><table border="1" align="center" style="height:400px;;color:black;font-family:calibri;font-size:18px;margin-top:50px;border-radius:10px;background-color:transperant;border:1px solid white;width:900px;">
<tr>
<th>S.No</th>
<th>Doctor Name</th>
<th>Gender</th>
<th>Address</th>
<th>Fee</th>
<th>Timing</th>
<th>Email</th>
<th>Mobile-Number</th>
<th>Book</th>
</tr>
<?php
$a=1;
while($row=mysql_fetch_array($res,MYSQL_BOTH))
{
?>
<tr>
<td><?php echo $a;?></td>
<td><?php echo $row['name'];?></td>
<td><?php echo $row['gender'];?></td>
<td><?php echo $row['address'];?></td>
<td><?php echo $row['fee'];?></td>
<td><?php echo $row['timing'];?></td>
<td><?php echo $row['email'];?></td>
<td><?php echo $row['mobile_number'];?></td>
<td><a href="bookapp.php?did=<?php echo $row['docid'];?>"  style="text-decoration:none;color:black">Book Appointment</a></td>

</tr>
<?php
$a++;
}
?>
</table>
<div>
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
		  <li><a href="#">Doctor in Gujrat<a href="#" style="margin-left:10px;color:white;text-decoration:underline;font-size:15px;">more</a></a></li>
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
		  <li><a href="#">Kokilaben Hospital<a href="#" style="margin-left:10px;color:white;text-decoration:underline;font-size:15px;">more</a></a></li>
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
		  <li><a href="#">Hemopathic<a href="#" style="margin-left:10px;color:white;text-decoration:underline;font-size:15px;">more</a></a></li>
		  </ul>
		   </div>
		  </div>

</div>
  <div id="footer">
  <hr style="margin-top:-5px;height:1px; background-color:white"></hr>
  <div id="left">&copy;:reserved
  <div id="right">DESIGNED BY:TANISHKA</div>
  </div>
  </div>
</div>
</body>
</html>