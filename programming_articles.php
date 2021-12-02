<?php
session_start();

?>

<!DOCTYPE html>
<html>

<head>
	<title>Jobify</title>
	<!----css file link-->
	<link rel="stylesheet" type="text/css" href="css/programming.css">


	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


	<!----Linking google fonts-->
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">

	<!----font-awsome start-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<style type="text/css">
		.context-dark,
		.bg-gray-dark,
		.bg-primary {
			color: rgba(255, 255, 255, 0.8);
		}

		.footer-classic a,
		.footer-classic a:focus,
		.footer-classic a:active {
			color: #ffffff;
		}

		.nav-list li {
			padding-top: 5px;
			padding-bottom: 5px;
		}

		.nav-list li a:hover:before {
			margin-left: 0;
			opacity: 1;
			visibility: visible;
		}

		ul,
		ol {
			list-style: none;
			padding: 0;
			margin: 0;
		}

		.social-inner {
			display: flex;
			flex-direction: column;
			align-items: center;
			width: 100%;
			padding: 23px;
			font: 900 13px/1 "Lato", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
			text-transform: uppercase;
			color: rgba(255, 255, 255, 0.5);
		}

		.social-container .col {
			border: 1px solid rgba(255, 255, 255, 0.1);
			display: inline-block;
		}

		.nav-list li a:before {
			content: "\f14f";
			font: 400 21px/1 "Material Design Icons";
			color: #4d6de6;
			display: inline-block;
			vertical-align: baseline;
			margin-left: -28px;
			margin-right: 7px;
			opacity: 0;
			visibility: hidden;
			transition: .22s ease;
		}



		.div1 {
			width: 100%;
			height: 100%;
			background-color: #f2f2f2;
			padding: 10px;
			margin-top: 10px;
			margin-bottom: 10px;
			border-radius: 10px;
		}

		/* for title image*/
	</style>



</head>

<body>


	<!---Navigation Starts	----->


	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<!------Responsive Button---->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navi">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>


				</button>

				<h1 style="color: white;margin-top: 10px;" id="myhead">Jobify</h1>
			</div>
			<div class="collapse navbar-collapse" id="navi">
				<!------Navigation menus starts---->
				<ul class="nav navbar-nav navbar-right">
					<li> <a href="index.php">Home</a></li>
					<li> <a href="">Our Service</a></li>
					<li> <a href="">Works</a></li>
					<li> <a href="">Team</a></li>
					<li> <a href="">About</a></li>
					<li> <a href="" id="our-location" class="btn-success"><?php echo $_SESSION['username']; ?></a></li>
				</ul>
				<!------Navigation menus ends---->
			</div>
		</div>
	</nav>

	<div class="container-fluid  div1">

	</div>



	<!---programming languages Section Start	----->
	<br><br><br><br><br>
	<section class="latest-news-area" id="latest">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="section-title text-center">
						<h2><b>PROGRAMMING LANGUAGES</b></h2>
						<div class="sub-heading">
							Following are the available programming languages <br>
							Start learning today
						</div>
					</div>
				</div>
			</div>
			<br>



			<?php


			// session_start();

			$con = mysqli_connect('localhost', 'root');


			mysqli_select_db($con, 'jobify_database');

			$q = "select * from programming_languages";
			$query = mysqli_query($con, $q);
			while ($res = mysqli_fetch_array($query)) {

			?>

				<div class="col-md-4 col-sm-6 col-xs-12 content-border" style="margin-bottom: 10px;">
					<div class="latest-news-wrap">
						<div class="news-img">
							<img src="uploads/thumbnail/<?php echo $res['language_image']; ?> " class="img-responsive">
							<div class="deat">
								<span><?php echo $res['language_name']; ?></span>
							</div>
						</div>

						<div class="news-content">
							<p>
								<?php echo $res['language_description']; ?>
							</p><br>
							<a href="programming/java/java_programming.php?course_name=<?php echo $res['language_name'] ?>">Start Reading...</a>
						</div>
					</div>
				</div>



			<?php } ?>



		</div>

	</section>


	<!---programming languages Section ends	----->


	<!---footer Section Start	----->


	<footer class="section footer-classic context-dark bg-image" style="background: #2d3246;">
		<div class="container">
			<div class="row row-30">
				<div class="col-md-4 col-xl-5">
					<br />
					<div class="pr-xl-4"><a class="brand" href="./index.php"><img class="brand-logo-light" src="img_m/jobify.png" alt="Jobify" width="140" height="37" srcset="img_m/jobify.png 4x"></a>
						<p><br />Jobify is an awesome learning & practicing platform, focused on deliviring excelent open-source content and coressponding practise questions.</p>
					</div>
				</div>
				<!-- <div class="col-md-4 col-xl-3">
					<h5>Links</h5>
					<ul class="nav-list">
						<li><a href="#">About</a></li>
						<li><a href="#">Projects</a></li>
						<li><a href="#">Blog</a></li>
						<li><a href="#">Contacts</a></li>
						<li><a href="#">Pricing</a></li>
					</ul>
				</div> -->
			</div>
		</div>
		<div class="row no-gutters social-container center">
			<div class="col"><a class="social-inner" href="#"><span class="icon mdi mdi-facebook"></span><span>Facebook</span></a></div>
			<div class="col"><a class="social-inner" href="#"><span class="icon mdi mdi-instagram"></span><span>Instagram</span></a></div>
			<div class="col"><a class="social-inner" href="#"><span class="icon mdi mdi-twitter"></span><span>Twitter</span></a></div>
			<div class="col"><a class="social-inner" href="#"><span class="icon mdi mdi-youtube-play"></span><span>Google</span></a></div>
		</div>
	</footer>



	<!---footer Section Ends	----->


</body>

</html>