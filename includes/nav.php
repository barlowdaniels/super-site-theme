<?php

// Register WP menu locations
register_nav_menus( array(
    'main' => esc_html__( 'Main', 'supertheme' ),
    'services' => esc_html__( 'Services', 'supertheme' ),
    'footer' => esc_html__('Footer', 'supertheme'),
    'legal' => esc_html__( 'Legal', 'supertheme' ),
) );