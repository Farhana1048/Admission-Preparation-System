
<!DOCTYPE html>
<?php 



$conn = new mysqli("localhost","root","","mydb");

if (isset($_POST['submit'])){

  $NAME=$_POST['name'];

  $EMAIL=$_POST['email'];

  $PASSWORD=$_POST['password'];

  $UNIVERSITY=$_POST['university'];

  $SUBJECT=$_POST['subject'];

  $PHONE=$_POST['phone-number'];

  $ADDRESS=$_POST['address'];

if(empty($NAME)||(empty($EMAIL))){
      echo"<script>window.alert('please fill up the required fields!!')</script>";
     
      }
      else{ 
    $insert="INSERT INTO teacher_reg(name,email,password,university,subject,phone,address)VALUES( '$NAME','$EMAIL','$PASSWORD','$UNIVERSITY', '$SUBJECT','$PHONE',
    '$ADDRESS')";

     echo $insert;
    $qry=mysqli_query($conn,$insert);
    if($qry){
      
       header('Location: teacher_reg.php');
      echo"<script>window.alert('Registration SUCCESSFULL!!')</script>";
      }
      else{
         echo"window.alert('Product insert Failed!!')";
        }
    }



}


 ?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registration</title>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-compatible" content="IE-edge">
	<meta name="viewport" content="width-device-width">
	<title>Admission preparation</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/mystyle.css">
	<link rel="stylesheet" type="text/css" href="css/registration_css.css">

	<link rel="stylesheet" type="text/css" href="web-fonts-with-css/css/fontawesome-all.min.css">

	
</head>
<body>
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
		   		<li class="    "><a href="registration.php"><span class="glyphicon glyphicon-user"></span>Registration</a>


          <ul  class="nav dropdwon_navbar-nav"  >
              <li  ><a href="registration.php">User</a></li> 
              <li class="active"><a href="teacher_reg.php">Teacher</a></li> 

             </ul>     
          </li>

		   		<li ><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Log-in</a></li>
		   	</ul>
		   	</div><!--end of collapse-->
		   	</nav>
		   </div>	<!--end of 2nd colum-->
		</div><!--end of  logo row -->

	</div>
	<!--logo and nevigation-->
	<!--registration start-->
  <div class="container">

  	<div class="row">

  		<div class="col-md-6 col-offset-3 " id="from">

  			<center> <b class="registration"> Teacher  Registration </b></center>

  			<form   name="from" method="post" >
  				<!--from -group name start-->
  				<div class="from-group" >
  					<label>Username :</label>

  				<input type="text" name="name" placeholder="Enter your name" class="form-control reg_text"  >
  				
  				</div>
  					<!--from name-group end-->

  				<!--from -group email start-->	
  				<div class="from-group" >
  					<label>Email :</label>

  				<input type="email" name="email" placeholder="Enter your email" class="form-control reg_text"  >
  					
  				</div>
  					<!--from -group email end-->

  					<!--from -group password start-->	
  				<div class="from-group" >
  					<label>Password :</label>

  				<input type="password" name="password" placeholder="Enter your password" class="form-control reg_text"  >
  					
  				</div>
  					<!--from -group password end-->
            <!--from -group uni-name start--> 
            <div class="from-group" >
            <label>University Name :</label>

          <input type="text" name="university" placeholder="Enter your University Name" class="form-control reg_text"    >
            
          </div>
          <!--from -group uni name end-->
          <!--from -group sub-name start--> 
            <div class="from-group" >
            <label>Subject Name :</label>

          <input type="text" name="subject" placeholder="Enter your subject  Name" class="form-control reg_text"    >
            
          </div>

  					<!--from -group sub-name end-->
            <!--from -group phone start-->
               <div class="from-group" >
            <label>phone Number :</label>

          <input type="text" name="phone" placeholder="Enter your phnone" class="form-control reg_text"  maxlength="11"  >
            
          </div>
           <!--from -group phone end-->
  				<!--from -group gender start-->	
  				<div class="from-group" >
  					<label>Gender :</label>

  				<select class="form-control text" name="gender"   >

  					<option value="male">Male</option>
  					<option value="female"> Female</option>
  					
  				</select>
  					
  				</div>
  					<!--from -group gender end-->

  						<!--from -group addressstart-->	
  				<div class="from-group" >
  					<label>Address :</label>

  				<textarea class="form-control" rows="6" placeholder="Enter your address" name="address"  ></textarea>
  					
  				</div>
  					<!--from -group address end-->	

  				<!--from -group buttonstart-->	
  			     </br>
  				<div class="from-group" >
  					

  				<input type="submit" name="submit"  class="btn btn-warning" value="Submit">

  				<input type="reset" name=""  class="btn btn-danger" value="Reset">
  					
  				</div>
  					<!--from -group button end-->
  			</form>
  				<!--from end-->
  		</div>
  		<!--col end-->
  	</div>
  	<!--row end-->

  </div>

	<!--registration end-->

<script type="text/javascript" src="js/jquery-3.3.1.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>