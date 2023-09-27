<?php

/**
 * Functions
 */

/******************************************************************************
 * Included Functions
 ******************************************************************************/


add_filter('show_admin_bar', '__return_false');

remove_action('wp_head',              'print_emoji_detection_script', 7);
remove_action('admin_print_scripts',  'print_emoji_detection_script');
remove_action('wp_print_styles',      'print_emoji_styles');
remove_action('admin_print_styles',   'print_emoji_styles');

remove_action('wp_head', 'wp_resource_hints', 2);
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'rest_output_link_wp_head');
remove_action('wp_head', 'rel_canonical');
remove_action('wp_head', 'wp_shortlink_wp_head');
remove_action('wp_head', 'wp_oembed_add_discovery_links');


/* Theme Setting Options */
if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title'    => 'Theme General Settings',
        'menu_title'    => 'Theme Settings',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));



}

/* ADD Custom Menu */

function wpb_custom_new_menu() {
    register_nav_menus(
        array(
            'header-menu' => __( 'Header Menu' ),
            'footer-menu' => __( 'Footer Menu' )
        )
    );
}
add_action( 'init', 'wpb_custom_new_menu' );

// CUSTOM WP LOGO

// Custom Logo
add_theme_support( 'custom-logo', array(
    'height'      => '150',
    'flex-height' => true,
    'flex-width'  => true,
) );

/* Gutenbergs Block */

require get_template_directory() . '/inc/template-functions.php';

/* Register Custom Post Type and Taxonomy*/
require get_template_directory() . '/inc/custom-post-type.php';

// Connect style and scripts
add_action( 'wp_enqueue_scripts', 'my_scripts_method' );
function my_scripts_method(){
    wp_deregister_script('jquery');
    wp_register_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery-3.6.4.min.js', false, null, true );
    wp_enqueue_script('jquery');
    wp_enqueue_style( 'style', get_template_directory_uri(). '/assets/css/style.css' );
    wp_enqueue_style( 'mytheme-bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css' );
    wp_enqueue_style( 'mytheme-fontawesome', 'https://use.fontawesome.com/releases/v6.4.0/css/all.css' );
    wp_enqueue_script('mytheme-bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js', array(), false, true);
    wp_enqueue_script('your-script-handle', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), null, true);

wp_localize_script('your-script-handle', 'ajax_object', array('ajax_url' => admin_url('admin-ajax.php')));
}

function enqueue_custom_admin_styles() {
    wp_enqueue_style('custom-admin-styles', get_template_directory_uri() . '/assets/css/style.css');
}
add_action('admin_enqueue_scripts', 'enqueue_custom_admin_styles');