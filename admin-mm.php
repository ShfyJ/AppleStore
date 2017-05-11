


<?php
session_start();
$searchq=$_POST['search'];


if($searchq){
$connect=mysql_connect("localhost","blueskyu","IPproject1@3") or die(mysqli_error());
mysql_select_db("blueskyu_istore") or die("could not find db!");
    
  
   $query=mysql_query("SELECT * FROM contuct WHERE name LIKE '%$searchq%'  ") or die ("could not search!");
    $count= mysql_num_rows($query);
    if($count!=0){  
      while($row=mysql_fetch_assoc($query)){
            $name=$row['name'];
            $definition=$row['definition'];
             $link=$row['link'];
             $imagelink=$row['imagelink'];
             $cost=$row['cost'];
             
           $output .=' <div class="row"> <div class="col-sm-4 productbox1"><a href='.$link.' >' .$name.'</a><a href=' .$link.' ><img  alt="" src=' .$imagelink.' id="small-box1" style="margin-left:5px;"></a><strong style="margin-left:10px;">&#36;' .$cost.'</strong> </div>
       
    <div class="col-sm-8 productbox1">'.$definition.'</div>
       
    </div> ';}}
		else 			
        $output='There was no search results!';

    
};

//$conn->close();
?>




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
    <body>	
    <div id="header"></div>
	
  <!-- Fixed navbar -->
    
		
 
 <!--Body-->

		<div id="wrapper" class="container">
						
			<section class="header_text sub">
			<img class="pageBanner" src="images/pageBanner.png" alt="New products" >
				<h4><span>Manage Messages</span></h4>
			</section>
			<section class="main-content">				
				<div class="row">
					<div class="span9">					
						<h4 class="title"><span class="text"><strong>Messages</strong></span></h4>
						<?php 
					 require("login_reg/config.php");
                       $db=getDB();
					echo"	<table class='table table-striped'>
							<thead>
								<tr>
									<th>Select</th>		
									<th>From</th>
									<th>Date</th>
									<th>Message</th>
									
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
                                     echo "</tbody>";
							
						
							
								$uid=$_SESSION['uid'];
								$stmt = $db->prepare("SELECT name, email, message FROM contact_msg ");
							//	$stmt->bindParam("uid", $uid,PDO::PARAM_STR);
                         $stmt->execute();

                      // set the resulting array to associative
                     $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
                     foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) { 
                      echo $v;
                       }
						$db=null;
							
					
				//	echo "</table>"
						?>
					
					
					
						<!--<table class="table table-striped">-->
						<!--	<thead>-->
						<!--		<tr>-->
							
						<!--		</tr>-->
						<!--	</thead>-->
						<!--	<tbody>-->
						<!--		<tr>-->
								
									
						<!--			<td>user</td>-->
						<!--			<td>date</td>-->
						<!--			<td>message</td>-->
						<!--		    <td><button>Delete</button></td>-->
						<!--		</tr>			  -->
						<!--		<tr>-->
						<!--				<td>user</td>-->
						<!--			<td>date</td>-->
						<!--			<td>message</td>-->
						<!--		    <td><button>Delete</button></td>-->
						<!--		</tr>-->
						<!--		<tr>-->
						<!--			<td>user</td>-->
						<!--			<td>date</td>-->
						<!--			<td>message</td>-->
						<!--		    <td><button>Delete</button></td>-->
						<!--		</tr>-->
								<tr>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
												    <td><button>Delete</button></td>
								</tr>		  
							</tbody>
						</table>
						
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