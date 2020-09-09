<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
    <?php /* MAIN STUFF */ ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo('charset') ?>" />
    <meta name="robots" content="NOODP, INDEX, FOLLOW" />
    <meta name="HandheldFriendly" content="True" />
    <meta name="MobileOptimized" content="320" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="pingback" href="<?php echo esc_url(get_bloginfo('pingback_url')); ?>" />
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="dns-prefetch" href="//facebook.com" crossorigin />
    <link rel="dns-prefetch" href="//connect.facebook.net" crossorigin />
    <link rel="dns-prefetch" href="//ajax.googleapis.com" crossorigin />
    <link rel="dns-prefetch" href="//google-analytics.com" crossorigin />
    <?php /* FAVICONS */ ?>
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon.png" />
    <?php /* THEME NAVBAR COLOR */ ?>
    <meta name="msapplication-TileColor" content="#FF3901" />
    <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/images/win8-tile-icon.png" />
    <meta name="theme-color" content="#FF3901" />
    <?php /* AUTHOR INFORMATION */ ?>
    <meta name="language" content="<?php echo get_bloginfo('language'); ?>" />
    <meta name="author" content="Manzanilla Creativa" />
    <meta name="copyright" content="http://manzanillacreativa.com/" />
    <meta name="geo.position" content="10.333333;-67.033333" />
    <meta name="ICBM" content="10.333333, -67.033333" />
    <meta name="geo.region" content="VE" />
    <meta name="geo.placename" content="Caracas, Venezuela." />
    <meta name="DC.title" content="<?php if (is_home()) { echo get_bloginfo('name') . ' | ' . get_bloginfo('description'); } else { echo get_the_title() . ' | ' . get_bloginfo('name'); } ?>" />
    <?php /* MAIN TITLE - CALL HEADER MAIN FUNCTIONS */ ?>
    <?php wp_title('|', false, 'right'); ?>
    <?php wp_head() ?>
    <?php /* OPEN GRAPHS INFO - COMMENTS SCRIPTS */ ?>
    <?php if ( is_single('post') && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
    <?php /* IE COMPATIBILITIES */ ?>
    <!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7" /><![endif]-->
    <!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8" /><![endif]-->
    <!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9" /><![endif]-->
    <!--[if gt IE 8]><!-->
    <html <?php language_attributes(); ?> class="no-js" />
    <!--<![endif]-->
    <!--[if IE]> <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script> <![endif]-->
    <!--[if IE]> <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script> <![endif]-->
    <!--[if IE]> <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" /> <![endif]-->
</head>

<body class="the-main-body <?php echo join(' ', get_body_class()); ?>" itemscope itemtype="http://schema.org/WebPage">
    <?php wp_body_open(); ?>
    <div id="fb-root"></div>
    <header id="mainHead" class="container-fluid container-header p-0" role="banner" itemscope itemtype="http://schema.org/WPHeader">
        <div class="row no-gutters justify-content-center ">
            <div class="the-header col-xl-11 col-lg-11 col-md-12 col-sm-12 col-12">
                <div class="row align-items-center">
                    <div class="header-logo col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6">
                        <a class="navbar-brand" href="<?php echo home_url('/');?>" title="<?php echo get_bloginfo('name'); ?>">
                            <?php $custom_logo_id = get_theme_mod( 'custom_logo' ); ?>
                            <?php $image = wp_get_attachment_image_src( $custom_logo_id , 'logo' ); ?>
                            <?php if (!empty($image)) { ?>
                            <img src="<?php echo $image[0]; ?>" alt="<?php echo get_bloginfo('name'); ?>" class="img-fluid img-logo" width="<?php echo $image[1]; ?>" height="<?php echo $image[2]; ?>" />
                            <?php } else { ?>
                            Navbar
                            <?php } ?>
                        </a>
                    </div>
                    <div class="header-navbar-container col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 d-xl-block d-lg-block d-md-none d-sm-none d-none">
                        <nav class="navbar navbar-expand-md" role="navigation">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <?php
                                wp_nav_menu( array(
                                    'theme_location'  => 'header_menu',
                                    'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
                                    'container'       => 'div',
                                    'container_class' => 'collapse navbar-collapse',
                                    'container_id'    => 'bs-example-navbar-collapse-1',
                                    'menu_class'      => 'navbar-nav ml-auto mr-auto',
                                    'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                                    'walker'          => new WP_Bootstrap_Navwalker(),
                                ) );
                                ?>
                        </nav>
                    </div>
                    <div class="header-social-container col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6">
                        <div class="header-social-content d-xl-block d-lg-block d-md-block d-sm-block d-none">
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
                        <div class="header-search-container d-xl-block d-lg-block d-md-block d-sm-block d-none">
                            <a href=""><i class="fa fa-search"></i></a>
                        </div>
                        <div class="header-menu-mobile-container d-xl-none d-lg-none d-md-block d-sm-block d-block">
                            <div id="menuBtn" class="menu-btn">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </header>
