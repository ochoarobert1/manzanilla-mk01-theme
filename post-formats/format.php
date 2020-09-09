<?php /* POST FORMAT - DEFAULT */ ?>
<?php $defaultargs = array('class' => 'img-fluid', 'itemprop' => 'image'); ?>
<?php $current_id = get_the_ID(); ?>
<article id="post-<?php the_ID(); ?>" class="the-single col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12 <?php echo join(' ', get_post_class()); ?>" itemscope itemtype="http://schema.org/Article">
    <header>
        <div class="single-categories">
            <?php the_category(' '); ?>
        </div>
        <h1 itemprop="name"><?php the_title(); ?></h1>
        <div class="date"><span class="date-wrapper"><?php the_time('F j, Y'); ?></span></div>
    </header>
    <?php if ( has_post_thumbnail()) : ?>
    <picture>
        <?php the_post_thumbnail('full', $defaultargs); ?>
    </picture>
    <?php endif; ?>
    <div class="single-share">
        <div class="single-share-author">
            <div class="single-share-author-wrapper">
                <?php echo get_avatar(get_the_author_meta( 'ID' ), 35); ?>
                <div class="author-wrapper">
                    <small>Escrito por:</small>
                    <h5><?php the_author(); ?></h5>
                </div>
            </div>
        </div>
        <?php echo custom_share_buttons(); ?>
    </div>
    <div class="post-content" itemprop="articleBody">
        <?php the_content() ?>
        <footer class="tag-container">
            <?php the_tags( '', ' ', ''); // Separated by commas with a line break at the end ?>
        </footer>
        <meta itemprop="datePublished" datetime="<?php echo get_the_time('Y-m-d') ?>" content="<?php echo get_the_date('i') ?>">
        <meta itemprop="author" content="<?php echo esc_attr(get_the_author()) ?>">
        <meta itemprop="url" content="<?php the_permalink() ?>">
    </div><!-- .post-content -->
    <div class="full-size-share">
        <hr>
        <?php echo custom_share_buttons(); ?>
    </div>

    <div class="author-box-container">
        <?php $author_id = get_the_author_meta( 'ID' ); ?>
        <div class="author-picture">
            <?php echo get_avatar($author_id, 100); ?>
        </div>
        <div class="author-wrapper">
            <small>Escrito por:</small>
            <h5><?php the_author(); ?></h5>
            <?php $desc = get_the_author_meta('user_description', $author_id); ?>
            <?php if ($desc != '') { ?>
            <?php echo apply_filters('the_content', $desc); ?>
            <?php } else { ?>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem laudantium et totam fugiat itaque. Obcaecati.</p>
            <?php } ?>
        </div>
        <div class="author-social">
            <?php $social_options = get_option('mcr_social_settings'); ?>
            <?php if ((isset($social_options['facebook'])) && ($social_options['facebook'] != '')) { ?>
            <a href="<?php echo $social_options['facebook']; ?>" title="<?php _e('Haz clic aquí para visitar nuestro perfil', 'manzanilla'); ?>" target="_blank"><i class="fa fa-facebook"></i></a>
            <?php } ?>

            <?php if ((isset($social_options['twitter'])) && ($social_options['twitter'] != '')) { ?>
            <a href="<?php echo $social_options['twitter']; ?>" title="<?php _e('Haz clic aquí para visitar nuestro perfil', 'manzanilla'); ?>" target="_blank"><i class="fa fa-twitter"></i></a>
            <?php } ?>

            <?php if ((isset($social_options['instagram'])) && ($social_options['instagram'] != '')) { ?>
            <a href="<?php echo $social_options['instagram']; ?>" title="<?php _e('Haz clic aquí para visitar nuestro perfil', 'manzanilla'); ?>" target="_blank"><i class="fa fa-instagram"></i></a>
            <?php } ?>

            <?php if ((isset($social_options['pinterest'])) && ($social_options['pinterest'] != '')) { ?>
            <a href="<?php echo $social_options['pinterest']; ?>" title="<?php _e('Haz clic aquí para visitar nuestro perfil', 'manzanilla'); ?>" target="_blank"><i class="fa fa-pinterest"></i></a>
            <?php } ?>

            <?php if ((isset($social_options['linkedin'])) && ($social_options['linkedin'] != '')) { ?>
            <a href="<?php echo $social_options['linkedin']; ?>" title="<?php _e('Haz clic aquí para visitar nuestro perfil', 'manzanilla'); ?>" target="_blank"><i class="fa fa-linkedin"></i></a>
            <?php } ?>

            <?php if ((isset($social_options['youtube'])) && ($social_options['youtube'] != '')) { ?>
            <a href="<?php echo $social_options['youtube']; ?>" title="<?php _e('Haz clic aquí para visitar nuestro perfil', 'manzanilla'); ?>" target="_blank"><i class="fa fa-youtube-play"></i></a>
            <?php } ?>
        </div>
    </div>
    <?php $related_posts = new WP_Query(array('post_type' => 'post', 'posts_per_page' => 3, 'post__not_in' => array($current_id))); ?>
    <?php if ($related_posts->have_posts()) : ?>
    <div class="related-container">
        <div class="related-title">
            <hr>
            <h2><?php _e('Leer Más', 'manzanilla'); ?></h2>
        </div>
        <div class="container">
            <div class="row">
                <?php while ($related_posts->have_posts()) : $related_posts->the_post(); ?>
                <div class="related-item col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                    <div class="related-item-picture-wrapper">
                        <?php the_post_thumbnail('large', array('class' => 'img-fluid')); ?>
                        <div class="related-item-wrapper">
                            <h2><?php the_title(); ?></h2>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
    <?php endif; ?>
    <?php wp_reset_query(); ?>

    <?php if ( comments_open() ) { comments_template(); } ?>
    <div class="posts-navigation">
        <?php posts_nav_link( ' ', 'previous page', 'next page' ); ?>
    </div>
</article> <?php // end article ?>
