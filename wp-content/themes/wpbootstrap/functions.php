<?php
// Register Nav Walker class_alias
require_once('wp_bootstrap_navwalker.php');
// Theme Support
function wpb_theme_setup(){
    // Nav Menus
    register_nav_menus(array(
        'primary' => __('Primary Menu')
    ));
}
add_action('after_setup_theme','wpb_theme_setup');

// Excerpt length control
function set_excerpt_length(){
    return 20;
}

add_filter('excerpt_length', 'set_excerpt_length');