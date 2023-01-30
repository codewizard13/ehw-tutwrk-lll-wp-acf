<?php

add_action('wp_enqueue_scripts', 'astra_child_styles');

function astra_child_styles () {
  wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
  wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style'));
}