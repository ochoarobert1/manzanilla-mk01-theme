<?php
/**
* Template Name: Pagina de Quienes Somos
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
        <section class="quote-container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="container">
                <div class="row">
                    <div class="quote-content col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <?php echo apply_filters('the_content', get_post_meta(get_the_ID(), 'mcr_about_quote1_desc', true)); ?>
                        <h5><?php echo get_post_meta(get_the_ID(), 'mcr_about_quote1_author', true); ?></h5>
                    </div>
                </div>
            </div>
        </section>

        <section class="about-container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="container p-0">
                <div class="row">
                    <div class="about-content col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 order-xl-1 order-lg-1 order-md-6 order-sm-6 order-6">
                        <?php the_content(); ?>
                    </div>
                    <div class="about-image col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 order-xl-6 order-lg-6 order-md-1 order-sm-1 order-1">
                        <?php the_post_thumbnail('full', array('class' => 'img-fluid')); ?>
                    </div>
                    <div class="about-content col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 order-xl-12 order-lg-12 order-md-12 order-sm-12 order-12">
                        <?php echo apply_filters('the_content', get_post_meta(get_the_ID(), 'mcr_about_content_desc', true)); ?>
                    </div>
                </div>
            </div>
        </section>

        <section class="quote-container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="container">
                <div class="row">
                    <div class="quote-content col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <?php echo apply_filters('the_content', get_post_meta(get_the_ID(), 'mcr_about_quote2_desc', true)); ?>
                        <h5><?php echo get_post_meta(get_the_ID(), 'mcr_about_quote2_author', true); ?></h5>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>
<?php get_footer(); ?>
