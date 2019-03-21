<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package public-goods
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<?php
			endif;

			/* Start the Loop */
			$postnum = 0;
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() ); ?>

			<?php $postnum++;
				if ($postnum == 3) { ?>

		    	<div class="mobile-form-wrap">
		    		<form action="https://www.getdrip.com/forms/263175359/submissions" method="post" data-drip-embedded-form="263175359" class="drip-form--sidebar">
						  <h3 data-drip-attribute="headline">Join the good.</h3>
						  <div data-drip-attribute="description">Join our newsletter.</div>
						    <label for="drip-email">Enter your email</label>
							<div class="input-wrap">
						    <input type="email" id="drip-email" name="fields[email]" value="" placeholder="Enter your email" />
						    <input type="submit" value="Subscribe" data-drip-attribute="sign-up-button" />
							</div>
						</form>
		    	</div>

				<?php }; ?>
			<?php	endwhile; ?>

		<?php

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
