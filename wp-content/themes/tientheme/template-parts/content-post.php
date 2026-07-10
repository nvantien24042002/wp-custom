<article class="post-card">

    <?php if (has_post_thumbnail()) : ?>
        <div class="post-thumb">
            <?php the_post_thumbnail('medium'); ?>
        </div>
    <?php endif; ?>

    <h2 class="post-title">
        <a href="<?php the_permalink(); ?>">
            <?php the_title(); ?>
        </a>
    </h2>

    <p class="post-excerpt">
        <?php the_excerpt(); ?>
    </p>

</article>