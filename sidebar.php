<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package kapitoshka2
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>
<div class="col-md-2 col-sm-12 sidebar">
    <aside>
    <ul>
        <li><img src="<?php bloginfo('template_directory'); ?>/assets/img/wifi.jpg" alt="wifi" width="135px"></li>
        <li><img src="<?php bloginfo('template_directory'); ?>/assets/img/pizza" alt="pizza" width="135px"></li>
        <li><img src="<?php bloginfo('template_directory'); ?>/assets/img/kudz.jpg" alt="kudz" width="135px"></li>
        <li><img src="<?php bloginfo('template_directory'); ?>/assets/img/offer_pregnat.jpg" alt="pregnat_offers" width="135px;"></li>
        <li><a href="javascript:void(0)">
                <img src="<?php bloginfo('template_directory'); ?>/assets/img/offer.jpg" alt="offer" width="135px">
            </a></li>
        <li><a href="javascript:void(0)">
                <img src="<?php bloginfo('template_directory'); ?>/assets/img/partner.jpg" alt="partner" width="135px">
            </a></li>
        <li><a href="javascript:void(0)">
                <img src="<?php bloginfo('template_directory'); ?>/assets/img/press.jpg" alt="press" width="135px">
            </a></li>
    </ul>
        <div id="secondary" class="widget-area" role="complementary">
            <?php dynamic_sidebar( 'sidebar-1' ); ?>
        </div>
    </aside>
<!--    <img src="-->
    <?php //bloginfo('template_directory'); ?>
<!--    /assets/img/wifi.jpg" alt="wifi" width="135px">-->









</div>  <!--/sidebar-->