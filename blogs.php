<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Perslice Blogs</title>
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
		<div class="container" id="blogs">
			<div class="row">
				<div class="col-xs-12 text-left">
					<div class="posts">
						<h3>Take It From a Pro</h3>
						<p>Published : July 17, 2018</p>
						<a href="blogpost.php"><img src="img/blogpost1.jpg"></a>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
						<a href="blogpost.php" class="ctaBtn">Read More</a>
					</div>
					<div class="posts">
						<h3>Blogpost 2</h3>
						<p>Published : July 17, 2018</p>
						<a href="blogpost.php"><img src="img/blogpost1.jpg"></a>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
						<a href="blogpost.php" class="ctaBtn">Read More</a>
					</div>
					<div class="posts">
						<h3>Blogpost 3</h3>
						<p>Published : July 17, 2018</p>
						<a href="blogpost.php"><img src="img/blogpost1.jpg"></a>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
						<a href="blogpost.php" class="ctaBtn">Read More</a>
					</div>
				</div>
				<div class="col-xs-12">
					<div class="aside text-center">
						<h2>Get your own Perslice Cake Slicer and Server!</h2>
						<img src="img/Perslice.jpg" alt="Perslice cake slicer and server">
						<h3>Perslice<br>Cake Slicer and Server</h3>
						<p class="productPrice">$24.99</p>
						<a href="product.php" class="ctaBtn">Buy Now</a>
					</div>
					<section id="blogHm">
						<div class="container">
							<div class="row text-center">
								<h2>Recent Blogs</h2>
								<p>For fun and sweet reads</p>
							</div>
							<div class="row">
								<div class="col-md-4">
									<a href="blogpost.php">
										<div class="blogBox">
											<div class="blogImg">
												<img src="img/blogpost1.jpg">
											</div>
											<div class="blogContent">
												<h4>Take It From a Pro</h4>
												<p>Interesting facts about birthdays in the 18th century.</p>
											</div>
										</div>
									</a>
								</div>
								<div class="col-md-4">
									<a href="blogpost.php">
										<div class="blogBox">
											<div class="blogImg">
												<img src="img/blogpost2.jpg">
											</div>
											<div class="blogContent">
												<h4>Take It From a Pro</h4>
												<p>Interesting facts about birthdays in the 18th century.</p>
											</div>
										</div>
									</a>
								</div>
							</div>
						</div>
					</section>
					<div id="featuredBlogs">
						<h2 class="text-center">Other Blogposts</h2>
						<div id="recipeCarousel" class="carousel slide" data-ride="carousel">
						  <!-- Indicators -->
						  <ol class="carousel-indicators">
						    <li data-target="#recipeCarousel" data-slide-to="0" class="active"></li>
						    <li data-target="#recipeCarousel" data-slide-to="1"></li>
						  </ol>

						  <!-- Wrapper for slides -->
						  <div class="carousel-inner">
						    <div class="item active">
							<a href="blogpost.php">
								<img src="img/blogpost1.jpg" alt="">
								<h3>Blogpost 1</h3>
							</a>
						    </div>
						    <div class="item">
							<a href="blogpost.php">
								<img src="img/blogpost2.jpg" alt="">
								<h3>Blogpost 2</h3>
							</a>
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
		</div>
	</body>
	<?php include 'footer.php'?>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</html>