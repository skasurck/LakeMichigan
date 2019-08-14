<?php
/*
 * Add classes to main menu
 */
function fastfood_menu_classes($classes, $item, $args) {
  if($args->theme_location == 'top' || $args->theme_location == 'footer') {
    $classes[] = 'list-inline-item';
  }
  return $classes;
}
add_filter('nav_menu_css_class','fastfood_menu_classes',1,3);
