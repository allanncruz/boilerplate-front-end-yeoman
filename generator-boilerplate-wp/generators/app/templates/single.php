<?php get_header(); ?>

    <section class="internal-page">
        <div class="container featurette mt-5">

            <div class="box-container bg-white p-5 mb-5 shadow-sm">
                <div class="col-12 col-md-12">
                    <?php if(have_posts()): while(have_posts()): the_post(); ?>
                        <h1 class="title title-default"><?php the_title(); ?></h1>
                        <img onerror="this.style.display='none'" src="<?php the_post_thumbnail_url(); ?>"
                             class="img-thumbnail photo-highlight w-100 p-0 shadow mt-2 mb-3 ml-4 rounded-0 float-right">
                        <?php the_content(); ?>


                        <div class="row w-100">
                            <div class="col-md-6">
                                <div class="a2a_kit a2a_kit_size_32 a2a_default_style mt-4" data-a2a-url="<?php the_permalink(); ?>" data-a2a-title="<?php the_title(); ?>">
                                    <a class="a2a_button_facebook"></a>
                                    <a class="a2a_button_twitter"></a>
                                    <a class="a2a_button_google_plus"></a>
                                    <a class="a2a_dd" href="https://www.addtoany.com/share"></a>
                                </div>

                                <script async src="//static.addtoany.com/menu/page.js"></script>
                            </div>
                            <div class="col-md-6 p-0">
                                <div class="text-right">
                                    <a class="btn btn-default px-5 py-2 my-2" href="javascript:history.back()">
                                        <i class="glyphicon glyphicon-chevron-left"></i> « Voltar
                                    </a>
                                </div>
                            </div>
                        </div>


                    <?php endwhile; endif; ?>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>