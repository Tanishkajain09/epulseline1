<html>
<head>
<link href="css/booknoow.css" rel="stylesheet" type="text/css"></link>
</head>
<body>
<div id="outer">
<div id="container"><img src="images/bg.jpg" style="height:1318px;"></img>
<div id="book">  

<?php
session_start();
if($_SESSION['patient']=="")
{
	session_destroy();
	header("Location:login.php");
}
include("connect.php");
$did=$_REQUEST['did'];
//echo $did;
$query="select * from tb_d where docid='$did'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
?> 
<div style=" height:150px;width:150px;border:1px solid;">
<img src="images/<?php echo $row['upload_photo'];?>" height="150px" width="150px"/>
</div>
<form action="booknow.php" method="post">
<input type="hidden" name="did" value="<?php echo $row['docid'];?>">
Doctor Name
<input type="text" name="name" readonly value="<?php echo $row['name'];?>"/>
<br/>
Email
<input type="email" name="email" readonly value="<?php echo $row['email'];?>"/>
<br/>
Date
<input type="date" name="date" />
<br/>
<input type="submit" value="Book Now"/>
</form>
<?php	
}
?>
</div>
</div>
</div>
</body>
</html>