<?php
/*
Template Name: Custom Template with slider
*/
?>

<?php
//do_action('get_header');
//get_template_part('template-parts/heads');
get_header();?>



<!--<div class="wrapper container">-->
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
                                <div class="text-block"><p>Розважальні программи</p> <p class="second_line">для Ваших непосид...</p></div>
                            </div>
                            <div class="item">
                                <img class="second-slide img-responsive" src="<?php bloginfo('template_directory'); ?>/assets/img/slider/slider2.jpg" alt="Second slide" />
                                <div class="text-block"><p>Розважальні программи</p> <p class="second_line">для Ваших непосид...</p></div>
                            </div>
                            <div class="item">
                                <img class="second-slide img-responsive" src="<?php bloginfo('template_directory'); ?>/assets/img/slider/slider3.jpg" alt="Second slide" />
                                <div class="text-block"><p>Розважальні программи</p> <p class="second_line">для Ваших непосид...</p></div>
                            </div>
                            <div class="item">
                                <img class="second-slide img-responsive" src="<?php bloginfo('template_directory'); ?>/assets/img/slider/slider4.jpg" alt="Second slide" />
                                <div class="text-block"><p>Розважальні программи</p> <p class="second_line">для Ваших непосид...</p></div>
                            </div>
                            <div class="item">
                                <img class="second-slide img-responsive" src="<?php bloginfo('template_directory'); ?>/assets/img/slider/slider5.jpg" alt="Second slide" />
                                <div class="text-block"><p>Розважальні программи</p> <p class="second_line">для Ваших непосид...</p></div>
                            </div>
                            <div class="item">
                                <img class="second-slide img-responsive" src="<?php bloginfo('template_directory'); ?>/assets/img/slider/slider6.jpg" alt="Second slide" />
                                <div class="text-block"><p>Розважальні программи</p> <p class="second_line">для Ваших непосид...</p></div>
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
<article>

                    <?php while ( have_posts() ) : the_post(); ?>

                        <?php get_template_part( 'template-parts/content-page-front' ); ?>

                        <?php
                        // If comments are open or we have at least one comment, load up the comment template
                        if ( comments_open() || get_comments_number() ) :
                            comments_template();
                        endif;
                        ?>

                    <?php endwhile; // end of the loop. ?>
<!--    <div class="social">-->
<!--        <script type="text/javascript">(function() {-->
<!--                if (window.pluso)if (typeof window.pluso.start == "function") return;-->
<!--                if (window.ifpluso==undefined) { window.ifpluso = 1;-->
<!--                    var d = document, s = d.createElement('script'), g = 'getElementsByTagName';-->
<!--                    s.type = 'text/javascript'; s.charset='UTF-8'; s.async = true;-->
<!--                    s.src = ('https:' == window.location.protocol ? 'https' : 'http')  + '://share.pluso.ru/pluso-like.js';-->
<!--                    var h=d[g]('body')[0];-->
<!--                    h.appendChild(s);-->
<!--                }})();</script>-->
<!--        <div class="pluso" data-background="#ebebeb" data-options="big,square,line,horizontal,counter,theme=04" data-services="vkontakte,odnoklassniki,facebook,twitter,google,moimir,email,print"></div>-->
<!--    </div>-->

</article>

                    <div id="social" class="widget-area" role="complementary">
                        <?php dynamic_sidebar( 'sidebar-2' ); ?>
                    </div>
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

<img class="bottom-img" src="<?php bloginfo('template_directory'); ?>/assets/img/bottom-img.png" alt="garden" class="bottom-flower img-responsive">




<!--</body>-->
<?php get_footer(); ?>


