<?php
/*
Template Name: Our Funds
*/
get_header(); ?>
<?php $fund_c = get_field('funds_content'); ?>
<main>
	<div class="inner-top-baner" style="background-image: url(<?php echo get_field('of_top_page_background'); ?>">
		<div class="container">
			<div class="top-baner-box">
				<div class="info white-bg-padding">
					<p><?php echo get_field('of_page_title'); ?></p>
				</div>
			</div>
		</div>
	</div>
	<div class="tab">
		<div class="container">
			<div class="tab-header ">
				<ul class="tabs">
					<li><a href="#"><?php echo $fund_c['f_tab_name']; ?></a></li>
					<li><a href="#"><?php echo $fund_c['s_tab_name']; ?></a></li>
					<li><a href="#"><?php echo $fund_c['t_tab_name']; ?></a></li>
					<li><a href="#"><?php echo $fund_c['fo_tab_name']; ?></a></li>
					<li><a href="#">News</a></li>
				</ul> <!-- / tabs -->
			</div>
			<div class="tab_content">
				<div class="tabs_item">
					<div class="row">
						<div class="col-md-5">
							<h2><?php echo $fund_c['f_left_side_title']; ?></h2>
						</div>
						<div class="col-md-7">
							<?php echo $fund_c['f_right_side_description']; ?>
						</div>
					</div>
				</div> <!-- / tabs_item -->
				<div class="tabs_item">
					<div class="row">
						<div class="col-md-5">
							<h2><?php echo $fund_c['s_left_side_title']; ?></h2>
						</div>
						<div class="col-md-7">
							<?php echo $fund_c['s_right_side_description']; ?>
						</div>
					</div>
				</div> <!-- / tabs_item -->
				<div class="tabs_item">
					<div class="row">
						<div class="col-md-5">
							<h2><?php echo $fund_c['t_left_side_title']; ?></h2>
						</div>
						<div class="col-md-7">
							<div class="row">

								<?php 

								$posts = $fund_c['t_team_members'];

								if( $posts ): ?>
								    <ul>
								    <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
								        <?php setup_postdata($post); ?>
								        <div class="col-xs-6 w100-xxs"><a class="team-item-underline" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
								    <?php endforeach; ?>
								    </ul>
								    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
								<?php endif; ?>

							</div>
						</div>
					</div>
				</div>
				<div class="tabs_item">
					<div class="row">
						<div class="col-md-5">
							<h2><?php echo $fund_c['fo_left_side_title']; ?></h2> 
						</div>
						<div class="col-md-7">
							<div class="row">
								<?php echo $fund_c['fo_right_side_content']; ?>
							</div>
						</div>
					</div>
				</div>
				<div class="tabs_item">
					<ul class="news-list">
						<?php 
							$category_id = get_field('news_category');
							$args = array(
								'post_type' => 'news',
								'tax_query' => array(
										array(
											'taxonomy' => 'news_category',
											'field'    => 'id',
											'terms'    => array($category_id),
										)
									),
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
													<span class="date"><?php echo get_the_date('j F, Y') ?></span>
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