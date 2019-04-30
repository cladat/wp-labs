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
					<!-- Single Post -->
					<div class="single-post">
						<div class="post-thumbnail">
            <?php
              // thumbnail | medium | medium_large | large
              the_post_thumbnail('medium_large')
            ?>
							<div class="post-date">
								<h2><?php the_time('j'); ?></h2>
								<h3><?php the_time('M Y'); ?></h3>
							</div>
            </div>
            <?php while (have_posts()) : the_post(); ?>
              <div class="post-content">
								<h2 class="post-title"> <?php the_title(); ?> </h2>
									<?php 
									$terms = wp_get_post_terms($post->ID, ['category']);
									foreach ($terms as $term): ?>
									<a class="mb-2" href="<?php echo get_term_link($term); ?>">
											<h4><?php echo $term->name; ?></h4>
									</a>
									<?php endforeach; ?>
                <div class="post-meta meta-perso">
								<a href=""><?php the_author(); ?></a>
                
								<a href=""><?php the_tags(); ?></a>
                
								<a href=""><?php echo get_comments_number(); ?> comment</a>
                </div>
                <?php the_content(); ?>
              </div>
            <?php endwhile; ?>
						<!-- Post Author -->
						<div class="author">
							<div class="avatar">
								<?php echo get_avatar( get_the_author_meta('user_email')); ?>
							
							</div>
							<div class="author-info">
								<h2><?php the_author(); ?>, <span>Author</span></h2>
								<p> <?php echo get_the_author_meta('description'); ?> </p>
							</div>
						</div>
						<!-- Post Comments -->
						<div class="comments">
							<h2>Comments (<?php echo get_comments_number(); ?>)</h2>
							<ul class="comment-list">
								<li>
									<div class="avatar">
										<img src="<?php echo get_template_directory_uri(); ?>/img/avatar/01.jpg" alt="">
									</div>
									<div class="commetn-text">
										<h3>Michael Smith | 03 nov, 2017 | Reply</h3>
										<p> </p>
									</div>
								</li>
							</ul>
						</div>
						<!-- Comment Form -->
						<div class="row">
							<div class="col-md-9 comment-from">
								<h2>Leave a comment</h2>
								<form class="form-class">
									<div class="row">
										<div class="col-sm-6">
											<input type="text" name="name" placeholder="Your name">
										</div>
										<div class="col-sm-6">
											<input type="text" name="email" placeholder="Your email">
										</div>
										<div class="col-sm-12">
											<input type="text" name="subject" placeholder="Subject">
											<textarea name="message" placeholder="Message"></textarea>
											<button class="site-btn">send</button>
										</div>
									</div>
								</form>
							</div>
						</div>
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