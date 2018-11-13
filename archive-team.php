<?php get_header(); ?>
<main>
	<div class="inner-top-baner" style="background-image: url(<?php echo get_field('team_top_background_image', 'cpt_team'); ?>">
		<div class="container">
			<div class="top-baner-box">
				<div class="info white-bg-padding">
					<p><?php echo get_field('team_page_title', 'cpt_team'); ?></p>
				</div>
			</div>
		</div>
	</div>
	<div class="team-info">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<p><?php echo get_field('team_left_column_description', 'cpt_team'); ?></p>
				</div>
				<div class="col-md-6">
					<div class="team-info-descr">
						<p><?php echo get_field('team_right_column_description', 'cpt_team'); ?></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="team-list">
		<div class="container">
			<div class="row">


<?php 

$posts = get_field('team_member_board', 'cpt_team');

if( $posts ): ?>

    <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
        <?php setup_postdata($post); ?>

        		<div class="col-md-4">
					<a class="team-item" href="<?php the_permalink(); ?>">
						<div class="img bg-img">
							<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title(); ?>">
						</div>
						<span class="descr">
							<span class="name"><?php echo get_the_title(); ?></span>
							<span class="possition"><?php echo get_field('team_member_position'); ?></span>
						</span>
					</a>
				</div>

    <?php endforeach; ?>

    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
<?php endif; ?>











<!-- 				<div class="col-md-4">
					<a class="team-item" href="/team-details">
						<div class="img bg-img">
							<img src="<?php echo get_template_directory_uri(); ?>/images/1.png" alt="">
						</div>
						<span class="descr">
							<span class="name">Jose Garcia</span>
							<span class="possition">Chief Executive Officer</span>
						</span>
					</a>
				</div>
				<div class="col-md-4">
					<a class="team-item" href="/team-details">
						<div class="img bg-img">
							<img src="<?php echo get_template_directory_uri(); ?>/images/2.png" alt="">
						</div>
						<span class="descr">
							<span class="name">Jose Garcia</span>
							<span class="possition">Chief Executive Officer</span>
						</span>
					</a>
				</div>
				<div class="col-md-4">
					<a class="team-item" href="/team-details">
						<div class="img bg-img">
							<img src="<?php echo get_template_directory_uri(); ?>/images/3.png" alt="">
						</div>
						<span class="descr">
							<span class="name">Jose Garcia</span>
							<span class="possition">Chief Executive Officer</span>
						</span>
					</a>
				</div>
				<div class="col-md-4">
					<a class="team-item" href="/team-details">
						<div class="img bg-img">
							<img src="<?php echo get_template_directory_uri(); ?>/images/4.png" alt="">
						</div>
						<span class="descr">
							<span class="name">Jose Garcia</span>
							<span class="possition">Chief Executive Officer</span>
						</span>
					</a>
				</div>
				<div class="col-md-4">
					<a class="team-item" href="/team-details">
						<div class="img bg-img">
							<img src="<?php echo get_template_directory_uri(); ?>/images/5.png" alt="">
						</div>
						<span class="descr">
							<span class="name">Jose Garcia</span>
							<span class="possition">Chief Executive Officer</span>
						</span>
					</a>
				</div>
				<div class="col-md-4">
					<a class="team-item" href="/team-details">
						<div class="img bg-img">
							<img src="<?php echo get_template_directory_uri(); ?>/images/6.png" alt="">
						</div>
						<span class="descr">
							<span class="name">Jose Garcia</span>
							<span class="possition">Chief Executive Officer</span>
						</span>
					</a>
				</div>
				<div class="col-md-4">
					<a class="team-item" href="/team-details">
						<div class="img bg-img">
							<img src="<?php echo get_template_directory_uri(); ?>/images/7.png" alt="">
						</div>
						<span class="descr">
							<span class="name">Jose Garcia</span>
							<span class="possition">Chief Executive Officer</span>
						</span>
					</a>
				</div>
				<div class="col-md-4">
					<a class="team-item" href="/team-details">
						<div class="img bg-img">
							<img src="<?php echo get_template_directory_uri(); ?>/images/8.png" alt="">
						</div>
						<span class="descr">
							<span class="name">Jose Garcia</span>
							<span class="possition">Chief Executive Officer</span>
						</span>
					</a>
				</div>
				<div class="col-md-4">
					<a class="team-item" href="/team-details">
						<div class="img bg-img">
							<img src="<?php echo get_template_directory_uri(); ?>/images/9.png" alt="">
						</div>
						<span class="descr">
							<span class="name">Jose Garcia</span>
							<span class="possition">Chief Executive Officer</span>
						</span>
					</a>
				</div> -->
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