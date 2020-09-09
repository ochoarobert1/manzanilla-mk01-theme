<?php
/**
* Template Name: Pagina de Contacto
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
        <section class="contact-container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="container">
                <div class="row">
                    <div class="contact-content col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <?php the_content(); ?>
                    </div>
                    <div class="contact-content-image col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 d-xl-block d-lg-block d-md-block d-sm-none d-none">
                        <?php $bg_banner_id = get_post_meta(get_the_ID(), 'mcr_contact_image_form_id', true); ?>
                        <?php $bg_banner = wp_get_attachment_image_src($bg_banner_id, 'full', false); ?>
                        <img itemprop="logo" content="<?php echo $bg_banner[0];?>" src="<?php echo $bg_banner[0];?>" title="<?php echo get_post_meta( $bg_banner_id, '_wp_attachment_image_alt', true ); ?>" alt="<?php echo get_post_meta($bg_banner_id, '_wp_attachment_image_alt', true ); ?>" class="img-fluid" width="<?php echo $bg_banner[1]; ?>" height="<?php echo $bg_banner[2]; ?>" />
                    </div>
                    <div class="contact-form-container col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        <?php echo apply_filters('the_content', get_post_meta(get_the_ID(), 'mcr_contact_form_desc', true)); ?>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>
<?php get_footer(); ?>
