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
  // On créer une variable qu'on appel 'slug' on la rend public et static pour pouvoir s'en servir dans les functions de la class RecipePostType et en dehors.
  public static $slug = 'recipe';
  public static function register()
  {
    register_post_type(
      //'recipe', 
      // on remplace le slug qui était écrit en dur au-dessus par la variable, on fait cela car on va fair appel à notre function register_post_type par son indentifiant à plusieurs endroits. Si on change la valeur de la variable à tous les endroits ou son identifiant est utilisé sera mis à jours.
      self::$slug, 
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
        ],
        // On active la possibilité d'assigner une catégorie à notre Recette grâce à la taxonomie 'category', rajoutez là puis allez voir,une fois fait essayez de rajouter un second arguement dans le tableau 'post_tag' et voyez ce que cela fait.
        'taxonomies' => ['category', 'post_tag'],
        // Rajout d'un icon à coté de notre lien 'Recette' dans notre menu, par défaut on à une epingle, je l'ai changée pour un bouquin. La liste des icones peut être retrouvé sur :
        // https://developer.wordpress.org/resource/dashicons/
        'menu_icon' => 'dashicons-book'
      ]
    );
  }
} 