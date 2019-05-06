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
// On use le namespace (dans autoload.php) et créer un 'ALIAS' avec la commande 'as'. Ici précision que l'alias est RecipePostType mais nécéssaire que si on modifie le nom de la class. si on veut garder un Alias qui porte le meme nom que la class il ne faut pas le préciser
use App\Features\PostTypes\RecipePostType as RecipePostType;
use App\Features\Taxonomies\RecipeTaxonomy;

// Your code starts here.

// require_once le fichier autoload.php qui lui fera un require_once pour toutes les class qui ont besoin d'être chargées.
require_once('autoload.php');

// Appel de la class venant du namespace qu'on a définit dans le fichier RecipePostType.php ,l'avantage c'est qu'on a redéfinit le nom de notre class qui était RecipePostType par App\Features\PostTypes\RecipePostType il y a maintenant presque aucune chance qu'un autre plugin utilise le meme nom de class et donc il n'y aura pas de conflit.
add_action('init',[RecipePostType::class, 'register']);
add_action('init', [RecipeTaxonomy::class, 'register']);