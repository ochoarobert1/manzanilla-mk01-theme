<?php $thumbnail = get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>
<section class="banner-container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="background: url(<?php echo $thumbnail; ?>);">
    <div class="container">
        <div class="row">
            <div class="banner-content col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <h1><?php the_title(); ?></h1>
            </div>
        </div>
    </div>
</section>
