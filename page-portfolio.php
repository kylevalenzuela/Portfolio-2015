<?php
	/*
		Template Name: Portfolio Page
	*/

?>

<?php get_header(); the_post(); ?>

<div class="post-wrap cards">

<div class="entry">
	<?php port_page(); ?>
</div>	

	 
 		<div class="single-cat-wrap">
        <?php share_buttons(); ?>
        </div>
		<div class="tags"><div class="icon-tag"></div>
		<?php the_category(' '); ?>
    	</div>
	 	<?php edit_post_link('Edit Bitch!','','.'); ?>


<div class="single-divider"></div>
<?php get_footer(); ?>


