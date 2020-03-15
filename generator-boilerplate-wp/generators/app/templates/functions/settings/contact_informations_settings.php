<?php

function contact_informations_customize_register($wp_customize)
{
    $wp_customize->add_section('contact_informations_section', array(
        'title'      => __('Informações de contato', 'text_domain'),
        'priority'   => 30,
    ));

    $wp_customize->add_setting('instagram_username', array(
        'default'   => '',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'instagram_username', array(
        'label'      => __('Instagram URL', 'text_domain'),
        'section'    => 'contact_informations_section',
        'settings'   => 'instagram_username',
    )));

    $wp_customize->add_setting('facebook_username', array(
        'default'   => '',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'facebook_username', array(
        'label'      => __('Facebook URL', 'text_domain'),
        'section'    => 'contact_informations_section',
        'settings'   => 'facebook_username',
    )));

    $wp_customize->add_setting('phone_number', array(
        'default'   => '',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'phone_number', array(
        'label'      => __('Telefone', 'text_domain'),
        'section'    => 'contact_informations_section',
        'settings'   => 'phone_number',
    )));


    $wp_customize->add_setting('whatsapp_number', array(
        'default'   => '',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'whatsapp_number', array(
        'label'      => __('WhatsApp', 'text_domain'),
        'section'    => 'contact_informations_section',
        'settings'   => 'whatsapp_number',
    )));

    $wp_customize->add_setting('mail_address', array(
        'default'   => 'contato@site.com',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'mail_address', array(
        'label'      => __('E-mail', 'text_domain'),
        'section'    => 'contact_informations_section',
        'settings'   => 'mail_address',
    )));

    $wp_customize->add_setting('map_embed_url', array(
        'default'   => '',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'map_embed_url', array(
        'label'     => __('URL para Embed do Mapa', 'text_domain'),
        'section'   => 'contact_informations_section',
        'settings'  => 'map_embed_url',
    )));

    $wp_customize->add_setting('address', array(
        'default'   => '',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'address', array(
        'label'     => __('Endereço', 'text_domain'),
        'section'   => 'contact_informations_section',
        'settings'  => 'address',
    )));
}
add_action('customize_register', 'contact_informations_customize_register');