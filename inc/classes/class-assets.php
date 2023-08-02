<?php 

namespace TEVENT_THEME\Inc;
use PRACTICE_THEME\Inc\Traits\Singleton;

class Assets {
    use Singleton;

    protected function __construct() {
        
        $this->set_hooks();
    }

    protected function set_hooks() {
        add_action( "wp_enqueue_scripts", [$this, "register_styles"] );
        add_action( "wp_enqueue_scripts", [$this, "register_scripts"] );
    }

    public function register_styles() {
    
        wp_register_style('main-css', get_stylesheet_uri(), [], filemtime( get_template_directory() . "/style.css" ));
        wp_register_style("bootstrap", "https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css", [], false);
        
        // Enqueueing style
        wp_enqueue_style( "main-css" );
        wp_enqueue_style("bootstrap");
    
    }

    public function register_scripts() {
    
        // Registering script
    
        wp_register_script("main-js", get_template_directory_uri() . "/assets/main.js", [], filemtime( get_template_directory() . "/assets/main.js" ), true);
        wp_register_script("bootstrap-script", "https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js", [ "jquery" ], false, true);

        // Enqueueing script
        wp_enqueue_script( "main-js" );
        wp_enqueue_script( "bootstrap-script" );
        
    }
}