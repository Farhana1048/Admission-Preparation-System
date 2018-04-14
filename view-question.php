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
           		<li ><a href="teacher-profile.php">Profle</a></li>
           		<li ><a href="question_up.php">Upload Question</a></li>
           		<li class="active"><a href="">View Question</a></li>
           		<li ><a href="">Logout</a></li>
           		
           		

           	</ul>
         
           </div>
		</div>
		<!--  table start-->
		<div class="container">
			<div class="panel panel-warning ">
				<div class="panel-heading">
					
				</div><!--end of  panel heading -->
				
			</div><!--end of  panel -->
           
			
		</div><!--end of  container -->
          
		
	</nav>
	</div><!--end of  logo row -->
	</div><!--end of  menu row -->
	<div class="container">
		<table class="table">
					<tr>
						<th>Questions</th>
						<th>View Details</th>
					</tr>
					<?php
					   $query = "select * from qs";

					   $result = mysqli_query($conn, $query);
					   while ($row = mysqli_fetch_assoc($result)) {
					?>
					<tr>
						<td><?php echo $row['qs'];  ?></td>
						<td><a href="view_qs_details.php?name=<?php echo($row['qs']);  ?>">Details</a></td>
					</tr>
					<?php } ?>
				</table>
	</div>
	<script type="text/javascript" src="js/jquery-3.3.1.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
</body>

</html>