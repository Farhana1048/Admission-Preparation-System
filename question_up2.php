<?php 
session_start();
   $conn = mysqli_connect('localhost', 'root', '', 'mydb');
   if (isset($_POST['submit-btn-click'])) {
    $subject = $_POST['sub'];
    $qs = $_POST['question1'];
    $a=$_POST['A1'];
    $b=$_POST['B1'];
    $c=$_POST['C1'];
    $d= $_POST['D1'];
    $ans= $_POST['ans1'];
    $_SESSION['qs2'] = $qs;
     $query ="INSERT INTO qs(subject,qs,a,b,c,d,ans)VALUES( '$subject','$qs','$a','$b','$c','$d','$ans')";

        

    $sql = mysqli_query($conn,$query);
    if ($sql) {
    header('Location:question_up3.php');
    } else{
      echo "error"  ;
    }
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



	<!-- start-->
  <div class="container">

  	<div class="row">

  		<div class="col-md-6 col-offset-3 " id="from">

  			<center> <b class="registration"> Upload Question </b></center>

  			<form   name="from" method="post" >
  					<!--from -group question start-->	
            <div class="from-group" >
            <label>Subject Name</label>

          <input type="text" id="sub" name="sub" placeholder="Enter Subject name" class="form-control reg_text" id="sub">
          
          </div>

  				<div class="from-group" >
  					<label>Question 1 :</label>

  				<textarea class="form-control" rows="6" placeholder="Enter your Question"  name="question1"  ></textarea>
  					
  				</div>
  					<!--from -group quetion end-->
  				<!--from -group option A start-->
  				<div class="from-group" >
  					<label>Option A:</label>

  				<input type="text"  name="A1" placeholder="Enter option A" class="form-control reg_text"  >
  				
  				</div>
  					<!--from A-group end-->

  				<!--from -group B start-->	
  				<div class="from-group" >
  					<label>Option B</label>

  				<input type="text"  name="B1" placeholder="Enter your Option B" class="form-control reg_text"  >
  					
  				</div>
  					<!--from -group B end-->
  					<!--from -group C start-->	
  				<div class="from-group" >
  					<label>Option C</label>

  				<input type="text"  name="C1" placeholder="Enter your Option C" class="form-control reg_text"  >
  					
  				</div>
  					<!--from -group D end-->
  					<div class="from-group" >
  					<label>Option D</label>

  				<input type="text"  name="D1" placeholder="Enter your Option D" class="form-control reg_text"  >
  					
  				</div>
  					<!--from -group D end-->
  					<!--from -group ans end-->
  					<div class="from-group" >
  					<label style="color:#F26522;"><h3>Right Ans:</h3></label>

  				<input type="text"   name="ans1" placeholder="Enter Right Ans" class="form-control reg_text"  >
  					
  				</div>
  					<!--from -group ans end-->
           

  					

  				<!--from -group buttonstart-->	
  			     </br>
  				<div class="from-group" >
  					

  				<input type="submit" name="submit-btn-click" class="btn btn-warning"  value="Next" >


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
<!--JQ Start-->

<
<!--JQ end-->



	<script type="text/javascript" src="js/jquery-3.3.1.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript">
    var sub = document.getElementById('sub').value;
    console.log(sub);
  </script>
</body>

</html>