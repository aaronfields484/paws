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


    //  =============================
    //  = Banner Section            =
    //  =============================
    $wp_customize->add_section( 'banner-content', array(
        'title' => __( 'Banner Content' ),
        'description' => __( 'Content for front page banner' ),
        'priority' => 160,
        'capability' => 'edit_theme_options',
        'theme_supports' => '', // Rarely needed.
      ) );
    
    //  =============================
    //  = Category Title            =
    //  =============================
    $wp_customize->add_setting('category-title', array(
        'default'        => 'Featured Categories',
        'capability'     => 'edit_theme_options',
        'transport'   => 'refresh'
    ));
  
    $wp_customize->add_control('category-title', array(
        'label'      => __('Title for Category Section', 'Paws'),
        'section'  => 'category-content',
        'settings'   => 'category-title',
    ));

    $wp_customize->selective_refresh->add_partial( 'category-title', array(
        'selector' => '.featured-categories__title', // You can also select a css class
    ) );

    //  =============================
    //  = Category Subtitle         =
    //  =============================
    $wp_customize->add_setting('category-subtitle', array(
        'default'        => 'Lorem ipsum dolor',
        'capability'     => 'edit_theme_options',
        'transport'   => 'refresh'
    ));
  
    $wp_customize->add_control('category-subtitle', array(
        'label'      => __('Subtitle for Category Section', 'Paws'),
        'section'  => 'category-content',
        'settings'   => 'category-subtitle',
    ));

    $wp_customize->selective_refresh->add_partial( 'category-subtitle', array(
        'selector' => '.featured-categories__subtitle', // You can also select a css class
    ) );

    //  =============================
    //  = Category Amount           =
    //  =============================
    $wp_customize->add_setting('category-amount', array(
        'default'        => 3,
        'capability'     => 'edit_theme_options',
        'transport'   => 'refresh'
    ));
  
    $wp_customize->add_control( 'category-amount', array(
        'type' => 'number',
        'sanitize_callback' => 'absint',
        'section' => 'category-content',
        'label' => __( 'Category Amount' ),
        'description' => __( 'Number of categories displayed' ),
        'input_attrs' => array(
          'min' => 0,
          'max' => 10,
          )
      ) );

    //  =============================
    //  = Category Section          =
    //  =============================
    $wp_customize->add_section( 'category-content', array(
        'title' => __( 'Category Content' ),
        'description' => __( 'Content for category section' ),
        'priority' => 160,
        'capability' => 'edit_theme_options',
        'theme_supports' => '', // Rarely needed.
      ) );

     // =============================
    //  = Post Title                =
    //  =============================
    $wp_customize->add_setting('post-title', array(
        'default'        => 'Featured Posts',
        'capability'     => 'edit_theme_options',
        'transport'   => 'refresh'
    ));
  
    $wp_customize->add_control('post-title', array(
        'label'      => __('Title for Post Section', 'Paws'),
        'section'  => 'post-content',
        'settings'   => 'post-title',
    ));

    $wp_customize->selective_refresh->add_partial( 'post-title', array(
        'selector' => '.featured-posts__title', // You can also select a css class
    ) );

    //  =============================
    //  = Post Subtitle             =
    //  =============================
    $wp_customize->add_setting('post-subtitle', array(
        'default'        => 'Lorem ipsum dolor',
        'capability'     => 'edit_theme_options',
        'transport'   => 'refresh'
    ));
  
    $wp_customize->add_control('post-subtitle', array(
        'label'      => __('Subtitle for Post Section', 'Paws'),
        'section'  => 'post-content',
        'settings'   => 'post-subtitle',
    ));

    $wp_customize->selective_refresh->add_partial( 'post-subtitle', array(
        'selector' => '.featured-posts__subtitle', // You can also select a css class
    ) );

    //  =============================
    //  = Post Amount               =
    //  =============================
    $wp_customize->add_setting('post-amount', array(
        'default'        => 3,
        'capability'     => 'edit_theme_options',
        'transport'   => 'refresh'
    ));
  
    $wp_customize->add_control( 'post-amount', array(
        'type' => 'number',
        'sanitize_callback' => 'absint',
        'section' => 'post-content',
        'label' => __( 'Post Amount' ),
        'description' => __( 'Number of posts displayed' ),
        'input_attrs' => array(
          'min' => 0,
          'max' => 10,
          )
      ) );

     // =============================
    //  = Post Section              =
    //  =============================
    $wp_customize->add_section( 'post-content', array(
        'title' => __( 'Post Content' ),
        'description' => __( 'Content for fetured posts section' ),
        'priority' => 160,
        'capability' => 'edit_theme_options',
        'theme_supports' => '', // Rarely needed.
      ) );
    
}
add_action('customize_register','my_customize_register');

?>