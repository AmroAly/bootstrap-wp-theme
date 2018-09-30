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

function init_widgets() {
    register_sidebar([
        'name' => __('Sidebar'),
        'id'   => 'sidebar',
        'before_widget' => '<div class="card">',
        'after_widget'  => '</div></div>',
        'before_title'  => '<div class="card-body"><h4 class="card-title">',
        'after_title'   => '</h4></div>'
    ]);
}

add_action('widgets_init', 'init_widgets');