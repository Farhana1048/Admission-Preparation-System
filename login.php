
<?php 
session_start();
$conn = new mysqli("localhost","root","","mydb");
if(isset($_POST['login']))
{
	$username = $_POST['email'];
	$password = $_POST['password'];
	// $tp = $_POST['type'];

	$result = "select * from student where email='$username' and pass='$password'";
	$query = mysqli_query($conn,$result);
	if ($query->num_rows > 0) {
		$row=mysqli_fetch_assoc($query);
		$_SESSION["student"] = $row['email'];
		header('Location:student-profile.php');
	}else {
		$result = "select * from teacher_reg where email='$username' and password='$password'";
		$query = mysqli_query($conn,$result);
		if ($query->num_rows > 0) {
			$row=mysqli_fetch_assoc($query);
			$_SESSION["teacher"] = $row['email'];
			header('Location:teacher-profile.php');
		} else{
			
		
			echo "Invalid email pass";
		}
	}


	// if(mysqli_query($conn,$result))
	// 	{  
	//    header('Location:student-profile.php');
			
	// 	}
	// 	else{
	// 		$result = "select * from teacher_reg where email='$username' and password='$password'";
	// 		if (mysqli_query($conn,$result)) {
	// 			header('Location:teacher-profile.php');
	// 		}
	// 		else{
	// 			echo "invalid username password";
	// 		}
	// 	}









	// if($tp == "user")
	// {


	// 	$result = "select * from student where email='$username' and pass='$password'";
	// 	//echo $result;
	// 	if(mysqli_query($conn,$result))
	// 	{  
	//    header('Location:student-profile.php');
			
	// 	}
	// 	else{
	// 		echo "Error username or Password";
	// 	}
	// }
	// else
	// {   $result = "select * from teacher_reg where email='$username' and password='$password'";
	// 	//echo $result;
	// 	if(mysqli_query($conn,$result))
	// 	{
	// 		header('Location:teacher-profile.php');
	// 	}
	// 	else{
	// 		echo "Error username or Password";
	// 	}

	// }

}





 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>LogIn</title>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-compatible" content="IE-edge">
	<meta name="viewport" content="width-device-width">
	<title>Admission preparation</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/mystyle.css">
	<link rel="stylesheet" type="text/css" href="web-fonts-with-css/css/fontawesome-all.min.css">
</head>




<body>
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

		    	<li ><a href="index.php">Home</a></li>
		   		<li><a href="">About us</a></li>	
		   		<li><a href="registration.php">Registration</a></li>
		   		<li class="active"><a href="">log-in</a></li>
		   	</ul>
		   	</div><!--end of collapse-->
		   	</nav>
		   </div>	<!--end of 2nd colum-->
		</div><!--end of  logo row -->

	</div>
	<!--logo and nevigation-->

<!--login page-->
<div class="container"   >
	<div class="col-sm-10 login_css" style="width:600px; margin-left:259px; margin-top:20px;">

		<div class="jumbotron" >

			<div class="form-group" style="margin-top:-50px; ">

			 <h1  class="title" style="margin-top:20px; background:  #F26522; padding:20px; color:white; text-align:center; border-radius:0px 0px 10px 10px ;"> Login 
			 </h1>
			</div>
       <hr>
           <!--from tag start-->
       <form method="post" name="from" class="from-horizontal" style="margin-left:50px;">
<!--           <div class="form-group input-group">
           	<select name="type" style="height:30px; ">
           		<option value="-1">select user type</option>
           		<option value="user"> User</option>
           		<option value="teacher"> Teacher</option>
			</select>
          </div> -->
           	
           	 <!--user name start-->
	       <label style="font-size:15px; "> Username</label>
           	<div class="form-group input-group">
           		<span class="input-group-addon">
           			<span class="glyphicon glyphicon-user">
           				
           			</span>
           		</span>
           	

           		<input type="text" name="email"  class="from-control" placeholder="Enter your email" style="width:300px; height: 40px;" required>
           		

           	</div>
           	 <!--user name end-->
           	  <!--password start-->
           	<label style="font-size:15px; "> Password</label>

           	<div class="form-group input-group">
           		

           		<span class="input-group-addon">
           			<span class="glyphicon glyphicon-lock">
           				
           			</span>
           		</span>


           		<input type="password" name="password"  class="from-control" placeholder="Enter your password" style="width:300px; height: 40px;" required>

           		

           	</div>
           	<!--password end-->
           	<!--login btn start-->
           	<div class="form-group ">
           		<button type="submit" class="btn btn-warning"  name="login" style=" font-size:20px;  width:340px; background-color:#F26522;  ">Login</button>

           	</div>

           	<!--login btn end-->
           </form>



           <!--from tag end-->


			</div>
			
		</div>

    </div>
</div>


<!--login page end-->
<!--footer start-->
<div class="navbar navbar-inverse navbar-bottom">
	<div class="container">
		<p style="text-align:center; color:white; "> copy right Admission Preparation 2018</p>
	</div>
	
</div>
<!--footer end-->
</body>
</html>