<?php
//adds child theme stylesheet
add_action( 'wp_enqueue_scripts', 'load_my_child_styles', 20 );
function load_my_child_styles() {
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri().'/style.css', array('twentyfourteen-style'), '1.0.0' );
}

//adding navigations
function register_my_menus() {
  register_nav_menus(
    array(
      'main-menu' => __( 'Main Menu' ),
      'about-menu' => __( 'About Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

//adding shortcode for buttons
function sButton($atts, $content = null) {
   extract(shortcode_atts(array('link' => '#'), $atts));
   return '<a class="button" href="'.$link.'" target="_blank"><span>' . do_shortcode($content) . '</span></a>';
}
add_shortcode('button', 'sButton');

//removing paragraph fitlers
remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );

/**
 * Enqueue scripts and styles.
 *
 * @since Twenty Fifteen 1.0
 */
function twentyfifteenchild_scripts() {
    // Add Genericons, used in the main stylesheet.
    wp_enqueue_style( 'fancybox-style', get_stylesheet_directory_uri() . '/js/fancybox/jquery.fancybox.css', array(), '2.1.5' );
    wp_enqueue_style( 'mmenu-style', get_stylesheet_directory_uri() . '/js/mmenu/jquery.mmenu.all.css', array(), '1.0' );
    wp_enqueue_style( 'mmenu-position-style', get_stylesheet_directory_uri() . '/js/mmenu/jquery.mmenu.positioning.css', array(), '1.0' );

    wp_enqueue_script( 'library', get_stylesheet_directory_uri() . '/js/jquery-1.11.2.min.js', array(), '1.11.2', true );
    wp_enqueue_script( 'fancybox', get_stylesheet_directory_uri() . '/js/fancybox/jquery.fancybox.js', array(), '2.1.5', true );
    wp_enqueue_script( 'mmenu', get_stylesheet_directory_uri() . '/js/mmenu/jquery.mmenu.min.all.js', array(), '4.7.5', true );
    wp_enqueue_script( 'waypoints', get_stylesheet_directory_uri() . '/js/jquery.waypoints.min.js', array(), '3.1.1', true );
    wp_enqueue_script( 'script', get_stylesheet_directory_uri() . '/js/script.js', array(), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'twentyfifteenchild_scripts' );
?>