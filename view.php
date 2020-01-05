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
<br/>

<center>
<h1>Reviews</h1>
<?php
$qid=$_REQUEST['qid'];
include("connect.php");
$query="select * from tbl_question where qid='$qid'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	echo $row['qid'];
	echo "<br/>";
}
?>
<br/><br/><br/><br/><br/><br/>
</div>
<div id="footer">
  <hr style="margin-top:-5px;height:1px;background-color:white"></hr>
  <div id="left">&copy;:reserved
  <div id="right">DESIGNED BY:TANISHKA</div>
  </div>
</div>
</body>
</html>