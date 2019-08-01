<?php
/**
 * sidebar.php
 *
 * The primary sidebar.
 */
?>

<aside id="sidebar" class="sidebar sidebar-left col-md-4">
	<?php
	var_dump(is_category());
	if(is_category()){
		dynamic_sidebar('sidebar-category');
	}else if(is_tag()){
		dynamic_sidebar('sidebar-tag');
	}else{
		dynamic_sidebar( 'sidebar-1' );
	}
	?>
</aside> <!-- end sidebar -->

