<?php

function ap_theme_setup() {
    add_theme_support('title-tag');
}

function ap_theme_document_title($title) {
    return 'Salut le monde !';
}

add_action('after_setup_theme', 'ap_theme_setup');

add_filter('wp_title', 'ap_theme_document_title');


