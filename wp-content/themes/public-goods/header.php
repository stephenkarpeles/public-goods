<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package public-goods
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<meta property="og:image" content="<?php echo catch_that_image(); ?>" />
	<meta property="og:title" content="<?php wp_title(''); ?>">
  <meta property="og:url" content="<?php the_permalink(); ?>">

	<meta name="twitter:image" content="<?php echo catch_that_image(); ?>">
	<meta name="twitter:title" content="<?php wp_title(''); ?>">
	
	<?php if ( is_home() ) : ?>
	  <title>The Public Goods Blog</title>
	<?php else : ?>
	  <title><?php wp_title(''); ?></title>
    <?php endif; ?>

	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />

	<!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/solid.css" integrity="sha384-VGP9aw4WtGH/uPAOseYxZ+Vz/vaTb1ehm1bwx92Fm8dTrE+3boLfF1SpAtB1z7HW" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/brands.css" integrity="sha384-rf1bqOAj3+pw6NqYrtaE1/4Se2NBwkIfeYbsFdtiR6TQz0acWiwJbv1IM/Nt/ite" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/fontawesome.css" integrity="sha384-1rquJLNOM3ijoueaaeS5m+McXPJCGdr5HcA03/VHXxcp2kX2sUrQDmFc3jR5i/C7" crossorigin="anonymous">


	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NZB6XKR"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'public-goods' ); ?></a>

	<header id="masthead" class="site-header">

		<a href="https://www.publicgoods.com/" class="custom-logo-link" rel="home" itemprop="url">
			<img width="350" height="180" src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo-svg.svg" class="custom-logo" alt="Public Goods" itemprop="logo">
		</a>

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
				<span></span>
				<span></span>
			</button>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>

			<div class="mobile-cart-link">
				<a href="https://www.publicgoods.com/pages/free-gift-blog-signup">Free Trial</a>
			</div>
		</nav><!-- #site-navigation -->
		
		<div class="site-branding">
			<?php
			  if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title">The Public Goods Blog.</h1>
				<?php
			else :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			endif;
			$public_goods_description = get_bloginfo( 'description', 'display' );
			if ( $public_goods_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $public_goods_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
