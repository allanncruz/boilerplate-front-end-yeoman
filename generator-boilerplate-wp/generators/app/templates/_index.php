<?php
//Template Name: Home
get_header();
?>

    <section class="carousel">
        <div class="carousel-inner owl-carousel banner owl-anima">

            <?php
            $anima = new WP_Query(array(
                'post_type' => 'animacao'
            ));
            if ($anima->have_posts()):
                while ($anima->have_posts()):
                    $anima->the_post();
                    ?>

                    <a href="<?php
                    the_field('link');
                    ?>">
                        <img class="carousel-thumbnail"
                             alt="<?php
                             the_title();
                             ?>"
                             src="<?php
                             the_post_thumbnail_url();
                             ?>">

                        <div class="container position-relative">
                            <div class="carousel-legend text-center w-100 position-absolute">
                                <h3 class="text-uppercase"><?php
                                    the_title();
                                    ?></h3>
                                <?php
                                the_content();
                                ?>
                            </div>
                        </div>
                    </a>

                    <?php
                endwhile;
            endif;
            ?>

        </div>
    </section>

    <section class="company py-5">
        <div class="container">
            <div class="content-box bg-white p-5 shadow-sm">
                <div class="row">

                    <?php
                    $about = new WP_Query(array(
                        'post_type' => 'page',
                        'pagename' => 'about'
                    ));

                    if ($about->have_posts()):
                        while ($about->have_posts()):
                            $about->the_post();
                            ?>

                            <div class="col-md-7">
                                <h1 class="display-4"><?php
                                    the_title();
                                    ?></h1>
                                <?php
                                the_field('chamada_da_home');
                                ?>
                                <a href="<?php
                                bloginfo("url");
                                ?>/about" class="btn btn-default">Read More</a>
                            </div>
                            <div class="col-md-5 order-first order-md-2">
                                <img class="company-thumbnail w-100"
                                     alt="<?php
                                     the_title();
                                     ?>"
                                     src="<?php
                                     the_post_thumbnail_url();
                                     ?>">
                            </div>

                            <?php
                        endwhile;
                    endif;
                    ?>

                </div>
            </div>
        </div>
    </section>


<?php
get_footer();
?>