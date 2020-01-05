<html>
<head>
<link href="css/myapp.css" rel="stylesheet" type="text/css"></link>
</head>
<body>
<div id="outer">
<div id="menu">
    <ul>
     <li><a href="pbook.php">BOOK Appointments</a></li>
     <li><a href="myapp.php">My Appointments</a></li>
          <li><a href="discuss.php">Disscussion Board</a></li>
     <li><a href="pup.php">Update Profile</a></li>
     <li><a href="pchange.php">Change Password</a></li>
	 <li><a href="pfeed.php">Feedback</a></li>
	 <li><a href="logout.php">Logout</a></li>
    </ul>
   </div> 
   <div id="container">
<?php
session_start();
if($_SESSION['patient']=="")
{
	header("Location:login.php");
}
include("connect.php");
$email=$_SESSION['patient'];
$query="select * from tbl_p where email='$email'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	$pid=$row['pid'];
}
$query2="select * from tbl_appointment where pid='$pid'";
$res2=mysql_query($query2);
?>
<br/><br/><br/><br/><br/><br/>
<div style="min-height:400px;width:780px;padding:3%;background-color:rgba(0,0,0,0.6);box-shadow:3px 3px 3px 3px;margin:0px auto;">
<h1 style="color:white;text-align:center;">My Appointments</h1>
<hr style="border:1px solid #1ab2fd;width:60%;"/>
<br/>
<br/>
<table border="1" align="center" style="border:5px solid ;border-radius:5px;color:white;font-famliy:calibri;font-size:20px;width:700px;">
<tr>
<th style="background-color:#1ab2fd;">S.NO</th>
<th style="background-color:#1ab2fd;">Patient Name</th>
<th style="background-color:#1ab2fd;">Doctor Name</th>
<th style="background-color:#1ab2fd;">date</th>
</tr>

<?php 
$a=1;
while($row2=mysql_fetch_array($res2,MYSQL_BOTH))
{
?>
<tr>
<td align=center style="background-color:white;color:black"><?php echo $a;?></td>
<?php $ppid=$row['pid'];
$query3="select * from tbl_p where pid='$ppid'";
$res3=mysql_query($query3);
if($row3=mysql_fetch_array($res3,MYSQL_BOTH))
{
	$pname=$row3['name'];
}
?>
<td align=center style="background-color:white;color:black"><?php echo $pname; ?></td>
<?php $did=$row2['docid'];
$query4="select * from tb_d where docid='$did'";
$res4=mysql_query($query4);
if($row4=mysql_fetch_array($res4,MYSQL_BOTH))
{
	$dname=$row4['name'];
}
?>
<td align=center style="background-color:white;color:black"><?php echo $dname;?></td>
<td align=center style="background-color:white;color:black"><?php echo $row2['date'];?></td>
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