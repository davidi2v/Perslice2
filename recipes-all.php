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
		<!-- <section id="allRecipes">
			<div class="container desk">
				<div id="recipeHead" class="row text-center">
					<h1>Delicious Recipes</h1>
					<p>Fun and sweet recipes</p>
				</div>
				<div class="row">
					<div class="col-xs-6 col-sm-6 recipeItem">
						<img src="img/recipe_blue-velvet_sq.jpg" alt="Blue Velvet Cake">
						<h3>Blue Velvet Cake</h3>
						<a href="blue-velvet-cake.php" class="ctaBtn">Read Recipe</a>
					</div>
					<div class="col-xs-6 col-sm-6 recipeItem">
						<img src="img/carrot-cake_sq.jpg" alt="Carrot Cake">
						<h3>Carrot Cake</h3>
						<a href="carrot-cake.php" class="ctaBtn">Read Recipe</a>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-6 col-sm-6 recipeItem">
						<img src="img/insane-chocolate-cake_sq.jpg" alt="Insane Chocolate Fun Cake">
						<h3>Insane Chocolate Fun Cake</h3>
						<a href="insane-chocolate-fun-cake.php" class="ctaBtn">Read Recipe</a>
					</div>
					<div class="col-xs-6 col-sm-6 recipeItem">
						<img src="img/vegan-cake(1)_sq.jpg" alt="Vegan Chocolate Cake">
						<h3>Vegan Chocolate Cake</h3>
						<a href="vegan-chocolate-cake.php" class="ctaBtn">Read Recipe</a>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-6 col-sm-6 recipeItem">
						<img src="img/strawberry-cake(1)_sq.jpg" alt="Very Berry Strawberry Cake">
						<h3>Very Berry Strawberry Cake</h3>
						<a href="very-berry-strawberry-cake.php" class="ctaBtn">Read Recipe</a>
					</div>
					<div class="col-xs-6 col-sm-6 recipeItem">
						<img src="img/turtle-cake(1)_sq.jpg" alt="Tantalizing Turtle Praline Cake">
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
						<a href="blue-velvet-cake.php"><img src="img/recipe_blue-velvet_sq.jpg" alt="Blue Velvet Cake"></a>
						<div class="middle">
							<div class="text"><a href="blue-velvet-cake.php">Blue Velvet Cake</a></div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-4 recipeItem">
						<a href="carrot-cake.php"><img src="img/carrot-cake_sq.jpg" alt="Carrot Cake"></a>
						<div class="middle">
							<div class="text"><a href="carrot-cake.php">Carrot Cake</a></div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-4 recipeItem">
						<a href="insane-chocolate-fun-cake.php"><img src="img/insane-chocolate-cake_sq.jpg" alt="Insane chocolate fun Cake"></a>
						<div class="middle">
							<div class="text"><a href="insane-chocolate-fun-cake.php">Insane Chocolate Fun Cake Cake</a></div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-4 recipeItem">
						<a href="vegan-chocolate-cake.php"><img src="img/vegan-cake(1)_sq.jpg" alt="Vegan Chocolate Cake"></a>
						<div class="middle">
							<div class="text"><a href="vegan-chocolate-cake.php">Vegan Chocolate Cake</a></div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-4 recipeItem">
						<a href="very-berry-strawberry-cake.php"><img src="img/strawberry-cake(1)_sq.jpg" alt="Very Berry Strawberry Cake"></a>
						<div class="middle">
							<div class="text"><a href="very-berry-strawberry-cake.php">Very Berry Strawberry Cake</a></div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-4 recipeItem">
						<a href="tantalizing-turtle-praline-cake.php"><img src="img/turtle-cake(1)_sq.jpg" alt="Tantalizing Turtle Praline Cake"></a>
						<div class="middle">
							<div class="text"><a href="tantalizing-turtle-praline-cake.php">Tantalizing Turtle Praline Cake</a></div>
						</div>
					</div>
				</div>
			</div>
		</section> -->
		<section>
			<div id="blueVelvet" class="container recipe">
				<div class="row">
					<div class="text-center">
						<img class="title" src="img/Title_sugarShop_desk.png" alt="The Sugar Shop" style="width: 100%; margin: 0px auto; display: block;">
						<p class="subheading">Recipes for Every Occasion</p>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-md-6">
						<img src="img/recipe_blue-velvet_sq.jpg" alt="Blue velvet cake">
					</div>
					<div class="col-xs-12 col-md-6">
						<p class="recipeTitle">Blue Velvet Cake</p>
						<!-- <div id="recipeDetail">
							<div id="timeDiv">
								<div class="time"><img src="img/clockIcon.png"><p>Prep Time:  20 mins</p></div>
								<div class="time"><img src="img/clockIcon.png"><p>Cook Time:  30 mins</p></div>
								<div class="time"><img src="img/clockIcon.png"><p>Total Time:  50 mins</p></div>
							</div>
						</div> -->
						<div id="procedure">
							<div class="panel-group" id="accordion">
							    <div class="panel panel-default">
							      <div class="panel-heading">
							        <h4 class="panel-title">
							          <a data-toggle="collapse" data-parent="#accordion" href="#blueVelvetcollapse1">Ingredients <span class="caret"></span></a>
							        </h4>
							      </div>
							      <div id="blueVelvetcollapse1" class="panel-collapse collapse">
							        <div class="panel-body">
							        	<ul>
											<li>1 and 1/4 Cups Cake Flour, sifted</li>
											<li>1 and 1/4 Cups Ultra-Fine Sugar</li>
											<li>11 Egg Whites, room temperature</li>
											<li>2 Teaspoons Vanilla Extract</li>
											<li>2 oz. of blue food coloring homemade or bought</li>
											<li>1 and 1/2 Teaspoons Cream of Tartar</li>
											<li>1 Tablespoon Cocoa Powder</li>
											<li>1/4 Teaspoon Salt</li>
											<li>1 and 1/2 Cups Blueberries, fresh not frozen</li>
							        	</ul>
							        </div>
							      </div>
							    </div>
							    <div class="panel panel-default">
							      <div class="panel-heading">
							        <h4 class="panel-title">
							          <a data-toggle="collapse" data-parent="#accordion" href="#blueVelvetcollapse2">Directions <span class="caret"></span></a>
							        </h4>
							      </div>
							      <div id="blueVelvetcollapse2" class="panel-collapse collapse">
							        <div class="panel-body">
										<p>Preheat the oven to 375 degrees Fahrenheit or 190.556 Celsius.</p>
										
										<p>Use a large or medium bowl to sift together the flour, a ½ cup of sugar, and cocoa powder.</p>
										
										<p>In a separate large bowl, you will beat together your egg whites, the vanilla extract, cream of tartar, and the salt till they begin to peak.</p>
										
										<p>* When the egg whites are beaten to soft peak stage, the whites will mound, but no sharp tips will form. When the recipe calls for egg whites that are beaten to the stiff peak stage, beat until sharp tips form when the beaters are lifted*</p>
										
										<p>Follow this by beating the remaining ¾ cups of sugar and add blue food coloring.</p>
										
										<p>*You can make your own blue coloring using food products or
										you can purchase a natural blue food coloring product online*
										until the mixture begins to hold stiff peaks, this should take about 5 to 6 minutes.</p>
										
										<p>*When do you know you have a stiff peak?  When the egg whites are beaten to soft peak stage, the whites will mound, but no sharp tips will form. When the recipe calls for egg whites that are beaten to the stiff peak stage, beat until sharp tips form when the beaters are lifted. When egg whites are over beaten, they look curdled and dry*</p>
										

										<p>Fold in ¼ of the flour mixture slowly, it is best if you use a spatula and try not to stir the mixture, continue folding till of the mixture is worked in. Next, pour 1 cup of blueberries into the batter folding them in but do not stir or you will break up the berries.</p>
										
										<p>Now, pour the batter into 2 greased round pans and bake for 20-30 minutes. *make sure you grease all the inside edges thoroughly*</p>
										
										<p>When you poke the center of the cake with a toothpick it should come out without any wet batter, place on the top of the counter and let it cool for at least 30-40 minutes before removing from the pan. Wait an extra 30 minutes till you frost the cake.</p>
										
							        </div>
							      </div>
							    </div>
							    <div class="panel panel-default">
							      <div class="panel-heading">
							        <h4 class="panel-title">
							          <a data-toggle="collapse" data-parent="#accordion" href="#blueVelvetcollapse3">Notes <span class="caret"></span></a>
							        </h4>
							      </div>
							      <div id="blueVelvetcollapse3" class="panel-collapse collapse">
							        <div class="panel-body">
										<p>Check out our tips and tricks page for dessert lovers! Links from each recipe page</p>
										<p>Frosting a cake with ease.</p>
										<ol>
											<li>Use a piece of wax paper or parchment paper on the top of a baking sheet or plate.</li>
											<li>Put a cooling rack on the top of the paper.</li>
											<li>Put your frosting into a microwave-safe bowl or container and heat for 30 seconds or until the frosting is fully melted.</li>
											<li>Stir in any coloring you might be using, nuts, or other frosting additives.</li>
											<li>All you have to do is pour the frosting evenly all over the top of the cake till its completely covered, even the sides if you want full coverage. Remember the larger the cake the more frosting you will need.</li>
											<li>Place the cake in the refrigerator for at least an hour so your frosting will set.</li>
										</ol>
							        </div>
							      </div>
							    </div>
							  </div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section>
			<div id="carrotCake" class="container recipe">
				<div class="row">
					<div class="col-xs-12 col-md-6">
						<img src="img/carrot-cake_sq.jpg" alt="Blue velvet cake">
					</div>
					<div class="col-xs-12 col-md-6">
						<p class="recipeTitle">Carrot Cake</p>
						<!-- <div id="recipeDetail">
							<div id="timeDiv">
								<div class="time"><img src="img/clockIcon.png"><p>Prep Time:  20 mins</p></div>
								<div class="time"><img src="img/clockIcon.png"><p>Cook Time:  30 mins</p></div>
								<div class="time"><img src="img/clockIcon.png"><p>Total Time:  50 mins</p></div>
							</div>
						</div> -->
						<div id="procedure">
							<div class="panel-group" id="accordion">
							    <div class="panel panel-default">
							      <div class="panel-heading">
							        <h4 class="panel-title">
							          <a data-toggle="collapse" data-parent="#accordion" href="#carrotCakecollapse1">Ingredients <span class="caret"></span></a>
							        </h4>
							      </div>
							      <div id="carrotCakecollapse1" class="panel-collapse collapse">
							        <div class="panel-body">
							        	<ul>
											<li>2 cups of all purpose flour </li>
											<li>2 teaspoons of ground cinnamon </li>
											<li>2 cups of granulated sugar </li>
											<li>1 teaspoon of baking soda </li>
											<li>½ teaspoon of salt </li>
											<li>3 large eggs </li>
											<li>1 ½ cups of canola oil </li>
											<li>2 cups finely grated carrots </li>
											<li>1 cup chopped nuts </li>
											<li>1 cup sweetened shredded coconut </li>
											<li>1 teaspoon vanilla extract </li>
											<li>1 cup drained crushed pineapple (remove all liquid) </li>
							        	</ul>
										
										<p>Frosting</p>
										<ul>
											<li>6 oz of softened cream cheese </li>
											<li>6 tablespoons of softened salted butter </li>
											<li>3 cups of confectioners sugar </li>
											<li>1 teaspoon of vanilla extract </li>
											<li>Add additional nuts </li>

										</ul>
							        </div>
							      </div>
							    </div>
							    <div class="panel panel-default">
							      <div class="panel-heading">
							        <h4 class="panel-title">
							          <a data-toggle="collapse" data-parent="#accordion" href="#carrotCakecollapse2">Directions <span class="caret"></span></a>
							        </h4>
							      </div>
							      <div id="carrotCakecollapse2" class="panel-collapse collapse">
							        <div class="panel-body">
										<p>Use a large bowl to combine the flour, cinnamon, baking soda, sugar, and salt.<p/>
										<p>Next, add the eggs, carrots, vanilla, and oil.<p/>
										<p>Beat until combined fully.<p/>
										<p>Stir in the coconut, nuts, and pineapple.<p/>
										<p>Pour the mixture into a round greased pan and bake at 350 degrees Fahrenheit or  176.667 Celcius, poke with a toothpick in the center of the cake and make sure the batter is not wet, remove the cake and place on a wire rack to fully cool.<p/>
										<p>Use a medium bowl, beat butter and cream cheese together until fluffy, add the confectioners sugar, vanilla, and beat again until smooth and fully blended.<p/>
										<p>Frost the cake top or top and sides, sprinkle with additional nuts.<p/>
							        </div>
							      </div>
							    </div>
							    <div class="panel panel-default">
							      <div class="panel-heading">
							        <h4 class="panel-title">
							          <a data-toggle="collapse" data-parent="#accordion" href="#carrotCakecollapse3">Notes <span class="caret"></span></a>
							        </h4>
							      </div>
							      <div id="carrotCakecollapse3" class="panel-collapse collapse">
							        <div class="panel-body">
										No notes for this recipe.
							        </div>
							      </div>
							    </div>
							  </div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section>
			<div id="insaneChocolate" class="container recipe">
				<div class="row">
					<div class="col-xs-12 col-md-6">
						<img src="img/insane-chocolate-cake_sq.jpg" alt="Insane Chocolate Fun Cake">
					</div>
					<div class="col-xs-12 col-md-6">
						<p class="recipeTitle">Insane Chocolate Fun Cake</p>
						<!-- <div id="recipeDetail">
							<div id="timeDiv">
								<div class="time"><img src="img/clockIcon.png"><p>Prep Time:  20 mins</p></div>
								<div class="time"><img src="img/clockIcon.png"><p>Cook Time:  30 mins</p></div>
								<div class="time"><img src="img/clockIcon.png"><p>Total Time:  50 mins</p></div>
							</div>
						</div> -->
						<div id="procedure">
							<div class="panel-group" id="accordion">
							    <div class="panel panel-default">
							      <div class="panel-heading">
							        <h4 class="panel-title">
							          <a data-toggle="collapse" data-parent="#accordion" href="#insaneChocolatecollapse1">Ingredients <span class="caret"></span></a>
							        </h4>
							      </div>
							      <div id="insaneChocolatecollapse1" class="panel-collapse collapse">
							        <div class="panel-body">
							        	<ul>
											<li>1 ¼ cups of all purpose flour </li>
											<li>1 cup of sugar </li>
											<li>Nonstick vegetable oil spray </li>
											<li>1 ½ kosher salt </li>
											<li>1 teaspoon of baking soda </li>
											<li>1 teaspoon vanilla extract </li>
											<li>¾ cup natural unsweetened cocoa powder </li>
											<li>¼ cup vegetable oil </li>
											<li>½ cup finely chopped semi sweet chocolate approximately 3 ½ oz.</li>
							        	</ul>
										
										<p>Ingredients for the Peanut Butter Cream</p>
										<ul>
											<li>½ cup of granulated sugar </li>
											<li>1 ½ teaspoons vanilla extract </li>
											<li>6 tablespoons of chilled unsalted butter cut into small cubes </li>
											<li>¼ cup egg white requires 2 large eggs </li>
											<li>¼ cup creamy peanut butter</li>
											<li>1 ½ cups of Kosher salt </li>
											<li>¼ cup chopped semisweet chocolate which is about 1 ¾ oz</li>
											<li>¼ cup chopped unsalted dry roasted peanuts </li>
										</ul>
							        </div>
							      </div>
							    </div>
							    <div class="panel panel-default">
							      <div class="panel-heading">
							        <h4 class="panel-title">
							          <a data-toggle="collapse" data-parent="#accordion" href="#insaneChocolatecollapse2">Directions <span class="caret"></span></a>
							        </h4>
							      </div>
							      <div id="insaneChocolatecollapse2" class="panel-collapse collapse">
							        <div class="panel-body">
										<p>Preheat the oven to 350 Fahrenheit or 176.667 Celcius.</p>
										
										<p>Spray non-stick on the bottoms and sides of the round pans, line bottom of the pan with parchment paper.</p>
										
										<p>Whisk flour and next 4 ingredients in a large bowl. Add oil, vanilla, and 1 1/4 cups water; whisk until smooth. Fold in chopped chocolate. Scrape into prepared pan; smooth top. Bake until a tester comes out clean when inserted into center, 35–40 minutes. Let cool completely in pan on a wire rack.</p>
										
										<p>Peanut Butter Cream</p>
										<p>Use a medium bowl on the top of a saucepan of simmering water, combine the sugar and egg whites, whisk continuously till the sugar is fully dissolved about 4 to 5 minutes, do not overcook, remove from heat.</p>
										
										<p>Move the bowl to a heat safe surface, use an electric mixer at a medium speed, add the butter pieces slowly to the bowl beating continuously between adding the butter pieces.</p>
										
										<p>Sprinkle the salt.</p>
										
										<p>Using a thin knife you will cut around the edge of the pan between the cake and the pan to release onto a serving plate inverted.</p>
										
										<p>Spread the peanut butter cream over the entire top of the cake.</p>
										
										<p>Sprinkle the chopped chocolate and peanuts.</p>
										



							        </div>
							      </div>
							    </div>
							    <div class="panel panel-default">
							      <div class="panel-heading">
							        <h4 class="panel-title">
							          <a data-toggle="collapse" data-parent="#accordion" href="#insaneChocolatecollapse3">Notes <span class="caret"></span></a>
							        </h4>
							      </div>
							      <div id="insaneChocolatecollapse3" class="panel-collapse collapse">
							        <div class="panel-body">
										No notes for this recipe.
							        </div>
							      </div>
							    </div>
							  </div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section>
			<div id="pralineCake" class="container recipe">
				<div class="row">
					<div class="col-xs-12 col-md-6">
						<img src="img/turtle-cake(1)_sq.jpg" alt="Blue velvet cake">
					</div>
					<div class="col-xs-12 col-md-6">
						<p class="recipeTitle">Tantalizing Turtle Praline Cake</p>
						<!-- <div id="recipeDetail">
							<div id="timeDiv">
								<div class="time"><img src="img/clockIcon.png"><p>Prep Time:  20 mins</p></div>
								<div class="time"><img src="img/clockIcon.png"><p>Cook Time:  30 mins</p></div>
								<div class="time"><img src="img/clockIcon.png"><p>Total Time:  50 mins</p></div>
							</div>
						</div> -->
						<div id="procedure">
							<div class="panel-group" id="accordion">
							    <div class="panel panel-default">
							      <div class="panel-heading">
							        <h4 class="panel-title">
							          <a data-toggle="collapse" data-parent="#accordion" href="#pralineCakecollapse1">Ingredients <span class="caret"></span></a>
							        </h4>
							      </div>
							      <div id="pralineCakecollapse1" class="panel-collapse collapse">
							        <div class="panel-body">
							        	<ul>
											<li>¾ cup of unsweetened cocoa </li>
											<li>2 cups of all purpose flour </li>
											<li>2 cups of granulated sugar </li>
											<li>1 cup of brown sugar </li>
											<li>½ cup of butter </li>
											<li>1 cup of chopped pecans </li>
											<li>1 can or 14 oz of sweetened condensed milk </li>
											<li>1 ½ teaspoon of baking powder </li>
											<li>1 ½ teaspoon of baking soda </li>
											<li>1 teaspoon of salt </li>
											<li>2 large eggs </li>
											<li>½ cup of canola oil </li>
											<li>1 teaspoon of vanilla extract </li>
											<li>1 cup of sour cream </li>
											<li>1 teaspoon white vinegar</li>
											<li>1/2 cup fudge topping</li>
											<li>1/2 cup chocolate chips, melted</li>

							        	</ul>
							        </div>
							      </div>
							    </div>
							    <div class="panel panel-default">
							      <div class="panel-heading">
							        <h4 class="panel-title">
							          <a data-toggle="collapse" data-parent="#accordion" href="#pralineCakecollapse2">Directions <span class="caret"></span></a>
							        </h4>
							      </div>
							      <div id="pralineCakecollapse2" class="panel-collapse collapse">
							        <div class="panel-body">
										<p>Preheat the oven to 350 Fahrenheit or 176.667 Celcius.</p>
										
										<p>Grease with butter the bottoms of two 9-inch round cake pans, fit a circle of parchment paper on the inside of each cake pan up the sides 1 inch.</p>
										
										<p>Slowly heat the butter, sweetened condensed milk, and brown sugar in a saucepan on a medium heat till the butter melts fully and the sugar is completely dissolved, make sure not to boil.</p>
										
										<p>Divide the sugar mixture into equal parts into the two round cake pans. Next, sprinkle the ¾ cup of pecans on top of the sugar mixture and put to the side to set and cool fully.</p>
										
										<p>In a large bowl combine the flour, granulated sugar, cocoa, baking powder, baking soda, and the salt together. Add the 2 large eggs, oil, vanilla, sour cream, vinegar, 1 cup of hot water, and mix with a wooden spoon until the batter is smooth and creamy.</p>
										
										<p>Pour the batter into the two cake pans over the sugar mixture that has cooled, bake until a toothpick poked into the center of each cake comes out without wet batter, cooking time will be around 30-45 minutes depending upon your oven. </p>
										
										<p>Remove from oven and let cool in the pans for at least 10 minutes.</p>
										
										<p>Use a knife to run around the edges of the pans to separate from the pan, turn the pan upside down on the cooling rack, remove the parchment paper, let the cakes cool fully before adding frosting.</p>
										
										<p>You will now spread the fudge topping on top of the sugar mixture of one of the cakes, place your second cake on the top of the first.</p>
										
										<p>Now, drizzle the melted chocolate over the top, sprinkle the ¼ cup of pecans, you can also frost the cake sides with a chocolate frosting. </p>
										
										<p>Assemble the cake: Spread the fudge topping over the sugar mixture side of one cake layer. Place the second layer over the first and drizzle with the melted chocolate and the remaining 1/4 cup pecans. Frost the cake sides with your favorite chocolate icing.

							        </div>
							      </div>
							    </div>
							    <div class="panel panel-default">
							      <div class="panel-heading">
							        <h4 class="panel-title">
							          <a data-toggle="collapse" data-parent="#accordion" href="#pralineCakecollapse3">Notes <span class="caret"></span></a>
							        </h4>
							      </div>
							      <div id="pralineCakecollapse3" class="panel-collapse collapse">
							        <div class="panel-body">
										No notes for this recipe.
							        </div>
							      </div>
							    </div>
							  </div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section>
			<div id="veganChocolate" class="container recipe">
				<div class="row">
					<div class="col-xs-12 col-md-6">
						<img src="img/vegan-cake(1)_sq.jpg" alt="Blue velvet cake">
					</div>
					<div class="col-xs-12 col-md-6">
						<p class="recipeTitle">Vegan Chocolate Cake</p>
						<!-- <div id="recipeDetail">
							<div id="timeDiv">
								<div class="time"><img src="img/clockIcon.png"><p>Prep Time:  20 mins</p></div>
								<div class="time"><img src="img/clockIcon.png"><p>Cook Time:  30 mins</p></div>
								<div class="time"><img src="img/clockIcon.png"><p>Total Time:  50 mins</p></div>
							</div>
						</div> -->
						<div id="procedure">
							<div class="panel-group" id="accordion">
							    <div class="panel panel-default">
							      <div class="panel-heading">
							        <h4 class="panel-title">
							          <a data-toggle="collapse" data-parent="#accordion" href="#veganChocolatecollapse1">Ingredients <span class="caret"></span></a>
							        </h4>
							      </div>
							      <div id="veganChocolatecollapse1" class="panel-collapse collapse">
							        <div class="panel-body">
							        	<ul>
											<li>2 cups spelt or white flour</li>
											<li>3/4 cup cacao or unsweetened cocoa powder</li>
											<li>1 tsp baking soda</li>
											<li>1 tsp salt</li>
											<li>1 cup mini chocolate chips, optional</li>
											<li>1 1/2 cup unrefined sugar or xylitol</li>
											<li>1/2 cup applesauce, banana, or yogurt of choice, such as coconut milk yogurt</li>
											<li>1/2 cup oil, almond butter, or another substitute</li>
											<li>1 1/2 tbsp pure vanilla extract</li>
											<li>1 1/2 cup water</li>

							        	</ul>
							        </div>
							      </div>
							    </div>
							    <div class="panel panel-default">
							      <div class="panel-heading">
							        <h4 class="panel-title">
							          <a data-toggle="collapse" data-parent="#accordion" href="#veganChocolatecollapse2">Directions <span class="caret"></span></a>
							        </h4>
							      </div>
							      <div id="veganChocolatecollapse2" class="panel-collapse collapse">
							        <div class="panel-body">
										<p>Preheat the oven to 350 Fahrenheit or 176.667 Celcius, grease two 8-in round pans, set them aside.</p>
										
										<p>Use a large bowl, combine the flour, cocoa powder, baking soda, salt, optional chips, and sweetener, and stir well.</p>
										
										<p>*if your butter is not easy to stir you can heat gently until it softens*</p>
										
										<p>Use a second bowl to whisk together the oil or nut butter, vanilla, applesauce or yogurt, and water.</p>
										
										<p>Now, you will pour the wet mixture with the dry and mix until they are combined but do not over-mix.</p>
										
										<p>Grease two round pans, pour the mixture into each evenly and bake in the center of the rack for 25 minutes or until the batter has risen, poke the center of the cakes with a toothpick and if you pull it out without any wet batter it is done.</p>
										

							        </div>
							      </div>
							    </div>
							    <div class="panel panel-default">
							      <div class="panel-heading">
							        <h4 class="panel-title">
							          <a data-toggle="collapse" data-parent="#accordion" href="#veganChocolatecollapse3">Notes <span class="caret"></span></a>
							        </h4>
							      </div>
							      <div id="veganChocolatecollapse3" class="panel-collapse collapse">
							        <div class="panel-body">
										<p>*One of our tips is, take the cakes out before they are fully done so the toothpick is almost clean with just a bit of moist batter, the cake will continue to bake in the pan from the heat while it sits on the counter, once cooled you can put the cake inside of the pan into the refrigerator overnight or for a couple of hours to fully set, the vegan cake is even better if you wait a full day to eat*</p>
										
										<p>Frosting:</p>
										<p>Use a knife or a straight spatula, slide it in between the cake edge and the pan to release it, turn it upside down on the serving plate, gently tap the bottom of the pan.</p>
										
										<p>You will frost each cake separately before placing one on top of the other, or you can serve two single layer cakes if you prefer.</p>
										
										<p>Here is our Vegan Chocolate Frosting Recipe</p>
										<ul>
											<li>3 and 3/4 cups (450g) Powdered Sugar</li>
											<li>4 Tbsp Cocoa Powder</li>
											<li>3 Tbsp (45g) Vegan Butter</li>
											<li>5 Tbsp Soy Milk (or other non-dairy milk)</li>
											<li>1 tsp Vanilla Extract</li>
										</ul>
										
										<p>Use a medium bowl and add the powdered sugar, cocoa powder, vegan butter, non-dairy milk, vanilla, and mix together with an electric hand mixer or stand mixer on low, once blended fully turn the setting up higher and continue till the mixture is thick and creamy.</p>
										
										<p>*Some tips for getting the best consistency, you can add more of the non-dairy milk if you want it less thick and smoother, or you can add more of the powdered sugar to thicken it up more, Enjoy!</p>
										


							        </div>
							      </div>
							    </div>
							  </div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section>
			<div id="strawberryCake" class="container recipe">
				<div class="row">
					<div class="col-xs-12 col-md-6">
						<img src="img/strawberry-cake(1)_sq.jpg" alt="Blue velvet cake">
					</div>
					<div class="col-xs-12 col-md-6">
						<p class="recipeTitle">Very Berry Strawberry Cake</p>
						<!-- <div id="recipeDetail">
							<div id="timeDiv">
								<div class="time"><img src="img/clockIcon.png"><p>Prep Time:  20 mins</p></div>
								<div class="time"><img src="img/clockIcon.png"><p>Cook Time:  30 mins</p></div>
								<div class="time"><img src="img/clockIcon.png"><p>Total Time:  50 mins</p></div>
							</div>
						</div> -->
						<div id="procedure">
							<div class="panel-group" id="accordion">
							    <div class="panel panel-default">
							      <div class="panel-heading">
							        <h4 class="panel-title">
							          <a data-toggle="collapse" data-parent="#accordion" href="#strawberryCakecollapse1">Ingredients <span class="caret"></span></a>
							        </h4>
							      </div>
							      <div id="strawberryCakecollapse1" class="panel-collapse collapse">
							        <div class="panel-body">
							        	<ul>
											<li>1  18.25 oz box of white cake mix </li>
											<li>1  3 oz box of strawberry flavored instant gelatin </li>
											<li>1   15 oz package of frozen strawberries in the syrup, thaw first then puree </li>
											<li>*Puree, To blend, grind or mash food until it is a thick, smooth, lump-free consistency. Pureeing can be done in a blender, food processor, or food mill or can be accomplished by pressing the food through a sieve.*</li>
											<li>4  large eggs</li>
											<li>½ cup of vegetable oil</li>
											<li>¼ cup of water</li>
											<li>Strawberry cream cheese frosting recipe</li>
											<li>¼ cup salted softened butter</li>
											<li>1  10 oz package of cream cheese softened</li>
											<li>1  10 oz package frozen strawberries in the syrup that are thawed and pureed</li>
											<li>½ teaspoon strawberry extract</li>
											<li>7 cups of confectioners sugar</li>
											<li>Optional, 2-8 fresh strawberries to decorate the stop of the cake or use to garnish, you can slice them thin and place over the top of the cake or place a few in the middle of the cake to decorate, or use them to garnish the plates</li>

							        	</ul>
							        </div>
							      </div>
							    </div>
							    <div class="panel panel-default">
							      <div class="panel-heading">
							        <h4 class="panel-title">
							          <a data-toggle="collapse" data-parent="#accordion" href="#strawberryCakecollapse2">Directions <span class="caret"></span></a>
							        </h4>
							      </div>
							      <div id="strawberryCakecollapse2" class="panel-collapse collapse">
							        <div class="panel-body">
										<p>Preheat the oven to 350 Fahrenheit or 176.667 Celsius.</p>
										
										<p>Lightly grease 2  9 inch round cake cake pans.</p>
										
										<p>Use a large bowl to combine the boxed cake mix and the gelatin, add the pureed strawberries, eggs, oil, and the water.</p>
										
										<p>Beat the ingredients at a medium speed with an electric mixer until smooth.</p>
										
										<p>Next, pour the mixture into the two greased round pans, bake in the center of the oven for 20 minutes or until a toothpick poked into the center of each cake comes out without wet batter.</p>
										
										<p>Remove from oven and let stand for 10 minutes in the pans.</p>
										
										<p>Remove from pans and cool fully on a wire rack.</p>
										
										<p>*tips on how to remove a cake from a pan on our tips page* </p>
										

							        </div>
							      </div>
							    </div>
							    <div class="panel panel-default">
							      <div class="panel-heading">
							        <h4 class="panel-title">
							          <a data-toggle="collapse" data-parent="#accordion" href="#strawberryCakecollapse3">Notes <span class="caret"></span></a>
							        </h4>
							      </div>
							      <div id="strawberryCakecollapse3" class="panel-collapse collapse">
							        <div class="panel-body">
										<p>Frosting:</p>
										<p>Use a large bowl to beat the butter and cream cheese on a medium speed with an electric mixer, do this until the consistency is smooth and creamy.</p>
										
										<p>Beat in ¼ of a cup of the strawberry puree and the strawberry extract, slowly add the confectioners sugar, continue beating till the mixture is smooth.</p>
										
										<p>Use the frosting between the two layers, over the top and sides or you can choose to frost each separately, garnish with fresh whole or sliced strawberries.</p>
										
										<p>With the remaining strawberry puree you can use vanilla bean ice cream or lemon gelato on the side, drizzle the puree over the top for a taste and visual sensation!</p>
										

							        </div>
							      </div>
							    </div>
							  </div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section>
			<div id="popcornCake" class="container recipe">
				<div class="row">
					<div class="col-xs-12 col-md-6">
						<img src="img/popcorn-cake_sq.jpg" alt="Blue velvet cake">
					</div>
					<div class="col-xs-12 col-md-6">
						<p class="recipeTitle">Peanut Butter Caramel Popcorn Cake</p>
						<!-- <div id="recipeDetail">
							<div id="timeDiv">
								<div class="time"><img src="img/clockIcon.png"><p>Prep Time:  20 mins</p></div>
								<div class="time"><img src="img/clockIcon.png"><p>Cook Time:  30 mins</p></div>
								<div class="time"><img src="img/clockIcon.png"><p>Total Time:  50 mins</p></div>
							</div>
						</div> -->
						<div id="procedure">
							<div class="panel-group" id="accordion">
							    <div class="panel panel-default">
							      <div class="panel-heading">
							        <h4 class="panel-title">
							          <a data-toggle="collapse" data-parent="#accordion" href="#popcornCakecollapse1">Ingredients <span class="caret"></span></a>
							        </h4>
							      </div>
							      <div id="popcornCakecollapse1" class="panel-collapse collapse">
							        <div class="panel-body">
										<p><b>Brown Butter Cake:</b></p>
							        	<ul>
											<li>1 1/4 cups unsalted browned butter, chilled then softened</li>
											<li>2 ¼ cups all-purpose flour</li>
											<li>2 ½ teaspoons baking powder</li>
											<li>½  teaspoon salt</li>
											<li>1 cup granulated sugar</li>
											<li>½ cup brown sugar</li>
											<li>2 teaspoons pure vanilla extract</li>
											<li>2 large eggs</li>
											<li>2 egg yolks</li>
											<li>1 cup + 2 tablespoons whole milk</li>
							        	</ul>
										<p><b>Peanut Butter Frosting:</b></p>
							        	<ul>
											<li>1 1/2 cups unsalted butter, softened</li>
											<li>4 ounces cream cheese, softened</li>
											<li>3/4 cup smooth peanut butter</li>
											<li>5 1/2 to 6 cups confectioners sugar</li>
											<li>1/4 to 1/3 cup milk</li>
											<li>1 teaspoon vanilla extract</li>
							        	</ul>
										<p><b>Caramel Popcorn:</b></p>
							        	<ul>
											<li>about 5 cups popped popcorn</li>
											<li>1/2 cup unsalted peanuts</li>
											<li>1/4 cup unsalted butter</li>
											<li>1/4 cup Beehive Golden Syrup</li>
											<li>1/2 cup brown sugar</li>
											<li>1/2 teaspoon salt</li>
											<li>1/2 teaspoon baking soda</li>
											<li>1/2 teaspoon ground cinnamon</li>
											<li>1 teaspoon vanilla extract</li>
											<li>extra sea salt for sprinkling (optional)</li>
							        	</ul>
										<p><b>Salted Caramel Sauce (for drizzling and assembling):</b></p>
							        	<ul>
											<li>1/2 cup sugar</li>
											<li>2 tablespoons Beehive Golden Syrup</li>
											<li>1 tablespoon water</li>
											<li>1/3 cup heavy cream,</li>
											<li>1 tablespoon unsalted butter</li>
											<li>1/2 teaspoon sea salt, or to taste</li>
							        	</ul>
							        </div>
							      </div>
							    </div>
							    <div class="panel panel-default">
							      <div class="panel-heading">
							        <h4 class="panel-title">
							          <a data-toggle="collapse" data-parent="#accordion" href="#popcornCakecollapse2">Directions <span class="caret"></span></a>
							        </h4>
							      </div>
							      <div id="popcornCakecollapse2" class="panel-collapse collapse">
							        <div class="panel-body">
										<p><b>Brown Butter:</b></p>
										
										<p>Place the butter in a small saucepan over medium heat until melted.</p>
										
										<p>Continue to cook, while stirring, until the milk solids on the bottom of the pan begin to brown and the butter is fragrant and nutty (about 5 minutes).</p>
										
										<p>Transfer the butter (including the browned bits at the bottom) to a glass bowl and place in the freezer for about 15 minutes, or until it just begins to firm up back up.</p>
										
										<p><b>For the Cake:</p></b>
										<P>Preheat oven to 350 degrees.  Grease and flour three 6-inch cake pans and set aside.</p>
											
										<p>Whisk together the dry ingredients and set aside.</p>
										
										<p>In the bowl of an electric mixer, beat together the browned butter and both sugars on medium speed for about 3 to 4 minutes until light and fluffy.</p>
										
										<p>With the mixer on low, add in the vanilla and eggs – one at a time.</p>
										
										<p>In alternating batches (beginning and ending with the dry ingredients), add in the flour mixture and the milk while the mixer runs on low speed.  Be sure to incorporate each ingredient before adding in the next batch.</p>
										
										<p>Mix the batter on medium speed no more than 20 to 30 seconds once the last traces of flour disappear.</p>
										
										<p>Evenly distribute between the pans and bake until a toothpick inserted into the center comes out clean (about 30 to 35 minutes).</p>
										
										<p>Cool on a wire rack for about 15 minutes before removing the cakes from their pans.</p>
										
										<p><b>Peanut Butter Frosting:</p></b>
										<p>Using an electric mixer, beat the butter and cream cheese together until smooth.</p>
										
										<p>Add in the peanut butter and mix until smooth.</p>
										
										<p>With the mixer on low, gradually add in the remaining ingredients.</p>
										
										<p>Once incorporated, increase the speed to medium and mix until smooth.</p>
										
										<p>Add in more milk or sugar until desired consistency is reached.</p>
										
										<p><b>Caramel popcorn:</p></b>
										<p>Pre-heat oven to 250 degrees.</p>
										
										<p>Stir together the popped popcorn and peanuts.</p>
										
										<p>Spread out on a parchment-line rimmed baking sheet and set aside.</p>
										
										<p>In a medium saucepan, melt the butter over medium heat.</p>
										
										<p>Stir in the corn syrup and sugar with a wooden spoon.</p>
										
										<p>Turnt he heat up to medium-high.</p>
										
										<p>Stirring constantly, bring to a boil. Boil for about 4 minutes.</p>
										
										<p>Remove form the heat and immediately stir in the salt, baking soda, cinnamon, and vanilla.</p>
										
										<p>Quickly but carefully, pour the caramel over the popcorn mixture - taking care to stir and evenly coat the popcorn and peanuts.</p>
										
										<p>Spread out into an even layer and bake for about 45 to 60 minutes, stirring every 15 minutes.</p>
										
										<p>Remove from the oven and let rest until cool enough to handle.</p>
										
										<p>Pile on top of the cake before serving,  Use salted caramel sauce to help stick together, if necessary.</p>
										
										<p><b>Salted Caramel Sauce:</p></b>
										<p>Place the sugar, syrup, and water in a small saucepan over high heat.</p>
										
										<p>Bring the sugar mixture to a boil and cook without stirring until the mixture reaches about 350 degrees on a candy thermometer.</p>
										
										<p>Once it reaches this temperature and turns a medium amber color, remove from the heat.</p>
										
										<p>Slowly (and carefully) whisk in the cream (the mixture will bubble up a bit, so use caution).</p>
										
										<p>Whisk in the butter until melted.</p>
										
										<p>Transfer the caramel to a heat-safe container and stir in the salt.</p>
										
										<p>Let cool until slightly thickened.</p>
										
										<p><b>Assembly:</p></b>
										<p>Once the cakes have cooled, trim to level off the tops if necessary.</p>
										
										<p>Place the bottom layer on a cake stand or serving dish.  Spread on about ¾ cup of the peanut butter frosting with a small offset spatula.</p>
										
										<p>Top with the next layer of cake and repeat.</p>
										
										<p>Crumb coat the cake with the frosting and chill to set in the refrigerator for about 15 minutes.</p>
										
										<p>Frost the cake with the remaining frosting.</p>
										
										<p>Garnish the top of the cake with a generous amount of caramel popcorn.</p>
										
										<p>Once the caramel sauce has cooled and thickened (but not solid), use to help hold the caramel popcorn in place and let drip over the edges of the cake.</p>
										
										<p>To serve, carefully remove some of the caramel popcorn in order to cut the cake.   Serve with any remaining caramel popcorn, if desired.</p>
										

							        </div>
							      </div>
							    </div>
							    <div class="panel panel-default">
							      <div class="panel-heading">
							        <h4 class="panel-title">
							          <a data-toggle="collapse" data-parent="#accordion" href="#popcornCakecollapse3">Notes <span class="caret"></span></a>
							        </h4>
							      </div>
							      <div id="popcornCakecollapse3" class="panel-collapse collapse">
							        <div class="panel-body">
										<p>The cake layers are extremely moist and tender, especially straight from the oven.  To make them a bit more stable and easier to frost, wrap cooled cakes in a double layer of plastic and chill in the refrigerator for an hour or so, or up to three days.</p>
										
										<p>Caramel popcorn may be made up to a week in advanced.</p>
										
										<p>Caramel sauce may be made up to a week in advance and stored in the refrigerator.  Reheat before assembling the cake.</p>
										
										<p>Store any extra caramel popcorn in an airtight container for about a week.  The recipe may be doubled, should you wish to make a big batch (using half for the cake and the rest for snacking or gifting!)</p>
										
										<p>Likewise, leftover peanut butter frosting may be stored in an airtight container in the refrigerator for about a week.  Use to slather between cookies or graham crackers for a sweet treat!</p>
										
										<p>Instead of using three 6-inch cake pans, the brown butter cake may also be baked in two 8 or 9-inch cake pans.  Bake times may vary.</p>
										

							        </div>
							      </div>
							    </div>
							  </div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section>
			<div id="saltyChocolateCake" class="container recipe">
				<div class="row">
					<div class="col-xs-12 col-md-6">
						<img src="img/sweet-salty-choc-cake(1)_sq.jpg" alt="Sassy, Sweet, and Salty Chocolate Cake">
					</div>
					<div class="col-xs-12 col-md-6">
						<p class="recipeTitle">Sassy, Sweet, and Salty Chocolate Cake</p>
						<!-- <div id="recipeDetail">
							<div id="timeDiv">
								<div class="time"><img src="img/clockIcon.png"><p>Prep Time:  20 mins</p></div>
								<div class="time"><img src="img/clockIcon.png"><p>Cook Time:  30 mins</p></div>
								<div class="time"><img src="img/clockIcon.png"><p>Total Time:  50 mins</p></div>
							</div>
						</div> -->
						<div id="procedure">
							<div class="panel-group" id="accordion">
							    <div class="panel panel-default">
							      <div class="panel-heading">
							        <h4 class="panel-title">
							          <a data-toggle="collapse" data-parent="#accordion" href="#saltyChocolatecollapse1">Ingredients <span class="caret"></span></a>
							        </h4>
							      </div>
							      <div id="saltyChocolatecollapse1" class="panel-collapse collapse">
							        <div class="panel-body">
										<p><b>Cake:</b></p>
							        	<ul>
											<li>1 cup (2 sticks) unsalted butter, cut into pieces, plus more for baking dish</li>
											<li>2 cups all-purpose flour, plus more for baking dish</li>
											<li>1/4 cup unsweetened cocoa powder</li>
											<li>2 cups sugar</li>
											<li>1 teaspoon baking soda</li>
											<li>1 teaspoon kosher salt</li>
											<li>2 large eggs</li>
											<li>1/2 cup buttermilk</li>
											<li>1 teaspoon vanilla extract</li>

							        	</ul>
										<p><b>Frosting:</b></p>
							        	<ul>
											<li>1/4 cup (1/2 stick) unsalted butter</li>
											<li>3 tablespoons whole milk</li>
											<li>2 tablespoons unsweetened cocoa powder</li>
											<li>1 1/2 cups powdered sugar</li>
											<li>1 teaspoon vanilla extract</li>
											<li>1/2 cup chopped unsalted, roasted pistachios</li>
											<li>1 teaspoon flaky sea salt (such as Maldon)</li>
							        	</ul>
							        </div>
							      </div>
							    </div>
							    <div class="panel panel-default">
							      <div class="panel-heading">
							        <h4 class="panel-title">
							          <a data-toggle="collapse" data-parent="#accordion" href="#saltyChocolatecollapse2">Directions <span class="caret"></span></a>
							        </h4>
							      </div>
							      <div id="saltyChocolatecollapse2" class="panel-collapse collapse">
							        <div class="panel-body">
										<p><b>Cake:</b></p>

										<p>Preheat oven to 350°. Butter and flour a 13x9" baking dish. Bring cocoa powder, 1 cup butter, and 1 cup water to a boil in a small saucepan; remove from heat.</p>
										<p>Meanwhile, whisk sugar, baking soda, salt, and 2 cups flour in a medium bowl. Make a well in the center. Add eggs, buttermilk, and vanilla to well. Blend with a fork, then gradually incorporate dry ingredients. Add butter mixture and whisk until smooth. Scrape batter into prepared baking dish and smooth top.</p>
										<p>Bake until cake starts to pull away from edges of dish and a tester inserted into the center comes out clean, 35–40 minutes. Transfer pan to a wire rack.</p>
										
										<p><b>Frosting:</b></p>

										<p>Just before cake has finished baking, heat butter, milk, and cocoa powder in a medium saucepan over low heat, whisking occasionally, until butter is melted and mixture is smooth (do not let boil). Remove from heat and whisk in powdered sugar and vanilla.</p>
										<p>Pour warm frosting over warm cake and spread out and smooth with an offset spatula. Top with pistachios and sea salt.</p>
										<p>Serve slightly warm or room temperature.</p>



							        </div>
							      </div>
							    </div>
							    <div class="panel panel-default">
							      <div class="panel-heading">
							        <h4 class="panel-title">
							          <a data-toggle="collapse" data-parent="#accordion" href="#saltyChocolatecollapse3">Notes <span class="caret"></span></a>
							        </h4>
							      </div>
							      <div id="saltyChocolatecollapse3" class="panel-collapse collapse">
							        <div class="panel-body">
										<p>No notes for this recipe.</p>
										

							        </div>
							      </div>
							    </div>
							  </div>
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