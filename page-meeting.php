<?php
/*
* Template Name: Page with Meeting
*/
?>
<?php
if (!is_user_logged_in()) {
 wp_redirect( 'http://finurapartners.com/');
 exit; 
} ?>
<?php get_header(); ?>


<div id="main" class="group">
	<div id="featured" class="group">
		<?php global $current_user;
		      get_currentuserinfo();
		?>
		<h2>Recording client meetings for <strong><?php echo $current_user->user_firstname.' '.$current_user->user_lastname; ?></strong></h2>
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
			</div>
			<?php get_sidebar('service'); ?>
	  
			<?php endwhile; else: ?>
			<p><?php _e('No posts were found. Sorry!'); ?></p>
			<?php endif; ?>
	  
		</div>
	</div>
</div>

<?php get_footer(); ?>