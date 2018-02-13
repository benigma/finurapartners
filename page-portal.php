<?php
/*
* Template Name: Portal
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
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		
			<div class="post">
				<h2><?php the_title(); ?></h2>
				<div>
					<?php if ( has_post_thumbnail() ) {
						the_post_thumbnail();
					}
					?>
				</div>
				<div id="the_content"><?php the_content('Read More...'); ?></div>
				
				<ul class="portal">
					<li><a href="https://finurapartners.parmenion.co.uk/Pages/SecurityArea/login.aspx" target="_blank"><img src="http://www.finurapartners.com/wp-content/uploads/2015/07/parmenion-portal.png" alt="Parmenion Portal" title="Parmenion Portal" border="0" /></a></li>
					
					<li><a href="https://my.aegon.co.uk/Login/index.htm" target="_blank"><img src="http://www.finurapartners.com/wp-content/uploads/2015/07/aegon-portal.png" alt="Aegon Portal" title="Aegon Portal" border="0" /></a></li>
					
					<li><a href="https://customer.oldmutualwealth.co.uk/Authentication" target="_blank"><img src="http://www.finurapartners.com/wp-content/uploads/2015/07/oldmutual-portal.png" alt="Old Mutual International Portal" title="Old Mutual International Portal" border="0" /></a></li>
					
					<li><a href="http://www.sanlam-ip.co.uk/sip" target="_blank"><img src="http://www.finurapartners.com/wp-content/uploads/2015/07/sanlam-portal.png" alt="Sanlam Portal" title="Sanlam Portal" border="0" /></a></li>
					
					<li><a href="https://www.jameshay.co.uk/portal/login.aspx" target="_blank"><img src="http://www.finurapartners.com/wp-content/uploads/2015/07/jameshay-portal.png" alt="James Hay Partnership Portal" title="James Hay Partnership Portal" border="0" /></a></li>
					
					
					<li><a href="https://www.pointonyorkportal.co.uk/portal/FramesH.aspx" target="_blank"><img src="http://www.finurapartners.com/wp-content/uploads/2015/07/pointon-portal.png" alt="Pointon York Portal" title="Pointon York Portal" border="0" /></a></li>
					
					<li><a href="http://hornbuckle.co.uk/clients/current-clients/" target="_blank"><img src="http://www.finurapartners.com/wp-content/uploads/2015/07/hornbuckle-portal.png" alt="Hornbuckle Portal" title="Hornbuckle Portal" border="0" /></a></li>
					
					<li><a href="https://www.axa-iom.co.im/" target="_blank"><img src="http://www.finurapartners.com/wp-content/uploads/2015/07/axa-portal.png" alt="AXA Portal" title="AXA Portal" border="0" /></a></li>
					
					<li><a href="http://www.scottishwidows.co.uk/global/log_in_or_register.html" target="_blank"><img src="http://www.finurapartners.com/wp-content/uploads/2015/07/scottishwidows-portal.png" alt="Scottish Widows Portal" title="Scottish Widows Portal" border="0" /></a></li>
					
					<li><a href="http://www.royallondon.com/customers/pensions-investments/int/my-pensions/" target="_blank"><img src="http://www.finurapartners.com/wp-content/uploads/2015/07/scottishlife-portal.png" alt="Scottish Life Portal" title="Scottish Life Portal" border="0" /></a></li>
					
					<li><a href="https://www.standardlifewrap.com/" target="_blank"><img src="http://www.finurapartners.com/wp-content/uploads/2015/07/standardlife-portal.png" alt="Standard Life Portal" title="Standard Life Portal" border="0" /></a></li>
					
					<li><a href="http://www.royallondon.com/customers/pensions-investments/int/my-pensions/" target="_blank"><img src="http://www.finurapartners.com/wp-content/uploads/2015/07/royallondon-portal.png" alt="Royal London Portal" title="Royal London Portal" border="0" /></a></li>
					
					<li><a href="https://www.nucleusfinancial.net/wrap/public/" target="_blank"><img src="http://www.finurapartners.com/wp-content/uploads/2015/07/nucleus-portal.png" alt="Nucleus Portal" title="Nucleus Portal" border="0" /></a></li>
					
				</ul>
				
			</div>
			<?php get_sidebar('service'); ?>
	  
			<?php endwhile; else: ?>
			<p><?php _e('No posts were found. Sorry!'); ?></p>
			<?php endif; ?>
	  
		</div>
	</div>
</div>

<?php get_footer(); ?>