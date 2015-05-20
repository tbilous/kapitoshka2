<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package kapitoshka2
 */
?>

<!-- <article id="post--><?php //the_ID(); ?><!--" --><?php //post_class(); ?>

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'kapitoshka2' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php edit_post_link( esc_html__( 'Редактувати', 'kapitoshka2' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
<!--</article>-->

