<div class="mt-5 mb-5">
    <div class="container">
        <h4>No post found!!</h4>
        <?php if(is_home() && current_user_can( "publish_posts" )): ?>
            <p>Are you ready to insert your first post? <a href="<?php echo admin_url( "post-new.php" ) ?>">Get started now</a></p>
        <?php elseif( is_search() ): ?>
            <p>No post was matched with your keyword. Please try again</p>
        <?php else: ?>
            <p>No product found</p>
        <?php endif; ?>
    </div>
</div>