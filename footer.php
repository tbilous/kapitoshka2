<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package kapitoshka2
 */

?>
<nav id="side-navigation" class="side-navigation default" role="navigation">
    <img src="<?php bloginfo('template_directory'); ?>/assets/img/small-logo.jpg"
    <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'side-menu' ) ); ?>
</nav><!-- #site-navigation -->

<button class="up" id="up">

</button>

</body>

	<footer id="colophon" class="site-footer" role="contentinfo">
<!--        <h1>FOOTER</h1>-->
        <div class="container bottom-sidebar">
            <?php dynamic_sidebar('sidebar-footer'); ?>
        </div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>


</html>


