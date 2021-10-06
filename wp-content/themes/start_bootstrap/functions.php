<?php
//Load stylesheet
function load_css()
{
  wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
  wp_enqueue_style('bootstrap');

  wp_register_style('main', get_template_directory_uri() . '/css/main.css', array(), false, 'all');
  wp_enqueue_style('main');
}
add_action('wp_enqueue_scripts', 'load_css');

//Theme Options
add_theme_support('menus'); //menu
add_theme_support('post-thumbnails');
add_theme_support('widgets');

//Menus
register_nav_menus(
  array(
    'top-menu' => 'Top Menu Location',
    'mobile-menu' => 'Mobile Menu Location',
    'footer-menu' => 'Footer Menu Location',
  )
);

add_action('save_post', 'set_featured_image');
function set_featured_image()
{
  if (!isset($GLOBALS['post']->ID))
    return NULL;
  if (has_post_thumbnail(get_the_ID()))
    return NULL;
  $args = array(
    'numberposts'    => 1,
    'order'          => 'ASC', // DESC for the last image
    'post_mime_type' => 'image',
    'post_parent'    => get_the_ID(),
    'post_status'    => NULL,
    'post_type'      => 'attachment'
  );
  $attached_image = get_children($args);
  if ($attached_image) {
    foreach ($attached_image as $attachment_id => $attachment)
      set_post_thumbnail(get_the_ID(), $attachment_id);
  }
}

add_filter('post_thumbnail_html', 'post_thumbnail');
function post_thumbnail($html)
{
  if (empty($html))
    $html = '<img src="' . trailingslashit(get_stylesheet_directory_uri()) .
      'images/default-thumbnail.png' . '" alt="" />';
  return $html;
}
