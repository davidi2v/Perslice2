<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Name of Event Goes Here</title>
		<link rel="stylesheet" href="https://use.typekit.net/cco5pnz.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/confetti.css">
	</head>
	<?php include 'banner.php'?>
	<nav class="navbar navbar-confetti">
		<div class="container">
			<a id="numberMobile" href="tel:18885671901">CALL : (888) 567-1901</a>
			<a id="number" href="">CALL : (888) 567-1901</a>
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
					<li><a href="shop.php">SHOP</a></li>
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="contact.php">CONTACT <span class="caret"></span></a>
						<ul class="dropdown-menu">
						<li><a href="contact.php">CONTACT US</a></li>
						<li><a href="contact.php">RETAILER</a></li>
						<li><a href="contact.php">DISTRIBUTOR</a></li>
						</ul>
					</li>
					<li class="dropdown active">
						<a class="dropdown-toggle" data-toggle="dropdown" href="blogs.php">SWEET READS<span class="caret"></span></a>
						<ul class="dropdown-menu">
						<li><a href="blogs.php">BLOGS</a></li>
						<li><a href="recipes-all.php">RECIPES</a></li>
						<!-- <li><a href="all-events.php">SPECIAL EVENTS</a></li> -->
						</ul>
					</li>
					<li><a href="how-to-use.php">HOW TO USE</a></li>
				</ul>
				<!-- <ul class="nav navbar-nav navbar-right">
					<li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
					<li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
				</ul> -->
			</div>
		</div>
	</nav>
	<body>
		<div class="container" id="blogposts">
			<div class="row">
				<div class="col-xs-12 col-md-8">
					<div id="blogHeader">
						<h1>IHHS in Chicago, Illinios</h1>
						<p>August 15, 2017</p>
					</div>
					<img src="img/blogpost1.jpg" alt="" id="blogImg">
					<div id="postCaption" class="postCaption">
						<p>Early next year we will be at the International Houseware Show in Chicago, Illinois. Come support the team and learn more about our Perslice cake slicer. Our booth will be located on...Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						<img src="img/blogpost2.jpg" alt="" class="storyImg">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					</div>
				</div>
				<div class="col-xs-12 col-md-4">
					<div class="aside text-center">
						<h2>Get your own Perslice Cake Slicer and Server!</h2>
						<img src="img/Perslice.jpg" alt="Perslice cake slicer and server">
						<h3>Perslice<br>Cake Slicer and Server</h3>
						<p id="productPrice">$24.99</p>
						<a href="product.php" class="ctaBtn">Buy Now</a>
					</div>
					<div id="blogs">
						<div class="row">
							<div class="col-xs-12">
								<div id="featuredBlogs">
									<h2 class="text-center">Past Events</h2>
									<div id="recipeCarousel" class="carousel slide" data-ride="carousel">
									  <!-- Indicators -->
									  <ol class="carousel-indicators">
									    <li data-target="#recipeCarousel" data-slide-to="0" class="active"></li>
									    <li data-target="#recipeCarousel" data-slide-to="1"></li>
									    <li data-target="#recipeCarousel" data-slide-to="3"></li>
									  </ol>

									  <!-- Wrapper for slides -->
									  <div class="carousel-inner">
									    <div class="item active">
										<a href="event.php">
											<img src="img/blogpost1.jpg" alt="">
										</a>
										<div class="middle">
											<div class="text"><a href="event.php">Past Event 1</a></div>
										</div>
									    </div>
									    <div class="item">
										<a href="event.php">
											<img src="img/blogpost2.jpg" alt="">
										</a>
										<div class="middle">
											<div class="text"><a href="event.php">Past Event 2</a></div>
										</div>
									    </div>
										<div class="item">
										<a href="event.php">
											<img src="img/blogpost1.jpg" alt="">
										</a>
										<div class="middle">
											<div class="text"><a href="event.php">Past Event 3</a></div>
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
					</div>
				</div>
				<div class="col-xs-12 col-md-4">
					<div id="followSocial">
						<h3>Follow Us!</h2>
						<ul>
							<li><a href="#"><img src="img/fbIcon_blk.png" alt=""></a></li>
							<li><a href="#"><img src="img/igIcon.png" alt=""></a></li>
							<li><a href="#"><img src="img/twitterIcon.png" alt=""></a></li>
							<li><a href="#"><img src="img/youtubeIcon.png" alt=""></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</body>
	<?php include 'footer.php'?>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="js/script.js"></script>
	<script src="js/confetti.js"></script>
</html>