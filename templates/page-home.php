<?php
/**
* Template Name: Pagina de Inicio
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
        <section class="the-slider col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <?php $slider_alias = get_post_meta(get_the_ID(), 'mcr_home_hero_slider', true); ?>
            <?php add_revslider($slider_alias); ?>
        </section>
        <?php $arr_boxes = get_post_meta(get_the_ID(), 'mcr_home_boxes_group', true); ?>
        <?php if (!empty($arr_boxes)) { ?>
        <section class="the-boxes col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="container">
                <div class="row row-boxes justify-content-between">
                    <?php foreach ($arr_boxes as $item) { ?>
                    <article class="boxes-item col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                        <div class="boxes-item-wrapper">
                            <img src="<?php echo $item['box_bg']; ?>" alt="<?php echo $item['title']; ?>" class="img-fluid" />
                            <div class="boxes-item-link-wrapper">
                                <a href="<?php echo $item['link']; ?>"><?php echo $item['title']; ?></a>
                            </div>
                        </div>
                    </article>
                    <?php } ?>
                </div>
            </div>
        </section>
        <?php } ?>
        <section class="the-newsletter col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="container">
                <div class="row">
                    <div class="newsletter-container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="row align-items-center">
                            <div class="newsletter-text col-xl-6 col-lg-6 col-md-5 col-sm-12 col-12">
                                <h2>¡Únete a mi Newsletter!</h2>
                                <p>Recibe noticias, recursos y más.</p>
                            </div>
                            <div class="newsletter-form  col-xl-6 col-lg-6 col-md-7 col-sm-12 col-12">
                                <?php echo get_template_part('templates/template-mailchimp-form'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="the-blog col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="container p-0">
                <div class="row no-gutters">
                    <div class="blog-container col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">
                        <?php $arr_posts = new WP_Query(array('post_type' => 'post', 'posts_per_page' => 4, 'order' => 'DESC', 'orderby' => 'date')); ?>
                        <?php if ($arr_posts->have_posts()) : ?>
                        <div class="separator-title-container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <h2><?php _e('Posts Recientes', 'manzanilla'); ?></h2>
                            <hr>
                        </div>
                        <div class="container">
                            <div class="row row-blog">
                                <?php while ($arr_posts->have_posts()) : $arr_posts->the_post(); ?>
                                <article id="post-<?php echo get_the_ID(); ?>" class="blog-entry col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="blog-entry-wrapper">
                                        <picture class="blog-entry-picture">
                                            <a href="<?php the_permalink(); ?>" title="<?php _e('Leer más', 'manzanilla'); ?>">
                                                <?php the_post_thumbnail('blog_img', array('class' => 'img-fluid')); ?>
                                            </a>
                                        </picture>
                                        <header class="blog-entry-header">
                                            <div class="categories">
                                                <?php the_category();  ?>
                                            </div>
                                            <a href="<?php the_permalink(); ?>" title="<?php _e('Leer más', 'manzanilla'); ?>">
                                                <h3><?php the_title(); ?></h3>
                                            </a>
                                        </header>
                                        <div class="blog-entry-excerpt">
                                            <p><?php the_excerpt(); ?></p>
                                        </div>
                                        <footer class="blog-entry-date">
                                            <?php echo get_the_date('F j, Y');?>
                                        </footer>
                                    </div>
                                </article>

                                <?php endwhile; ?>
                            </div>
                        </div>
                        <?php endif; ?>
                        <?php wp_reset_query(); ?>
                    </div>
                    <div class="blog-sidebar col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                        <?php get_sidebar(); ?>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>
<?php get_footer(); ?>
