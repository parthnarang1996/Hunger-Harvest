<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>login</title>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="css/login.css">

	  <style type="text/css">
	  #buttn{
		  color:#fff;
		  background-color: #000cbb;
	  }
	  </style>
  
</head>

<body>
<?php
include("connection/connect.php"); //INCLUDE CONNECTION
error_reporting(0); // hide undefine index errors
session_start(); // temp sessions
if(isset($_POST['submit']))   // if button is submit
{
	$email = $_POST['email'];  //fetch records from login form
	$password = $_POST['password'];
	
	if(!empty($_POST["submit"]))   // if records were not empty
     {
	$loginquery ="SELECT * FROM restaurant WHERE email='$email' && password='".$password."'"; //selecting matching records
	$result=mysqli_query($db, $loginquery); //executing
	$row=mysqli_fetch_array($result);
	
	                        if(is_array($row))  // if matching records in the array & if everything is right
								{
                                    	$_SESSION["rs_id"] = $row['rs_id']; // put user id into temp session
										 header("refresh:1;url=all_menu.php"); // redirect to all_menu.php page
	                            } 
							else
							    {
                                      	$message = "Invalid email or Password!"; // throw error
                                }
	 }
	
	
}
?>
  
<!-- Form Mixin-->
<!-- Input Mixin-->
<!-- Button Mixin-->
<!-- Pen Title-->
<div class="pen-title">
  <h1>Login Form</h1>
</div>
<!-- Form Module-->
<div class="module form-module">
  <div class="toggle">
   
  </div>
  <div class="form">
    <h2>Restaurant Login</h2>
	  <span style="color:red;"><?php echo $message; ?></span> 
   <span style="color:green;"><?php echo $success; ?></span>
    <form action="" method="post">
      <input type="text" placeholder="Email"  name="email"/>
      <input type="password" placeholder="Password" name="password"/>
      <input type="submit" id="buttn" name="submit" value="login" />
    </form>
  </div>
  
  <div class="cta">Not registered?<a href="join.php" style="color:#000cbb;"> Create an account</a></div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

   



</body>

</html>