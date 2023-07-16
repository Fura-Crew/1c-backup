<?php get_header()?>

<main class="main">
    <section class="hero-text">
      <div class="container">
        <div class="hero-text__inner">
          <div class="hero-text-main">
            <h1 class="hero-text-main-heading">
              Центр автоматизации учёта
            </h1>
            <strong class="hero-text-main-about-me">
              <?php the_field('company-name'); ?>
            </strong>
          </div>
          <div class="hero-text-contacts">
            <ul class="hero-text-contacts-list">
              <li class="hero-text-contacts-item">
                <img class="hero-text-contacts-item-icon" src=<?php echo get_template_directory_uri().'/assets/images/services/phone.svg'?> alt="">
                <a class="hero-text-contacts-item-link"><?php the_field('phone-number');?></a>
              </li>
              <li class="hero-text-contacts-item">
                <img class="hero-text-contacts-item-icon" src=<?php echo get_template_directory_uri().'/assets/images/services/office-phone.svg'?> alt="">
                <a class="hero-text-contacts-item-link"><?php the_field('home-phone');?></a>
              </li>
              <li class="hero-text-contacts-item">
                <img class="hero-text-contacts-item-icon" src=<?php echo get_template_directory_uri().'/assets/images/services/mail.svg'?> alt="">
                <a class="hero-text-contacts-item-link" href="mailto:<?php the_field('mail');?>"><?php the_field('mail');?></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <section class="our-services">
      
      <div class="container our-services__container">
        <div class="our-services-heading">
          <p class="our-services-heading-text"><strong>Полный</strong> спектр услуг по автоматизации управления и учета на предприятиях:</p>
        </div>
        <div class="our-services-all-cards">
          <div class="our-services-card">
            <img class="our-services-card-icon" src=<?php echo get_template_directory_uri().'/assets/images/services/consultation.svg'?> alt="Иконка">
            <p class="our-services-card-text">
              Консультация на этапе подбора программного продукта и его
              демонстрация
            </p>
          </div>
          <div class="our-services-card">
            <img class="our-services-card-icon" src=<?php echo get_template_directory_uri().'/assets/images/services/consultation.svg'?> alt="Иконка">
            <p class="our-services-card-text">Сопровождение и обновление программного обеспечения</p>
          </div>
          <div class="our-services-card">
            <img class="our-services-card-icon" src=<?php echo get_template_directory_uri().'/assets/images/services/supply.svg'?> alt="Иконка">
            <p class="our-services-card-text">Поставка программного обеспечения</p>
          </div>
          <div class="our-services-card">
            <img class="our-services-card-icon" src=<?php echo get_template_directory_uri().'/assets/images/services/consultation.svg'?> alt="Иконка">
            <p class="our-services-card-text">Информационно-технологическое сопровождение</p>
          </div>
          <div class="our-services-card">
            <img class="our-services-card-icon" src=<?php echo get_template_directory_uri().'/assets/images/services/monitor.svg'?> alt="Иконка">
            <p class="our-services-card-text">Внедрение программного продукта</p>
          </div>
          <div class="our-services-card">
            <img class="our-services-card-icon" src=<?php echo get_template_directory_uri().'/assets/images/services/consultation.svg'?> alt="Иконка">
            <p class="our-services-card-text">Обучение пользователей и ИТ-специалистов</p>
          </div>
          <div class="our-services-card">
            <img class="our-services-card-icon" src=<?php echo get_template_directory_uri().'/assets/images/services/development.svg'?> alt="Иконка">
            <p class="our-services-card-text">
              Разработка дополнительного функционала баз данных: отчетности,
              документов, справочников
            </p>
          </div>
          <div class="our-services-before-text">
            Компания "Центр автоматизации учета" занимается автоматизацией управления и учета на базе
            программных продуктов «1С».
            Является официальным партнером-франчайзи фирмы 1С. Широкий ассортимент программного обеспечения
            компании «1С».
          </div>
        </div>
      </div>
    </section>
    <section class="our-advantages">
      <div class="container our-advantages__container">
        <section class="our-advantages-text">
          <?php dynamic_sidebar('our-advantages-widget');?>
        </section>
       <!-- 
        Не удалось использовать нужный тег
        <strong class="our-advantages-hero-strong-text">Ждем вашего звонка. Будем рады помочь Вам.</strong>
       
      -->
        </div>
      </div>
    </section>
    <section class="about-us">
      <div class="container about-us__container">
        <section class="about-us-text">

          <?php dynamic_sidebar('franchazing');?>

        </section>
      </div>
    </section>
  </main>
<?php get_footer()?>