<?php
/**
 * sidebar.php
 *
 * The primary sidebar.
 */
?>


<?php if ( is_active_sidebar( 'sidebar-1' ) ) { ?>

	<aside id="sidebar" class="sidebar sidebar-right col-md-4">
		<?php
		if(is_category()){
			$term = null;
			$btn = __('Buscar ');
			if ( is_category() ) { $term = get_queried_object(); }
			?>
			<div id="search-3" class="widget widget_search">
				<div class="search-widget input-group">
					<form method="get" action="<?php echo home_url(); ?>" id="search">
						<input type="text" name="s" class="form-control" placeholder="Buscar" value="">
						<?php
						if ($term) {
							$btn = sprintf( __('Buscar em %s'), $term->name);
							?>
							<input type="hidden" value="<?php echo $term->term_id; ?>" name="cat" />
							<input type="hidden" value="<?php echo $term->name; ?>" name="catname" />
						<?php } ?>
						<span class="search-icon">
							<i class="fa fa-search"></i>
						</span>
					</form>
				</div>
			</div>
			<?php
			dynamic_sidebar('sidebar-category');
		}else if(is_tag()){
			dynamic_sidebar('sidebar-tag');
		}else{
			dynamic_sidebar( 'sidebar-1' );
		}
		?>
	</aside> <!-- end sidebar -->

<?php } ?>



