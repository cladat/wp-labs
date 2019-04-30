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
                <div class="post-meta">
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
					<!-- Single widget -->
					<div class="widget-item">
						<form action="#" class="search-form">
							<input type="text" placeholder="Search">
							<button class="search-btn"><i class="flaticon-026-search"></i></button>
						</form>
					</div>
					<!-- Single widget -->
					<div class="widget-item">
						<h2 class="widget-title">Categories</h2>
						<ul>
							<li><a href="#">Vestibulum maximus</a></li>
							<li><a href="#">Nisi eu lobortis pharetra</a></li>
							<li><a href="#">Orci quam accumsan </a></li>
							<li><a href="#">Auguen pharetra massa</a></li>
							<li><a href="#">Tellus ut nulla</a></li>
							<li><a href="#">Etiam egestas viverra </a></li>
						</ul>
					</div>
					<!-- Single widget -->
					<div class="widget-item">
						<h2 class="widget-title">Instagram</h2>
						<ul class="instagram">
							<li><img src="img/instagram/1.jpg" alt=""></li>
							<li><img src="img/instagram/2.jpg" alt=""></li>
							<li><img src="img/instagram/3.jpg" alt=""></li>
							<li><img src="img/instagram/4.jpg" alt=""></li>
							<li><img src="img/instagram/5.jpg" alt=""></li>
							<li><img src="img/instagram/6.jpg" alt=""></li>
						</ul>
					</div>
					<!-- Single widget -->
					<div class="widget-item">
						<h2 class="widget-title">Tags</h2>
						<ul class="tag">
							<li><a href="">branding</a></li>
							<li><a href="">identity</a></li>
							<li><a href="">video</a></li>
							<li><a href="">design</a></li>
							<li><a href="">inspiration</a></li>
							<li><a href="">web design</a></li>
							<li><a href="">photography</a></li>
						</ul>
					</div>
					<!-- Single widget -->
					<div class="widget-item">
						<h2 class="widget-title">Quote</h2>
						<div class="quote">
							<span class="quotation">‘​‌‘​‌</span>
							<p>Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique. Sed lacinia turpis at ultricies vestibulum.</p>
						</div>
					</div>
					<!-- Single widget -->
					<div class="widget-item">
						<h2 class="widget-title">Add</h2>
						<div class="add">
							<a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/add.jpg" alt=""></a>
						</div>
					</div>
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