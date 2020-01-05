<?php
session_start();
if($_SESSION['patient']=="")
{
	session_destroy();
	header("Location:login.php");
}
include("connect.php");
include("connect.php");
$id=$_REQUEST['pid'];
echo $id;
//$query="select * from tbl_p where pid='$pid'";
//$res=mysql_query($query);
//if($row=mysql_fetch_array($res,MYSQL_BOTH))
//{
/*?>
<html>
<head>
</head>
<body>
<h1>UPDATE DEMO</h1>
<form action="edit.php" method="post">
<input type="hidden" name="pid" value="<?php echo $row['pid']; ?>"/>
NAME:-
<input type="text" name="name" value="<?php echo $row['name']; ?>"/><br/>
F'NAME:-
<input type="text" name="fname" value="<?php echo $row['fname']; ?>" /><br/>
GENDER-
<input type="radio" name="a" value="male"<?php if($row['gender']=='male') { ?> checked <?php } ?> />MALE
<input type="radio" name="a" value="female"<?php if($row['gender']=='female') { ?> checked <?php } ?>/>FEMALE</br>
mobile_number
<input type="number" name="mb" value="<?php echo $row['email']; ?>"/><br/>
PASSWORD
<input type="password" name="password" value="<?php echo $row['password']; ?>"/><br/>
<input type="submit" value="update"/>
</form>
<?php
}
?>
</body>
</html>*/