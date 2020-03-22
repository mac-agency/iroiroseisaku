<?php
function divi__child_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'divi__child_theme_enqueue_styles' );
 
 
//you can add custom functions below this line:

//======================================================================
// CUSTOM HEADER
// Adds a layout above the Main Header
//======================================================================
function mp_custom_header_above( $main_header ) {
	$custom_header = '<header id="custom-header-above">';
        $custom_header .= do_shortcode('[et_pb_section global_module="42"][/et_pb_section]');
    $custom_header .= '</header> <!-- #custom-header-above -->';
	return $custom_header . $main_header;
}
add_filter( 'et_html_main_header', 'mp_custom_header_above' );