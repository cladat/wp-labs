<?php
namespace App\Database;
use App\Database\Migrations\CreateMailTable;

class Database
{
  /**
   * Initialisation de la base de donnée. Cette méthode est déclanché lorsque l'on active le plugin.
   *
   * @return void
   */
  public static function init()
  {
    // Création des tables dans la base de donnée.
    self::migration();
  }
  /**
   * Méthode qui lance les migrations afin que chacune créé sa table dans la base de donnée.
   *
   * @return void
   */
  public static function migration()
  {
    CreateMailTable::up();
  }
} 