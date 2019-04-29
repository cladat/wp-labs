<?php

// Fonction get_template_directory() renvoit le chemin du dossier du thème actif sur (à ne pas confondre avec get_template_directory_uri() qui renvoi une url) 

// nous utilisons le fonction define() de php pour pouvoir utiliser une constante global
define('INCLUDE_DIR', get_template_directory() . "/includes");
require_once(INCLUDE_DIR . '/enqueue-script.php');
require_once(INCLUDE_DIR . '/menu.php');
require_once(INCLUDE_DIR . '/theme-setup.php');
require_once(INCLUDE_DIR . '/customize.php');

?>