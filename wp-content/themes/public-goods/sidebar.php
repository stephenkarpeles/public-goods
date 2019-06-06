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
	<?php include('inc/drip-newsletter-form.php'); ?>

	<!-- Idea Submit Block -->
	<div class="idea-block">
		<h3 class="idea-block__heading">
			We want your ideas.
		</h3>
		<p class="idea-block__text">
			Submit your ideas to our blog and get $100 if we publish your article.
		</p>
		<button class="idea-block__submit-button modal__trigger">
			Submit
		</button>	
	</div>

	<?php include('inc/editors-pick.php'); ?>

</aside><!-- #secondary -->
