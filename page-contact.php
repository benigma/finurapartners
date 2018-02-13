<?php
/*
* Template Name: Contact Us
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
		
			<div class="container"><h2 class="lines">get in touch</h2></div>
			<p class="intro">Finura Partners help clients, whether they are private, legal or corporate, with regular, lump sum and ad hoc trustee savings and investment planning.</p>
			
			<div class="map-area">
				<iframe width='100%' height='500px' frameBorder='0' src='https://a.tiles.mapbox.com/v4/benigma.nn8p3hd4/attribution,zoompan,zoomwheel,geocoder,share.html?access_token=pk.eyJ1IjoiYmVuaWdtYSIsImEiOiJlZjg4YmJiNmMyYTlkMjQ0MzlmYTA1YjYwYTRmN2NiYiJ9.nz1A1vJJVSXY5GgKNqQrTw'></iframe>
				
				<p><img src="<?php print IMAGES; ?>/address-icon.png" /></p>
				<p>FINURA PARTNERS LIMITED<br />
				Level 2, Juxon House<br />
				100 St Paul’s Churchyard<br />
				London, EC4M 8BU</p>
				
				<p><img src="<?php print IMAGES; ?>/contact-icon.png" /></p>
				<p><a href="mailto:enquiries@finurapartners.com">enquiries@finurapartners.com</a><br />
				+44 (0) 20 3102 7730</p>
			</div>
			
			<div id="small-contact-form" class="contact-form">
			<h1>How can we help you?</h1>
			<p>Whatever your enquiry, our friendly, professional team is here to help. Please complete the form below and one of our advisors will promptly be in touch. Alternatively, please call us on the phone number below.</p>
			
			<?php echo do_shortcode('[contact-form-7 id="1249" title="Contact Us"]'); ?>
			<p>Finura Partners maintain the highest standards in protecting clients personal data and information. Discover more information on our <a href="http://www.finurapartners.com/policies/data-protection/">Data Protection policy</a>.</p>
			</div>
	  
	  	<div class="container"><h2 class="lines">Latest News</h2></div>
	  	<p class="intro">We are helping to redefine the financial services industry by providing clients with direct access to our entire team of financial service professionals and back office, so that you, the client, can get the information you need, whenever you need it most.</p>
	  	
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