<?php

class MgCustomizeContact {
/**
 *
 * @param [type] $wp_customize
 * @return void
 */
public static function ajout_perso_contact($wp_customize) {

  // Ajout d'un panel pour la section CONTACT
  $wp_customize->add_panel('coding-panel-contact', [
    'title' => __('Contact Section'),
    'Description' => __('Customise the contact section')
  ]);

  // Ajout de trois sections pour le contenu du panel CONTACT
  $wp_customize->add_section('coding-contact-section-title', [
    'panel' => 'coding-panel-contact',
    'title' => __('Customise the title')
  ]);
  $wp_customize->add_section('coding-contact-section-text', [
    'panel' => 'coding-panel-contact',
    'title' => __('Customise the description')
  ]);
  $wp_customize->add_section('coding-contact-section-infos', [
    'panel' => 'coding-panel-contact',
    'title' => __('Customise the contact infos')
  ]);

  //Ajout de settings pour la section TITLE de CONTACT
  $wp_customize->add_setting('coding-contact-title', [
    'type' => 'theme_mod',
    'sanitize_callback' => 'sanitize_textarea_field'
  ]);
  //Ajout de settings pour la section description de CONTACT
  $wp_customize->add_setting('coding-contact-text', [
    'type' => 'theme_mod',
    'sanitize_callback' => 'sanitize_textarea_field'
  ]);
  //Ajout de settings pour la section INFOS de CONTACT
  $wp_customize->add_setting('coding-contact-location', [
    'type' => 'theme_mod',
    'sanitize_callback' => 'sanitize_textarea_field'
  ]);
  $wp_customize->add_setting('coding-contact-adress-one', [
    'type' => 'theme_mod',
    'sanitize_callback' => 'sanitize_textarea_field'
  ]);
  $wp_customize->add_setting('coding-contact-adress-two', [
    'type' => 'theme_mod',
    'sanitize_callback' => 'sanitize_textarea_field'
  ]);
  $wp_customize->add_setting('coding-contact-phone', [
    'type' => 'theme_mod',
    'sanitize_callback' => 'sanitize_textarea_field'
  ]);
  $wp_customize->add_setting('coding-contact-mail', [
    'type' => 'theme_mod',
    'sanitize_callback' => 'sanitize_textarea_field'
  ]);

  // Ajout de control pour le TITLE
  $wp_customize->add_control('coding-contact-title-control', [
    'section' => 'coding-contact-section-title',
    'settings' => 'coding-contact-title',
    'label' => __('Title'),
    'description' => __('Customise the title for the section'),
    'type' => 'textarea'
  ]);
  // Ajout de control pour le TEXT
  $wp_customize->add_control('coding-contact-text-control', [
    'section' => 'coding-contact-section-text',
    'settings' => 'coding-contact-text',
    'label' => __('Description'),
    'description' => __('Customise the description for the section'),
    'type' => 'textarea'
  ]);
  // Ajout de control pour les INFOS
  $wp_customize->add_control('coding-contact-location-control', [
    'section' => 'coding-contact-section-infos',
    'settings' => 'coding-contact-location',
    'label' => __('Name of the location'),
    'description' => __('Customise the name of the location'),
    'type' => 'textarea'
  ]);
  $wp_customize->add_control('coding-contact-adress-one-control', [
    'section' => 'coding-contact-section-infos',
    'settings' => 'coding-contact-adress-one',
    'label' => __('Adress part one'),
    'description' => __('Enter the street and number of your office'),
    'type' => 'textarea'
  ]);
  $wp_customize->add_control('coding-contact-adress-two-control', [
    'section' => 'coding-contact-section-infos',
    'settings' => 'coding-contact-adress-two',
    'label' => __('Adress part two'),
    'description' => __('Enter the postal code and the city'),
    'type' => 'textarea'
  ]);
  $wp_customize->add_control('coding-contact-phone-control', [
    'section' => 'coding-contact-section-infos',
    'settings' => 'coding-contact-phone',
    'label' => __('Phone number'),
    'description' => __('Customise the phone number of your business'),
    'type' => 'textarea'
  ]);
  $wp_customize->add_control('coding-contact-mail-control', [
    'section' => 'coding-contact-section-infos',
    'settings' => 'coding-contact-mail',
    'label' => __('E-Mail'),
    'description' => __('Customise the e-mail for your business'),
    'type' => 'textarea'
  ]);
  
  }
}

add_action('customize_register', [MgCustomizeContact::class, 'ajout_perso_contact']);

?>