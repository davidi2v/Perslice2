<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Delicious Recipes</title>
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
		<section id="allRecipes">
			<div class="container">
				<div class="row text-center">
					<h1>Delicious Recipes</h1>
					<p>Fun and sweet recipes</p>
				</div>
				<div class="row">
					<div class="col-xs-6">
						<img src="img/blueBerryVelvetCake.jpg" alt="Blue Velvet Cake">
						<h3>Blue Velvet Cake</h3>
						<a href="blue-velvet-cake.php" class="ctaBtn">Read Recipe</a>
					</div>
					<div class="col-xs-6">
						<img src="img/igPost2.jpg" alt="Blueberry Velvet Cake">
						<h3>Double Chocolate Cake</h3>
						<a href="#" class="ctaBtn">Read Recipe</a>
					</div>
					<div class="col-xs-6">
						<img src="img/igPost3.jpg" alt="Blueberry Velvet Cake">
						<h3>Strawberry Vanilla Cake</h3>
						<a href="#" class="ctaBtn">Read Recipe</a>
					</div>
					<div class="col-xs-6">
						<img src="img/igPost4.jpg" alt="Blueberry Velvet Cake">
						<h3>Strawberry Cake</h3>
						<a href="#" class="ctaBtn">Read Recipe</a>
					</div>
				</div>
			</div>
		</section>
	</body>
	<?php include 'footer.php'?>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="js/script.js"></script>
</html>