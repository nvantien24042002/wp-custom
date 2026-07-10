<?php
get_header();
?>
<div class="post-grid">
    <?php if(have_posts()): ?>
        <?php while(have_posts()) : the_post(); ?>
            <div class="post-card">
                <div class="post-thumb">
                    <?php the_post_thumbnail(); ?>
                </div>

                <h2 class="post-title">
                    <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                    </a>
                </h2>
                <p class="post-excerpt">
                    <?php the_excerpt(); ?>
                </p>

            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</div>
<?php
get_footer();
?>