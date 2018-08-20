<?php
	$mysqli = new mysqli('localhost', 'root', '', 'deya');
	
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $title = $mysqli->real_escape_string($_POST['title']);
        $subtitle = $mysqli->real_escape_string($_POST['title']);
        $author = $mysqli->real_escape_string($_POST['author']);
        $date = $mysqli->real_escape_string($_POST['date']);
        $description = $mysqli->real_escape_string($_POST['description']);
        
        $avatar_path = $mysqli->real_escape_string('img/'.$_FILES['picture']['name']);

        //make sure file type is image
        if (preg_match("!image!", $_FILES['picture']['type'])) {

            //copy image to img/users-image/ folder
            if (copy($_FILES['picture']['tmp_name'], $avatar_path)) {

                $sql = "INSERT INTO archieve (title, subtitle, author, date, description, picture) " . "VALUES ('$title','$subtitle','$author','$date','$description','$avatar_path')";

                // if the query is sucessfull, redirect to welcome.php page, done!
                if ($mysqli->query($sql) === true) {
                    $msg = "Added Content to the database";
                    //header("location: welcome.php");
                }
				
                else {
                    $msg = "Content could not be added to the database!";
                }
            }
            else {
                $msg = "File upload failed!";
            }
        }
        else {
           $msg = "Please only upload GIF, JPG, or PNG images";
        }

	}

	if(isset($_POST['delete']))
	{
		if(isset($_POST['id']))
		{				
			$id = $_POST['id'];
			 
			$sql2 = "DELETE FROM `archieve` WHERE id = $id";
			
			if ($mysqli->query($sql2) === true) {
					$msg="Deleted succesfully!";
				}
			else {
				$msg = "Not deleted!";
			}
		}
	}
?>
<html>
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
	<body class="admin">

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

		<div class="container">
			<div class="admin-header text-center">Admin Dashboard</div>
			<div class="container admin">
				<form action="admin.php" method="post" enctype="multipart/form-data" autocomplete="off" style="font-family: consolas;">
					<input type="text" class="form-control" placeholder="title" name="title"/>
					<input type="text" class="form-control" placeholder="subtitle" name="subtitle"/>
					<input type="text" class="form-control" placeholder="author" name="author"/>
					<input type="text" class="form-control" placeholder="date" name="date"/>
					<textarea type="text" class="form-control" rows="7" placeholder="Enter Description"
					name="description"></textarea>

					<div class="form-group" style="margin-top: 1em;">
						<label>Select your avatar: </label>
						<input type="file" name="picture" accept="image/*"/>
						<p class="help-block" style="color: #353243;">Only png and jpg allowed.</p>
					</div>

					<button type="submit" class="btn btn-block btn-primary" name="register"><font>Register</font></button>
					
					<input type="number" placeholder="Enter id to delete" name="id" style="padding:10px 10px 13px 10px;"/>
					<button type="submit" class="btn  btn-primary" name="delete"><font>Delete<font></button><br><br>
					<div>
						<?php if(isset($msg)){echo $msg;} ?>
					</div>
				</form>
			</div>
		</div>
		<div class="container">
			<?php 
				$mysqli = new mysqli('localhost', 'root', '', 'deya');//connect to database
				$sql = 'SELECT title, subtitle, author, date, picture, description FROM archieve';
				$result = $mysqli->query($sql);//$result = mysqli_result object
			?>
			<div id="registered">
				<p><h2 style="text-align: center; margin-top: 3em; font-family: consolas;">Website Info</h2></p><br><br>
				
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
				
			</div>
		</div>
	
	
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