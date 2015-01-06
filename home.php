<?php get_header(); the_post();?>


			<div class="porfolio-cat-flex">	
				
				<?php 
			 	global $query_string;


				$posts = query_posts($query_string . "posts_per_page=9&post_type=page");

				while (have_posts()) : the_post();?>
				
					<a href="<?php the_permalink(); ?>"><div class="portfolio-item ">

						<?php echo "<img src='". get_post_meta($post->ID, "portfolio_thumbnail", true) . "'/>"; ?>

						<span><h3><?php  the_title() ?></h3><?php echo "<h5>" . get_post_meta($post->ID, 'portfolio_categories', true) . "</h5>"; ?></span>

					</div></a>
				<?php endwhile; wp_reset_query(); ?>

			</div>

			


<?php get_footer(); ?>

