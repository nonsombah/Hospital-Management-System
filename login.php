<?php

session_start();//start a session
include_once "connect.php"; //connect to the database
/*
creat three variables and initialize them to null.
*/
$panel = "";
$location = "";
$table = "";
//when the user clicks on any of the panel links it sends a variable containing the value of the link.
if(isset($_GET['admin']))//if the value sent was "admin"
{
	$panel = "Admin";
	$location = "admin.php";
	$table = "admin";
	
}else if(isset($_GET['doctor']))//if the value sent was "doctor"
	{
		$panel = "Doctor";
		$location = "doctor.php";
		$table = "doctors";
		
	}
else if(isset($_GET['nurse']))//if the value sent was "nurse"
	{
		$panel = "Nurse";
		$location = "nurse.php";
		$table = "nurses";
		
	}else if(isset($_GET['pharmacist']))//if the value sent was "pharmacist"
	{
		$panel = "Pharmacist";
		$location = "pharmacist.php";
		$table = "pharmacists";
		
	}else if(isset($_GET['cashier']))//if the value sent was "cashier"
	{
		$panel = "Cashier";
		$location = "cashier.php";
		$table = "cashiers";
		
	}//end if

if(isset($_SESSION['username']) != "")
{
	header("Location:$location");
}

if(isset($_POST['btn-login']))
{
	$username = mysql_real_escape_string($_POST['username']);
	
	$password = mysql_real_escape_string($_POST['password']);
	
	$res=mysql_query("SELECT * FROM $table WHERE username= '$username'");
	
	$row=mysql_fetch_array($res);
	if($row['password']==($password))
	{
		$_SESSION['username']=$row['id'];
		header("Location:$location?username=$username");
	}
	else{
		?>
		<script>alert('wrong details');</script>
		<?php
	}
}
?>

<?php include "header.php"; ?>

<div class="navbar navbar-inverse">
		<ul class="list-unstyled list-inline">
		<div class="nav navbar-nav navbar-left">
		<li><a href="logout.php?username" >Home</a></li>
		</div>
		
		<div class=" nav navbar-nav navbar-right">
		 
		<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">About <b class="caret"></b></a>
			<ul class="dropdown-menu">
			<li><a href="abstract.html">Abstract</a></li>
			<li><a href="developer.hmtl">Developer</a></li>
			<li><a href="http://www.getbootstrap.com">Bootstrap</a></li>
			<li class="divider"></li>
			<li><a href="manual.html">User Manual</a></li>
			<li><a href="tools.html">Tools</a></li>
			</ul>
		</li>
		</div>
		</ul>
		</div>

<div class="col-xs-4">
<form method="post" action="" role="form" >
<div class="form-group">
<label for="username">username:</label>
<input type= "text" name = "username" placeholder="username required" class="form-control"/>
</div>
<div class="form-group">
<label for="password">password:</label>
<input type= "password" name = "password" placeholder= "password required" class="form-control"/>
</div>
<button type = "submit" name = "btn-login" class="btn btn-success">log in</button>
</form>
</div>
<div class="col-xs-8">
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
	<li data-target="#myCarousel" data-slide-to="4"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="images/admin.png" alt="doctor holding a heart" width="1000"/>
    </div>

    <div class="item">
      <img src="images/doctor.png" alt="female doctor" width="1000"/>
    </div>

    <div class="item">
      <img src="images/nurse.png" alt="stethoscope shaped to heart" width="1000"/>
    </div>

    <div class="item">
      <img src="images/pharmacist.png" alt="monitor" width="1000"/>
    </div>
	
	<div class="item">
      <img src="images/cashier.png" alt="hospital ward" width="1000"/>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
		</div>

<?php 
include"footer.php"; ?>
