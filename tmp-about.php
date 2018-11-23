<?php
/*
Template Name: About
*/
get_header(); ?>
<main>
	<div class="inner-top-baner about-baner" style="background-image: url(<?php echo get_field('a_top_page_background'); ?>">
		<div class="container">
			<div class="top-baner-box">
				<div class="info">
					<p><?php echo get_field('a_top_page_text'); ?></p>
				</div>
			</div>
		</div>
	</div>
	<div class="success-experience">
		<div class="img bg-img">
			<img src="<?php echo get_field('a_second_section_background'); ?>" alt="Trust image">
		</div>
		<div class="container">
			<div class="row">
				<div class="right-block col-md-6">
					<div class="dt">
						<div class="success-experience--info">
							<h2><?php echo get_field('a_second_section_right_little'); ?></h2>
							<p><?php echo get_field('a_second_section_right_description'); ?></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="success-experience black-bg mod-black mod-right">
		<div class="img bg-img">
			<img src="<?php echo get_field('a_third_section_background'); ?>" alt="Image">
		</div>
		<div class="container">
			<div class="row">
				<div class="right-block col-md-6">
					<div class="dt">
						<div class="success-experience--info">
							<h2><?php echo get_field('a_third_section_title'); ?></h2>
							<p><?php echo get_field('a_third_section_description'); ?></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="subscribe">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="subscribe-text">
						<h2>Subscribe to News & Updates</h2>
						<p>Get the latest news from the Carlisle Management Company team.</p>
					</div>
				</div>
				<div class="col-md-6">
					<?php echo do_shortcode('[mc4wp_form id="239"]'); ?>
				</div>
			</div>
		</div>
	</div>
	<div class="success-experience">
		<div class="img bg-img">
			<img src="<?php echo get_field('a_fourth_section_background'); ?>" alt="Team image">
		</div>
		<div class="container">
			<div class="row">
				<div class="right-block col-md-6">
					<div class="dt">
						<div class="success-experience--info">
							<h2><?php echo get_field('a_fourth_section_title'); ?></h2>
							<p><?php echo get_field('a_fourth_section_description'); ?></p>
						</div>
					</div>
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