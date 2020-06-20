<?php $defaultatts = array('class' => 'img-fluid', 'itemprop' => 'image'); ?>
<div class="archive-item-wrapper col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">
    <picture>
        <?php if ( has_post_thumbnail()) : ?>
        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
            <?php the_post_thumbnail('full', $defaultatts); ?>
        </a>
        <?php else : ?>
        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
            <img itemprop="image" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/no-img.jpg" alt="No img" class="img-fluid" />
        </a>
        <?php endif; ?>
    </picture>
</div>
<div class="archive-item-info-container">
       <header>
        <div class="archive-item-category-container">
            <ul>
                <?php $category = get_the_category(); ?>
                <?php if (!empty($category)) : ?>
                <?php foreach ($category as $item) { ?>
                <li>
                    <a href="<?php echo get_category_link($item); ?>"><?php echo $item->name; ?></a>
                </li>
                <?php } ?>
                <?php endif; ?>
            </ul>
        </div>
        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
            <h2 rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></h2>
        </a>
        <time class="date" datetime="<?php echo get_the_time('Y-m-d') ?>" itemprop="datePublished"><?php the_time('d-m-Y'); ?></time>
        <span class="author" itemprop="author" itemscope itemptype="http://schema.org/Person"><?php _e('Publicado por:', 'manzanilla'); ?> <?php the_author_posts_link(); ?></span>
    </header>
</div>
