<!DOCTYPE html>
<html lang="en">
<?php

include ('db.php');

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
<link>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="x-ua-compatible" content="ie=edge">

<title>Home - Inkly</title>
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
</link>

</head>


<body class="pt-0 home-agency-creative">


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
	<header id="header-section" class="header-section sticky-header text-white clearfix" style="margin-bottom: 200px !important;">
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
					<?php
					$req1 =  "select * from menu ";
					$query1 = mysqli_query($conn, $req1);
					while ($enreg1 = mysqli_fetch_array($query1)) {
						$path = $enreg1["path"];
						$title = $enreg1["title"];
					?>
						<li class="">
							<a href="<?php echo $path ?>"><?php echo $title ?></a>
						</li>
					<?php } ?>
				</ul>
			</div>
		</div>



		<div class="overlay"></div>
	</div>
	<!-- header-section - end
		================================================== -->