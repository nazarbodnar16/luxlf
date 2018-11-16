<?php get_header(); ?>

<main>
	<div class="inner-top-baner literature-baner" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/literature-bg.png">
		<div class="container">
			<div class="top-baner-box">
				<div class="info white-bg-padding">
					<p>Literature and News</p>
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
										<li>
											<a href="<?php echo get_template_directory_uri(); ?>/images/ico-pdf.png" download>
												<span class="ico">
													<img src="<?php echo get_template_directory_uri(); ?>/images/ico-pdf.png" alt="">
												</span>
												<span class="link-text">Monthly Fact Sheet (08/31/18)</span>
											</a>
										</li>
										<li>
											<a href="<?php echo get_template_directory_uri(); ?>/images/ico-pdf.png" download>
												<span class="ico">
													<img src="<?php echo get_template_directory_uri(); ?>/images/ico-pdf.png" alt="">
												</span>
												<span class="link-text">Monthly Fact Sheet (08/31/18)</span>
											</a>
										</li>
										<li>
											<a href="<?php echo get_template_directory_uri(); ?>/images/ico-pdf.png" download>
												<span class="ico">
													<img src="<?php echo get_template_directory_uri(); ?>/images/ico-pdf.png" alt="">
												</span>
												<span class="link-text">Monthly Fact Sheet (08/31/18)</span>
											</a>
										</li>
										<li>
											<a href="<?php echo get_template_directory_uri(); ?>/images/ico-pdf.png" download>
												<span class="ico">
													<img src="<?php echo get_template_directory_uri(); ?>/images/ico-pdf.png" alt="">
												</span>
												<span class="link-text">Monthly Fact Sheet (08/31/18)</span>
											</a>
										</li>
									</ul>
									<a href="" class="default-link">Monthly Commentary Archives</a>
								</div>
							</div>
						</div>
					</div>
				</div> <!-- / tabs_item -->
				<div class="tabs_item pappers_item" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/p-bg.png">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="literature-box">
									<h2>PENLIFA LX</h2>
									<h3>Long Term Growth Fund</h3>
									<ul class="literature-list">
										<li>
											<a href="<?php echo get_template_directory_uri(); ?>/images/ico-pdf.png" download>
												<span class="ico">
													<img src="<?php echo get_template_directory_uri(); ?>/images/ico-pdf.png" alt="">
												</span>
												<span class="link-text">Monthly Fact Sheet (08/31/18)</span>
											</a>
										</li>
										<li>
											<a href="<?php echo get_template_directory_uri(); ?>/images/ico-pdf.png" download>
												<span class="ico">
													<img src="<?php echo get_template_directory_uri(); ?>/images/ico-pdf.png" alt="">
												</span>
												<span class="link-text">Monthly Fact Sheet (08/31/18)</span>
											</a>
										</li>
										<li>
											<a href="<?php echo get_template_directory_uri(); ?>/images/ico-pdf.png" download>
												<span class="ico">
													<img src="<?php echo get_template_directory_uri(); ?>/images/ico-pdf.png" alt="">
												</span>
												<span class="link-text">Monthly Fact Sheet (08/31/18)</span>
											</a>
										</li>
										<li>
											<a href="<?php echo get_template_directory_uri(); ?>/images/ico-pdf.png" download>
												<span class="ico">
													<img src="<?php echo get_template_directory_uri(); ?>/images/ico-pdf.png" alt="">
												</span>
												<span class="link-text">Monthly Fact Sheet (08/31/18)</span>
											</a>
										</li>
									</ul>
									<a href="" class="default-link">Monthly Commentary Archives</a>
								</div>
							</div>
						</div>
					</div>
				</div> <!-- / tabs_item -->
				<div class="tabs_item literature-news-item" style="padding: 0;">
						<div class="news-head" style="margin-bottom: 40px;">
							<?php if ( have_posts() ) : ?>
							<div class="container">
								<h2><?php printf( __( 'Tagged: %s'), single_tag_title('',false)); ?></h2>
							</div>
						</div>
					<div class="container">
						<ul class="news-list">		

							<?php while ( have_posts() ) : the_post(); ?>
							<li class="news-list--item">
								<a class="clearfix" href="<?php echo get_permalink(); ?>">
									<span class="news-img bg-img">
										<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
									</span>
									<span class="news-text">
										<h3><?php the_title(); ?></h3>
										<span class="text-block">
											<p><?php echo get_the_excerpt(); ?></p>
										</span>
									</span>
								</a>
							</li>
							<?php endwhile; ?>
							<?php endif; ?>

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
					<div class="subscribe-form">
						<form action="">
							<input class="form-control" type="text" placeholder="email address">
							<input class="submit-btn default-btn" type="submit" value="subscribe">
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>
<?php get_footer(); ?>



