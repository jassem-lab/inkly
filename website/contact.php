<?php
include('db.php');

// Get the service ID from the URL
$mail = "";
$url = "";
$Signature = "";
$nom = "";
$logo = "";
$tel1 = "";
$tel2 = "";
$tel3 = "";
$mail1 = "";
$mail2 = "";
$mail3 = "";
$adresse = "";
$adresse2 = "";
$linkedin = "";
$facebook = "";
$instagram = "";
$twitter = "";
$behance = "";
$title = "";
$path = "";

$req = "select * from parametres where id = 1";
$query = mysqli_query($conn, $req);
while ($enreg = mysqli_fetch_array($query)) {
	$mail = $enreg["mail"];
	$url = $enreg["url"];
	$signature = $enreg["signature"];
	$nom = $enreg["nom"];
	$logo = $enreg["logo"];
	$tel1 = $enreg["tel1"];
	$tel2 = $enreg["tel2"];
	$adresse = $enreg["adresse"];
	// $linkedin = $enreg["linkedin"];
	$twitter = $enreg["twitter"];
	$facebook = $enreg["facebook"];
	$instagram = $enreg["instagram"];
	$behance = $enreg["behance"];
}

?>
<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">

	<title>Contact - Inkly</title>
	<link rel="shortcut icon" href="attachment/Export/favicon.png">

	<!-- css include -->
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/fontawesome-all.css">
	<link rel="stylesheet" type="text/css" href="assets/css/icomoon.css">
	<link rel="stylesheet" type="text/css" href="assets/css/animate.css">
	<link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/owl.theme.default.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/magnific-popup.css">
	<link rel="stylesheet" type="text/css" href="assets/css/jquery-ui.css">
	<link rel="stylesheet" type="text/css" href="assets/css/aos.css">

	<!-- custom - css include -->
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">

</head>


<body>


	<!-- backtotop - start -->
	<div id="thetop"></div>
	<div id="backtotop">
		<a href="#" id="scroll">
			<i class="far fa-arrow-up"></i>
		</a>
	</div>
	<!-- backtotop - end -->

	<!-- preloader - start -->
	<div id="preloader"></div>
	<!-- preloader - end -->


	<!-- header-section - start
		================================================== -->
	<header id="header-section" class="header-section sticky-header clearfix">
		<div class="container">
			<div class="row align-items-center">

				<div class="col-lg-4">
					<div class="brand-logo">
						<a href="index.php">
							<img src="images/logo.png" alt="logo_not_found">
						</a>
						<div class="mobile-menu-btns float-right ul-li-right">
							<ul class="clearfix">

								<li>
									<button type="button" class="menu-btn">
										<span></span>
										<span></span>
										<span></span>
									</button>
								</li>
							</ul>
						</div>
					</div>
				</div>

				<div class="col-lg-8">
					<nav class="main-menu ul-li-right clearfix">
						<ul class="clearfix">
							<li class="">
								<a href="index.php">Home</a>
							</li>
							<li class="">
								<a href="portfolio.php">Réalisations</a>
							</li>
							<li class="menu-item-has-child">
								<a href="#!">Services</a>
								<ul class="submenu">
									<?php
									$sql = "select id, title from services";
									$result = $conn->query($sql);

									if ($result->num_rows > 0) {
										while ($row = $result->fetch_assoc()) {
											echo '<li><a href="service_detail.php?id=' . $row['id'] . '">' . $row['title'] . '</a></li>';
										}
									} else {
										echo "0 results";
									}
									?>
								</ul>
							</li>
							<li class="">
								<a href="about-us.php">Inkly</a>
							</li>
							<li class="">
								<a href="blog.php">Actualités</a>
							</li>
							<li class="">
								<a href="contact.php">Contact</a>
							</li>
							<li class="">
								<a href="devis.php">Devis</a>
							</li>
						</ul>
					</nav>
				</div>

			</div>
		</div>
	</header>

	<div class="sidebar-menu-wrapper">
		<div id="sidebar-menu" class="sidebar-menu">
			<span class="close-btn"><i class="fal fa-times"></i></span>

			<div id="menu-list" class="menu-list ul-li-block clearfix">
				<ul class="clearfix">
					<li class="">
						<a href="intex.php">Home</a>
					</li>
					<li class="">
						<a href="portfolio.php">Réalisations</a>
					</li>
					<li class="menu-item-has-child">
						<a href="#!">Services</a>
						<ul class="submenu">
							<?php
							$sql = "select id, title from services";
							$result = $conn->query($sql);

							if ($result->num_rows > 0) {
								while ($row = $result->fetch_assoc()) {
									echo '<li><a href="service_detail.php?id=' . $row['id'] . '">' . $row['title'] . '</a></li>';
								}
							} else {
								echo "0 results";
							}
							?>
						</ul>
					</li>
					<li class="">
						<a href="about-us.php">Inkly</a>
					</li>
					<li class="">
						<a href="blog.php">Actualités</a>
					</li>
					<li class="">
						<a href="contact.php">Contact</a>
					</li>
					<li class="">
						<a href="devis.php">Devis</a>
					</li>
				</ul>
			</div>
		</div>



		<div class="overlay"></div>
	</div>
	<!-- header-section - end
		================================================== -->


	<!-- breadcrumb-section - start
			================================================== -->
	<section id="breadcrumb-section" class="breadcrumb-section sec-ptb-100 text-center bg-light-gray clearfix">
		<div class="container">
			<h2 class="page-title mb-30" data-aos="fade-up" data-aos-delay="100">Contact</h2>
			<div class="breadcrumb-nev ul-li-center clearfix" data-aos="fade-up" data-aos-delay="300">
				<ul class="clearfix">
					<li><a href="index.php"><i class="fas fa-home mr-1"></i>Home</a></li>
				</ul>
			</div>
		</div>
	</section>
	<!-- breadcrumb-section - end
			================================================== -->



	<!-- service-section - start
			================================================== -->
	<section id="service-section" class="service-section sec-ptb-100 text-center clearfix">
		<div class="container">



			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<div class="service-default plr-30" data-aos="fade-up" data-aos-delay="300">
						<span class="item-icon">
							<img src="assets/images/icons/icon_14.png" alt="image_not_found">
						</span>
						<h3 class="item-title">Head Quarter</h3>
						<p class="mb-0">
							Your bones don't break, mine do. That's clear. Your cells react to bacteria and viruses differently than mine.
						</p>
					</div>
				</div>

				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<div class="service-default plr-30" data-aos="fade-up" data-aos-delay="500">
						<span class="item-icon">
							<img src="assets/images/icons/icon_15.png" alt="image_not_found">
						</span>
						<h3 class="item-title">Phone Numbers</h3>
						<p class="mb-0">
							Your bones don't break, mine do. That's clear. Your cells react to bacteria and viruses differently than mine.
						</p>
					</div>
				</div>

				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<div class="service-default plr-30" data-aos="fade-up" data-aos-delay="700">
						<span class="item-icon">
							<img src="assets/images/icons/icon_16.png" alt="image_not_found">
						</span>
						<h3 class="item-title">Emails & Support</h3>
						<p class="mb-0">
							Your bones don't break, mine do. That's clear. Your cells react to bacteria and viruses differently than mine.
						</p>
					</div>
				</div>
			</div>

		</div>
	</section>
	<!-- service-section - end
			================================================== -->



	<!-- contact-section - start
			================================================== -->
	<section id="contact-section" class="contact-section sec-ptb-100 clearfix">
		<div class="container">

			<div class="row justify-content-center mb-60">
				<div class="col-lg-6 col-md-7 col-sm-9" data-aos="fade-up" data-aos-delay="100">
					<div class="section-title text-center size-increase">
						<h2 class="title-text mb-0">Let’s create creativity projects together</h2>
					</div>
				</div>
			</div>

			<form id="contact_form" action="mail.php" method="POST">
				<div class="row justify-content-center" data-aos="fade-up" data-aos-delay="300">
					<div class="col-lg-4">
						<div class="form-item">
							<input type="text" name="name" placeholder="Full Name">
						</div>
					</div>

					<div class="col-lg-4">
						<div class="form-item">
							<input type="email" name="email" placeholder="Email Address">
						</div>
					</div>

					<div class="col-lg-4">
						<div class="form-item">
							<input type="text" name="website" placeholder="Website">
						</div>
					</div>

					<div class="col-lg-12">
						<div class="form-item">
							<textarea name="message" placeholder="Comment"></textarea>
						</div>
					</div>
				</div>
				<div class="text-center" data-aos="fade-up" data-aos-delay="500">
					<button type="submit" class="btn" value="submit">Thank You</button>
				</div>
			</form>

		</div>
	</section>
	<!-- contact-section - end
			================================================== -->

	<!-- map-section - start
			================================================== -->
	<div id="map-section" class="map-section clearfix">
		<!-- <div id="google-map" class="google-map" data-aos="fade-up" data-aos-delay="100">
					<div id="googleMaps"></div>
				</div> -->
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d286.2836498250334!2d10.58046809317627!3d35.7279458876916!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x130275759ac9d10d%3A0x698e3915682cef7d!2sSousse!5e0!3m2!1sen!2stn!4v1737728383301!5m2!1sen!2stn" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
		<!-- <div id="mapBox" data-lat="40.701083" data-lon="-74.1522848" data-zoom="10" data-info="PO Box CT16122 Collins Street West, Victoria 8007, Australia." data-mlat="40.701083" data-mlon="-74.1522848"> -->
	</div>
	</div>
	<!-- map-section - end
			================================================== -->


	</main>
	<!-- main body - end
		================================================== -->
	<?php include 'headers/footer.php' ?>