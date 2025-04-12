<!DOCTYPE html>
<html lang="en-US">


<?php include("php/head.php") ?>

<body class="sk__homepage sk__home-mega-text-video white-bg">

	<main id="primary" class="site-main">

		<!-- Master Curtain Effect -->
		<section class="sk__master-curtain">
			<div class="mcurtain mcurtain-left"></div>
			<div class="mcurtain mcurtain-center"></div>
			<div class="mcurtain mcurtain-right"></div>
		</section>

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
		<!-- /.sk__menu -->

		
		<div id="smooth-wrapper" class="pushable-content">
			<div id="smooth-content">


				<!-- Header Section
				================================================== -->
				<section class="sk__parallax-header sk__animated-header sk__header-y-l sk__service-header ">
					<div class="sk__parallax-header-image sk__absolute sk__image-back-cover sk__filter-city" style="background-image: url(assets/images/service-item-3-header-cover.png);"></div>
					<div class="sk__tint-light sk__absolute"></div>

					<div class="container sk__supercontainer">
						<div class="row text-center">
							<div class="col-12">
								<h1 class="super-heading phase-1 mb-0 oshire-gold">Contact Us</h1>
								<h2 class="h2-regular thin mb-1">Check our lines <strong class="oshire-golddarker"> if you have any inquries</strong></h2>
							</div>
						</div>
					</div>

				</section>
				<!-- /.sk__service-header -->


	<!-- Project Body Section
				================================================== -->
				<section class="sk__project-body">
					<div class="container sk__powercontainer">
						<div class="row">
<!--<div class="col-xl-6 col-xxl-7 sk__project-body-image-col">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3860.361887967116!2d121.02875488543312!3d14.635387339768423!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b7ad351369dd%3A0x65f10cb14da73efa!2s45%20Timog%20Ave%2C%20Diliman%2C%20Quezon%20City%2C%201104%20Metro%20Manila!5e0!3m2!1sen!2sph!4v1743993738692!5m2!1sen!2sph" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>-->

<div class="col-xl-6 col-xxl-7 sk__project-body-image-col">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d482.5454056507171!2d121.0327573!3d14.6353102!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b7f334545709%3A0x6d9be32998c8dac!2sOshire%20Pet%20Boutique!5e0!3m2!1sen!2sph!4v1744287620488!5m2!1sen!2sph" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>





							<div class="col-xl-6 col-xxl-5 sk__project-body-info-col mt-4 mt-xl-0 pt-5 pt-xl-0 text-center text-sm-start">
								<h4 class="oshire-gold">+6327 0008312 / +63995 6412778</h4><br>
								<h4 class="oshire-gold">24K Mansion Bldg., 45 Timog Avenue corner Scout Tuazon, South Triangle, Quezon City, Philippines. 1103.</h4>
									
							</div>

						</div>
					</div>
				</section>
				<!-- /.sk__project-body -->
				<!-- /.sk__project-header -->





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