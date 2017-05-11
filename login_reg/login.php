

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <link rel="stylesheet" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
	
		<!-- bootstrap -->
		<link href="../css/bootstrap.min.css" rel="stylesheet">  
	    <link href="../headfooter/style.css" rel="stylesheet">
		<link href="../libs/css/bootstrap-responsive.min.css" rel="stylesheet">
		<link href="../libs/css/bootstrappage.css" rel="stylesheet"/>
		
		<!-- global styles -->
		<link href="../libs/css/flexslider.css" rel="stylesheet"/>
		<link href="../css/main.css" rel="stylesheet"/>
		<link href="../css/picstlyle.css" rel="stylesheet"/>
        <!-- this landing part -->
      	<link href="../css/header.css" rel="stylesheet">  
        <link rel="stylesheet" href="../font-awesome-4.6.3/css/font-awesome.min.css">
        <link rel="stylesheet" href="../css/animate.min.css">
        
    
		<!-- scripts -->
		<script src="../libs/js/jquery-1.7.2.min.js"></script>
		<script src="../libs/js/bootstrap.min.js"></script>				
	
		<script src="../libs/js/jquery.scrolltotop.js"></script>
		
		    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script>
$(function () {
    $("#header").load("../headfooter/header1.php");
    $("#footer").load("../headfooter/footer1.php");
  
 
});
</script>
		
</head>
<body >
    
    
 <?php
    include("config.php");
    include('userClass.php');
    $userClass = new userClass();
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
    if(strlen(trim($username))>1 && strlen(trim($password))>1 )
    {
    $uid=$userClass->userLogin($username,$password);
    if($uid)
    {
    $url='../index.php';
    header("Location: $url"); // Page redirecting to home.php 
    }
    else
    {
    $errorMsgLogin="username or password is wrong";
    }
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

        <form  method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" autocomplete="on">
          <div class="imgcontainer">
            <img src="login-avatar.jpg" alt="Avatar" class="avatar">
          </div>

          <div class="container center-div">
          <div>
            <b>Username</b>
            <input type="text" placeholder="Enter Username" name="username" autocomplete="on" required>
          </div>
          <div>
            <b>Password</b>
            <input type="password" placeholder="Enter Password" name="password" pattern=".{8,16}" autocomplete="off" required>
           </div> 
           </div>
            <div class="errorMsg" style="color: #FF0000;"><?php echo $errorMsgLogin; ?></div>
            
            <button type="submit">Login</button>
            <input type="checkbox" checked="checked"> Remember me
          

        </form>
        <form  action="index.php">
          <div class="" style="background-color:#f1f1f1">
            <button type="submit" class="cancelbtn" name="loginSubmit">Cancel</button>
            <span class="change">Not have an account? <a href="register.php">Sign up</a></span>
            <span class="psw">Forgot <a href="#">password?</a></span>
          </div>
          </form>
          
          </div>
        </div>
        
        
<div id="footer" style="margin-top: 750px"></div>



</body>
</html>
