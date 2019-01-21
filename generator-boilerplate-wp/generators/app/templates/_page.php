<?php
get_header();
?>

    <section class="wrap">
        <div class="container content-area my-5">

            <div class="row py-5">
                <div class="col-12 col-md-12">
                    <?php
                    if (have_posts()):
                        while (have_posts()):
                            the_post();
                            ?>
                            <img onerror="this.style.display='none'" src="<?php
                            the_post_thumbnail_url();
                            ?>"
                                 class="single-thumbnail w-100 p-0 float-right shadow mt-2 mb-3 ml-4 ">

                            <h1 class="title"><?php
                                the_title();
                                ?></h1>

                            <?php
                            the_content();
                            ?>
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