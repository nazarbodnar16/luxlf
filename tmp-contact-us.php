<?php
/*
Template Name: Contact Us
*/
get_header(); ?>
<main>
	<div class="inner-top-baner" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/contact-us-bg.png">
		<div class="container">
			<div class="top-baner-box">
				<div class="info">
					<p>Tap into Carlisle's wealth of experiencey</p>
				</div>
			</div>
		</div>
	</div>
	<div class="contact-us-box">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="info-location">
						<h2>Contact Us</h2>
						<ul class="contact-list">
							<li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/office-telephone.png" alt=""><span  class="phone">+ 352.268.4.53.59</span></a></li>
							<li><a href="mailto:info@cmclux.com"><img src="<?php echo get_template_directory_uri(); ?>/images/email.png" alt=""><span>info@cmclux.com</span></a></li>
							<li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/internet.png" alt=""><span>www.cmclux.com</span></a></li>
						</ul>
					</div>
					<div class="location">
						<h3 class="clr_orange">headquarters</h3>
						<p>36, Rue Ste. Zithe, 2763 Luxembourg</p>
					</div>
				</div>
				<div class="col-md-6">
					<div class="contact-box-form">
						<p>For all fund related enquiries please use the contact form below or email us at: <a class="clr_orange" href="mailto:info@cmclux.com">info@cmclux.com</a></p>
						<div class="contact-form">
							<form action="">
								<input class="form-control" type="text" placeholder="First Name">
								<input class="form-control" type="text" placeholder="LAST Name">
								<input class="form-control" type="text" placeholder="Email">
								<input class="form-control" type="text" placeholder="Telephone">
								<input class="form-control" type="text" placeholder="Type of Inquiry">
								<textarea class="form-control textarea" name="" id="" placeholder="Comments"></textarea>
							</form>
							<span>
								<input type="checkbox" id="test1"  checked="checked" />
								<label for="test1">Request Funds Overview</label>
							</span>
							<div>
								<input type="checkbox" id="test2" />
								<label for="test2">Subscribe to News & Updates</label>
							</div>
							<input class="default-btn submit-btn" type="submit" value="submit">
						</div>
						<p>The personal information we collect is used for the purpose for which it was provided to us. We endeavor to keep your personal information  with appropriate level of security and will keep it on record for as long as we need for legitimate business or legal reasons. We will then delete it safely and securely.</p>
						<p>For more information about how Luxembourg Life Fund site processes your personal data, please view our <a class="clr_orange " href="">privacy statement.</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>

<?php get_footer(); ?>