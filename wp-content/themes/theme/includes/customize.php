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
    // Ajout d'un panel ABOUT
    // Attention, un panel ne s'affichera que s'il contient des sections
    $wp_customize->add_panel('coding-panel-about', [
      'title' => __('About Section'),
      'Description' => __('Customise the section about')
    ]);
    
    // Ajout d'une section TEXT dans ABOUT (si pas de panel défini, alors la section sera visible directement)
    // Attention une section ne s'affichera que si elle contient des controls.
    $wp_customize->add_section('coding-about-section-text', [
      'panel' => 'coding-panel-about',
      'title' => __('Customise the description'),
    ]);
    // Ajout d'une section TITRE dans ABOUT
    $wp_customize->add_section('coding-about-section-title', [
      'panel' => 'coding-panel-about',
      'title' => __('Customise the title'),
    ]);
    // Ajout d'une section VIDEO dans ABOUT
    $wp_customize->add_section('coding-about-section-video', [
      'panel' => 'coding-panel-about',
      'title' => __('Change the video'),
    ]);
    
    // Ajout d'un setting qui contiendra des informations dans la base de donnée sous la clé correspondant à son id (premier paramètre)
     // La clé est utilisé pour récuperer les valeurs dans le thème grâce à la fonction get_theme_mod()
    // Attention la ligne précédente n'est valable que si le 'type' du setting est défini à 'theme_mod'
    // Setting dans la section TEXT de ABOUT pour le text LEFT
    $wp_customize->add_setting('coding-about-text-left', [
      'type' => 'theme_mod',
      'sanitize_callback' => 'sanitize_textarea_field'
    ]);
    // Setting dans la section TEXT de ABOUT pour le text RIGHT
    $wp_customize->add_setting('coding-about-text-right', [
      'type' => 'theme_mod',
      'sanitize_callback' => 'sanitize_textarea_field'
    ]);
    // Setting dans la section TITLE de ABOUT pour le titre 
    $wp_customize->add_setting('coding-about-title', [
      'type' => 'theme_mod',
      'sanitize_callback' => 'sanitize_textarea_field'
    ]);
    // Setting dans la section VIDEO de ABOUT 
    $wp_customize->add_setting('coding-about-video', [
      'type' => 'theme_mod',
      'sanitize_callback' => 'sanitize_textarea_field'
    ]);
    // Setting dans la section PHOTO de ABOUT 
    $wp_customize->add_setting('coding-about-photo', [
      'type' => 'theme_mod',
      'sanitize_callback' => 'sanitize_textarea_field'
    ]);
    
    // Ajout d'un control (un label avec input et autre information). Le control doit être attaché à une section ainsi qu'à un setting.
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
    $wp_customize->add_control('coding-about-title-control', [
      'section' => 'coding-about-section-title',
      'settings' => 'coding-about-title',
      'label' => __('About Title'),
      'description' => __('Customise the title'),
      'type' => 'textarea'
    ]);
    $wp_customize->add_control('coding-about-video-control', [
      'section' => 'coding-about-section-video',
      'settings' => 'coding-about-video',
      'label' => __('Video'),
      'description' => __('Enter here the URL for your video'),
      'type' => 'url'
    ]);
    $wp_customize->add_control(
      new WP_Customize_Image_Control(
          $wp_customize,
          'logo',
          array(
              'label'      => __( 'Photo', 'theme_name' ),
              'description' => __('Upload a photo'),
              'section'    => 'coding-about-section-video',
              'settings'   => 'coding-about-photo',
              'context'    => 'your_setting_context' 
          )
      )
  );
  
  }
}

add_action('customize_register', [MgCustomize::class, 'ajout_personnalisation_about']);

?>