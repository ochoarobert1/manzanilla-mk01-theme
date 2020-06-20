<?php get_header(); ?>
<main class="container-fluid" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
    <div class="row">
        <header class="title-container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <small><?php _e('Categoría:', 'manzanilla'); ?></small>
            <h1><?php single_cat_title(); ?></h1>
        </header>
        <div class="page-container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="container p-0">
                <div class="row">

                    <?php if (have_posts()) : ?>
                    <section class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-12">
                        
                        <?php $i = 1; ?>
                        <?php while (have_posts()) : the_post(); ?>
                        <article id="post-<?php the_ID(); ?>" class="archive-item col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 <?php echo join(' ', get_post_class()); ?>" role="article">
                            <div class="container p-0">
                                <div class="row">
                                    <?php if ($i%2 == 0) { ?>
                                    <?php get_template_part('templates/archive-item-even'); ?>
                                    <?php } else { ?>
                                    <?php get_template_part('templates/archive-item-odd'); ?>
                                    <?php } ?>
                                    <div class="w-100"></div>
                                </div>
                            </div>
                        </article>
                        <?php $i++; endwhile; ?>
                        <div class="pagination col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <?php if(function_exists('wp_paginate')) { wp_paginate(); } else { posts_nav_link(); wp_link_pages(); } ?>
                        </div>
                    </section>
                    <aside class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 d-xl-block d-lg-block d-md-block d-sm-none d-none">
                        <?php get_sidebar(); ?>
                    </aside>
                    <?php else: ?>
                    <section class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <h2><?php _e('Disculpe, su busqueda no arrojo ningun resultado', 'manzanilla'); ?></h2>
                        <h3><?php _e('Dirígete nuevamente al', 'manzanilla'); ?> <a href="<?php echo home_url('/'); ?>" title="<?php _e('Volver al Inicio', 'manzanilla'); ?>"><?php _e('inicio', 'manzanilla'); ?></a>.</h3>
                    </section>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>
