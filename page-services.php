<?php
/*
* Template Name: Services Page Template
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
		
			<div class="container"><h2 class="lines">Financial Services</h2></div>
			<p class="intro">We offer a multi-disciplinary and forward-thinking financial planning service to individuals, organisations and trustees. Explore below to see the calibre of client and companies we work with, our services and what makes us different.</p>
			
			<?php if ( have_posts() ) { /* Query and display the parent. */
			 while ( have_posts() ) {
			 the_post();
			 $thispage=$post->ID;
			 }
			} ?>
			
			<ul class="services">
			
			<?php $childpages = query_posts('post_per_page=-1&orderby=menu_order&order=asc&post_type=page&post_parent='.$thispage);
			 if($childpages){ /* display the children content */
			 	foreach ($childpages as $post) :
			 	setup_postdata($post); ?>
			 		<li><a href="<?php the_permalink(); ?>">
			 			<p><?php $serviceimage = get_field('page_icon');
			 				echo '<img src="'.$serviceimage['url'].'" />'; ?></p>
			 			<h3><?php the_title(); ?></h3>
			 			<p><?php the_excerpt(); ?></p></a>
			 		</li>
			 <?php
			 	endforeach;
			 } ?>
			 
			 </ul>
	  		<div style="clear: both;"></div>
	  		
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
	</div>
</div>

<?php get_footer(); ?>