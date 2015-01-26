<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<title><?php wp_title( '|', true, 'right' ); bloginfo('name');?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	
	<link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="60x60" href="/apple-touch-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="120x120" href="/apple-touch-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="76x76" href="/apple-touch-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="152x152" href="/apple-touch-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon-180x180.png">
	<meta name="apple-mobile-web-app-title" content="Kyle Valenzuela">
	<link rel="icon" type="image/png" href="/favicon-192x192.png" sizes="192x192">
	<link rel="icon" type="image/png" href="/favicon-160x160.png" sizes="160x160">
	<link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96">
	<link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
	<link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
	<meta name="msapplication-TileColor" content="#00a300">
	<meta name="msapplication-TileImage" content="/mstile-144x144.png">
	<?php echo '<link rel="stylesheet" type="text/css" href="' . get_bloginfo('template_directory') . '/style.css">'; ?>
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<?php if (is_search()) { ?>
	   <meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>
	<?php wp_head(); ?>
</head>

<body>
	<?php 
		wp_nav_menu(array(
				'menu'=>'Main Nav Menu',
				'link_before'    => '
					<div class="icon-font"></div><span>
					',
				'link_after' => '</span>',
				'container' => 'div',
				'container_class' => 'mobile-menu',
				'container_id' => 'hamburger',
				'items_wrap' => '<div class="header-logo-mobile"></div><ul>%3$s</ul>'
		)); 
	?>		
	<div class="hamburger-container">
	<div class="overlay"></div>	
	<div class="micronav">
		<div class="name-micronav">
			<a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a>
		</div>
		<a href="#" class="hb-wrap"><?php include('icons/hamburger.svg'); ?></a>
	</div>
<nav>

	<a href="<?php echo get_option('home'); ?>/"><div class="header-logo"></div></a>
	<div class="name-header"><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></div>
		
	
			<?php 
			wp_nav_menu(array(
					'menu'=>'Main Nav Menu',
					'link_before'    => '
						<div class="icon-font"></div><span>
						',
					'link_after' => '
						</span>
						',
					'items_wrap' => '
					<ul class="main-nav">%3$s</ul>
					'
			)); ?>
</nav>

<div class="page-wrap">	

