<footer class="container-fluid p-0" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">
    <div class="row no-gutters">
        <section class="the-instagram col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="container">
                <div class="row">
                    <div class="instagram-container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <?php $social_options = get_option('mcr_social_settings'); ?>
                        <h5><?php _e('Sígueme en Instagram', 'manzanilla'); ?></h5>
                        <p><?php _e('Para más tips, consejos y más'); ?></p>
                        <a href="<?php echo $social_options['instagram']; ?>" class="instagram-title">
                            <i class="fa fa-instagram"></i> <span>MANZANILLACREATIVA</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section class="instagram-shortcode col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <?php echo do_shortcode('[instagram-feed]'); ?>
        </section>
        <div class="the-footer col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="the-footer-wrapper col-xl-11 col-lg-11 col-md-12 col-sm-12 col-12">
                        <div class="row row-footer">
                            <?php if ( is_active_sidebar( 'sidebar_footer' ) ) : ?>
                            <article class="footer-item col-xl-4 col-lg-4 col-md col-sm-12 col-12">
                                <ul id="sidebar-footer1" class="footer-sidebar">
                                    <?php dynamic_sidebar( 'sidebar_footer' ); ?>
                                </ul>
                            </article>
                            <?php endif; ?>
                            <?php if ( is_active_sidebar( 'sidebar_footer-2' ) ) : ?>
                            <article class="footer-item col-xl-4 col-lg-4 col-md col-sm-12 col-12">
                                <ul id="sidebar-footer2" class="footer-sidebar">
                                    <?php dynamic_sidebar( 'sidebar_footer-2' ); ?>
                                </ul>
                            </article>
                            <?php endif; ?>
                            <?php if ( is_active_sidebar( 'sidebar_footer-3' ) ) : ?>
                            <article class="footer-item col-xl-4 col-lg-4 col-md col-sm-12 col-12">
                                <ul id="sidebar-footer3" class="footer-sidebar">
                                    <?php dynamic_sidebar( 'sidebar_footer-3' ); ?>
                                </ul>
                            </article>
                            <?php endif; ?>
                            <div class="w-100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer() ?>
</body>

</html>
