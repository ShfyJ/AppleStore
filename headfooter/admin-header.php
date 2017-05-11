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
  <div class="container-fluid">
<div class="navbar-header">
      <button type="button" class="navbar-toggle" onclick="phone()" data-toggle="collapse" data-target="#myNavbar"  >
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="./index.php" id="logo"> <img src="images/logo/logo.png" class="site_logo" alt=""></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        
        	<li><a href="./admin-mp.php">Manage Products</a></li>															
			<li><a href="./admin-mm.php">Manage Messages</a></li>			
			<li><a href="./admin-mu.php">Manage Users</a>
			
      </ul>
      <ul class="nav navbar-nav navbar-right">
        	<li><a href="./search.php"><span class="glyphicon glyphicon-search"></span> Search </a></li>
        	<li><a href="./admin.php">Admin</a></li>
            <li><a href="./index.php"> Home</a></li> 
      </ul>
    </div>
  </div>
</nav>
  