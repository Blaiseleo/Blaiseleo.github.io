<!DOCTYPE html>

<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

	<head>
		<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="HandheldFriendly" content="true">
		
		<title> Homepage </title>

		<link rel="icon" type="image/png" href="img/Water_52px.png" />
		
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/slideshow.css" />
		<link rel="stylesheet" type="text/css" href="css/responsive.css" />	
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/font-awesome.css" />
		<link rel="stylesheet" href="css/animate.css" />
	</head>

	<style type="text/css">
		/* Loader (for some reason it doesn't work well in the css file) */
		.loader {
		  background: #323232 repeat scroll 0 0;
		  bottom: 0;
		  height: 100%;
		  left: 0;
		  position: fixed;
		  right: 0;
		  top: 0;
		  width: 100%;
		  z-index: 9999;
		}

		.loader_inner {
		  background-image: url("img/loading.gif");
		  background-size: cover;
		  background-repeat: no-repeat;
		  background-position: center center;
		  height: 80px;
		  width: 80px;
		  margin-top: -40px;
		  margin-left: -40px;
		  left: 50%;
		  top: 50%;
		  position: absolute;
		}
	</style>

	<!-- onload="setTimeout('subscribe_newsLetter()', 8000)" -->
	<body >
		<!--[if lt IE 7]>
		<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
		<![endif]-->

		<!-- LOADER -->
		<div class="loader">
			<div class="loader_inner"></div>
		</div>
		<!-- END LOADER --> 

		<!-- NAVBAR -->
		<nav class="navbar navbar-default navbar-fixed-top animated fadeInDown" style="background: white; border-top: 1px solid #ccc;">
			<a class="navbar-brand" href="#" style="font-size: 0.9em;"> <img src="img/Water_52px.png"> GO <font color="#019e18">GREEN</font></a>
			<div class="navbar-container">
				<div id="navbar-content" class="text-center animated fadeInUp">
					<a onclick="document.getElementById('navbar-content').style.display='none'" class="navbar-close"><i class="fa fa-times"></i></a>
					<ul style="margin-top: 15em;">
						<li><a href="index.php" class="btn btn-block animated fadeIn">HOME</a></li>
						<li><a href="about.php" class="btn btn-block animated fadeIn">ABOUT ME</a></li>
						<li><a href="archieve.php" class="btn btn-block animated fadeIn">ARCHIEVE</a></li>
						<li><a href="contact.php" class="btn btn-block animated fadeIn">CONTACT US</a></li>
					</ul>
				</div>

				<a onclick="document.getElementById('navbar-content').style.display='block'" class="pull-right"><i class="fa fa-navicon" style="cursor: pointer; font-size: 1.8em; margin: 0.5em 2em 0 0; color: black;"></i></a>
			</div>
		</nav>
		<!-- END NAVBAR -->

		<!-- HEADER JUMBOTRON -->
		<div class="jumbotron-container text-center animated fadeInUp" id="home" style="background: url('img/new-products-517538482-1920x1080.jpg') no-repeat center; background-size: 100% 100%;">
			<video controls src="img/1.mp4" id="video"></video>
			<div class="jumbotron-overlay" id="jumbotron-overlay"></div>

			<img src="img/Circled Play_50px.png" id="playvid" />
			<div class="jumbotron-content" id="jumbotron-content">
				<h1 class="animated fadeInDown">GO GREEN CONSULTANCY</h1>
				<span>
					<a href="#" class="animated fadeIn"><i class="fa fa-youtube"></i></a>
					<a href="#" class="animated fadeIn"><i class="fa fa-twitter"></i></a>
					<a href="#" class="animated fadeIn"><i class="fa fa-instagram" style="margin-right: 0em;"></i></a>
				</span>
			</div>
		</div>
		<!-- END HEADER JUMBOTRON -->

		<!-- SERVICES -->
		<div class="container text-center">
			<div class="row">
				<div class="col-md-4 col-sm-4">
					<div class="service1 wow fadeInUp" style="background: url('img/poster.jpg') no-repeat center; background-size: 100%;">
						<p style="padding-top: 1em;">AGRICULTURAL DEVELOPMENT EXPERTS</p>
					</div>
					<p class="service1-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt adipisicing elit.</p>
				</div>
				<div class="col-md-4 col-sm-4">
					<div class="service2 wow fadeInUp" style="background: url('img/10.jpg') no-repeat center; background-size: 100%;">
						<p style="padding-top: 7em; color: red; font-weight: bold;">STRONG MARKETING ANALYSIS</p>
					</div>
					<p class="service2-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt adipisicing elit.</p>
				</div>
				<div class="col-md-4 col-sm-4">
					<div class="service3 wow fadeInUp" style="background: url('img/11.jpg') no-repeat center; background-size: 100%;">
						<p style="padding-top: 10em;">EXPERIENCE AND PRECISION</p>
					</div>
					<p class="service3-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt adipisicing elit.</p>
				</div>

				<div class="services-content col-md-12 text-left">
					<div class="services-content1 col-md-6 col-sm-6 wow fadeInLeft">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							<br><br>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							<br><br>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat.</p>
					</div>

					<div class="services-content2 col-md-6 col-sm-6 col-xs-12 wow fadeInRight">
						<div class="col-md-12 col-sm-12">
							<img src="img/Positive Dynamic_96px_2.png" class="pull-left">
							<h4>75 Years Experience.</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat.</p>
						</div>

						<div class="col-md-12 col-sm-12 col-xs-12">
							<img src="img/User Group Man Man_104px.png" class="pull-left">
							<h4>Client Care and Attention.</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- END SERVICES -->

		<!-- WHAT WE OFFER -->
		<div class="offer-container container text-center">
			<div class="row">
				<h3>What We Offer</h3>
				<p>Specialist in the game with more than 75 years experience</p>
				<hr width="20%">
				<div class="col-md-12">
					<div class="col-md-6 col-sm-6 wow fadeInUp">
						<div class="offer-img" style="background: url(img/max-ciociola-1.jpg) no-repeat center; background-size: 100% 100%;">
							<p style="padding-top: 6em; font-weight: bold; color: red;">MARKET RESEARCH</p>
						</div>
						<p class="offer-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt adipisicing elit. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut.</p>
					</div>

					<div class="col-md-6 col-sm-6 wow fadeInUp">
						<div class="offer-img" style="background: url(img/noticia_115761.jpg) no-repeat center; background-size: 100% 100%;">
							<p style="padding-top: 6em; font-weight: bold; color: white;">STRUCTURED ASSESSMENT</p>
						</div>
						<p class="offer-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt adipisicing elit. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut.</p>
					</div>
				</div>
			</div>
		</div>
		<!-- END WHAT WE OFFER -->

		<!-- LATEST NEWS -->
		<div class="latest-news-container" style="background: #fafafa;">
			<div class="container text-center" style="margin-top: 10em;">
				<div class="row">
					<h3>Latest News</h3>
					<p>Keep up with our Most Recent Consulting News</p>
					<hr width="20%">
					<div class="col-md-12">
						<div class="col-md-6 col-sm-6 wow fadeInUp">
							<div class="latest-news-img" style="background: url(img/a1r004-meeting-people-for-the-first-time_tcm32-289816.jpg) no-repeat center; background-size: 100% 100%;"></div>
							<h4>Achieving the Highest Success for Clientele</h4>
							<p class="latest-news-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt adipisicing elit. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut.</p>
						</div>

						<div class="col-md-6 col-sm-6 wow fadeInUp">
							<div class="latest-news-img" style="background: url(img/new-products-517538482-1920x1080.jpg) no-repeat center; background-size: 100% 100%;"></div>
							<h4>A Smooth Process for Best Finacial Investment</h4>
							<p class="latest-news-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt adipisicing elit. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- END LATEST NEWS -->

		<!-- CONTACT -->
		<div class="container wow pulse">
			<div class="contact">
				<div class="row">
					<h2 class="text-center">Contact our Agency</h2>
					<p class="text-center">Visit one of our agency locations or Contact us today</p>
					<form class="contact-form">
						<div class="form-group col-md-6">
							<label>First Name</label>
							<input type="text" placeholder="First name" class="form-control">
						</div>
						<div class="form-group col-md-6">
							<label>Last Name</label>
							<input type="text" placeholder="Last name" class="form-control">
						</div>

						<div class="form-group col-md-6">
							<label>Your Email</label>
							<input type="email" placeholder="Email" class="form-control">
						</div>
						<div class="form-group col-md-6">
							<label>Your Number</label>
							<input type="email" placeholder="Number" class="form-control">
						</div>

						<div class="form-group col-md-6">
							<label>How can we help?</label>
							<select class="form-control">
								<option value="male">Request a consultation</option>
								<option value="female">Female</option>
								<option value="other">Other</option>
							</select>
						</div>
						<div class="form-group col-md-6">
							<label>What's your budget?</label>
							<select class="form-control">
								<option value="male">$1000 - $2000</option>
								<option value="female">Female</option>
								<option value="other">Other</option>
							</select>
						</div>
						
						<div class="form-group col-md-6">
							<label>Tell us about your need</label>
							<textarea type="text" placeholder="Brief Description" class="form-control"></textarea>
						</div>
						<button type="submit" class="btn btn-block btn-success">Submit</button>
					</form>
				</div>
			</div>
		</div>
		<!-- END CONTACT -->

		<!-- MAP -->
		<div id="map" class="wow fadeInUp"></div>

		<!-- FOOTER -->
		<footer class="footer text-center">
			<div class="container">
				<div class="footer-content">
					<a class="footer-brand" href="#" style="font-size: 1.3em;"> <img src="img/Water_52px.png"> GO <font color="#019e18">GREEN</font></a>
					<p>We are ready to take your next business ventures to great heights.<br>
					Go on, pick up the phone. Let's talk big bussiness baby!</p>
					<span>
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-google"></i></a>
						<a href="#"><i class="fa fa-linkedin"></i></a>
					</span>
				</div>
			</div>
		</footer>
		<!-- END FOOTER -->
		
		<a href="#" class="cd-top scroll-up">Top</a>
	
		<script src="js/jquery.min.js" ></script>
		<script src="js/bootstrap.min.js" ></script>
		<script src="js/script.js"></script>
		<script src="js/wow.js"></script>
		<script async defer src="https://maps.googleapis.com/maps/api/js?key=AlzaSyBD-Mn1gnLT4GYWPTCzjku1atFY_-YG0t4&callback=initMap"></script>

		<script>
		//for bootstrap animate
		wow = new WOW(
		  {
		    animateClass: 'animated',
		    offset:       100
		  }
		);
		wow.init();
		</script>

	</body>
</html>