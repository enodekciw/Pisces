<?php
/**
 * Main sidebar template. Visible on single posts / pages (except, if 'Fullwidth page template is used').
 *
 * Include it with get_sidebar();
 *
 * @package WordPress
 * @subpackage Pisces
 * @since Pisces 1.0
 * @author wplovin <hello@wplovin.com>
 */
?><?php if ( is_active_sidebar( 'sidebar-1' ) ) { ?>
	<section id="sidebar-main">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</section>
<?php } ?>