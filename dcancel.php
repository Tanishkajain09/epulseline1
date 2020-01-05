<html>
<head>
<link href="css/dcancel.css" rel="stylesheet" type="text/css"/>
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
   <div id="table">
   
<?php
session_start();
include("connect.php");
$email=$_SESSION['doctor'];
$query="select * from tb_d where email='$email'";
$res=mysql_query($query);
if ($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	$did=$row['docid'];
}
$query2="select * from tbl_appointment where docid='$did'";
$res2=mysql_query($query2);
?><br/><br/><br/><br/>
<div style="min-height:400px;width:780px;padding:3%;background-color:rgba(0,0,0,0.6);box-shadow:3px 3px 3px 3px;margin:0px auto;">
<center><h1 style="color:white;">Cancel Appointment!</h1><hr style="border:1px solid #1ab2fd;width:60%;"/></center>
<table border="none" align="center" height=200px; width=500; style="border:1px solid transperant;">

<tr>
<th style="background-color:#1ab2fd;font-size:20px;font-family:calibri;">S.NO</th>
<th style="background-color:#1ab2fd;font-size:20px;font-family:calibri;">Patient Name</th>
<th style="background-color:#1ab2fd;font-size:20px;font-family:calibri;">Date</th>
<th style="background-color:#1ab2fd;font-size:20px;font-family:calibri;">Cancel Appointment</th>
</tr>
<?php
$a=1;
while($row2=mysql_fetch_array($res2,MYSQL_BOTH))
{
	
?>
<tr>
<td style="background-color:white;font-size:20px;font-family:calibri;" align="center"><?php echo $a;?></td>
<?php $ppid=$row2['pid'];
$query3="select * from tbl_p where pid='$ppid'";
$res3=mysql_query($query3);
if($row3=mysql_fetch_array($res3,MYSQL_BOTH))
{
	$pname=$row3['name'];
}
?>
<td style="background-color:white;font-size:20px;font-family:calibri;" align="center"><?php echo $pname;?></td>
<td  style="background-color:white;font-size:20px;font-family:calibri;" align="center"><?php echo $row2['date'];?></td>
<td style="background-color:white;font-size:20px;font-family:calibri;" align="center"><a href="status.php?aid=<?php echo $row2['0'];?>" style="color:black;text-decoration:none;"><?php echo $row2['status'];?></a></td>
<td><?php echo $row2['doa'];?></td>

</tr>
</tr>
<?php
$a++;
}
?>
</div>

</div>

</table>
<div id="footer">
  <hr style="margin-top:-5px;height:1px; background-color:white"></hr>
  <div id="left">&copy;:reserved</div>
  <div id="right">DESIGNED BY:TANISHKA</div>
  </div>	
</div>
</div>