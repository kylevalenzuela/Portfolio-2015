<?php
	/*
		Template Name: Portfolio Page
	*/

?>

<?php get_header(); the_post(); ?>

<div class="post-wrap cards">

	<h2 class="port-title"><?php the_title() ?><h2>

<div class="port-entry">

	<?php the_content(); ?>


	<?php 
 echo '<div class="single-cat-wrap">';
        share_buttons();
        echo '</div>';
	echo '<div class="tags"><div class="icon-tag"></div>';
	the_category(' ');
    echo '</div>';
	 edit_post_link('Edit Bitch!','','.');
	 echo '<div class="single-divider"></div>';;
?>

</div>	



<?php get_footer(); ?>

</div>

