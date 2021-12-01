<?php


session_start();

if (!isset($_SESSION['username'])) {
	header('location:login.php');
	# write your code here...

}
?>
<!DOCTYPE html>
<html>

<head>
	<link href="https://fonts.googleapis.com/css?family=Aleo" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
	<title>Jobify</title>
	<!----magnific popup css file for work section -->
	<link rel="stylesheet" type="text/css" href="css/magnific-popup.css">

	<!----owlcarousel css file for our team section -->
	<link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="css/owl.theme.default.min.css">


	<!----Linking google fonts-->
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">

	<!----font-awsome start-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!----font-awsome ends-->

	<!----css file link-->
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<!----favicon setting-->
	<link rel="shortcut icon" type="text/css" href="img/mylogo.png">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!----magnific popup js file for work section -->
	<script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>

	<!----owlcarousel js file for our team section -->
	<script type="text/javascript" src="js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="js/owl.carousel.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"></script>

	<!----------email notification-------->

	<!-- <link rel="stylesheet" href="assets/tether/tether.min.css">
 
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css"> -->

	<style type="text/css">
		.servicebody {}


		body {
			font-family: Arial, Helvetica, sans-serif
		}

		h1 {
			margin-bottom: 40px
		}

		label {
			color: black
		}

		.btn-send {
			font-weight: 300;
			text-transform: uppercase;
			letter-spacing: 0.2em;
			width: 60%;
			margin-left: 3px
		}

		.help-block.with-errors {
			color: #ff5050;
			margin-top: 5px
		}

		.card {
			margin-left: 10px;
			margin-right: 10px
		}

		html {
			scroll-behavior: smooth;
		}

		.slider {
			width: 100%;
			height: 100vh;
			background-image: url("img_m/home.png");
			background-size: cover;
			background-position: center;
		}

		.slider-overlay {
			width: 100%;
			height: 100%;
			background: rgba(0, 0, 0, 0.6);
		}

		.slider-content {

			color: white;
			position: absolute;
			top: 30%;
			width: 100%;

		}

		.icons .fa {
			font-size: 40px;
			margin-right: 7px;
		}

		.sub-heading {
			font-family: 'Courier New', Courier, monospace;
			font-size: x-large;
			font-weight: 600;
			text-shadow: #ff5050;
		}
	</style>

</head>

<body onload="myfunction()">
	<!---preloader starts	----->

	<div id="loading"></div>

	<!---preloader Ends	----->


	<!---Navigation Starts	----->

	<nav class="navbar navbar navbar-fixed-top">
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
					<li> <a href="#">Home</a></li>
					<li> <a href="#myservice_section">Our Service</a></li>
					<li> <a href="#work">Learn</a></li>
					<li> <a href="#our-members">Our Team</a></li>
					<li> <a href="#myfaq">FAQs</a></li>
					<li> <a href="#conus">Contact us</a></li>
					<li> <a href="logout.php" id="our-location" class="btn-success"><?php echo $_SESSION['username']; ?></a></li>
				</ul>
				<!------Navigation menus ends---->
			</div>
		</div>
	</nav>
	<!---Navigation Ends	----->

	<!---Slider Section starts	------->
	<section class="slider text-center " id="slider">
		<div class="slider-overlay">
			<div class="slider-content">
				<div class="icons">
					<i class="fa fa-apple"></i>
					<i class="fa fa-android"></i>
					<i class="fa fa-windows"></i>
				</div>
				<br>
				<div class="text">
					<!-- jquery typed effect -->

				</div>
				<div class="cta-div">
					<a href="#contactus" class="btn1">CONTACT US</a>
					<a href="#myservice_section" class="btn2">LEARN TODAY</a>
				</div>
			</div>
		</div>
	</section>

	<!---Slider Section ends------->

	<!---Login Start------->

	<div class="modal fade modal-dialog-centered" id="mymodal">
		<div class="modal-dialog ">
			<div class="modal-content">
				<h3 id="login-heading">Login</h3>

				<div class="modal-body">
					<div class="left-box">
						<form method="POST" action="validation.php">
							<div class="form-group">
								<label><i class="fa fa-user fa-2x"></i>Username</label>
								<input type="text" name="name" class="form-control">

								<label><i class="fa fa-lock fa-2x"></i>Password</label>
								<input type="password" name="password" class="form-control">
								<button id="btn-login" type="submit">Login</button>

							</div>
							<div class="register">
								<h2>Don't have an account?&nbsp<span id="create-account"><a href="signup.html"> Sign Up</span></a> </h2>
							</div>

						</form>
					</div>
					<div class="right-box">
						<span class="signinwith">Sign in With <br> Social Networks</span>

						<button class="social facebook">Log in with Facebook</button>
						<button class="social twitter">Log in with twitter</button>
						<button class="social google">Log in with gmail</button>
					</div>

				</div>


			</div>
		</div>
	</div>

	<!---Login Ends------->

	<!---Our Services Section Start------->

	<br><br>
	<div class="container-fluid servicebody" id="myservice_section">
		<div class="service-are" id="service">
			<div class="row">
				<div class="col-xs-12">
					<div class="section-title text-center">
						<h2><b>SERVICES</b></h2>
						<p>
							Here you will find all resources you need in your learning journey.
						</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="service-wrap text-center">
						<div class="service-icon">
							<i class="fa fa-leaf"></i>
						</div>
						<h3><a href="programming_articles.php">PROGRAMMING ARTICLES</a></h3>
						<p>
							Find all lecture materials like articles.
						</p>
					</div>
				</div>

				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="service-wrap text-center">
						<div class="service-icon">
							<i class="fa fa-laptop"></i>
						</div>
						<h3><a href="video_tutorials\java\display_video_courses.php">VIDEO LECTURES</a></h3>
						<p>
							Find all video lectures for programming lectures.
						</p>
					</div>
				</div>

				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="service-wrap text-center">
						<div class="service-icon">
							<i class="fa fa-question"></i>
						</div>
						<h3><a href="online_quizzes/quiz_home.php">Quizzes</a></h3> <!--  exercise/exercise.php -->
						<p>
							Find all necessary practice questions and quizzes.
						</p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="service-wrap text-center">
						<div class="service-icon">
							<i class="fa fa-star"></i>
						</div>
						<h3><a href="cv_gen">CV GENERATOR</a></h3>
						<p>
							Effortlessly make a job-worthy resume and that gets you hired faster.
						</p>
					</div>
				</div>

			</div>
		</div>
	</div>

	<section class="work" id="work"><br>
		<h2 id="work-heading" class="text-center" style="font-weight: bold;">Programming Tutorials & Quizzes</h2>
		<p class="text-center">Learn & Practice</p>
		<div class="container-fluid">
			<!---first row start-->
			<div class="row no-gutters">
				<div class="col-md-3 col-sm-3 col-xs-3">
					<div class="img-wrapper">
						<a href="./img_m/work1.png" title="Tutorials Photo">
							<img src="./img_m/work1.png" class="img-responsive">
						</a>

					</div>

				</div>

				<div class="col-md-3 col-sm-3 col-xs-3">
					<div class="img-wrapper">
						<a href="./img_m/work2.png" title="Tutorials Photo">
							<img src="./img_m/work2.png" class="img-responsive">
						</a>

					</div>

				</div>

				<div class="col-md-3 col-sm-3 col-xs-3">
					<div class="img-wrapper">
						<a href="./img_m/work3.png" title="Tutorials Photo">
							<img src="./img_m/work3.png" class="img-responsive">
						</a>

					</div>

				</div>

				<div class="col-md-3 col-sm-3 col-xs-3">
					<div class="img-wrapper">
						<a href="./img_m/work4.png" title="Tutorials Photo">
							<img src="./img_m/work4.png" class="img-responsive">
						</a>

					</div>

				</div>



				<!---first row ends-->


				<!-------second row starts  --->

				<div class="col-md-3 col-sm-3 col-xs-3">
					<div class="img-wrapper">
						<a href="./img_m/work5.png" title="Tutorials Photo">
							<img src="./img_m/work5.png" class="img-responsive">
						</a>

					</div>

				</div>

				<div class="col-md-3 col-sm-3 col-xs-3">
					<div class="img-wrapper">
						<a href="./img_m/work6.png" title="Tutorials Photo">
							<img src="./img_m/work6.png" class="img-responsive">
						</a>

					</div>

				</div>

				<div class="col-md-3 col-sm-3 col-xs-3">
					<div class="img-wrapper">
						<a href="./img_m/work7.png" title="Tutorials Photo">
							<img src="./img_m/work7.png" class="img-responsive">
						</a>

					</div>

				</div>

				<div class="col-md-3 col-sm-3 col-xs-3">
					<div class="img-wrapper">
						<a href="./img_m/work8.png" title="Tutorials Photo">
							<img src="./img_m/work8.png" class="img-responsive">
						</a>

					</div>

				</div>



				<!---second row ends-->

			</div>



	</section>




	<!---Our Team Section Start------->
	<br><br><br>
	<div class="container text-center" id="our-members">
		<h2><b>OUR TEAM</b></h2>
		<p class="sub-heading">
			Reach out with any questions and we will try to answer them as quickly as possible.
		</p>
	</div>


	<div class="container">
		<div class="row m-5">
			<div class="col-md-12 m-5">
				<div id="team-memebers" class="owl-carousel owl-theme">
					<div class="team-member text-center">
						<img src="img_m/me_spacex2.jpg" style="height: 350px;width: 290px;" class="img-responsive">
						<div class="team-member-info text-center">
							<h4 class="team-member-name">Akhmadjon - Jon <br/>Muslimov - Timus</h4>
							<h4 class="team-member-designation">Team Lead & Developer</h4>
							<ul class="social-list">
								<li><a href="" class="social-icon icon-gray"><i class="fa fa-facebook"></i></a></li>
								<li><a href="" class="social-icon icon-gray"><i class="fa fa-twitter"></i></a></li>
								<li><a href="" class="social-icon icon-gray"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>


					<div class="team-member text-center">
						<img src="img_m/nudrat.jpg" style="height: 350px;width: 290px;" class="img-responsive">
						<div class="team-member-info text-center">
							<h4 class="team-member-name">Nudrat Nawal</h4>
							<h4 class="team-member-designation">Developer</h4>
							<ul class="social-list">
								<li><a href="" class="social-icon icon-gray"><i class="fa fa-facebook"></i></a></li>
								<li><a href="" class="social-icon icon-gray"><i class="fa fa-twitter"></i></a></li>
								<li><a href="" class="social-icon icon-gray"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>


					<div class="team-member text-center">
						<img src="img_m/Feng.jpeg" style="height: 350px;width: 290px;" class="img-responsive">
						<div class="team-member-info text-center">
							<h4 class="team-member-name">Jiang Feng</h4>
							<h4 class="team-member-designation">Developer</h4>
							<ul class="social-list">
								<li><a href="" class="social-icon icon-gray"><i class="fa fa-facebook"></i></a></li>
								<li><a href="" class="social-icon icon-gray"><i class="fa fa-twitter"></i></a></li>
								<li><a href="" class="social-icon icon-gray"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>


					<div class="team-member text-center">
						<img src="img_m/rahul.jpeg" style="height: 350px;width: 290px;" class="img-responsive">
						<div class="team-member-info text-center">
							<h4 class="team-member-name">Rahul Shirolkar</h4>
							<h4 class="team-member-designation">Developer</h4>
							<ul class="social-list">
								<li><a href="" class="social-icon icon-gray"><i class="fa fa-facebook"></i></a></li>
								<li><a href="" class="social-icon icon-gray"><i class="fa fa-twitter"></i></a></li>
								<li><a href="" class="social-icon icon-gray"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>


					<div class="team-member text-center">
						<img src="img_m/harsh.jpg" style="height: 350px;width: 290px;" class="img-responsive">
						<div class="team-member-info text-center">
							<h4 class="team-member-name">Harsh Antwani</h4>
							<h4 class="team-member-designation">Developer</h4>
							<ul class="social-list">
								<li><a href="" class="social-icon icon-gray"><i class="fa fa-facebook"></i></a></li>
								<li><a href="" class="social-icon icon-gray"><i class="fa fa-twitter"></i></a></li>
								<li><a href="" class="social-icon icon-gray"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>



	<!---Our Team Section Ends------->
	<!-- =============================================================================================================================== -->




	<!-- =============================================================================================================================== -->
	<!---FAQs Section Start------->

	<br><br><br>
	<section class="faq" id="myfaq">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<h2><b>FAQs</b></h2>
					<div class="sub-heading">
						<p>
							Commonly Asked Questions
						</p>

					</div>
				</div>

			</div>
		</div> <br><br><br>
		<div class="container">
			<div class="row">
				<div class="col-md-7">
					<div class="panel-group" id="accordian">


						<?php

						$con = mysqli_connect('localhost', 'root');
						if (!$con) {
							die('connection failed' . mysqli_connect_error());
						}

						mysqli_select_db($con, 'jobify_database');

						$sql = "select * from faq";
						$result = mysqli_query($con, $sql);
						while ($row = mysqli_fetch_array($result)) {
						?>

							<div class="panel panel-default">
								<div class="panel-heading" id="headingOne">
									<h4 class="panel-title">
										<a href="#<?php echo $row['id']; ?>" data-toggle="collapse" class="collapse" data-parent="#accordian"><?php echo $row['faq_title']; ?></a>
									</h4>
								</div>
								<div id="<?php echo $row['id']; ?>" class="panel-collapse collapse " aria-labelledby="headingOne">
									<div class="panel-body">
										<p>
											<?php echo $row['faq_description']; ?>
										</p>
									</div>
								</div>
							</div>

						<?php } ?>



						<div class="panel panel-default">
							<div class="panel-heading" id="headingTwo">
								<h4 class="panel-title">
									<a href="#collapseTwo" class="collapsed" data-toggle="collapse" data-parent="#accordian">What's it all about?</a>
								</h4>
							</div>
							<div id="collapseTwo" class="panel-collapse collapse" aria-labelledby="headingTwo">
								<div class="panel-body">
									<p>
										Jobify is an online E-learning website <br>
										Here, you can learn programming languages, read articles and improve your coding skills.
									</p>
								</div>
							</div>
						</div>

					</div>
				</div>

				<div class="freeimage" id="meimg">
					<div class="col-md-2 col-md-offset">
						<img src="img_m/FAQs.svg">
					</div>
				</div>

			</div>
		</div>


	</section>


	<!---FAQs Section Ends------->


	<!---Contact us Section Start------->


	<!------ Include the above in your HEAD tag ---------->
	<div class="bg bg-success">
		<div class="container-fluid servicebody" id="conus">
			<div class=" text-center mt-5">
				<h1 class="sub-heading">CONTACT US</h1>
			</div>
			<form action="mailto:axm9757@mavs.uta.edu" method="post" enctype="text/plain">
				<div class="row ">
					<div class="col-lg-12 mx-auto bg-success ">
						<div class="card mt-2 mx-auto p-4 bg-light">
							<div class="card-body bg-light">
								<div class="container">
									<form id="contact-form" role="form">
										<div class="controls">
											<div class="row">
												<div class="col-md-6">
													<div class="form-group"> <label for="form_name">Firstname *</label> <input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter your firstname *" required="required" data-error="First name is required."> </div>
												</div>
												<div class="col-md-6">
													<div class="form-group"> <label for="form_lastname">Lastname *</label> <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Please enter your lastname *" required="required" data-error="Lastname is required."> </div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-6">
													<div class="form-group"> <label for="form_email">Email *</label> <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required."> </div>
												</div>
												<div class="col-md-6">
													<div class="form-group"> <label for="form_need">Please specify your need *</label> <select id="form_need" name="need" class="form-control" required="required" data-error="Please specify your need.">
															<option value="" selected disabled>--Select Your Issue--</option>
															<option>Can't watch videos</option>
															<option>Can't give the quizzes</option>
															<option>Can't generate the CV</option>
															<option>Other</option>
														</select> </div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-12">
													<div class="form-group"> <label for="form_message">Message *</label> <textarea id="form_message" name="message" class="form-control" placeholder="Write your message here." rows="4" required="required" data-error="Please, leave us a message."></textarea> </div>
												</div>
												<div class="col-md-6 "> <input type="submit" class="btn btn-success btn-send pt-2 mb-4  btn-block " value="Send Message"> </div>
												<br>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div> <!-- /.8 -->
					</div> <!-- /.row-->
				</div>
			</form>
		</div>
	</div>
	<!---Contact us Section Ends------->

	<!---footer Section Start	----->

	<!---footer Section Ends	----->

	<!---This is script section------->

	<script type="text/javascript">
		var preloader = document.getElementById('loading');

		function myfunction() {
			preloader.style.display = 'none';
		}


		function addButton() {
			var body = document.getElementsByTagName('body')[0];
			var myfaq1 = document.getElementById('myfaq');
			var btn = document.createElement('button');
			btn.innerHTML = 'jon';
			myfaq1.appendChild(btn);
			body.appendChild(myfaq);
		}
	</script>

	<script src="js/jquery.ripples-min.js" type="text/javascript"></script>
	<script src="js/typed.min.js" type="text/javascript"></script>
	<script src="js/main.js" type="text/javascript"></script>

	<!-- contact us start-->



	<!-- contact us end -->

	<!--   <script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/theme/js/script.js"></script> -->

</body>

</html>