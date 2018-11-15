<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package public-goods
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">
		<header class="entry-header">
			<?php
			if ( is_singular() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
			else :
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			endif;

			if ( 'post' === get_post_type() ) :
				?>
				<div class="entry-meta">
					<div class="entry-meta__author-image">
						<?php echo get_avatar( get_the_author_meta( 'ID' )); ?>
					</div>
					<div class="entry-meta__post-info">
						<div class="entry-meta__author-name">by <?php the_author(); ?></div>
						<div class="entry-meta__post-date"><?php the_date('F j, Y'); ?></div>
					</div>
				</div><!-- .entry-meta -->
			<?php endif; ?>
		</header><!-- .entry-header -->		

		<div class="entry-main-content">
			<?php the_content(); ?>
		</div>

		<!-- Lead Magnet Custom Fields -->
		<div class="lead-magnet-block<?php if( get_field('background_image') ): ?> lead-magnet-block--has-background-img<?php endif; ?>" <?php if( get_field('background_image') ): ?>style="background-image: url('<?php the_field('background_image'); ?>');"<?php endif; ?>>

			<?php if( get_field('headline') ): ?>
				<h2 class="lead-magnet-block__headline">
					<?php the_field('headline'); ?>
				</h2>
			<?php endif; ?>

			<?php if( get_field('blurb') ): ?>
				<p class="lead-magnet-block__blurb">
					<?php the_field('blurb'); ?>
				</p>
			<?php endif; ?>

			<?php if( get_field('button_link') ): ?>
				<a class="btn lead-magnet-block__button" href="<?php the_field('button_link'); ?>">
					<?php if( get_field('button_text') ): ?>
				    <?php the_field('button_text'); ?>
			    <?php endif; ?>
				</a>
			<?php endif; ?>	
		</div>

		<!-- Recent Posts -->
	  <div class="related-posts">

	  	<h2 class="related-posts__heading">More from the blog.</h2>

	  	<div class="related-posts__post-loop">
	  	
		    <?php
	        global $post;
	        $current_post = $post;

	        for($i = 1; $i <= 3; $i++):
	        $post = get_previous_post();
	        setup_postdata($post);

	        echo '<div class="related-posts__post">';
	        echo public_goods_post_thumbnail();
	        echo '<h3><a href="' . get_the_permalink() . '">' . get_the_title() . '</a></h3>';
	        echo '<p>' . wp_trim_words( get_the_content(), 10, '.' ) . '</p>';
	        echo '<a class="related-posts__read-more" href="' . get_permalink() . '">Read More</a>';
	        echo '</div> ';

	        endfor;
	        $post = $current_post; 
			  ?>

			 </div>
			 
		</div>

		<!-- <div class="entry-more-link">
			<a href="<?php echo get_permalink();?>">Read More</a>
		</div> -->
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
