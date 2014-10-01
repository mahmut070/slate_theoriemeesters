<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
  <head prefix="og: http://ogp.me/ns/website#"><!-- Prefix is used to declare facebook opengraph namespace for websites -->
    <!-- Charset -->
    <meta charset="<?php bloginfo( 'charset' ); ?>" />

    <!-- IE: render in highest mode available -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Title -->
    <title><?php wp_title( '|', true, 'right' ); ?><?php echo get_bloginfo( 'name' ); ?></title>

    <!-- Mobile devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Automate reverse linking (pingbacks) -->
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <!-- Favicons -->
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon.ico">
    <link rel="apple-touch-icon-precomposed" href="<?php echo get_stylesheet_directory_uri(); ?>/img/app-icon-tm.png">

    <link href='http://fonts.googleapis.com/css?family=Quicksand:400,700' rel='stylesheet' type='text/css'>

    <!-- build:remove:expanded -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/production.min.css">
    <!-- /build -->
    <!-- build:remove:compressed -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/production.css">
    <!-- /build -->

    <!-- build:remove:compressed -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.min.js"></script>
    <!-- /build -->

    <!-- Wordpress head function -->
    <?php wp_head(); ?>
    <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

  </head>
  <body <?php body_class(); ?> >


    <div class="Header">
        <div class="u-gridContainer Header-wrapper">
            <div class="extra-menu">
                bla bla
            </div>
            <a href="/home"><img class="header-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png"/></a>
            <div class="u-gridRow header-space">
                <div class="u-gridCol3">-
                </div>
                <div class="u-gridCol9 u-cf">
                    <div class="Header-telefoon">
                        <a href="tel:0648038209">
                            <img class="header-imgTel" src="<?php echo get_stylesheet_directory_uri(); ?>/img/svg/telefoon.svg"> 
                            <h4 class="header-textTel">06 546 03 807</h4>
                        </a>
                    </div>
                </div>
            </div>
        </div>  
        <div class="Header-grey-bar  header-space"> <!-- 100%, grey bg color -->
            <div class="u-gridContainer">
                <div class="u-gridRow">
                    <div class="u-gridCol3 space">x
                    </div>
                    <div class="u-gridCol9">
                        <div class="u-cf">
                            <a class="Navigation-menuToggle" id="js-navCollapse">
                                <svg class="Icon Icon--inline" viewBox="0 0 128 128">
                                    <use xlink:href="#icon-menu2"></use>
                                </svg>
                            </a>
                            <a href="tel:0648038209" class="Navigation-menuToggle telefoon" id="js-navCollapse">
                                <svg class="Icon Icon--inline" viewBox="0 0 128 128">
                                    <use xlink:href="#icon-phone"></use>
                                </svg>
                            </a>
                        </div>
                        <?php include 'includes/navigation.php'; ?>            
                    </div>
                </div>
            </div>    
        </div>

    </header>
