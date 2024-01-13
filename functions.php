<?php 
// Enquesing custom CSS&JS files
function securewarehub_files() {
    //enqueue CSS
    wp_enqueue_style('mainCSS', get_template_directory_uri() . '/css/main.css', array(), '1.0');

    //enqueue JS
    wp_enqueue_script('jquery');
    wp_enqueue_script('mainJS', get_stylesheet_directory_uri() . '/js/main.js', array(), 1.0, true);
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

if(!function_exists('load_my_script')){
    function load_my_script() {
        global $post;
        $deps = array('jquery');
        $version= '1.0'; 
        $in_footer = true;
        wp_enqueue_script('my-script', get_stylesheet_directory_uri() . '/js/my-script.js', $deps, $version, $in_footer);
        wp_localize_script('my-script', 'my_script_vars', array(
                'postID' => $post->ID
            )
        );
    }
}
add_action('wp_enqueue_scripts', 'load_my_script');

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