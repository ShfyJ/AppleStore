

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
	
	 <div id="header"></div>
	 
  <
		
 
 <!--Body-->

		<div id="wrapper" class="container">
						
			<section class="header_text sub">
			<img class="pageBanner" src="images/pageBanner.png" alt="New products" >
				<h4><span>Shopping Cart</span></h4>
			</section>
			<section class="main-content">				
				<div class="row">
					<div class="span9">					
						<h4 class="title"><span class="text"><strong>Your</strong> Cart</span></h4>
					<?php 
					 require("login_reg/config.php");
                       $db=getDB();
					echo"	<table class='table table-striped'>
							<thead>
								<tr>
									<th>Remove</th>
									<th>Image</th>
									<th>Product Name</th>
									<th>Quantity</th>
									<th>Unit Price($)</th>
									<th>Total($)</th>
								</tr>
							</thead>
							<tbody>";
								class TableRows extends RecursiveIteratorIterator { 
                               function __construct($it) { 
                                         parent::__construct($it, self::LEAVES_ONLY); 
                                             }

                               function current() {
                                 return "<td >" . parent::current(). "</td>";
                                            }

                              function beginChildren() { 
                                echo "<tr><td><input type='checkbox' value='option1' ></td>"; 
                                          } 

                            function endChildren() { 
                                 echo "</tr>" . "\n";
                                         } 
                                     } 
                                    
							
							/*	<tr>
									<td><input type="checkbox" value="option1" ></td>
									<td><a href="product_detail.php"><img alt="" src="images/products/mac/2-15.jpg" id="small-box"></a></td>
									<td>MacBook Pro 15</td>
									<td><input type="text" placeholder="1" class="input-mini"></td>
									<td>$2,350.00</td>
									<td>$2,350.00</td>
								</tr>			  
								<tr>
									<td><input type="checkbox" value="option1"></td>
									<td><a href="product_detail.php"><img alt="" src=".jpg"></a></td>
									<td>Watch </td>
									<td><input type="text" placeholder="4" class="input-mini"></td>
									<td>$500.00</td>
									<td>$2,000.00</td>
								</tr>
								<tr>
									<td><input type="checkbox" value="option1"></td>
									<td><a href="product_detail.php"><img alt="" src=".jpg"></a></td>
									<td>MacBook air </td>
									<td><input type="text" placeholder="1" class="input-mini"></td>
									<td>$1,210.00</td>
									<td>$1,123.00</td>
								</tr>
								<tr>
									<!--<td>&nbsp;</td>-->
									<!--<td>&nbsp;</td>-->
									<!--<td>&nbsp;</td>-->
									<!--<td>&nbsp;</td>-->
									<!--<td>&nbsp;</td>-->
									<td><strong>$3,600.00</strong></td>
								</tr>	*/
								$uid=$_SESSION['uid'];
								$stmt = $db->prepare("SELECT productImage, productName, quantity, unitPrice, total FROM cart WHERE uid=:uid");
								$stmt->bindParam("uid", $uid,PDO::PARAM_STR);
                         $stmt->execute();

                      // set the resulting array to associative
                     $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
                     foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) { 
                      echo $v;
                       }
						$db=null;
							
							echo "<tr>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td><button>Delete</button></td>
									</tr>";
					 echo "</tbody>";
					echo "</table>"
						?>
				</div>
			</section>			
		
 <!---- Footer ---->
  <hr/>
 <div id="footer-bar" >
     
     <div class="container">
        	 <div id="footer"></div>
     </div>
     
 </div>
 	
 
		</div>
		<script src="libs/js/common.js"></script>
		<script>
			$(document).ready(function() {
				$('#checkout').click(function (e) {
					document.location.href = "checkout.php";
				})
			});
		</script>		
    </body>
</html>