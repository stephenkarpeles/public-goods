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
		<button class="idea-block__submit-button modal__trigger">
			Submit
		</button>	
	</div>

	<!-- Editor's Picks -->
	<?php 

		$posts = get_posts(array(
			'meta_query' => array(
				array(
					'key' => 'editors_pick_post',
					'compare' => '=',
					'value' => '1'
				)
			)
		));

		if( $posts ): ?>
			
			<div class="featured-block">
				<h2 class="featured-block__heading">
					Editor's Pick
				</h2>
				
			<?php foreach( $posts as $post ): 
				
				setup_postdata( $post )
				
				?>
				<div class="featured-block__image">
					<a href="<?php the_permalink(); ?>">
					  <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
					</a>
				</div>
				<div class="featured-block__content">		
					<h3 class="featured-block__secondary-heading">
						<?php the_title(); ?>
					</h3>
					<p class="featured-block__blurb">
						<?php
							echo wp_trim_words( get_the_content(), 15, '.' );
						?>
					</p>
					<a class="featured-block__link" href="<?php the_permalink(); ?>">Read More</a>
				</div>
			
			<?php endforeach; ?>
			
			</div>
			
			<?php wp_reset_postdata(); ?>

		<?php endif; ?>

</aside><!-- #secondary -->
