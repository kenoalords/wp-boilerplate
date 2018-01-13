<?php

/*
* Base constant definitions for webdesk
*/

define('IMAGES', get_template_directory_uri().'/images');
define('JS', get_template_directory_uri().'/js');
define('CSS', get_template_directory_uri().'/css');
define('LIB', get_template_directory_uri().'/lib');
define('INC', get_template_directory_uri().'/inc');

require_once('inc/BulmaWalker.php');

function webdesk_setup() {
	load_theme_textdomain( 'webdesk' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Manage title tag
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 */
	add_theme_support( 'post-thumbnails' );

	add_image_size( 'webdesk-featured-image', 1960, 1200, true );

	add_image_size( 'webdesk-250x250', 250, 250, true );
	add_image_size( 'webdesk-100x100', 100, 100, true );

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary'    => __( 'Primary Menu', 'webdesk' ),
		'footer'    => __( 'Footer Menu', 'webdesk' ),
		'social' => __( 'Social Links Menu', 'webdesk' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
		'gallery',
		'audio',
	) );

	// Add theme support for Custom Logo.
	add_theme_support( 'custom-logo', array(
		'width'       => 250,
		'height'      => 250,
		'flex-width'  => true,
	) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
add_action( 'after_setup_theme', 'webdesk_setup' );

function webdesk_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'webdesk' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'webdesk' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 1', 'webdesk' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Add widgets here to appear in your footer.', 'webdesk' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 2', 'webdesk' ),
		'id'            => 'sidebar-3',
		'description'   => __( 'Add widgets here to appear in your footer.', 'webdesk' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'webdesk_widgets_init' );

function webdesk_styles_script_setup() {
	// Include fontawesome style file
	wp_enqueue_style( 'fontawesome-css', LIB . '/font-awesome-4.7.0/css/font-awesome.min.css', '', '1.1', 'all' );

	// Include main style file
	wp_enqueue_style( 'main-css', CSS . '/main.css', '', '1.1', 'all' );

	// Include main javascript file
	wp_enqueue_script( 'main-js', JS . '/main.js', array('jquery'), '1.1', false );
}

// Only enqueue scripts and styles when not in admin dashboard
if (!is_admin()){
	add_action( 'wp_enqueue_scripts', 'webdesk_styles_script_setup', 10, 1 );
}

// Change login url link
function webdesk_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'webdesk_login_logo_url' );

// Change login url title
function webdesk_login_logo_url_title() {
    return get_bloginfo('site-name');
}
add_filter( 'login_headertitle', 'webdesk_login_logo_url_title' );

function my_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
          background-image: url(<?php echo IMAGES; ?>/webdesk-logo.png);
		height:15px;
		width:320px;
		background-size: 140px auto;
		background-repeat: no-repeat;
        	padding-bottom: 20px;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );






