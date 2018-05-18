<?php
/**
 * kingwood-2017 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package kingwood-2017
 */

if ( ! function_exists( 'kingwood_2017_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function kingwood_2017_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on kingwood-2017, use a find and replace
	 * to change 'kingwood-2017' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'kingwood-2017', get_template_directory() . '/languages' );

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
		'menu-1' => esc_html__( 'Top Nav', 'kingwood-2017' ),
		'menu-2' => esc_html__( 'Footer Nav', 'kingwood-2017' ),
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
	add_theme_support( 'custom-background', apply_filters( 'kingwood_2017_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'kingwood_2017_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function kingwood_2017_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'kingwood_2017_content_width', 640 );
}
add_action( 'after_setup_theme', 'kingwood_2017_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function kingwood_2017_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'kingwood-2017' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'kingwood-2017' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'kingwood_2017_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function kingwood_2017_scripts() {
	wp_enqueue_style( 'kingwood-2017-style', get_stylesheet_uri() );

	wp_register_style( 'kingwood-2017-fonts', 'https://fonts.googleapis.com/css?family=Montserrat:300,700' );
	wp_enqueue_style('kingwood-2017-fonts');

	wp_enqueue_script( 'kingwood-2017-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'kingwood-2017-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	wp_enqueue_script( 'kingwood-2017-headroom', get_template_directory_uri() . '/js/headroom.js', array(), '20170101', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'kingwood_2017_scripts' );

/**
 * Additional urls are passed from external resources to anonymous function
 */

function modify_superpwa_sw_template ($template) {
	$additional_urls = [];
	$urls_list = [
	  '\'https://fonts.googleapis.com/css?family=Montserrat:300,700\''
	];
	$urls_list = is_array($urls_list) ? $urls_list : [];
	$urls_list = array_merge($additional_urls, $urls_list);
	$pattern = '/(const filesToCache = \[.*)(\];)/';
	$replacement = sprintf('\\1%s\\2', count($urls_list) >= 2 ? ', \'' . implode('\',\'', $urls_list) . '\'' : ( count($urls_list) > 0 ? ', ' . $urls_list[0] : ''));
	return preg_replace($pattern, $replacement, $template);
}

add_filter('superpwa_sw_template', 'modify_superpwa_sw_template');







function change_sermon_labels() {

	$sermon_object = get_post_type_object( 'wpfc_sermon' );

	if ( ! $sermon_object )
	    return FALSE;

	// see get_post_type_labels()
	$sermon_object->labels->name               = 'Messages';
	$sermon_object->labels->singular_name      = 'Message';
	$sermon_object->labels->add_new_item       = 'Add new Message';
	$sermon_object->labels->all_items          = 'All Messages';
	$sermon_object->labels->edit_item          = 'Edit Message';
	$sermon_object->labels->name_admin_bar     = 'Messages';
	$sermon_object->labels->menu_name          = 'Messages';
	$sermon_object->labels->new_item           = 'New Message';
	$sermon_object->labels->not_found          = 'No Messages found';
	$sermon_object->labels->not_found_in_trash = 'No Messages found in trash';
	$sermon_object->labels->search_items       = 'Search Messages';
	$sermon_object->labels->view_item          = 'View Message';

	return TRUE;
}

add_action( 'wp_loaded', 'change_sermon_labels', 20 );


function change_preacher_labels() {

	$preacher_object = get_taxonomy('wpfc_preacher');

	if ( ! $preacher_object )
	    return FALSE;

	// see get_post_type_labels()
	$preacher_object->labels->name               = 'Pastors';
	$preacher_object->labels->singular_name      = 'Pastor';
	$preacher_object->labels->add_new_item       = 'Add new Pastor';
	$preacher_object->labels->all_items          = 'All Pastors';
	$preacher_object->labels->edit_item          = 'Edit Pastor';
	$preacher_object->labels->name_admin_bar     = 'Pastors';
	$preacher_object->labels->menu_name          = 'Pastors';
	$preacher_object->labels->new_item           = 'New Pastor';
	$preacher_object->labels->not_found          = 'No Pastors found';
	$preacher_object->labels->not_found_in_trash = 'No Pastors found in trash';
	$preacher_object->labels->search_items       = 'Search Pastors';
	$preacher_object->labels->view_item          = 'View Pastor';

	//$preacher_object->rewrite['slug'] = 'about/leadership/';
	//$preacher_object->rewrite['with_front'] = false;

	// re-register the taxonomy
	register_taxonomy( 'wpfc_preacher', 'wpfc_sermon', (array) $preacher_object );

	return TRUE;
}

add_action( 'wp_loaded', 'change_preacher_labels', 20 );


function change_sermon_series_labels() {
	$sermon_series = get_taxonomy('wpfc_sermon_series');

	if ( ! $sermon_series )
	    return FALSE;

	// see get_post_type_labels()
	$sermon_series->labels->name               = 'Series';
	$sermon_series->labels->singular_name      = 'Series';
	$sermon_series->labels->add_new_item       = 'Add Series';
	$sermon_series->labels->all_items          = 'All Series';
	$sermon_series->labels->edit_item          = 'Edit Series';
	$sermon_series->labels->name_admin_bar     = 'Series';
	$sermon_series->labels->menu_name          = 'Series';
	$sermon_series->labels->new_item           = 'New Series';
	$sermon_series->labels->not_found          = 'No Series found';
	$sermon_series->labels->not_found_in_trash = 'No Series found in trash';
	$sermon_series->labels->search_items       = 'Search Series';
	$sermon_series->labels->view_item          = 'View Series';

	//$sermon_series->rewrite['slug'] = 'about/leadership/';
	//$sermon_series->rewrite['with_front'] = false;

	// re-register the taxonomy
	register_taxonomy( 'wpfc_sermon_series', 'wpfc_sermon', (array) $sermon_series );

	return TRUE;
}

add_action( 'wp_loaded', 'change_sermon_series_labels', 20 );



function change_sermon_image_sizes() {
	set_post_thumbnail_size( 640, 360, true );
  if ( function_exists( 'add_image_size' ) ) {

		add_image_size( 'sermon_small', 640, 360, true );
		add_image_size( 'sermon_medium', 1280, 720, true );
		add_image_size( 'sermon_wide', 1600, 900, true );

	}
}
add_action( 'after_setup_theme', 'change_sermon_image_sizes', 11 );


function modify_archive_title( $title ) { 
	$healthy = array("Pastor: ", "Series: ", "Service: ");
	$yummy   = array("<small>Pastor</small>", "<small>Series</small>", "<small>Service</small>");

	return str_replace($healthy, $yummy, str_replace("Archives: ", "", $title));
}

add_filter( 'get_the_archive_title', 'modify_archive_title' );


function wpb_autolink_featured_images( $html, $post_id, $post_image_id ) {
	if (! is_singular()) {
		return '<a href="' . get_permalink( $post_id ) . '" title="' . esc_attr( get_the_title( $post_id ) ) . '">' . $html . '</a>';
	}
	return $html;
}

add_filter( 'post_thumbnail_html', 'wpb_autolink_featured_images', 10, 3 );


function form_link($atts, $content = null) {
    extract(shortcode_atts(array(
        "to" => ''
    ), $atts));
    return  '<div class="page-form-button">'.
						'<a href="'.$to.'" onclick="trackLink(\''.$to.'\', \'forms\'); return false;" class="button">'.
						  $content.
						'</a></div>';
}




add_shortcode("form-link", "form_link");


// Custom Scripting to Move JavaScript from the Head to the Footer

function remove_head_scripts() { 
   remove_action('wp_head', 'wp_print_scripts'); 
   remove_action('wp_head', 'wp_print_head_scripts', 9); 
   remove_action('wp_head', 'wp_enqueue_scripts', 1);

   add_action('wp_footer', 'wp_print_scripts', 5);
   add_action('wp_footer', 'wp_enqueue_scripts', 5);
   add_action('wp_footer', 'wp_print_head_scripts', 5); 
} 
add_action( 'wp_enqueue_scripts', 'remove_head_scripts' );

function get_taxonony_toDisplay($post_id, $taxonomy_name) {
	$terms = wp_get_post_terms($post_id, $taxonomy_name);
	$count = count($terms);
	if ( $count > 0 ) {
		foreach ( $terms as $term ) {
			echo $term->name . " ";
		}
	}
	}
 
// END Custom Scripting to Move JavaScript


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
