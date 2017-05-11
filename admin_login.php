<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <link rel="stylesheet" href="./login_reg/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
	
		<!-- bootstrap -->
		<link href="./css/bootstrap.min.css" rel="stylesheet">  
	    <link href="./headfooter/style.css" rel="stylesheet">
		<link href="./libs/css/bootstrap-responsive.min.css" rel="stylesheet">
		<link href="./libs/css/bootstrappage.css" rel="stylesheet"/>
		
		<!-- global styles -->
		<link href="./libs/css/flexslider.css" rel="stylesheet"/>
		<link href="./css/main.css" rel="stylesheet"/>
		<link href="./css/picstlyle.css" rel="stylesheet"/>
        <!-- this landing part -->
      	<link href="./css/header.css" rel="stylesheet">  
        <link rel="stylesheet" href="./font-awesome-4.6.3/css/font-awesome.min.css">
        <link rel="stylesheet" href="./css/animate.min.css">
        
    
		<!-- scripts -->
		<script src="./libs/js/jquery-1.7.2.min.js"></script>
		<script src="./libs/js/bootstrap.min.js"></script>				
	
		<script src="./libs/js/jquery.scrolltotop.js"></script>
		
		    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script>
$(function () {
    $("#header").load("./headfooter/header.php");
    $("#footer").load("./headfooter/footer.php");
  
 
});
</script>
		
</head>
<body >
    
    
 <?php
    
    $usernameErr=$passwErr= $username=$password="";
    $errorMsgLogin='';
    /* Login Form */
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
    if(!empty($_POST['username'])){
    $username=test_input($_POST['username']);
    }
    
    if(!empty($_POST['password'])){
    $password=test_input($_POST['password']);
    }
    
    if($username=="admin" && $password=="123456789")
    {
    $url='admin.php';
    header("Location: $url"); // Page redirecting to home.php 
    }
    else
    {
    $errorMsgLogin="username or password is wrong";
    }
    }   
    
    function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
    }
?>

  <div id="header"></div>
<div id="wrapper" class="center_div">
<div id="login" class="span 12">

        <form  method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" autocomplete="off">
          <div class="imgcontainer">
            <img src="./login_reg/login-avatar.jpg" alt="Avatar" class="avatar">
          </div>

          <div class="container center-div">
          <div>
            <label><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="username" autocomplete="off" required>
          </div>
          <div>
            <label><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password"  autocomplete="off" required>
           </div> 
           <div>
            <div class="errorMsg" style="color: #FF0000;"><?php echo $errorMsgLogin; ?></div>
            
            <button type="submit">Login</button>
          <!--  <input type="checkbox" checked="checked"> Remember me-->
         

           
            
            
            <!--<span class="change">Not have an account? <a href="register.php">Sign up</a></span>
            <span class="psw">Forgot <a href="#">password?</a></span>-->
          </div>
          </div>
        </form>
        <form  action="index.php">
    <button type="submit" class="cancelbtn" name="loginSubmit" style="background-color:#f1f1f1" >Cancel</button>
          </form>

        </div>
        
        
<div id="footer" style="margin-top: 550px"></div>



</body>
</html>
