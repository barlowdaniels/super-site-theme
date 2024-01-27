<?php

// add_action('init', 'createTestimonialsCpt');
function createTestimonialsCpt() {
    $labels = array(
        'name' => __('Testimonials', 'textdomain'),
        'singular_name' => __('Testimonial', 'textdomain'),
        'add_new' => __('Add New', 'textdomain'),
        'add_new_item' => __('Add New Testimonial', 'textdomain'),
        'edit_item' => __('Edit Testimonial', 'textdomain'),
        'new_item' => __('New Testimonial', 'textdomain'),
        'view_item' => __('View Testimonial', 'textdomain'),
        'search_items' => __('Search Testimonials', 'textdomain'),
        'not_found' => __('No testimonials found', 'textdomain'),
        'not_found_in_trash' => __('No testimonials found in trash', 'textdomain'),
        'parent_item_colon' => __('Parent Testimonial:', 'textdomain'),
        'menu_name' => __('Testimonials', 'textdomain'),
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'show_in_rest' => false,
        'has_archive' => false,
        'menu_icon' => 'dashicons-star-filled',
        'supports' => array('title', 'editor'),
    );

    register_post_type('testimonial', $args);
}