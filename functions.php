<?php

  //adds featured images to posts
  add_theme_support('post-thumbnails');

  //adds widget areas
  function blank_widgets_init() {

    register_sidebar( array(
      'name'          => ('Right header'),
      'id'            => 'right-header',
      'description'   => 'right widget area in the right',
      'before_widget' => '<div class="widget-sidebar">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>'
    ));

    // Homepage Template - Hero Image
    register_sidebar( array(
      'name'          => ('Hero Image'),
      'id'            => 'hero-image',
      'description'   => 'Hero image on homepage',
      'before_widget' => '<div class="hero-image-widget">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>'
    ));

    // Homepage Template - About Us Text
    register_sidebar( array(
      'name'          => ('About Us Text Block'),
      'id'            => 'about-us-text',
      'description'   => 'Widget area for About Us section on hompage',
      'before_widget' => '<div class="about-us-text">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>'
    ));

    // Homepage Template - Bottom Left Widget
    register_sidebar( array(
      'name'          => ('Bottom Left Home'),
      'id'            => 'bottom-left-home',
      'description'   => 'Widget area in the bottom left on the hompage',
      'before_widget' => '<div class="bottom-left">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>'
    ));

    // Homepage Template - Bottom Middle Widget
    register_sidebar( array(
      'name'          => ('Bottom Middle Home'),
      'id'            => 'bottom-middle-home',
      'description'   => 'Widget area in the bottom middle on the hompage',
      'before_widget' => '<div class="bottom-middle">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>'
    ));

    // Homepage Template - Bottom Right Widget
    register_sidebar( array(
      'name'          => ('Bottom Right Home'),
      'id'            => 'bottom-right-home',
      'description'   => 'Widget area in the bottom right on the hompage',
      'before_widget' => '<div class="bottom-right">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>'
    ));

    register_sidebar( array(
      'name'          => ('Sidebar'),
      'id'            => 'sidebar',
      'description'   => 'sidebar widget area',
      'before_widget' => '<div class="widget-sidebar">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>'
    ));

    register_sidebar( array(
      'name'          => ('Sidebar Page'),
      'id'            => 'sidebar-page',
      'description'   => 'sidebar widget area for individual page',
      'before_widget' => '<div class="widget-sidebar">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>'
    ));

    register_sidebar( array(
      'name'          => ('Sidebar Post'),
      'id'            => 'sidebar-post',
      'description'   => 'sidebar widget area for individual post',
      'before_widget' => '<div class="widget-sidebar">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>'
    ));

    register_sidebar( array(
      'name'          => ('Left footer'),
      'id'            => 'left-footer',
      'description'   => 'left widget area in the footer',
      'before_widget' => '<div class="widget-footer widget-left">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>'
    ));

    register_sidebar( array(
      'name'          => ('Middle footer'),
      'id'            => 'middle-footer',
      'description'   => 'middle widget area in the footer',
      'before_widget' => '<div class="widget-footer widget-middle">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>'
    ));

    register_sidebar( array(
      'name'          => ('Right footer'),
      'id'            => 'right-footer',
      'description'   => 'right widget area in the footer',
      'before_widget' => '<div class="widget-footer widget-right">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>'
    ));
  }

  add_action('widgets_init', 'blank_widgets_init');

  function custom_menus(){
    register_nav_menus( array(
      'header-menu' => __('Header Menu'),
      'footer-menu' => __('Footer Menu')
    ));
  }

  add_action('init', 'custom_menus');

  function example_theme_scripts(){
    wp_enqueue_style('skeleton', get_template_directory_uri() . '/css/skeleton.css');
    wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css');

    //Main CSS
    wp_enqueue_style('main-styles', get_stylesheet_uri());

    //Javascript File
    wp_enqueue_style('scrip-name', get_template_directory_uri() . '/js/script.js');
  }

  add_action('wp_enqueue_scripts', 'example_theme_scripts');























?>
