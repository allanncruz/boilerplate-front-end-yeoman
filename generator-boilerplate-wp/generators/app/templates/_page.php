<?php get_header(); ?>

    <section class="site-content">
        <div class="container">
            <?php if(have_posts()): while(have_posts()): the_post(); ?>
                <h1 class="display-4 text-center"><?php the_title(); ?></h1>
                <img onerror="this.style.display='none'" src="<?php the_post_thumbnail_url(); ?>"
                        class="img-thumbnail">
                <?php the_content(); ?>
            <?php endwhile; endif; ?>
        </div>
    </section>

<?php get_footer(); ?>
