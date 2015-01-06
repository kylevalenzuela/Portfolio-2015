<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<title><?php is_home() ? bloginfo('description') : wp_title(''); ?> | <?php bloginfo('name'); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<?php if (is_search()) { ?>
	   <meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>
	<script>
		var nlform = new NLForm( document.getElementById( 'nl-form' ) );
	</script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
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
		<?php include('icons/hamburger.svg'); ?>
	</div>
<nav>

	<a href="<?php echo get_option('home'); ?>/"><div class="header-logo"></div></a>
	<div class="name"><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></div>
		
	
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

