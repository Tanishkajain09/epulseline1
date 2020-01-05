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
<link href="css/dupdate.css" rel="stylesheet" type="text/css"/>
</head>
<body>
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
     </div>
	 <div id="outer">
	 <div id="out">
	 <div style="min-height:400px;width:750px;padding:3%;background-color:rgba(0,0,0,0.4);box-shadow:3px 3px 3px 3px;margin:0px auto;margin-top:50px;">
	 <center>
	 <p style="font-size:30px;color:white;font-family:roboto">Update Profile</p>
<hr style="border:1px solid #1ab2fd;width:60%;"></hr><br/><br/>
<?php
include("connect.php");
$query="select * from tb_d";
$res=mysql_query($query);
?>
<table border="none" height=200px; width=700; style="border:10px solid white;border-radius:20px;">

<tr>
<th style="background-color:#1ab2fd;">S.No</th>
<th style="background-color:#1ab2fd;">D'name</th>
<th style="background-color:#1ab2fd;">F'name</th>
<th style="background-color:#1ab2fd;">Gender</th>
<th style="background-color:#1ab2fd;">Fees</th>
<th style="background-color:#1ab2fd;">Timing</th>
<th style="background-color:#1ab2fd;">Speciality</th>
<th style="background-color:#1ab2fd;">Address</th>
<th style="background-color:#1ab2fd;">Mobile</th>
<th style="background-color:#1ab2fd;">Date</th>
<th style="background-color:#1ab2fd;">Update</th>
</tr>
<?php
$a=1;
while($row=mysql_fetch_array($res,MYSQL_BOTH))
{
?>
<tr>
<td style="background-color:white;font-family:roboto;"><?php echo $a;?></td>
<td style="background-color:white;font-family:roboto;"><?php echo $row['name'];?></td>
<td style="background-color:white;font-family:roboto;"><?php echo $row['fname'];?></td>
<td style="background-color:white;font-family:roboto;"><?php echo $row['gender'];?></td>
<td style="background-color:white;font-family:roboto;"><?php echo $row['fee'];?></td>
<td style="background-color:white;font-family:roboto;"><?php echo $row['timing'];?></td>
<td style="background-color:white;font-family:roboto;"><?php echo $row['speciality'];?></td>
<td style="background-color:white;font-family:roboto;"><?php echo $row['address'];?></td>
<td style="background-color:white;font-family:roboto;"><?php echo $row['mobile_number'];?></td>
<td style="background-color:white;font-family:roboto;"><?php echo $row['date'];?></td>
<td style="background-color:white;font-family:roboto;"><a href="show.php?qid=<?php echo $row['docid'];?>">Update</td>
</tr>
<?php
$a++;
}
?>
</table>
</div>
</div>
</body>
</html>