<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>iStore</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
	
		<!-- bootstrap -->
		<link href="css/bootstrap.min.css" rel="stylesheet">  
	
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
            
<?php
    
 include("./login_reg/config.php");
$db= getDB(); 



$quantityq=$_POST['quantity'];

  if ($_SERVER["REQUEST_METHOD"] == "POST"){
if(!empty($_SESSION['uid'])) {
   
 try {
    
    $uid=$_SESSION['uid'];
    
 
        $total=$quantityq*499;
   
    $sql = $db->prepare("INSERT INTO cart (uid,productName, quantity,unitPrice,total,productImage)
    VALUES ('$uid','iPhone 6','$quantityq', '499.00' ,'$total' , 'images/products/iphone/2.jpg' )");
    
   // use exec() because no results are returned
    
    $sql->execute();
    header("Location:cart.php");

    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
    
    
}else{
// alert("You need to login first");
header('Location:./login_reg/login.php');
}
    
        
}


$db = null;
?>

    
    
    
    
    
    
    
    
    
    
    
    
		 <div id="header"></div>
  
 <!--Body-->

		<div id="wrapper" class="container">
		
			<section class="header_text sub">
			<img class="pageBanner" src="images/banner/iphoneBanner.jpg" alt="New products" >
				<h4><span>Product Detail</span></h4>
			</section>
			<section class="main-content">				
				<div class="row">						
					<div class="span9">
						<div class="row">
							<div class="span4">
								<a href="images/products/iphone/2.jpg" class="thumbnail" data-fancybox-group="group1" title="Description 1"><img alt="" src="images/products/iphone/2.jpg"></a>												
								<ul class="thumbnails small">								
									<li class="span1">
										<a href="images/products/iphone/2.jpg" class="thumbnail" data-fancybox-group="group1" title="Description 2"><img src="iimages/products/iphone/2.jpg" alt=""></a>
									</li>								
									<li class="span1">
										<a href="images/products/iphone/2.jpg" class="thumbnail" data-fancybox-group="group1" title="Description 3"><img src="images/products/iphone/2.jpg" alt=""></a>
									</li>													
									<li class="span1">
										<a href="images/products/iphone/2.jpg" class="thumbnail" data-fancybox-group="group1" title="Description 4"><img src="images/products/iphone/2.jpg" alt=""></a>
									</li>
									<li class="span1">
										<a href="images/products/iphone/2.jpg" class="thumbnail" data-fancybox-group="group1" title="Description 5"><img src="images/products/iphone/2.jpg" alt=""></a>
									</li>
								</ul>
							</div>
							<div class="span5">
								<address>
									<strong>Brand:</strong> <span>Apple</span><br>
									<strong>Product Code:</strong> <span>iPhone 6</span><br>
									
									<strong>Availability:</strong> <span>Availabile</span><br>								
								</address>									
								<h4><strong>Price: $499</strong></h4>
							</div>
							<div class="span5">
								<form class="form-inline"method="post" action="iPhone6-detail.php">
									
									<p>&nbsp;</p>
									<label>Qty:</label>
									<input type="text" name="quantity" id="quantity"  class="span1" placeholder="1">
									<button class="btn btn-inverse" type="submit">Add to cart</button>
								</form>
							</div>							
						</div>
						<div class="row">
							<div class="span9">
								<ul class="nav nav-tabs" id="myTab">
									<li class="active"><a href="#home">Description</a></li>
									
								</ul>							 
								<div class="tab-content">
									<div class="tab-pane active" id="home"> Offer only available on presentation of 
									a valid, government-issued photo ID (local law may require saving this information). Sales tax 
									on the full value of new iPhone and any applicable fees may be due at time of purchase. Value of your
									current device may be applied toward purchase of a new Apple iPhone via an available carrier financing plan.
									Offer may not be available in all stores and not all devices are eligible for credit. To see if your device is eligible, please visit 
									Apple’s approved partner. Some stores may have additional requirements. You will be required to 
									agree to the full terms and conditions available at the Apple Store. Online and in-store values may vary.</div>
									<div class="tab-pane" id="profile">
										<table class="table table-striped shop_attributes">	
											<tbody>
												<tr class="">
													<th>Size</th>
													<td>Large, Medium, Small, X-Large</td>
												</tr>		
												<tr class="alt">
													<th>Colour</th>
													<td>Orange, Yellow</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>							
							</div>						
							
						</div>
					</div>
					
				</div>
			</section>			
			
  <div id="footer"></div>
 	
 
		</div>
		<script src="libs/js/common.js"></script>
		<script>
			$(function () {
				$('#myTab a:first').tab('show');
				$('#myTab a').click(function (e) {
					e.preventDefault();
					$(this).tab('show');
				})
			})
			$(document).ready(function() {
				$('.thumbnail').fancybox({
					openEffect  : 'none',
					closeEffect : 'none'
				});
				
				$('#myCarousel-2').carousel({
                    interval: 2500
                });								
			});
		</script>
    </body>
</html>