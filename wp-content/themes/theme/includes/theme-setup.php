<?php

class MgThemeSetup {
/**
 * Ajout de la fonctionnalité d'un ajout d'image pour les posts
 *
 * @return void
 */
  public static function ajout_image_article()
  {
    add_theme_support('post-thumbnails');
    $test = 0;
  }
}

// Ajout d'un écouteur d'événement pour activer les images mise en avant pour les post (article)
add_action('init', [MgThemeSetup::class, 'ajout_image_article']); 

?>