<?php include('headers/navbar.php') ?>


<!-- main body - start
		================================================== -->
<main>


    <!-- slider-section - start
			================================================== -->
    <section id="slider-section" class="slider-section clearfix">
        <div id="agency-default-carousel" class="agency-default-carousel owl-carousel owl-theme">
            <?php
            $req = "select * from slider";
            $query = mysqli_query($conn, $req);
            while ($enreg = mysqli_fetch_array($query)) {
                $id = $enreg["id"];
                $title = $enreg["title"];
                $content = $enreg["content"];

            ?>
                <div class="item bg-gray d-flex align-items-center">
                    <div class="container">
                        <div class="row align-items-center">

                            <div class="col-7">
                                <div class="slider-content">
                                    <h3 class="item-title">
                                        <?php echo $title;  ?>
                                    </h3>
                                    <p>
                                        <?php echo $content ?>
                                    </p>
                                    <a href="portfolio.php" class="btn">Our Portfolio</a>
                                </div>
                            </div>

                            <div class="col-5">
                                <div class="slider-image">
                                    <?php
                                    $i = 1;
                                    $req1 = "select * from slider_images where slider_id=" . $id;
                                    $query1 = mysqli_query($conn, $req1);
                                    while ($enreg1 = mysqli_fetch_array($query1)) {
                                        $slider = $enreg1["image_url"];
                                    ?>
                                        <div class="child-image child-image-<?php
                                                                            echo $i++;  ?>">
                                            <img src="../images/<?php echo $slider  ?>" alt="image_not_found">
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="absolute-social-wrap sec-ptb-60 pt-0">
                        <div class="container">
                            <div class="social-links-text ul-li clearfix">
                                <ul class="clearfix">
                                    <li><a href="<?php echo $facebook ?>">Facebook</a></li>
                                    <li><a href="<?php echo $tiktok ?>">TikTok</a></li>
                                    <li><a href="<?php echo $instagram ?>">Instagram</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>

        </div>
    </section>
    <!-- slider-section - end
			================================================== -->


    <!-- portfolio-section - start
			================================================== -->
    <section id="portfolio-section" class="portfolio-section sec-ptb-100 pt-0 text-center clearfix">
        <div class="container">

            <div class="section-title text-center mb-60" data-aos="fade-up" data-aos-delay="100">
                <h2 class="title-text mb-15">Our Works</h2>
                <p class="mb-0">Design is intelligence made visible</p>
            </div>

            <div class="masoney-grid mb-60">
                <div class="grid-sizer"></div>

                <div class="grid-item">
                    <a href="#!" class="portfolio-fullimage add-effect" data-aos="fade-up" data-aos-delay="100">
                        <img src="assets/images/portfolio/3_img_1.jpg" alt="image_not_found">
                        <span class="item-content-2">
                            <strong class="item-title">Creativia</strong>
                            <small class="item-brand">Branding</small>
                        </span>
                    </a>
                </div>

                <div class="grid-item">
                    <a href="#!" class="portfolio-fullimage add-effect" data-aos="fade-up" data-aos-delay="300">
                        <img src="assets/images/portfolio/3_img_2.jpg" alt="image_not_found">
                        <span class="item-content-2">
                            <strong class="item-title">Creativia</strong>
                            <small class="item-brand">Branding</small>
                        </span>
                    </a>
                </div>

                <div class="grid-item">
                    <a href="#!" class="portfolio-fullimage add-effect" data-aos="fade-up" data-aos-delay="500">
                        <img src="assets/images/portfolio/3_img_3.jpg" alt="image_not_found">
                        <span class="item-content-2">
                            <strong class="item-title">Creativia</strong>
                            <small class="item-brand">Branding</small>
                        </span>
                    </a>
                </div>

                <div class="grid-item">
                    <a href="#!" class="portfolio-fullimage add-effect" data-aos="fade-up" data-aos-delay="100">
                        <img src="assets/images/portfolio/3_img_5.jpg" alt="image_not_found">
                        <span class="item-content-2">
                            <strong class="item-title">Creativia</strong>
                            <small class="item-brand">Branding</small>
                        </span>
                    </a>
                </div>

                <div class="grid-item">
                    <a href="#!" class="portfolio-fullimage add-effect" data-aos="fade-up" data-aos-delay="300">
                        <img src="assets/images/portfolio/3_img_4.jpg" alt="image_not_found">
                        <span class="item-content-2">
                            <strong class="item-title">Creativia</strong>
                            <small class="item-brand">Branding</small>
                        </span>
                    </a>
                </div>

                <div class="grid-item">
                    <a href="#!" class="portfolio-fullimage add-effect" data-aos="fade-up" data-aos-delay="500">
                        <img src="assets/images/portfolio/3_img_6.jpg" alt="image_not_found">
                        <span class="item-content-2">
                            <strong class="item-title">Creativia</strong>
                            <small class="item-brand">Branding</small>
                        </span>
                    </a>
                </div>

                <div class="grid-item">
                    <a href="#!" class="portfolio-fullimage add-effect" data-aos="fade-up" data-aos-delay="100">
                        <img src="assets/images/portfolio/3_img_7.jpg" alt="image_not_found">
                        <span class="item-content-2">
                            <strong class="item-title">Creativia</strong>
                            <small class="item-brand">Branding</small>
                        </span>
                    </a>
                </div>

                <div class="grid-item">
                    <a href="#!" class="portfolio-fullimage add-effect" data-aos="fade-up" data-aos-delay="300">
                        <img src="assets/images/portfolio/3_img_8.jpg" alt="image_not_found">
                        <span class="item-content-2">
                            <strong class="item-title">Creativia</strong>
                            <small class="item-brand">Branding</small>
                        </span>
                    </a>
                </div>

                <div class="grid-item">
                    <a href="#!" class="portfolio-fullimage add-effect" data-aos="fade-up" data-aos-delay="500">
                        <img src="assets/images/portfolio/3_img_9.jpg" alt="image_not_found">
                        <span class="item-content-2">
                            <strong class="item-title">Creativia</strong>
                            <small class="item-brand">Branding</small>
                        </span>
                    </a>
                </div>
            </div>

            <div class="btn-wrap text-center clearfix" data-aos="fade-up" data-aos-delay="100">
                <a href="portfolio-gird-boxed.html" class="btn">View All Works</a>
            </div>

        </div>
    </section>
    <!-- portfolio-section - end
			================================================== -->


    <!-- service-section - start
			================================================== -->
    <section id="service-section" class="service-section sec-ptb-100 bg-light-gray clearfix">
        <div class="container">
            <div class="row mt--60">

                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="service-default" data-aos="fade-up" data-aos-delay="100">
                        <span class="serial-number">01.</span>
                        <h3 class="item-title">Branding</h3>
                        <p class="mb-0">
                            Your bones don't break, mine do. That's clear. Your cells react to bacteria and viruses differently than mine.
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="service-default" data-aos="fade-up" data-aos-delay="300">
                        <span class="serial-number">02.</span>
                        <h3 class="item-title">Development</h3>
                        <p class="mb-0">
                            Your bones don't break, mine do. That's clear. Your cells react to bacteria and viruses differently than mine.
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="service-default" data-aos="fade-up" data-aos-delay="500">
                        <span class="serial-number">03.</span>
                        <h3 class="item-title">UX Strategy</h3>
                        <p class="mb-0">
                            Your bones don't break, mine do. That's clear. Your cells react to bacteria and viruses differently than mine.
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="service-default" data-aos="fade-up" data-aos-delay="700">
                        <span class="serial-number">04.</span>
                        <h3 class="item-title">Business Solutions</h3>
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


    <!-- team-section - start
			================================================== -->
    <section id="team-section" class="team-section sec-ptb-100 clearfix">
        <div class="container">

            <div class="section-title text-center mb-30" data-aos="fade-up" data-aos-delay="100">
                <h2 class="title-text mb-15">Our Team</h2>
                <p class="mb-0">Popular cities around the country</p>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="team-fullimage text-center clearfix" data-aos="fade-up" data-aos-delay="100">
                        <img src="assets/images/team/img_1.jpg" alt="image_not_found">
                        <div class="item-content">
                            <div class="person-name">
                                <h3>Mohamed Arafa</h3>
                            </div>
                            <div class="person-title"><span>Mobile Developer</span></div>
                            <div class="social-links ul-li-center clearfix">
                                <ul class="clearfix">
                                    <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#!"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#!"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="team-fullimage text-center clearfix" data-aos="fade-up" data-aos-delay="300">
                        <img src="assets/images/team/img_2.jpg" alt="image_not_found">
                        <div class="item-content">
                            <div class="person-name">
                                <h3>Mohamed Arafa</h3>
                            </div>
                            <div class="person-title"><span>Mobile Developer</span></div>
                            <div class="social-links ul-li-center clearfix">
                                <ul class="clearfix">
                                    <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#!"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#!"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="team-fullimage text-center clearfix" data-aos="fade-up" data-aos-delay="500">
                        <img src="assets/images/team/img_3.jpg" alt="image_not_found">
                        <div class="item-content">
                            <div class="person-name">
                                <h3>Mohamed Arafa</h3>
                            </div>
                            <div class="person-title"><span>Mobile Developer</span></div>
                            <div class="social-links ul-li-center clearfix">
                                <ul class="clearfix">
                                    <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#!"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#!"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- team-section - end
			================================================== -->


    <!-- testimonial-section - start
			================================================== -->
    <div id="testimonial-section" class="testimonial-section sec-ptb-100 text-center clearfix" data-background="assets/images/backgrounds/bg_1.jpg">
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div id="testimonial-carousel-1" class="testimonial-carousel-1 owl-carousel owl-theme">

                <div class="item testimonial-fullwidth">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 col-md-9 col-sm-10 col-xs-12">
                            <div class="person-image">
                                <img src="assets/images/meta/img_1.jpg" alt="image_not_found">
                            </div>
                            <p class="mb-0">
                                Imagination What we can easily see is only a small percentage of what is possible. Logistics through innovation & dedication.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="item testimonial-fullwidth">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 col-md-9 col-sm-10 col-xs-12">
                            <div class="person-image">
                                <img src="assets/images/meta/img_2.jpg" alt="image_not_found">
                            </div>
                            <p class="mb-0">
                                Imagination What we can easily see is only a small percentage of what is possible. Logistics through innovation & dedication.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="item testimonial-fullwidth">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 col-md-9 col-sm-10 col-xs-12">
                            <div class="person-image">
                                <img src="assets/images/meta/img_1.jpg" alt="image_not_found">
                            </div>
                            <p class="mb-0">
                                Imagination What we can easily see is only a small percentage of what is possible. Logistics through innovation & dedication.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="item testimonial-fullwidth">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 col-md-9 col-sm-10 col-xs-12">
                            <div class="person-image">
                                <img src="assets/images/meta/img_2.jpg" alt="image_not_found">
                            </div>
                            <p class="mb-0">
                                Imagination What we can easily see is only a small percentage of what is possible. Logistics through innovation & dedication.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- testimonial-section - end
			================================================== -->


    <!-- blog-section - start
			================================================== -->
    <section id="blog-section" class="blog-section sec-ptb-100 clearfix">
        <div class="container">

            <div class="section-title text-center mb-30" data-aos="fade-up" data-aos-delay="100">
                <h2 class="title-text mb-15">Our Journal</h2>
                <p class="mb-0">Popular cities around the country</p>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="blog-grid clearfix" data-aos="fade-up" data-aos-delay="100">
                        <a href="#!" class="blog-image">
                            <img src="assets/images/blogs/img_1.jpg" alt="image_not_found">
                        </a>
                        <h3 class="item-title">
                            <a href="#!">
                                Great things are not accomplished who yield
                            </a>
                        </h3>
                        <div class="post-meta ul-li clearfix">
                            <ul class="clearfix">
                                <li>25 Feburary 2019</li>
                                <li><a href="#!">Fatima Mohamed</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="blog-grid clearfix" data-aos="fade-up" data-aos-delay="300">
                        <a href="#!" class="blog-image">
                            <img src="assets/images/blogs/img_2.jpg" alt="image_not_found">
                        </a>
                        <h3 class="item-title">
                            <a href="#!">
                                Great things are not accomplished who yield
                            </a>
                        </h3>
                        <div class="post-meta ul-li clearfix">
                            <ul class="clearfix">
                                <li>25 Feburary 2019</li>
                                <li><a href="#!">Fatima Mohamed</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="blog-grid clearfix" data-aos="fade-up" data-aos-delay="500">
                        <a href="#!" class="blog-image">
                            <img src="assets/images/blogs/img_3.jpg" alt="image_not_found">
                        </a>
                        <h3 class="item-title">
                            <a href="#!">
                                Great things are not accomplished who yield
                            </a>
                        </h3>
                        <div class="post-meta ul-li clearfix">
                            <ul class="clearfix">
                                <li>25 Feburary 2019</li>
                                <li><a href="#!">Fatima Mohamed</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- blog-section - end
			================================================== -->


    <!-- partners-section - start
			================================================== -->
    <div id="partners-section" class="partners-section sec-ptb-100 bg-light-gray clearfix">
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div id="partners-carousel" class="partners-carousel arrow-left-right owl-carousel owl-theme">

                <div class="item">
                    <a class="partner-logo" href="#!">
                        <img class="before-image" src="assets/images/partners/img_5.png" alt="image_not_found">
                        <img class="after-image" src="assets/images/partners/img_5.png" alt="image_not_found">
                    </a>
                </div>
                <div class="item">
                    <a class="partner-logo" href="#!">
                        <img class="before-image" src="assets/images/partners/img_6.png" alt="image_not_found">
                        <img class="after-image" src="assets/images/partners/img_6.png" alt="image_not_found">
                    </a>
                </div>
                <div class="item">
                    <a class="partner-logo" href="#!">
                        <img class="before-image" src="assets/images/partners/img_7.png" alt="image_not_found">
                        <img class="after-image" src="assets/images/partners/img_7.png" alt="image_not_found">
                    </a>
                </div>
                <div class="item">
                    <a class="partner-logo" href="#!">
                        <img class="before-image" src="assets/images/partners/img_8.png" alt="image_not_found">
                        <img class="after-image" src="assets/images/partners/img_8.png" alt="image_not_found">
                    </a>
                </div>

                <div class="item">
                    <a class="partner-logo" href="#!">
                        <img class="before-image" src="assets/images/partners/img_5.png" alt="image_not_found">
                        <img class="after-image" src="assets/images/partners/img_5.png" alt="image_not_found">
                    </a>
                </div>
                <div class="item">
                    <a class="partner-logo" href="#!">
                        <img class="before-image" src="assets/images/partners/img_6.png" alt="image_not_found">
                        <img class="after-image" src="assets/images/partners/img_6.png" alt="image_not_found">
                    </a>
                </div>
                <div class="item">
                    <a class="partner-logo" href="#!">
                        <img class="before-image" src="assets/images/partners/img_7.png" alt="image_not_found">
                        <img class="after-image" src="assets/images/partners/img_7.png" alt="image_not_found">
                    </a>
                </div>
                <div class="item">
                    <a class="partner-logo" href="#!">
                        <img class="before-image" src="assets/images/partners/img_8.png" alt="image_not_found">
                        <img class="after-image" src="assets/images/partners/img_8.png" alt="image_not_found">
                    </a>
                </div>

            </div>
        </div>
    </div>
    <!-- partners-section - end
			================================================== -->


</main>
<!-- main body - end
		================================================== -->

<?php include('headers/footer.php') ?>