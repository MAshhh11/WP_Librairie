<?php

/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;
$asset = get_site_url() . '/assets/img/';

?>

</main>
<footer class="container-fluid">
	<div class="row">
		<div class="col-12">
			<div class="container">
				<div class="row">
					<div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
						<img id="bts-logo" src="<?php echo $asset ?>logo@2x.png" alt="logo_bts" style="width:20%">
					</div>
					<div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
						<h4>Nous rencontrer</h4>
						<p><i class="fas fa-caret-right"></i> adresse</p>
					</div>
					<div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
						<h4>Nous contacter</h4>
						<p><i class="fas fa-caret-right"></i> +33 numero</p>
						<p><i class="fas fa-caret-right"></i> Par Mail</p>
					</div>
					<div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
						<h4>Nous retrouver</h4>
						<!-- <img class="linkd" src="<?php echo $asset ?>icone_linkedin@2x.png" style="width:10%;" alt="linkedin"> -->
						<p><i class="fas fa-caret-right"></i> lien FB</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
<script src="<?= get_site_url() . "/assets/js/owl.carousel.min.js"; ?>"></script>
<script src="<?= get_site_url() . "/assets/js/main.js"; ?>"></script>
</body>

</html>