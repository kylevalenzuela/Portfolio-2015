<?php
	/*
		Template Name: Portfolio Loop
	*/
?>
<?php get_header(); the_post() ?>

<div class="post-wrap cards" >

	

		<ul class="port-cat" class="button">
			<li id="loop-all" class="button">All</li>
			<li id="loop-design" class="button">Design</li>
			<li id="loop-development" class="button">Development</li>
			<li id="loop-illustration" class="button">Illustration</li>
		</ul>

		<div class="porfolio-cat-flex" id="loop-flop">	
		   <?php portfolio_main_loop(); ?>
		   <div class="single-divider"></div>
			<?php get_footer(); ?>
		</div>

</div>

	<div class="loading-overlay">
			<div class="loading-container">
				<div class="dino">1</div>
				<div class="loading-text">Loading...</div>
			</div>
		</div>
		


