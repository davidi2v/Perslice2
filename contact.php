<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Contact Perslice</title>
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
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="formSelect text-center">
						<h1>Contact Us</h1>
					</div>
					<div id="form">
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
						  <button type="submit" class="ctaBtn">Submit</button>
						</form>
					</div>
				</div>
				<div class="col-xs-12">
					<div class="formSelectBlu text-center">
						<h1>Wholesale and Retail</h1>
					</div>
					<div id="form">
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
						  <button type="submit" class="ctaBtn">Submit</button>
						</form>
					</div>
				</div>
				<div class="col-xs-12">
					<div class="formSelect text-center">
						<h1>Distribution</h1>
					</div>
					<div id="form">
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
						  <button type="submit" class="ctaBtn">Submit</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</body>
	<?php include 'footer.php'?>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</html>