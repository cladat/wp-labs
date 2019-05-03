<?php

$contact_title = get_theme_mod('coding-contact-title', __('Contact us babe'));
$contact_text = get_theme_mod('coding-contact-text', __('Here we accept everyone so hit us up if you want to have fun'));
$contact_location = get_theme_mod('coding-contact-location', __('Fun Office'));
$contact_adress_1 = get_theme_mod('coding-contact-adress-one', __('10 place de la Minoterie'));
$contact_adress_2 = get_theme_mod('coding-contact-adress-two', __('1080 BXL'));
$contact_phone = get_theme_mod('coding-contact-phone', __('123456789'));
$contact_mail = get_theme_mod('coding-contact-mail', __('coucou@labs.be'));


?>

	<!-- Contact section -->
	<div class="contact-section spad fix">
		<div class="container">
			<div class="row">
				<!-- contact info -->
				<div class="col-md-5 col-md-offset-1 contact-info col-push">
					<div class="section-title left">
						<h2> <?= $contact_title; ?> </h2>
					</div>
					<p><?= $contact_text; ?> </p>
					<h3 class="mt60"><?= $contact_location; ?></h3>
					<p class="con-item"><?= $contact_adress_1; ?> <br> <?= $contact_adress_2; ?> </p>
					<p class="con-item"><?= $contact_phone; ?></p>
					<p class="con-item"><?= $contact_mail; ?></p>
				</div>
				<!-- contact form -->
				<div class="col-md-6 col-pull">
					<form class="form-class" id="con_form">
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
	<!-- Contact section end-->