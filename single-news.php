<?php get_header(); ?>
<?php if ( have_posts() ) :  while ( have_posts() ) : the_post(); ?>
<main>
	<div class="news-detail">
		<div class="text-container">
			<h1><?php echo get_the_title(); ?></h1>
			<span class="date"><?php echo get_the_date('j F, Y') ?></span>
			<div class="img bg-img">
				<img src="<?php echo get_field('news_top_image'); ?>" alt="<?php echo get_the_title(); ?>">
			</div>
			<div class="row">
				<div class="col-md-9">

					<?php

					// check if the flexible content field has rows of data
					if( have_rows('news_content') ):
					     // loop through the rows of data
					    while ( have_rows('news_content') ) : the_row();
					        if( get_row_layout() == 'common_paragraph' ):
					        	the_sub_field('paragraph');
					        elseif( get_row_layout() == 'quote_section' ): ?>

								<div class="news-blockquote">
									<blockquote>
										<?php the_sub_field('quote_text'); ?>
									</blockquote>
									<div class="by">
										<strong><?php the_sub_field('person'); ?></strong>
										<span><?php the_sub_field('position'); ?></span>
									</div>
								</div>

					    <?php endif;
					    endwhile;
					else :
					    // no layouts found
					endif;

					?>

				</div>
				<div class="col-md-3">
					<div class="tag-box">
						<h2>TAGS</h2>
						<?php the_tags( '<ul class="tag-list"><li class="tag-list--item">', '</li><li class="tag-list--item">', '</li></ul>' ); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php endwhile; ?>
<?php endif; ?>
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
</main>

<?php get_footer(); ?>