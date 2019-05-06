<?php
namespace App\Features\Taxonomies;
use App\Features\PostTypes\RecipePostType;
// class => function register et cette function lance la function prédéfinie register_taxonomy avec comme premier paramètre un identifiant,le second argument est à qui on va attribuer notre taxonomy. On pourrait y mettre 'post' ou 'page' cest a dire qu'on rendrais accessible notre taxonomy dans les article ou dans les pages. ici on rend notre taxonomy accessible dans notre post_type recette en ciblant son identifiant. Le troisème argument est optionnel nous verrons cela au prochain commit.
// une taxonomy à bien été rajoutée et s'appelle "Etiquette",c'est un nom qui est donné par défaut.
class RecipeTaxonomy {
  public static $slug = 'recipe_taxonomy';
  /**
   * Enregistrement de la Taxonomie
   * https://developer.wordpress.org/reference/functions/register_taxonomy/
   * @return void
   */
  public static function register(){
    $labels = [ // Rajouts des labels
      'name' => __('Type de recettes'),
      'singular_name' => __('Type de recette'),
    ];
    $args = [ // Rajout d'arguments
      'labels' => $labels,
        // par défaut hierarchical est false et l'aspect de votre taxonomy dans votre recette ressemblera a celle des étiquettes,si cest true l'aspect sera semblable a celle des catégories.
      'hierarchical' => true, 
        // permet d'activer ou de désactiver la taxonomy. par défaut c'est en true, on la met juste pour que vous connaissiez.
      'show_ui' => true,
        // visible dans le menu ou non.
      'show_in_menu' => true,
        // show admin column fait référence la column de prévisualisation là ou il y a Toutes les recettes, il y a la column titre,catégorie,etiquette etc... si c'est true il y aura également Type de recette
      'show_admin_column' => true,
    ];
     // tableau avec deux labels, dans les $args j'ai utilisé un seul paramètre c'est 'labels' au quel j'ai donné la valeur $labels, j'ai fini par passer $args en troisième paramètre à la fonction register_taxonomy.
    register_taxonomy(self::$slug, [RecipePostType::$slug], $args);
  }
}