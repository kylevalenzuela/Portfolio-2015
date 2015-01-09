<?php get_header(); ?>

<div class="blogroll cards">

	
			<?php /* If this is a category archive */ if (is_category()) { ?>
				<h2 class="port-title"><?php single_cat_title(); ?> </h2>

			<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
			<h2 class="port-title"><?php single_cat_title(); ?> </h2>

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
				
				<?php if (in_category('blog') ) : ?>

					<?php archive_blogroll(); ?>

				<?php else : ?>

				<?php archive_portroll(); ?>
				
				<?php endif; ?>

				</div>

		<?php endwhile; ?>
			

		

		
	<div class="single-divider"></div>
	<?php get_footer(); ?>
	</div>	

