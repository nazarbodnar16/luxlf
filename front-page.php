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
global $webshowcase;
get_header(); ?>

<main id="main">
	<div class="top-baner bg-img">
		<img src="<?php echo get_template_directory_uri(); ?>/images/top-baner.jpg" alt="">
		<div class="container">
			<div class="top-baner-box">
				<div class="info">
					<h1 class="h1">Setting Ourself Apart Through Performance & Determination</h1>
					<div class="text-box">
						<p>Providing investors with solutions in increasingly challenging markets.</p>
					</div>
					<a href="#" class="default-link">LEARN MORE About our Funds</a>
				</div>
			</div>
		</div>
	</div>
	<div class="success-experience">
		<div class="img bg-img">
			<img src="<?php echo get_template_directory_uri(); ?>/images/success-img-before.png" alt="">
		</div>
		<div class="container">
			<div class="row">
				<div class="right-block col-md-6">
					<div class="dt">
						<div class="success-experience--info">
							<h2>Success Through Experience</h2>
							<p>Carlisle is a leading, alternative assets investment manager. Our team applies its deep experience and specialized expertise. Carlisle contributes a unique set of attributes that aid in discovering high value and high growth alternative investments that have limited correlation to both traditional and non-traditional asset classes. On top of it, our unique fund management solutions provide a set of institutional investors including pension funds, family offices, endowments, banks and governmental organizations with tailor-made investment structures. We focus on delivering best value, integrity, transparency and responsiveness. </p>
							<a href="/team" class="default-link">LEARN ABOUT OUR TEAM</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="performance">
		<div class="bg-img">
			<img src="<?php echo get_template_directory_uri(); ?>/images/p-bg.png" alt="">
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<h3>Life Insurance Carrier Ratings</h3>
					<div class="img">
						<img src="<?php echo get_template_directory_uri(); ?>/images/table-1.png" alt="">
					</div>
				</div>
				<div class="col-md-6">
					<h3>Fund Performance Year to Date</h3>
					<div class="img">
						<img src="<?php echo get_template_directory_uri(); ?>/images/table-2.png" alt="">
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="performance-line">
		<div class="container">
			<div class="img">
				<img src="<?php echo get_template_directory_uri(); ?>/images/table-3.jpg" alt="">
			</div>
		</div>
	</div>
	<div class="featured-news">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<a href="/news-details">
						<figure class="item-list">
							<div class="img bg-img"><img src="<?php echo get_template_directory_uri(); ?>/images/item-1.jpg" alt=""></div>
							<figcaption class="item-list--info">
								<div class="text">
									<p>Luxembourg Life Fund honored with 2018 Investors Choice Award</p>
								</div>
								<a class="default-link" href="/news-details">LEARN MORE</a>
							</figcaption>
						</figure>
					</a>
				</div>
				<div class="col-md-4">
					<a href="/news-details">
						<figure class="item-list">
							<div class="img bg-img"><img src="<?php echo get_template_directory_uri(); ?>/images/item-2.jpg" alt=""></div>
							<figcaption class="item-list--info">
								<div class="text">
									<p>Luxembourg's Carlisle Management Successfully Concludes Large Scale Life Settlements Sale</p>
								</div>
								<a class="default-link" href="/news-details">LEARN MORE</a>
							</figcaption>
						</figure>
					</a>
				</div>
				<div class="col-md-4">
					<a href="/news-details">
						<figure class="item-list">
							<div class="img bg-img"><img src="<?php echo get_template_directory_uri(); ?>/images/item-3.jpg" alt=""></div>
							<figcaption class="item-list--info">
								<div class="text">
									<p>Luxembourg Life Fund honored with 2018 Investors Choice Award</p>
								</div>
								<a class="default-link" href="/news-details">LEARN MORE</a>
							</figcaption>
						</figure>
					</a>
				</div>
			</div>
		</div>
	</div>		
</main><!-- .site-main --><!-- .content-area -->

<?php get_footer(); ?>


