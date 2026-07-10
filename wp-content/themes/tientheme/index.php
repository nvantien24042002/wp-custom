<?php get_header(); ?>

<main class="container">

    <div class="post-grid">

        <?php if (have_posts()) : ?>
            
            <?php while (have_posts()) : the_post(); ?>

                <?php get_template_part('template-parts/content', 'post'); ?>

            <?php endwhile; ?>

        <?php else : ?>
            <p>No posts found</p>
        <?php endif; ?>

    </div>

</main>

<?php get_footer(); ?>