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
            <div class="map" id="map"></div>
            <?php while ( have_posts() ) : the_post(); ?>

                <?php get_template_part( 'template-parts/content', 'page' ); ?>

                <?php
                // If comments are open or we have at least one comment, load up the comment template
                if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif;
                ?>

            <?php endwhile; // end of the loop. ?>

            <div id="social" class="widget-area" role="complementary">
                <?php dynamic_sidebar( 'sidebar-2' ); ?>
            </div>

            </article><!-- #post-## -->
        </main><!-- #main -->
    </div><!-- #primary -->

    <?php get_sidebar(); ?>

</div> <!--/row-->

<?php get_footer(); ?>


