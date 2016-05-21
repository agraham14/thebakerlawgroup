<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Parallax backgrounds with centered content</title>
		<meta name="description" content="Parallax backgrounds with centered content">
		<meta charset="UTF-8">

		<!-- sets IE rendering to IE-EDGE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>

		<!-- sets viewport width to device width, scaling 1:1 -->
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
				integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css"
				integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

		<!-- fontawesome -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css">

		<!-- HTML5 shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<!-- OUR CUSTOM CSS -->
		<link rel="stylesheet" href="css/style.css" type="text/css">

		<!-- jQuery -->
		<script src="https://code.jquery.com/jquery-2.2.3.min.js"
				  integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo=" crossorigin="anonymous"></script>

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
				  integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
				  crossorigin="anonymous"></script>

		<!-- ADD YOUR JAVASCRIPT/JQUERY DOWN HERE -->

		<title>Hello Bootstrap</title>

		<link rel="stylesheet" href="css/style.css" type="text/css"/>
	</head>
	<body>
		<header>


			<nav class="navbar navbar-inverse no-margin">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
							  data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">The Baker Law Group</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">The Baker Law Group</a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="/">Home</a></li>
						<li><a href="/">Contact</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								aria-expanded="false">About Us <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="pages/jeffBaker.php">Jeff Baker</a></li>
								<li><a href="pages/renniZifferblatt.php">Renni Zifferblatt</a></li>
								<li role="separator" class="divider"></li>
								<li class="dropdown-header">Our Awesome Staff</li>
								<li><a href="pages/staff.php">Debbi</a></li>
								<li><img src="images/image002.jpg">One more separated link</img></li>

							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								aria-expanded="false">Practice Areas<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="#">Administrative</a></li>
								<li><a href="#">Arbitration | Mediation</a></li>
								<li><a href="#">Commercial Litigation</a></li>
								<li><a href="#">Employment</a></li>
								<li><a href="#">Environmental</a></li>
								<li><a href="#">Products, Civil and Liability</a></li>
							</ul>
						</li>
					</ul>

				</div>
			</nav>

		</header>


		<div class="fullscreen background parallax" style="background-image:url('http://www.minimit.com/images/picjumbo.com_IMG_6648.jpg');" data-img-width="1600" data-img-height="1064" data-diff="100">
			<div class="content-a">
				<div class="content-b">
					Centered content
				</div>
			</div>
		</div>

		<div class="not-fullscreen background parallax" style="background-image:url('http://www.minimit.com/images/picjumbo.com_IMG_6643.jpg');" data-img-width="1600" data-img-height="1064" data-diff="100">
			<div class="content-a">
				<div class="content-b">
					Centered content
				</div>
			</div>
		</div>

		<section class="not-fullscreen">
			<div class="content-a">
				<div class="content-b">
					Centered content
				</div>
			</div>
		</section>

		<div class="fullscreen background parallax" style="background-image:url('http://www.minimit.com/images/picjumbo.com_DSC_3274.jpg');" data-img-width="1600" data-img-height="1064" data-diff="100" data-oriz-pos="100%">
			<div class="content-a">
				<div class="content-b">
					Centered content
				</div>
			</div>
		</div>

		<section class="fullscreen">
			<div class="content-a">
				<div class="content-b">
					Centered content
				</div>
			</div>
		</section>

		<div class="fullscreen background parallax" style="background-image:url('http://www.minimit.com/images/picjumbo.com_IMG_9857.jpg');" data-img-width="1600" data-img-height="1064" data-diff="100">
			<div class="content-a">
				<div class="content-b">
					<br>Content overflow<br>Content overflow
					<br>Content overflow<br>Content overflow
					<br>Content overflow<br>Content overflow
					<br>Content overflow<br>Content overflow
					<br><br>
				</div>
			</div>
		</div>

		<div class="not-fullscreen background parallax" style="background-image:url('http://www.minimit.com/images/picjumbo.com_IMG_8697.jpg');" data-img-width="1600" data-img-height="1064" data-diff="100">
			<div class="content-a">
				<div class="content-b">
					Centered content
				</div>
			</div>
		</div>

		<section class="fullscreen">
			<div class="content-a">
				<div class="content-b">
					Centered content
				</div>
			</div>
		</section>

		<!-- include jQuery -->
		<script src="js/js.js"></script>

	</body>
</html>