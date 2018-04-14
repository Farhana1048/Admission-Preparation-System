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
	<!--  table start-->
		<div class="container">
			<div class="panel panel-warning ">
				<div class="panel-heading"><h3 style="text-align:center; "> Question Details</h3>
					
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
					   if (isset($_GET['name'])) {
					   	$qs = $_GET['name'];
					   }
					   $query = "select * from qs where qs = '$qs'";

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
			  </br>
  				<!-- <form method="post">
  					<div class="from-group" >
		  				<input type="button" name="edit"  class="btn btn-basic pull-right" value="Edit" style="border-radius: 5px;padding:10px;margin: 30px;width:20%;font-size:20px; ">
		  				</div>
  				</form> -->
		</div><!--end of  container -->
		
	</nav>
	</div><!--end of  logo row -->
	</div><!--end of  menu row -->
<script type="text/javascript" src="js/jquery-3.3.1.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	
	
	</body>

</html>