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
                            <!--                            <img class="company-thumbnail w-100" src="--><?php //the_post_thumbnail_url(); ?><!--">-->
                            <img class="img-thumbnail w-100"
                                 src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22286%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20286%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_16cec93e9a3%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A14pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_16cec93e9a3%22%3E%3Crect%20width%3D%22286%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22106.390625%22%20y%3D%2296.3%22%3E100%x190%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" />
                        </div>
                    <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </section>

        <section class="cards">
            <div class="container">
                <h1 class="text-center">Cards Examples</h1>
                <div class="carousel-inner owl-carousel owl-cards">
                    <?php
                    if ( have_posts() ) {
                        while ( have_posts() ) { the_post(); ?>
                            <a href="<?php the_permalink(); ?>">
                                <div class="cards-item mx-1">
                                    <div class="mb-4">
                                        <img class="cards-item__image"
                                            src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22286%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20286%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_16cec93e9a3%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A14pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_16cec93e9a3%22%3E%3Crect%20width%3D%22286%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22106.390625%22%20y%3D%2296.3%22%3E100%x190%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" />
                                        <!--                                        <img class="cards-image"-->
                                        <!--                                             src="--><?php //the_post_thumbnail_url(); ?><!--" />-->
                                    </div>
                                    <div class="cards-item_legend">
                                        <div class="data">
                                            <i class="far fa-calendar-alt"></i>
                                            <?php the_time( get_option( 'date_format' ) ); ?>
                                        </div>
                                        <h5 class="cards-legend__title"><?php the_title(); ?></h5>
                                        <p class="m-0"><?php the_field('subtitulo'); ?></p>
                                    </div>
                                </div>
                            </a>
                        <?php }
                    }
                    ?>
                </div>
                <a href=<?php bloginfo("url") ?>/?page_id=12" class="btn btn-outline-primary m-auto">Mais notícias</a>
            </div>
        </section>
    </main>
<?php get_footer(); ?>