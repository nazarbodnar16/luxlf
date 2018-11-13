<?php get_header(); ?>
<main>
	<?php if ( have_posts() ) : ?>
	<div class="news-head">
		<div class="container">
			<h2><?php printf( __( 'Tagged: %s'), single_tag_title('',false)); ?></h2>
		</div>
	</div>
	<div class="news-list-box">
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
</main>
<?php get_footer(); ?>



