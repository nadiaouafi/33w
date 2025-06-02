<?php
function mondo_voyages_scripts() {
  wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'mondo_voyages_scripts');

register_nav_menus([
  'menu-principal' => 'Menu principal'
]);