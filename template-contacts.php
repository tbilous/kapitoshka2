<?php
/*
Template Name: Template contacts
*/
?>


<?php
get_header();?>



<div class="middle row">
    <div id="primary" class="col-md-10 col-sm-12 content-area">
        <main id="main" class="site-main" role="main">

<article class="addon">
<?php echo do_shortcode('[contact-form-7 id="39" title="Контактна форма 1_copy" html_class="form form_feedback"]') ?>
</article>

<!--            --><?php //while ( have_posts() ) : the_post(); ?>
<!---->
<!--                --><?php //get_template_part( 'template-parts/content', 'page' ); ?>
<!---->
<!--            --><?php //endwhile; // end of the loop. ?>


            <div id="social" class="widget-area" role="complementary">
                <?php dynamic_sidebar( 'sidebar-2' ); ?>
            </div>

            </article><!-- #post-## -->
<!--            add Google Map script-->
<?php
wp_enqueue_script('gmap', get_stylesheet_directory_uri().( '/assets/js/gmap.js' ), array( 'jquery' ));
wp_localize_script( 'gmap', 'blabla', localize_vars() );
?>
            <div class="map" id="map"></div>
        </main><!-- #main -->
    </div><!-- #primary -->

    <?php get_sidebar(); ?>

</div> <!--/row-->
</div>
</div> <!--row-->
</div>  <!--middle-->
</div>  <!--wrapper-->
<img class="bottom-img" src="<?php bloginfo('template_directory'); ?>/assets/img/bottom-img.png" alt="garden" class="bottom-flower img-responsive">

<?php get_footer(); ?>


