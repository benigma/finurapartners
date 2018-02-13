<aside class="right-col">
	<?php 
		global $wp_query;
		$id = $wp_query->post->ID;
		$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		query_posts('cat=5&posts_per_page=3&&exclude='. $id .'&paged=' . $paged); 
	?>
	    <ul class="news-list">
	    	<li>Other News</li>
	    
	    	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	    	<li>
	    		<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
	    		<?php the_date('j F Y', '<h5>', '</h5>'); ?>
	    		<p><?php the_excerpt(); ?></p>
	    	</li>
	    	
	    	<?php endwhile; endif; ?>
	    </ul>
</aside>