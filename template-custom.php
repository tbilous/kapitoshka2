<?php
/*
Template Name: Custom Template with slider
*/
?>
<?php
//do_action('get_header');
get_template_part('template-parts/heads');
//?>


<header class="banner" role="banner">
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
            <img src="<?php bloginfo('template_directory'); ?>/assets/img/logo.png" class="img-responsive" alt="logo">
        </div>

        <nav class="navbar navbar-default" role="navigation">
            <?php
            if (has_nav_menu('primary_navigation')) :
                wp_nav_menu(array('theme_location' => 'primary_navigation', 'walker' => new Roots_Nav_Walker(), 'menu_class' => 'nav navbar-nav'));
            endif;
            ?>
        </nav>
    </div>
</header>

<div class="wrapper container">
    <div class="row">
        <div class="top">
            <div class="col-md-2 col-sm-12 left-banners">
                <img src="<?php bloginfo('template_directory'); ?>/assets/img/wifi.jpg" alt="wifi" width="135px">
                <img src="<?php bloginfo('template_directory'); ?>/assets/img/pizza" alt="pizza" width="135px">
            </div>
            <div class="col-md-8 col-sm-12 col-xs-12 parent_slider">
                <div class="slider">
                    <div id="Carousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <img class="first-slide img-responsive" src="<?php bloginfo('template_directory'); ?>/assets/img/slider/slider1.jpg" alt="First slide" />
                            </div>
                            <div class="item">
                                <img class="second-slide img-responsive" src="<?php bloginfo('template_directory'); ?>/assets/img/slider/slider2.jpg" alt="Second slide" />
                            </div>
                            <div class="item">
                                <img class="second-slide img-responsive" src="<?php bloginfo('template_directory'); ?>/assets/img/slider/slider3.jpg" alt="Second slide" />
                            </div>
                            <div class="item">
                                <img class="second-slide img-responsive" src="<?php bloginfo('template_directory'); ?>/assets/img/slider/slider4.jpg" alt="Second slide" />
                            </div>
                            <div class="item">
                                <img class="second-slide img-responsive" src="<?php bloginfo('template_directory'); ?>/assets/img/slider/slider5.jpg" alt="Second slide" />
                            </div>
                            <div class="item">
                                <img class="second-slide img-responsive" src="<?php bloginfo('template_directory'); ?>/assets/img/slider/slider6.jpg" alt="Second slide" />
                            </div>
                        </div>
                        <ol class="carousel-indicators">
                            <li data-target="#Carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#Carousel" data-slide-to="1"></li>
                            <li data-target="#Carousel" data-slide-to="2"></li>
                            <li data-target="#Carousel" data-slide-to="3"></li>
                            <li data-target="#Carousel" data-slide-to="4"></li>
                            <li data-target="#Carousel" data-slide-to="5"></li>
                        </ol>
                    </div><!-- /.carousel -->
                </div> <!--/.slider-->
            </div>
            <div class="col-md-2 col-sm-12 right-banners">
                <img src="<?php bloginfo('template_directory'); ?>/assets/img/kudz.jpg" alt="kudz" width="135px">
                <img src="<?php bloginfo('template_directory'); ?>/assets/img/offer_pregnat.jpg" alt="pregnat_offers" width="135px;">
            </div>
        </div>
    </div>
    <div class="middle">
        <div class="row">
            <div class="col-md-10 col-sm-12">
                <main>


                    <?php while ( have_posts() ) : the_post(); ?>

                        <?php get_template_part( 'template-parts/content-page-front' ); ?>

                        <?php
                        // If comments are open or we have at least one comment, load up the comment template
                        if ( comments_open() || get_comments_number() ) :
                            comments_template();
                        endif;
                        ?>

                    <?php endwhile; // end of the loop. ?>



                    <div class="social"></div>

                </main>
            </div>
            <div class="col-md-2 col-sm-12 sidebar">

                <aside class="sidebar" role="complementary">
                    <a href="javascript:void(0)"><img src="<?php bloginfo('template_directory'); ?>/assets/img/offer.jpg" alt="offer" width="135px"> </a>
                    <a href="javascript:void(0)"><img src="<?php bloginfo('template_directory'); ?>/assets/img/partner.jpg" alt="partner" width="135px"> </a>
                    <a href="javascript:void(0)"><img src="<?php bloginfo('template_directory'); ?>/assets/img/press.jpg" alt="press" width="135px"> </a>

                </aside>


            </div>
        </div> <!--row-->
    </div>  <!--middle-->
</div>  <!--wrapper-->


<?php get_template_part('templates/footer'); ?>


<!--<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>      -->
</body>
<?php get_footer(); ?>


