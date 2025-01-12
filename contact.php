<?php include 'headers/navbar.php'?>


		<!-- main body - start
		================================================== -->
		<main>


			<!-- breadcrumb-section - start
			================================================== -->
			<section id="breadcrumb-section" class="breadcrumb-section sec-ptb-100 text-center bg-default-black text-white clearfix">
				<div class="container mt-5">
					<h2 class="page-title mb-30 mt-30" data-aos="fade-up" data-aos-delay="100">Get in Touch</h2>
					<div class="breadcrumb-nev ul-li-center clearfix" data-aos="fade-up" data-aos-delay="300">
						<ul class="clearfix">
							<li><a href="index.php"><i class="fas fa-home mr-1"></i>Home</a></li>
							<li><i class="fas fa-chevron-circle-right mr-1"></i> Contact Us</li>
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

					<div class="row justify-content-center">
						<div class="col-lg-7 col-md-8 col-sm-9" data-aos="fade-up" data-aos-delay="100">
							<div class="section-title size-increase">
								<h2 class="title-text mb-0">
									After coming into contact with a religious man I always feel I must wash my hands.
								</h2>
							</div>
						</div>
					</div>

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


			<!-- map-section - start
			================================================== -->
			<div id="map-section" class="map-section clearfix">
				<!-- <div id="google-map" class="google-map" data-aos="fade-up" data-aos-delay="100">
					<div id="googleMaps"></div>
				</div> -->

				<div id="mapBox" data-lat="40.701083" data-lon="-74.1522848" data-zoom="10" data-info="PO Box CT16122 Collins Street West, Victoria 8007, Australia." data-mlat="40.701083" data-mlon="-74.1522848">
				</div>
			</div>
			<!-- map-section - end
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


		</main>
		<!-- main body - end
		================================================== -->
		<?php include 'headers/footer.php' ?>

