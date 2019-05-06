<?php
/*
 * Plugin Name: Ratatouille
 * Author: Plugin Author
 * Text Domain: recipe
 * Domain Path: /languages
 */

// On définit un nom qu'on imagine unique vu sa complexité, une bonne pratique est que le nom soit équivalent au chemin pour atteindre le fichier dans lequel on se trouve.
namespace App\Features\PostTypes;

// On à Couper Coller notre function du fichier Ratatouille.php pour l'entourer d'une class
class RecipePostType
{
  public static function register()
  {
    register_post_type(
      'recipe', 
      [
           // labels contient un tableau avec pleins de paramètres par defaut en anglais comme : Add Post, Edit Post etc, on fait référence aux clefs et on y introduit une nouvelle valeur en français pour avoir les messages en français dans le backoffice.
        'labels' => [
          'name' => 'Recettes',
          'singular_name' => 'Recette',
          'add_new' => __('Ajouter'),
          'add_new_item' => __('Ajouter une recette'),
          'edit_item' => __('Modifier la recette'),
          'new_item' => __('Nouvelle recette'),
          'view_item' => __('Voir la recette'),
          'view_items' => __('Voir les recettes'),
          'search_items' => __('Rechercher des recettes'),
          'not_found' => __('Pas de recette trouvée.'),
          'not_found_in_trash' =>('Pas de recette dans la corbeille.'),
          'all_items' => __('Toutes les recettes'),
          'archives' => __('Recettes archivées'),        
          'filter_items_list' => __('Filtre de recette'),
          'items_list_navigation' => __('Navigation de recette'),
          'items_list' =>__('Liste recette'),
          'item_published' => __('Recette publiée.'),
          'item_published_privately' =>__('Recette publiée en privé.'),
          'item_reverted_to_draft' =>__('La recette est retournée au brouillon.'),
          'item_scheduled' => __('Recette planifiée.'),
          'item_updated' =>__('Recette mise à jour.'), 
        ],
        'public' => true,
        'has_archive' => true,
        'rewrite' => [
          'slug' => 'recette'
        ]
      ]
    );
  }
} 