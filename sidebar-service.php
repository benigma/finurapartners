<aside class="right-col">
	<?php 
		global $wp_query;
		$id = $wp_query->post->ID;
		$args = array(
		'depth'        => 1,
		'child_of'     => 10,
		'exclude'      => $id,
		'title_li'     => __(''),
		'echo'         => 0,
		'sort_column'  => 'menu_order, post_title');
		$sub_pages = wp_list_pages($args);?>
		<?php if ($sub_pages <> "" ){?>
	    <ul class="service-list">
	    	<li>Professional Services</li>
	    	<?php echo $sub_pages; ?>
	    </ul>
	<?php }?>
</aside>