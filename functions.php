<?php

// Add theme support

add_theme_support('title-tag');
add_theme_support('post-thumbnails');
add_theme_support( 'post_format', ['aside','gallery','link','image',
'qoute', 'status', 'video', 'audio', 'chat']);
add_theme_support( 'html5');
add_theme_support( 'automatic-feed-links');
add_theme_support( 'custom-background');
add_theme_support( 'custom-header');
add_theme_support( 'custom-logo');
add_theme_support( 'customizer-selective-refresh-widgets');
add_theme_support( 'starter-content');


//Load CSS & Custom JS
function jono_enqueue_styles() {
    wp_enqueue_style('main-css', get_stylesheet_directory_uri() . '/style.css', [], time(), 'all');
    wp_enqueue_script('custom-js', get_template_directory_uri() . '/assets/nav.js' );
    wp_enqueue_script('splide' , 'https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js');
    wp_enqueue_script('splide-init', get_template_directory_uri() . '/assets/slider.js');
    wp_enqueue_style('splide-css' , 'https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css' );

}

add_action('wp_enqueue_scripts','jono_enqueue_styles');



// Register Menu 
register_nav_menus( [
    'main-menu' => esc_html__('Main Menu', 'jonotheme')
]);


// Add active class to menu item to register scroll spy
function add_specific_menu_atts( $atts, $item, $args ) {
    $menu_items = array(9);
    if (in_array($item->ID, $menu_items)) {
      $atts['class'] = 'active';
    }
     
    return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_specific_menu_atts', 10, 3 );






?>