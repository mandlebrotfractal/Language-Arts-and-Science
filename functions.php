<?php 

function remove_head_scripts() { 
    remove_action('wp_head', 'wp_print_scripts'); 
    remove_action('wp_head', 'wp_print_head_scripts', 9); 
    remove_action('wp_head', 'wp_enqueue_scripts', 1);
    
    add_action('wp_footer', 'wp_print_scripts', 5);
    add_action('wp_footer', 'wp_enqueue_scripts', 5);
    add_action('wp_footer', 'wp_print_head_scripts', 5); 
    } 
    add_action( 'wp_enqueue_scripts', 'remove_head_scripts' );

function add_theme_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
   
    wp_enqueue_style( 'main-styles', get_template_directory_uri() . '/styles/main-styles.css');

    wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/styles/fontawesome/css/all.css');

    wp_enqueue_script( 'script', get_template_directory_uri() . '/javascript/javascript.js', true);
   
      if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
      }
  }
  add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

  function las_change_clients_displayed( $wp_customize){
      $wp_customize->add_section('las_customer_images', array(
          'title' => 'Our Clients'
      ));

      $wp_customize->add_setting('las_customer_image_one');
      $wp_customize->add_control(new WP_Customize_Image_Control(
          $wp_customize, 'las_image_one_select', array(
            'label' => 'First Client Image', 
            'section' => 'las_customer_images', 
            'settings' => 'las_customer_image_one'
          )));

      $wp_customize->add_setting('las_customer_image_two');
      $wp_customize->add_control(new WP_Customize_Image_Control(
          $wp_customize, 'las_image_two_select', array(
            'label' => 'Second Client Image', 
            'section' => 'las_customer_images', 
            'settings' => 'las_customer_image_two'
          )));

      $wp_customize->add_setting('las_customer_image_three');
      $wp_customize->add_control(new WP_Customize_Image_Control(
          $wp_customize, 'las_image_three_select', array(
            'label' => 'Third Client Image', 
            'section' => 'las_customer_images', 
            'settings' => 'las_customer_image_three'
        )));    

      $wp_customize->add_setting('las_customer_image_four');
      $wp_customize->add_control(new WP_Customize_Image_Control(
          $wp_customize, 'las_image_four_select', array(
            'label' => 'Fourth Client Image', 
            'section' => 'las_customer_images', 
            'settings' => 'las_customer_image_four'
          )));
      
      $wp_customize->add_setting('las_customer_image_five');
      $wp_customize->add_control(new WP_Customize_Image_Control(
          $wp_customize, 'las_image_five_select', array(
            'label' => 'Fifth Client Image', 
            'section' => 'las_customer_images', 
            'settings' => 'las_customer_image_five'
          )));

      $wp_customize->add_setting('las_customer_image_six');
      $wp_customize->add_control(new WP_Customize_Image_Control(
          $wp_customize, 'las_image_six_select', array(
            'label' => 'Sixth Client Image', 
            'section' => 'las_customer_images', 
            'settings' => 'las_customer_image_six'
          )));

      $wp_customize->add_setting('las_customer_image_seven');
      $wp_customize->add_control(new WP_Customize_Image_Control(
          $wp_customize, 'las_image_seven_select', array(
            'label' => 'Seventh Client Image', 
            'section' => 'las_customer_images', 
            'settings' => 'las_customer_image_seven'
          )));
      
      $wp_customize->add_setting('las_customer_image_eight');
      $wp_customize->add_control(new WP_Customize_Image_Control(
          $wp_customize, 'las_image_eight_select', array(
            'label' => 'Eighth Client Image', 
            'section' => 'las_customer_images', 
            'settings' => 'las_customer_image_eight'
          )));
      
      $wp_customize->add_setting('las_customer_image_nine');
      $wp_customize->add_control(new WP_Customize_Image_Control(
          $wp_customize, 'las_image_nine_select', array(
            'label' => 'Ninth Client Image', 
            'section' => 'las_customer_images', 
            'settings' => 'las_customer_image_nine'
          )));
      
      $wp_customize->add_setting('las_customer_image_ten');
      $wp_customize->add_control(new WP_Customize_Image_Control(
          $wp_customize, 'las_image_ten_select', array(
            'label' => 'Tenth Client Image', 
            'section' => 'las_customer_images', 
            'settings' => 'las_customer_image_ten'
          )));
  }

  add_action('customize_register', 'las_change_clients_displayed');
  

  