<!DOCTYPE html>
<html lang="en-US">

<?php include("php/head.php") ?>


<body class="sk__elements-galleries-page">

	<main id="primary" class="site-main">

		<!-- Back to top button -->
		<div class="sk__back-to-top-wrap">
			<a class="sk__back-to-top" href="#smooth-content"><span class="sk__back-to-top"></span></a>
		</div>

		<!-- Navigation Menu
		================================================== -->
		<div class="sk__mobile-menu-bar"></div>

		<!-- Dynamically controlled with JS! -->
		<a class="sk__mobile-main-logo" href="#"><img alt="Website logo." src="assets/images/logo-normal.png"></a>

		<?php include("php/nav.php") ?>
		<!-- /.sk__menu -->

		
		<div id="smooth-wrapper" class="pushable-content">
			<div id="smooth-content">


				<!-- Heading - Classic gallery
				================================================== -->
				<section id="classic-gallery" class="sk__strip-header dark-shade-3-bg text-center" style="padding-top: 15vh !important; background-color: #e8b621 !important">
					<div class="container">
						<div class="row">
							<div class="col">
							    <h2 class="h2-super">Product/Pet Gallery</h2>
							    <h5 class="h5-large thin">Explore our curated collection of pet products — stylish, cozy, and made with love.</h5>
							</div>
						</div>
					</div>
				</section>


				<!-- Gallery Section
				================================================== -->
				<section class="sk__gallery-section sk__py-m  white-bg" style="padding-top: 5vh !important;">

					<div class="container sk__supercontainer">

						<div class="row mt-5">
							<div class="col-12 col-xl-8">

								<!-- Basic Gallery Slider -->
								<section class="sk__gallery-basic">

									<!-- Carousel -->
									<div id="sk__service-1-gallery-basic" class="carousel slide">
								
										<!-- Dots -->
										<div class="carousel-indicators">
											<button type="button" data-bs-target="#sk__service-1-gallery-basic" data-bs-slide-to="0" class="active"></button>
											<button type="button" data-bs-target="#sk__service-1-gallery-basic" data-bs-slide-to="1"></button>
											<button type="button" data-bs-target="#sk__service-1-gallery-basic" data-bs-slide-to="2"></button>
											<button type="button" data-bs-target="#sk__service-1-gallery-basic" data-bs-slide-to="3"></button>
											<button type="button" data-bs-target="#sk__service-1-gallery-basic" data-bs-slide-to="4"></button>
										</div>
								
										<!-- Slides -->
										<div class="carousel-inner">
											<div class="carousel-item active">
												<img src="assets/images/placeholder-long.png" alt="service-01-gallery-image-01">
												<div class="carousel-caption">
													<div class="carousel-caption-description">
														<p>Basic image gallery caption description.</p>
													</div>
												</div>
											</div>
											<div class="carousel-item">
												<img src="assets/images/placeholder-long.png" alt="service-01-gallery-image-02">
												<div class="carousel-caption">
													<div class="carousel-caption-description">
														<p>Basic image gallery caption description.</p>
													</div>
												</div>
											</div>
											<div class="carousel-item">
												<img src="assets/images/placeholder-long.png" alt="service-01-gallery-image-03">
												<div class="carousel-caption">
													<div class="carousel-caption-description">
														<p>Basic image gallery caption description.</p>
													</div>
												</div>
											</div>
											<div class="carousel-item">
												<img src="assets/images/placeholder-long.png" alt="service-01-gallery-image-04">
												<div class="carousel-caption">
													<div class="carousel-caption-description">
														<p>Basic image gallery caption description.</p>
													</div>
												</div>
											</div>
											<div class="carousel-item">
												<img src="assets/images/placeholder-long.png" alt="service-01-gallery-image-05">
												<div class="carousel-caption">
													<div class="carousel-caption-description">
														<p>Basic image gallery caption description.</p>
													</div>
												</div>
											</div>
										</div>
								
										<!-- Arrows -->
										<button class="carousel-control-prev" data-bs-target="#sk__service-1-gallery-basic" data-bs-slide="prev">
											<span class="carousel-control-prev-icon" aria-hidden="true"></span>
											<span class="visually-hidden">Previous</span>
										</button>
										<button class="carousel-control-next" data-bs-target="#sk__service-1-gallery-basic" data-bs-slide="next">
											<span class="carousel-control-next-icon" aria-hidden="true"></span>
											<span class="visually-hidden">Next</span>
										</button>
								
									</div>
									<!-- /#sk__service-1-gallery-basic -->

								</section>
								<!-- /.sk__gallery-basic -->

							</div>
<div class="col-12 col-xl-4 sk__project-body-info-col mt-5 mt-xl-0 text-center text-sm-start">

    <h5 class="text-black">Meet Luna (PLACEHOLDER)</h5>
    <p class="text-black">Luna is one of our happiest furry friends — she loves her cozy sweaters from Oshire, plush toys, and peanut butter treats. Her tail wags say it all! Our boutique is all about comfort, style, and joy — just like Luna.</p>
    <a class="btn btn-outline-darkeryellow" href="contact" role="button">Contact Us</a>

    <div class="row">
        <div class="col-12 col-sm-6">
            <h5 class="text-black">Favorite Products</h5>
            <p class="p-xs text-black">Luna adores our hand-knit sweaters, ultra-soft beds, and gourmet treat packs made with natural ingredients.</p>
        </div>
        <div class="col-12 col-sm-6">
            <h5 class="text-black">Why Pets Love Us</h5>
            <p class="p-xs text-black">At Oshire, we believe pets deserve luxury too. From comfort to care, we offer thoughtfully curated items for every furry personality.</p>
        </div>
    </div>

</div>

						</div>

					</div>

				</section>
				<!-- /.sk__gallery-section -->





				<!-- Footer
				================================================== -->
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
    <script>
        document.getElementById("copyright-year").textContent = new Date().getFullYear();
    </script>
</body>
</html>