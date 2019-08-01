<?php
/**
 * header.php
 *
 * The header for the theme.
 */
?>
<!DOCTYPE html>
<!--[if !IE]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->

    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?> data-spy="scroll" data-target="#header">

		<div class="body-inner">
			<?php get_template_part( 'template-parts/navigation/content', 'nav' );
			
// fw_print(fw_get_db_customizer_option( 'menu_bg_color' ));

			



