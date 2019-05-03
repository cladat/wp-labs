<?php
/**
 * Plugin Name:     Ratatouille
 * Plugin URI:      PLUGIN SITE HERE
 * Description:     PLUGIN DESCRIPTION HERE
 * Author:          YOUR NAME HERE
 * Author URI:      YOUR SITE HERE
 * Text Domain:     ratatouille
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         Ratatouille
 */

// Your code starts here.

// Minimum requis pour que le plugin après avoir été activé dans les plugins,apparaissent dans le menu à gauche.
// Il apparaîtra sous le nom 'Article' car c'est un nom attribué par défaut,nous verrons dans le prochain commit comment modifier cela.
function register_recipe_post_type(){
  // register_post_type permet de rajouter un post-type dans votre menu, de base il existe des post type tel que 'PAGE' ou 'POST'(article) et bien d'autre,notre but va être de créer un nouveau post type qui sera 'Recipe'(recette en français)
  // https://developer.wordpress.org/reference/functions/register_post_type/
  register_post_type('recipe',
  [
     // Labels est un paramètre contenant un tableau dans lequel vous passerez plein de paramètres prédéfinis que vous retrouverez dans la documentation, parmis eux 'name' qui permet de modifier le nom par defaut qui est 'Article' que l'on va passer à 'Recette' 
     'labels' => [
      // Nom au pluriel apparent dans le menu ou quand c'est nécéssaire dans une phrase
      'name' => 'Recettes',
      // Nom au singulier 
      'singular_name' => 'Recette'
    ],
    'public' => true,
    // has_archive permet de se rendre sur http://localhost:8888/recipe/ et d'y trouver toutes les recettes. si cela ne fonctionne pas: backoffice -> Settings -> Permalinks => save changes. vérifier aussi qu'on ai bien activé le nouveau plugin.
    'has_archive' => true,    
    // Dans le commit précédent on pouvait retrouver nos recettes avec l'urls finissant par /recipe/ a présent grâce au rewrite et a son paramètre slug on peut changer le slug de notre url pour que ce soit /recette/
    // A savoir: Dés que vous touchez a l'url même dans le code il faut allez dans me backoffice puis settings->permalinks et enregistrer les modifications sinon cela ne marchera pas.
    'rewrite' => [
      'slug' => 'recette'
    ]
    ]
  );
}
add_action('init','register_recipe_post_type'); 