<?php

    add_filter( 'show_admin_bar' , 'my_function_admin_bar');
    function my_function_admin_bar(){
        return false;
    }

    if (!function_exists('theme_setup')) {
        function theme_setup()
        {

            // Adds theme support to logo
            add_theme_support(
                'custom-logo',
                array(
                    'height'      => 80,
                    'width'       => 220,
                    'flex-width'  => true,
                    'flex-height' => true,
                )
            );
        }
    }


add_action('after_setup_theme', 'theme_setup');


    add_theme_support( 'post-thumbnails' );

    add_action('wp_enqueue_scripts', 'theme_scripts', 'favicon');
    function theme_scripts()
    {
        wp_enqueue_style('styles-theme', get_template_directory_uri() . '/dist/css/style.min.css');
        wp_enqueue_style('fontawesome',  'https://use.fontawesome.com/releases/v5.5.0/css/all.css');
        wp_enqueue_script('scripts-theme', get_template_directory_uri() . '/dist/js/all.js', ['jquery'], '1.0.0', true);
    }
    

    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

    register_nav_menus( array(
       'principal' => __('Menu Principal', 'bstwp')
    ));

// Post types
require dirname(__FILE__) .  '/functions/post_types/vitrine_post_type.php';

// Settings
require dirname(__FILE__) . '/functions/settings/contact_informations_settings.php';
require dirname(__FILE__) . '/functions/settings/custom_login_logo.php';

