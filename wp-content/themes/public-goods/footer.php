<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package public-goods
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="container">

			<div class="site-footer__left-block">

				<div class="site-footer__subscribe-block">
					<form action="https://www.getdrip.com/forms/263175359/submissions" method="post" data-drip-embedded-form="263175359" class="drip-form--footer">
					  <h3 data-drip-attribute="headline">Connect with us</h3>
						<div class="input-wrap">
					    <input class="drip-email-input" type="email" id="drip-email" name="fields[email]" value="" placeholder="Enter your email" />
					    <input class="drip-submit-input" type="submit" value="Subscribe" data-drip-attribute="sign-up-button" />
						</div>
					</form>

					<div class="site-footer__subscribe-disclaimer">
						<p>By clicking 'Sign Up' you agree to receive marketing emails from PUBLIC GOODS</p>
					</div>
				</div>

				<div class="site-footer__nav-menu">
					<ul>
						<li><a href="mailto:service@publicgoods.com">Contact</a></li>
						<li><a href="https://www.publicgoods.com/pages/shipping" target="_blank">Shipping</a></li>
						<li><a href="https://www.publicgoods.com/pages/privacy-policy" target="_blank">Privacy Policy</a></li>
						<li><a href="https://www.publicgoods.com/pages/terms-and-conditions" target="_blank">Terms and Service</a></li>
					</ul>
				</div>

			</div><!-- /.site-footer__left-block -->

			<div class="site-footer__right-block">
			  <div class="site-footer__social-nav">
			  	<ul>
						<!-- <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
						<li><a href=""><i class="fab fa-twitter"></i></a></li> -->
						<li><a href="https://www.instagram.com/public_goods_/?hl=en" target="_blank"><i class="fab fa-instagram"></i><span>Instagram</span></a></li>
			  	</ul>
			  </div>

			  <div class="site-footer__copyright">
			    &copy; <?php echo date("Y"); ?> PUBLIC GOODS - All Rights Reserved
			  </div>
			</div><!-- /.site-footer__right-block -->

		</div>
	</footer><!-- #colophon -->

	<!-- Modal -->
	<div class="modal">
	  <div class="modal__content">
	    <div class="modal__close"><span>&times;</span></div>
	    <div class="modal__interior is-open">
	    	<!-- Idea Submission Form -->
	      <?php echo FrmFormsController::get_form_shortcode( array( 'id' => 3, 'title' => false, 'description' => false ) ); ?>
	    </div>
	  </div>
	</div>

</div><!-- #page -->

<?php wp_footer(); ?>

<!-- Scripts -->
<script src="<?php echo get_template_directory_uri(); ?>/js/navigation.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/skip-link-focus-fix.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>

<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-NZB6XKR');</script>
	<!-- End Google Tag Manager -->

<!-- Google Analytics -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-132909631-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-132909631-1');
</script>

</body>
</html>
