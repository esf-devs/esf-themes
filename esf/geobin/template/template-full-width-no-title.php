<?php
/**
 * template-full-width-no-title.php
 *
 * Template Name: Full Width Page No Title
 * Template Post Type: service, projects, page
 */

?>


<?php get_header(); ?>
<div class="blog" role="main">
	<?php
		get_template_part( 'template-parts/header/content', 'page-header-no-title' );
	?>
    <div class="builder-content">
		<?php while ( have_posts() ) : the_post(); ?>
				<!-- full-width-content -->
				<div id="post-<?php the_ID(); ?>" <?php post_class('full-width-content');?>>
					<?php the_content(); ?>

				</div> <!-- end full-width-content -->
		<?php endwhile; ?>
    </div> <!-- end main-content -->

</div> <!-- end main-content -->
<?php get_footer(); ?>