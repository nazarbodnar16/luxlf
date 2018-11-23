<?php
/*
Template Name: Policy
*/
get_header(); ?>
<main>
	<div class="inner-top-baner" style="background-image: url(<?php echo get_field('pr_top_background'); ?>">
		<div class="container">
			<div class="top-baner-box">
				<div class="info white-bg-padding">
					<p><?php echo get_field('pr_page_title'); ?></p>
				</div>
			</div>
		</div>
	</div>
<div class="policy">
	<div class="container">
		<div class="row">
			<div class="col-md-5"> <h2><?php echo get_field('pr_left_section_title'); ?></h2></div>
			<div class="col-md-7">
				<?php echo get_field('pr_right_page_content'); ?>
			</div>
		</div>
	</div>
</div>
	<div class="contact-us">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="contact-text">
						<h2>Contact Us</h2>
						<p>Tap into our wealth of experience and expertise. The conversation starts with you.</p>
					</div>
					<div class="contact-btn">
						<a class="default-btn" href="" data-toggle="modal" data-target="#contact-modal">info@cmclux.com</a>
					</div>
				</div>
			</div>
		</div>
		<div class="contact-img-after bg-img">
			<img src="<?php echo get_template_directory_uri(); ?>/images/contact-after.png" alt="">
		</div>
	</div>
</main>

<?php get_footer(); ?>