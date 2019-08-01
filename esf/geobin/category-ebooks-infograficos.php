<?php
/**
 * category-ebooks-infograficos.php
 *
 * The template for displaying category pages.
 */

get_header(); 

get_template_part('template-parts/header/content', 'blog-header')?>


<section id="main-container" class="blog main-container" role="main">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <?php if (have_posts()) : ?>
                    <header class="xs-page-header">
                        <h2>
                            <?php
                            printf(esc_html__('Categorias %s', 'geobin'), single_cat_title('', false));
                            ?>
                        </h2>

                        <?php
                        // Show an optional category description.
                        if (category_description()) {
                            echo '<p>' . category_description() . '</p>';
                        }
                        ?>
                    </header>

                    <div class="elementor-widget-container">
                        <div class="elementor-posts-container elementor-posts elementor-grid elementor-posts--skin-cards elementor-has-item-ratio">
                            <?php while (have_posts()) : the_post(); ?>
                                <article class="elementor-post elementor-grid-item post-<?php the_ID(); ?> post type-post status-publish format-standard has-post-thumbnail hentry category-empreendedorismo category-entretenimento category-mercado tag-brasil tag-brinquedos tag-dinheiro tag-empreendedor tag-empreendedorismo tag-franqueado tag-franquia tag-franquia-entreterimento tag-investimento tag-lucro tag-ri-happy tag-sucesso tag-suporte">
                                    <div class="elementor-post__card">
                                        <a class="elementor-post__thumbnail__link" href="<?php the_permalink(); ?>">
                                            <div class="elementor-post__thumbnail elementor-fit-height">
                                                <img width="300" height="190" src="<?php echo get_the_post_thumbnail_url(); ?>" class="attachment-medium size-medium" alt="" srcset="<?php echo get_the_post_thumbnail_url(); ?> 300w, <?php echo get_the_post_thumbnail_url(); ?> 724w" sizes="(max-width: 300px) 100vw, 300px">
                                            </div>
                                        </a>
                                        <div class="elementor-post__text">
                                            <h3 class="elementor-post__title">
                                                <a href="<?php the_permalink(); ?>">
                                                    <?php the_title(); ?>        
                                                </a>
                                            </h3>
                                            <div class="elementor-post__excerpt">
                                            </div>
                                            <a class="elementor-post__read-more" href="<?php the_permalink(); ?>">
                                                Baixar E-book »         
                                            </a>
                                        </div>
                                    </div>
                                </article>
                            <?php endwhile; ?>
                        </div>
                    </div>

                    <?php geobin_paging_nav(); ?>
                    <?php else : ?>
                        <?php get_template_part('template-parts/post/content', 'none'); ?>
                    <?php endif; ?>
                </div> <!-- end main-content -->

                <?php get_sidebar(); ?>
            </div>
        </div> 
    </section> 
    <?php get_footer(); ?>