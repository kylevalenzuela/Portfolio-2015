
<?php get_header(); ?>
		<div class="post-wrap cards" >
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
				<div class="entry">
					<?php single_page(); ?>
				</div>
				<?php single_page_meta(); ?>
				<?php get_footer(); ?>

			</div>
		<?php endwhile; endif; ?>
	</div>


