<?php

define('COMPILE_SCSS', true);

requireIncludes([
    'super_site',
    'cpt',
    'enqueue',
    'nav',
    'theme',
]);

function requireIncludes( array $files ) {
    foreach ($files as $file) {
        require_once __DIR__ . '/includes/' . $file . '.php';
    }
}