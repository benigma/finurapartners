<?php
/*
* Template Name: Page with Service
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
			</div>
			<?php get_sidebar('service'); ?>
	  
			<?php endwhile; else: ?>
			<p><?php _e('No posts were found. Sorry!'); ?></p>
			<?php endif; ?>
	  
		</div>
	</div>
</div>

<?php get_footer(); ?>