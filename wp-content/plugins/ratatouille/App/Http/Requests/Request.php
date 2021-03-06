<?php
namespace App\Http\Requests;

class Request{
   // Petite correction notre variable est renomée de error à errors
  private static $errors = array();
  // On créé une function du nom de validation qui attend un paramètre de type array.Ce paramètre va être rempli via le fichier SendMail.php ligne 44.  

  public static function validation(array $data){
  // Pour chaque entrée on lance une des méthode ci dessous selon la valeur du tableau $data
  // Data est un tableau de clé => valeur dont la clé est le "name" de l'input et la valeur est la méthode de vérification que l'on veut appliquer sur le contenu de l'input. C'est nous qui avons fait en sorte que les valeurs du tableau $data correspondent aux names de nos inputs dans notre formulaire.

    foreach ($data as $input_name => $verification) {
      // on lance la function de la class, 'email' ou 'required' selon ce que vaut $verification et on rempli le paramètre de la function avec $input_name
      call_user_func([self::class, $verification], $input_name);
      // En même temps qu'on fait les vérifications pour savoir si les champs sont bien remplis on en profite pour stocker ce qu'a écrit le client dans notre super global $_SESSION sous la clef 'old'.
    }

    // On vérifie que $errors contient quelque chose, si c'est le cas alors on récupère tous les messages d'erreurs qu'on y a stocké, on fait un foreach dessus pour réecrire chaque ligne qu'on stock dans une variable $message 
    if (count(self::$errors) != 0) {
      $message = "";
      foreach (self::$errors as $key => $value) {
        $message .= $value . '<br>';
      }
      // On rempli notre $_SESSION avec toutes nos erreurs réecrite pour que l'affichage soit mieux présenté
      $_SESSION['notice'] = [
        'status' => 'error',
        'message' => $message
      ];

      // On créé $_SESSION['old'] que si il y a des erreurs
      foreach ($data as $input_name => $validation) {
        $_SESSION['old'][$input_name] = $_POST[$input_name];
      }
      // on retourne sur notre page
      wp_safe_redirect(wp_get_referer());
      // Permet d'arreter le script tant qu'il y a des erreurs à partir de la ligne 44 de notre fichier SendMail.php
      exit; 
    }
    
  }

  

  public static function required(string $input_name){
    // La methode 'validation' à redistribuer via son foreach dans l'une ou l'autre methode (required,email) selon ce que vaut '$verification' tout en remplissant notre paramètre $input_name ci dessous par la valeur $input_name rempli ligne 15 ci dessus.
    if ($_POST[$input_name] == "") {
      // on rempli notre tableau $error avec nos erreurs qu'on écrit ci dessous
      self::$errors[$input_name] = sprintf(__('Le champ %s est obligatoire'), $input_name);
    }
  }

  public static function email(string $input_name){
    if (!is_email($_POST[$input_name])) {
      self::$errors[$input_name] = sprintf(__('Le champ %s doit être un format email'), $input_name);
    }
  }
} 