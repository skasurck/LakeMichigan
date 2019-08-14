<?php
/*
 * Add classes to main menu
 */

function canalava_menu_classes($classes, $item, $args) {
  if($args->theme_location == 'top') {
    $classes[] = 'nav-link link-nav-canalava';
  }
  return $classes;
}
add_filter('nav_menu_css_class','canalava_menu_classes',1,3);
