<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Delicious Recipes</title>
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
		<section id="allRecipes">
			<div class="container desk">
				<div id="recipeHead" class="row text-center">
					<h1>Delicious Recipes</h1>
					<p>Fun and sweet recipes</p>
				</div>
				<div class="row">
					<div class="col-xs-6 col-sm-6 recipeItem">
						<img src="img/blueVelvetCake.jpg" alt="Blue Velvet Cake">
						<h3>Blue Velvet Cake</h3>
						<a href="blue-velvet-cake.php" class="ctaBtn">Read Recipe</a>
					</div>
					<div class="col-xs-6 col-sm-6 recipeItem">
						<img src="img/carrotCake.jpg" alt="Carrot Cake">
						<h3>Carrot Cake</h3>
						<a href="carrot-cake.php" class="ctaBtn">Read Recipe</a>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-6 col-sm-6 recipeItem">
						<img src="img/chocolateCake.jpg" alt="Insane Chocolate Fun Cake">
						<h3>Insane Chocolate Fun Cake</h3>
						<a href="insane-chocolate-fun-cake.php" class="ctaBtn">Read Recipe</a>
					</div>
					<div class="col-xs-6 col-sm-6 recipeItem">
						<img src="img/veganChocolateCake.jpg" alt="Vegan Chocolate Cake">
						<h3>Vegan Chocolate Cake</h3>
						<a href="vegan-chocolate-cake.php" class="ctaBtn">Read Recipe</a>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-6 col-sm-6 recipeItem">
						<img src="img/strawberryCake.jpg" alt="Very Berry Strawberry Cake">
						<h3>Very Berry Strawberry Cake</h3>
						<a href="very-berry-strawberry-cake.php" class="ctaBtn">Read Recipe</a>
					</div>
					<div class="col-xs-6 col-sm-6 recipeItem">
						<img src="img/turtleCake.jpg" alt="Tantalizing Turtle Praline Cake">
						<h3>Tantalizing Turtle Praline Cake</h3>
						<a href="tantalizing-turtle-praline-cake.php" class="ctaBtn">Read Recipe</a>
					</div>
				</div>
				</div>
			</div>
			<div class="container mobile">
				<div id="recipeHead" class="row text-center">
					<h1>Delicious Recipes</h1>
					<p>Fun and sweet recipes</p>
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-4 recipeItem">
						<img src="img/blueVelvetCake.jpg" alt="Blue Velvet Cake">
						<div class="middle">
							<div class="text"><a href="blue-velvet-cake.php">Blue Velvet Cake</a></div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-4 recipeItem">
						<img src="img/carrotCake.jpg" alt="Carrot Cake">
						<div class="middle">
							<div class="text"><a href="carrot-cake.php">Carrot Cake</a></div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-4 recipeItem">
						<img src="img/chocolateCake.jpg" alt="Insane chocolate fun Cake">
						<div class="middle">
							<div class="text"><a href="insane-chocolate-fun-cake.php">Insane Chocolate Fun Cake Cake</a></div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-4 recipeItem">
						<img src="img/veganChocolateCake.jpg" alt="Vegan Chocolate Cake">
						<div class="middle">
							<div class="text"><a href="vegan-chocolate-cake.php">Vegan Chocolate Cake</a></div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-4 recipeItem">
						<img src="img/strawberryCake.jpg" alt="Very Berry Strawberry Cake">
						<div class="middle">
							<div class="text"><a href="very-berry-strawberry-cake.php">Very Berry Strawberry Cake</a></div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-4 recipeItem">
						<img src="img/turtleCake.jpg" alt="Tantalizing Turtle Praline Cake">
						<div class="middle">
							<div class="text"><a href="tantalizing-turtle-praline-cake.php">Tantalizing Turtle Praline Cake</a></div>
						</div>
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