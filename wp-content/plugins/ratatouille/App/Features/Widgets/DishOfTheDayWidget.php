<?php
namespace App\Features\Widgets;
// On créer une class qui étend une class prédéfinie de Wordpress 'WP_Widget'
// https://developer.wordpress.org/reference/classes/wp_widget/
class DishOfTheDayWidget extends \WP_Widget
{
  public static $slug = "dish-of-the-day";
  /**
   * Comme en javascript quand on créait une class on mettais un construct comme ca quand on faisait un extend de cette class on pouvait faire un super() qui permettait de rajouter ou de réduire le nombre de paramètre.
   * Pour cet exemple c'est pareil,on etend une class wordpress qui s'appel WP_Widget et on réutilise certains de ses paramètres comme : l'identifiant, et le title à qui on attribue des valeurs
   * le construct est lancé lorsque l'on instancie la class on passe à la class parent le slug et le titre
   */
  function __construct()
  {
    parent::__construct(
      self::$slug,  // slug
      __("Plat du jour")   // Titre 
    );
  }
  // On enregistre notre widget dans le backoffice pour qu'il soit accessible et qu'on puisse s'en servir, on passe en paramètre la class pour qu'il charge un widget avec toutes les propriétés qu'on définira plus bas dans widget() et form() etc..
  public static function register()
  {
    register_widget(self::class);
  }
  // method 'widget' de la class WP_Widget qui permet de rendre un visuel dans le frontend
  public function widget($args, $instance)
  {
    echo 'Ce qui est affiché dans le frontend';
  }
  
  // On fait appel à la methode 'form' qui vient de la class WP_Widget pour rendre un visuel dans le backoffice,allez dans votre backoffice -> Appearence -> Widgets et vous trouvez parmis tous les widgets, un widget qui s'appel 'Plat du jour' glissez le dans votre emplacement Footer,cliquez sur la petite fleche et voyez ce que vous trouverez comme texte
  public function form($instance)
  {
    echo 'Ce qui est affiché dans le widget (dans le backoffice)';
  }
} 
