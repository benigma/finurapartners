<aside class="right-col">
	<ul class="news-list">
			<li>Other News</li>
		<?php
		$currentID = get_the_ID();
		$my_query = new WP_Query( array('cat' => '4', 'showposts' => '3', 'post__not_in' => array($currentID)));
		while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
		    	<li>
		    		<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
		    		<?php the_date('j F Y', '<h5>', '</h5>'); ?>
		    		<p><?php the_excerpt(); ?></p>
		    	</li>
	    	
	    	<?php endwhile; ?>
	    </ul>
</aside>