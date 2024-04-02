<?php

function bebe_styles() {
    wp_enqueue_style( 'bebe-style', get_stylesheet_uri(), array(), _S_VERSION );
    wp_enqueue_style('bebe-general-style', get_template_directory_uri() . '/assets/css/general.css', array(), _S_VERSION, false);
}

add_action('wp_enqueue_scripts', 'bebe_styles');
