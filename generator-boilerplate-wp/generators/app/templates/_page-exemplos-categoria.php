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

                        <h2 class="my-5">Lista de categorias seguido de postagens </h2>
                        <?php
                            // Get all the categories
                            $categories = get_terms( 'blog_taxonomy' );

                            // Loop through all the returned terms
                            foreach ( $categories as $category ):

                                // set up a new query for each category, pulling in related posts.
                                $cartes = new WP_Query(
                                    array(
                                        'post_type' => 'blog',
                                        'showposts' => -1,
                                        'tax_query' => array(
                                            array(
                                                'taxonomy'  => 'blog_taxonomy',
                                                'terms'     => array( $category->slug ),
                                                'field'     => 'slug'
                                            )
                                        )
                                    )
                                );
                            ?>

                                <div class="category-carte">
                                    <h3 class="category-carte__category text-center mb-3"><?php echo $category->name; ?></h3>
                                    
                                    
                                    <?php while ($cartes->have_posts()) : $cartes->the_post(); ?>
                                        <div class="category-carte__post d-block d-md-flex text-center text-md-left mb-4">
                                            <img class="post_thumbnail" onerror="this.style.display='none'" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                                            <div class="content">
                                                <h6 class="my-1"><?php the_title(); ?></h6>
                                                <p class="m-1"><?php the_field('descricao'); ?></p>
                                                <p class="price m-0"><?php the_field('preco'); ?></p>
                                            </div>
                                        </div>
                                    <?php endwhile; ?>
                                </div>

                                <hr class="hr-carte">

                            <?php
                                // Reset things, for good measure
                                $cartes = null;
                                wp_reset_postdata();

                            // end the loop
                            endforeach;
                            ?>
                            
                            <h2 class="my-5">Tabs de categorias retornando postagens </h2>

                                <div class="tab-blog">
                                    <?php $etapas = get_terms('blog_taxonomy'); ?>

                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs nav-justified">
                                    <li class="active">
                                        <a data-toggle="tab" class="active" href="#all">Todos</a>
                                    </li>
                                    <?php foreach($etapas as $etapa) { ?>
                                        <li>
                                        <a href="#<?php echo $etapa->slug ?>" data-toggle="tab"><?php echo $etapa->name ?></a>
                                        </li>
                                    <?php } ?>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content">

                                    <div class="tab-pane active" id="all">
                                        <?php 	
                                        $args = array(
                                        'post_type' => 'blog',
                                        'orderby' => 'title',
                                        'order' => 'ASC'
                                        );
                                        $all_etapas = new WP_Query( $args );		
                                        ?>

                                        <div class="row">
                                            <?php if ( $all_etapas->have_posts() ) :?>
                                                <?php while ( $all_etapas->have_posts() ) : $all_etapas->the_post(); ?>	
                                                    <div class="col-md-6 mb-4">
                                                        <div class="card">
                                                            <div class="card-tag">
                                                                <?php echo get_the_term_list( get_the_ID(), 'blog_taxonomy', '', ', ' ); ?>
                                                            </div>
                                                            <a href="<?php the_permalink(); ?>">
                                                            <?php if(get_the_post_thumbnail_url()) { ?>
                                                                    <img class="blog-img"
                                                                        src="<?php the_post_thumbnail_url(); ?>" 
                                                                        alt="<?php the_title(); ?>">

                                                                        <?php } else { ?>

                                                                            <img class="blog-img blog-img-box" src="<?php bloginfo('template_url'); ?>/assets/images/0.jpeg" alt="teste" >

                                                                <?php } ?>
                                                            </a>
                                                            
                                                            <div class="card-body">
                                                                <a href="<?php the_permalink(); ?>">
                                                                    <small class="blog-localization mb-2 d-block"><?php the_field('local'); ?></small>
                                                                    <h5 class="blog-body__title"><?php the_title(); ?></h5>
                                                                    <p class="blog-body__text"><?php $summary = get_field('texto_comercial'); echo substr($summary, 0, 244); ?>...</p>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php endwhile; ?>
                                                <?php wp_reset_query() ?>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <?php foreach($etapas as $etapa) { ?>

                                        <div class="tab-pane" id="<?php echo $etapa->slug ?>">
                                        <?php 	
                                        $args = array(
                                            'post_type' => 'blog',
                                            'orderby' => 'title',
                                            'order' => 'ASC',
                                            'tax_query' => array(
                                            array(
                                                'taxonomy' => 'blog_taxonomy',
                                                'field' => 'slug',
                                                'terms' => $etapa->slug
                                            )
                                            )
                                        );
                                        $films = new WP_Query( $args );		
                                        ?>

                                        <div class="row">
                                            <?php if ( $films->have_posts() ) :?>
                                                <?php while ( $films->have_posts() ) : $films->the_post(); ?>	
                                                    <div class="col-md-6 mb-4">
                                                        <div class="card">
                                                            <div class="card-tag">
                                                                <?php echo get_the_term_list( get_the_ID(), 'blog_taxonomy', '', ', ' ); ?>
                                                            </div>
                                                            <a href="<?php the_permalink(); ?>">
                                                                <?php if(get_the_post_thumbnail_url()) { ?>
                                                                    <img class="blog-img"
                                                                        src="<?php the_post_thumbnail_url(); ?>" 
                                                                        alt="<?php the_title(); ?>">

                                                                        <?php } else { ?>

                                                                            <img class="blog-img blog-img-box" src="<?php bloginfo('template_url'); ?>/assets/images/0.jpeg" alt="teste" >

                                                                <?php } ?>
                                                            </a>
                                                            
                                                            <div class="card-body">
                                                                <a href="<?php the_permalink(); ?>">
                                                                    <small class="blog-localization mb-2 d-block"><?php the_field('local'); ?></small>
                                                                    <h5 class="blog-body__title"><?php the_title(); ?></h5>
                                                                    <p class="blog-body__text"><?php $summary = get_field('texto_comercial'); echo substr($summary, 0, 244); ?>...</p>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php endwhile; ?>
                                                <?php wp_reset_query() ?>
                                            <?php endif; ?>
                                            </div>
                                        </div>
                                    <?php }  ?>
                                </div>
                    </article>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>