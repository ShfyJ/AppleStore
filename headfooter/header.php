



<!--jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
     <!--Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/wow.min.js"></script>
    <script>
    new WOW().init();
   </script>
    <script src="js/bootstrap.min.js"></script>
  
		<script src="libs/js/common.js"></script>
		<script src="libs/js/jquery.flexslider-min.js"></script>
		<script type="text/javascript">
			$(function() {
				$(document).ready(function() {
					$('.flexslider').flexslider({
						animation: "fade",
						slideshowSpeed: 4000,
						animationSpeed: 600,
						controlNav: false,
						directionNav: true,
						controlsContainer: ".flex-container" // the container that holds the flexslider
					});
				});
			});
		</script>
		
 <nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
<div id="header-2" class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar"  >
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="./index.php" id="logo"> <img src="images/logo/logo.png" class="site_logo" alt=""></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="menu nav navbar-nav">
        
        	<li><a href="./iphone.php">iPhone</a></li>															
			<li><a href="./mac.php">Mac</a></li>			
			<li><a href="./ipad.php">iPad</a>
			<li><a href="./watch.php">Watch</a>
      </ul>
      
     
      <ul class="nav navbar-nav navbar-right">
         <li><a href="./search.php"><span class="glyphicon glyphicon-search"></span> Search </a></li>
        <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span>
        <span class="caret"></span></a>
        
           
         <?php
         if(!empty($_SESSION['uid'])){
               echo "<ul class='dropdown-menu'><li><a href='cart.php'><span class='glyphicon glyphicon-user'></span>Profile </a></li>
             <li><a  href='./login_reg/logout.php'><span class='glyphicon glyphicon-log-in' ></span> Logout</a></li> </ul>";
         } 
         else {
            
            
             echo"<ul class='dropdown-menu'><li> <a href='./login_reg/register.php'><span class='glyphicon glyphicon-user'></span> Sign Up </a></li>
                   <li><a href='./login_reg/login.php'><span class='glyphicon glyphicon-log-in' ></span> Login </a></li> </ul>";
         }
         ?>
            
       
      </li>
        	
            <li><a href="./cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart </a></li>
            <li><a href="./admin_login.php"> Admin</a></li> 
      </ul>
    </div>
  </div>
</nav>
  