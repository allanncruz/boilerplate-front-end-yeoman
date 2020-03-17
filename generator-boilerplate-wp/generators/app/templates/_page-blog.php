<?php get_header(); ?>

<?php the_post() ?>

    <section class="wrap">
        <div class="container content-area mt-5">
            <div class="text-center">
                <h3 class="sub-title m-0">Subtitle</h3>
                <h1 class="title"><?php the_title(); ?></h1>
            </div>  
            
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <img onerror="this.style.display='none'" src="<?php the_post_thumbnail_url(); ?>" class="single-thumbnail my-4">
                    <article class="px-md-5 px-2">
                        <?php the_content(); ?>
                    </article>
                </div>
                <div class="col-md-12">
                    <div class="row">
                        <?php
                        $blog = new WP_Query(array( 'post_type' => 'blog' ));
                        if ($blog->have_posts()):
                            while ($blog->have_posts()): $blog->the_post(); ?>
                            <div class="col-md-4">
                                <a href="<?php the_permalink(); ?>">
                                    <div class="cards-item mx-1">
                                        <div class="">
                                            <img class="cards-item__image" onerror="this.style.display='none'" src="<?php the_post_thumbnail_url(); ?>" />
                                        </div>
                                        <div class="cards-item__legend px-4 py-3">
                                            <div class="cards-item__data text-white">
                                                <?php the_time( get_option( 'date_format' ) ); ?>
                                            </div>
                                            <span class="card-category mt-3">
                                                <?php echo get_the_term_list( get_the_ID(), 'blog_taxonomy', '#', ', ' ); ?>
                                            </span>
                                            <h5 class="cards-item__title"><?php the_title(); ?></h5>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php endwhile; endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>