<?php
/*
Template Name: News
*/
get_header(); ?>
<main>
	<div class="news-head">
		<div class="container">
			<h2>Our News</h2>
		</div>
	</div>
	<div class="news-list-box">
		<div class="container">
			<ul class="news-list">
				<li class="news-list--item">
					<a class="clearfix" href="/news-details">
						<span class="news-img bg-img">
							<img src="<?php echo get_template_directory_uri(); ?>/images/item-1.jpg" alt="">
						</span>
						<span class="news-text">
							<h3>Luxembourg Life Fund wins 2018 Investor's Choice Awards - Multi-Strategy Fund - Long Term Performance</h3>
							<span class="text-block">
								<p>This past Tuesday, Carlisle Managment Company, on behalf of the Luxembourg Life Fund, recieved the award for Best Multi-Strategy Fund past Tuesday, Carlisle Managment Company, on behalf of the</p>
							</span>
						</span>
					</a>
				</li>
				<li class="news-list--item">
					<a href="/news-details">
						<span class="news-img bg-img">
							<img src="<?php echo get_template_directory_uri(); ?>/images/item-2.jpg" alt="">
						</span>
						<span class="news-text">
							<h3>CEO Jose Garcia speaks with Finance Monthly about the investment landscape of Luxembourg and the future of Carlisle Management Company.</h3>
							<span class="text-block">
								<p>Recently Carlisle CEO, Jose Garcia was interviewed by Finance Monthly for their “About the Board” section of their monthly publication. According to FM, this section brings “readers the latest insights on the challenges and</p>
							</span>
						</span>
					</a>
				</li>
				<li class="news-list--item">
					<a href="/news-details">
						<span class="news-img bg-img">
							<img src="<?php echo get_template_directory_uri(); ?>/images/item-1.jpg" alt="">
						</span>
						<span class="news-text">
							<h3>Carlisle Featured in 2017 Corporate Livewire Finance Awards</h3>
							<span class="text-block">
								<p>This year Carlisle Management Company SCA was featured as Fund Manager of the Year – Luxembourg in the 2017 Finance Awards. For a copy of the feature please use the link provided.</p>
							</span>
						</span>
					</a>
				</li>
				<li class="news-list--item">
					<a href="/news-details">
						<span class="news-img bg-img">
							<img src="<?php echo get_template_directory_uri(); ?>/images/item-3.jpg" alt="">
						</span>
						<span class="news-text">
							<h3>Luxembourg Life Fund wins Multi-strategy Fund – Long Term Performance award at 2017 Investor’s Choice Awards Gala</h3>
							<span class="text-block">
								<p>Allocator, the data platform for the investment management industry, hosted its Investors Choice Awards 2017 Gala for the EMEA & APAC region in London last week. Among the night’s winners was Carlisle’s own Luxembourg Life...</p>
							</span>
						</span>
					</a>
				</li>
				<li class="news-list--item">
					<a href="/news-details">
						<span class="news-img bg-img">
							<img src="<?php echo get_template_directory_uri(); ?>/images/item-1.jpg" alt="">
						</span>
						<span class="news-text">
							<h3>Carlisle CEO Jose Garcia featured in Feb 2017 Peer Insights Report</h3>
							<span class="text-block">
								<p>Recently Carlisle CEO, Jose Garcia, was interviewed for the February 2017 edition of the Peer Insights Report issued by Family Office Insights. Family Office Insights is a voluntary, “opt-in” collaborative peer-to-peer...</p>
							</span>
						</span>
					</a>
				</li>
			</ul>
			<!-- <a href="#" class="default-btn load-more"><span><i class="fas fa-spinner"></i>load more</span></a> -->
		</div>
	</div>		
</main>

<?php get_footer(); ?>