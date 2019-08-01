<?php
/**
 * The template for displaying the footer
 */
 global $insurance_option; 
?>
<?php if($insurance_option['top-footer']!=false){ ?>
	<?php if (class_exists('newsletter')) { ?>
		<div class="tp-newsletter">
		  <div class="container">
			<div class="row">
			    <div class="col-md-5 news-title">
					<?php if($insurance_option['newsletter']!= false){ ?><h2><i class="fa fa-envelope-o"></i><?php echo esc_attr($insurance_option['newsletter']); ?></h2><?php } ?>
			    </div>			  
			    <div class="col-md-7 newsletter">
				<?php echo do_shortcode('[newsletter_form button_label="submit" class="peace-newsletter"]
					[newsletter_field name="email" label="" placeholder="E-mail Address"]
					[/newsletter_form]'); ?>
				</div>	  
			</div>
		  </div>
		</div>
	<?php } ?>
<?php } ?>

<div id="tp-footer" class="tp-footer">
  <div class="container">
    <div class="row">
      <?php get_sidebar('footer') ?>
    </div>
  </div>
</div>

<div class="tp-tiny-footer"><!-- Tiny footer -->
  <div class="container">
    <div class="row">
      <div class="col-md-6 copyright-text"><!-- copyright text --> 
		<?php echo wp_kses( $insurance_option['footer_text'], wp_kses_allowed_html('post') ); ?>
      </div>
      <!-- /.copyright text -->
      <div class="col-md-6 tiny-ft-links"><!-- tiny ft links -->
        <?php
              $menufooter = array(
               'theme_location'  => 'menufooter',
               'menu'            => '',
               'container'       => '',
               'container_class' => '',
               'container_id'    => '',
               'menu_class'      => '',
               'menu_id'         => '',
               'echo'            => true,
               'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
               'walker'          => new wp_bootstrap_navwalker(),
               'before'          => '',
               'after'           => '',
               'link_before'     => '',
               'link_after'      => '',
               'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
               'depth'           => 0,
              );
              if ( has_nav_menu( 'menufooter' ) ) {
               wp_nav_menu( $menufooter );
              }
              ?>
      </div>
      <!-- /.tiny ft links --> 
    </div>
  </div>
</div>
<a id="back-to-top" href="#" class="show"></a>
<?php wp_footer(); ?>