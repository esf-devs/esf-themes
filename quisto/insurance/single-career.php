
<?php
 global $insurance_option;
get_header();
?>
 
<div class="tp-page-header"><!-- full page header -->
  <div class="container">
    <div class="row">
      <div class="col-md-7">
        <div class="page-header"> <!-- page header  -->
          <h1><?php _e('Career Details Page','insurance') ?></h1>
          <?php 
          $career_sub = get_post_meta(get_the_ID(),'_cmb_career_sub', true); 
          ?>
          <p class="lead"><?php echo esc_attr($career_sub); ?></p>
          
        </div>
        <!-- page header  --> 
      </div>
      <div class="col-md-5 header-pic">
        <div class="img-responsive">
           <?php if( function_exists( 'rwmb_meta' ) ) { ?>
            <?php $images = rwmb_meta( '_cmb_image_career', "type=image" ); ?>
            <?php if($images){ ?>         
            <?php                                                        
            foreach ( $images as $image ) {                              
            ?>
            <?php $img = $image['full_url']; ?>
            <img src="<?php echo esc_url($img); ?>" alt="" class="img-responsive">
            <?php } ?>           
            <?php } ?>  
            <?php } ?>
      </div>
      </div>
      <!-- page header pic --> 
    </div>
  </div>
</div>

<div class="tp-breadcrumb">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
          <?php insurance_breadcrumbs(); ?>
      </div>
    </div>
  </div>
</div>
<div class="main-container" id="main-container">
	<?php while (have_posts()) : the_post()?>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<?php 
						$location = get_post_meta(get_the_ID(),'_cmb_location', true);
						$btntext = get_post_meta(get_the_ID(),'_cmb_btntext', true);
						$btnlink = get_post_meta(get_the_ID(),'_cmb_btnlink', true);
					?>
					<div class="career-title"><!-- career title -->
						<div class="grey-box"><!-- greay box -->
							<div class="caption"> 
								<h1><?php the_title(); ?></h1>
								<p class="job-info">
									<span class="job-category"><strong><?php _e('Job Category: ','insurance') ?></strong>
										<?php 
										$terms = get_the_terms($post->ID, 'category_career' );
										if ($terms && ! is_wp_error($terms)) :
											$term_slugs_arr = array();
											$term_name_arr = array();
											foreach ($terms as $term) {
												$term_slugs_arr[] = $term->slug;
												$term_name_arr[] = $term->name;
												$term_link = get_term_link( $term );
												// If there was an error, continue to the next term.
												if ( is_wp_error( $term_link ) ) {
													continue;
												}
												// We successfully got a link. Print it out.
												echo '<a href="' . esc_url( $term_link ) . '">' . $term->name . '</a>';
											}
											//$terms_slug_str = join( " ", $term_slugs_arr);
											//$term_name_arr = join( " ", $term_name_arr);
										endif;
										//echo $term_name_arr; ?>
									</span> 
									<span class="job-location"><strong><?php _e('Location: ','insurance') ?></strong><?php echo htmlspecialchars_decode($location); ?></span>
								</p>
							</div> 
							<div class="caption-btn"><?php if($btntext != '') { ?><a href="<?php echo esc_url($btnlink); ?>" class="btn tp-btn tp-btn-orange pull-right"><?php echo htmlspecialchars_decode($btntext); ?></a><?php } ?></div>
						</div><!-- /.greay box -->
					</div>	
				</div>
			</div>
		</div>
		<?php the_content(); ?>
  <?php endwhile; ?>
</div>
<?php get_footer(); ?>
 