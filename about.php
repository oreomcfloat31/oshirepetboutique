<!DOCTYPE html>
<html lang="en-US">


<?php include("php/head.php") ?>

<body class="sk__elements-parallax-content-page white-bg">

	<main id="primary" class="site-main">

		<!-- Back to top button -->
		<div class="sk__back-to-top-wrap">
			<a class="sk__back-to-top" href="#smooth-content"><span class="sk__back-to-top"></span></a>
		</div>

		<!-- Navigation Menu
		================================================== -->
		<div class="sk__mobile-menu-bar"></div>

		<!-- Dynamically controlled with JS! -->
		<a class="sk__mobile-main-logo" href="index"><img alt="Website logo." src="assets/images/logo-normal.png"></a>

		<?php include("php/nav.php") ?>

		
		<div id="smooth-wrapper" class="pushable-content">
			<div id="smooth-content">

				<section id="animated-counters-section" class="sk__strip-header dark-shade-3-bg " style="height: 2vh !important;">
					<div class="container">

					</div>
				</section>



				<!-- 
				<section class="sk__parallax-background-section sk__edge-beauty sk__py-xl sk__centered-y-section">

					<div class="sk__parallax-background-element sk__absolute sk__image-back-cover" style="background-image: url(assets/images/parallax-background-section-02.png);" data-sk-origin-x="left"></div>

					<div class="container sk__supercontainer">
						<div class="row">
							<div class="col-12 col-lg-6">
							</div>
							<div class="col-12 col-lg-6 sk__rectangles-right text-center text-sm-end">
						
								<div id="sk__parallax-layers-text-right" class="sk__rectangles-right-parallax-layers">
									<div data-depth="1.30" class="sk__absolute">
										<div class="sk__flex-center sk__absolute">
											<div class="sk__rectangles">
												<div class="sk__rectangle-white-1 sk__absolute"></div>
											</div>
										</div>
									</div>
									<div data-depth="0.70" class="sk__absolute">
										<div class="sk__flex-center sk__absolute">
											<div class="sk__rectangles">
												<div class="sk__rectangle-white-2 sk__absolute"></div>
											</div>
										</div>
									</div>
									<div data-depth="1.00" class="sk__absolute">
										<div class="sk__flex-center sk__absolute">
											<div class="sk__rectangles">
												<div class="sk__rectangle-black sk__absolute"></div>
											</div>
										</div>
									</div>
								</div>
								<h1 class="super-heading sk__clipped-text sk__gradient-back-v1 mb-sm-1"><span class="heading-deco"></span>About Us</h1>
								<h2 class="h2-regular">Oshire <strong>Pet</strong> Boutique</h2>
							</div>
						</div>

					</div>

				</section>
	-->

<!-- Half-screen Parallax Image Section (left)
================================================== -->
<section class="sk__halfscreen-section">
    <div class="container-fluid">
        <div class="row">
            <!-- Half-screen parallax image (left) -->
            <div class="col-12 col-xl-6 sk__halfscreen-parallax-image-col sk__parallax-container">
                <img class="sk__parallax-element-3" alt="Cute pet enjoying products" src="assets/images/halfscreen-parallax-img-1.png">
            </div>
            <!-- Half-screen text (right) -->
            <div class="col-12 col-xl-6 sk__halfscreen-text-col sk__flex-center-y text-center text-lg-start">
                <div class="sk__halfscreen-text-col-inner">
                    <div class="cover-text-wrapper">
                        <div class="fancy-gradient-text-box reveal-onscroll">
                        	<h1 class="super-heading phase-1 mb-0 oshire-gold">Oshire's Story</h1>
                            <!--<h3 class="h3-elegant sk__gradient-fancy-text">A Boutique with Heart</h3>-->
                        </div>
                    </div>
                    <h5 class="animated-element mw-660 text-black">Oshire was born from the simple idea that pets deserve the best—because they give us their best every single day.</h5>
                    <p class="animated-element mw-560 text-black">From handpicked accessories to wellness essentials, every item at Oshire Pet Boutique is chosen with love. We're not just a store—we're a community of pet lovers who care deeply about quality, comfort, and style for our furry friends.</p>
                    <a class="animated-element btn btn-outline-darkeryellow mt-3" href="gallery" role="button">Visit our Pet Gallery</a>
                </div>
            </div>
        </div>    
    </div>
</section>

<!-- Half-screen Parallax Image Section (right)
================================================== -->
<section class="sk__halfscreen-section">
    <div class="container-fluid">
        <div class="row">
            <!-- Half-screen parallax image (right) -->
            <div class="order-xl-2 col-12 col-xl-6 sk__halfscreen-parallax-image-col sk__parallax-container">
                <img class="sk__parallax-element-3" alt="Stylish pet accessories" src="assets/images/halfscreen-parallax-img-2.png">
            </div>
            <!-- Half-screen text (left) -->
            <div class="col-12 col-xl-6 sk__halfscreen-text-col sk__flex-center-y text-center text-lg-end">
                <div class="sk__halfscreen-text-col-inner">
                    <div class="cover-text-wrapper">
                        <div class="fancy-gradient-text-box reveal-onscroll">
                        	<h1 class="super-heading phase-1 mb-0 oshire-gold">Why Choose Oshire?</h1>
                            <!--<h3 class="h3-elegant sk__gradient-fancy-text">Why Choose Oshire?</h3>-->
                        </div>
                    </div>
                    <h5 class="animated-element mw-660 me-lg-0 ms-lg-auto text-black">We blend functionality, aesthetics, and ethical sourcing into everything we offer.</h5>
                    <p class="animated-element mw-560 me-lg-0 ms-lg-auto text-black">Our mission is to enhance the lives of pets and their people. Whether you're shopping for style, health, or just some extra tail wags—we’ve got you covered.</p>
                    <a class="animated-element btn btn-outline-darkeryellow mt-3" href="contact" role="button">Let’s Talk</a>
                </div>
            </div>
        </div>    
    </div>
</section>

				<!-- Heading - Parallax testimonials section
				================================================== -->
				<section id="testimonials-parallax-section" class="sk__strip-header text-center">
					<div class="container">
						<div class="row">
							<div class="col">
								<h2 class="h2-super oshire-gold">Visit Us Today!</h2>
							</div>
						</div>
					</div>
				</section>





				<?php include("php/footer.php") ?>

				<!-- Helper div for inserting before scripts
				================================================== -->
				<div class="sk__body-end"></div>

			</div>
			<!-- /#smooth-content -->

		</div>
		<!-- /#smooth-wrapper -->

	</main>
	<!-- /main#primary.site-main -->


	<!-- Scripts / Body End
	================================================== -->
	<!-- Vendor Scripts -->
	<script src="assets/vendor/bootstrap/5.1.3/bootstrap.min.js"></script>
	<script src="assets/vendor/offcanvas-nav/hc-offcanvas-nav.js"></script>
	<script src="assets/vendor/greensock/gsap.min.js"></script>
	<script src="assets/vendor/greensock/ScrollTrigger.min.js"></script>
	<script src="assets/vendor/greensock/ScrollSmoother.min.js"></script>
	<script src="assets/vendor/greensock/ScrollToPlugin.min.js"></script>
	<script src="assets/vendor/slick/1.8.1/slick.min.js"></script>
	<script src="assets/vendor/parallax/3.1.0/parallax.min.js"></script>

	

	<!-- Main Theme JS File -->
	<script src="assets/js/theme.js"></script>

	<!-- Theme Preview Only Scripts -->
	<script src="assets/vendor/spectrum/spectrum.min.js"></script>
	<script src="assets/vendor/clipboard/clipboard.min.js"></script>

	<!-- Theme Preview Only CSS -->
	<link href="assets/vendor/spectrum/spectrum.min.css" rel="stylesheet">

</body>
</html>