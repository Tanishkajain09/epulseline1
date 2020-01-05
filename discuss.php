<?php
session_start();
if($_SESSION['patient']=="")
{
	session_destroy();
	header("Location:login.php");
}
include("connect.php");
?>




<html>
<head>
<link href="css\discuss.css" rel="stylesheet" type="text/css"/>
<link href="css\bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="css\bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
<script src="js/jquery-2.1.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
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
<br/><br/><br/><br/>
<?php
include("connect.php");
$query="select * from tbl_question";
$res=mysql_query($query);
?>
<div style="min-height:400px;width:1100px;padding:5%;background-color:rgba(0,0,0,0.6);box-shadow:3px 3px 3px 3px;margin:0px auto;">
<h1 style="color:white;">Disscussion Board<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal" style="float:right;">
  Ask your query
</button></h1>
<hr style="border:1px solid #1ab2fd;width:100%;"/>
<br/>
<br/>
<table border="1" align="center" style="border:10px solid; border-radius:10px;color:white;font-familiy:calibri;font-size:20px;min-height:500px;width:100%;" cellspacing="5" cellpadding="2">
<tr style="background-color:#1ab2fd">
<th style="font-size:25px;">S.NO</th>
<th style="font-size:25px;">Question</th>
<th style="font-size:25px;">Post Answer</th>
<th style="font-size:25px;">View Answer</th>
</tr>
<?php 
$a=1;
while($row=mysql_fetch_array($res,MYSQL_BOTH))
{
?>
<tr style="background-color:white">
<td style="color:black;" align=center><?php echo $a;?></td>
<td style="color:black;" align=center><?php echo $row['question'];?></td>
<td style="color:black;" align=center><a href="post.php?qid=<?php echo $row['0']?>" style="font-family:calibri;color:black;">Post Answer</a></td>
<td style="background-color:white;" align=center><a href="view.php?qid=<?php echo $row['0']?>" style="font-family:calibri;color:black;">View Answer</a></td>
</tr>
<?php
$a++;
}
?>
</table><br/><br/>



<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Ask your Query</h4><br>
      </div>
      <div class="modal-body">
	  <form action="question.php" method="post">
      <center><t style="font-familiy:calibri;font-size:35px;color:black;"><br>Ask Your Query</t><br/><br/>
<textarea name="ques" style="width:70%;align:center;" class="form-control">
</textarea>
<br/><br/>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <input type="submit" value="Ask query" class="btn btn-primary"/>
		</div>
		
</form>
    </div>
  </div>
</div>


</div>
</div>
</body>
</html>