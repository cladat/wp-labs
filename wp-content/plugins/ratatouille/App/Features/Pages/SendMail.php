<?php
namespace App\Features\Pages;
use App\Http\Models\Mail;

class SendMail
{
  /**
   * Initialisation de la page.
   *
   * @return void
   */
  public static function init()
  {
    //https: //developer.wordpress.org/reference/functions/add_menu_page/  
    add_menu_page(
      __('Formulaire pour contacter les clients'), // Le titre qui s'affichera sur la page
      __('Mail Client'), // le texte dans le menu
      'edit_private_pages', // la capacité qu'il faut posséder en tant qu'utilisateur pour avoir accès à cette page (les roles et capacité seront vue plus tard)
      'mail-client', // Le slug du menu
      [self::class, 'render'], // La méthode qui va afficher la page
      'dashicons-email-alt', // L'icon dans le menu
      26 // la position dans le menu (à comparer avec la valeur deposition des autres liens menu que l'on retrouve dans la doc).
    );
  }
  /**
   * Affichage de la page
   *
   * @return void
   */
  public static function render()
  {
    // On fait appel a la function all venant de la class Mail et on compact son contenu dans notre view
    $mails = Mail::all();
    // Si $_SESSION['old'] existe alors on déclare une variable $old dans la quelle on stock son contenu puis on vide notre global
    if (isset($_SESSION['old'])) {
      $old = $_SESSION['old'];
      unset($_SESSION['old']);
    }
    // on envoi notre variable $old qui contient les anciennes valeurs dans notre view send-mail pour qu'on puisse afficher son contenu dans les champs.
    view('pages/send-mail', compact('old', 'mails'));
  }

} 