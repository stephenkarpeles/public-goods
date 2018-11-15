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

		<div class="entry-more-link">
			<a href="<?php echo get_permalink();?>">Read More</a>
		</div>
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
