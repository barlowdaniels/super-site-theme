<?php
add_action( 'wp_enqueue_scripts', 'enqueueScriptsStyles', 10 );
function enqueueScriptsStyles() {
    // Libraries
    wp_enqueue_script('fontawesome', 'https://kit.fontawesome.com/22fc537164.js'); 
    // TODO: Move FA enqueue to the plugin and replace static enqueue of this specific FA kit with an ACF field in Site Settings for dynamic inclusion of an appropriate kit
    // Theme
    wp_enqueue_script( 'theme-min', get_stylesheet_directory_uri() . '/assets/js/theme.min.js', [], '1.0.0', true );
    wp_enqueue_style( 'theme', get_stylesheet_directory_uri() . '/assets/css/theme.css');
}