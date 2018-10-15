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

	<div class="entry-image">
	  <?php public_goods_post_thumbnail(); ?>
	</div>

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
					<?php
					public_goods_posted_on();
					public_goods_posted_by();
					?>
				</div><!-- .entry-meta -->
			<?php endif; ?>
		</header><!-- .entry-header -->

		<?php
		the_content( sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'Read More<span class="screen-reader-text"> "%s"</span>', 'public-goods' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			get_the_title()
		) );

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'public-goods' ),
			'after'  => '</div>',
		) );
		?>

		<footer class="entry-footer">
			<?php public_goods_entry_footer(); ?>
		</footer><!-- .entry-footer -->
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
