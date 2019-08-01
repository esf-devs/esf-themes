<?php
/**
 * content-none.php
 */
?>

<div class="not-found">
    <h1 class="nadaEncontrado"><?php esc_html_e('Esse conteúdo não foi encontrado =(', 'geobin'); ?></h1>
    <p><?php esc_html_e('Tente usar nossa busca para encontrá-lo.','geobin')?></p>
    <div class="search-forms paginaBusca"> <?php get_search_form(); ?></div>
</div> <!-- end not-found -->