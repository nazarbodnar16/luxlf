<?php get_header(); ?>
	<?php if ( have_posts() ) :  while ( have_posts() ) : the_post(); ?>
<main>
	<div class="team-detail">
		<div class="top-team-detail">
			<div class="container">
				<div class="row">
					<div class="col-md-7 right-block">
						<div class="team-detail-info">
							<h2><?php echo get_the_title(); ?></h2>
							<span class="position"><?php echo get_field('team_member_position'); ?></span>
							<a onclick="printFunction()" href="#" class="print">
								<img src="<?php echo get_template_directory_uri(); ?>/images/printer.png" alt="Print icon">
							</a>
						</div>

					</div>
				</div>
			</div>
		</div>
		<script>
			function printFunction() {
			    window.print();
			}
		</script>
		<div class="bottom-team-detail">
			<div class="container">
				<div class="row">
					<div class="col-md-5">
						<div class="team-person">
							<div class="img bg-img">
								<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title(); ?>">
							</div>
							<strong>
								<a class="default-link no-after" href="#">CMCLUX.COM</a>
							</strong>
							<strong>
								<a class="default-link no-after" href="#">CONTACT</a>
							</strong>
						</div>
					</div>
					<div class="col-md-7">
						<div class="team-person-descr">
							<?php the_content(); ?>
						</div>
					</div>
				</div>
				<?php endwhile; ?>
				<?php endif; ?>
				<a href="/team/" class="default-link back">VIEW ALL TEAM</a>
			</div>
			
		</div>
	</div>
</main>

<?php get_footer(); ?>