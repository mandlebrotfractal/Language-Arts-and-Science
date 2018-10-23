<?php session_start(); ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' );?>" />
    <title>Language Arts and Sciences</title>
    <?php wp_head();?>
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous"> -->
  </head>
  <body>
  <section class="top-nav" id="topNav">
      <div class="laslogo" id="laslogo">
          <img src="<?php bloginfo('template_url');?>/images/LAS_Logo.png" height="60px" width="auto" alt="Language Arts and Sciences Logo">
      </div>
      <div class="mobile-nav-menus mobile" id="mobileNavMenus">
          <div class="nav-login" id="nav-login">
              <strong>Login</strong>
          </div>
          <div class="bar-menu" id="bar-menu">
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
          </div>
      </div>
    <nav role="navigation" id="desktop_nav_container" class="main-navigation desktop">
	<?php wp_nav_menu( array(
	 'theme_location' => 'primary',
	  'container_class' => 'desktop-main-menu-container',
		'menu_class' => 'main-menu'
	    ) ); ?>
    </nav><!-- .site-navigation .main-navigation -->
    </section>
  