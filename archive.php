<?php get_header(); ?>

<div class="blogroll cards">

		<?php if (in_category(18) ) : ?>
	
			<?php /* If this is a category archive */ if (is_category()) { ?>
				<h2 class="port-title"><?php single_cat_title(); ?> Category</h2>

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
			
				<div <?php post_class(); ?>>

					<?php archive_blogroll(); ?>

				</div>

		<?php endwhile; ?>
			
	<?php else : ?>

		<h2 class="port-title"><?php single_cat_title(); ?> Category</h2>
		<?php while (have_posts() ) : the_post() ; ?>
			<?php archive_portroll(); ?>
		<?php endwhile; ?>
	<?php endif; ?>
		
	<div class="single-divider"></div>
	<?php get_footer(); ?>
	</div>	

