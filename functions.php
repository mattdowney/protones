<?php

// Remove admin bar

add_filter('show_admin_bar', '__return_false');

// Loads the stylesheet without hard coding it in the header

function uppy_resources() {
	wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'uppy_resources');

// Add jQuery

function add_scripts() {
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', 'http://code.jquery.com/jquery-2.2.3.min.js');
    wp_enqueue_script( 'jquery' );
}

add_action('wp_enqueue_scripts', 'add_scripts');

// Removes version number from WordPress output

function remove_version_generator() {
return '';
}
add_filter('the_generator', 'remove_version_generator');

function remove_cssjs_ver( $src ) {
    if( strpos( $src, '?ver=' ) )
        $src = remove_query_arg( 'ver', $src );
    return $src;
}
add_filter( 'style_loader_src', 'remove_cssjs_ver', 10, 2 );
add_filter( 'script_loader_src', 'remove_cssjs_ver', 10, 2 );

// Remove emoji support

remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );

// Remove wp_embed.min.js

function my_deregister_scripts(){
  wp_deregister_script( 'wp-embed' );
}
add_action( 'wp_footer', 'my_deregister_scripts' );

// Makes navigation menus accessible

register_nav_menus(array(
	));

// Enables Featured Image

add_theme_support( 'post-thumbnails' );

// Adds image sizes

add_theme_support( 'post-thumbnails' );
add_image_size( 'post-header', 784, 600, true );

// Exclude categories

function exclude_post_categories($excl='', $spacer=' ') {
  $categories = get_the_category($post->ID);
  if (!empty($categories)) {
    $exclude = $excl;
    $exclude = explode(",", $exclude);
    $thecount = count(get_the_category()) - count($exclude);
    foreach ($categories as $cat) {
      $html = '';
      if (!in_array($cat->cat_ID, $exclude)) {
        $html .= '<a class="hero-cat" href="' . get_category_link($cat->cat_ID) . '" ';
        $html .= 'title="' . $cat->cat_name . '">' . $cat->cat_name . '</a>';
        if ($thecount > 1) {
          $html .= $spacer;
        }
        $thecount--;
        echo $html;
      }
    }
  }
}

// Reading time

function reading_time() {
    $content = get_post_field( 'post_content', $post->ID );
    $word_count = str_word_count( strip_tags( $content ) );
    $readingtime = ceil($word_count / 200);

    if ($readingtime == 1) {
      $timer = " minute";
    } else {
      $timer = " minutes";
    }
    $totalreadingtime = $readingtime . $timer;

    return $totalreadingtime;
}

?>