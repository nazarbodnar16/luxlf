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
		<img src="" alt="">
		<div class="container">
			<div class="top-baner-box">
				<h1 class="h1">Setting Ourself Apart Through Performance & Determination</h1>
				<div class="text-box">
					<p>Providing investors with solutions in increasingly challenging markets.</p>
				</div>
				<a href="#" class="default-link">LEARN MORE About our Funds</a>
			</div>
		</div>
	</div>
</main><!-- .site-main --><!-- .content-area -->

<?php get_footer(); ?>


