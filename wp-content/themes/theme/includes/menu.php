<?php

class MgMenu {
/**
 * Fonction qui ajoute un menu au thème.
 *
 * @return void
 */
  public static function register_main_menu()
  {
    register_nav_menu('main-menu', 'Menu principal dans le header.');
  }

  /**
 * Fonction qui ajoute des attributs aux <a> des nav_menu
 *
 * @param [type] $att
 * @param [type] $item
 * @param [type] $args
 * @return void
 */
  public static function ajout_menu_a_class($atts, $item, $args)
  {
    $class = ''; // or something based on $item
    $atts['class'] = $class;
    return $atts;
  }
}

add_action('after_setup_theme', [MgMenu::class, 'register_main_menu']); 
add_filter('nav_menu_link_attributes', [MgMenu::class, 'ajout_menu_a_class'], 10, 3);

?>