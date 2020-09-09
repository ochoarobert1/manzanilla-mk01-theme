<?php get_header(); ?>
<main class="container-fluid p-0" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
    <div class="row no-gutters">
        <?php $thumbnail = get_template_directory_uri() . '/images/banner_bg.png'; ?>
        <section class="banner-container banner-category col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="background: url(<?php echo $thumbnail; ?>);">
            <div class="container">
                <div class="row">
                    <div class="banner-content col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <h1><?php single_cat_title(); ?></h1>
                    </div>
                </div>
            </div>
        </section>
        <div class="page-container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="container">
                <div class="row">
                    <?php if (have_posts()) : ?>
                    <section class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">
                        <div class="row row-blog">
                            <?php while (have_posts()) : the_post(); ?>
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
                        <div class="pagination col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <?php if(function_exists('wp_paginate')) { wp_paginate(); } else { posts_nav_link(); wp_link_pages(); } ?>
                        </div>
                    </section>
                    <aside class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 d-xl-block d-lg-block d-md-block d-sm-none d-none">
                        <?php get_sidebar(); ?>
                    </aside>
                    <?php else: ?>
                    <section class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">
                        <h2><?php _e('Disculpe, su busqueda no arrojo ningun resultado', 'manzanilla'); ?></h2>
                        <h3><?php _e('Dirígete nuevamente al', 'manzanilla'); ?> <a href="<?php echo home_url('/'); ?>" title="<?php _e('Volver al Inicio', 'manzanilla'); ?>"><?php _e('inicio', 'manzanilla'); ?></a>.</h3>
                    </section>
                    <aside class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 d-xl-block d-lg-block d-md-block d-sm-none d-none">
                        <?php get_sidebar(); ?>
                    </aside>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>
