<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Contact Perslice</title>
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
					<li class="dropdown active">
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
		<section id="contact">
			<img src="img/babyBitesCake.jpg" alt="Baby bites cake">
			<div class="container">
				<div class="row">
					<div class="col-xs-12"  id="contactForm">
						<div class="formSelect text-center">
							<h1>Contact Us</h1>
						</div>
						<div>
							<p>Please fill the form below if you have any questions or concers about Perslice or our services, and we will be glad to assist.</p>
							<form>
							  <div class="form-group">
							    <label for="name">Full Name</label>
							    <input type="email" class="form-control" id="name" placeholder="First, Last Name">
							  </div>
							  <div class="form-group">
							    <label for="email">Email address</label>
							    <input type="email" class="form-control" id="email" placeholder="name@example.com">
							  </div>
							  <div class="form-group">
							    <label for="phoneNumber">Phone Number</label>
							    <input type="email" class="form-control" id="phoneNumber" placeholder="Best number to contact">
							  </div>
							  <div class="form-group">
							    <label for="message">Example textarea</label>
							    <textarea class="form-control" id="message" rows="3"></textarea>
							  </div>
							  <button type="submit" class="ctaBtn">Send</button>
							  <p>Want our Perslice cake slicer and server in your stores? Please <a href="contact.php#retailForm">click here</a>.</p>
							</form>
						</div>
					</div>
					<div class="col-xs-12"  id="retailForm">
						<div class="formSelectBlu text-center">
							<h1>Wholesale and Retail</h1>
						</div>
						<div>
							<p>Get your own Perslice products in your store! We will respond with in 1 business day.</p>
							<form>
							  <div class="form-group">
							    <label for="name2">Full Name</label>
							    <input type="email" class="form-control" id="name2" placeholder="First, Last Name">
							  </div>
							  <div class="form-group">
							    <label for="email2">Email address</label>
							    <input type="email" class="form-control" id="email2" placeholder="name@example.com">
							  </div>
							  <div class="form-group">
							    <label for="phoneNumber2">Phone Number</label>
							    <input type="email" class="form-control" id="phoneNumber2" placeholder="Best number to contact">
							  </div>
							  <div class="form-group">
							    <label for="message2">Example textarea</label>
							    <textarea class="form-control" id="message2" rows="3"></textarea>
							  </div>
							  <button type="submit" class="ctaBtn">Send</button>
							  <p>Have questions about our products or service? Please <a href="contact.php#contactForm">click here</a>.</p>
							</form>
						</div>
					</div>
					<div class="col-xs-12"  id="distributionForm">
						<div class="formSelect text-center">
							<h1>Distribution</h1>
						</div>
						<div>
							<p>Get your own Perslice products in your store! We will respond with in 1 business day.</p>
							<form>
							  <div class="form-group">
							    <label for="name3">Full Name</label>
							    <input type="email" class="form-control" id="name3" placeholder="First, Last Name">
							  </div>
							  <div class="form-group">
							    <label for="email3">Email address</label>
							    <input type="email" class="form-control" id="email3" placeholder="name@example.com">
							  </div>
							  <div class="form-group">
							    <label for="phoneNumber4">Phone Number</label>
							    <input type="email" class="form-control" id="phoneNumber4" placeholder="Best number to contact">
							  </div>
							  <div class="form-group">
							    <label for="message5">Example textarea</label>
							    <textarea class="form-control" id="message5" rows="3"></textarea>
							  </div>
							  <button type="submit" class="ctaBtn">Send</button>
							  <p>Have questions about our products or service? Please <a href="contact.php#contactForm">click here</a>.</p>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
	</body>
	<?php include 'footer.php'?>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</html>