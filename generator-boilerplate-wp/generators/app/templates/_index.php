<?php
//Template Name: Home
    get_header(); ?>

    <div class="carousel overflow-hidden">
        <div class="carousel-inner owl-carousel banner owl-anima">
            <!-- Starting the custom carousel loop post-->
            <?php
            $anima = new WP_Query(array( 'post_type' => 'animacao' ));
            if ($anima->have_posts()):
                while ($anima->have_posts()): $anima->the_post(); ?>
                    <div>
                        <img class="carousel-thumbnail w-100"
                             alt="<?php the_title();?>"
                             src="<?php the_post_thumbnail_url(); ?>">
                        <div class="container position-relative">
                            <div class="carousel-legend w-100 d-flex flex-column justify-content-center p-md-5 p-3 position-absolute text-center">
                                <h2 class="position-relative text-white"><?php the_title(); ?></h2>
                                <?php the_content(); ?>
                                <div class="w-100 d-block d-md-flex justify-content-center mt-0 mt-md-5">
                                    <?php
                                    $link2 = get_field('vitrine-btn-primary');
                                    if( $link2 ):
                                        $link2_url = $link2['url'];
                                        $link2_title = $link2['title'];
                                        $link2_target = $link2['target'] ? $link2['target'] : '_self';
                                        ?>
                                        <a href="<?php echo esc_url( $link2_url ); ?>" class="btn btn-outline-light mt-3 mr-md-3 mr-0"  target="<?php echo esc_attr( $link2_target ); ?>">
                                            <?php echo esc_attr( $link2_title ); ?>
                                        </a>
                                    <?php endif; ?>
                                    <?php
                                    $link = get_field('vitrine-btn-secondary');
                                    if( $link ):
                                        $link_url = $link['url'];
                                        $link_title = $link['title'];
                                        $link_target = $link['target'] ? $link['target'] : '_self';
                                        ?>
                                        <a href="<?php echo esc_url( $link_url ); ?>" class="btn btn-light mt-3"  target="<?php echo esc_attr( $link_target ); ?>">
                                            <?php echo esc_attr( $link_title ); ?>
                                        </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; else : { ?>
                <div class="carousel-none">
                    <h2>Nenhuma vitrine Adicionada</h2>
                </div>
                <?php }
            endif;
            ?>
            <!-- Finish carousel loop-->
        </div>
    </div>

    <main>
        <section class="company py-5">
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

        <section class="cards py-5">
            <div class="container">
                <h1 class="text-center">Blog</h1>

                <!-- News -->
                <div class="carousel-inner owl-carousel owl-cards">
                <?php
                    $blog = new WP_Query(array( 'post_type' => 'blog' ));
                    if ($blog->have_posts()):
                    while ($blog->have_posts()): $blog->the_post(); ?>
                        <?php get_template_part( 'partials/section', 'news' ); ?>
                    <?php endwhile; endif; ?>
                </div>
                <a href="<?php bloginfo("url") ?>/index.php/blog/" class="btn btn-outline-primary m-auto">Mais notícias</a>
            </div>
        </section>
    </main>
<?php get_footer(); ?>