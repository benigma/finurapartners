<?php get_header(); ?>


<div id="main" class="group">
	<div id="featured" class="group">
		<?php the_field( 'header_area' ); ?>
		<? get_search_form(); ?>
	</div>
	<div class="page-content">
	<div id="posts">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		
			<div class="post">
				<?php the_content('Read More...'); ?>
			</div>
	  
			<?php endwhile; else: ?>
			<p><?php _e('No posts were found. Sorry!'); ?></p>
			<?php endif; ?>
	  
		</div>
	</div>
</div>

<?php get_footer(); ?>