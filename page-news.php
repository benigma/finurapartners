<?php
/*
* Template Name: Page with News
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
		
			<div class="post">
				<h2><?php the_title(); ?></h2>
				<div></div>
				<div id="the_content">
				<ul class="news">
				
				<?php 
				$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
				
				query_posts('cat=4&posts_per_page=10&paged=' . $paged); 
				
				?>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				   
				   <li>
				   	<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				   	<?php the_date('j F Y', '<h5>', '</h5>'); ?>
				   	<p><?php the_excerpt(); ?></p>
				   </li>
				   
				<?php endwhile; endif; ?>
									
				<?php if (function_exists("pagination")) {
					pagination($additional_loop->max_num_pages);
				} ?>

				<?php wp_reset_query(); ?>
				
				</ul>
				</div>
			</div>
			<?php get_sidebar('newsposts'); ?>
	  
		</div>
	</div>
</div>

<?php get_footer(); ?>