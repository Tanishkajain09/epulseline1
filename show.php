<?php
session_start();
$email=$_SESSION['doctor'];

//echo $email;
include("connect.php");
$query="select * from tb_d where email='$email'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
?>
<form action="edit.php" method="post">
name
<input type="text" name="n" value="<?php echo $row['name'];?>"/>
<br/>
<br/>
fname
<input type="text" name="f"value="<?php echo $row['fname'];?>"/>
<br/>
<br/>
gender
<input type="radio" name="a" value="male"<?php if($row['gender']=='male'){?>checked<?php }?>/>mail
<input type="radio" name="a" value="female"<?php if($row['gender']=='female'){?>checked<?php }?>/>female
<br/>
<br/>
fees
<input type="text" name="fee" value="<?php echo $row['fee'];?>"/>
<br/>
<br/>
time
<input type="text" name="time"value="<?php echo $row['timing'];?>"/>
<br/>
<br/>
address
<textarea name="area" value="<?php echo $row['address'];?>"></textarea>
<br/>
<br/>
mobile
<input type="number" name="mo"value="<?php echo $row['mobile_number'];?>"/>
<br/>
<br/>
date
<input type="text" name="d"value="<?php echo $row['date'];?>"/>
<br/>
<br/>
<input type="submit" value="Update"/>
</form>
<?php
}
?>