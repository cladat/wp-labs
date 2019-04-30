<?php
get_header();
// Ce fichier template spécial de wordpress est appelé pour afficher les catégories ou taxonomie ou autre archive. Voir le wp hierarchy
// https://wphierarchy.com/
?>
<!-- Page header -->
<div class="page-top-section">
		<div class="overlay"></div>
		<div class="container text-right">
			<div class="page-info">
				<h2>Archives</h2>
				<div class="page-links">
					<span>
        <?php the_archive_title(); ?>
          </span>
				</div>
			</div>
		</div>
	</div>
	<!-- Page header end-->

<!-- page section -->
<div class="page-section spad">
		<div class="container">
		
			<div class="row">
			<div class="col-md-8 col-sm-7 blog-posts">
        <ul class="list-group mb-5">
          <!-- Dans cette boucle nous allons récupérer tout les post qui correspondent à la recherche -->
          <?php while (have_posts()): the_post(); ?>
          <li class="list-group-item">
              <a href="<?php the_permalink(); ?>">
                  <?php the_title(); ?>
              </a> </li>
          <?php endwhile; ?>
        </ul>
			</div>
				<!-- Sidebar area -->
				<div class="col-md-4 col-sm-5 sidebar">
					<?php get_search_form(); ?>
								
					<?php dynamic_sidebar('sidebar-1'); ?>
				</div>
				
			</div>
		</div>
	</div>
	<!-- page section end-->

<?php
get_footer();
?>  