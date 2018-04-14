<?php 
  session_start();
  $conn = new mysqli("localhost","root","","mydb");
  if (isset($_POST['submit'])) {
  	header('Location:view-question.php');
  }
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
           		<li class="active"><a href="">Upload Question</a></li>
           		<li ><a href="view-question.php">View Question</a></li>
           		<li ><a href="">Logout</a></li>
           		
           		

           	</ul>
         
           </div>
		</div>
          
		
	</nav>
	</div><!--end of  logo row -->
	</div><!--end of  menu row -->

	<!--  table start-->
		<div class="container">
			<div class="panel panel-warning ">
				<div class="panel-heading"><h3 style="text-align:center; "> Question Table</h3>
					
				</div><!--end of  panel heading -->


				   
                
				<table class="table">
					<tr>
						<th>Subject</th>
						<th>Question</th>
						<th>Option-A</th>
						<th>Option_B</th>
						<th>Option-C</th>
						<th>Option-D</th>
						<th> Correct Ans</th>
					</tr>
					<?php
					   $qs1 = $_SESSION['qs1'];
					   $query = "select * from qs where qs = '$qs1'";

					   $result = mysqli_query($conn, $query);
					   while ($row = mysqli_fetch_assoc($result)) {
					?>
					<tr>
						<td><?php echo $row['subject'];  ?></td>
						<td><?php echo $row['qs'];  ?></td>
						<td><?php echo $row['a'];  ?></td>
						<td><?php echo $row['b'];  ?></td>
						<td><?php echo $row['c'];  ?></td>
						<td><?php echo $row['d'];  ?></td>
						<td><?php echo $row['ans'];  ?></td>
					</tr>
					<?php } ?>

					<?php
					   $qs2 = $_SESSION['qs2'];
					   $query = "select * from qs where qs = '$qs2'";

					   $result = mysqli_query($conn, $query);
					   while ($row = mysqli_fetch_assoc($result)) {
					?>
					<tr>
						<td><?php echo $row['subject'];  ?></td>
						<td><?php echo $row['qs'];  ?></td>
						<td><?php echo $row['a'];  ?></td>
						<td><?php echo $row['b'];  ?></td>
						<td><?php echo $row['c'];  ?></td>
						<td><?php echo $row['d'];  ?></td>
						<td><?php echo $row['ans'];  ?></td>
					</tr>
					<?php } ?>
					<?php
					   $qs3 = $_SESSION['qs3'];
					   $query = "select * from qs where qs = '$qs3'";

					   $result = mysqli_query($conn, $query);
					   while ($row = mysqli_fetch_assoc($result)) {
					?>
					<tr>
						<td><?php echo $row['subject'];  ?></td>
						<td><?php echo $row['qs'];  ?></td>
						<td><?php echo $row['a'];  ?></td>
						<td><?php echo $row['b'];  ?></td>
						<td><?php echo $row['c'];  ?></td>
						<td><?php echo $row['d'];  ?></td>
						<td><?php echo $row['ans'];  ?></td>
					</tr>
					<?php } ?>
				</table>
			</div><!--end of  panel -->
           
			
		</div><!--end of  container -->
          
		
	</nav>
	</div><!--end of  logo row -->
	</div><!--end of  menu row -->


  				<!--from -group buttonstart-->	
  			     </br>
  				<form method="post">
  					<div class="from-group" >
		  				<input type="submit" name="submit"  class="btn btn-warning pull-right" value="Submit" style="border-radius: 5px;padding:10px;margin: 30px;width:20%;font-size:20px; " >
		  				<input type="button" name="edit"  class="btn btn-basic pull-right" value="Edit" style="border-radius: 5px;padding:10px;margin: 30px;width:20%;font-size:20px; ">
		  				</div>
  				</form>
  					<!--from -group button end-->
<script type="text/javascript" src="js/jquery-3.3.1.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	
	
	</body>

</html>