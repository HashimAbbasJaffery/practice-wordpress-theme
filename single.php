<?php get_header(); ?>
    <header id="cover-image">
    <?php the_custom_thumbnail( 
                get_the_ID(),
                "featured-large",
                [
                    "class" => "attachement-featured-large size-featured-large"
                ]
            ) ?>
    </header>
    <div class="container">
        <?php
            $is_hidden = get_post_meta( get_the_ID() , "_hide_page_title", true);
            if(($is_hidden === "no") || empty($is_hidden)):
        ?>
            <h1><?php the_title(); ?></h1>
        <?php endif; ?>
        <div class="post-content">
            <?php the_content(); ?>
        </div>
    </div>
<?php get_footer(); ?>
