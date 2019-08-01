<?php
/**
 * 404.php
 *
 * The template for displaying 404 pages (Not Found).
 */
get_header(); ?>

<section id="main-container" class="main-container">

    <div class="container">
        <div class="row">

            <div class="col-6 text-center align-self-center">
                <div class="error-page text-center">
                    <div class="error-code">
                        <strong><?php esc_html_e('404', 'geobin') ?></strong>
                    </div>
                    <div class="error-message">
                        <h3><?php esc_html_e("Ops! A página que você procura não foi encontrada.", 'geobin') ?></h3>
                    </div>
                    <div class="error-body">
                        <?php esc_html_e('Tente usar nossa caixa de busca para acessá-la.', 'geobin') ?><br>
                        <a href="<?php echo esc_url(home_url()) ?>/blog" class="btn btn-primary solid blank"><i class="fa fa-arrow-circle-left">&nbsp;</i> 
                            <?php esc_html_e('Ir para o Blog', 'geobin') ?></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 text-right">
                <img class="img-fluid" src="<?php echo GEOBIN_IMAGES.'/arte-error-site-esf.png' ?>" alt="<?php esc_attr_e('404 Error', 'geobin'); ?>">
            </div>

        </div>
    </div>
</section> <!-- end main-container -->

    <?php get_footer(); ?>