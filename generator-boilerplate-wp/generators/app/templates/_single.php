<?php
    get_header();
    the_post() ?>

    <section class="wrap">
        <div class="container content-area mt-5">
            <div class="text-center">
                <h3 class="sub-title m-0">Subtitle</h3>
                <h1 class="title"><?php the_title(); ?></h1>
            </div>  
            
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <img
                        onerror="this.style.display='none'"
                        src="<?php the_post_thumbnail_url(); ?>"
                        class="single-thumbnail my-4"
                        alt="<?php the_title(); ?>"
                    >
                    <article class="px-md-5 px-2">
                        <?php the_content(); ?>

                        <hr>
                        <small>Post relacionado</small>
                        <?php
                        $relationship = get_field('showcase-relationship');
                        if( $relationship ): ?>
                            <?php foreach( $relationship as $post): ?>
                                <?php get_template_part( 'partials/section', 'news' ); ?>
                            <?php endforeach;
                            wp_reset_postdata();
                        endif; ?>

                        <div class="row w-100">
                            <div class="col-md-6">
                                <div class="a2a_kit a2a_kit_size_32 a2a_default_style" data-a2a-url="<?php the_permalink(); ?>" data-a2a-title="<?php the_title(); ?>">
                                    <a class="a2a_button_facebook"></a>
                                    <a class="a2a_button_twitter"></a>
                                    <a class="a2a_button_whatsapp"></a>
                                </div>

                                <script async src="//static.addtoany.com/menu/page.js"></script>
                            </div>
                            <div class="col-md-6">
                                <a class="btn btn-primary btn-sm ml-md-auto mr-auto mt-4 mt-md-0" href="javascript:history.back()">
                                    <i class="glyphicon glyphicon-chevron-left"></i> « Voltar
                                </a>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>