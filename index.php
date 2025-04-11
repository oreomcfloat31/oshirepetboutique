<!DOCTYPE html>
<html lang="en-US">


<?php include("php/head.php") ?>

<body class="sk__homepage sk__home-animated-headline white-bg">

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

		
		<div id="smooth-wrapper" class="pushable-content">
			<div id="smooth-content">

				<!-- Hero Social Icons Menu -->
				<section class="hero-socials-section">
					<div class="hero-socials-inner">
						<div class="hero-socials">
							<a class="social-icons" href="https://www.facebook.com/profile.php?id=61571841430199" target="_blank"><span><span class="icon-facebook1"></span></span></a>
							<a class="social-icons" href="https://www.instagram.com/oshireboutique" target="_blank"><span><span class="icon-instagram1"></span></span></a>
						</div>
					</div>
				</section>

			
				<!-- Hero Section / Hero Slider
				================================================== -->
				<section class="sk__hero-section">
					<!-- Carousel -->
					<div id="sk__hero-carousel-slider" class="sk__static-carousel-slider carousel slide dark-shade-1-bg">
				
						<!-- Slides -->
						<div class="carousel-inner">

							<!-- Slide 4 -->
							<div class="carousel-item zooming active hero-slide-1 sk__hero-slider-item sk__image-back-cover">
								<section class="sk__parallax-background-section sk__hero-item-center-center">
									<div class="sk__parallax-background-element sk__absolute sk__image-back-cover" style="background-image: url(assets/images/hero-image-08.png);"></div>

									<!-- Hero content -->
									<div class="mb-2 text-center">
										<span class="animated-element phase-1"></span>
										<span class="animated-element phase-1"></span>
										<!-- Animated headline -->
										<div class="cover-text-wrapper">
												<h1 class="super-heading sk__animated-headline animated-element phase-1 mb-0">
												    <span></span>
												    <!--<span class="sk__animated-headline-words">
												        <span class="sk__visible sk__clipped-text sk__gradient-back-v1" data-sk-animated-words="Premium Pet Grooming,Designer Pets,Pet Studio,Luxury Hotel & Day Care, Wine & Caf&eacute;"></span>
												    </span>-->
<div class="cover-text-wrapper">
    <h1 class="super-heading sk__animated-headline animated-element phase-1 mb-0">
        <span></span>
        <span class="sk__animated-headline-words">
            <span class="sk__visible sk__clipped-text sk__gradient-back-v1" data-sk-animated-words="Premium Pet <br>Grooming, Designer Pets, Pet Studio, Luxury Hotel <br>& Day Care">
            Wine & Café</span>
        </span>
    </h1>
</div>


												</h1>

										</div>
										<div class="cover-text-wrapper">
											<h2 class="h2-regular thin animated-element phase-1">"Your home for pets."</h2>
										</div>
										<div class="cover-text-wrapper">
											<a class="btn btn-lg btn-outline-light animated-element phase-1" href="about" role="button">About Us</a>
										</div>
									</div>

								</section>
							</div>
							<!-- /.hero-slide-1 -->
				
						</div>
						
					</div>
					<!-- /#sk__hero-carousel-slider -->
				</section>



				<!-- Portfolio Section
				================================================== -->
				<!-- include("php/showcase.php") ?> -->
				<!-- /.sk__portfolio-section -->
				<?php include("php/facilities.php") ?>


				<!-- Featured Project Section dark-shade-2-bg
				================================================== -->
				<section class="sk__featured-project-section sk__parallax-background-section white-bg sk__flex">
					<div class="sk__featured-project-background sk__parallax-background-element sk__absolute sk__image-back-cover" style="background-image: url(assets/images/featured-project-background.png);"></div>
					<div class="sk__featured-project-infos-container sk__absolute sk__flex-center-y">
						<div class="featured-project">
							<div class="sk__rectangles-full-left text-center text-sm-start">
								<!-- parallax area -->
								<div id="sk__parallax-layers-featured-project" class="sk__rectangles-full-left-parallax-layers">
									<!-- main background deco -->
									<div data-depth="0.40" class="sk__rectangles-full-left-main-tint"></div>
									<!-- white rectangle deco 1 -->
									<div data-depth="1.30" class="sk__absolute">
										<div class="sk__flex-center sk__absolute">
											<div class="sk__rectangles">
												<div class="sk__rectangle-white-1 sk__absolute"></div>
											</div>
										</div>
									</div>
									<!-- white rectangle deco 2 -->
									<div data-depth="0.70" class="sk__absolute">
										<div class="sk__flex-center sk__absolute">
											<div class="sk__rectangles">
												<div class="sk__rectangle-white-2 sk__absolute"></div>
											</div>
										</div>
									</div>
									<!-- black rectangle deco -->
									<div data-depth="1.00" class="sk__absolute">
										<div class="sk__flex-center sk__absolute">
											<div class="sk__rectangles">
												<div class="sk__rectangle-orange sk__absolute"></div>
											</div>
										</div>
									</div>
								</div>
<div class="flex-child sk__featured-project-infos sk__solid-menu-bar">
    <h1 class="super-heading sk__clipped-text sk__gradient-back-v1oshire mb-sm-1">Visit Us <span class="heading-deco"></span></h1>
    <h2 class="h2-regular text-black">Exclusive <strong>Collection</strong> Showcase</h2>
    <p class="mw-440 text-black">Handpicked, luxury items for your beloved companion. From stylish accessories to pampering essentials, every product is designed with love and care.</p>
    <a class="btn btn-outline-orange mt-3" href="coming-soon" role="button">EXPLORE COLLECTION</a>
</div>

							</div>	
						</div>
					</div>
				</section>
				<!-- /.sk__featured-project-section -->

				<div class="white-bg featured-project-padder"></div>


				<?php include("php/footer.php") ?>




				<!-- Footer
				================================================== -->



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

	<script src="assets/js/theme.js"></script>

	<script src="assets/vendor/spectrum/spectrum.min.js"></script>
	<script src="assets/vendor/clipboard/clipboard.min.js"></script>

	<link href="assets/vendor/spectrum/spectrum.min.css" rel="stylesheet">
    <script>
        document.getElementById("copyright-year").textContent = new Date().getFullYear();
    </script>
<script>
window.onload = function() {
  var animatedWordsElement = document.querySelector('.sk__gradient-back-v1');
  var text = animatedWordsElement.getAttribute('data-sk-animated-words');
  
  // Replace <br> tags with <br /> for consistency
  var updatedText = text.replace(/<br>/g, '<br />');  
  
  // Split the text into lines/words, depending on your desired behavior
  var words = updatedText.split('<br />');

  // Reset the content
  animatedWordsElement.innerHTML = '';

  // Add words one by one with a delay
  var delay = 0;
  words.forEach(function(word, index) {
    setTimeout(function() {
      animatedWordsElement.innerHTML += word + '<br />';
    }, delay);
    delay += 500; // Adjust the delay as needed (in milliseconds)
  });
};
</script>

</body>


</html>