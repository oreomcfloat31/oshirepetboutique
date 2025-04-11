<!DOCTYPE html>
<html lang="en-US">

<?php include("php/head.php") ?>

<body class="sk__homepage sk__home-combo-slider dark-shade-1-bg">

	<main id="primary" class="site-main">


		<!-- Back to top button -->
		<div class="sk__back-to-top-wrap">
			<a class="sk__back-to-top" href="#smooth-content"><span class="sk__back-to-top"></span></a>
		</div>

		<!-- Navigation Menu
		================================================== -->
		<div class="sk__mobile-menu-bar"></div>

		<!-- Mobile Menu Logo -->
		<a class="sk__mobile-main-logo" href="index"><img alt="Website logo." src="assets/images/logo-normal.png"></a>

		<?php include("php/nav.php") ?>

		
		<div id="smooth-wrapper" class="pushable-content">
			<div id="smooth-content">



				
				<!-- Header Section
				================================================== -->
				<section class="sk__news-header sk__parallax-container position-relative sk__header-t-m dark-shade-5-border">
					
					<img class="sk__parallax-element-3 sk__fade-in-1" src="assets/images/blogs-cover-section.png" alt="Blogs Cover Image">

					<div class="container sk__supercontainer">
						<div class="row text-center text-sm-start">
							<div class="col-12 mb-5">
								<div class="cover-text-wrapper">
									<div class="fancy-gradient-text-box">
										<h1 class="super-heading phase-1 mb-0 oshire-gold">Oshire Pet Boutique Blogs</h1>
										<!--<h1 class="super-heading sk__gradient-fancy-text">Oshire Pet Boutique Blogs</h1>-->
									</div>
								</div>
								<h2 class="h2-large sk__fade-in-6">Get the latest <strong>announcements here</strong>.</h2>
							</div>
						</div>
					</div>

				</section>
				<!-- /.sk__article-header -->

				<!-- News Body
				================================================== -->
<!-- News Body
================================================== -->
<section class="sk__blog-content sk__blog-main-content sk__blog-feed sk__blog-style-v1-magazine pt-5 sk__fade-in-9">
	<div class="container sk__supercontainer">
		<div class="row">

			<!-- Blog Feed Column
			================================================== -->
			<div class="col-12 sk__feed-col">

				<!-- Articles Wrapper
				================================================== -->
				<div class="d-flex sk__articles-wrapper">

					<!-- Article -->
					<div class="sk__blog-article-wrapper sk__fade-in-1">
						<div class="sk__article-magazine">
							<article class="post type-post format-standard has-post-thumbnail hentry">

								<div class="post-image">
									<span class="icon-pencil"></span>
									<div class="post-image-inner">
										<a href="oshire-grand-opening">
											<div class="sk__in-content-post-image" style="background-image: url(assets/images/new-website.png);"></div>
										</a>
									</div>
								</div>

								<div class="sk__post-info py-4">
									<header class="entry-header">
										<h4 class="entry-title narrow gradient-links-bright">
											<a href="oshire-grand-opening" rel="bookmark">Announcing Our Grand Opening!</a>
										</h4>
									</header>
									<p>Welcome to the new Oshire Pet Boutique website, where passion for pets meets top-quality service. Explore our platform to discover a seamless shopping experience and a wide variety of pet essentials and services.</p>
								</div>

							</article>
						</div>
					</div>

				</div>
				<!-- /.sk__articles-wrapper -->

			</div>
			<!-- /.sk__feed-col -->

		</div>
	</div>
</section>
				<section id="testimonials-parallax-section" class="sk__strip-header text-center" style="background-color: #ffffff !important;">
					<div class="container">
						<div class="row">
							<div class="col">
								<h2 class="h2-super oshire-gold">Follow us for more news!</h2>
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
	<!--<script src="assets/js/theme-preview-only.js"></script>-->

	<link href="assets/vendor/spectrum/spectrum.min.css" rel="stylesheet">
    <script>
        document.getElementById("copyright-year").textContent = new Date().getFullYear();
    </script>
    
</body>
</html>