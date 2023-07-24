<?php

function get_custom_thumbnail( $post_id, $size = "featured-large", $additional_attributes = [] ) {
    $custom_thumbnail = "";

    if($post_id === null) {
        $post_id = get_the_ID();
    }

    if( has_post_thumbnail( $post_id ) ) {
        
        $default_attributes = [];
        
        $attributes = array_merge($additional_attributes, $default_attributes);

        $custom_thumbnail = wp_get_attachment_image(
            get_post_thumbnail_id( $post_id ),
            $size,
            false,
            $attributes
        );
    }

    return $custom_thumbnail;
}

function the_custom_thumbnail( $post_id, $size = "featured-large", $additional_attributes = [] ) {
    echo get_custom_thumbnail($post_id, $size, $additional_attributes);
}


?>