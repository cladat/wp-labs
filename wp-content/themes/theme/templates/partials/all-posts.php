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
								<h2><?php the_time('j'); ?></h2>
								<h3><?php the_date('M Y'); ?></h3>
							</div>
						</div>
						<div class="post-content">
							<h2 class="post-title">
              <?php the_title(); ?>
              </h2>
							<div class="post-meta">
								<a href=""><?php the_author(); ?></a>
                
								<a href=""><?php the_tags(); ?></a>
                
								<a href=""><?php echo get_comments_number(); ?> comment</a>
							</div>
							<?php the_content(); ?>
							<a href="<?php the_permalink(); ?>" class="read-more">Read More</a>
						</div>
  </div>
  
<?php endwhile; ?>
          
