<?php
  //Register Custom Navigation Walker
  require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';

  //carregando os scripts e folha de imagesetinterpolatilo
  function tema1_load_scripts(){

    //Flexslider Javascript CSS filesize
    wp_enqueue_script('flexslider-min-js', get_template_directory_uri().'/inc/flexslider/jquery.flexslider-min.js', array('jquery'),'', true);
    wp_enqueue_style('flexslider-css', get_template_directory_uri().'/inc/flexslider/flexslider.css', array(), '', 'all');
    wp_enqueue_script('flexslider.js', get_template_directory_uri().'/inc/flexslider/flexslider.js', array('jquery'),'', true);
    //Bootstrap arquivos css e javascript
    wp_enqueue_style('bootstrapcss', get_template_directory_uri().'/inc/lib/bootstrap/css/bootstrap.min.css', array(), '4.1.3', 'all');
    wp_enqueue_style('font-awesome', get_template_directory_uri().'/inc/lib/font-awesome/css/font-awesome.min.css', array(), '4.1.3', 'all');
    wp_enqueue_style('animate', get_template_directory_uri().'/inc/lib/animate/animate.min.css', array(), '4.1.3', 'all');
    wp_enqueue_style('ionicons', get_template_directory_uri().'/inc/lib/ionicons/css/ionicons.min.css', array(), '4.1.3', 'all');
    wp_enqueue_style('owlcarousel', get_template_directory_uri().'/inc/lib/owlcarousel/assets/owl.carousel.min.css', array(), '4.1.3', 'all');
    wp_enqueue_style('lightbox', get_template_directory_uri().'/inc/lib/lightbox/css/lightbox.min.css', array(), '4.1.3', 'all');




    wp_enqueue_script('botstrapjs', get_template_directory_uri().'/inc/lib/bootstrap/js/bootstrap.bundle.min.js', array('jquery'), '4.1.3', true);
    wp_enqueue_script('easing', get_template_directory_uri().'/inc/lib/easing/easing.min.js', array('jquery'), '4.1.3', true);
    wp_enqueue_script('wow', get_template_directory_uri().'/inc/lib/wow/wow.min.js', array('jquery'), '4.1.3', true);
    wp_enqueue_script('waypoints', get_template_directory_uri().'/inc/lib/waypoints/waypoints.min.js', array('jquery'), '4.1.3', true);
    wp_enqueue_script('counterup', get_template_directory_uri().'/inc/lib/counterup/counterup.min.js', array('jquery'), '4.1.3', true);
    wp_enqueue_script('owlcarousel', get_template_directory_uri().'/inc/lib/owlcarousel/owl.carousel.min.js', array('jquery'), '4.1.3', true);
    wp_enqueue_script('isotope', get_template_directory_uri().'/inc/lib/isotope/isotope.pkgd.min.js', array('jquery'), '4.1.3', true);
    wp_enqueue_script('lightbox', get_template_directory_uri().'/inc/lib/lightbox/js/lightbox.min.js', array('jquery'), '4.1.3', true);
    wp_enqueue_script('script1', get_template_directory_uri().'/inc/js/main.js', array(), '4.1.3', true);
    wp_enqueue_script('script2', get_template_directory_uri().'/inc/js/script.js', array('jquery'), '1.0', true);



    //fonts
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Rajdhani&display=swap');
    wp_enqueue_style('google-fonts1', 'https://fonts.googleapis.com/css2?family=Seaweed+Script&display=swap');
    wp_enqueue_style('google-fonts2', 'https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,600,700,700i|Montserrat:300,400,500,600,700');


    //Tema principal styesheet
    wp_enqueue_style('temastyle', get_stylesheet_uri(), array(), '1.0', 'all');



  }
  add_action('wp_enqueue_scripts', 'tema1_load_scripts');

  function tema1_config(){
    $args = array(
      'height'=>825,
      'width'=>1920,
      'flex-hight'=>false,
      'flex-width'=>false,
    );
    add_theme_support('custom-header', $args);
    add_theme_support('post-thumbnails');
    add_image_size('tema1-blog', 500, 350, array('center','center'));
    add_image_size('tema1-single', 1900, 400, array('center','center'));

    add_image_size('tema1-slider', 1320, 500, array('center','center'));
    //imagem redimencionada
    //add_image_size('minha-miniatura',500,500);
    //add_image_size('minha-miniatura',500,500,false);
    //É possivel definir valores 'right' e 'left' para eixo x e 'top' e 'bottom' para eixo y.
    //add_image_size('minha-miniatura',200,200,array('left', 'top'));
    add_theme_support('title-tag');
    register_nav_menus(
      array(
        'tema1_main_menu' =>  'Tema1 Main Menu',
        'tema1_footer_menu' => 'Tema1 Footer Menu'
      )
    );
  }
  add_action('after_setup_theme', 'tema1_config');
  add_action( 'widgets_init', 'aprendawp_sidebars' );
  function aprendawp_sidebars(){
     register_sidebar(array(
       'name' => 'Aprenda WP Main Sidebar',
       'id' => 'aprenda-wp-sidebar-1',
       'description' => 'Drag and drop your widgets here',
       'before_widget' => '<div id="%1$s"class ="widget%2$s widget-wrapper">',
       'after_widget' => '</div>',
       'before_title' => '<h4 class ="widget-title" >',
       'after_title' => '</h4>', ) );
       register_sidebar(array(
         'name' => 'Aprenda WP Second Sidebar',
         'id' => 'aprenda-wp-sidebar-2',
         'description' => 'Drag and drop your widgets here',
         'before_widget' => '<div id="%1$s"class ="widget%2$s widget-wrapper">',
         'after_widget' => '</div>',
         'before_title' => '<h4 class ="widget-title" >',
         'after_title' => '</h4>', ) );
     }
  add_filter('excerpt_length', function( $length ) { return 30; });
