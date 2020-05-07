<?php

/* bodyにスラッグの追加 */
add_filter( 'body_class', 'add_page_slug_class_name' );
function add_page_slug_class_name( $classes ) {
  if ( is_page() ) {
    $page = get_post( get_the_ID() );
    $classes[] = $page->post_name;
  }
  return $classes;
}

add_theme_support( 'post-thumbnails' );//アイキャッチ画像を有効
the_post_thumbnail('thumbnail');
the_post_thumbnail('medium');
the_post_thumbnail('large');
the_post_thumbnail('full');

wp_enqueue_style( 'reset', get_template_directory_uri() . '/reset.css', "", time() );
wp_enqueue_style( 'main', get_template_directory_uri() . '/style.css', "", time() );