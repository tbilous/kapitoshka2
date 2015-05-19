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
<!--            <div class="row">-->
<!--                <div class="col-xs-12">-->
<!--                <div class="form_feedback">-->
<!--                    <form action="--><?php //the_permalink(); ?><!--" id="contactForm" method="post">-->
<!--                        <div>-->
<!--                            <textarea class="comm_entry" name="comments" id="commentsText">Повідомлення</textarea>-->
<!--                        </div>-->
<!---->
<!--                        <div class="input_group">-->
<!---->
<!--                                <input type="text" name="contactName" id="contactName" value="ПІБ" />-->
<!---->
<!--                                <input type="text" name="contactPhone" id="contactPhone" value="Телефон" />-->
<!---->
<!--                                <input type="text" name="email" id="email" value="Email" />-->
<!---->
<!--                        </div>-->
<!--                            <div class="submit">-->
<!--                                <button class="s_feedback" type="submit">Відіслати</button>-->
<!--                            </div>-->
<!---->
<!--                    </form>-->
<!--                </div>-->
<!--                </div>-->
<!--            </div>-->
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
            <div class="map" id="map"></div>
        </main><!-- #main -->
    </div><!-- #primary -->

    <?php get_sidebar(); ?>

</div> <!--/row-->

<?php get_footer(); ?>


