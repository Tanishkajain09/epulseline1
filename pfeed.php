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
<link href="css/pfeed.css" rel="stylesheet" type="text/css"></link>
<link href="css\bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="css\bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
<script src="js/jquery-2.1.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</head>
<body>

<div id="outer">

<div id="menu">
    <ul>
	
     <li><a href="pbook.php">BOOK APPOINTMENT</a></li>
     <li><a href="myapp.php">MY APPOINTMENTS</a></li>
     <li><a href="discuss.php">DISCUSSION BOARD</a></li>
     <li><a href="pup.php?=<?php ?>">UPDATE PROFILE</a></li>
     <li><a href="pchange.php">CHANGE PASSWORD</a></li>
     <li><a href="pfeed.php">FEEDBACK</a></li>
	 <li><a href="plogout.php">LOGOUT</a></li>
    </ul>
   </div> 
  
<div id="container"><h2 style="font-family:calibri;color:white">&nbsp;&nbsp;&nbsp;&nbsp;EPULSELINE</h2><h1 style="margin-left:800px;margin-top:-60px;font-size:40px;font-family:calibri;color:white;margin-left:1000px;">Your feedback</h1><hr style="border:1px solid #1ab2fd;width:100%;"/>
<div id="face"><center><div style="min-height:680px;width:1100px;padding:5%;background-color:rgba(0,0,0,0.6);box-shadow:3px 3px 3px 3px;margin:0px auto;"><h3 style="font-family:calibri;margin-left:-50px;color:white;">We Would Like Your Feedback To Improve Our Website</h3><center>

<h1 style="color:white;margin-left:-500px;"><hr style="border:1px solid #1ab2fd;width:60%;margin-left:550px;"/>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal" style="float:right;margin-top:100px;margin-right:400px;">
  Give Your feedback
</button></h1>

<br/>
<br/>
<hr style="border:1px solid #1ab2fd;width:100%;margin-top:200px;"/>
</div>

<div id="feedback">

<?php

//echo $_SESSION['patient'];
?>

<form action="pfeedcode.php" method="post" >

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Give Your feedback</h4><br>
      </div>
      <div class="modal-body">
	  <form action="question.php" method="post">
      <center><t style="font-familiy:calibri;font-size:35px;color:black;"><br>Give Your feedback</t><br/><br/>
<textarea name="ques" style="width:70%;align:center;" class="form-control">
</textarea>
<br/><br/>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <input type="submit" value="Send" class="btn btn-primary"/>
		</div>
		</div>
		</div>
		</div>
</form>

</div>
</div>
<div id="footer">
  <hr style="margin-top:-5px;height:1px; background-color:white"></hr>
  <div id="left">&copy;:reserved
  <div id="right">DESIGNED BY:TANISHKA</div>
  </div>
</div>
</div>