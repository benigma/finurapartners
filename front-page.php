<?php get_header(); ?>


<div id="main" class="group">

	<div id="featured" class="group">
		<?php the_field( 'header_area' ); ?>
		<? get_search_form(); ?>
	</div>
	
	<div class="page-content">
		<div id="posts">
			<div class="introduction">
				<p>Welcome to Finura Partners, a modern financial planning and  services company with client service and communication at its heart.</p>
				<p>Our vision is to be the most highly referred name in UK financial services, delivering exceptional client service and advice from inception to conclusion.</p>
			</div>
			
			<div class="container"><h2 class="lines">how we can help</h2></div>
			<p class="intro">We offer a multi-disciplinary and forward-thinking financial planning service to individuals, organisations and trustees. Explore below to see the calibre of client and companies we work with, our services and what makes us different.</p>
			
			<ul class="help">
				<li><a href="/our-services/">
					<p><img src="<?php print IMAGES; ?>/services-icon.png" /></p>
					<h3>Our Services</h3>
					<p>Each client’s situation is unique; we are confident we shall understand yours. Finura Partners will establish your financial objectives, review your current position and provide a comprehensive and efficient plan to help achieve your aims.</p></a>
				</li>
				<li><a href="our-people">
					<p><img src="<?php print IMAGES; ?>/team-icon.png" /></p>
					<h3>Our Team</h3>
					<p>In order to break from the industry mould and to deliver outstanding client services, we have evolved to a team based culture where you can expect the same knowledge, process and outcome from anyone within the Finura Partners team.</p></a>
				</li>
				<li><a href="news">
					<p><img src="<?php print IMAGES; ?>/news-icon.png" /></p>
					<h3>News &amp; Insights</h3>
					<p>We believe that outstanding service, regular personal contact and access to relevant information is key to achieving the best outcome for our clients.</p></a>
				</li>
			</ul>
			
			<div class="container"><h2 class="lines">What sets us apart</h2></div>
			<p class="intro">Our clients are those of Finura and not the individual adviser. We provide clients with direct access to our specialist advisers and our client support team, so that you can get the information you need, when you need it, by the most qualified person.</p>
			
			<ul class="apart">
				<li><a href="/our-financial-services-company/">
					<p><img src="<?php print IMAGES; ?>/graph.png" /></p>
					<h3>Working with the best &amp; brightest clients</h3>
					<p>We are proud to partner with leaders at some of the world’s largest and most respected organisations, an achievement we believe reflects the professionalism of our services and the strength of our proposition.</p></a>
				</li>
				<li><a href="/our-financial-services-company/">
					<p><img src="<?php print IMAGES; ?>/clock.png" /></p>
					<h3>A dedicated team</h3>
					<p>Finura Partners has evolved to a culture where we share our knowledge, experience and processes throughout our entire team. This ensures everyone at Finura Partners is capable of assisting any client in furthering their financial and lifestyle goals.</p></a>
				</li>
				<li><a href="/our-financial-services-company/">
					<p><img src="<?php print IMAGES; ?>/creative.png" /></p>
					<h3>Creative thinking</h3>
					<p>We do not believe in generic solutions and endeavour to use our deep understanding of our client’s individual circumstances to create strategies that sit comfortably with your short, mid and long -term plans and that work across generations.</p></a>
				</li>
			</ul>
	  		<div style="clear: both;"></div>
		</div>
		<div id="our-company" class="section">
			<div><?php the_field( 'our_company' ); ?></div>
		</div>
	</div>
</div>

<?php get_footer(); ?>