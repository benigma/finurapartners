<?php get_header(); ?>


<div id="main" class="group">
	<div id="featured" class="group">
		<h2><?php echo get_field('news_article_title') ?></h2>
		<? get_search_form(); ?>
	</div>
	<div class="page-content">
		<div id="posts" class="group">
		
			<div class="post">
				<?php while ( have_posts() ) : the_post(); ?>
					<?php if ( is_archive() || is_search() ) : // Only display excerpts for archives and search. ?>
						<?php the_excerpt(); ?>
					<?php else : ?>
						<div></div>
						<div id="the_content">
						<h2><?php the_title(); ?></h2>
						<?php the_content(); ?>
						</div>
					<?php endif; ?>
				<?php endwhile; ?>
			</div>
			<?php get_sidebar('service'); ?>
	  
		</div>
	</div>
</div>

<?php get_footer(); ?>