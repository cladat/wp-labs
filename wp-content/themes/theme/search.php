<?php
get_header();
// Ce fichier template spécial de wordpress est appelé suite à une recheche avec un formulaire de type get qui pointe sur l'url de base du site
?>

	<!-- Page header -->
	<div class="page-top-section">
		<div class="overlay"></div>
		<div class="container text-right">
			<div class="page-info">
				<h2>Résultats de la recherche pour</h2>
				<div class="page-links">
					<span>"<?php echo get_search_query(); ?>"</span>
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
      
      <?php while (have_posts()): the_post(); ?>
        <li class="list-group-item">
            <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
            </a> </li>
      <?php endwhile; ?>

 				<!-- Post item -->
				<!-- <?php get_template_part('templates/partials/all-posts'); ?> -->
				
      </div>
      
				<!-- Sidebar area -->
				<div class="col-md-4 col-sm-5 sidebar">

				<form class="search-form" action="<?php echo get_site_url(); ?>" method="get">
          <input type="text" name="s" id="">
          <button class="search-btn" type="submit"><i class="flaticon-026-search"></i></button>
				</form>
								
					<?php dynamic_sidebar('sidebar-1'); ?>
				</div>
				
			</div>
		</div>
	</div>
	<!-- page section end-->

<?php
get_footer();
?>