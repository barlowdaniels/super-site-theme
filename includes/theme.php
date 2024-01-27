<?php

// Add post thumbnail support
add_theme_support( 'post-thumbnails' ); 

// Remove forced ellipsis from excerpts
add_filter('excerpt_more', function() {
    return '&hellip;';
});