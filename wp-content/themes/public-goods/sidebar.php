<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package public-goods
 */
?>

<aside id="secondary" class="widget-area sidebar">

	<!-- Drip Newsletter Form -->
	<form action="https://www.getdrip.com/forms/263175359/submissions" method="post" data-drip-embedded-form="263175359" class="drip-form--sidebar">
	  <h3 data-drip-attribute="headline">Join the good.</h3>
	  <div data-drip-attribute="description">Join our newsletter.</div>
	    <label for="drip-email">Enter your email</label>
		<div class="input-wrap">
	    <input type="email" id="drip-email" name="fields[email]" value="" placeholder="Enter your email" />
	    <input type="submit" value="Subscribe" data-drip-attribute="sign-up-button" />
		</div>
	</form>

	<!-- Idea Submit Block -->
	<div class="idea-block">
		<h3 class="idea-block__heading">
			We want your ideas.
		</h3>
		<p class="idea-block__text">
			Submit your ideas to our blog and get $100 if we publish your article.
		</p>
		<button class="idea-block__submit-button">
			Submit
		</button>	
	</div>

	<!-- Editor's Picks -->
	<div class="featured-block">
		<h2 class="featured-block__heading">
			Editor's Pick
		</h2>
		<div class="featured-block__image">
		<img src="https://cdn.shopify.com/s/files/1/0838/7991/t/47/assets/bath.jpg?13723350875874809438" alt="Featured Image">
		</div>
		<div class="featured-block__content">		
			<h3 class="featured-block__secondary-heading">
				What a waste.
			</h3>
			<p class="featured-block__blurb">
				69 totally useful ways to repurpose commonly discarded items.
			</p>
			<a class="featured-block__link" hred="#">Read More</a>
		</div>
	</div>

</aside><!-- #secondary -->
