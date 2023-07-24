<?php get_header(); ?>
    <div id="primary">
        <main id="main" class="site-main mt-5" role="main">
            <?php if( have_posts() ): ?>
                <div class="container">
                    <?php 
                        if( is_home() ):
                    ?>
                        <header class="mb-5">
                            <h1 class="page-title">
                                <?php single_post_title(); ?>
                            </h1>
                        </header>
                    <?php endif; ?>
                    
                    <div class="row">
                        <?php 
                            while( have_posts() ) : the_post();
                        ?>
                            <?php get_template_part("template-parts/post"); ?>
                        <?php
                            endwhile;
                        ?>
                    </div>
                    
                </div>
            <?php else: ?>
                <?php get_template_part("template-parts/no-post"); ?>
            <?php endif; ?>
        </main>
    </div>
<?php get_footer(); ?>
