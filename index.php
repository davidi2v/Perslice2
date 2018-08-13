<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Perslice Homepage</title>
		<link href="https://fonts.googleapis.com/css?family=Cookie" rel="stylesheet">
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
					<li class="active"><a href="/">HOME</a></li>
					<li><a href="shop.php">SHOP</a></li>
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
		<section id="landing">
			<div class="container-fluid desk">
				<div class="row">
					<div id="landingImg" class="col-md-8">
						<img src="img/slicedCake.jpg" alt="sliced cake">
					</div>
					<div id="landingCta" class="col-md-4">
						<div id="landingContainer">
							<h1>Perslice</h1>
							<p>Spend less time slicing<br> and more time celebrating</p>
							<a class="ctaBtn" href="product.php">Shop Now</a>
						</div>
					</div>
				</div>
			</div>
			<div class="container-fluid mobile" style="padding: 0px;">
				<div class="row">
					<div id="landingCta" class="col-sm-4">
						<div id="landingContainer">
							<h1>Perslice</h1>
							<p>Spend less time slicing<br> and more time celebrating</p>
							<a class="ctaBtn" href="product.php">Shop Now</a>
						</div>
					</div>
					<div id="landingImg" class="col-sm-8">
						<img src="img/slicedCake.jpg" alt="sliced cake">
					</div>
				</div>
			</div>
		</section>
		<section id="shopHm" class="shopHm">
			<div class="container">
				<div class="row text-center">
					<div class="col-md-12">
						<h2>The Perslice Gives A Perfect Slice Every Time</h2>
						<p class="subheading">Get your <span class="brandName">Perslice</span> today</p>
					</div>
				</div>
				<div id="myModal" class="modal fade" role="dialog">
				  <div class="modal-dialog">

					<!-- Modal content-->
					<div class="modal-content">
					  <div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					  </div>
					  <div class="modal-body">
						<!-- <div class="container"> -->
							<div id="product">
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
				<div class="row desk">
					<div class="col-md-6">
						<img src="img/Perslice.jpg" alt="perslice cake slicer and server">
						<h2 class="productTitle">Perslice<br> Cake Slicer and Server</h2>
						<p class="productPrice">$24.99</p>
						<a class="ctaBtn" href="" data-toggle="modal" data-target="#myModal">Quick Preview</a>
					</div>

					<div class="col-md-6">
						<a href="shop.php" id="saleTag">Special Offer</a>
						<img src="img/cakeStand_2.jpg" alt="perslice cake slicer and server">
						<h2 class="productTitle">Perslice<br> Cake Stand</h2>
						<p class="productPrice">$19.99</p>
						<a class="ctaBtn" href="" data-toggle="modal" data-target="#myModal">Quick Preview</a>
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
							   <p class="productPrice">$24.99</p>
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
							   <p class="productPrice">$24.99</p>
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
		<section id="specials" class="desk">
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
			  <!-- Indicators -->
			  <!-- <ol class="carousel-indicators">
			    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			    <li data-target="#myCarousel" data-slide-to="1"></li>
			  </ol> -->

			  <!-- Wrapper for slides -->
			  <div class="carousel-inner">
			    <div class="item active">
					  <img src="img/cakeHeart.jpg" alt="cake with heart">
					  <div class="contentBox">
	    				  <h3>Order 2<br> <span>SAVE 20%</span></h3>
	    				  <p>For a limited time we are offering an additional 20% off when you purchase one for you and one for a friend or family member</p>
	    				  <a class="ctaBtn" href="product.php">Shop Now</a>
			      	  </div>
			    </div>
			    <div class="item">
			      <img src="img/babyBitesCake.jpg" alt="baby bites cake">
				  <div class="contentBox">
					  <h3><span>Enter to Win</span> <br>$500</h3>
    				  <p>All you have to do is take a photo and send it to us and tell us about your Perslice experience</p>
    				  <a class="ctaBtn" href="" data-toggle="modal" data-target="#contestModal">Learn More</a>
				  </div>
			    </div>
			  </div>
			  <!-- Left and right controls -->
			  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
			    <span class="glyphicon glyphicon-chevron-left"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="right carousel-control" href="#myCarousel" data-slide="next">
			    <span class="glyphicon glyphicon-chevron-right"></span>
			    <span class="sr-only">Next</span>
			  </a>
			</div>
		</section>
		<div id="contestModal" class="modal fade" role="dialog">
		  <div class="modal-dialog">

			<!-- Modal content-->
			<div class="modal-content">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Perslice Contest Rules</h4>
			  </div>
			  <div class="modal-body">

			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			  </div>
			</div>

		  </div>
		</div>
		<section id="specials" class="mobile">
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<img class="desk" src="img/cakeHeart.jpg" alt="cake with heart">
	  			    	<img class="mobile" src="img/cakeHeart_desk.jpg" alt="cake with heart">
					</div>
					<div class="col-sm-6 salesContent">
					<div class="contentBox">
						<h3>Order 2<br> <span>SAVE 20%</span></h3>
		  				<p>For a limited time we are offering an additional 20% off when you purchase one for you and one for a friend or family member</p>
		  				<a class="ctaBtn" href="product.php">Shop Now</a>
					</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6 salesContent">
					<div class="contentBox">
						<h3><span>Enter to Win</span> <br>$500</h3>
	  					<p>All you have to do is take a photo and send it to us and tell us about your Perslice experience</p>
	  					<p class="ctaBtn" data-toggle="modal" data-target="#contestModal">Learn More</p>
					</div>
					<div id="contestModal" class="modal fade" role="dialog">
					  <div class="modal-dialog">

						<!-- Modal content-->
						<div class="modal-content">
						  <div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">Perslice Contest Rules</h4>
						  </div>
						  <div class="modal-body">

						  </div>
						  <div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						  </div>
						</div>

					  </div>
					</div>
					</div>
					<div class="col-sm-6">
						<img class="desk" src="img/babyBitesCake.jpg" alt="baby bites cake">
	  			      	<img class="mobile" src="img/babyBitesCake_desk.jpg" alt="cake with heart">
					</div>
				</div>
			</div>
		</section>
		<section class="container" id="newsletter">
			<div id="cakepopBox">
				<h3>GREAT OFFERS &amp; FREE RECIPES</h3>
				<a class="ctaBtn" href="#">Sign Up For Our Newsletter</a>
			</div>
		</section>
		<section id="insta">
			<div class="container">
				<div class="head row text-center">
					<h2>Instagram @<span class="brandName">perslice</span></h2>
					<p>Tag us @perslice to have your photo added to our feed!</p>
				</div>
				<div class="desk">
					<div class="row">
						<div class="col-xs-6">
							<a href="https://www.instagram.com/persliceusa/"><img src="img/igPost1.jpg" alt="Instagram Post 1"></a>
						</div>
						<div class="col-xs-6">
							<a href="https://www.instagram.com/persliceusa/"><img src="img/igPost2.jpg" alt="Instagram Post 2"></a>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-6">
							<a href="https://www.instagram.com/persliceusa/"><img src="img/igPost3.jpg" alt="Instagram Post 3"></a>
						</div>
						<div class="col-xs-6">
							<a href="https://www.instagram.com/persliceusa/"><img src="img/igPost4.jpg" alt="Instagram Post 4"></a>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-6">
							<a href="https://www.instagram.com/persliceusa/"><img src="img/igPost5.jpg" alt="Instagram Post 5"></a>
						</div>
						<div class="col-xs-6">
							<a href="https://www.instagram.com/persliceusa/"><img src="img/igPost6.jpg" alt="Instagram Post 6"></a>
						</div>
					</div>
				</div>
				<div class="mobile">
					<div class="row">
						<div class="col-md-3 col-xs-6">
							<a href="https://www.instagram.com/persliceusa/"><img src="img/igPost1.jpg" alt="Instagram Post 1"></a>
						</div>
						<div class="col-md-3 col-xs-6">
							<a href="https://www.instagram.com/persliceusa/"><img src="img/igPost2.jpg" alt="Instagram Post 2"></a>
						</div>
						<div class="col-md-3 col-xs-6">
							<a href="https://www.instagram.com/persliceusa/"><img src="img/igPost3.jpg" alt="Instagram Post 3"></a>
						</div>
						<div class="col-md-3 col-xs-6">
							<a href="https://www.instagram.com/persliceusa/"><img src="img/igPost4.jpg" alt="Instagram Post 4"></a>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3 col-xs-6">
							<a href="https://www.instagram.com/persliceusa/"><img src="img/igPost5.jpg" alt="Instagram Post 5"></a>
						</div>
						<div class="col-md-3 col-xs-6">
							<a href="https://www.instagram.com/persliceusa/"><img src="img/igPost6.jpg" alt="Instagram Post 6"></a>
						</div>
						<div class="col-md-3 col-xs-6">
							<a href="https://www.instagram.com/persliceusa/"><img src="img/igPost7.jpg" alt="Instagram Post 7"></a>
						</div>
						<div class="col-md-3 col-xs-6">
							<a href="https://www.instagram.com/persliceusa/"><img src="img/igPost8.jpg" alt="Instagram Post 8"></a>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3 col-xs-6">
							<a href="https://www.instagram.com/persliceusa/"><img src="img/igPost9.jpg" alt="Instagram Post 9"></a>
						</div>
						<div class="col-md-3 col-xs-6">
							<a href="https://www.instagram.com/persliceusa/"><img src="img/igPost10.jpg" alt="Instagram Post 10"></a>
						</div>
						<div class="col-md-3 col-xs-6">
							<a href="https://www.instagram.com/persliceusa/"><img src="img/igPost11.jpg" alt="Instagram Post 11"></a>
						</div>
						<div class="col-md-3 col-xs-6">
							<a href="https://www.instagram.com/persliceusa/"><img src="img/igPost12.jpg" alt="Instagram Post 12"></a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="blogHm">
			<div class="container">
				<div class="row text-center">
					<img class="title" src="img/Title_blog_desk.png" alt="Perslice blog" style="display: block; margin: 0px auto; width: 80%;">
					<p class="subheading">Read Our Editor's Stories</p>
				</div>
				<div id="recipeCarousel" class="carousel slide carousel-fade" data-ride="carousel">
				  <!-- Indicators -->
				  <!-- <ol class="carousel-indicators">
				    <li data-target="#recipeCarousel" data-slide-to="0" class="active"></li>
				    <li data-target="#recipeCarousel" data-slide-to="1"></li>
				  </ol> -->

				  <!-- Wrapper for slides -->
				  <div class="carousel-inner">
				    <div class="item active">
	    				<div class="row">
	    					<div class="col-sm-6 text-center">
	    						<img src="img/blog1_sq.jpg">
	    						<h3 class="desk">Blue Velvet Cake</h3>
	    					</div>
	    					<div class="col-sm-6">
	    						<div id="recipeDetail">
									<h3 class="mobile">What to Remember When Planning a Birthday</h3>
									<p>I was recently planning a birthday event and realizing how much pleasure I derive from the extensive and often times...</p>
		    						<a class="ctaBtn" href="blogpost.php">Read More</a>
	    						</div>
	    					</div>
	    				</div>
				    </div>
					<div class="item">
	    				<div class="row">
	    					<div class="col-sm-6 text-center">
	    						<img src="img/blog2_sq.jpg">
	    						<h3 class="desk">Carrot Cake</h3>
	    					</div>
	    					<div class="col-sm-6">
	    						<div id="recipeDetail">
									<h3 class="mobile">My new favorite kitchen tool!</h3>
									<p>Recently I became very interested in baking and how fine of an art it is. One thing that bothered me is that after all this time...</p>
		    						<a class="ctaBtn" href="blogpost2.php">Read More</a>
	    						</div>
	    					</div>
	    				</div>
				    </div>
					<div class="item">
	    				<div class="row">
	    					<div class="col-sm-6 text-center">
	    						<img src="img/blog3_sq.jpg">
	    						<h3 class="desk">Vegan Chocolate Cake</h3>
	    					</div>
	    					<div class="col-sm-6">
	    						<div id="recipeDetail">
									<h3 class="mobile">Everything a person needs who loves to bake</h3>
									<p>My kitchen has seen many transformation of style and equipment that I had thought “I can’t live without this!” just to finally realize...</p>
		    						<a class="ctaBtn" href="blogpost3.php">Read More</a>
	    						</div>
	    					</div>
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
		</section>
		<section id="recipes" class="container">
			<div class="row">
				<div class="text-center">
					<img class="title" src="img/Title_sugarShop_desk.png" alt="The Sugar Shop" style="width: 100%; margin: 0px auto; display: block;">
					<p class="subheading">Recipes for Every Occasion</p>
				</div>
			</div>
			<div id="recipeGrid" class="row">
				<!-- <div class="col-sm-4 col-xs-6">
					<a href=""><img src="img/blueVelvetCake.jpg" alt="blue velvet cake"></a>
				</div>
				<div class="col-sm-4 col-xs-6">
					<a href=""><img src="img/carrotCake.jpg" alt="carrot cake"></a>
				</div>
				<div class="col-sm-4 col-xs-6">
					<a href=""><img src="img/strawberryCake.jpg" alt="strawberry cake"></a>
				</div>
				<div class="col-sm-4 col-xs-6">
					<a href=""><img src="img/turtleCake.jpg" alt="Tantalizing Turtle Praline Cake"></a>
				</div>
				<div class="col-sm-4 col-xs-6">
					<a href=""><img src="img/veganChocolateCake.jpg" alt="vegan chocolate cake"></a>
				</div>
				<div class="col-sm-4 col-xs-6">
					<a href=""><img src="img/chocolateCake.jpg" alt="Insane Chocolate Fun Cake"></a>
				</div> -->
				<!-- <div class="row">
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
				</div> -->
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
				<div class="container mobile">
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
				</div>
			</div>
		</section>










		<section id="shopPlatforms">
			<div class="container text-center">
				<h2>You can also get your Perslice at...</h2>
				<div id="socialBox">
					<div class="icon"><a href="https://www.amazon.com/Perslice-Cake-Slicer-Server-Occasion/dp/B07CRRLDJL/ref=sr_1_1?s=home-garden&ie=UTF8&qid=1532976822&sr=1-1&keywords=perslice&dpID=31bxtcBTOYL&preST=_SY300_QL70_&dpSrc=srch" target="_blank"><img src="img/amazonIcon.png"></a></div>
					<div class="icon"><a href="https://www.facebook.com/PersliceUSA/"  target="_blank"><img src="img/fbIcon.png"></a></div>
				</div>
				<p>Interested in becoming a retailer? <a href="contact.php#retailForm">Click here</a> and you'll be a step closer to having Perslice in your stores!</p>
			</div>
		</section>
	</body>
	<?php include 'footer.php'?>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="js/script.js"></script>
</html>