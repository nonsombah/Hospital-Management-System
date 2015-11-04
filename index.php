
<?php
include "connect.php";

if($con==""){
	header("Location: install.php");
}else{

include_once "header.php";
}
?>	
		<div class="navbar navbar-inverse">
		<ul class="list-unstyled list-inline">
		<div class="nav navbar-nav navbar-left">
		<li><a href="login.php?admin" >Admin</a></li>
		<li><a href="login.php?doctor" >Doctor</a></li>
		<li><a href="login.php?nurse" >Nurse</a></li>
		<li><a href="login.php?pharmacist" >Pharmacist</a></li>
		<li><a href="login.php?cashier" >Cashier</a></li>
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
	
	
		
	<div class="row">
		<div class="col-xs-12">
		<p class="well">Welcome to the Hospital Management System, you have to be logged in to access your panel.</p>
		</div>
	</div>
	
	<div class="row">
		<div class="col-xs-6">
		<ul class="list-unstyled list-inline">
			<li><a href="login.php?admin"><img src="images/admin.png" alt="Admin" title="Admin" height="100" width="200" class="img-responsive" /></a></li>
			<li><a href="login.php?doctor"><img src="images/doctor.png" alt="Doctor" title="Doctor" height="100" width="200" class="img-responsive" /></a></li>
		</ul>
		<ul class="list-unstyled list-inline">
			<li><a href="login.php?nurse"><img src="images/nurse.png" alt="Nurse" title="Nurse" height="100" width="200" class="img-responsive" /></a></li>
			<li><a href="login.php?pharmacist"><img src="images/pharmacist.png" alt="Pharmacist" title="Pharmacist" height="100" width="200" class="img-responsive" /></a></li>
		</ul>
		<ul class="list-unstyled list-inline">
			<li><a href="login.php?cashier"><img src="images/cashier.png" alt="Cashier" title="Cashier" height="100" width="200" class="img-responsive" /></a></li>
		</ul>
		</div>
		
		<div class="col-xs-6">
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
      <img src="images/docheart.jpg" alt="doctor holding a heart" width="1000"/>
    </div>

    <div class="item">
      <img src="images/femaledoc.jpg" alt="female doctor" width="1000"/>
    </div>

    <div class="item">
      <img src="images/heart.jpg" alt="stethoscope shaped to heart" width="1000"/>
    </div>

    <div class="item">
      <img src="images/monitor.jpg" alt="monitor" width="1000"/>
    </div>
	
	<div class="item">
      <img src="images/treat.jpg" alt="hospital ward" width="1000"/>
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
	</div>
    



<?php
include_once "footer.php";
?>
