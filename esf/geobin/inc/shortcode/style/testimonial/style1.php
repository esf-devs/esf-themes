<?php
    $testimonial_counter = count($testimonials);

    if ($testimonial_counter < 2 ){

    if(!empty($testimonials)):

        foreach($testimonials as $testimonial):

        if($testimonial['image'] != ''){
            $img = xs_resize($testimonial['image']['id'] , 45,44,true);
        }
        $alt = get_post_meta($testimonial['image']['id'], '_wp_attachment_image_alt', true);

        ?>
        <div class="faq-right">
            <div class="tw-testimonial-box">
                <div class="testimonial-bg testimonial-bg-green">
                    <div class="testimonial-icon">
                        <img src="<?php echo esc_url($img); ?>" alt="<?php echo esc_attr($alt); ?>" class="img-fluid">
                    </div>
                </div>
                <!-- End Testimonial bg -->
                <div class="testimonial-meta">
                    <?php if( !empty($testimonial['client_name']) ) : ?>
                        <h4>
                            <?php echo esc_html( $testimonial['client_name'] );
                            if( !empty($testimonial['designation']) ) : ?>
                                <small><?php echo esc_html( $testimonial['designation'] ); ?></small>
                            <?php endif; ?>
                        </h4>
                    <?php endif; ?>
                </div>
                <!-- End Testimonial Meta -->
                <div class="testimonial-text">
                    <?php if( !empty($testimonial['review']) ) : ?>
                        <p><?php echo esc_html( $testimonial['review'] ); ?></p>
                    <?php endif; ?>
                    <i class="icon icon-quote2"></i>
                </div>
                <!-- End testimonial text -->
            </div>
        </div>
        <?php endforeach; ?>
    <?php endif; ?>
    <?php } else {
?>


<div class="testimonial-wrapper align-items-center justify-content-center">
    <div class="col-md-6">
        <div class="tw-testimonial-carousel owl-carousel">

            <?php if(!empty($testimonials)):

                foreach($testimonials as $testimonial):

            if($testimonial['image'] != ''){
                $img = xs_resize($testimonial['image']['id'] , 45,44,true);
            }

            $alt = get_post_meta($testimonial['image']['id'], '_wp_attachment_image_alt', true);

            ?>

            <div class="tw-testimonial-wrapper">
                <div class="testimonial-bg testimonial-bg-orange">
                    <div class="testimonial-icon">
                        <img src="<?php echo esc_url($img); ?>" alt="<?php echo esc_attr($alt); ?>" class="img-fluid">
                    </div>
                </div>
                <!-- End Testimonial bg -->
                <div class="testimonial-text">
                    <?php if( !empty($testimonial['review']) ) : ?>
                    <p><?php echo esc_html( $testimonial['review'] ); ?></p>
                    <?php endif; ?>
                    <div class="testimonial-meta">
                        <?php if( !empty($testimonial['client_name']) ) : ?>
                        <h4>
                            <?php echo esc_html( $testimonial['client_name'] );
                            if( !empty($testimonial['designation']) ) : ?>
                            <small><?php echo esc_html( $testimonial['designation'] ); ?></small>
                            <?php endif; ?>
                        </h4>
                        <?php endif; ?>
                        <i class="icon icon-quote2"></i>
                    </div>
                    <!-- End Testimonial Meta -->
                </div>
                <!-- End testimonial text -->
            </div>
                <?php endforeach; ?>
            <?php endif; ?>
            <!-- End Tw testimonial wrapper -->
        </div>
    </div>
</div>
<?php } ?>