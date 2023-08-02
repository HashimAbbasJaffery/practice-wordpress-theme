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

function practice_post_posted_on() {
    $get_time = '<time class="published updated" datetime="%1$s">%2$s</time>';

    if( get_the_time( "U" ) !== get_the_modified_time( "U" )) {
        $get_time = '<time class="published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
    }

    $posted_on = sprintf(
        $get_time,
        esc_attr( get_the_date( DATE_W3C ) ),
        esc_attr(get_the_date()),
        esc_attr(get_the_modified_date( DATE_W3C )),
        esc_attr(get_the_modified_date())
    );


    $posted_on_markup = sprintf(
        esc_html_x( "Posted on: %s", "post date", "practice" ),
        "<a href='" . esc_url( get_permalink() ) . "'>" . $posted_on . "</a>"
    );

    echo $posted_on_markup;
}

?>