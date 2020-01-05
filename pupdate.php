 <?php
//$pid=$_REQUEST['pid'];
//echo $pid;
//include("connect.php");
//$query="select * from tbl_p where pid='$pid'";
//$res=mysql_query($query);
//if($row=mysql_fetch_array($res,MYSQL_BOTH))
//{
?>
<html>
<head>
</head>
<body>
<h1>UPDATE Profile</h1>
<form action="edit.php" method="post">
<input type="hidden" name="id" value="<?php echo $row['regid']; ?>"/>
NAME:-
<input type="text" name="name" value="<?php echo $row['name']; ?>"/><br/>
F'NAME:-
<input type="text" name="fname" value="<?php echo $row['fname']; ?>" /><br/>
GENDER-
<input type="radio" name="a" value="male"<?php if($row['gender']=='male') { ?> checked <?php } ?> />MALE
<input type="radio" name="a" value="female"<?php if($row['gender']=='female') { ?> checked <?php } ?>/>FEMALE</br>
EMAIL:-
<input type="email" name="email" value="<?php echo $row['email']; ?>"/><br/>
PASSWORD
<input type="password" name="password" value="<?php echo $row['password']; ?>"/><br/>
<input type="submit" value="update"/>
</form>
<?php
}
?>
</body>
</html>