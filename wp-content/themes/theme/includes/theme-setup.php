<?php

class MgThemeSetup {
/**
 * Ajout de la fonctionnalité d'un ajout d'image pour les posts
 *
 * @return void
 */
  public static function ajout_image_article()
  {
    add_theme_support('post-thumbnails');
    $test = 0;
  }
}

// Ajout d'un écouteur d'événement pour activer les images mise en avant pour les post (article)
add_action('init', [MgThemeSetup::class, 'ajout_image_article']); 

/**
 * Filter the except length to 20 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length( $length ) {
  return 10;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

/**
 * Filter the "read more" excerpt string link to the post.
 *
 * @param string $more "Read more" excerpt string.
 * @return string (Maybe) modified "read more" excerpt string.
 */
function wpdocs_excerpt_more( $more ) {
  if ( ! is_single() ) {
      $more = sprintf( '<a class="read-more" href="%1$s">%2$s</a>',
          get_permalink( get_the_ID() ),
          __( '[.....]', 'textdomain' )
      );
  }

  return $more;
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );

?>