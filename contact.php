 <?php
    
    include("./login_reg/config.php");
$db= getDB(); 

$nameq=$_POST['name'];
$emailq=$_POST['email'];
$messageq=$_POST['message'];

try {
   
  
    // set the PDO error mode to exception
    
 
    
    $sql = "INSERT INTO contuct_msg (name, email, message)
    VALUES ('$nameq', '$emailq', '$messageq')";
    
    // use exec() because no results are returned
    
    $db->exec($sql);
    echo "New record created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$db = null;
?>






<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>iStore - Contact</title>
			<link href="css/contact.css" rel="stylesheet">  
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
	
		<!-- bootstrap -->
		<link href="css/bootstrap.min.css" rel="stylesheet">  
	 <link href="headfooter/stlye.css" rel="stylesheet">
		<link href="libs/css/bootstrap-responsive.min.css" rel="stylesheet">
		<link href="libs/css/bootstrappage.css" rel="stylesheet"/>
		
		<!-- global styles -->
		<link href="libs/css/flexslider.css" rel="stylesheet"/>
		<link href="css/main.css" rel="stylesheet"/>
		<link href="css/picstlyle.css" rel="stylesheet"/>
        <!-- this landing part -->
      	<link href="css/header.css" rel="stylesheet">  
        <link rel="stylesheet" href="font-awesome-4.6.3/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/animate.min.css">
        
    
		<!-- scripts -->
		<script src="libs/js/jquery-1.7.2.min.js"></script>
		<script src="libs/js/bootstrap.min.js"></script>				
		<script src="libs/js/superfish.js"></script>	
		<script src="libs/js/jquery.scrolltotop.js"></script>
		
		    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


		<script>
$(function () {
    $("#header").load("headfooter/header.php");
     $("#footer").load("headfooter/footer.php");
  
 
});
</script>
		
</head>






<body>
    
   
    <div id="header"></div>
   
    
 <!--Body-->

		<div id="wrapper" class="">
				<div id="map">
			<section  class="google_map">
				<iframe width="100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/place/Tashkent,+Uzbekistan/@41.2825121,69.1389367,11z/data=!3m1!4b1!4m5!3m4!1s0x38ae8b0cc379e9c3:0xa5a9323b4aa5cb98!8m2!3d41.2994958!4d69.2400734"></iframe>
			</section>
			</div>			
			<section class="header_text sub">
			<img class="pageBanner" src="./images/banner/supportBanner.jpg" alt="" >
				<h1><span>Contact Us</span></h1>
			</section>
			<section class="main-content">				
				<div class="row">				
					<div class="span5">
						<div>
							<h3>INFORMATION</h3>
							<p><strong>Phone:</strong>&nbsp;(99)825-9999<br>
							<strong>Fax:</strong>&nbsp;+998 (99)825-9999<br>
							<strong>Email:</strong>&nbsp;<a href="#">bluesky@gmail.com</a>								
							</p>
							<br/>
							
						</div>
					</div>
					<!--<div id="contact" class="contact">-->
					<div class="span7">
						<p>You can find any inforamation about bour products. Fill free to contact.</p>
						<form method="post" action="./contact.php">
							<fieldset>
							<div class="span 6">	<div class="clearfix">
									<label for="name"><span>Name:</span></label>
									<div class="input">
										<input tabindex="1" size="25" id="name" name="name" type="text" value="" class="input-xlarge" placeholder="Name">
									</div>
								</div>
								
								<div class="clearfix">
									<label for="email"><span>Email:</span></label>
									<div class="input">
										<input tabindex="2" size="25" id="email" name="email" type="text" value="" class="input-xlarge" placeholder="Email Address">
									</div>
								</div>
							</div>
							<div class="span 6">
								<div class="clearfix">
									<label for="message"><span>Message:</span></label>
									<div class="input">
										<textarea tabindex="3" class="input-xlarge" id="message" name="message" rows="7" placeholder="Message"></textarea>
									</div>
								</div>
								
								<div class="actions">
									<button tabindex="3" type="submit" class="btn btn-inverse">Send message</button>
								</div>
							</div>	
							</fieldset>
						</form>
					</div>				
				</div>
			</section>			
		
<div id="footer"></div>
 
 
 
		</div>
	
    </body>
</html>