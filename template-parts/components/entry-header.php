<header class="entry-header">
    <div clas="entry-image mb-3">
        <a href="<?php echo esc_url( get_permalink() ) ?>">
            <?php the_custom_thumbnail( 
                get_the_ID(),
                "featured-large",
                [
                    "class" => "attachement-featured-large size-featured-large"
                ]
            ) ?>
        </a>
    </div>
</header>