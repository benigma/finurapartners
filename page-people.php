<?php
/*
* Template Name: Our People
*/
?>

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
			
					<div class="intro">
						<?php the_content('Read More...'); ?>
					</div>
				
					<div id="people-thumbs" class="group">
						<?php $the_query = new WP_Query( array('post_type' => 'people', 'posts_per_page' => 20, 'orderby' => 'menu_order', 'order' => 'ASC') ); ?>
						<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
							<div class="person">
								<a href="<?php the_permalink(); ?>#bio"><span class="thumbnail"><img src="<?php the_field( 'thumbnail' ); ?>" alt="<?php the_title(); ?>"></span>
								<span class="name"><?php the_title(); ?></span></a>
							</div>
						<?php endwhile;?>
					</div>
			
				
			</div>
	  
			<?php endwhile; else: ?>
			<p><?php _e('No posts were found. Sorry!'); ?></p>
			<?php endif; ?>
	  
		</div>
	</div>
</div>

<?php get_footer(); ?>