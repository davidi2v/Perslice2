<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Perslice Shop</title>
		<link rel="stylesheet" href="https://use.typekit.net/cco5pnz.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
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
		<!-- <div id="imgHeader">
			<img class="desk" src="img/shopHeader.jpg" alt="blue cupcake">
			<img class="mobile" src="img/shopHeader2.jpg" alt="blue cupcake">
			<h1 id="imgText">Free Shipping<br> on All Orders</h1>
		</div> -->
		<section id="shopMain" class="mobile">
			<div class="container">
				<div class="row text-center">
					<div class="col-md-12">
						<img class="title" src="img/Title_Shop_desk.png">
					</div>
				</div>
				<div class="row desk">
					<div class="col-md-6">
						<img src="img/Perslice.jpg" alt="perslice cake slicer and server">
						<h2 class="productTitle">Perslice<br> Cake Slicer and Server</h2>
						<p class="productPrice">$24.99</p>
						<a class="ctaBtn" href="#">Quick View</a>
					</div>
					<div class="col-md-6">
						<span id="saleTag">Sale</span>
						<img src="img/cakeStand_2.jpg" alt="perslice cake slicer and server">
						<h2 class="productTitle">Perslice<br> Cake Stand</h2>
						<p class="productPrice">$19.99</p>
						<a class="ctaBtn" href="#">Quick View</a>
					</div>
				</div>
				<div class="row mobile">
					<div class="col-md-6">
						<div class="mainBox">
							<a href="product.php">
								<img src="img/Perslice.jpg" alt="perslice cake slicer and server">
								<h2 class="productTitle">Perslice<br> Cake Slicer and Server</h2>
								<p class="productPrice">$24.99</p>
							</a>
								<div class="middle">
	  						    <div class="text">
									<p data-toggle="modal" data-target="#myModal">Quick Preview</p>
								</div>
	  						  </div>

	  						<!-- Modal -->
	  						<div id="myModal" class="modal fade" role="dialog">
	  						  <div class="modal-dialog">

	  						    <!-- Modal content-->
	  						    <div class="modal-content">
	  						      <div class="modal-header">
	  						        <button type="button" class="close" data-dismiss="modal">&times;</button>
	  						      </div>
	  						      <div class="modal-body">
	  						        <!-- <div class="container"> -->
										<div id="product" class="mobile">
											<div class="row">
												<div class="col-xs-12 col-md-7">
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
												<div id="productInfo" class="col-md-5">
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
													<div>
														<a href="product.php">View full details</a>
													</div>
													<div id="addtocart">
														<a href="#" class="ctaBtn">Add to Cart</a>
													</div>
													</div>
											</div>
											</div>
	  						        <!-- </div> -->
	  						      </div>
	  						      <div class="modal-footer">
	  						        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	  						      </div>
	  						    </div>

	  						  </div>
	  						</div>
						</div>
					</div>
					<div class="col-md-6">
						<div id="productCarousel" class="carousel slide" data-ride="carousel">
						  <!-- Indicators -->
						  <!-- <ol class="carousel-indicators">
						    <li data-target="#productCarousel" data-slide-to="0" class="active"></li>
						    <li data-target="#productCarousel" data-slide-to="1"></li>
						  </ol> -->

						  <!-- Wrapper for slides -->
						  <div class="carousel-inner">
						    <div class="item active">
								<a href="shop.php" id="saleTag">Special Offer</a>
								<a href="product.php"><img src="img/cakeStand_2.jpg" alt="perslice cake slicer and server">
  	  							<h2 class="productTitle">Perslice<br> Cake Stand</h2>
	  	  						<p class="productPrice">$19.99</p>
								</a>
								<div class="middle">
									<div class="text">
										<p data-toggle="modal" data-target="#myModal">Quick Preview</p>
									</div>
	  						  </div>
						    </div>
							<div class="item">
								<a href="shop.php" id="saleTag">Special Offer</a>
							   <a href="product.php"><img src="img/cakePan.jpg" alt="perslice cake slicer and server">
							   <h2 class="productTitle">Perslice<br> Cake Pan</h2>
							   <p class="productPrice">$9.99</p>
							    </a>
							   <div class="middle">
						    		<div class="text">
										<p data-toggle="modal" data-target="#myModal">Quick Preview</p>
   									</div>
							 	</div>
						   </div>
						   <div class="item">
							   <a href="shop.php" id="saleTag">Special Offer</a>
							   <a href="product.php"><img src="img/measuringSpoons.jpg" alt="perslice cake slicer and server">
							   <h2 class="productTitle">Perslice<br> Measuring Spoons</h2>
							   <p class="productPrice">$7.99</p>
							   </a>
							   <div class="middle">
								   <div class="text">
   										<p data-toggle="modal" data-target="#myModal">Quick Preview</p>
   									</div>
							 	</div>
						   </div>
						  </div>
						  <!-- Left and right controls -->
						  <a class="left carousel-control" href="#productCarousel" data-slide="prev">
						    <span class="glyphicon glyphicon-chevron-left"></span>
						    <span class="sr-only">Previous</span>
						  </a>
						  <a class="right carousel-control" href="#productCarousel" data-slide="next">
						    <span class="glyphicon glyphicon-chevron-right"></span>
						    <span class="sr-only">Next</span>
						  </a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<div id="shop" class="desk">
			<div class="container">
				<div class="row text-center">
					<img class="title" src="img/Title_Shop_mobile.png">
				</div>
				<div class="row">
					<div id="mainProduct" class="col-xs-12">
						<img src="img/Perslice.jpg" alt="perslice cake slicer and server">
						<h2 class="productTitle">Perslice<br> Cake Slicer and Server</h2>
						<p class="productPrice">$24.99</p>
						<a class="ctaBtn" href="product.php">Buy Now</a>
					</div>
					<!-- <div class="col-xs-6">
						<img src="img/cakeStand_2.jpg" alt="perslice cake stand">
						<h2 class="productTitle">Perslice<br> Cake Stand</h2>
						<p id="productPrice">$24.99</p>
						<a class="ctaBtn" href="#">Quick View</a>
					</div> -->
				</div>
				<div class="row">

					<div id="features" class="container">
						<div class="text-left">
							<h2>Special Offers</h2>
						</div>
							<div class="productSlider">
							  <div class="sliderItem">
							  	<a href="#">
							  		<img src="img/cakeStand_2.jpg" alt="cake stand">
									<h1 class="featuredTitle">Perslice <br>Cake Stand</h1>
									<p id="productPrice">$19.99</p>
							  	</a>
							  </div>
							  <div class="sliderItem">
							  	<a href="#">
							  		<img src="img/cakePan.jpg" alt="cake pan">
									<h1 class="featuredTitle">Perslice <br>Cake Pan</h1>
									<p id="productPrice">$9.99</p>
							  	</a>
							  </div>
							  <div class="sliderItem">
							  	<a href="#">
							  		<img src="img/measuringSpoons.jpg" alt="measuring spoons">
									<h1 class="featuredTitle">Perslice <br>Measuring Spoons</h1>
									<p id="productPrice">$7.99</p>
							  	</a>
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
	<script src="js/slick.js"></script>
	<script src="js/script.js"></script>
</html>