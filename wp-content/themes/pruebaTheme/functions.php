<?php


function init_template(){

  add_theme_support('post-thumbnails');
  add_theme_support( 'title-tag');

  register_nav_menus(
    array(
      'top_menu' => 'Menu principal'
    )
  );

}

add_action('after_setup_theme', 'init_template');

function assets(){
    wp_register_style('bootstrap','https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css','','4.5.0','all');
    wp_register_style('montserrat', 'https://fonts.googleapis.com/css2?family=Montserrat&display=swap', '', '1.0','all');

    wp_enqueue_style('estilos',get_stylesheet_uri(), array('bootstrap','montserrat'),'1.0', 'all');

    wp_register_script('popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js','','1.16.0', true);
    wp_enqueue_script('bootstraps','https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js',array('jquery','popper'),'4.5.0', true);

    wp_enqueue_script('custom', get_template_directory_uri().'/assets/js/custom.js', '', '1.0', true);
}

add_action('wp_enqueue_scripts','assets');

function sidebar(){
  register_sidebar(
    array(
      'name' => 'Pie de pagina',
      'id' => 'footer',
      'description' => 'Zona de widgets para pie de pagina',
      'before_title' => '<p>',
      'after_title' => '</p>',
      'before_widget' => '<div id="%1$s" class="%2$s">',
      'after_widget' => '</div>'
    )
  );
}

add_action('widgets_init','sidebar')
?>
