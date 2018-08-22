<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Perslice Cake Slicer and Server</title>
		<link rel="stylesheet" href="https://use.typekit.net/cco5pnz.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
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
					<li class="active"><a href="shop.php">SHOP</a></li>
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="contact.php">CONTACT <span class="caret"></span></a>
						<ul class="dropdown-menu">
						<li><a href="contact.php">CONTACT US</a></li>
						<li><a href="contact.php">RETAILER</a></li>
						<li><a href="contact.php">DISTRIBUTOR</a></li>
						</ul>
					</li>
					<li class="dropdown">
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
		<div id="product" class="container">
			<div class="row">
				<div id="breadcrumbs">
					<ul>
						<li><a href="shop.php">Shop <i class="fas fa-angle-right"></i></a></li>
						<li><a href="#">Perslice Cake Slicer and Server</a></li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-md-6">
					<img src="img/Perslice.jpg" alt="Perslice cake slicer and server">
					<ul id="thumbnails">
						<li><img src="img/Perslice.jpg" alt=""></li>
						<li><img src="img/Perslice_front.jpg" alt=""></li>
						<li><img src="img/Perslice_frontRt.jpg" alt=""></li>
						<li><img src="img/Perslice_backRt.jpg" alt=""></li>
						<li><img src="img/Perslice_back.jpg" alt=""></li>
						<li><img src="img/Perslice_backLt.jpg" alt=""></li>
						<li><img src="img/Perslice_top.jpg" alt=""></li>
						<li><img src="img/Perslice_box.jpg" alt=""></li>
					</ul>
				</div>
				<div id="productInfo" class="col-md-6">
					<div id="productName"  class="text-center">
						<h1>Perslice<br>Cake Slicer and Server</h1>
					</div>
					<div id="productDetail">
						<div class="productDetailBox">
							<p class="productPrice">$24.99</p>
						</div>
						<div class="productDetailBox">
							<form>
								<div class="input-group">
									<span class="input-group-btn">
										<button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
											<span class="glyphicon glyphicon-minus"></span>
										</button>
									</span>
									<input type="text" name="quant[1]" class="form-control input-number" value="1" min="1" max="10">
									<span class="input-group-btn">
										<button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[1]">
											<span class="glyphicon glyphicon-plus"></span>
										</button>
									</span>
								</div>
							</form>
						</div>
					</div>
					<div id="addtocart">
						<a href="#" class="ctaBtn">Add to Cart</a>
					</div>
					<div>
						<div class="panel-group" id="accordion">
							<div class="panel panel-default">
							  <div class="panel-heading">
								<h4 class="panel-title">
								  <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Product Description</a>
								</h4>
							  </div>
							  <div id="collapse1" class="panel-collapse collapse in">
								<div class="panel-body">The product description will be going into this area. This is just placeholder text being used for display.</div>
							  </div>
							</div>
							<div class="panel panel-default">
							  <div class="panel-heading">
								<h4 class="panel-title">
								  <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Return &amp; Refund Policy</a>
								</h4>
							  </div>
							  <div id="collapse2" class="panel-collapse collapse">
								<div class="panel-body">The Return &amp; Refund Policy will be going into this area. This is just placeholder text being used for display.</div>
							  </div>
							</div>
							<div class="panel panel-default">
							  <div class="panel-heading">
								<h4 class="panel-title">
								  <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Shipping Info</a>
								</h4>
							  </div>
							  <div id="collapse3" class="panel-collapse collapse">
								<div class="panel-body">The Shipping Info will be going into this area. This is just placeholder text being used for display.</div>
							  </div>
							</div>
						  </div>
						</div>
					</div>
			</div>
			</div>
		</div>
	</body>
	<?php include 'footer.php'?>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
	<script src="js/script.js"></script>
</html>