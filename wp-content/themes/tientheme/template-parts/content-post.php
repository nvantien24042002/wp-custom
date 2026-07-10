<article class="post-card">
    <?php if (has_post_thumbnail()) : ?>
        <div class="post-thumb">
            <?php the_post_thumbnail('medium'); ?>
        </div>
    <?php endif; ?>
    <div class="post-categories">
        <?php echo get_the_category_list(', '); ?>
    </div>
    <h2 class="post-title">
        <a href="<?php the_permalink(); ?>">
            <?php the_title(); ?>
        </a>
    </h2>
    <div class="post-excerpt">
        <?php the_excerpt(); ?>
    </div>
</article>