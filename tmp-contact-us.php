<?php
/*
Template Name: Contact Us
*/
get_header(); ?>
<main>
	<div class="inner-top-baner" style="background-image: url(<?php echo get_field('co_top_page_background'); ?>">
		<div class="container">
			<div class="top-baner-box">
				<div class="info white-bg-padding">
					<p><?php echo get_field('co_top_page_title'); ?></p>
				</div>
			</div>
		</div>
	</div>
	<div class="contact-us-box">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="info-location">
						<h2>Contact Us</h2>
						<ul class="contact-list">
							<li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/office-telephone.png" alt=""><span  class="phone">+ 352.268.4.53.59</span></a></li>
							<li><a href="mailto:info@cmclux.com"><img src="<?php echo get_template_directory_uri(); ?>/images/email.png" alt=""><span>info@cmclux.com</span></a></li>
							<li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/internet.png" alt=""><span>www.cmclux.com</span></a></li>
						</ul>
					</div>
					<div class="location">
						<h3 class="clr_orange">headquarters</h3>
						<p>36, Rue Ste. Zithe, 2763 Luxembourg</p>
					</div>
					<div id="g-map">
						
					</div>
				</div>
				<div class="col-md-6">
					<div class="contact-box-form">
						<p>For all fund related enquiries please use the contact form below or email us at: <a class="clr_orange" href="mailto:info@cmclux.com">info@cmclux.com</a></p>
						<div class="contact-form">
							<?php echo do_shortcode('[contact-form-7 id="242" title="Contact form contact us page" html_class="use-floating-validation-tip"]'); ?>
						</div>

						<p>The personal information we collect is used for the purpose for which it was provided to us. We endeavor to keep your personal information  with appropriate level of security and will keep it on record for as long as we need for legitimate business or legal reasons. We will then delete it safely and securely.</p>
						<p>For more information about how Luxembourg Life Fund site processes your personal data, please view our <a class="clr_orange " href="/privacy-policy/">privacy statement.</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>

<?php get_footer(); ?>