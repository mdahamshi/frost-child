<?php
// Exit if accessed directly.
if (! defined('ABSPATH')) {
  exit;
}

// Enqueue parent and child theme styles
function frost_child_enqueue_styles()
{
  wp_enqueue_style('frost-parent-style', get_template_directory_uri() . '/style.css');
  wp_enqueue_style('frost-child-style', get_stylesheet_directory_uri() . '/style.css', array('frost-parent-style'));
}
add_action('wp_enqueue_scripts', 'frost_child_enqueue_styles');
