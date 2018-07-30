<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>How to Use Perslice</title>
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
		<div id="howto" class="container">
			<div id="video" class="row text-center">
				<h3>Video of Perslice sent to us by Miguel will go here.</h3>
			</div>
			<div class="row">
				<h2>Our Perslice Cake Slicer and Server cuts your cake into equal sizes!</h2>
			    <div id="persliceAnimation" class="container">
			        <div class="row">
			          <div class="cakeOutlines text-center">
			            <img id="start" src="https://cdn.shopify.com/s/files/1/0013/8143/3459/files/cakeOutline14.jpg?4047272281375380847" alt="14 slice cake cutter" style="display: none;"/>
			            <img id="outline14" src="https://cdn.shopify.com/s/files/1/0013/8143/3459/files/cakeOutline14.jpg?4047272281375380847" alt="14 slice cake cutter" style="display: block;"/>
			            <img id="outline16" src="https://cdn.shopify.com/s/files/1/0013/8143/3459/files/cakeOutline16.jpg?4047272281375380847" alt="16 slice cake cutter" style="display: none;"/>
			            <img id="outline20" src="https://cdn.shopify.com/s/files/1/0013/8143/3459/files/cakeOutline20.jpg?4047272281375380847" alt="20 slice cake cutter" style="display: none;"/>
			            <img id="outline24" src="https://cdn.shopify.com/s/files/1/0013/8143/3459/files/cakeOutline24.jpg?4047272281375380847" alt="24 slice cake cutter" style="display: none;"/>
			            <img id="outline30" src="https://cdn.shopify.com/s/files/1/0013/8143/3459/files/cakeOutline30.jpg?4047272281375380847" style="display: none;"/>
			            <p id="animeText"><span id="sizeNumber">Slice into</span> equal sizes!</p>
			          </div>
			          <div class="buttonsRow">
			            <p id="button30" class="buttons">30</p>
			            <p id="button24" class="buttons">24</p>
			            <p id="button20" class="buttons">20</p>
			            <p id="button16" class="buttons">16</p>
			            <p id="button14" class="buttons">14</p>
			          </div>
			        </div>
			    </div>
<script>

/*-------------------------------------
| Demo Animation
-------------------------------------*/

document.getElementById("button30").addEventListener("click", button30Click);

function button30Click () {
  $("#start").css("display", "none");
  $("#outline30").css("display", "block");
  $("#outline24").css("display", "none");
  $("#outline20").css("display", "none");
  $("#outline14").css("display", "none");
  $("#outline16").css("display", "none");

   $("#sizeNumber").text("30");
}

document.getElementById("button24").addEventListener("click", button24Click);

function button24Click () {
  $("#start").css("display", "none");
  $("#outline30").css("display", "none");
  $("#outline24").css("display", "block");
  $("#outline20").css("display", "none");
  $("#outline14").css("display", "none");
  $("#outline16").css("display", "none");

  $("#sizeNumber").text("24");
}

document.getElementById("button20").addEventListener("click", button20Click);

function button20Click () {
  $("#start").css("display", "none");
  $("#outline30").css("display", "none");
  $("#outline24").css("display", "none");
  $("#outline20").css("display", "block");
  $("#outline14").css("display", "none");
  $("#outline16").css("display", "none");

  $("#sizeNumber").text("20");
}

document.getElementById("button16").addEventListener("click", button16Click);

function button16Click () {
  $("#start").css("display", "none");
  $("#outline30").css("display", "none");
  $("#outline24").css("display", "none");
  $("#outline20").css("display", "none");
  $("#outline16").css("display", "block");
  $("#outline14").css("display", "none");

  $("#sizeNumber").text("16");
}

document.getElementById("button14").addEventListener("click", button14Click);

function button14Click () {
  $("#start").css("display", "none");
  $("#outline30").css("display", "none");
  $("#outline24").css("display", "none");
  $("#outline20").css("display", "none");
  $("#outline14").css("display", "block");
  $("#outline16").css("display", "none");

  $("#sizeNumber").text("14");
}
    </script>
			</div>
		</div>
	</body>
	<?php include 'footer.php'?>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</html>