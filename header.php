<!DOCTYPE HTML>
<html>
<head>
	<title><?php wp_title(''); ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
	<!--[if lt IE 9]> <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script> <![endif]-->
	
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" media="screen, projection" href="<?php bloginfo('stylesheet_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<link rel="shortcut icon" href="<?php bloginfo( 'template_url' ); ?>/images/favicon.ico" type="image/x-icon">
	<link rel="icon" href="<?php bloginfo( 'template_url' ); ?>/images/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" sizes="114x114" href="finura-touch-logo.png" />
	
	<?php wp_head(); ?>
	
	<link href='http://fonts.googleapis.com/css?family=Oswald:300,400' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,300,500,600,700' rel='stylesheet' type='text/css'>
	
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/slicknav/slicknav.css" />
	<script src="<?php bloginfo( 'template_url' ); ?>/slicknav/jquery.slicknav.min.js"></script>
	<script src="<?php bloginfo( 'template_url' ); ?>/scripts/jquery-ui-1.8.13.custom.min.js"></script>
	<link rel="stylesheet" type="text/css" media="screen, projection" href="<?php bloginfo( 'template_url' ); ?>/css/jquery-ui-1.8.13.custom.css" />
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-52812673-1', 'auto');
  ga('require', 'linkid', 'linkid.js');
  ga('send', 'pageview');

</script>
	<script>
		$(document).ready( function() {

			$('.person').hover( function() {
				$(this).find('.name').fadeIn(300);
			}, function() {
				$(this).find('.name').fadeOut(100);
			});
			
			
			$( "#tabs" ).tabs();

		});
	</script>
</head>

<body <?php body_class(); ?>>
	
	<div id="wrap">
		<div id="container" class="group">
			<!--Header - Name of Item Here-->
			<header class="group">
				<h1><a href="<?php bloginfo('url'); ?>/"><img src="<?php print IMAGES; ?>/finura-logo.png" alt="<?php bloginfo('name'); ?>" /></a></h1>
				
				<?php wp_nav_menu( array('menu' => 'Main', 'container' => 'nav' )); ?>
				
			</header>
			
			<!-- End Header -->
			
			<!-- Main Area -->
			<div id="content" class="group">