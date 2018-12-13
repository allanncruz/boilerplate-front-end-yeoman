<?php

    add_filter( 'show_admin_bar' , 'my_function_admin_bar');
    function my_function_admin_bar(){
        return false;
    }


    add_theme_support( 'post-thumbnails' );
    add_action('wp_enqueue_scripts', 'theme_scripts', 'favicon');
    function theme_scripts()
    {
        wp_enqueue_style('styles-theme', get_template_directory_uri() . '/dist/css/style.min.css');
        wp_enqueue_style('fontawesome',  'https://use.fontawesome.com/releases/v5.5.0/css/all.css');
        wp_enqueue_script('scripts-theme', get_template_directory_uri() . '/dist/js/all.js', ['jquery'], '1.0.0', true);
    }

    function my_acf_google_map_api( $api ){
        $api['key'] = 'AIzaSyDNj--p0jczavWMrCOqsw_GBNF29EH8MsQ';
        return $api;
    }
    add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');


    function menu_icons($icon){

        // Store your SVGs in an associative array
        $svgs = array(
                ''  => '',
        );

        // Return the chosen icon's SVG string
        return $svgs[$icon];
    }


    add_action('wp_head', 'add_your_stuff');
    function add_your_stuff() {
        ?>
        <link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo("template_url") ?>/dist/img/favicons/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo("template_url") ?>/dist/img/favicons/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo("template_url") ?>/dist/img/favicons/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo("template_url") ?>/dist/img/favicons/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo("template_url") ?>/dist/img/favicons/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo("template_url") ?>/dist/img/favicons/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo("template_url") ?>/dist/img/favicons/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo("template_url") ?>/dist/img/favicons/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo("template_url") ?>/dist/img/favicons/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="<?php bloginfo("template_url") ?>/dist/img/favicons/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo("template_url") ?>/dist/img/favicons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="<?php bloginfo("template_url") ?>/dist/img/favicons/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo("template_url") ?>/dist/img/favicons/favicon-16x16.png">
        <link rel="manifest" href="<?php bloginfo("template_url") ?>/dist/img/favicons/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
        <?php
    }


    function animacaoType()
    {
        $labels = array(
            'name'               => 'Animação',
            'singular_name'      => 'Animação',
            'menu_name'          => 'Animações',
            'name_admin_bar'     => 'Animação',
            'add_new'            => 'Adicionar Novo',
            'add_new_item'       => 'Adicionar novo item',
            'new_item'           => 'Novo Item',
            'edit_item'          => 'Editar Item',
            'view_item'          => 'Ver Item',
            'all_items'          => 'Todos os Itens',
            'search_items'       => 'Procurar Animação',
            'parent_item_colon'  => 'Parent Animação',
            'not_found'          => 'Nenhum item encontrado',
            'not_found_in_trash' => 'Nenhum item encontrado na lixeira'
        );

        $args = array(
            'labels'             => $labels,
            'description'        => 'Todos os itens',
            'public'             => true,
            'show_in_rest'       => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'menu_icon'          => 'dashicons-slides',
            'query_var'          => true,
            'rewrite'            => array( 'slug' => 'animacoes' ),
            'capability_type'    => 'post',
            'has_archive'        => true,
            'hierarchical'       => true,
            'menu_position'      => null,
            'rest_base'          => 'animacoes',
            'rest_controller_class' => 'WP_REST_Posts_Controller',
            'supports'           => array( 'title', 'editor','thumbnail')
        );

        register_post_type( 'animacao', $args );

        flush_rewrite_rules();
    }
    add_action('init', 'animacaoType');
    
    
    

    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

    register_nav_menus( array(
       'principal' => __('Menu Principal', 'bstwp')
    ));

?>