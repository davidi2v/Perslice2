<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Frequently Asked Questions</title>
		<link rel="stylesheet" href="https://use.typekit.net/cco5pnz.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
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
		<div id="myModal" class="modal fade" role="dialog">
		  <div class="modal-dialog">

			<!-- Modal content-->
			<div class="modal-content">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			  </div>
			  <div class="modal-body">
				<div>
  					<h3 class="text-center">Win a Free Perslice</h3>
					<form>
					  <div class="form-group">
						<label for="name">Full Name</label>
						<input type="name" class="form-control" id="name" placeholder="First, Last Name" required>
					  </div>
					  <div class="form-group">
						<label for="address">Address</label>
						<input type="email" class="form-control" id="address" placeholder="Type address" required>
					  </div>
					  <div class="form-group">
						<label for="country">Country</label>
						<input type="name" class="form-control" id="country" placeholder="Type country" required>
					  </div>
					  <div class="checkbox form-group">
					  	<label><input type="checkbox" value="" checked>I understand the terms and conditions</label>
					  </div>
					  <button type="submit" class="ctaBtn">Enter Contest</button>
					  <p style="padding-top: 25px; text-align: center;"><i>Contest is for Continental US only.</i></p>
					</form>
  				</div>

			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			  </div>
			</div>

		  </div>
		</div>
			<div id="faqHead" class="container">
				<h1>Frequently Asked Questions</h1>
			</div>
			<div id="search">
				<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for questions.." title="Type in a name">
			</div>
		<div class="container">
			<table id="myTable">
			  <tr class="header">
			    <!-- <th style="width:60%;">Name</th> -->
			  </tr>
			  <tr>
				<td>
					<b>What are the contest rules?</b>

					<p><i>Legal Residents of the 50 Unites States (D.C.) and Canada 18 years and older only.</i></p>

					<p>No Purchase Necessary.</p>

					<p>Promotion will run from (Set Date), 2018</p>

					<p>Eligible entries require:</p>
					<ul>
						<li>One entry per household.</li>
						<li>Winner will be selected by CEO, randomly from all eligible entries.</li>
						<li>Employees of PERSLICE USA, LLC are not eligible to participate in the contest.</li>
						<li>Winner will be advised via Facebook Or Instagram messenger on (Set Date), and must respond by (Set Date).</li>
					</ul>

					<p>If no response is received by the winner, by (Set Date), another winner will be selected from the remaining eligible submissions.</p>

					<p>Winner will be officially announced on (Set Date) 2018, via Instagram/Facebook.</p>

					<p>Winner is required to sign a release of liability waiver against Facebook/Instagram, and Perslice USA, LLC.</p>

					<p>Winner is required to sign an authorization to use image for marketing purposes</p>

					<p>Promotion is in no way sponsored, endorsed, administered by, or associated with Facebook/Instagram.</p>

					<p><i>If you meet these requirements and wish to participate to win your own free Perslice cake slicer <a href="" data-toggle="modal" data-target="#myModal">click here.</a></i></p>

					<div id="followSocial">
						<h3>Follow us to stay up to date on all contests!</h2>
						<ul>
							<li><a href="https://www.facebook.com/PersliceUSA/" target="_blank"><img src="img/fbIcon_blk.png" alt=""></a></li>
							<li><a href="https://www.instagram.com/persliceusa/" target="_blank"><img src="img/igIcon.png" alt=""></a></li>
							<li><a href="https://twitter.com/persliceusa?lang=en" target="_blank"><img src="img/twitterIcon.png" alt=""></a></li>
							<li><a href="https://www.youtube.com/channel/UCNun0CgGBKZDRyAzXDZSYWg" target="_blank"><img src="img/youtubeIcon.png" alt=""></a></li>
						</ul>
					</div>
				</td>
			  </tr>
			  <tr>
				<td>
					<b>How many slices does Perslice cut?</b>
					<p>The answer goes here.</p>
				</td>
			  </tr>
			  <tr>
				<td>
					<b>What desserts can Perslice cut?</b>
					<p>The answer goes here.</p>
				</td>
			  </tr>
			  <tr>
				<td>
					<b>How do you clean the Perslice cake slicer?</b>
					<p>The answer goes here.</p>
				</td>
			  </tr>
			  <tr>
				<td>
					<b>What size cakes does Perslice slice?</b>
					<p>The answer goes here.</p>
				</td>
			  </tr>
			  <tr>
				<td>
					<b>Is Perlice a toy?</b>
					<p>The answer goes here.</p>
				</td>
			  </tr>
			</table>
			<script>
				function myFunction() {
				  var input, filter, table, tr, td, i;
				  input = document.getElementById("myInput");
				  filter = input.value.toUpperCase();
				  table = document.getElementById("myTable");
				  tr = table.getElementsByTagName("tr");
				  for (i = 0; i < tr.length; i++) {
				    td = tr[i].getElementsByTagName("td")[0];
				    if (td) {
				      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
				        tr[i].style.display = "";
				      } else {
				        tr[i].style.display = "none";
				      }
				    }
				  }
				}
			</script>
		</div>
	</body>
	<?php include 'footer.php'?>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="js/script.js"></script>
</html>