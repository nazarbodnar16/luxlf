<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package webshowcase
 */

get_header(); ?>
<h1>index php</h1>
<main>
	<div class="news-detail">
		<div class="text-container">
<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>

			<h1><?php echo get_the_title(); ?></h1>
			<span class="date"><?php echo get_the_date('j F, Y') ?></span>
			<div class="img bg-img">
				<img src="<?php echo get_template_directory_uri(); ?>/images/news-detail.jpg" alt="">
			</div>
			<div class="row">
				<div class="col-md-9">
					<?php the_content(); ?>
				</div>
				<div class="col-md-3">
					<div class="tag-box">
						<h2>TAGS</h2>
						<?php the_tags( '<ul class="tag-list"><li class="tag-list--item">', '</li><li class="tag-list--item">', '</li></ul>' ); ?>
					</div>
				</div>
			</div>

<?php endwhile; ?>
<?php endif; ?>
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


<?php get_footer(); ?>

</main><!-- .site-main --><!-- .content-area -->

<?php get_footer(); ?>


