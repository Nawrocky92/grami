<?php

function launch_customize_register($wp_customize) {

    $wp_customize->get_control( 'background_color'  )->section = 'background_image';
    $wp_customize->get_section( 'background_image'  )->panel = 'theme_settings';
    $wp_customize->get_section( 'background_image'  )->priority = 5;
    $wp_customize->get_section( 'background_image'  )->title = 'Background';
    $wp_customize->remove_section('static_front_page');
    
    $wp_customize->add_panel( 'theme_settings', array(
        'priority'       => 25,
        'capability'     => 'edit_theme_options',
        'title'          => __('Theme Settings', 'launch'),
        'description'    => __('This section allows you to customize your theme.', 'launch'),
    ));

    $wp_customize->add_section('launch_logo_section', array(
        'priority' => 10,
        'title' => __('Site Logo', 'launch'),
        'panel'  => 'theme_settings'
    ));

    $wp_customize->add_section('launch_favicon_section', array(
        'priority' => 15,
        'title' => __('Favicon Image', 'launch'),
        'panel'  => 'theme_settings'
    ));

    $wp_customize->add_section('launch_page_section', array(
        'priority' => 20,
        'title' => __('Page Settings', 'launch'),
        'panel'  => 'theme_settings'
    ));
    
    $wp_customize->add_setting('launch_logo_image', array(
        'default' => get_template_directory_uri().'/assets/images/logo.png',
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'launch_logo_image', array(
        'label' => __('Site Logo Image', 'launch'),
        'section' => 'launch_logo_section',
        'priority' => 10,
        'settings' => 'launch_logo_image'
    )));
    
    $wp_customize->add_setting('launch_favicon_image', array(
        'default' => get_template_directory_uri().'/assets/images/favicon.png',
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'launch_favicon_image', array(
        'label' => __('Site Favicon', 'launch'),
        'section' => 'launch_favicon_section',
        'priority' => 10,
        'settings' => 'launch_favicon_image'
    )));
    
    $wp_customize->add_setting('launch_heading', array(
        'default' => __('<h1>Something <strong>really good</strong> is coming <strong>very soon</strong>.</h1>', 'launch'),
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'launch_sanitize_text'
    ));
        
    $wp_customize->add_control('launch_heading', array(
        'label' => __('Heading', 'launch'),
        'section' => 'launch_page_section',
        'priority' => 20,
        'type' => 'textarea'
    ));
    
    $wp_customize->add_setting('launch_text', array(
        'default' => __('If you have something new you’re looking to launch, you’re going to want to start building a community of people interested in what you’re launching. The Launch template by is the best way to do just that.', 'launch'),
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'launch_sanitize_text'
    ));
        
    $wp_customize->add_control('launch_text', array(
        'label' => __('Text', 'launch'),
        'section' => 'launch_page_section',
        'priority' => 30,
        'type' => 'textarea'
    ));

    function launch_sanitize_text( $textbox ) {
        return wp_kses_post( force_balance_tags( $textbox ) );
    }
   
}
add_action('customize_register', 'launch_customize_register');