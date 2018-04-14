<?php 
   $conn = mysqli_connect('localhost', 'root', '', 'mydb');
   if (isset($_POST['submit'])) {
   	$name = $_POST['name'];
    $email = $_POST['email'];
    $group=$_POST['group'];
    $hsc=$_POST['hsc'];
    $ssc=$_POST['ssc'];
    $type= $_POST['type'];
    $pass= time();
    echo $pass;

     $query ="INSERT INTO student(name,email,s_group,ssc,hsc,user_type,pass)VALUES( '$name','$email','$group','$hsc','$ssc','$type','$pass')";

    $sql = mysqli_query($conn,$query);
    if ($sql) {
    	echo $pass;
    } else{
    	echo "error"	;
    }
   }
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>UNIT -A</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-compatible" content="IE-edge">
  <meta name="viewport" content="width-device-width">
  <title>Admission preparation</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/mystyle.css">
  <link rel="stylesheet" type="text/css" href="css/registration_css.css">
  <link rel="stylesheet" type="text/css" href="css/notice.css">

  <link rel="stylesheet" type="text/css" href="web-fonts-with-css/css/fontawesome-all.min.css">

</head>

<body>
  
  <!--logo and nevigation-->
  <div class="container">
    <div class="row">
      <div class="col-sm-4">
      <img src="img/logo.png" alt="" />

      </div>

       <div class="col-sm-8 my_menu">
        <nav class="navbar navbar-default">
        <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#my_navbar">
          <samp class="icon-bar"></samp>
          <samp class="icon-bar"></samp>
          <samp class="icon-bar"></samp>
        </button> 
        </div>  <!--end of  navber collapse-->
        <div class="collapse navbar-collapse" id="my_navbar">
        <ul class="nav navbar-nav  pull-right" >
                 <li><a href="index.php">Home</a></li>
          <li class="active"><a href="unit-a.html">online application</a></li> 
          <li><a href="">Instructions</a></li>
          
          <li ><a href="login.php">log-in</a></li>
        </ul>
        </div><!--end of collapse-->
        </nav>
       </div> <!--end of 2nd colum-->
    </div><!--end of  logo row -->

  </div>
  <!-- end logo and nevigation-->
  <div class="container">

    <div class="row">

      <div class="col-md-6 col-offset-3 " id="from">

        <center> <b class="registration"> UNIT A </b></center>

        <form   name="from" method="post" action="" >
          <!--from -group name start-->
          <div class="from-group" >
            <label>Name :</label>

          <input type="text" name="name" placeholder="Enter your name" class="form-control reg_text"  >
          
          </div>
            <!--from name-group end-->

          <!--from -group email start-->  
          <div class="from-group" >
            <label>Email :</label>

          <input type="email" name="email" placeholder="Enter your email" class="form-control reg_text"  >
            
          </div>
            <!--from -group email end-->
            <!--from -group start-->
            <div class="from-group">
              <label>Group :</label>
              <select class="form-controlm" name="group">
              	<option value="null">Select group</option>
              	<option value="Science">Sience</option>
              	<option value="Science">Commerce</option>
              	<option value="Science">Arts</option>
              </select>

            <!--from -result start--> 
          <div class="from-group" >
            <label>HSC Result :</label>

          <input type="text" name="hsc" placeholder="Enter your result" class="form-control reg_text"  >
            
          </div>
            <!--from result end-->

            <!--from ssc start--> 
          <div class="from-group" >
            <label>SSC result  :</label>

          <input type="text" name="ssc" placeholder="Enter your result" class="form-control reg_text"   >
            
          </div>
            <!--from -group result end-->

          <div class="from-group" >
            <label>User Type  :</label>

          <input type="text" name="type" placeholder="Enter your User type" class="form-control reg_text"   >
            
          </div>
          <!-- <div class="from-group" >
            <label>pasword  :</label>

          <input type="password" name="password" placeholder="Enter your User type" class="form-control reg_text"   >
            
          </div> -->
            

          <!--from -group buttonstart-->  
             </br>
          <div class="from-group" >
            

          <input type="submit" name="submit"  class="btn btn-warning" value="Submit">

          <input type="reset" name="reset"  class="btn btn-danger" value="Reset">
            
          </div>
            <!--from -group button end-->
        </form>
          <!--from end-->
      </div>
      <!--col end-->
    </div>
    <!--row end-->
    <script type="text/javascript" src="js/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>

  </div>
</body>