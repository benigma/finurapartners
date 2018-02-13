<?php
/*
* Template Name: News Page Template
*/
?>

<?php get_header(); ?>


<div id="main" class="group">
	<div id="featured" class="group">
		<?php the_field( 'header_area' ); ?>
		<? get_search_form(); ?>
	</div>
	<div class="page-content">
		<div id="posts" class="group">
		
			<div class="container"><h2 class="lines">Latest News</h2></div>
			<p class="intro">We believe that outstanding service, regular personal contact and access to relevant information is key to achieving the best outcome for our clients.</p>
			
			<ul class="apart">
				<li><a href="/news/news-and-insights/">
					<p><img src="<?php print IMAGES; ?>/news-icon.png" /></p>
					<h3>News &amp; Insights</h3>
					<p>Our blog is updated regularly with timely, relevant news articles and industry insights covering all areas of financial planning. View the latest articles here.</p></a>
				</li>
				<li><a href="/news/points-of-view/">
					<p><img src="<?php print IMAGES; ?>/pov-icon.png" /></p>
					<h3>Points of View</h3>
					<p>Points of View is our monthly overview of key industry news stories and both UK and Overseas market activity. Download the latest Points of View here.</p></a>
				</li>
				<li><a href="/news/quarterly-reports/">
					<p><img src="<?php print IMAGES; ?>/quarterly-icon.png" /></p>
					<h3>Quarterly Reports</h3>
					<p>Our quarterly recap reports provide a succinct review of the three previous month’s activity across UK and global financial markets. Download the latest Quarterly Recap here.</p></a>
				</li>
			</ul>
		<div style="clear: both;"></div>	  
		</div>
	</div>
</div>

<?php get_footer(); ?>