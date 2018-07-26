<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Perslice Homepage</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
		<link rel="stylesheet" href="css/style.css">
	</head>
	<?php include 'banner.php'?>
	<nav class="navbar">
		<div class="container">
			<a id="number" href="#">CALL NOW : (888) 567-1901</a>
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">
					<img src="img/Logo_Perslice.png" alt="perslice logo">
				</a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav">
					<li class="active"><a href="#">HOME</a></li>
					<li><a href="#">SHOP</a></li>
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">CONTACT <span class="caret"></span></a>
						<ul class="dropdown-menu">
						<li><a href="#">RETAILER</a></li>
						<li><a href="#">DISTRIBUTOR</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">BLOG <span class="caret"></span></a>
						<ul class="dropdown-menu">
						<li><a href="#">RECIPES</a></li>
						<li><a href="#">SPECIAL EVENTS</a></li>
						</ul>
					</li>
					<li><a href="#">HOW TO USE</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
					<li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<body>
		<div id="imgHeader">
			<img src="img/shopHeader.jpg" alt="blue cupcake">
			<h1 id="imgText">Free Shipping<br> on All Orders</h1>
		</div>
		<div id="shop">
			<div class="container">
				<div class="row text-center">
					<h2>SHOP!</h2>
				</div>
				<div class="row">
					<div id="mainProduct" class="col-xs-12">
						<img src="img/Perslice.jpg" alt="perslice cake slicer and server">
						<h2 class="productTitle">Perslice<br> Cake Slicer and Server</h2>
						<p id="productPrice">$24.99</p>
						<a class="ctaBtn" href="#">Quick View</a>
					</div>
					<!-- <div class="col-xs-6">
						<img src="img/cakeStand.jpg" alt="perslice cake stand">
						<h2 class="productTitle">Perslice<br> Cake Stand</h2>
						<p id="productPrice">$24.99</p>
						<a class="ctaBtn" href="#">Quick View</a>
					</div> -->
				</div>
				<div class="row">

					<div id="features" class="container">
						<div class="text-left">
							<h2>Featured Products</h2>
						</div>
							<div class="productSlider">
							  <div class="sliderItem">
							  	<a href="#">
							  		<img src="img/cakeStand.jpg" alt="">
									<h1 class="featuredTitle">Perslice <br>Cake Stand</h1>
									<p id="productPrice">$24.99</p>
							  	</a>
							  </div>
							  <div class="sliderItem">
							  	<a href="#">
							  		<img src="img/cakePan.jpg" alt="">
									<h1 class="featuredTitle">Perslice <br>Cake Pan</h1>
									<p id="productPrice">$14.99</p>
							  	</a>
							  </div>
							  <div class="sliderItem">
							  	<a href="#">
							  		<img src="img/measuringSpoons.jpg" alt="">
									<h1 class="featuredTitle">Perslice <br>Measuring Spoons</h1>
									<p id="productPrice">$7.99</p>
							  	</a>
							  </div>
							</div>
					</div>
				</div>
			</div>
		</div>
	</body>
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-xs-6">
					<h3>Our Site</h3>
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#">Shop</a></li>
						<li><a href="#">Blog</a></li>
						<li><a href="#">How To Use</a></li>
						<li><a href="#">F.A.Q.</a></li>
						<li><a href="#">Terms of Service</a></li>
						<li><a href="#">Privacy Policy</a></li>
					</ul>
				</div>
				<div class="col-xs-6">
					<h3>Let's Connect</h3>
					<ul>
						<li><a href="#">Contact Us</a></li>
						<li><a href="#">1 (888) 567-1901</a></li>
						<li><a href="#">info@persliceusa.com</a></li>
						<li><a href="#">Press</a></li>
						<li><a href="#">Events</a></li>
					</ul>
					<ul id="socialFooter">
						<li><a href="#"><img src="img/fbIcon_blk.png"></a></li>
						<li><a href="#"><img src="img/igIcon.png"></a></li>
						<li><a href="#"><img src="img/twitterIcon.png"></a></li>
						<li><a href="#"><img src="img/youtubeIcon.png"></a></li>
					</ul>
				</div>
				<div id="newsletterForm" class="col-xs-12 text-center">
					<p>Subscribe to our newsletter</p>
					<form>
					  <div class="form-group">
						<label for="email" class="sr-only">Email address</label>
						<input type="email" class="form-control" id="email" aria-describedby="email" placeholder="Email Address">
						<!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
					  </div>
					  <button type="submit" class="btn btn-primary">Subscribe Now</button>
					</form>
				</div>
			</div>
		</div>
		<div id="Copyright">&copy; <?php echo date("Y"); ?> by Perslice</div>
	</footer>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
	<script src="js/slick.js"></script>
</html>