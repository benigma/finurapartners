<aside class="right-col">
  <?php if ( !function_exists( 'dynamic_sidebar' ) ||
	!dynamic_sidebar('Our Company') ) : ?>
	<div class="widget">
	  <h3>Search</h3>
	  <?php get_search_form(); ?>
	</div>
  <?php endif; ?>
</aside>