<?php
/*
* Template Name: Page with Test
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
				<div id="the_content"><?php the_content('Read More...'); ?></div>
				<ul class="news">
					<?
						$args = array( 'numberposts' => -1, 'order' => 'desc', 'category' => 4);
						$rand_posts = get_posts( $args );
						foreach( $rand_posts as $post ) : 
					?>
					<li>
						<a href="<?php the_permalink(); ?>">
						<?php the_post_thumbnail(); ?>
						<h3 class="title"><?php the_title(); ?></h3></a>
						<span class="description"><?php the_excerpt(); ?></span>
					</li>
					<div style="clear: both;"></div>
					<?php endforeach; ?>
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