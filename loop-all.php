<?php 
	define('WP_USE_THEMES', false);
	require_once('../../../wp-load.php');
	portfolio_main_loop();

?>
	<div class="single-divider"></div>
	<?php get_footer(); ?>