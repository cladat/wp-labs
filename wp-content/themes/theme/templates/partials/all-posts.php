<?php
    $args = [
      'post_type' => 'post',
      //'category_name' => 'portfolio'
    ];
    $query = new WP_Query($args);
  while ($query->have_posts()): $query->the_post(); ?>

	<div class="post-item">
						<div class="post-thumbnail">
							<img src="<?php the_post_thumbnail_url(); ?>" alt="">
							<div class="post-date">
								<h2>03</h2>
								<h3>Nov 2017</h3>
							</div>
						</div>
						<div class="post-content">
							<h2 class="post-title">
              <?php the_title(); ?>
              </h2>
							<div class="post-meta">
								<a href="">Loredana Papp</a>
								<a href="">Design, Inspiration</a>
								<a href="">2 Comments</a>
							</div>
							<?php the_content(); ?>
							<a href="<?php the_permalink(); ?>" class="read-more">Read More</a>
						</div>
  </div>
  
<?php endwhile; ?>
          
