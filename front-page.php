<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link //codex.wordpress.org/Template_Hierarchy
 *
 * @package webshowcase
 */
global $webshowcase;
get_header(); ?>

<main id="main">
	<div class="top-baner">
		<div class="top-baner-img" style="background-image: url(<?php echo get_field('top_background_image'); ?>)"></div>
		<div class="container">
			<div class="top-baner-box">
				<div class="info">
					<!-- <h1 class="h1"><?php echo get_field('top_page_title'); ?></h1> -->
					<h1 class="h1">
						<span><?php echo get_field('top_page_title'); ?></span>
						<span><?php echo get_field('top_page_title_second_row'); ?></span>
					</h1>
					<div class="text-box">
						<p><?php echo get_field('top_page_subtitle'); ?></p>
					</div>
					<a href="<?php echo get_field('top_page_link'); ?>" class="default-link"><?php echo get_field('top_page_link_title'); ?></a>
				</div>
			</div>
		</div>
	</div>
	<div class="success-experience animate">
		<div class="img  animate-img" style="background-image: url(<?php echo get_field('left_side_image'); ?>)">
		</div>
		<div class="container">
			<div class="row">
				<div class="right-block col-md-6">
					<div class="dt">
						<div class="success-experience--info">
							<h2><?php echo get_field('section_title'); ?></h2>
							<p><?php echo get_field('section_description'); ?></p>
							<a href="<?php echo get_field('section_link'); ?>" class="default-link"><?php echo get_field('section_link_title'); ?></a>
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
					<h3><?php echo get_field('left_side_title') ?></h3>
					<div class="table-block">
						<?php $t_heads = get_field('table_headings'); ?>
						<table>
							<tbody>
								<tr style="height: 38px;">
									<th style="height: 38px;"><?php echo $t_heads['company_title']; ?></th>
									<th style="height: 38px;"><?php echo $t_heads['s_p_title']; ?></th>
									<th style="height: 38px;"><?php echo $t_heads['am_best_title']; ?></th>
								</tr>
								<?php
								// check if the repeater field has rows of data
								if( have_rows('table_rows') ): 
								 	// loop through the rows of data
								    while ( have_rows('table_rows') ) : the_row(); ?>
								        
									<tr style="height: 38px;">
										<td style="height: 38px;"><?php the_sub_field('company_name'); ?></td>
										<td style="height: 38px;"><?php the_sub_field('s_p_index'); ?></td>
										<td style="height: 38px;"><?php the_sub_field('am_best_index'); ?></td>
									</tr>

								    <?php endwhile;
								else :
								    // no rows found
								endif;
								?>
							</tbody>
						</table>
					</div>
				</div>
				<div class="col-md-6">
					<h3>Fund Performance Year to Date</h3>
					<div class="pane-content">
						<script language="JavaScript" type="text/javascript" src="//www.thefinancials.com/syndicated/CARLISLE/Thumbnails.js"></script>
						<script language="JavaScript" type="text/javascript" src="//www.theFinancials.com/syndicated/CARLISLE/CARLISLEm_MarketUpdate.js"></script>
						<script language="JavaScript" type="text/javascript">
							document.writeln(CARLISLEm_MarketUpdate('CARLISLE'));
						</script>

					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="performance-line">
		<div class="container">
			<marquee behavior=""  direction="">
				<div id="bottomtickerlayer" style="display: block;">
					<!--START theFinancials.com Content--PANEL WIDGET-->
					<!--copyright theFinancials.com - All Rights Reserved-->
					<!--Get Help by Calling 1.843.886.3635-->
					<!--The Panel Widget adapt to the size of its parent container.  Place the code below in a narrow container for vertical orientation or a wide container for horizontal orientation-->
					<!--Modify the 'tilewidth' parameter in the code below to change the width of the individual tiles-->
					<!--Modify the 'fontsize', 'bgcolor', and 'fontcolor' parameters in the code below to change the appearance of the Panel Widget-->
					<script language="JavaScript" type="text/javascript" src="//www.thefinancials.com/ShowPanel.aspx?pid=CARLISLE&amp;id=2514&amp;tilewidth=175&amp;fontsize=12&amp;bgcolor=000000&amp;fontcolor=FAFAFA&amp;bordercolor=000000&amp;showvalueonrow2=false&amp;numtileswide=10&amp;scrollSpeedFromZeroToTen=5&amp;showchange=true">
					</script>
					<link href="//www.thefinancials.com/s_Styles/Panels.css" rel="stylesheet" type="text/css">
					<link href="//www.thefinancials.com/syndicated/CARLISLE/Styles/Panels.css" rel="stylesheet" type="text/css">
					<link href="//www.thefinancials.com/s_styles/magnific-popup.css" rel="stylesheet" type="text/css">
					<script src="//www.theFinancials.com/s_js/magnific-popup.js"></script>
				</div>
			</marquee>
		</div>
	</div>
	<div class="featured-news">
		<div class="container">
			<div class="row">
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

								<div class="col-md-4">
									<a href="<?php echo get_permalink(); ?>">
										<figure class="item-list">
											<div class="img bg-img"><img src="<?php echo get_the_post_thumbnail_url(); ?>" alt=""></div>
											<figcaption class="item-list--info">
												<div class="text">
													<p><?php echo get_the_title(); ?></p>
												</div>
												<a class="default-link" href="<?php echo get_permalink(); ?>">LEARN MORE</a>
											</figcaption>
										</figure>
									</a>
								</div>

							<?php }
				} else {
					// Nothing was found
				}
				/* Reset query parameters */
				wp_reset_postdata(); ?>

			</div>
		</div>
	</div>		
</main><!-- .site-main --><!-- .content-area -->

<?php get_footer(); ?>


