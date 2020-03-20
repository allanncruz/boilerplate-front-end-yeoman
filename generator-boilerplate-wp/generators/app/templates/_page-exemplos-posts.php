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

                        <h2 class="my-5">Loop de postagem com Accordion</h2>
                        <div id="accordion" class="post-accordion">
                            <?php

                            $exams = new WP_Query([
                                'post_type' => ['blog']]);
                            if ($exams->have_posts()) :

                                while ($exams->have_posts()) : $exams->the_post(); ?>
                                    <div class="card py-3">
                                    <div class="card-header" id="<?php the_ID(); ?>">
                                        <a data-toggle="collapse"
                                        data-target="#collapse<?php the_ID(); ?>"
                                        aria-expanded="false"
                                        aria-controls="collapseOne">

                                            <?php the_Title(); ?><i class="fas fa-chevron-down"></i>
                                        </a>
                                    </div>
                                    <div  class="collapse"
                                        id="collapse<?php the_ID(); ?>"
                                        role="tabpanel"
                                        aria-labelledby="heading<?php the_ID(); ?>"
                                        data-parent="#accordion" >

                                        <div class="card-body">
                                            <?php the_Content(); ?>
                                        </div>
                                    </div>
                                <?php endwhile; wp_reset_query(); ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>