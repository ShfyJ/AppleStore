
<!DOCTYPE html>
<html>
<head>
 <title>iStore - Login</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
	
		<!-- bootstrap -->
		<link href="../css/bootstrap.min.css" rel="stylesheet">  
	 <link href="../headfooter/stlye.css" rel="stylesheet">
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
		<script src="../libs/js/superfish.js"></script>	
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
		
  
 <link rel="stylesheet" href="style.css">
 <style>
 .error {color: #FF0000;}
 </style>
 
 	
 
 </head>

<body>
    
<script>
	var check = function() {
  if (document.getElementById('password').value ==
    document.getElementById('confirm_password').value) {
    document.getElementById('message').style.color = 'green';
    document.getElementById('message').innerHTML = 'matching';
  } else {
    document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = 'not matching';
  }
}
</script>
<div id="header"></div>
<?php

include("config.php");
include('userClass.php');

//$db=getDB();

$userClass = new userClass();
$check_confirm=$password_confirmErr="";
$errorMsgReg=$emailErr=$usernameErr=$passwErr=$email=$username=$password=$confirm_password="";

/* Signup Form */
/* Regular expression check */
if ($_SERVER["REQUEST_METHOD"] == "POST"){
     
		

	if (!empty($_POST['email'])) 
	{
		$email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
}
    if(!empty($_POST['username'])){
    	$username=test_input($_POST['username']);
    	if(!preg_match('~^[A-Za-z0-9_]{3,20}$~i', $username)){
    		if(strlen(trim($username))<3 || strlen(trim($username))>20){
    		$usernameErr="Username must contain 3-20 characters";	
    	}
    	else{
    		$usernameErr="Use only numbers or letters";
    	}
    }
}
    if (!empty($_POST['password'])) {
      $password=test_input($_POST['password']);
      if(!preg_match('~^[A-Za-z0-9!@#$%^&*()_]{8,16}$~i', $password)){
      	$passwErr= "Password must contain 8-16 characters";
      }
    }
    if (!empty($_POST['confirm_password'])) {
      $confirm_password=test_input($_POST['confirm_password']);
      if( $confirm_password!=$password){
      	$check_confirm=false;
       $password_confirmErr="Confirm password didn't match";
      }
      else $check_confirm=true;
    }

     $email_check=filter_var($email, FILTER_VALIDATE_EMAIL);
     $password_check=preg_match('~^[A-Za-z0-9!@#$%^&*()_]{8,16}$~i', $password);
     $username_check=preg_match('~^[A-Za-z0-9_]{3,20}$~i', $username);
     
	
	if($email_check && $password_check && $username_check && $check_confirm) 
	{
	$uid=$userClass->userRegistration($username,$password,$email);
	
	if($uid)
	{
		
	/*$url='home.php';*/
	
	header('Location:../index.php'); // Page redirecting to home.php 
	}
	else
	{
	$errorMsgReg="Username or Email already exists.";
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

    <!-- <a class="hiddenanchor" id="toregister"></a>
    <a class="hiddenanchor" id="tologin"></a>-->


		<div id="register" class="span 12 animate form">
		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" autocomplete="on">
		  <div class="container center-div">
		     <table ></table class="table table-striped"> <thead><tr><th>
		    <label><b>Email</b></label>
		    <input type="text" placeholder="Enter Email" name="email" required>
		    <span class="error" >* <?php echo $emailErr;?></span>
            <div></th><th>
		    <label><b>Username</b></label>
		    <input type="text" placeholder="Enter username" name="username" required>
            <span class="error" >* <?php echo $usernameErr;?></span>
		    </div></th><th>
		    <div>
		    <label><b>Password</b></label>
		    <input type="password" placeholder="Enter Password" name="password" id="password" pattern=".{8,16}" required>
            <span class="error" >* <?php echo $passwErr;?></span>
            </div></th><th>

            <div>
		    <label><b>Repeat Password</b></label>
		    <input type="password" placeholder="Confirm password" name="confirm_password" id="confirm_password" onkeyup='check();' required>
            <span id="message" ></span><span class="error" >* <?php echo $password_confirmErr;?></span>
		    <div class="error"><?php echo $errorMsgReg; ?></div>
		    </div></th>
</tr>  </thead></table >
		   </div><div class="container center-div">
		    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

		    <div class="clearfix">
		        <button type="submit" class="signupbtn">Sign Up</button>
		     
		      <span class="change">Already have account? <a href="login.php" >Sign in</a> </span>
		       <button type="button"  class="cancelbtn" name="signupSubmit">Cancel</button>
		    </div>
		  </div>
		</form>

	   
		</div>
	<div id="footer" style="margin-top: 550px" ></div>

</body>
</html>
