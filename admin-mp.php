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
    $("#header").load("headfooter/admin-header.php");
     $("#footer").load("headfooter/admin-footer.php");
  
 
});




</script>
	</head>
    <body>		
    

   <?php
        
session_start();




$connect=mysql_connect("localhost","blueskyu","IPproject1@3") or die(mysqli_error());
mysql_select_db("blueskyu_istore") or die("could not find db!");
    
  
                   
                       $query=mysql_query("SELECT * FROM products") or die ("could not search!");
                       $count= mysql_num_rows($query);
                       if($count!=0){ 
                           
                       while($row=mysql_fetch_assoc($query)){
                       $name=$row['name'];
                       $definition=$row['definition'];
                       $link=$row['link'];
                       $imagelink=$row['imagelink'];
                       $cost=$row['cost'];
                       $number=$row['number'];
                       
                      
       
           $output .='<tr><td><a href=' .$link.' >
           <img  alt="" src=' .$imagelink.' id="small-box1" style="margin-left:5px;"></a></td>
           <td> <a href='.$link.' >'.$name.'</a></td>
           <td><input type="text" value='.$number.' class="input-mini"></td>
           <td> <input type="text" value='.$cost.' class="input-mini"></td>
            <td><input type="text" value='.$link.' class="input-mini"></td>
           
           <td><input type="submit" value="delete" ></td><td><input type="submit" value="update" ></td>
       </tr>	</div>
       
   
    </div> ';}}
    
    //$db=null;
    ?>
    
    
    
    
    
    
    
 <div id="header"></div>
  <!-- Fixed navbar -->
    
		
 
 <!--Body-->

		<div id="wrapper" class="container">
						
			<section class="header_text sub">
			<img class="pageBanner" src="images/pageBanner.png" alt="New products" >
				<h4><span>Manage Products</span></h4>
			</section>
			<section class="main-content">				
				<div class="row">
					<div class="span9">					
						<h4 class="title"><span class="text"><strong>Products</strong> </span></h4>
						<table class="table table-striped">
							<thead>
								<tr>
									
									<th>Image</th>
									<th>Product Name</th>
									<th>Quantity</th>
									<th>Price &#36;</th>
								
                                     <th>link</th>
                
									
								</tr>
								<?php  print("$output"); ?>
	<tr>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td><input type="submit" value="ADD" ></td>
								</tr>		  
							</thead>
						
						</table>
						
						
						
						

						
						
					
						
											
					</div>
					
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