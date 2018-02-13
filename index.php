<?php get_header(); ?>
<div id="main" class="group">
	<div id="featured" class="group">
		<img src="<?php bloginfo('template_url'); ?>/images/latestnews-featured.jpg" alt="Latest News">
	</div>
	<?php get_sidebar(); ?>
	
	<div id="posts">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		
        <div class="post">
			
			<div class="project-content">
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<?php if ( has_post_thumbnail() ) {
					the_post_thumbnail();
				}  ?>
				<?php the_excerpt(); ?>
				<p><a href="<?php the_permalink(); ?>">Read more...</a></p>
				<!-- <?php the_content('Read More...'); ?> -->
			</div>
					
		</div>
		
		<?php endwhile; else: ?>
		<p><?php _e('No posts were found. Sorry!'); ?></p>
		<?php endif; ?>
      
	</div>
	
</div>

<?php get_footer(); ?>