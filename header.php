<!DOCTYPE html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,600;0,700;1,400&amp;display=swap" rel="stylesheet">
  <title>Главная</title>
  <?php wp_head()?>  
</head>
<body>
  <header class="header">
    <div class="container header-container">
      <nav class="header-nav">
        <a href="" class='header-logo'>
        <img class="header-nav-list-item-logo" src="<?php echo get_template_directory_uri().'/assets/images/Logo1.png'?>" alt="Логотип" title="Вернуться на главную" width="10">
        </a>
        <?php wp_nav_menu( array(
            'theme-location' => 'top',
            'container'=> null,
            'menu_class'=> 'header-nav-list',
            'menu_id'=> '',
          ))
          ?>
      </nav>    
      <div class="mobile-navigation">
        <div class="mobile-btn" id="mobile-btn"></div>
        <div class="header-nav-mobile-logo"><img class="header-nav-list-item-logo" src="<?php echo get_template_directory_uri().'/assets/images/Logo1.png'?>" alt="Логотип" title="Вернуться на главную" width="10">
        </div>
      </div>
      <nav class="mobile-nav" id="mobile-nav">
          <?php wp_nav_menu( array(
            'theme-location' => 'top',
            'container'=> null,
            'menu_class'=> 'header-mobile-nav-list',
            'menu_id'=> '',
          ))
          ?>

          <ul class="header-nav-list-mobile-contancts">
            <li class="header-nav-list-item"><a class="header-nav-list-item-link"><?php the_field('phone-number');?></a></li>
            <li class="header-nav-list-item"><a class="header-nav-list-item-link"><?php the_field('home-phone');?></a></li>
            <li class="header-nav-list-item"><a class="header-nav-list-item-link" href="mailto:<?php the_field('mail');?>"><?php the_field('mail');?></a></li>
            <li class="header-nav-list-item"><a class="header-nav-list-item-link" href="#"><?php the_field('company-name'); ?></a></li>
          </ul>
        </ul>
      </nav>
          
      </nav>
    </div>
</header>


