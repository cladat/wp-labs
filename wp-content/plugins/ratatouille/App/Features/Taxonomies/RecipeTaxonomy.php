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
    register_taxonomy(self::$slug, [RecipePostType::$slug],'');
  }
}