<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Perslice Homepage</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
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
				<a class="navbar-brand" href="/">
					<img src="img/Logo_Perslice.png" alt="perslice logo">
				</a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav">
					<li><a href="/">HOME</a></li>
					<li class="active"><a href="shop.php">SHOP</a></li>
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="contact.php">CONTACT <span class="caret"></span></a>
						<ul class="dropdown-menu">
						<li><a href="contact.php#contactForm">CONTACT US</a></li>
						<li><a href="contact.php#retailForm">RETAILER</a></li>
						<li><a href="contact.php#distributionForm">DISTRIBUTOR</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="blogs.php">ARTICLES<span class="caret"></span></a>
						<ul class="dropdown-menu">
						<li><a href="blogs.php">BLOGS</a></li>
						<li><a href="recipes-all.php">RECIPES</a></li>
						<li><a href="all=events.php">SPECIAL EVENTS</a></li>
						</ul>
					</li>
					<li><a href="how-to-use.php">HOW TO USE</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
					<li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<body>
		<section id="landing">
			<div class="container-fluid">
				<div class="row">
					<div id="landingImg" class="col-md-8">
						<img src="img/slicedCake.jpg" alt="sliced cake">
					</div>
					<div id="landingCta" class="col-md-4">
						<h1>PERSLICE</h1>
						<p>Spend less time slicing<br> and more time celebrating</p>
						<a class="ctaBtn" href="#">Shop Now</a>
					</div>
				</div>
			</div>
		</section>
		<section id="shopHm">
			<div class="container">
				<div class="row text-center">
					<div class="col-md-12">
						<h2>The Perslice Gives A Perfect Slice Every Time</h2>
						<p>Get your Perslice today</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<img src="img/Perslice.jpg" alt="perslice cake slicer and server">
						<h2 class="productTitle">Perslice<br> Cake Slicer and Server</h2>
						<p id="productPrice">$24.99</p>
						<a class="ctaBtn" href="#">Quick View</a>
					</div>
					<div class="col-md-6">
						<span id="saleTag">Sale</span>
						<img src="img/cakeStand.jpg" alt="perslice cake slicer and server">
						<h2 class="productTitle">Perslice<br> Cake Stand</h2>
						<p id="productPrice">$24.99</p>
						<a class="ctaBtn" href="#">Quick View</a>
					</div>
				</div>
			</div>
		</section>
		<section id="specials">
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
			  <!-- Indicators -->
			  <!-- <ol class="carousel-indicators">
			    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			    <li data-target="#myCarousel" data-slide-to="1"></li>
			  </ol> -->

			  <!-- Wrapper for slides -->
			  <div class="carousel-inner">
			    <div class="item active">
			      <img src="img/cakeHeart.jpg" alt="cake with heart">
				  <h3>Order 2<br> <span>save 20%</span></h3>
				  <p>For a limited time we are offering an additional 20% off when you purchase one for you and one for a friend or family member</p>
				  <a class="ctaBtn" href="#">Shop Now</a>
			    </div>
			    <div class="item">
			      <img src="img/babyBitesCake.jpg" alt="baby bites cake">
				  <h3><span>Enter to win</span> <br>$500</h3>
				  <p>All you have to do is take a photo and send it to us and tell us about your Perslice experience</p>
				  <a class="ctaBtn" href="#">Learn More</a>
			    </div>
			  </div>
			  <!-- Left and right controls -->
			  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
			    <span class="glyphicon glyphicon-chevron-left"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="right carousel-control" href="#myCarousel" data-slide="next">
			    <span class="glyphicon glyphicon-chevron-right"></span>
			    <span class="sr-only">Next</span>
			  </a>
			</div>
		</section>
		<section id="newsletter">
			<div id="cakepopBox">
				<h3>Great Offers &amp; Free Recipes</h3>
				<a class="ctaBtn" href="#">Sign Up For Our Newsletter</a>
			</div>
		</section>
		<section id="insta">
			<div class="container">
				<div class="row text-center">
					<h2>Instagram @perslice</h2>
					<p>Tag us @perslice to have your photo added to our feed!</p>
				</div>
				<div class="row">
					<div class="col-xs-6">
						<a href="#"><img src="img/igPost1.jpg" alt="Instagram Post 1"></a>
					</div>
					<div class="col-xs-6">
						<a href="#"><img src="img/igPost2.jpg" alt="Instagram Post 2"></a>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-6">
						<a href="#"><img src="img/igPost3.jpg" alt="Instagram Post 3"></a>
					</div>
					<div class="col-xs-6">
						<a href="#"><img src="img/igPost4.jpg" alt="Instagram Post 4"></a>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-6">
						<a href="#"><img src="img/igPost5.jpg" alt="Instagram Post 5"></a>
					</div>
					<div class="col-xs-6">
						<a href="#"><img src="img/igPost6.jpg" alt="Instagram Post 6"></a>
					</div>
				</div>
			</div>
		</section>
		<section id="recipes">
			<div class="text-center">
				<h2>Delicious Recipes</h2>
			</div>
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
    					<div class="col-md-8 text-center">
    						<img src="img/blueBerryVelvetCake.jpg">
    						<h3>Blueberry Velvet Cake</h3>
    					</div>
    					<div class="col-md-4">
    						<div id="recipeDetail">
								<div id="timeDiv">
									<div class="time"><img src="img/clockIcon.png"><p>Prep Time: <br> 20 mins</p></div>
									<div class="time"><img src="img/clockIcon.png"><p>Cook Time: <br> 30 mins</p></div>
									<div class="time"><img src="img/clockIcon.png"><p>Total Time: <br> 50 mins</p></div>
								</div>
	    						<a class="ctaBtn" href="#">View Recipe</a>
    						</div>
    					</div>
    				</div>
			    </div>
			    <div class="item">
    				<div class="row">
    					<div class="col-md-8 text-center">
    						<img src="img/blueBerryVelvetCake.jpg">
    						<h3>Blueberry Velvet Cake</h3>
    					</div>
    					<div class="col-md-4">
							<div id="recipeDetail">
								<div id="timeDiv">
									<div class="time"><img src="img/clockIcon.png"><p>Prep Time: <br> 20 mins</p></div>
									<div class="time"><img src="img/clockIcon.png"><p>Cook Time: <br> 30 mins</p></div>
									<div class="time"><img src="img/clockIcon.png"><p>Total Time: <br> 50 mins</p></div>
								</div>
								<a class="ctaBtn" href="#">View Recipe</a>
    						</div>
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
		</section>
		<section id="blogHm">
			<div class="container">
				<div class="row text-center">
					<h2>Perlice Blog</h2>
					<p>For fun and sweet reads</p>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="blogBox">
							<div class="blogImg">
								<img src="img/blogpost1.jpg">
							</div>
							<div class="blogContent">
								<h4>Take It From a Pro</h4>
								<p>Interesting facts about birthdays in the 18th century.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="blogBox">
							<div class="blogImg">
								<img src="img/blogpost2.jpg">
							</div>
							<div class="blogContent">
								<h4>Planning a Party that...</h4>
								<p>First thing to remember is to plan ahead of time.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="shopPlatforms">
			<div class="container text-center">
				<h2>You can also shop at...</h2>
				<div id="socialBox">
					<div class="icon"><a href="#"><img src="img/amazonIcon.png"></a></div>
					<div class="icon"><a href="#"><img src="img/fbIcon.png"></a></div>
				</div>
				<p>Interested in becoming a retailer? <a href="#">Click here</a> and you'll be a step closer to having Perslice in your stores!</p>
			</div>
		</section>
	</body>
	<?php include 'footer.php'?>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="js/script.js"></script>
</html>