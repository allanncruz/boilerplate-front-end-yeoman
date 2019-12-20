<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta <?php bloginfo('charset'); ?> >
    <title>><?php bloginfo('title') ?></title>
    <?php wp_head(); ?>
</head>
<body>

<header class="header position-fixed w-100 shadow">
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <div class="container">
            <a class="navbar-brand text-white" href="<?php bloginfo("url") ?>">
                <?php the_custom_logo() ?>
            </a>
            <button class="navbar-toggler border-0 collapsed rounded-0 p-1"
                    type="button"
                    data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1"
                    aria-controls="bs-example-navbar-collapse-1"
                    aria-expanded="false"
                    aria-label="Toggle navigation">
                <span class="my-1 w-100 close"><i class="fas fa-times"></i></span>
                <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
            </button>
            <?php
            wp_nav_menu( array(
                'theme_location'    => 'principal',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
                'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                'walker'            => new WP_Bootstrap_Navwalker(),
            ) );
            ?>
        </div>
    </nav>
</header>