<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>m00n</title>
<link rel="stylesheet" href="styles/css/bootstrap.min.css">
<link rel="stylesheet" href="styles/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="styles/css/main.css">
<link rel="stylesheet" href="stylesheet.css" type="text/css" charset="utf-8" />

</head>

<body>
<!-- Website content -->

<div class="container-fluid">

<!-- First row -->
	<div class="row">
		<div class="col-xs-12">
			<br class="hidden-xs"><br class="hidden-xs"><br class="hidden-xs hidden-sm hidden-md"><br class="hidden-xs hidden-sm hidden-md"><br>
		</div> <!-- END OF col-->	
	</div> <!-- END OF row -->	
	
<!-- Second row -->

<!-- Desktop Nav Bar -->	
	<div class="row">
	  
		<div class="hidden-xs col-sm-12 center-nav">
			<nav class="main-nav-shift">
				<ul>
				 <?php include('inc/mainnav.inc.php'); ?>
				</ul>
			</nav>	
		</div>
		
	</div>
   <br class="hidden-xs"><br class="hidden-xs"><br class="hidden-xs"><br class="hidden-xs hidden-sm hidden-md"><br class="hidden-xs hidden-sm hidden-md"><br class="hidden-xs hidden-sm hidden-md">
   
   <!-- Mobile Nav Bar -->
   <div class="row">
   		<div class="col-xs-12 hidden-sm hidden-md hidden-lg">
  	  			<img src="images/menu-icon2.png" onmouseover="this.src='images/menu-icon.png'" onmouseout="this.src='images/menu-icon2.png'" class="toggle" width="55px" align="right">
  	  	
   			<nav class="mobile-nav">
   				<ul> <br><br><br>
   					<?php include('inc/mobilenav.inc.php'); ?>
   				</ul>
   			</nav>
   			<br><br>
   			
   						<a href="index.html" alt="m00n clothing"><img src="images/logo/logo.png" alt="m00n" class="img-responsive"></a>
   							<br class="hidden-sm hidden-md hidden-lg">
   		</div>
   </div>
   
  <!-- Top layout piece -->
	
	<div class="row hidden-xs">
		<div class="col-xs-1"></div>
			<div class="col-xs-10">
				<!--
					<img src="images/highgrade-desktop-bottom.png" alt="m00n high grade hand pressed clothing" class="img-responsive">	
					-->
				<h1 class="top-layout-style">HIGHGRADE HANDPRESSED CLOTHING</h1>
					<br>
			</div>
		<div class="col-xs-1"></div>
	</div> 
   
 <!-- Third row (Mobile) -->
 	<div class="row">
   
   		<div class="col-xs-12 hidden-sm hidden-md hidden-lg">
   				
   			<img src="images/highgradetitle.png" alt="m00n,high grade hand pressed clothing" width="150%" class="img-responsive">
   				<br>
   		</div>
   	
   </div>
   
<!-- Fourth row -->		
	<?php include('content/product/highrisingltd.inc.php'); ?>

<!-- HR Row -->
	
	<div class="row">
  		<div class=" hidden-xs col-sm-1"></div>
			<div class=" col-xs-12 col-sm-10">
		  <br class="hidden-sm hidden-md hidden-lg">
			  <img src="images/highgradefooter.png" alt="m00n high grade hand pressed clothing" class="img-responsive hidden-sm hidden-md hidden-lg">	
			  <hr class="hidden-sm hidden-md hidden-lg">
				
			</div>
  		<div class="hidden-xs col-sm-1"></div>
	
	</div>
	
<!-- Footer layout piece -->
	
	<div class="row hidden-xs">
		<div class="col-xs-1"></div>
			<div class="col-xs-10">
				<br>
					<img src="images/highgrade-desktop-middle.png" alt="m00n high grade hand pressed clothing" class="img-responsive">
						<hr>
			</div>
		<div class="col-xs-1"></div>
	</div>

<!-- Footer Nav Row -->

	<div class="row">
	  <div class="hidden-xs col-sm-1"></div>
	   <div class="hidden-xs col-sm-10">
   			<nav class="footer-center">
	   			<ul>
	   				<?php include('inc/footernav.inc.php'); ?>
	   			</ul>
		   </nav>
		</div>
	 <div class="hidden-xs col-sm-1"></div>		
<!-- Mobile Footer Nav -->
		
		<div class="col-xs-12 hidden-sm hidden-md hidden-lg center-nav">
			<?php include('inc/mobilefooternav.inc.php'); ?>
		</div>
						
	  <div class="hidden-xs col-sm-1"></div>
	</div>

</div><!-- END OF Container-Fluid -->
<!-- END OF Website content -->

<!-- jQuery -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> 
<script src="js/main.js"></script>
<script src="js/bootstrap.min.js"></script>
    
    
</body>
</html>
