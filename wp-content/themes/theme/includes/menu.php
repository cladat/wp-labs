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
}
add_action('after_setup_theme', [MgMenu::class, 'register_main_menu']); 