<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package topspejder
 * @since topspejder 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>
<?php
    /*
     * Print the <title> tag based on what is being viewed.
     */
    global $page, $paged;

    wp_title( '|', true, 'right' );

    // Add the blog name.
    bloginfo( 'name' );

    // Add the blog description for the home/front page.
    $site_description = get_bloginfo( 'description', 'display' );
    if ( $site_description && ( is_home() || is_front_page() ) )
            echo " | $site_description";

    // Add a page number if necessary:
    if ( $paged >= 2 || $page >= 2 )
            echo ' | ' . sprintf( __( 'Page %s', 'topspejder' ), max( $paged, $page ) );

?>
</title>

    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <!--[if lt IE 9]>
    <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
    <![endif]-->

    <?php wp_head(); ?>
    
    <!-- 1140px Grid styles for IE -->
    <!--[if lte IE 9]><link rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ?>/css/ie.css" type="text/css" media="screen" /><![endif]-->
    <!-- The 1140px Grid - http://cssgrid.net/ -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ?>/css/1140.css" type="text/css" media="screen" />
    <!-- Nivo slider -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ?>/css/nivo-slider.css" type="text/css" media="screen" />
    <!-- Nivo slider theme -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ?>/css/light/light.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ?>/css/zcore-iconset.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ?>/css/animation.css">
    <!--[if IE 7]><link rel="stylesheet" href="css/zcore-iconset-ie7.css"><![endif]-->
    <!--css3-mediaqueries-js - http://code.google.com/p/css3-mediaqueries-js/ - Enables media queries in some unsupported browsers-->
    <script type="text/javascript" src="<?php bloginfo('stylesheet_directory') ?>/js/css3-mediaqueries.js"></script>
    <!-- latest jQuery -->
    <script type="text/javascript" src="//code.jquery.com/jquery-latest.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('stylesheet_directory') ?>/js/jquery.nivo.slider.js"></script>

    <!-- Site specific design -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ?>/css/design.css" type="text/css" media="screen" />

</head>

<body <?php body_class(); ?>>
    <!--<div id="_themewrap">-->

    <div id="_main" class="container">
        <div id="_site_titles" class="row">
            <span class="site-title"><a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></span>
            <span class="site-description"><?php bloginfo( 'description' ); ?></span>
        </div> <!-- #_site_titles row -->
        <div id="_header" class="shade row">
            <!--<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="top" />-->
            <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" class="top-round" alt="top" />
            <!--<nav role="navigation" class="site-navigation main-navigation ">-->
            <nav role="navigation" class="">
                <?php 
                    wp_nav_menu(array(
                                    'menu' => 'topmenu', 
                                    'container_id' => 'cssmenu', 
                                    'walker' => new CSS_Menu_Maker_Walker()
                                    )); 
                     
                ?>
            </nav><!-- .site-navigation .main-navigation -->

        </div> <!-- #_header row -->
        <div id="_navigation" class="row">
            <!--
            <div class="row"><hr class="seperator"></div>
            -->
        </div>
        <div class="row buffer"></div>
<?php
/**
            <div id="page" class="hfeed site">
                <?php do_action( 'before' ); ?>
                <header id="masthead" class="site-header" role="banner">
                    <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
                    <hgroup>
                        <h1 class="site-title"><a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                        <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
                    </hgroup>
                    <!--<nav role="navigation" class="site-navigation main-navigation">-->
                    <nav role="navigation" class="site-navigation main-navigation _menuoverflow">
                    <?php 
                        wp_nav_menu(array(
                                        'menu' => 'topmenu', 
                                        'container_id' => 'cssmenu', 
                                        'walker' => new CSS_Menu_Maker_Walker()
                                        )); 
                    ?>
                    </nav><!-- .site-navigation .main-navigation -->
                </header><!-- #masthead .site-header -->
            </div><!-- #page .hfeed site -->

        </div> <!-- #_header row -->
/**/
?>
            <div id="main" class="row site-main">