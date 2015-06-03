<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package kapitoshka2
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
<!--[if lt IE 8]>
<div class="alert alert-warning">
    <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'roots'); ?>
</div>
<![endif]-->

<div class="left-img">
    <img src="<?php bloginfo('template_directory'); ?>/assets/img/left-flower.png" alt="flower" class="left-flower img-responsive">
</div>

<div class="bulb"></div>

<!--<img src="--><?php //bloginfo('template_directory'); ?><!--/assets/img/dropsanddrops.png" class="dropses img-responsive">-->

<header id="masthead" role="banner">
    <div class="container">
        <!--   <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>    -->
        <div class="logo">
            <img class="logo_img" src="<?php bloginfo('template_directory'); ?>/assets/img/logo_resample.png" alt="logo">
            <div class="phone h_contact">(050) 52 33 636</div>
            <div class="mail h_contact">info@capitoshka.cv.ua</div>
        </div>


        <nav id="site-navigation"  class="navbar navbar-default" role="navigation">
            <?php /* Primary navigation */
            wp_nav_menu( array(
                    'menu' => 'top_menu',
                    'depth' => 2,
                    'container' => false,
                    'menu_class' => 'nav navbar-nav',
                    //Process nav menu using our custom nav walker
                    'walker' => new wp_bootstrap_navwalker())
            );
            ?>
        </nav>
    </div>
</header>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>


<div class="wrapper container">