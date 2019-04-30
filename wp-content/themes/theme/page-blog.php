<?php

get_header();
?>

	<!-- Page header -->
	<div class="page-top-section">
		<div class="overlay"></div>
		<div class="container text-right">
			<div class="page-info">
				<h2>Blog</h2>
				<div class="page-links">
					<a href="#">Home</a>
					<span>Blog</span>
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
			
 				<!-- Post item -->
				<?php get_template_part('templates/partials/all-posts'); ?>

				<!-- Pagination -->
				<div class="page-pagination">
					<a class="active" href="">01.</a>
					<a href="">02.</a>
					<a href="">03.</a>
				</div>
				
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


	<!-- newsletter section -->
	<div class="newsletter-section spad">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<h2>Newsletter</h2>
				</div>
				<div class="col-md-9">
					<!-- newsletter form -->
					<form class="nl-form">
						<input type="text" placeholder="Your e-mail here">
						<button class="site-btn btn-2">Newsletter</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- newsletter section end-->

<?php
get_footer();

?>