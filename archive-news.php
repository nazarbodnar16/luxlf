<?php

get_header(); 
$count = 1;
?>
<main>
	<div class="inner-top-baner literature-baner" style="background-image: url(<?php echo get_field('arch_n_top_page_background', 'cpt_news'); ?>">
		<div class="container">
			<div class="top-baner-box">
				<div class="info white-bg-padding">
					<p><?php echo get_field('arch_n_top_page_title', 'cpt_news'); ?></p>
				</div>
			</div>
		</div>
	</div>
	<div class="literature-tabs">
		<div class="tab">
			<div class="tab-header ">
				<ul class="tabs">
					<li><a href="#">Literature</a></li>
					<li><a href="#">White Papers</a></li>
					<li><a href="#">News</a></li>
				</ul> <!-- / tabs -->
			</div>
			<div class="tab_content">
				<div class="tabs_item literature_item" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/p-bg.png">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="literature-box">
									<h2>PENLIFA LX</h2>
									<h3>Long Term Growth Fund</h3>
									<ul class="literature-list">

										<?php
										// check if the repeater field has rows of data
										if( have_rows('literature_items', 'option') ):
										 	// loop through the rows of data
										    while ( have_rows('literature_items', 'option') ) : the_row(); ?>
										        
										    <li>
												<a class="lit-dload" data-attr="lit-el-dload-<?php echo $count; ?>" data-toggle="modal" data-cookie-target="#download-modal">
													<span class="ico">
														<img src="<?php echo get_template_directory_uri(); ?>/images/ico-pdf.png" alt="">
													</span>
													<span class="link-text"><?php the_sub_field('item_title'); ?></span>
												</a>
												<a class="lit-dlink-true" data-attr="lit-el-dload-<?php echo $count; ?>" href="<?php the_sub_field('file_upload'); ?>"></a>
											</li>

										<?php $count++;
										endwhile;
										else :
										    // no rows found
										endif;
										?>

									</ul>
									<a href="" class="default-link show-more-literature-list">Monthly Commentary Archives</a>
								</div>
							</div>
						</div>
					</div>
				</div> <!-- / tabs_item -->
				<div class="tabs_item pappers_item">
					<div class="container">
						<ul class="news-list">

							<?php
							
							// check if the repeater field has rows of data
							if( have_rows('whitepapers_items', 'option') ):
							 	// loop through the rows of data
							    while ( have_rows('whitepapers_items', 'option') ) : the_row(); ?>    
							    
									<li class="news-list--item">
										<a class="clearfix second-download"  data-attr="element-download-<?php echo $count; ?>" data-toggle="modal" data-cookie-target="#download-modal">
											<span class="news-text">
												<h3><?php the_sub_field('item_title'); ?></h3>
												<span class="text-block">
													<p><?php the_sub_field('item_teaser'); ?></p>
												</span>
											</span>
											<span class="default-btn download-pdf">
												download now
											</span>
										</a>
										<a class="download-link_true" data-attr="element-download-<?php echo $count; ?>" href="<?php the_sub_field('download_file'); ?>"></a>
									</li>

							    <?php $count++;
							    endwhile;
							else :
							    // no rows found
							endif;
							?>

						</ul>
					</div>
				</div> <!-- / tabs_item -->
				<div class="tabs_item literature-news-item" style="padding: 0;">
					<div class="news-head" style="margin-bottom: 40px;">
						<div class="container">
							<h2>Our News</h2>
						</div>
					</div>
					<div class="container">
						<ul class="news-list">

							<?php 
							$args = array(
								'post_type' => 'news',
								'posts_per_page' => -1,
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

								}
								wp_reset_postdata(); ?>

							</ul>
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
	</main>
	<?php get_footer(); ?>

