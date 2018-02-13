<?php get_header(); ?>


<div id="main" class="group">
	<div id="featured" class="group">
		<?php the_field ('header_area', 12); ?>
		<? get_search_form(); ?>
	</div>
	<div class="page-content">
	<div id="posts">
			<!-- <?php the_field( 'downloads', 329 ); ?> -->
			
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		
			<div class="post">
			
					<div class="intro">
						<?php 
							$my_postid = 12;//This is page id or post id
							$content_post = get_post($my_postid);
							$content = $content_post->post_content;
							$content = apply_filters('the_content', $content);
							$content = str_replace(']]>', ']]&gt;', $content);
							echo $content;
						?>
					</div>
				
					<div id="bio" class="group">
						<div class="people-image"><img src="<?php the_field( 'main_image' ); ?>" alt="<?php the_title(); ?>"></div>
						<div class="staff-detail">
							<h3><?php the_title(); ?> <span class="position"><?php the_field ('position'); ?></span></h3>
							
							<?php the_field ('details'); ?>
						</div>
					</div>
				
					<div id="people-thumbs" class="group">
						<?php $the_query = new WP_Query( array('post_type' => 'people', 'orderby' => 'menu_order', 'posts_per_page' => -1, 'order' => 'ASC') ); ?>
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