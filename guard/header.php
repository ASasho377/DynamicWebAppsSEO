<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="Guard, Security, Camera, Theft, Protection, Охрана, Защита, Сигурност, Камери, Видеонаблюдение, Превенция, Предотвратяване" />
  <meta name="description" content="The best security company in the country, Най-добрата охранителна фирма в България" />
  <meta name="author" content="Aleksander Bozhilov" />
  <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.png" type="image/x-icon">

  <title>Guarder</title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,600,700&display=swap" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="<?php bloginfo('template_directory'); ?>/css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="<?php bloginfo('template_directory'); ?>/css/responsive.css" rel="stylesheet" />
  <?php wp_head(); ?>
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <div class="hero_bg_box">
      <div class="img-box">
      </div>
    </div>

    <header class="header_section">
      <div class="header_top">
        <div class="container-fluid">
          <div class="contact_link-container">
            <a href="" class="contact_link1">
              <i class="fa fa-map-marker" aria-hidden="true"></i>
              <span>
                ВАШАТА БЕЗОПАСНОСТ Е НАШАТА ОТГОВОРНОСТ!
              </span>
            </a>
            <a href="" class="contact_link2">
              <i class="fa fa-phone" aria-hidden="true"></i>
              <span>
                ОБАДЕТЕ НИ СЕ : +359 876003767
              </span>
            </a>
            <a href="" class="contact_link3">
              <i class="fa fa-envelope" aria-hidden="true"></i>
              <span>
                guardersecurity@gmail.com
              </span>
            </a>
          </div>
        </div>
      </div>
      <div class="header_bottom">
        <div class="container-fluid">
          <nav class="navbar navbar-expand-lg custom_nav-container">
            <a class="navbar-brand" href="<?php bloginfo('template_directory'); ?>/index.html">
              <span>
                Guarder
              </span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class=""></span>
            </button>

            <div class="collapse navbar-collapse ml-auto" id="navbarSupportedContent">
                <?php 
				wp_nav_menu(array(
					'theme_location'  => 'top-menu',
					'menu'            => 'navigation',
					'container'       => 'nav',
					'container_id'    => 'main-nav',
					'container_class'    => '',
					'menu_class'      => 'nav1',
					'menu_id'         => 'idm',
					'echo'            => true,
					'fallback_cb'     => 'wp_page_menu',
					'before'          => '',
					'after'           => '',
					'link_before'     => '',
					'link_after'      => '',
					'items_wrap'      => '<ul class="navbar-nav">%3$s</ul>',
					'depth'           => 0,
					'walker'          => ''
				));
			    ?>
            </div>
          </nav>
        </div>
      </div>
    </header>
  </div>