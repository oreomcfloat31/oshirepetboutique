<!DOCTYPE html>
<html lang="en-US">


<?php include("php/head.php") ?>
<style>

@media (max-width: 575.98px) {
  .sk__featurebox-col {
    width: 50% !important;
    display: inline-block;
  }
}
</style>
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
<section id="animated-counters-section" class="sk__strip-header dark-shade-3-bg " style="height: 2vh !important;">
					<div class="container">

					</div>
				</section>
		
		<div id="smooth-wrapper" class="pushable-content">
			<div id="smooth-content">


				<!--
				<section class="sk__parallax-header sk__animated-header sk__header-y-l sk__service-header ">
					<div class="sk__parallax-header-image sk__absolute sk__image-back-cover sk__filter-city" style="background-image: url(assets/images/service-item-2-header-cover.png);"></div>
					<div class="sk__tint-light sk__absolute"></div>

					<div class="container sk__supercontainer">
						<div class="row text-center">
							<div class="col-12">
								<h1 class="super-heading phase-1 mb-0 oshire-gold">Gallery</h1>
								<h2 class="h2-regular thin mb-1">Browse through <strong class="oshire-golddarker"> our pet photos</strong></h2>
							</div>
						</div>
					</div>

				</section>
			-->


				<!-- Features Section
				================================================== -->
				<section class="sk__features-section sk__py-l">
					<div class="container sk__supercontainer">
						<div class="row sk__featureboxes">
							<div class="col text-center sk__heading-spacer-s">
								<div class="cover-text-wrapper">
									<div class="fancy-gradient-text-box reveal-onscroll">
										<h1 class="super-heading phase-1 mb-0 oshire-gold">Puppy Gallery</h1>
										<!--<h1 class="super-heading sk__gradient-fancy-text mb-2 mb-sm-0 mb-xxl-2 text-white">Puppy Gallery</h1>-->
									</div>
								</div>
								<div class="cover-text-wrapper sk__reveal-all-wrapped-text">
									<!--<h2 class="h2-large oshire-gold">Our curated <strong> dog</strong> collection.</h2>-->
								</div>
							</div>
						</div>
						<div class="row sk__featureboxes sk__featureboxes-image-style">
<!--
<div class="col-6 col-sm-6 col-lg-4 sk__featurebox-col text-center">
	<a class="sk__imageboxoshire" href="contact">
		<div class="sk__imagebox-img-wrap">
			<img class="sk__imagebox-img" src="assets/images/fina-harold.png" alt="service image">
		</div>
		<div class="sk__imagebox-text-wrap">
			<h5 class="oshire-gold">Fina & Harold</h5>
		</div>
	</a>
</div>-->

<div class="col-6 col-sm-6 col-lg-4 sk__featurebox-col text-center">
	<div class="sk__imageboxoshire">
		<a href="assets/images/fina-harold.png" data-lightbox="puppy-gallery" data-title="Fina & Harold">
			<div class="sk__imagebox-img-wrap">
				<img class="sk__imagebox-img" src="assets/images/fina-harold.png" alt="Fina & Harold">
			</div>
		</a>
		<div class="sk__imagebox-text-wrap">
			<h5 class="oshire-gold">Name: Fina & Harold</h5>
			<h5 class="oshire-gold">Breed: White Teacup Pomeranian</h5>
			<h5 class="oshire-gold">Birthdate(s):</h5>
			<h5 class="oshire-gold">Sex: Female & Male</h5>
			<h5 class="oshire-gold">Price:</h5>
		</div>
	</div>

	<!-- Hidden extra images for Lightbox navigation -->
<a href="assets/images/scrub/fina-harold-2.jpg" data-lightbox="puppy-gallery" data-title="Fina & Harold" style="display:none;"></a>
<a href="assets/images/scrub/fina-harold-3.jpg" data-lightbox="puppy-gallery" data-title="Fina & Harold" style="display:none;"></a>
<a href="assets/images/scrub/fina-harold-4.jpg" data-lightbox="puppy-gallery" data-title="Fina & Harold" style="display:none;"></a>
<a href="assets/images/scrub/fina-harold-5.jpg" data-lightbox="puppy-gallery" data-title="Fina & Harold" style="display:none;"></a>
<a href="assets/images/scrub/fina-harold-6.jpg" data-lightbox="puppy-gallery" data-title="Fina & Harold" style="display:none;"></a>
</div>

<div class="col-6 col-sm-6 col-lg-4 sk__featurebox-col text-center">
	<div class="sk__imageboxoshire">
		<a href="assets/images/fufu.png" data-lightbox="puppy-gallery1" data-title="Fufu">
			<div class="sk__imagebox-img-wrap">
				<img class="sk__imagebox-img" src="assets/images/fufu.png" alt="Fufu">
			</div>
		</a>
		<div class="sk__imagebox-text-wrap">
			<h5 class="oshire-gold">Name: Fufu</h5>
			<h5 class="oshire-gold">Breed: Yorkie Terrier</h5>
			<h5 class="oshire-gold">Birthdate(s):</h5>
			<h5 class="oshire-gold">Sex: Female</h5>
			<h5 class="oshire-gold">Price:</h5>			
		</div>
	</div>

	<!-- Hidden extra images for Lightbox navigation -->
<a href="assets/images/scrub/fufu-2.jpg" data-lightbox="puppy-gallery1" data-title="Fufu" style="display:none;"></a>
<a href="assets/images/scrub/fufu-3.jpg" data-lightbox="puppy-gallery1" data-title="Fufu" style="display:none;"></a>
<a href="assets/images/scrub/fufu-4.jpg" data-lightbox="puppy-gallery1" data-title="Fufu" style="display:none;"></a>
<a href="assets/images/scrub/fufu-5.jpg" data-lightbox="puppy-gallery1" data-title="Fufu" style="display:none;"></a>
</div>

<div class="col-6 col-sm-6 col-lg-4 sk__featurebox-col text-center">
	<div class="sk__imageboxoshire">
		<a href="assets/images/pomsky.png" data-lightbox="puppy-gallery2" data-title="Gallant">
			<div class="sk__imagebox-img-wrap">
				<img class="sk__imagebox-img" src="assets/images/pomsky.png" alt="Gallant">
			</div>
		</a>
		<div class="sk__imagebox-text-wrap">
			<h5 class="oshire-gold">Name: Gallant</h5>
			<h5 class="oshire-gold">Breed: Pomsky</h5>
			<h5 class="oshire-gold">Birthdate(s):</h5>
			<h5 class="oshire-gold">Sex: Male</h5>
			<h5 class="oshire-gold">Price:</h5>			
		</div>
	</div>

	<!-- Hidden extra images for Lightbox navigation -->
<a href="assets/images/scrub/gallant-2.jpg" data-lightbox="puppy-gallery2" data-title="Gallant" style="display:none;"></a>
<a href="assets/images/scrub/gallant-3.jpg" data-lightbox="puppy-gallery2" data-title="Gallant" style="display:none;"></a>
<a href="assets/images/scrub/gallant-4.jpg" data-lightbox="puppy-gallery2" data-title="Gallant" style="display:none;"></a>
<a href="assets/images/scrub/gallant-5.jpg" data-lightbox="puppy-gallery2" data-title="Gallant" style="display:none;"></a>
<a href="assets/images/scrub/gallant-6.jpg" data-lightbox="puppy-gallery2" data-title="Gallant" style="display:none;"></a>
</div>

<div class="col-6 col-sm-6 col-lg-4 sk__featurebox-col text-center">
	<div class="sk__imageboxoshire">
		<a href="assets/images/vivi.png" data-lightbox="puppy-gallery3" data-title="Vivi">
			<div class="sk__imagebox-img-wrap">
				<img class="sk__imagebox-img" src="assets/images/vivi.png" alt="Vivi">
			</div>
		</a>
		<div class="sk__imagebox-text-wrap">
			<h5 class="oshire-gold">Name: Vivi</h5>
			<h5 class="oshire-gold">Breed: Pomsky</h5>
			<h5 class="oshire-gold">Birthdate(s):</h5>
			<h5 class="oshire-gold">Sex: Male</h5>
			<h5 class="oshire-gold">Price:</h5>			
		</div>
	</div>

	<!-- Hidden extra images for Lightbox navigation -->
<a href="assets/images/scrub/vivi-2.jpg" data-lightbox="puppy-gallery3" data-title="Vivi" style="display:none;"></a>
<a href="assets/images/scrub/vivi-3.jpg" data-lightbox="puppy-gallery3" data-title="Vivi" style="display:none;"></a>
<a href="assets/images/scrub/vivi-4.jpg" data-lightbox="puppy-gallery3" data-title="Vivi" style="display:none;"></a>
<a href="assets/images/scrub/vivi-5.jpg" data-lightbox="puppy-gallery3" data-title="Vivi" style="display:none;"></a>
</div>

<div class="col-6 col-sm-6 col-lg-4 sk__featurebox-col text-center">
	<div class="sk__imageboxoshire">
		<a href="assets/images/lisa-rose.png" data-lightbox="puppy-gallery4" data-title="Lisa&Rose">
			<div class="sk__imagebox-img-wrap">
				<img class="sk__imagebox-img" src="assets/images/lisa-rose.png" alt="Lisa & Rose">
			</div>
		</a>
		<div class="sk__imagebox-text-wrap">
			<h5 class="oshire-gold">Name: Lisa & Rose</h5>
			<h5 class="oshire-gold">Breed: Mame Shiba Red - Black/Tan</h5>
			<h5 class="oshire-gold">Birthdate(s):</h5>
			<h5 class="oshire-gold">Sex: Both Female</h5>
			<h5 class="oshire-gold">Price:</h5>			
		</div>
	</div>

	<!-- Hidden extra images for Lightbox navigation -->
<a href="assets/images/scrub/lisarose-2.jpg" data-lightbox="puppy-gallery4" data-title="Lisa&Rose" style="display:none;"></a>
<a href="assets/images/scrub/lisarose-3.jpg" data-lightbox="puppy-gallery4" data-title="Lisa&Rose" style="display:none;"></a>
<a href="assets/images/scrub/lisarose-4.jpg" data-lightbox="puppy-gallery4" data-title="Lisa&Rose" style="display:none;"></a>
<a href="assets/images/scrub/lisarose-5.jpg" data-lightbox="puppy-gallery4" data-title="Lisa&Rose" style="display:none;"></a>
<a href="assets/images/scrub/lisarose-6.jpg" data-lightbox="puppy-gallery4" data-title="Lisa&Rose" style="display:none;"></a>
<a href="assets/images/scrub/lisarose-7.jpg" data-lightbox="puppy-gallery4" data-title="Lisa&Rose" style="display:none;"></a>
</div>


						</div>
					</div>

										<div class="container sk__supercontainer">
						<div class="row sk__featureboxes">
							<div class="col text-center sk__heading-spacer-s">
								<div class="cover-text-wrapper">
									<div class="fancy-gradient-text-box reveal-onscroll">
										<h1 class="super-heading phase-1 mb-0 oshire-gold">Kitten Gallery</h1>
										<!--<h1 class="super-heading sk__gradient-fancy-text mb-2 mb-sm-0 mb-xxl-2 text-white">Kitten Gallery</h1>-->
									</div>
								</div>
								<div class="cover-text-wrapper sk__reveal-all-wrapped-text">
									<!--<h2 class="h2-large oshire-gold">Our curated <strong> cat</strong> collection.</h2>-->
								</div>
							</div>
						</div>
						<div class="row sk__featureboxes sk__featureboxes-image-style">

<div class="col-6 col-sm-6 col-lg-4 sk__featurebox-col text-center">
	<div class="sk__imageboxoshire">
		<a href="assets/images/heaven.png" data-lightbox="puppy-gallery5" data-title="Heaven">
			<div class="sk__imagebox-img-wrap">
				<img class="sk__imagebox-img" src="assets/images/heaven.png" alt="Heaven">
			</div>
		</a>
		<div class="sk__imagebox-text-wrap">
			<h5 class="oshire-gold">Name: Heaven</h5>
			<h5 class="oshire-gold">Breed: Blue Golden British Shorthair</h5>
			<h5 class="oshire-gold">Birthdate(s):</h5>
			<h5 class="oshire-gold">Sex: Female</h5>
			<h5 class="oshire-gold">Price:</h5>			
		</div>
	</div>

	<!-- Hidden extra images for Lightbox navigation -->
<a href="assets/images/scrub/heaven-2.jpg" data-lightbox="puppy-gallery5" data-title="Heaven" style="display:none;"></a>
<a href="assets/images/scrub/heaven-3.jpg" data-lightbox="puppy-gallery5" data-title="Heaven" style="display:none;"></a>
<a href="assets/images/scrub/heaven-4.jpg" data-lightbox="puppy-gallery5" data-title="Heaven" style="display:none;"></a>
<a href="assets/images/scrub/heaven-5.jpg" data-lightbox="puppy-gallery5" data-title="Heaven" style="display:none;"></a>
</div>

<div class="col-6 col-sm-6 col-lg-4 sk__featurebox-col text-center">
	<div class="sk__imageboxoshire">
		<a href="assets/images/vid.png" data-lightbox="puppy-gallery6" data-title="Vid">
			<div class="sk__imagebox-img-wrap">
				<img class="sk__imagebox-img" src="assets/images/vid.png" alt="Vid">
			</div>
		</a>
		<div class="sk__imagebox-text-wrap">
			<h5 class="oshire-gold">Name: Vid</h5>
			<h5 class="oshire-gold">Breed: Lilac Golden British Shorthair</h5>
			<h5 class="oshire-gold">Birthdate(s):</h5>
			<h5 class="oshire-gold">Sex: Female</h5>
			<h5 class="oshire-gold">Price:</h5>			
		</div>
	</div>

	<!-- Hidden extra images for Lightbox navigation -->
<a href="assets/images/scrub/vid-2.jpg" data-lightbox="puppy-gallery5" data-title="Heaven" style="display:none;"></a>
<a href="assets/images/scrub/vid-3.jpg" data-lightbox="puppy-gallery5" data-title="Heaven" style="display:none;"></a>
<a href="assets/images/scrub/vid-4.jpg" data-lightbox="puppy-gallery5" data-title="Heaven" style="display:none;"></a>
</div>




						</div>
						<div class="row mt-5 sk__fade-in-2">
							<div class="col-12 col-xl-10 offset-xl-1 text-center">
								<p class="p-v2 skills-subhead oshire-gold">Import pets have been handpicked from all over the world and have all the necessary vaccinations and documentation to ensure that they are fully healthy and are safe for rehoming.</p>
							</div>
						</div>
					</div>
				</section>
				<!-- /.sk__features-section -->




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
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>

	<!-- Theme Preview Only CSS -->
	<link href="assets/vendor/spectrum/spectrum.min.css" rel="stylesheet">
    <script>
        document.getElementById("copyright-year").textContent = new Date().getFullYear();
    </script>
</body>


</html>