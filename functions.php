<?php
/**
 * Starship functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Starship
 */

/**
 * Убираем мусор из шапки.
 */
require get_template_directory() . '/inc/remove-links.php';


if ( ! function_exists( 'starship_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function starship_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Starship, use a find and replace
	 * to change 'starship' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'starship', get_template_directory() . '/languages' );

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
		'primary' => esc_html__( 'Primary', 'starship' ),
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

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'starship_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'starship_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function starship_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'starship_content_width', 640 );
}
add_action( 'after_setup_theme', 'starship_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function starship_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'starship' ),
		'id'            => 'sidebar-1',
		'description'   => 'sidebar-left-1',
		'before_widget' => '<div class="panel panel-danger">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="panel-heading">',
		'after_title'   => '</div>',
	) );

}
add_action( 'widgets_init', 'starship_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function starship_scripts() {
	wp_enqueue_style( 'starship-style', get_stylesheet_uri() );
	wp_enqueue_style( 'bootstrap-core-css', get_template_directory_uri() . '/dist/css/bootstrap.min.css' );
	wp_enqueue_style( 'starship-main-style', get_template_directory_uri() . '/css/main.css' );
  //wp_enqueue_style( 'starship-main-media', get_template_directory_uri() . '/css/media.css' );

  wp_enqueue_style( 'expandable-search-input', get_template_directory_uri() . '/css/toggle-navbar.css' );
	//wp_enqueue_style( 'contact-form', get_template_directory_uri() . '/css/contact.css' );

	//wp_enqueue_style( 'stylish-search-form.css', get_template_directory_uri() . '/css/stylish-search-form.css' );

	//wp_enqueue_style( 'starship-layouts', get_template_directory_uri() . '/layouts/content-sidebar.css' );

  wp_enqueue_style( 'ie10-viewport-bug-workaround', get_template_directory_uri() . '/assets/css/ie10-viewport-bug-workaround.css' );
 //Bootstrap script
	wp_enqueue_script( 'starship-bootstrap-min', get_template_directory_uri() . '/dist/js/bootstrap.min.js', array(), '20120206', false );

	wp_enqueue_script( 'starship-ie10-viewport', get_template_directory_uri() . '/assets/js/ie10-viewport-bug-workaround.js', array(), '20120206', true );

	//wp_enqueue_script( 'starship-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', false );

 	//wp_enqueue_script( 'starship-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'starship_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Содержание для больших постов.
 */
//require get_template_directory() . '/inc/contents.php';

/**
 * Dimox breadcrumbs
 */
require get_template_directory() . '/inc/dimox-breadcrumbs.php';

/**
 * Load TGM Plugins.
 */
require get_template_directory() . '/tgm/example-starship.php';

/**
 * Позволяет добавлять различные своиства к меню
 */
//require get_template_directory() . '/inc/Walker-Quickstart-Menu.php';

/**
 * add automatic class in image for wordpress post (img responsive bootstrap css) Add-Img-Responsive-Css-Class.php
 */
 require get_template_directory() . '/inc/Add-Img-Responsive-Css-Class.php';

 /**
  * Modify The Read More Link Text  Modify-Read-More.php
  */
 require get_template_directory() . '/inc/Modify-Read-More.php';


//http://www.haloseeker.com/how-to-add-numeric-wordpress-pagination-without-plugin/
//http://dimox.name/wordpress-pagination-without-a-plugin/
 function wp_pagination() {
 global $wp_query;
 $big = 12345678;
 $page_format = paginate_links( array(
     'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
     'format' => '?paged=%#%',
     'current' => max( 1, get_query_var('paged') ),
     'total' => $wp_query->max_num_pages,
     'type'  => 'array',
		 'prev_text' => '&laquo;', //текст ссылки "Предыдущая страница"
		 'next_text' => '&raquo;' //текст ссылки "Следующая страница"
 ) );
 if( is_array($page_format) ) {
             $paged = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged');
             echo '<nav><ul class="pagination pagination-lg">';
             echo '<li><span aria-hidden="true">Страница '. $paged . ' из ' . $wp_query->max_num_pages .'</span></li>';
             foreach ( $page_format as $page ) {
                     echo "<li>$page</li>";
             }
            echo '</ul></nav>';
 }
 }
