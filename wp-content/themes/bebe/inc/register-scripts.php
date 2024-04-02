<?php


function bebe_scripts() {
    wp_enqueue_script('jquery');
    wp_enqueue_script('bebe-scripts', get_template_directory_uri() . '/assets/js/scripts.js', array(), _S_VERSION, true);
    wp_enqueue_script('scrollable', get_template_directory_uri() . '/assets/js/scrollable.js', array(), _S_VERSION, true);
    wp_enqueue_script('flexslider', get_template_directory_uri() . '/assets/js/jquery.flexslider-min.js', array(), _S_VERSION, true);
    wp_enqueue_script('bebe-scripts', get_template_directory_uri() . '/assets/js/scripts.js', array(), _S_VERSION, true);
}

add_action('wp_enqueue_scripts', 'bebe_scripts');
