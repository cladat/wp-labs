<?php

class MgCustom {

  /**
   * @param [type] $wp_customize
   * @return void
   */

   public static function ajout_custom_team($wp_customize) {

    //Ajout d'un panel pour la TEAM
    $wp_customize->add_panel('coding-panel-team', [
      'title' => __('Team Section'),
      'Description' => __('Customise the section team')
    ]);

     // Ajout des sections pour 3 team members dans TEAM
     $wp_customize->add_section('coding-team-section-first', [
      'panel' => 'coding-panel-team',
      'title' => __('First team member'),
    ]);
    $wp_customize->add_section('coding-team-section-second', [
      'panel' => 'coding-panel-team',
      'title' => __('Second team member'),
    ]);
    $wp_customize->add_section('coding-team-section-third', [
      'panel' => 'coding-panel-team',
      'title' => __('Third team member'),
    ]);

    // Setting dans la section TEAM ONE 
    $wp_customize->add_setting('coding-team-first', [
      'type' => 'theme_mod',
      'sanitize_callback' => 'sanitize_textarea_field'
    ]);

    $wp_customize->add_control('coding-team-first-control', [
      'section' => 'coding-team-section-first',
      'settings' => 'coding-team-first',
      'label' => __('Name of team member one'),
      'description' => __('Enter the name here'),
      'type' => 'textarea'
    ]);
   }

}

add_action('customize_register', [MgCustom::class, 'ajout_custom_team']);

?>