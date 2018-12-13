<?php
//Template Name: Home
    get_header(); ?>

    <?php
    $anima = new WP_Query(array(
        'post_type' => 'animacao'
    ));

    if($anima->have_posts()):
        ?>
        <section class="area-banner">
            <div class="carousel-inner owl-carousel banner owl-anima">
                <?php while($anima->have_posts()): $anima->the_post(); ?>

                    <a href="<?php the_field('link') ?>">
                        <img class="post_thumbnail" alt="<?php the_title(); ?>" src="<?php the_post_thumbnail_url(); ?>">
                        <div class="container position-relative">
                            <div class="legenda text-center w-100 position-absolute">
                                <h3 class="text-uppercase"><?php the_title(); ?></h3>
                                <?php the_content(); ?>
                            </div>
                        </div>
                    </a>

                <?php endwhile; ?>
            </div>
        </section>
    <?php endif; ?>

    <section class="company py-5">
        <div class="container">
            <div class="box-container bg-white p-5 shadow-sm">
                <div class="row">
                    <?php
                    $about = new WP_Query(array(
                        'post_type' => 'page',
                        'pagename' => 'about'
                    ));

                    if($about->have_posts()):
                        ?>

                        <?php while($about->have_posts()): $about->the_post(); ?>
                        <div class="col-md-7">

                            <h1 class="display-4"><?php the_title(); ?></h1>
                            <?php the_field('chamada_da_home'); ?>
                            <a href="<?php bloginfo("url") ?>/about" class="btn btn-default">Read More</a>

                        </div>
                        <div class="col-md-5 order-first order-md-2">
                            <img class="photo-highlight w-100" src="<?php the_post_thumbnail_url(); ?>">
                        </div>

                    <?php endwhile; ?>

                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <section class="services bg-white py-5">
        <div class="container">

            <h1 class="text-center">Services</h1>

            <div class="row">
                <div class="col-md-4">
                    <div class="card shadow-sm">
                        <figure class="w-100 bg-default"
                                style="background: url(<?php the_post_thumbnail_url(); ?>)"></figure>
                        <div class="card-body">
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                </div>
                                <small class="text-muted">9 mins</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow-sm">
                        <figure class="w-100 bg-default"
                                style="background: url(<?php the_post_thumbnail_url(); ?>)"></figure>
                        <div class="card-body">
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                </div>
                                <small class="text-muted">9 mins</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow-sm">
                        <figure class="w-100 bg-default"
                                style="background: url(<?php the_post_thumbnail_url(); ?>)"></figure>
                        <div class="card-body">
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                </div>
                                <small class="text-muted">9 mins</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



<?php get_footer(); ?>