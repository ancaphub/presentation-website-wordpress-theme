<?php 
function setup_theme() {
 add_theme_support('title-tag');
 add_theme_support('custom-logo');
 add_theme_support('post-thumbnails');
}

add_action( 'after_setup_theme', 'setup_theme' );


if ( function_exists('register_sidebar') )
  register_sidebar(array(
    'name' => 'E-mail sign-up form',
    'before_widget' => '<div class = "widgetizedArea">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
  )
);
