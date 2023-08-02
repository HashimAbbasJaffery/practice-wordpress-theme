
<article class="col-lg-4 col-md-6 col-sm-12" style="height: 100%;">
    <!-- <h3 style="font-size: 20px;"><?php the_title(); ?></h3>
    <p><?php the_excerpt(); ?></p> -->
    <div id="post-thumbnail" style="height: 250px; overflow: hidden;">
        <?php get_template_part("template-parts/components/entry-header"); ?>
    </div>
    <div id="post-details">
        <?php get_template_part("template-parts/components/entry-body"); ?>
    </div>
    <div class="posted-on mb-3">
        <?php get_template_part("template-parts/components/entry-meta"); ?>
    </div>
</article>