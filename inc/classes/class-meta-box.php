<?php 

namespace PRACTICE_THEME\Inc;
use PRACTICE_THEME\Inc\Traits\Singleton;
use PRACTICE_THEME\Inc\Assets;
use PRACTICE_THEME\Inc\Menus;



class Meta_box {
    use Singleton;

    protected function __construct() {
        
        $this->set_hooks();

    }

    protected function set_hooks() {
    
        add_action( "add_meta_boxes", [ $this, "add_custom_box" ]);
        add_action( "save_post", [ $this, "save_postmeta" ]);
        
    }

    public function add_custom_box() {

        $screens = [ "post" ];

        foreach($screens as $screen) {
            add_meta_box(
                "hide-page-title",
                __( "Hide page title", "practice" ),
                [ $this, "custom_meta_box_html" ],
                $screen,
                "side"
            );
        }

    }

    public function save_postmeta( $post_id ) {
        if( array_key_exists( "hide-heading", $_POST ) ) {
            update_post_meta(
                $post_id,
                "_hide_page_title",
                $_POST['hide-heading']
            );
        }
    }

    public function custom_meta_box_html( $post ) {

        $value = get_post_meta( $post->ID, "_hide_page_title", true );

        ?>
        <label for="hide-title-field">
            <p><?php esc_html_e("Hide the heading", "practice") ?></p>
            <input type="radio" value="yes" name="hide-heading" <?php checked($value, "yes") ?>/>
            Yes
            &nbsp;
            <input type="radio" value="no" name="hide-heading" <?php checked($value, "no"); ?>/>
            No
        </label>
        <?php 
    }

    
}




?>