<?php
/**
 * Fonction qui va ajouter des scripts dynamiquement afin que l'on puisse les inclures dans le thème avec wp_head() et wp_footer()
 *
 * @return void
 */
function ajout_css_js()
{
  // Ajout des scripts css
  // https://developer.wordpress.org/reference/functions/wp_enqueue_style/
  wp_enqueue_style('favicon', get_template_directory_uri() . '/img/favicon.ico');
  wp_enqueue_style('font-oswald', "https://fonts.googleapis.com/css?family=Oswald:300,400,500,700|Roboto:300,400,700");
  wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
  wp_enqueue_style('fontawesome', get_template_directory_uri() . '/css/font-awesome.min.css');
  wp_enqueue_style('flaticon', get_template_directory_uri() . '/css/flaticon.css');
  wp_enqueue_style('magnific-popup', get_template_directory_uri() . '/css/magnific-popup.css');
  wp_enqueue_style('owl.carousel', get_template_directory_uri() . '/css/owl.carousel.css');
  wp_enqueue_style('style', get_template_directory_uri() . '/css/style.css');

  wp_enqueue_script('jquery-perso', get_template_directory_uri() . '/js/jquery-2.1.4.min.js', null, true);
  wp_enqueue_script('bootstrap-perso', get_template_directory_uri() . '/js/bootstrap.min.js', ['jquery-perso'], null, true);
  wp_enqueue_script('magnific-popup', get_template_directory_uri() . '/js/magnific-popup.min.js', ['jquery-perso'], null, true);
  wp_enqueue_script('circle-progress', get_template_directory_uri() . '/js/circle-progress.min.js', ['jquery-perso'], null, true);
  wp_enqueue_script('owl-carousel', get_template_directory_uri() . '/js/owl.carousel.min.js', ['jquery-perso'], null, true);
  wp_enqueue_script('main-js', get_template_directory_uri() . '/js/main.js', ['jquery-perso'], null, true);
}
// Nous ajoutons un écouteur d'événements pour nous prévenir lorsque l'on peut ajouter des css et scripts.
// Cette écouteur va déclancher la fonction ajout_css_js()
// https://developer.wordpress.org/reference/hooks/wp_enqueue_scripts/
add_action('wp_enqueue_scripts', 'ajout_css_js');

/**
 * Fonction qui ajoute un menu au thème.
 *
 * @return void
 */
function register_main_menu()
{
  register_nav_menu('main-menu', 'Menu principal dans le header.');
}
add_action('after_setup_theme', 'register_main_menu'); 


/**
 * Fonction qui ajoute des attributs aux <a> des nav_menu
 *
 * @param [type] $att
 * @param [type] $item
 * @param [type] $args
 * @return void
 */
function ajout_menu_a_class($atts, $item, $args)
{
  $class = ''; // or something based on $item
  $atts['class'] = $class;
  return $atts;
}

// Ajout d'un écouteur d'événement de type filtre qui nous permet de changer les attributs des balises <a>
// les add_action et add_filter peuvent avoir jusqu'à 4 paramètres. Le 3ème pour l'ordre d'execution et le 4ème pour le nombre de paramètre qui sont passés à la fonction callback
add_filter('nav_menu_link_attributes', 'ajout_menu_a_class', 10, 3);

/**
 * Ajout de la fonctionnalité d'un ajout d'image pour les posts
 *
 * @return void
 */
function ajout_image_article()
{
  add_theme_support('post-thumbnails');
  $test = 0;
}
// Ajout d'un écouteur d'événement pour activer les images mise en avant pour les post (article)
add_action('init', 'ajout_image_article'); 


/**
 * Fonction qui ajoute la possibilité de customiser la partie personnalisation du thème
 * //https://developer.wordpress.org/themes/customize-api/customizer-objects/
 *
 * @param [type] $wp_customize
 * @return void
 */
function ajout_personnalisation_about($wp_customize)
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
add_action('customize_register', 'ajout_personnalisation_about');

?>