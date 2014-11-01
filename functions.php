<?php
// Ajouter des images à la une ("thumbnail")
add_theme_support( 'post-thumbnails' );

function excerpt_read_more_link($output) {
  global $post;
  return $output . '<a href="'. get_permalink($post->ID) . '"> Read more...</a>';
}
add_filter('the_excerpt', 'excerpt_read_more_link');

function register_my_menus() {
  register_nav_menus (
    array(
    'secondary-nav' => 'Secondary Menu',
    )
  );
}

require_once('wp_bootstrap_navwalker.php');

add_action( 'init', 'register_my_menus' );

