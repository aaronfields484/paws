<?php

function my_customize_register( $wp_customize ) {
  
  
    //  =============================
    //  = Banner Title              =
    //  =============================
    $wp_customize->add_setting('banner-title', array(
        'default'        => 'Lorem ipsum dolor sit amet',
        'capability'     => 'edit_theme_options',
        'transport'   => 'refresh'
    ));
  
    $wp_customize->add_control('banner-title', array(
        'label'      => __('Title for Banner', 'Paws'),
        'section'  => 'banner-content',
        'settings'   => 'banner-title',
    ));

    $wp_customize->selective_refresh->add_partial( 'banner-title', array(
        'selector' => '.main-banner__title', // You can also select a css class
    ) );

    //  =============================
    //  = Banner Description        =
    //  =============================
    $wp_customize->add_setting('banner-desc', array(
        'default'        => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsa, fugit!',
        'capability'     => 'edit_theme_options',
        'transport'   => 'refresh'
    ));
  
    $wp_customize->add_control('banner-desc', array(
        'label'      => __('Banner Description', 'Paws'),
        'section'  => 'banner-content',
        'settings'   => 'banner-desc',
    ));

    $wp_customize->selective_refresh->add_partial( 'banner-desc', array(
        'selector' => '.main-banner__desc', // You can also select a css class
    ) );

    //  =============================
    //  = Banner Subtitle           =
    //  =============================
    $wp_customize->add_setting('banner-subtitle', array(
        'default'        => 'Lorem ipsum dolor',
        'capability'     => 'edit_theme_options',
        'transport'   => 'refresh'
    ));
  
    $wp_customize->add_control('banner-subtitle', array(
        'label'      => __('Banner Subtitle', 'Paws'),
        'section'  => 'banner-content',
        'settings'   => 'banner-subtitle',
    ));

    $wp_customize->selective_refresh->add_partial( 'banner-subtitle', array(
        'selector' => '.main-banner__subtitle', // You can also select a css class
    ) );



    $wp_customize->add_section( 'banner-content', array(
        'title' => __( 'Banner Content' ),
        'description' => __( 'Content for front page banner' ),
        'priority' => 160,
        'capability' => 'edit_theme_options',
        'theme_supports' => '', // Rarely needed.
      ) );

    
}
add_action('customize_register','my_customize_register');

?>