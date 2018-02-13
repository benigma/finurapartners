<?php
/*
* Template Name: Our Company
*/
?>

<?php get_header(); ?>


<div id="main" class="group">
	<div id="featured" class="group">
		<?php the_field( 'header_area' ); ?>
		<img src="<?php print IMAGES; ?>/fp-company-clients.png" class="clients" />
	</div>
	<div class="page-content">
		<div id="posts" class="group">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		
			<div class="post">
				<div>
					<?php if ( has_post_thumbnail() ) {
						the_post_thumbnail();
					}
					?>
				</div>
				<div id="the_content"><?php the_content('Read More...'); ?></div>
			</div>
			<?php get_sidebar('company'); ?>	
	  
			<?php endwhile; else: ?>
			<p><?php _e('No posts were found. Sorry!'); ?></p>
			<?php endif; ?>
	  
		</div>
		
		<div id="our-company" class="section">
			<div><h4>Centrally <strong>Positioned</strong></h4>
			<p>We're situated just a few minutes walk from St Paul’s Underground station, close to City Thameslink and Blackfriars in the heart of the City.</p>
			<p><a title="Find Us" href="<?php echo site_url(); ?>/contact-us/">Find Us</a></p>
			</div>
		</div>
		
		<div id="main-contact-form" class="contactform">
			<h1>Get in touch</h1>
			<p>Whatever your enquiry, our friendly, professional team is here to help. Please complete the form below and one of our advisors will promptly be in touch. Alternatively, please call us on the phone number below.</p>
			<?php echo do_shortcode('[contact-form-7 id="1233" title="Get in touch"]'); ?>
		</div>
		
	</div>
</div>

<?php get_footer(); ?>