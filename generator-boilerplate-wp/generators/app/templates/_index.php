<?php
//Template Name: Home
    get_header(); ?>

    <div class="carousel">
        <div class="carousel--anima carousel-inner owl-carousel owl-anima">
            <!-- Starting the custom carousel loop post-->
            <?php
                $anima = new WP_Query(array( 'post_type' => 'animacao' ));
                    if ($anima->have_posts()): while ($anima->have_posts()): $anima->the_post(); ?>
                        <div>
                            <img class="carousel--thumbnail"
                                alt="<?php the_title();?>"
                                src="<?php the_post_thumbnail_url(); ?>">
                            <div class="container position-relative">
                                <div class="carousel--legend">
                                    <h1 class="carousel--legend__title"><?php the_title(); ?></h1>
                                    <?php the_content(); ?>
                                    <div class="btns">
                                        <a href="#" class="btn btn-primary">Saiba mais</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php   
                    endwhile; 
                    endif; 
                    ?>
            <!-- Finish carousel loop-->
        </div>
    </div>

    <main>
        <section class="company">
            <div class="container">
                <div class="row">
                    <?php
                    $about = new WP_Query(array(
                        'post_type' => 'page',
                        'pagename' => 'pagina-exemplo'
                    ));
                    if($about->have_posts()): ?>
                        <?php while($about->have_posts()): $about->the_post(); ?>
                        <div class="col-md-7">
                            <h1 class="company--title title"><?php the_title(); ?></h1>
                            <?php the_content(); ?>
                            <a href="<?php bloginfo("url") ?>/index.php/pagina-exemplo" class="btn btn-primary">Read More</a>
                        </div>
                        <div class="col-md-5 order-first order-md-2">
                            <img
                                class="img-thumbnail w-100 img-none"
                                src="<?php the_post_thumbnail_url(); ?>"
                                alt="<?php the_title(); ?>"
                            />
                        </div>
                    <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </section>

        <section class="cards">
            <div class="container">
                <h1 class="text-center">Blog</h1>
                <div class="carousel-inner owl-carousel owl-cards">
                    <?php
                    $blog = new WP_Query(array( 'post_type' => 'blog' ));
                    if ($blog->have_posts()):
                        while ($blog->have_posts()): $blog->the_post(); ?>
                        <div>
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
                <a href="<?php bloginfo("url") ?>/index.php/blog/" class="btn btn-outline-primary m-auto">Mais notícias</a>
            </div>
        </section>
    </main>
<?php get_footer(); ?>