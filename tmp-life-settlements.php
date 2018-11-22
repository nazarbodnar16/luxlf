<?php
/*
Template Name: Life Settlements
*/
get_header(); ?>
<main>
	<div class="inner-top-baner" style="background-image: url(<?php echo get_field('top_background');?>">
		<div class="container">
			<div class="top-baner-box">
				<div class="info white-bg-padding">
					<p><?php echo get_field('live_page_title'); ?></p>
				</div>
			</div>
		</div>
	</div>
	<div class="life-settlements">
		<div class="container">

			<?php
			// check if the repeater field has rows of data
			if( have_rows('live_page_content') ):
			 	// loop through the rows of data
			    while ( have_rows('live_page_content') ) : the_row(); ?>

						<div class="box border">
							<div class="row">
								<div class="col-md-4">
									<h2><?php the_sub_field('left_title'); ?></h2>
								</div>
								<div class="col-md-8">
									<?php the_sub_field('right_content'); ?>
								</div>
							</div>
						</div>      

			<?php endwhile;
			else :
			    // no rows found
			endif;
			?>

		</div>
	</div>
	<div class="contact-us">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="contact-text">
							<h2>Contact Us</h2>
							<p>We offer unique options to a diverse range of investors.</p>
						</div>
					</div>
					<div class="col-md-6">
						<div class="contact-btn">
							<a class="default-btn" href="" data-toggle="modal" data-target="#contact-modal">contact us</a>
						</div>
					</div>
				</div>
			</div>
		</div>
</main>

<?php get_footer(); ?>