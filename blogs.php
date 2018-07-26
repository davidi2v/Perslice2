<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Perslice Blogspot</title>
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
					<li><a href="#">HOME</a></li>
					<li class="active"><a href="shop.php">SHOP</a></li>
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">CONTACT <span class="caret"></span></a>
						<ul class="dropdown-menu">
						<li><a href="#">RETAILER</a></li>
						<li><a href="#">DISTRIBUTOR</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="blogs.php">ARTICLES<span class="caret"></span></a>
						<ul class="dropdown-menu">
						<li><a href="blogs.php">BLOGS</a></li>
						<li><a href="recipes-all.php">RECIPES</a></li>
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
		<div id="blogs" class="container">
			<div class="row">
				<div class="col-xs-12 text-center">
					<h1>Blogs, Events and Delicious Recipes!</h1>
					<div id="recipeCarousel" class="carousel slide" data-ride="carousel">
					  <!-- Indicators -->
					  <!-- <ol class="carousel-indicators">
					    <li data-target="#recipeCarousel" data-slide-to="0" class="active"></li>
					    <li data-target="#recipeCarousel" data-slide-to="1"></li>
					  </ol> -->

					  <!-- Wrapper for slides -->
					  <div class="carousel-inner">
					    <div class="item active">
		    				<div class="row">
		    					<div class="col-md-12 text-center">
		    						<img src="img/blogpost1.jpg">
		    						<h3>Take It From a Pro</h3>
									<p>Interesting facts about birthdays in the 18th century and how it is different form today.</p>
									<a href="#" class="ctaBtn">Read More</a>
		    					</div>
		    				</div>
					    </div>
						<div class="item">
		    				<div class="row">
		    					<div class="col-md-12 text-center">
		    						<img src="img/blogpost1.jpg">
		    						<h3>Take It From a Pro</h3>
									<p>Interesting facts about birthdays in the 18th century and how it is different form today.</p>
									<a href="#" class="ctaBtn">Read More</a>
		    					</div>
		    				</div>
					    </div>
						<div class="item">
		    				<div class="row">
		    					<div class="col-md-12 text-center">
		    						<img src="img/blogpost1.jpg">
		    						<h3>Take It From a Pro</h3>
									<p>Interesting facts about birthdays in the 18th century and how it is different form today.</p>
									<a href="#" class="ctaBtn">Read More</a>
		    					</div>
		    				</div>
					    </div>
					  </div>
					  <!-- Left and right controls -->
					  <a class="left carousel-control" href="#recipeCarousel" data-slide="prev">
					    <span class="glyphicon glyphicon-chevron-left"></span>
					    <span class="sr-only">Previous</span>
					  </a>
					  <a class="right carousel-control" href="#recipeCarousel" data-slide="next">
					    <span class="glyphicon glyphicon-chevron-right"></span>
					    <span class="sr-only">Next</span>
					  </a>
					</div>
				</div>
			</div>
		</div>
	</body>
	<?php include 'footer.php'?>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
	<script src="js/slick.js"></script>
</html>