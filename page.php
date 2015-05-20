<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package kapitoshka2
 */

get_header(); ?>
<!--<h1>PAGE.PHP</h1>-->
<div class="middle row">
    <div id="primary" class="col-md-10 col-sm-12 content-area">
		<main id="main" class="site-main" role="main">
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
            <div class="social">
                <script type="text/javascript">(function() {
                        if (window.pluso)if (typeof window.pluso.start == "function") return;
                        if (window.ifpluso==undefined) { window.ifpluso = 1;
                            var d = document, s = d.createElement('script'), g = 'getElementsByTagName';
                            s.type = 'text/javascript'; s.charset='UTF-8'; s.async = true;
                            s.src = ('https:' == window.location.protocol ? 'https' : 'http')  + '://share.pluso.ru/pluso-like.js';
                            var h=d[g]('body')[0];
                            h.appendChild(s);
                        }})();</script>
                <div class="pluso" data-background="#ebebeb" data-options="big,square,line,horizontal,counter,theme=04" data-services="vkontakte,odnoklassniki,facebook,twitter,google,moimir,email,print"></div>
            </div>

            </article><!-- #post-## -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>

        </div>
    </div> <!--row-->
</div>  <!--middle-->
</div>  <!--wrapper-->
<img class="bottom-img" src="<?php bloginfo('template_directory'); ?>/assets/img/bottom-img.png" alt="garden" class="bottom-flower img-responsive">
<?php get_footer(); ?>
