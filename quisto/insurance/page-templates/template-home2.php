<?php
/**
 * Template Name: Home 2
 */

get_header();
 ?>
<!-- subheader begin -->
<div class="no-padding">
	<?php if (have_posts()){ ?>
        <?php while (have_posts()) : the_post()?>
            <?php the_content(); ?>
        <?php endwhile; ?>
	<?php }else {
		echo 'Page Blog Full For Page Builder'; 
	}?>
</div>
<?php get_footer(); ?>