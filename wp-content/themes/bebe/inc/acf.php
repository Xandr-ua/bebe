<?php

function register_acf_option_page() {
    if( function_exists('acf_add_options_page') ) {
        $option_page = acf_add_options_page(array(
            'page_title'    => __('Theme General Settings', 'bebe'),
            'menu_title'    => __('Theme Settings', 'bebe'),
            'menu_slug'     => 'theme-general-settings',
            'capability'    => 'general_settings',
            'redirect'      => false,
            'icon_url'     => 'dashicons-admin-generic',
        ));
    }
}

add_action('acf/init', 'register_acf_option_page');
