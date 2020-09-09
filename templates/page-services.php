<?php
/**
* Template Name: Pagina de Servicios
*
* @package manzanilla
* @subpackage manzanilla-mk01-theme
* @since Mk. 1.0
*/
?>
<?php get_header(); ?>
<?php the_post(); ?>
<main class="container-fluid p-0" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
    <div class="row no-gutters">
        <?php echo get_template_part('templates/template-banner-container'); ?>
        <section class="services-container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="container">
                <div class="row">
                    <div class="service-content col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <?php the_content(); ?>
                    </div>

                    <?php $arr_services = get_post_meta(get_the_ID(), 'mcr_services_items_group', true); ?>
                    <?php if (!empty($arr_services)) : ?>
                    <div class="service-items-container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="container">
                            <div class="row row-services">
                                <?php foreach ($arr_services as $item) { ?>
                                <article class="service-item col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                                    <div class="service-item-wrapper">
                                        <picture>
                                            <?php echo wp_get_attachment_image($item['icon_id'], 'thumbnail', array('class' => 'img-fluid')); ?>
                                        </picture>
                                        <h3><?php echo $item['title']; ?></h3>
                                        <?php echo apply_filters('the_content', $item['desc']); ?>
                                    </div>
                                </article>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>

                    <div class="service-content col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <?php echo apply_filters('the_content', get_post_meta(get_the_ID(), 'mcr_services_content_desc', true)); ?>
                        <a href="<?php echo home_url('/contacto'); ?>" class="btn btn-lg btn-orange"><?php _e('¡Contáctame!', 'manzanilla'); ?></a>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>
<?php get_footer(); ?>
