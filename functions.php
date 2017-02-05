<?php
@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );

//include('wp_bootstrap_navwalker.php');


add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
  wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
  //wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri().'/assets/css/bootstrap.min.css');
  wp_enqueue_script( 'custom-scripts', get_stylesheet_directory_uri().'/assets/js/script.js');
}


add_filter('wp_nav_menu_items', 'add_login_logout_link', 10, 2);
function add_login_logout_link($items, $args){
  ob_start();
  wp_loginout('index.php');
  $loginoutlink = ob_get_contents();
  ob_end_clean();
  $items .= '<li>'. $loginoutlink .'</li>';
  return $items;
}

?>
