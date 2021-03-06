<?php
/**
 * public-goods functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package public-goods
 */

if ( ! function_exists( 'public_goods_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function public_goods_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on public-goods, use a find and replace
		 * to change 'public-goods' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'public-goods', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'public-goods' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'public_goods_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'public_goods_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function public_goods_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'public_goods_content_width', 640 );
}
add_action( 'after_setup_theme', 'public_goods_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function public_goods_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'public-goods' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'public-goods' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'public_goods_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function public_goods_scripts() {
	wp_enqueue_style( 'public-goods-style', get_stylesheet_uri() );

	wp_enqueue_style( 'public-goods-custom-styles', get_template_directory_uri() . '/css/style.css' );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'public_goods_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Change 'Set featured image' text
 */ 
function cp_replace_featured_image_metabox( $post_type, $context ) {
	$my_post_type = 'post';

	if ( $post_type == $my_post_type && 'side' == $context ) {
		remove_meta_box( 'postimagediv', $my_post_type, 'side' );

		add_meta_box( 'postimagediv', __( 'Thumbnail Image' ), 'post_thumbnail_meta_box', $my_post_type, 'side', 'low' );
	}

}
add_action( 'do_meta_boxes', 'cp_replace_featured_image_metabox', 10, 2 );


function cp_change_featured_image_link_text( $content, $post_id ) {
	
	$post = get_post($post_id);

	if ( 'post' == get_post_type($post) ) {
		$content = str_replace( 'Set featured image', __( 'Set thumbnail image'), $content );
		$content = str_replace( 'Remove featured image', __( 'Remove thumbnail image'), $content );
	}
	return $content;
}
add_filter( 'admin_post_thumbnail_html', 'cp_change_featured_image_link_text', 10, 2 );


function cp_update_media_view_featured_image_titles( $settings, $post ) {

	if ( 'post' == $post->post_type ) {
		$settings['setFeaturedImageTitle'] = __( "Thumbnail Image" );
		$settings['setFeaturedImage']      = __( "Set thumbnail image" );
	}

	return $settings;
}

add_filter( 'media_view_strings', 'cp_update_media_view_featured_image_titles', 10, 2 );


/**
 * Meta OG/Twitter image setup
 */
function catch_that_image() {
  global $post, $posts;
  $first_img = '';
  $post_thumbnail_id = get_post_thumbnail_id( $post->ID );
  $post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id );
  ob_start();
  ob_end_clean();
  $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
  $first_img = $matches[1][0];

  if(empty($first_img)) {
    $first_img = $post_thumbnail_url;
  }
  return $first_img;
}


