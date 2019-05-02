<?php
// https://developer.wordpress.org/reference/functions/get_theme_mod/
// Attention dans ce template on utilise un raccourci pour <?php echo par <?= ceci n'est possible que si la config php.ini le permet short_open_tag. À ne faire que si vous avez le control de la config php.ini
$text_column_left = get_theme_mod('coding-about-text-left', __('Text about left'));
$text_column_right = get_theme_mod('coding-about-text-right', __('Text about right'));
$title_about = get_theme_mod('coding-about-title', __('Title about'));
?>

<!-- About section -->
	<div class="about-section">
		<div class="overlay"></div>
		<!-- card section -->
		<div class="card-section">
			<div class="container">
				<div class="row">
					<!-- single card -->
					<div class="col-md-4 col-sm-6">
						<div class="lab-card">
							<div class="icon">
								<i class="flaticon-023-flask"></i>
							</div>
							<h2>Get in the lab</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..</p>
						</div>
					</div>
					<!-- single card -->
					<div class="col-md-4 col-sm-6">
						<div class="lab-card">
							<div class="icon">
								<i class="flaticon-011-compass"></i>
							</div>
							<h2>Projects online</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..</p>
						</div>
					</div>
					<!-- single card -->
					<div class="col-md-4 col-sm-12">
						<div class="lab-card">
							<div class="icon">
								<i class="flaticon-037-idea"></i>
							</div>
							<h2>SMART MARKETING</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- card section end-->


		<!-- About content -->
		<div class="about-contant">
			<div class="container">
				<div class="section-title">
					<h2> <?=$title_about; ?></h2>
				</div>
				<div class="row">
					<div class="col-md-6">
						<p><?= $text_column_left; ?></p>
					</div>
					<div class="col-md-6">
						<p><?= $text_column_right; ?></p>
					</div>
				</div>
				<div class="text-center mt60">
					<a href="" class="site-btn">Browse</a>
				</div>
				<!-- popup video -->
				<div class="intro-video">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<img src="http://localhost:8888/wp-labs/wp-content/themes/theme/img/video.jpg" alt="">
							<a href="https://www.youtube.com/watch?v=JgHfx2v9zOU" class="video-popup">
								<i class="fa fa-play"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- About section end -->
