<?php

get_header(); ?>
<main>
	<div class="news-head">
		<div class="container">
			<h2>Our News</h2>
		</div>
	</div>
	<div class="news-list-box">
		<div class="container">
			<ul class="news-list">

				<?php 
				// query argments
				$args = array(
					'post_type' => 'news',
					'posts_per_page' => 3,
					'order' => 'DESC',
					'oredrby' => 'date'
				);

				$query = new WP_Query( $args );

				if ( $query->have_posts() ) {
						while ( $query->have_posts() ) 
							{ $query->the_post(); ?>

								<li class="news-list--item">
									<a class="clearfix" href="<?php echo get_permalink(); ?>">
										<span class="news-img bg-img">
											<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title(); ?>">
										</span>
										<span class="news-text">
											<h3><?php echo get_the_title(); ?></h3>
											<span class="text-block">
												<p><?php echo get_the_excerpt(); ?></p>
											</span>
										</span>
									</a>
								</li>

							<?php }
				} else {
					// Nothing was found
				}
				/* Reset query parameters */
				wp_reset_postdata(); ?>
				
			</ul>
			<!-- <a href="#" class="default-btn load-more"><span><i class="fas fa-spinner"></i>load more</span></a> -->
		</div>
	</div>		
</main>

<?php get_footer(); ?>