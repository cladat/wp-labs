<?php
namespace App\Features\MetaBoxes;
use App\Features\PostTypes\RecipePostType;

class RecipeDetailsMetabox
{
  public static $slug = 'recipe_details_metabox';
  /**
   * Ajout d'une méta box au type de contenu qui sont passer dans le tableau $screens
   * https://developer.wordpress.org/plugins/metadata/custom-meta-boxes/
   *
   * @return void
   */
  public static function add_meta_box()
  {
    $screen = [RecipePostType::$slug];
      add_meta_box(
        self::$slug,           // Unique ID
        __("Détails de la recette"),  // Box title
        [self::class, 'render'],  // Content callback, must be of type callable
        $screen                   // Post type
      );
  }
  /**
   * Fonction pour rendre le code html dans la metabox
   *
   * @return void
   */
  public static function render()
  {
    // Récupération de toutes les metadatas du post
    // https://developer.wordpress.org/reference/functions/get_post_meta/
    $data = get_post_meta(get_the_ID());
    // Etant donné que $data est un tableau de données contenant toutes les metadatas possible on doit préciser qu'on veut celle dont l'index est 0. nous avons qu'une seule metadata stockée mais la récupération se fait quand même via un tableau.
    $time = extract_data_attr('time_preparation',$data);
    // Création d'une variable contenant la valeur qu'on a été chercher dans la base de donné grâce à get_post_meta(get_the_ID()) et qu'on assaini via le helper extract_data_attr()
    $nbr_personne = extract_data_attr('nbr_personne',$data);
    // on rajout dans compact la seconde variable pour l'envoyer dans la view recipe-detail
    view('metaboxes/recipe-detail',compact('time','nbr_personne'));
  }

  /**
   * sauvegarde des données de la metabox
   *
   * @param [type] $post_id reçu par le do_action
   * @return void
   */
  //$post_id est remplit par l'id du post contenu dans l'url de la page
  public static function save($post_id)
  {
    // On verifie que $_POST ne soit pas vide pour effectuer l'action uniquement à la sauvegarde du post Type
    // $_POST est une variable globale php qui contient les données qu'on envoit via un formulaire,notre page recette n'est en soit qu'un formulaire avec des inputs et des textarea qu'on rempli et ce qu'on dit en soit c'est :
    // Si notre $_POST est différent de vide alors on execute les lignes suivantes
    if (count($_POST) != 0) {
      // tableau dans lequel sont stockées les données récupérées par la requete, auxquelles j'assigne des clefs 
      $data = [
        // On utilise le helper post_data pour passer la clef et la super global $_POST
        'time_preparation' => post_data('rat_time_preparation',$_POST),
        'nbr_personne' => post_data('rat_nbr_personne',$_POST),
      ];
      // J'utilise le helper update_post_metas que j'ai créé dans le fichier helpers.php ligne 36,je passe deux variables, $post_id qui contient l'id du post, et $data qui contient un tableau de données récupéré
      update_post_metas($post_id,$data);
    }
  }

}  