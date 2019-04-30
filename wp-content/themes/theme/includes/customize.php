<?php

class MgCustomize {
/**
 * Fonction qui ajoute la possibilité de customiser la partie personnalisation du thème
 * //https://developer.wordpress.org/themes/customize-api/customizer-objects/
 *
 * @param [type] $wp_customize
 * @return void
 */
  public static function ajout_personnalisation_about($wp_customize)
  {
    // Ajout d'un panel avec des options
    // Attention, un panel ne s'affichera que s'il contient des sections
    //https://developer.wordpress.org/reference/classes/wp_customize_manager/add_panel/
    $wp_customize->add_panel('coding-panel-about', [
      'title' => __('About Section'),
      'Description' => __('Customise the section about')
    ]);
    // Ajout d'une section à un panel défini, si pas de panel défini, alors la section sera visible directement
    // Attention il faut que le panel ait déjà été ajouté pour que la section puisse s'y greffer.
    // Attention une section ne s'affichera que si elle contient des controls.
    // https://developer.wordpress.org/reference/classes/wp_customize_manager/add_section/
    $wp_customize->add_section('coding-about-section-text', [
      'panel' => 'coding-panel-about',
      'title' => __('Customise the description'),
    ]);
    
    // Ajout d'un setting qui contiendra des informations dans la base de donnée sous la clé correspondant à son id (premier paramètre)
    // https://developer.wordpress.org/reference/classes/wp_customize_manager/add_setting/
    $wp_customize->add_setting('coding-about-text-left', [
      'type' => 'theme_mod',
      'sanitize_callback' => 'sanitize_textarea_field'
    ]);
    // Ajout d'un setting qui contiendra des informations dans la base de donnée sous la clé correspondant à son id (premier paramètre)
    // La clé est utilisé pour récuperer les valeurs dans le thème grâce à la fonction get_theme_mod()
    // Attention la ligne précédente n'est valable que si le 'type' du setting est défini à 'theme_mod'
    // https://developer.wordpress.org/reference/classes/wp_customize_manager/add_setting/
    $wp_customize->add_setting('coding-about-text-right', [
      'type' => 'theme_mod',
      'sanitize_callback' => 'sanitize_textarea_field'
    ]);
    // Ajout d'un control (un label avec input et autre information). Le control doit être attaché à une section ainsi qu'à un setting.
    // Attention le setting doit déjà être créé afin que le control puisse s'ajouter.
    // Attention un control ne s'affiche que s'il est lié à un setting.
    // https://developer.wordpress.org/reference/classes/wp_customize_manager/add_control/
    $wp_customize->add_control('coding-about-text-left-control', [
      'section' => 'coding-about-section-text',
      'settings' => 'coding-about-text-left',
      'label' => __('Left column text'),
      'description' => __('Customise the text for the left column'),
      'type' => 'textarea'
    ]);
    $wp_customize->add_control('coding-about-text-right-control', [
      'section' => 'coding-about-section-text',
      'settings' => 'coding-about-text-right',
      'label' => __('Right column text'),
      'description' => __('Customise the text for the right column'),
      'type' => 'textarea'
    ]);
  }
}

add_action('customize_register', [MgCustomize::class, 'ajout_personnalisation_about']);

?>