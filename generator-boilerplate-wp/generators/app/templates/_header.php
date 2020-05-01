<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <!-- Requered meta tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta <?php bloginfo('charset'); ?>>

    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body class="bg-light">

<header class="header position-fixed w-100 shadow">
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <div class="container">
            <a class="navbar-brand text-white" href="<?php bloginfo("url") ?>">
                <?php 
                    $custom_logo_id = get_theme_mod('custom_logo');
                    $logo = wp_get_attachment_image_src($custom_logo_id, 'full');


                    if(has_custom_logo()) {
                        echo '<img src="'. esc_url($logo[0]). '" class="navbar-brand__img">';
                    }else {
                        echo '<p class="m-0 text-white">'. get_bloginfo('name'). '</p>';
                    } 
                ?>
            </a>

            <div class="d-blok d-lg-none">
                <button
                        type="button"
                        class="modal-button border-0 bg-transparent"
                        data-toggle="modal"
                        data-target="#navModal"
                >
                <i class="fas fa-bars text-white"></i>
                </button>

                <div
                        class="modal fade"
                        id="navModal"
                        tabindex="-1"
                        role="dialog"
                        aria-labelledby="navModalLabel"
                        aria-hidden="true"
                >
                    <div class="modal-dialog h-100 m-0" role="document">
                        <div class="modal-content h-100 bg-dark text-white">
                            <div class="modal-header">
                                <h5 class="modal-title" id="navModalLabel">Menu</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <?php
                                wp_nav_menu( array(
                                    'theme_location'    => 'principal',
                                    'depth'             => 2,
                                    'container'         => 'div',
                                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                                    'walker'            => new WP_Bootstrap_Navwalker(),
                                ) );
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php
            wp_nav_menu( array(
                'theme_location'    => 'principal',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
                'menu_class'        => 'nav navbar-nav ml-auto',
                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                'walker'            => new WP_Bootstrap_Navwalker(),
            ) );
            ?>
        </div>
    </nav>
</header>