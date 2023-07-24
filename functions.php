<?php


// use PRACTICE_THEME\Inc\PRACTICE_THEME;

if(!defined("TEMPLATE_DIRECTORY")) {
	define("TEMPLATE_DIRECTORY", untrailingslashit( get_template_directory() ) );
}

if(!defined("PRACTICE_DIR_PATH")) {
	define("PRACTICE_DIR_PATH", untrailingslashit( get_template_directory_uri() ));
}

if(!function_exists("dd")) {
	function dd($content) {
		echo "<pre>";
		print_r($content);
		wp_die();
	}
	
}


require_once TEMPLATE_DIRECTORY . '/inc/helpers/autoloader.php';
require_once TEMPLATE_DIRECTORY . '/inc/helpers/template-tags.php';



function practice_theme_setup() {
	\PRACTICE_THEME\Inc\PRACTICE_THEME::get_instance();
	// PRACTICE_THEME::get_instance();
}

practice_theme_setup();


function aquilla_enqueue_scripts() {
	
	// Registering style
	
}



?>