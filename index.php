<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title></title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

	<link href="CSS/simple-sidebar.css" rel="stylesheet" type="text/css">
	<link href="CSS/style.css" rel="stylesheet" type="text/css">
</head>
<body>

	<div id="wrapper">
		<div id="sidebar-wrapper">
			<ul class="sidebar-nav">
				<li class="sidebar-brand">
					<a href="index.html">Home Page</a>
				</li>
				<li>
					<a href="about.html">About this website</a>
				</li>
				<li>
					<a href="gallery.html">Gallery</a>
				</li>
				<li>
					<a id="recipe-toggle" href="">Recipes<span class="dropup"><span class="caret"></span></span></a>

					<ul id="recipe-menu">
						<li><a href="differentRecipes/fishRecipes.html">Fish Recipes</a></li>
						<li><a href="differentRecipes/meatRecipes.html">Meat Recipes</a></li>
					</ul>
				</li>
				<li>
					<a href="vitamins.html">Vitamins</a>
				</li>
			</ul>
		</div>
		<!-- End of sidebar-wrapper-->

		<div id="page-content-wrapper">
			<div class="container-fluid">
				<!-- Menu toggle button -->
				<a href="#menu-toggle" class="btn btn-default btn-lg visible-xs visible-sm" id="menu-toggle">
					<span class="glyphicon glyphicon-align-justify" aria-hidden="true"></span>
				</a>

				<div class="row" id="search-bar-container">
					<div class="col-md-3 col-xs-12" id="search-bar">
						<div class="input-group">
							<input type="text" class="form-control" placeholder="Search for...">
							<span class="input-group-btn">
								<button class="btn btn-default" type="button">Seach</button>
							</span>
						</div>
					</div>
				</div>

				<div class="jumbotron" id="jumbotron-header">
					<h1>Welcome</h1>
					<h4>Put a short desciption here</h4>
				</div>

				<hr />

				<div class="row">
					<div class="col-md-12 col-xs-12">
						<div class="col-md-6 col-xs-12">
							<img class="image img-responsive" id="welcome-img" src="http://i.imgur.com/O1QP7H0.gif?1" alt="500x500">
						</div>
						<div class="col-md-6 col-xs-12">
							<div><p><?php include("r.txt") ?></p></div>
						</div>
					</div>
				</div>

				<hr />

				<div class="row">
					<div class="jumbotron" id="jumbotron-header">
						<h2>Latest Posts</h2>
						<div class="index-post"></div>
						<div class="index-post"></div>
						<div class="index-post"></div>
					</div>
				</div>
			</div>
			<!-- End of container-fluid -->
		</div>
		<!-- End of page-content-wrapper -->
	</div>
	<!-- End of wrapper -->


	<!-- jQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

	<script src="Javascript/main.js"></script>

</body>
</html>