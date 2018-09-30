<?php

function theme_setup() {
    // add thumbnail support
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'theme_setup');