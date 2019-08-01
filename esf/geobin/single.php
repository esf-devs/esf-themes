<?php
/**
 * single.php
 *
 * The template for displaying single posts.
 */
$display_settings = array();
if ( defined( 'FW' ) ) {
	$display_settings = fw_get_db_settings_option( 'blog_display_settings' );
}

get_header();
?>

<style>
	.wp-block-image>figure>figcaption, figure.wp-block-image>figcaption{
		color: #333 !important;
		font-size: 14px !important;
		margin-top: -8px !important;
		margin-bottom: -20px !important;
	}
</style>
<div id="main-container" class="main-container blog" role="main">

	<div class="sections">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-sm-12">
					<?php
/**
 * Blog Header
 *
 */
$bg_image				 = $heading				 = $global_blog_breadcrumb	 = '';
$banner_cls ='';
if ( defined( 'FW' ) ) {

	///Global optipn
	$page_global_image		 = fw_get_db_customizer_option( 'global_header_image' );
	$global_heading_title	 = fw_get_db_customizer_option( 'global_blog_title' );

	$global_blog_breadcrumb = fw_get_db_customizer_option( 'global_blog_breadcrumb' );


	$id				 = (is_single()) ? $post->ID : get_option( 'page_for_posts' );
	//blog signgle  settings 
	$heading_title	 = fw_get_db_post_option( $id, 'header_title' );

	$header_image = fw_get_db_post_option( $id, 'header_image' );

	$heading = $heading_title != '' ? $heading_title : $global_heading_title;
	$heading = $heading != '' ? $heading:get_the_title();
	if ( $header_image == '' ) {
		$bg_image = $page_global_image != '' ? 'style="background: url(' . $page_global_image[ 'url' ] . ')"' : '';
	} else {
		$bg_image = $header_image != '' ? 'style="background: url(' . $header_image[ 'url' ] . ')"' : '';
	}

	$header_style		 = fw_get_db_customizer_option( 'geobin_header' );
	$header_styles	 = fw_akg( 'menu_style', $header_style );
	if($header_styles== 'menu-9'){
		$banner_cls = "pt-90";
	}
}
?>
<style type="text/css">
	.breadcrumb li, .breadcrumb li a,.breadcrumb li:last-child:before{
		color: #000 !important;
	}	

</style>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'post-content post-single' ); ?>>
	<!-- Article header -->
	<header class="entry-header clearfix">
		<h1 class="entry-title title-single">
			<?php the_title(); ?>
		</h1>
	</header>
	<!-- header end -->
	<?php
	while ( have_posts() ) : the_post();

		get_template_part( 'template-parts/content', 'single' );

		geobin_post_nav();

		if ( defined( 'FW' ) ) {
			if ( $display_settings[ 'post_comment' ] != 'no' ) :
				comments_template();
			endif;
		}else {
			comments_template();
		}

	endwhile;
	?>
</div> <!-- end main-content -->
</article>
<?php get_sidebar(); ?>
</div>
</div>
</div>
</div> <!-- end main-content -->
<?php get_footer(); ?>