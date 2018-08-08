<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Blogpost 4</title>
		<link rel="stylesheet" href="https://use.typekit.net/cco5pnz.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
		<link rel="stylesheet" href="css/style.css">
	</head>
	<?php include 'banner.php'?>
	<nav class="navbar">
		<div class="container">
			<a id="number" href="#">CALL : (888) 567-1901</a>
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
						<li><a href="contact.php#contactForm">CONTACT US</a></li>
						<li><a href="contact.php#retailForm">RETAILER</a></li>
						<li><a href="contact.php#distributionForm">DISTRIBUTOR</a></li>
						</ul>
					</li>
					<li class="dropdown active">
						<a class="dropdown-toggle" data-toggle="dropdown" href="blogs.php">ARTICLES<span class="caret"></span></a>
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
						<h1>Budget Wise Party Planning</h1>
						<p>July 14, 2018</p>
						<p>By: Shola Proctor</p>
					</div>
					<img src="img/blog4.jpg" alt="" id="blogImg">
					<div id="postCaption" class="postCaption">
						<br>
						<p>We want our party to be remembered but not break the bank doing so, here is what you can do to stretch a dollar but look good doing it!</p>
						<br>

						<p>Start your party planning and shopping early so you can watch for discounts and sales.</p>
						<br>


						<p>Embrace activities for your guests to do that don't cost money but will keep them engaged and be having fun.
						No matter if your guests are pint-sized or adults, everyone loves a well thought out activity such as these hilarious activities.</p>
						<br>

						<p>Freeze dance works for children and adults, have your DJ man the equipment and select when to start and stop the music. Anyone who is still dancing is out.
						Charades is a lot of fun with a creative group, write topics on little pieces of paper and have teams pull one out to perform and the other team gets to guess, whoever has the most correct answers wins.</p>
						<br>
						<p>A great kids game that is just as much fun for adults is HeadBandz, if you haven't played with a bunch of adults just try it, it can get a little wild by the way.
						Look through your kids games and just alter them to accommodate adult kids, I am sure you will find this to be a great activity if you can get the adults to let their hair down.</p>
						<br>

						<p>Bake a semi-homemade cake, use a box cake and substitute buttermilk for the water, frost the cake with a homemade frosting or buttercream, milk, unsalted butter, vanilla and confectioners sugar. Or you can dress up a basic cake with a bunch of beautiful berries and whipped cream. Don’t forget to get the Perslice cake cutter and server so you have enough slices of cake for all of your guests.</p>
						<br>

						<p>Order decoration supplies online and saves money and time.</p>
						<br>

						<p>Spring & Summer Time Parties; recycle jars and use them as candle holders or beverage glasses, use fancy straws in the jars and fill a huge well cleaned out glass bowl or jar and fill with a Sangria, lemonade, or a mixed fruit punch beverage, throw some cut up fruit into the container or freeze fruit into ice cubes.</p>
						<br>

						<p>Make a digital invite and not the traditional paper invites.</p>
						<br>
					</div>


				</div>
				<div class="col-xs-12 col-md-4">
					<div class="aside text-center">
						<h2>Get your own Perslice Cake Slicer and Server!</h2>
						<img src="img/Perslice.jpg" alt="Perslice cake slicer and server">
						<h3>Perslice<br>Cake Slicer and Server</h3>
						<p id="productPrice"></p>
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
							<a href="blogpost.php">
								<img src="img/blog1.jpg" alt="">
							</a>
							<div class="middle">
								<div class="text"><a href="blogpost.php">What to Remember When Planning a Birthday</a></div>
							</div>
							</div>
							<div class="item">
							<a href="blogpost2.php">
								<img src="img/blog2.jpg" alt="">
							</a>
							<div class="middle">
								<div class="text"><a href="blogpost2.php">My new favorite kitchen tool!</a></div>
							</div>
							</div>
							<div class="item">
							<a href="blogpost3.php">
								<img src="img/blog3.jpg" alt="">
							</a>
							<div class="middle">
								<div class="text"><a href="blogpost3.php">Get your own Perslice Cake Slicer and Server!</a></div>
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