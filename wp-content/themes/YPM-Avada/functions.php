<?php

function theme_enqueue_styles() {
    wp_enqueue_style( 'avada-parent-stylesheet', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

function avada_lang_setup() {
	$lang = get_stylesheet_directory() . '/languages';
	load_child_theme_textdomain( 'Avada', $lang );
}
add_action( 'after_setup_theme', 'avada_lang_setup' );
function getPageTitle() {
  global $wp_query;
 return str_replace("YPM -","",trim(wp_title("",false)));
}

/* Add shortcode */
add_shortcode('page_title', 'getPageTitle');

function getBreadcrumbs() {
    ob_start();
	fusion_breadcrumbs();
	$breadcrumbs_content = ob_get_contents();
	ob_get_clean();
	return $breadcrumbs_content;
}

/* Add shortcode */
add_shortcode('breadcrumbs', 'getBreadcrumbs');

?>
