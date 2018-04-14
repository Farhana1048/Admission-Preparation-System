<?php 
session_start();
$conn = new mysqli("localhost","root","","mydb");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-compatible" content="IE-edge">
	<meta name="viewport" content="width-device-width">
	<title>Quesion_Up</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/mystyle.css">
	<link rel="stylesheet" type="text/css" href="css/registration_css.css">
	<link rel="stylesheet" type="text/css" href="web-fonts-with-css/css/fontawesome-all.min.css">
</head>
<body>
	<div class="container my_menu">
    <div class="row">
    	<div class="col-sm-6">
		  <img src="img/logo.png" alt="" />

		  </div>
	<nav class="navbar navbar-default ">
		<div class="container-fluid">
			<!--logo-->
			
			<div class="navbar-header" id="my_navbar" >
				<a href="" class="navbar-brand" style="color:#F26522; margin:0; padding:0;   "><h3><b>Admission preparation System</b></h3></a>

			</div>

         <!--menuber-->
           <div>
           	<ul class="nav navbar-nav">
           		<li class="active"><a href="">Profle</a></li>
           		<li ><a href="question_up.php">View result</a></li>
           		<li ><a href="student-view-qs.php">View Question list</a></li>
           		<li ><a href="">Logout</a></li>
           		
           		

           	</ul>
         
           </div>
		</div>
			<div class="container">
			<h3 class="text-center">Welcome to Profile</h3>
			<?php
			   $email = $_SESSION["teacher"];
			   $result = "select * from student where email= '$email' ";
			   $query = mysqli_query($conn,$result);
			   while ($row = mysqli_fetch_assoc($query)) {
			?>
			<h4><b>Name:</b> <span><?php echo $row['name'];  ?></span></h4>
			<h4><b>Email:</b> <span><?php echo $row['email'];  ?></span></h4>
			<h4><b>Phone:</b> <span><?php echo $row['phone'];  ?></span></h4>
			<h4><b>Address:</b> <span><?php echo $row['address'];  ?></span></h4>
			<?php } ?>
		</div>
		<script type="text/javascript" src="js/jquery-3.3.1.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	
	
	</body>

</html>