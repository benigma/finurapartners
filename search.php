<?php get_header(); ?>


<div id="main" class="group">
	<div id="featured" class="group">
		<h2><strong>FINURA PARTNERS</strong> IS A FULL SERVICE FINANCIAL PLANNING COMPANY WITH CLIENT SERVICE AT ITS CORE</h2>
		<? get_search_form(); ?>
	</div>
	<div class="page-content">
		<div id="posts" class="group">
		
			<div class="post">
				<div></div>
				<div id="the_content">
				<h2>Search Results</h2>
				<ul class="news">
					<?php if ( have_posts() ) : ?>
					        <p>We have found <? echo $total_results = $wp_query->found_posts; ?> item(s) for your search <strong>"<? echo $_GET['s']; ?>"</strong>.</p>
					        <br /><br />
							<?php while ( have_posts() ) : the_post(); ?>                        
					            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					            <!-- <span class="date">Posted on: <?php the_modified_date(); ?></span><br /> -->
					            <?php the_excerpt(20); ?>
					            <hr />
							<?php endwhile; ?>
									
				<?php else : ?>
					<p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'twentyeleven' ); ?></p>
				<?php endif; ?>
				<?php if (function_exists("pagination")) {
						pagination($additional_loop->max_num_pages);
						} ?>
				<?php wp_reset_query(); ?>
				</ul>
				</div>
			</div>
			<?php get_sidebar('service'); ?>
	  
		</div>
	</div>
</div>

<?php get_footer(); ?>