<?php
 function blogType()
 {
     $labels = array(
         'name'               => 'Blog',
         'singular_name'      => 'Blog',
         'menu_name'          => 'Blog',
         'name_admin_bar'     => 'Blog',
         'add_new'            => 'Adicionar Novo',
         'add_new_item'       => 'Adicionar novo',
         'new_item'           => 'Novo Item',
         'edit_item'          => 'Editar Item',
         'view_item'          => 'Ver Item',
         'all_items'          => 'Todos os Itens',
         'search_items'       => 'Procurar Blog',
         'parent_item_colon'  => 'Parent Blog',
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
         'menu_icon'          => 'dashicons-testimonial',
         'query_var'          => true,
         'rewrite'            => array( 'slug' => 'blogs' ),
         'capability_type'    => 'post',
         'has_archive'        => true,
         'hierarchical'       => true,
         'menu_position'      => null,
         'rest_controller_class' => 'WP_REST_Posts_Controller',
         'supports'           => array( 'title', 'editor', 'thumbnail')
     );

     register_post_type( 'blog', $args );

     flush_rewrite_rules();
 }
 add_action('init', 'blogType');

 add_action( 'init', 'blog_taxonomy' );
function blog_taxonomy() {
    register_taxonomy(
        'blog_taxonomy',
        'blog',
        array(
            'label' => __( 'Categoria' ),
            'rewrite' => array( 'slug' => 'blog' ),
            'hierarchical' => true,
        )
    );
}