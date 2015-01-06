<?php
	/*
		Template Name: Blog Homepage
	*/
?>

<?php get_header(); ?>

<div class="blogroll cards">
	
	<h1 class="port-title"><?php the_title(); ?></h1>

	<?php blogroll_loop(); ?>
	<div class="single-divider"></div>
	<?php get_footer(); ?>
</div>

