<!DOCTYPE html>
<html lang="en-US">


<?php include("php/head.php") ?>

<body class="sk__404-page dark-shade-1-bg static-simple-footer">

	<main id="primary" class="site-main">

		<div class="sk__logo-no-menu sk__fade-in-3 text-center">
			<img id="sk__main-logo" alt="Website logo." src="assets/images/logo-normal.png">
		</div>
		
		<div id="smooth-wrapper" class="pushable-content">
			<div id="smooth-content">


				<!-- Hero Section / Hero Slider
				================================================== -->
				<section class="sk__hero-section sk__fade-in-1 duration-10">
					<!-- Carousel -->
					<div id="sk__hero-carousel-slider" class="sk__static-carousel-slider carousel slide dark-shade-1-bg" style="background-color: #e8b621 !important">
				
						<!-- Slides -->
						<div class="carousel-inner">

							<!-- Slide 1 -->
							<div class="carousel-item zooming active hero-slide-1 sk__hero-slider-item sk__image-back-cover">
								<section class="sk__parallax-background-section sk__hero-item-center-center">
									<div class="sk__parallax-background-element sk__absolute sk__image-back-cover" style="background-image: url(assets/images/404-page.html);"></div>

									<div class="container flex-helper-div"></div>

									<!-- Hero content -->
									<div class="container sk__supercontainer sk__main-slide-content text-center">

										<div class="row">
											<div class="col-xl-10 offset-xl-1">
												<span class="animated-element phase-1"></span>
												<span class="animated-element phase-1"></span>
												<div class="cover-text-wrapper">
													<h2><span class="sk__404 animated-element phase-1">Come back soon!</span></h2>
												</div>
												<div class="cover-text-wrapper">
													<h2 class="h2-super thin animated-element phase-1">This page might  <span class="d-inline-block">be under construction</span></h2>
												</div>
												<div class="cover-text-wrapper">
													<p class="p-super animated-element phase-1 text-white">Try some of <span class="d-inline-block">the following destinations</span> to get back on track</p>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col">
												<p class="p-v2 text-white animated-element phase-1">

													<a href="index" class="me-3">home</a>
													<a href="about" class="me-3">about</a>
													<a href="contact" class="me-3">contact</a></p>
											</div>
										</div>

									</div>

									<!-- Social icons section -->
									<div class="container sk__supercontainer text-center">
										<div class="row">
											<div class="col col-md-6 offset-md-3 col-xl-4 offset-xl-4 px-0">
												<!-- Footer Social Icons Menu -->
												<section class="footer-socials-section mt-4">
													<h5 class="animated-element phase-1 mb-0 mb-sm-2">Follow Us</h5>
													<div class="footer-socials-inner">
														<div class="footer-socials animated-element phase-1 mb-0">
															<a class="social-icons" href="https://www.facebook.com/profile.php?id=61571841430199" target="_blank"><span><span class="icon-facebook1"></span></span></a>
															<a class="social-icons" href="https://www.instagram.com/oshireboutique" target="_blank"><span><span class="icon-instagram1"></span></span></a>
														</div>
													</div>
												</section>
											</div>
										</div>
									</div>

									<!-- Footer (inside hero)
									================================================== -->
									<div class="container sk__supercontainer position-relative">
										<footer class="sk__footer-simple">
						<div class="row footer-bottom">
							<div class="col-xs-12 col-sm-6 col-md-4 text-center text-sm-start">
								<h5>&copy; <span id="copyright-year"></span> Oshire Boutique</h5>
							</div>
							<div class="col-12 col-md-4 order-xs-3 order-sm-3 order-md-2 text-center text-sm-start text-md-center">
								<!--<p class="p-footer-copyright"></p>-->
							</div>
							<div class="col-xs-12 col-sm-6 col-md-4 order-sm-2 order-md-3 text-center text-sm-end">
								<a class="footer-bottom-right-links text-white" href="privacy-policy" target="_blank">Privacy Policy</a>
								<a class="footer-bottom-right-links text-white" href="contact" target="_blank">Contact</a>
							</div>
						</div>
										</footer>
									</div>

								</section>
							</div>
							<!-- /.hero-slide-1 -->
				
						</div>
						
					</div>
					<!-- /#sk__hero-carousel-slider -->
				</section>
				<!-- /.sk__hero-section -->
				
				<section class="sk__parallax-background-section sk__parallax-fixer-section sk__parallax-fixer-ignore-height overflow-hidden" style="max-height: 0;">
					<div class="sk__parallax-background-element"></div>
				</section>

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
    <script>
        document.getElementById("copyright-year").textContent = new Date().getFullYear();
    </script>
</body>


</html>