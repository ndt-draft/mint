<?php

add_action('wp_enqueue_scripts', 'mint_scripts');

function mint_scripts() {
	wp_register_style( 'mint-main-style', get_template_directory_uri() . '/assets/css/main.css');

	wp_enqueue_style( 'mint-main-style' );
}