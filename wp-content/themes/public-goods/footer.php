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
						<li><a href="">Contact</a></li>
						<li><a href="">Shipping</a></li>
						<li><a href="">Privacy Policy</a></li>
						<li><a href="">Terms and Service</a></li>
					</ul>
				</div>

			</div><!-- /.site-footer__left-block -->

			<div class="site-footer__right-block">
			  <div class="site-footer__social-nav">
			  	<ul>
						<li><a href=""><i class="fab fa-facebook-f"></i></a></li>
						<li><a href=""><i class="fab fa-twitter"></i></a></li>
						<li><a href=""><i class="fab fa-instagram"></i></a></li>
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
	    <div class="modal__close"><span>x</span></div>
	      <div class="modal__interior is-open">
	        <p>Content here</p> 
	    </div>
	  </div>
	</div>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
