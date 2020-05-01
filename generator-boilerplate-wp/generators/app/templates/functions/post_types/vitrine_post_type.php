<?php

function animacaoType()
{
    $labels = array(
        'name'               => 'Vitrine',
        'singular_name'      => 'Vitrine',
        'menu_name'          => 'Vitrine',
        'name_admin_bar'     => 'Vitrine',
        'add_new'            => 'Adicionar Novo',
        'add_new_item'       => 'Adicionar novo item',
        'new_item'           => 'Novo Item',
        'edit_item'          => 'Editar Item',
        'view_item'          => 'Ver Item',
        'all_items'          => 'Todos os Itens',
        'search_items'       => 'Procurar Vitrine',
        'parent_item_colon'  => 'Parent Vitrine',
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
        'menu_icon'          => 'dashicons-format-image',
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

