<!DOCTYPE html>

<html <?php language_attributes(); ?>>
  <head>
      <meta charset="<?php bloginfo('charset'); ?>">
      <meta name="viewport" content="width=device-width, initial-scale=1"/>
      <link rel="profile" href="https://gmpg.org/xfn/11">

    <title></title>
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <div id="page" class="site">
      <header id="header">
        <div id="topbar">
          <div class="container">
            <div class="social-links">
              <a target="_blank" href="https://twitter.com/PressaoSem" class="twitter"><i class="fa fa-twitter"></i></a>
              <a target="_blank" href="https://www.facebook.com/Sem-Press%C3%A3o-101121591313827/" class="facebook"><i class="fa fa-facebook"></i></a>
              <a target="_blank" href="https://www.instagram.com/_sem_pressao_/" class="instagram"><i class="fa fa-instagram"></i></a>
              <a target="_blank" href="https://www.linkedin.com/in/sem-press%C3%A3o-818332199/" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>
          </div>
        </div>


      <div class="container">
      <div class="row d-flex align-items-center">
        <div class=" col-sm-3 col-1 float-left ">
            <div class="logo  ">
              <!-- Uncomment below if you prefer to use an image logo --><!----->
              <h1 class="text-light text-nowrap"><a href="#intro" class="scrollto"><span>Sem Pressão</span></a></h1>
              <!-- <a href="#header" class="scrollto"><img src="img/logo.png" alt="" class="img-fluid"></a> -->
            </div>
        </div>
        <div class=" col-sm-9 col-11  text-right ">
          <nav class ="main-menu navbar navbar-expand-md navbar-light navbar-offcanvas float-right " role ="navigation" >

             <!-- Brand and toggle g et grouped for better mobile display -->
             <button id="navToggle" class ="navbar-toggler ml-auto" type ="button" data-toggle ="collapse"
             data-target ="#bs-example-navbar-collapse-1" aria-controls ="bs-example-navbar-collapse-1"
             aria-expanded ="false" aria-label ="
             <?php esc_attr_e( 'Toggle navigation', 'tema1'); ?>" >
            <span class ="navbar-toggler-icon"> </span>
            </button>

            <?php wp_nav_menu( array(
              'theme_location' => 'tema1_main_menu',
              'depth' => 3,
              'container' => 'div',
              'container_class' => 'collapse navbar-collapse ',
              'container_id' => 'bs-example-navbar-collapse-1',
              'menu_class' => 'navbar-nav mr-auto offcanvas-collapse ',
              'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
              'walker' => new WP_Bootstrap_Navwalker()
              ) );
             ?>
          </nav>
        </div>
      </div>
    </div>




  </header>
