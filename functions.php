<?php
    define( 'TEMPPATH', get_bloginfo('stylesheet_directory'));
	define( 'IMAGES', TEMPPATH. "/images");
	
	add_theme_support('nav-menus');
	if ( function_exists('register_nav_menus')) {
		register_nav_menus(
			array(
				'main' => 'Main Nav'
			)
		);
	}
	
	add_theme_support('post-thumbnails');

	add_action( 'init', 'my_add_excerpts_to_pages' );
	function my_add_excerpts_to_pages() {
     add_post_type_support( 'page', 'excerpt' );
	}
	
	add_filter( 'wp_title', 'baw_hack_wp_title_for_home' );
	function baw_hack_wp_title_for_home( $title )
	{
	  if( empty( $title ) && ( is_home() || is_front_page() ) ) {
		return get_bloginfo( 'description' );
	  }
	  return $title;
	}
	
	if ( function_exists( 'register_sidebar' ) ) {
      register_sidebar( array (
        'name' => __( 'Primary Sidebar', 'primary-sidebar' ),
        'id' => 'primary-widget-area',
        'description' => __( 'The primary widget area', 'dir' ),
        'before_widget' => '<div class="widget">',
        'after_widget' => "</div>",
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
      ) );
	}
	
	if ( function_exists( 'register_sidebar' ) ) {
      register_sidebar( array (
        'name' => __( 'Our Company', 'company-sidebar' ),
        'id' => 'company-widget-area',
        'description' => __( 'Our Company sidebar', 'dir' ),
        'before_widget' => '<div class="widget">',
        'after_widget' => "</div>",
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
      ) );
	}
	
	if ( function_exists( 'register_sidebar' ) ) {
      register_sidebar( array (
        'name' => __( 'Contact', 'contact-sidebar' ),
        'id' => 'contact-widget-area',
        'description' => __( 'Contact Us sidebar', 'dir' ),
        'before_widget' => '<div class="widget">',
        'after_widget' => "</div>",
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
      ) );
	}
	
	if ( function_exists( 'register_sidebar' ) ) {
	  register_sidebar( array (
	    'name' => __( 'Service', 'service-sidebar' ),
	    'id' => 'service-widget-area',
	    'description' => __( 'Services sidebar', 'dir' ),
	    'before_widget' => '<div class="widget">',
	    'after_widget' => "</div>",
	    'before_title' => '<h3 class="widget-title">',
	    'after_title' => '</h3>',
	  ) );
	}
	
	if ( function_exists( 'register_sidebar' ) ) {
	  register_sidebar( array (
	    'name' => __( 'News', 'news-sidebar' ),
	    'id' => 'news-widget-area',
	    'description' => __( 'News sidebar', 'dir' ),
	    'before_widget' => '<div class="widget">',
	    'after_widget' => "</div>",
	    'before_title' => '<h3 class="widget-title">',
	    'after_title' => '</h3>',
	  ) );
	}
	if ( function_exists( 'register_sidebar' ) ) {
	  register_sidebar( array (
	    'name' => __( 'Single Articles', 'singlearticle-sidebar' ),
	    'id' => 'singlearticle-widget-area',
	    'description' => __( 'The posts sidebar area', 'dir' ),
	    'before_widget' => '<div class="widget">',
	    'after_widget' => "</div>",
	    'before_title' => '<h3 class="widget-title">',
	    'after_title' => '</h3>',
	  ) );
	}
	
	function the_breadcrumb() {
		global $post;
		echo '<ul id="breadcrumbs" class="group">';
		if (!is_home()) {
			echo '<li><a href="';
			echo get_option('home');
			echo '">';
			echo 'Home';
			echo '</a></li><li class="separator"> &gt; </li>';
			if (is_category() || is_single()) {
				echo '<li>';
				the_category(' </li><li class="separator"> &gt; </li><li> ');
				if (is_single()) {
					echo '</li><li class="separator"> &gt; </li><li>';
					the_title();
					echo '</li>';
				}
			} elseif (is_page()) {
				if($post->post_parent){
					$anc = get_post_ancestors( $post->ID );
					$title = get_the_title();
					foreach ( $anc as $ancestor ) {
						$output = '<li><a href="'.get_permalink($ancestor).'" title="'.get_the_title($ancestor).'">'.get_the_title($ancestor).'</a></li> <li class="separator">&gt;</li>';
					}
					echo $output;
					echo '<strong title="'.$title.'"> '.$title.'</strong>';
				} else {
					echo '<li><strong> '.get_the_title().'</strong></li>';
				}
			}
		}
		elseif (is_tag()) {single_tag_title();}
		elseif (is_day()) {echo"<li>Archive for "; the_time('F jS, Y'); echo'</li>';}
		elseif (is_month()) {echo"<li>Archive for "; the_time('F, Y'); echo'</li>';}
		elseif (is_year()) {echo"<li>Archive for "; the_time('Y'); echo'</li>';}
		elseif (is_author()) {echo"<li>Author Archive"; echo'</li>';}
		elseif (isset($_GET['paged']) && !empty($_GET['paged'])) {echo "<li>Blog Archives"; echo'</li>';}
		elseif (is_search()) {echo"<li>Search Results"; echo'</li>';}
		echo '</ul>';
	}

	function pagination($pages = '', $range = 4) {
     $showitems = ($range * 2)+1;  
 
     global $paged;
     if(empty($paged)) $paged = 1;
 
     if($pages == '') {
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages) {
             $pages = 1;
         }
     }   
 
     if(1 != $pages) {
         echo "<div class=\"pagination\"><span>Page ".$paged." of ".$pages."</span>";
         if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo; First</a>";
         if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo; Previous</a>";
 
         for ($i=1; $i <= $pages; $i++) {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems )) {
                 echo ($paged == $i)? "<span class=\"current\">".$i."</span>":"<a href='".get_pagenum_link($i)."' class=\"inactive\">".$i."</a>";
             }
         }
 
         if ($paged < $pages && $showitems < $pages) echo "<a href=\"".get_pagenum_link($paged + 1)."\">Next &rsaquo;</a>";
         if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>Last &raquo;</a>";
         echo "</div>\n";
     }
}

// custom admin login logo
function custom_login_logo() {
	echo '<style type="text/css">
	h1 a { background-image: url('.get_bloginfo('template_directory').'/images/custom-login-logo.png) !important; }
	</style>';
}
add_action('login_head', 'custom_login_logo');

add_filter( 'login_headerurl', 'custom_loginlogo_url' );
function custom_loginlogo_url($url) {
	return 'http://www.finurapartners.com';
}
function mb_login_title() { return get_option( 'blogname' ); }
add_filter( 'login_headertitle', 'mb_login_title' );

?>