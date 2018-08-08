<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Blogpost 1</title>
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
						<h1>What to Remember When Planning a Birthday</h1>
						<p>July 14, 2018</p>
						<p>By: Mai Ashley</p>
					</div>
					<img src="img/blog1.jpg" alt="" id="blogImg">
					<br>
					<div id="postCaption" class="postCaption">
						<p>I was recently planning a birthday event and realizing how much pleasure I derive from the extensive and often times the numerous versions of the event you must layout before settling upon the final event design, along with all of my set-up items such as cake design, cake serving gadgets, and serve wear.</p>
						<br>
						<p>This exercise in event planning got me to questioning why people celebrate birthdays and where the tradition evolved from in the first place.</p>
						<br>
						<p>Here is a little bit of information I found to gain a better perspective and have a additional respect for the tradition we all acknowledge or ignore, depending upon your age and mindset, that is linked directly to the date of our birth.</p>
						<br>
						<p>According the book of Lore of Birthdays, ancient Greeks had believed or maybe some still do, that every person has a spirit which attendants to their birth and this spirit keeps watch over them. These spirits were said to have a direct mystical relation with the God on whose birthday the individual was born.  This would certainly make a birthday a very important event.</p>
						<br>
						<p>The celebration of the date of your birth was a pagan tradition, and actually, many Christians
						Long ago did not celebrate birthdays historically because of its association with the Pagan tradition.
						Pagans had proclaimed that spirits skulk on days of considerable transition, one such day would be the day of your birth since a person is transitioning to a year older. This is completely ridiculous of course because every day we grow older so this is a bit silly. Many of these thoughts, ideas and practices give me a good laugh even though I am also very superstitious and quite enjoy traditions and their origins I can still find the humor in some things people put so much validity into.</p>
						<br>
						<p>The candles we blow out on our birthday have a very interesting backstory as well, they were said to be a response to the evil spirits, they showed up to communicate with the gods, a sort of light in the darkness.</p>
						<br>
						<p>Germans began childrens birthday traditions in the 1700s, they would put candles on sweets, such as, tortes for “Kinderfest” one for each year of life, many would add additional candles to honor the upcoming years.
						The well known English language celebratory song “Happy Birthday to You” originated a tune for school kids in 1893. The actual tune was derived from a song by two school teachers and was called “Good Morning to All.” The tune reportedly earns one of the teachers estate $2 million annually.</p>
						<br>
						<p>So, next time you are celebrating your own date of your birth or someone elses you will now understand a little better why it has become such a very involved practice and why it is so very important to acknowledge if only to just realize We Have Survived Another Year! </p>
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