<?php


//Load CSS & Custom JS
function jono_enqueue_styles() {
    wp_enqueue_style('main-css', get_stylesheet_directory_uri() . '/style.css', [], time(), 'all');
    wp_enqueue_script('custom-js', get_template_directory_uri() . '/assets/js/nav.js' );
    wp_enqueue_script('custom-mobile', get_template_directory_uri() . '/assets/js/mobile.js' );
    wp_enqueue_script('custom-background', get_template_directory_uri() . '/assets/js/background.js','','',true);
    wp_enqueue_script('custom-animate-letters', get_template_directory_uri() . '/assets/js/animate-letters.js','','',true);
    wp_enqueue_script('splide' , 'https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js');
    wp_enqueue_script('splide-init', get_template_directory_uri() . '/assets/js/slider.js');
    wp_enqueue_style('splide-css' , 'https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css' );
}

add_action('wp_enqueue_scripts','jono_enqueue_styles');





// Register Menu 
register_nav_menus( [
    'main-menu' => esc_html__('Main Menu', 'jonotheme')
]);

//add bootstrap scrollspy to links
function add_link_atts($atts) {
    $atts['class'] = "list-group-item list-group-item-action";
    return $atts;
  }
  add_filter( 'nav_menu_link_attributes', 'add_link_atts');
  

//enable svg support
  function enable_svg_upload( $upload_mimes ) {
    $upload_mimes['svg'] = 'image/svg+xml';
    $upload_mimes['svgz'] = 'image/svg+xml';
    return $upload_mimes;
}
add_filter( 'upload_mimes', 'enable_svg_upload', 10, 1 );


?>


