<?php 
	$mysqli = new mysqli('localhost', 'root', '', 'deya');//connect to database
	
	$sql = 'SELECT title, subtitle, author, date, picture, description FROM archieve';
	
	$result = $mysqli->query($sql);//$result = mysqli_result object

?>

<!DOCTYPE html>

<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

	<head>
		<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="HandheldFriendly" content="true">
		
		<title> Archieve </title>

		<link rel="icon" type="image/png" href="img/Water_52px.png" />
		
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/slideshow.css" />
		<link rel="stylesheet" type="text/css" href="css/responsive.css" />	
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/font-awesome.css" />
		<link rel="stylesheet" href="css/animate.css" />
	</head>

	<body style="background: #f4f4f4;">
		<!--[if lt IE 7]>
		<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
		<![endif]-->

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
		<div class="jumbotron text-center" style="background: #f4f4f4;" id="home">
			<div class="container header-jumbotron">
				<h1 class="animated pulse">ARCHIEVE</h1>
			</div>
		</div>
		<!-- END HEADER JUMBOTRON -->
		
		
		
		<!-- BODY -->

		<!-- RECENT POSTS -->
		
		<div class="container">
		
			<div class="row">

				<?php 
					while ($row = $result->fetch_assoc()) {
						echo "<div class='recent-news col-md-12'>
				
							<div class='col-md-9 col-sm-12 wow fadeInLeft'>
								<a href='#'' style='text-decoration: none;'><h2 style='margin-top: 2em;'>$row[title]</h2></a>
								<p>$row[subtitle]</p>
							</div>
							
							<div class='text-center col-md-3 col-sm-12 wow fadeInRight' style='border: 0px; '>
								<h5 style='margin-top: 4em; margin-left: 2em; font-weight:  bold;'>$row[date]</h5>
								<div>
									<cite>$row[author]</cite>
									<img class='img-circle' src='img/avatar.jpg'/>
								</div>
							</div>
							
						</div>
						
						<div class='recent-news-bigImage col-md-12' style='border: 1px solid #ccc; background: white; margin-bottom: 5em;'>
							<div>
								<img class='bigImage' src='$row[picture]' onclick='document.getElementById( 'imageModal1' ).style.display='block'' />
								<div id='imageModal1' class='modal'>
									<span onclick='document.getElementById( 'imageModal1' ).style.display='none'' class='closeModal' title='Close Modal' > &times; </span>

									<div class='modal-content'>
										<img src='img/ichigo-kurosaki-bleach.jpg' class='modalImage'>
									</div>

								</div>
							</div>
							<div style='height: auto;'>
								<p> $row[description] </p>
							</div>
							<div style='height: auto;'>
								<a class='btn btn-default' style='padding: 1.2em 2em; border-radius: 0;' >CONTINUE READING</a>
							</div>
						</div>";
					}
				?>
				
				<div style='height: auto;' class="text-center">
					<a href="admin.php" class='btn btn-default' style='padding: 1.2em 2em; border-radius: 0; margin-bottom: 5em;' >EDIT</a>
				</div>

			</div>
		
		</div>

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