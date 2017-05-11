


<?php
session_start();
$searchq=$_POST['search'];


if($searchq){
$connect=mysql_connect("localhost","blueskyu","IPproject1@3") or die(mysqli_error());
mysql_select_db("blueskyu_istore") or die("could not find db!");
    
  
   $query=mysql_query("SELECT * FROM products WHERE name LIKE '%$searchq%'  ") or die ("could not search!");
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
<html >
    <meta charset="utf-8">
<head>
  <title>search</title>
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
   
    
<div id="" class"container">

 <form action="./search.php" method="POST" >
              <input type="text" name="search" class="search-box1" value="" placeholder="search" />
            </form>


<?php  print("$output");
?>
</div>
</body>
</html>