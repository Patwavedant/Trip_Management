<?php
if(!isset($_SESSION)) 
{
    session_start();
     $id = $_SESSION['U_id'];
}

include('../dbconnect.php');
?>
<!DOCTYPE html>
 <html class="no-js">
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Travel &mdash; 100% Free Fully Responsive HTML5 Template by FREEHTML5.co</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />
	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
	<!-- Animate.css --><link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts--><link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  --><link rel="stylesheet" href="css/bootstrap.css">
	<!-- Superfish --><link rel="stylesheet" href="css/superfish.css">
	<!-- Magnific Popup --><link rel="stylesheet" href="css/magnific-popup.css">
	<!-- Date Picker --><link rel="stylesheet" href="css/bootstrap-datepicker.min.css">
	<!-- CS Select --><link rel="stylesheet" href="css/cs-select.css">
	<link rel="stylesheet" href="css/cs-skin-border.css">
	<link rel="stylesheet" href="style.css">
  <!-- Modernizr JS --><script src="js/modernizr-2.6.2.min.js"></script>
	</head>

	<body>
		<div id="fh5co-wrapper">
		<div id="fh5co-page">

		<header id="fh5co-header-section" class="sticky-banner">
			<div class="container">
				<div class="nav-header">
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
					<h1 id="fh5co-logo"><a href="index.html"><i class="icon-airplane"></i>Travel</a></h1>
					<!-- START #fh5co-menu-wrap -->
					<nav id="fh5co-menu-wrap" role="navigation">
						<ul class="sf-menu" id="fh5co-primary-menu">
							<li class="active"><a href="index.html">Home</a></li>
							<li><a href="blog.html">Blog</a></li>
							<li><a href="contact.html">Contact</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</header>

		<!-- end:header-top -->

		<div id="fh5co-tours" class="fh5co-section-gray">
			<div class="container">

				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
						<h3 align="center">Welcome <?=$_SESSION['U_name'] ?></h3>
						<hr>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
					</div>
				</div>

				<?php

				$query = "SELECT trip.t_id,trip.t_name,trip.t_image from trip INNER JOIN traveller on traveller.Tr_id = trip.t_id WHERE traveller.U_id='$id'";
				$result = mysqli_query($connection,$query);
				?>
				<?php
				while($rows = mysqli_fetch_assoc($result))
				 {
				?>
				<div class="row">
					<div class="col-md-4 fh5co-tours animate-box" data-animate-effect="fadeIn">
						<div href="#">
							<!--<img src="images/place-1.jpg" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive"> <?php echo $rows['t_name'] ?>-->
								<img src="images/<?php echo $rows['t_image'];?>"  height="250" width="300" >
								<div class="desc">
										<span></span>
										<h3><?php echo $rows['t_name'];?></h3>
										<!--<span class="price">$1,000</span>-->
										<a class="btn btn-primary btn-outline" name="btn" onclick="location.href='./view_trip.php?tripId=<?php echo $rows['t_id']?>'">View Trip<i class="icon-arrow-right22"></i></a>
								</div>
						</div>
					</div>
				<?php
				}
				?>
				<div class="col-md-12 text-center animate-box">
						<p><a class="btn btn-primary btn-outline btn-lg" onclick="location.href='addtrip.php'">Create New Trip<i class="icon-arrow-right22"></i></a></p>
					</div>

				</div>
			</div>
		</div>

	</div>
</div>


	<!-- END fh5co-page -->
	<!-- END fh5co-wrapper -->

	<!-- jQuery -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/sticky.js"></script>

	<!-- Stellar -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Superfish -->
	<script src="js/hoverIntent.js"></script>
	<script src="js/superfish.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Date Picker -->
	<script src="js/bootstrap-datepicker.min.js"></script>
	<!-- CS Select -->
	<script src="js/classie.js"></script>
	<script src="js/selectFx.js"></script>

	<!-- Main JS -->
	<script src="js/main.js"></script>

	</body>
</html>
