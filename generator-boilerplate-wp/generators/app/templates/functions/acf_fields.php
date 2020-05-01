<?php

if (function_exists('acf_add_local_field_group')) :

    acf_add_local_field_group(array(
        'key' => 'group_5dcdd01e7c3f6',
        'title' => 'Botões',
        'fields' => array(
            array(
                'key' => 'field_5dd3355607954',
                'label' => 'Botão Primário',
                'name' => 'vitrine-btn-primary',
                'type' => 'link',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'message' => '',
                'default_value' => '',
                'ui' => 0,
                'ui_on_text' => '',
                'ui_off_text' => '',
            ),
            array(
                'key' => 'field_5dd3355607854',
                'label' => 'Botão Secundário',
                'name' => 'vitrine-btn-secondary',
                'type' => 'link',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'message' => '',
                'default_value' => '',
                'ui' => 0,
                'ui_on_text' => '',
                'ui_off_text' => '',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'animacao',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
    ));

    acf_add_local_field_group(array(
        'key' => 'group_5dcdd01e7c2f6',
        'title' => 'Relação',
        'fields' => array(
            array(
                'key' => 'field_5dd3355707954',
                'label' => 'Post Relacionado',
                'name' => 'showcase-relationship',
                'type' => 'relationship',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'message' => '',
                'default_value' => '',
                'ui' => 0,
                'ui_on_text' => '',
                'ui_off_text' => '',
            ),
            array(
                'key' => 'field_5dd3355607854',
                'label' => 'Botão Secundário',
                'name' => 'vitrine-btn-secondary',
                'type' => 'link',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'message' => '',
                'default_value' => '',
                'ui' => 0,
                'ui_on_text' => '',
                'ui_off_text' => '',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'blog',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
    ));

endif;