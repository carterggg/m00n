<?php
	
	// * IMPORTANT * Set your email information here
	define('DESTINATION_EMAIL','mzerozeron@gmail.com');
	define('MESSAGE_SUBJECT','m00n Clothing Subject');
	define('REPLY_TO', 'mzerozeron@gmail.com');
	define('FROM_ADDRESS', 'mzerozeron@gmail.com');
	define('REDIRECT_URL', 'index.php');
	
	require_once('validation.php');

?>

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
	<div class="row">
		<div class="col-sm-1 hidden-xs"></div>
			<div class="col-sm-2 hidden-xs"></div>
				<div class="col-sm-6 col-xs-12">
					<br class="hidden-sm hidden-md hidden-lg">
					<h1 class="product-h1">CONTACT</h1>
					<br class="hidden-xs">
				</div>
			<div class="col-sm-2 hidden-xs"></div>
		<div class="col-sm-1 hidden-xs"></div>
	</div>
	
	<!-- Email row 
	
	<div class="row">
		<div class="col-sm-1 hidden-xs"></div>
		<div class="col-sm-3 hidden-xs"></div>
			<div class="col-xs-12 col-sm-4">
			<h1 class="email-style">mZEROZEROn@gmail.com</h1>
			</div>
		<div class="col-sm-3 hidden-xs"></div>
		<div class="col-sm-1 hidden-xs"></div>
	</div>
	-->
	
<!--Contact Info -->
	<div class="row">
		<div class="hidden-xs col-sm-1"></div>
			<div class="hidden-xs col-sm-1"></div>
				<div class="col-xs-12 col-sm-8">
					
					  <br>
						<!--- contact form -->
						<?php include('inc/form.php'); ?>
				
				</div>
			<div class="hidden-xs col-sm-1"></div>
		<div class="hidden-xs col-sm-1"></div>
	</div>
	<br>
	
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
	   				<li class="footer-li"><a href="index.html">m00n CLOTHING © 2015</a></li>
	   				<li class="footer-li"><a href="">FACEBOOK</a></li>
	   				<li class="footer-li"><a href="http://instagram.com/m00nclothing">INSTAGRAM</a></li>
	   				<li class="footer-li"><a href="about.html">ABOUT</a></li>
	   				<li class="footer-li"><a href="contact.html">CONTACT</a></li>
	   				<li class="footer-li"><a href="http://m00n.bigcartel.com/" target="_blank">STORE</a></li>
	   			</ul>
		   </nav>
		</div>
	 <div class="hidden-xs col-sm-1"></div>		
<!-- Mobile Footer Nav -->
		
		<div class="col-xs-12 hidden-sm hidden-md hidden-lg center-nav">
			<p class="mobile-footer-li"><a href="index.html">m00n © 2015</a></p>
   		<br>
	   		<p class="bottom-mobile-nav"><a href="about.html">ABOUT</a></p>
	   		<P class="bottom-mobile-nav"><a href="contact.html">CONTACT</a></P>
	   		<P class="bottom-mobile-nav"><a href="http://m00n.bigcartel.com/">STORE</a></P>
	   	<br><br>
	   			<a href="#"><img src="images/fb2.png"  onmouseover="this.src='images/fb3.png'" onmouseout="this.src='images/fb2.png'"  alt="facebook m00n" width="13%"></a>
				<a href="http://instagram.com/m00nclothing"><img src="images/ig.jpg" onmouseover="this.src='images/ig2.png'" onmouseout="this.src='images/ig.jpg'"  alt="instagram m00n" width="13%"></a>
	   	<br><br>
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
