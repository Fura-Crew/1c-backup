<?php

  add_action('wp_enqueue_scripts','theme_style_name');
  add_action('after_setup_theme','header_footer_menu');
  add_action('widgets_init','our_advantages_widgets');
  add_action('widgets_init','description_company');

  function theme_style_name(){
    wp_enqueue_style('init-css', get_template_directory_uri().'/assets/css/InitCss.css');
    wp_enqueue_style('index-css', get_template_directory_uri().'/assets/css/PagesStyle/indexStyle/index.css');
    wp_enqueue_style('index-css', get_template_directory_uri().'/assets/css/normalize.css');
    wp_enqueue_style('mobile-css', get_template_directory_uri().'/assets/css/mobile/landing.css');
  }


  function header_footer_menu(){
    register_nav_menu( 'header', 'верхнее меню');
    register_nav_menu( 'footer', 'меню в подвале'); 
  }

  function our_advantages_widgets(){
    register_sidebar(array(
      'name' => 'Виджет для текста "Наши преимущества"',
      'id' => 'our-advantages-widget',
      'class' => 'our-advantages-text',
      'before_title'  => '<h2 class="our-advantages-text-title">',
      'after_title'   => "</h2>\n",
      'before_widget' => Null,
      'after_widget' => Null,
      'description' => 'Виджет для текста "Наши преимущества"'
    ));
  }

  function description_company(){
    register_sidebar(array(
      'name' => 'Виджет для текста "1c франчайзинг"',
      'id' => 'franchazing',
      'class' => 'about-us-text',
      'before_title'  => '<h2 class="about-us-heading">',
      'after_title'   => "</h2>\n",
      'before_widget' => Null,
      'after_widget' => Null,
      'description' => 'Виджет для текста "1c франчайзинг"'
    ));
  }

