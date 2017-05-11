 




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


//$productName=$_POST['productName'];
$quantityq=$_POST['quantity'];
//$unitPrice=$_POST['unitPrice'];
//$productImage=$_POST['productImage'];
 //session_start();
  if ($_SERVER["REQUEST_METHOD"] == "POST"){
if(!empty($_SESSION['uid'])) {
   
 try {
    
    $uid=$_SESSION['uid'];
    
 
        $total=$quantityq*649.00;
   
    $sql = $db->prepare("INSERT INTO cart (uid,productName, quantity,unitPrice,total,productImage)
    VALUES ('$uid','iPhone 7','$quantityq', '649.00' ,'$total' , 'images/products/iphone/3.jpg' )");
    
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
echo "<style>

.modal {
    display: none; 
    position: fixed; 
    z-index: 1; 
    padding-top: 100px; 
    left: 0;
    top: 0;
    width: 100%; 
    height: 100%; 
    overflow: auto; 
    background-color: rgb(0,0,0); 
    background-color: rgba(0,0,0,0.4); 
}


.modal-content {
    position: relative;
    background-color: #fefefe;
    margin: auto;
    padding: 0;
    border: 1px solid #888;
    width: 80%;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
    -webkit-animation-name: animatetop;
    -webkit-animation-duration: 0.4s;
    animation-name: animatetop;
    animation-duration: 0.4s
}


@-webkit-keyframes animatetop {
    from {top:-300px; opacity:0} 
    to {top:0; opacity:1}
}

@keyframes animatetop {
    from {top:-300px; opacity:0}
    to {top:0; opacity:1}
}


.close {
    color: white;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

.modal-header {
    padding: 2px 16px;
    background-color: #5cb85c;
    color: white;
}

.modal-body {padding: 2px 16px;}

.modal-footer {
    padding: 2px 16px;
    background-color: #5cb85c;
    color: white;
}
</style>
</head>
<body>

<h2>Animated Modal with Header and Footer</h2>


<button id='myBtn'>Open Modal</button>


<div id='myModal' class='modal'>

  
  <div class='modal-content'>
    <div class='modal-header'>
      <span class='close'>&times;</span>
      <h2>Modal Header</h2>
    </div>
    <div class='modal-body'>
      <p>You need to login first</p>
      
    </div>
    <div class='modal-footer'>
      <h3>Modal Footer</h3>
    </div>
  </div>

</div>

<script>

var modal = document.getElementById('myModal');


var btn = document.getElementById('myBtn');


var span = document.getElementsByClassName('close')[0];


btn.onclick = function() {
    modal.style.display = 'block';
}


span.onclick = function() {
    modal.style.display = 'none';
}


window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = 'none';
    }
}
</script> ";

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
								<a href="images/products/iphone/3.jpg" class="thumbnail" data-fancybox-group="group1" title="Description 1"><img alt="" src="images/products/iphone/3.jpg"></a>												
								<ul class="thumbnails small">								
									<li class="span1">
										<a href="images/products/iphone/3.jpg" class="thumbnail" data-fancybox-group="group1" title="Description 2"><img src="images/products/iphone/3.jpg" alt=""></a>
									</li>								
									<li class="span1">
										<a href="images/products/iphone/3.jpg" class="thumbnail" data-fancybox-group="group1" title="Description 3"><img src="images/products/iphone/3.jpg" alt=""></a>
									</li>													
									<li class="span1">
										<a href="images/products/iphone/3.jpg" class="thumbnail" data-fancybox-group="group1" title="Description 4"><img src="images/products/iphone/3.jpg" alt=""></a>
									</li>
									<li class="span1">
										<a href="images/products/iphone/3.jpg" class="thumbnail" data-fancybox-group="group1" title="Description 5"><img src="images/products/iphone/3.jpg" alt=""></a>
									</li>
								</ul>
							</div>
							<div class="span5">
								<address>
									<strong>Brand:</strong> <span>Apple</span><br>
									<strong>Product Code:</strong> <span>iPhone 7</span><br>
								
									<strong>Availability:</strong> <span>Availabile</span><br>								
								</address>									
								<h4><strong>Price: $649</strong></h4>
							</div>
							<div class="span5">
								<form class="form-inline" method="post" action="iPhone7-detail.php">
									
									<p>&nbsp;</p>
									<label>Qty:</label>
									<input name="quantity" id="quantity"  type="text" class="span1" placeholder="1" >
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
									<div class="tab-pane active" id="home">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem</div>
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