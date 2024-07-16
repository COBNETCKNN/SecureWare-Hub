<?php 
// Enquesing custom CSS&JS files
function securewarehub_files() {
    //enqueue CSS
    wp_enqueue_style('mainCSS', get_template_directory_uri() . '/css/main.css', array(), '1.0');
	wp_enqueue_style('viewercss', get_template_directory_uri() . '/assets/viewer.js/css/viewer.css', array(), '1.0');

    //enqueue JS
    wp_enqueue_script('jquery');
    wp_enqueue_script('mainJS', get_stylesheet_directory_uri() . '/js/main.js', array(), 1.0, true);
	wp_enqueue_script('viewerjs', get_stylesheet_directory_uri(). '/assets/viewer.js/js/viewer.js', array(), 1.0, true);
}

add_action( 'wp_enqueue_scripts', 'securewarehub_files' );

// Register Custom Navigation Menu
function register_custom_menu() {
    register_nav_menu('header-menu', __('Header Menu'));
}

// Hook into the 'after_setup_theme' action
add_action('after_setup_theme', 'register_custom_menu');

// Theme Support
add_theme_support('custom-logo');
add_theme_support('menus');
add_theme_support('post-thumbnails');

// Adding custom image sizes
add_image_size('logo-size', 310, 60, true);
add_image_size('trustedBy', 200, 60, true);
add_image_size('gallerypreview', 400, 250, true);

// Exclude node_modules from exporting All In One Migration Plugin
add_filter( 'ai1wm_exclude_themes_from_export',
function ( $exclude_filters ) {
  $exclude_filters[] = 'securewarehubTheme/node_modules'; // insert your theme name
  return $exclude_filters;
} );

//registratin of a sidebar
add_action( 'widgets_init', 'my_register_sidebars' );
function my_register_sidebars() {
	/* Register the 'primary' sidebar. */
	register_sidebar(
		array(
			'id'            => 'primary',
			'name'          => __( 'Primary Sidebar' ),
			'description'   => __( 'A short description of the sidebar.' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
	/* Repeat register_sidebar() code for additional sidebars. */
}

function wpb_add_googleanalytics() {
?>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-DKSEGX5N7D"></script>
<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());
	gtag('config', 'G-DKSEGX5N7D');
</script>
<?php
}
add_action('wp_head', 'wpb_add_googleanalytics');
