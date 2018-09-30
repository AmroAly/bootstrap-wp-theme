<?php

require_once('class-wp-bootstrap-navwalker.php');

function theme_setup() {
    // add thumbnail support
    add_theme_support('post-thumbnails');

    // Register menus
    register_nav_menus( array(
        'primary' => __('Primary Menu'),
    ) );
}

add_action('after_setup_theme', 'theme_setup');