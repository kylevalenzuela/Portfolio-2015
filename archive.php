<?php get_header(); ?>

<div class="blogroll cards">

	
			<?php /* If this is a category archive */ if (is_category()) { ?>
				<h2 class="port-title"><?php single_cat_title(); ?> </h2>

			<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
			<h2 class="port-title"><?php single_cat_title(); ?> </h2>

			<?php /* If this is a tag archive */ } elseif (is_tag()) { ?>
			<h2 class="port-title"><?php single_tag_title(); ?> </h2>

			<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
				<h2>Archive for <?php the_time('F jS, Y'); ?></h2>

			<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
				<h2>Archive for <?php the_time('F, Y'); ?></h2>

			<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
				<h2 class="pagetitle">Archive for <?php the_time('Y'); ?></h2>

			<?php /* If this is an author archive */ } elseif (is_author()) { ?>
				<h2 class="pagetitle">Author Archive</h2>

			<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
				<h2 class="pagetitle">Blog Archives</h2>
			<?php } ?>

			
		<?php while (have_posts() ) : the_post() ; ?>
			
				<div <?php post_class(); ?> >
				
					<?php $categories = get_the_category(); ?>

					<?php if ($categories[0]->cat_ID == 13 || $categories[0]->cat_ID == 14 || $categories[0]->cat_ID == 15 || $categories[0]->cat_ID == 16): ?>
					
					<?php archive_portroll(); ?>
											
				<?php else : ?>
						<?php archive_blogroll(); ?>

				
				<?php endif; ?>

				</div>

		<?php endwhile; ?>
			

		

		
	<div class="single-divider"></div>
	<?php get_footer(); ?>
	</div>	

