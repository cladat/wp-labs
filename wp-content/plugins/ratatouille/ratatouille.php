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

// require_once le fichier autoload.php qui lui fera un require_once pour toutes les class qui ont besoin d'être chargées.
require_once('autoload.php');

// J'inclus le fichier bootstrap qui lui contient tous les require_once,le but est de structurer nos fichiers, nos dossiers et de faire les appels de manière structurée dans les bons fichiers en se basant sur la structure et le fonctionnement de Laravel.
require_once('bootstrap.php');