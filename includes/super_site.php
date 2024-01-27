<?php

add_action('init', 'requireSuperSiteClasses');
function requireSuperSiteClasses() {
    require_once WP_PLUGIN_DIR . '/super-site/controllers/FlexibleContent.php';
    require_once WP_PLUGIN_DIR . '/super-site/controllers/Block.php';
    require_once WP_PLUGIN_DIR . '/super-site/controllers/ClickOn.php';
}