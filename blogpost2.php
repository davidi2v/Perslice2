<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Blogpost 2</title>
		<link rel="stylesheet" href="https://use.typekit.net/cco5pnz.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
		<link rel="stylesheet" href="css/style.css">
	</head>
	<?php include 'banner.php'?>
	<nav class="navbar">
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
						<li><a href="all-events.php">SPECIAL EVENTS</a></li>
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
						<h1>My new favorite kitchen tool!</h1>
						<p>Published : July 15, 2018</p>
						<p>By: Drake Astor</p>
					</div>
					<img src="img/blog_my-new-favorite_sq.jpg" alt="" id="blogImg">
					<div id="postCaption" class="postCaption">
						<p>Recently I became very interested in baking and how fine of an art it is. One thing that bothered me is that after all this time is how I’ll spend a few hours perfecting a cake and to only have it fall apart as soon as I touch it with a spatula or a knife. However, now that I’ve discovered Perslice, a revolutionary cutting tool, I can have my cake and eat it too! It has different settings for how wide I want my slice to be, just in case I want to treat myself to a bit extra of my favorite chocolate cake. It didn’t stop there, the Perslice went the extra mile and added in a retractable spatula on top of the already existing blades.</p>
						<p>Now I know you’re probably thinking about how sharp the blades are, let me tell you there is no need to worry about having an accident with your fingers, Perslice came prepared, it features quality plastic blades that are not at all sharp and will still cut through a cake with ease. At parties it makes for a great way to cut cake, but to also have fun. My little cousins and my friends both enjoy it!</p>
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
					<div id="featuredBlogs">
						<h2 class="text-center">Other Blogposts</h2>
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
							<a href="blogpost3.php">
								<img src="img/blog_everything-a-person-needs_sq.jpg" alt="">
							</a>
							<div class="middle">
								<div class="text"><a href="blogpost3.php">Everything a person needs who loves to bake.</a></div>
							</div>
							</div>
							<div class="item">
							<a href="blogpost4.php">
								<img src="img/blog4.jpg" alt="">
							</a>
							<div class="middle">
								<div class="text"><a href="blogpost4.php">Budget Wise Party Planning</a></div>
							</div>
							</div>
							<div class="item">
							<a href="blogpost.php">
								<img src="img/blog_what-to-remember_sq.jpg" alt="">
							</a>
							<div class="middle">
								<div class="text"><a href="blogpost.php">What to Remember When Planning a Birthday</a></div>
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
				<div class="col-xs-12 col-md-4">
					<div id="followSocial">
						<h3>Follow Us!</h2>
						<ul>
							<li><a href="https://www.facebook.com/PersliceUSA/" target="_blank"><img src="img/fbIcon_blk.png" alt=""></a></li>
							<li><a href="https://www.instagram.com/persliceusa/" target="_blank"><img src="img/igIcon.png" alt=""></a></li>
							<li><a href="https://twitter.com/persliceusa?lang=en" target="_blank"><img src="img/twitterIcon.png" alt=""></a></li>
							<li><a href="https://www.youtube.com/channel/UCNun0CgGBKZDRyAzXDZSYWg" target="_blank"><img src="img/youtubeIcon.png" alt=""></a></li>
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
</html>