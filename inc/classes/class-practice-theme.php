<?php 

namespace PRACTICE_THEME\Inc;
use PRACTICE_THEME\Inc\Traits\Singleton;
use PRACTICE_THEME\Inc\Assets;
use PRACTICE_THEME\Inc\Menus;
use PRACTICE_THEME\Inc\Meta_box;



class PRACTICE_THEME {
    use Singleton;

    protected function __construct() {
        
        Meta_box::get_instance();
        Assets::get_instance();
        Menus::get_instance();
        $this->set_hooks();
    }

    protected function set_hooks() {
        add_action( "after_setup_theme", [$this, "setup_theme"] );
    }

    public function setup_theme() {
        add_theme_support( "title-tag" );
        
        add_theme_support( "post-thumbnails" );

        add_theme_support( "custom-logo", [
            "header-text" => ["site-title", "site-description"],
            "height" => 32,
            "width" => 32,
            "flex-width" => true,
            "flex-height" => true
        ] );
        
        if(function_exists("add_image_size")) {
            add_image_size( "featured-large", 289, 251, true );
        }
    }

}




?>