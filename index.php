<?php 

$conn=mysql_connect("localhost","root","") or die(mysql_error());



 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-compatible" content="IE-edge">
	<meta name="viewport" content="width-device-width">
	<title>Admission preparation</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/mystyle.css">
	<link rel="stylesheet" type="text/css" href="web-fonts-with-css/css/fontawesome-all.min.css">
</head>
	
<body>
	<!--header -->
	<div class="container-fluid top_bar"   >
	<div class="container" >
	<div class="row">

	<div class="col-sm-3">
		
	<a href="" class="social_icons"><i class="fab fa-facebook" style="font-size:20px; color:#ffffff; "></i>	</a>

	<a href="" class="social_icons"><i class="fab fa-linkedin" style="font-size:20px; color:#ffffff; " ></i> </a>
	<a href="" class="social_icons"><i class="fab fa-whatsapp" style="font-size:20px; color:#ffffff; "></i>  </a>
	<a href="" class="social_icons"><i class="fab fa-youtube"  style="font-size:20px; color:#ffffff; "></i>  </a>
	<a href="" class="social_icons"><i class="fab fa-instagram" style="font-size:20px; color:#ffffff; "></i> </a>

	</div>
	<div class="col-sm-9  text-right  contect_info">
		<span class="glyphicon glyphicon-envelope"></span> Admission-premaretion@gimail.com
	    <span class="glyphicon glyphicon-earphone"></span> 01624034446
	</div>	
	</div><!--end of row -->		
		
	</div> <!--end of container -->	
	</div><!--end of container-fluid -->

	<!--logo and nevigation-->
	<div class="container">
		<div class="row">
		  <div class="col-sm-6">
		  <img src="img/logo.png" alt="" />

		  </div>

		   <div class="col-sm-6 my_menu">
		   	<nav class="navbar navbar-default">
		   	<div class="navbar-header">
		   	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#my_navbar">
		   		<samp class="icon-bar"></samp>
		   		<samp class="icon-bar"></samp>
		   		<samp class="icon-bar"></samp>
		   	</button>	
		   	</div>	<!--end of  navber collapse-->
		   	<div class="collapse navbar-collapse" id="my_navbar">
		   	<ul class="nav navbar-nav  pull-right" >

		    	<li class="active"><a href="">Home</a></li>
		   		<li><a href="">About us</a></li>	
		   		<li><a href="registration.php"><span class="glyphicon glyphicon-user"></span>Registration</a></li>
		   		<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Log-in</a></li>
		   	</ul>
		   	</div><!--end of collapse-->
		   	</nav>
		   </div>	<!--end of 2nd colum-->
		</div><!--end of  logo row -->

	</div>
	<!--logo and nevigation-->

	<!--end of header -->
	<!--start of new welcome container-->
	<div class="container">
		<h1 style="color:#F26522; text-align:center;  "> <b>Welcome To Admission Preparation System</b></h1>
	</div>
	<!--end of new welcome container-->
	<!--start slider container-->

	
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Carousel indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>   
    <!-- Wrapper for carousel items -->
    <div class="carousel-inner">
        <div class="item active">
            <img src="img/ebooks.jpg" alt="First Slide">
        </div>
        <div class="item">
            <img src="img/ebooks.jpg" alt="Second Slide">
        </div>
        <div class="item">
            <img src="img/ebooks.jpg" alt="Third Slide">
        </div>
    </div>
    <!-- Carousel controls -->
    <a class="carousel-control left" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
    </a>
    <a class="carousel-control right" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
    </a>
</div>
<!--end slider container-->
<!--footer start-->
<div class="navbar navbar-inverse navbar-bottom">
	<div class="container">
		<p style="text-align:center; color:white; "> copy right Admission Preparation 2018</p>
	</div>
	
</div>
<!--footer end-->


	<script type="text/javascript" src="js/jquery-3.3.1.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>

