<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package kapitoshka2
 */
?>

</body>

	<footer id="colophon" class="site-footer" role="contentinfo">
        <div class="container">
            <?php dynamic_sidebar('sidebar-footer'); ?>
        </div>
        <div class="bottom-img">
            <img src="<?php bloginfo('template_directory'); ?>/assets/img/bottom-img.png" alt="garden" class="bottom-flower img-responsive">
        </div>

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>


</html>


