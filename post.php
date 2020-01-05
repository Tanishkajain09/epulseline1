<html>
<head>
<link href="css/post.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<div id="outer">
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
<div id="form">
<br/><br/><br/>
<center>
<?php
$qid=$_REQUEST['qid'];
//echo $qid;
?>
<form action="answer.php" method="post">
<input type="hidden" name="qid" value="<?php echo $qid;?>"/>
Add Your Views<br/><br/>
<textarea name="ans" style="border-radius:10px;height:70px;width:300px"></textarea><br/>
<input type="submit" value="add" style="border-radius:10px;height:50px;width:300px;margin-top:20px;color:white;font-family:calibri;font-size:25px;background-color:#1ab2fd;"/>
<br/><br/><br/>
</form>
</center>
</div>
<div id="footer">
  <hr style="margin-top:-5px;height:1px; background-color:white"></hr>
  <div id="left">&copy;:reserved
  <div id="right">DESIGNED BY:TANISHKA</div>
  </div>
</div>
</body>
</html>