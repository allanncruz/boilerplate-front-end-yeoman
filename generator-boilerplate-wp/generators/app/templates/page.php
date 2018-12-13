<?php get_header(); ?>

    <section class="internal-page">
        <div class="container featurette mt-5">

            <div class="box-container bg-white p-5 mb-5 shadow-sm">
                <div class="row">
                    <div class="col-12 col-md-12">
                        <?php if(have_posts()): while(have_posts()): the_post(); ?>
                            <h1 class="display-4 text-center"><?php the_title(); ?></h1>
                            <img onerror="this.style.display='none'" src="<?php the_post_thumbnail_url(); ?>"
                                 class="img-thumbnail photo-highlight w-100 p-0 shadow mt-2 mb-3 ml-4 rounded-0 float-right">
                            <?php the_content(); ?>
                        <?php endwhile; endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>