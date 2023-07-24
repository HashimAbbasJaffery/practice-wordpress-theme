<?php 

namespace PRACTICE_THEME\Inc;
use PRACTICE_THEME\Inc\Traits\Singleton;



class Menus {
    use Singleton;

    protected function __construct() {
        
        $this->set_hooks();
    }

    protected function set_hooks() {
    
        add_action("init", [$this, "register_menus"]);
    
    }

    public function register_menus() {

        register_nav_menus(
            [
                "practice-header-menu" => esc_html__("Header Menu", "practice"),
                "practice-footer-menu" => esc_html__("Footer Menu", "practice")
            ]
        );

    }

    public function get_menu_id($location) {
        $locations = get_nav_menu_locations();

        $location = $locations[ $location ];

        return (!empty($location)) ? $location : "";
    }

}




?>