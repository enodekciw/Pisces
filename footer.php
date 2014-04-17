<?php
/**
 * Main footer template.
 * 
 * Include it with get_footer();
 *
 * @package WordPress
 * @subpackage Pisces
 * @since Pisces 1.0
 * @author wplovin <hello@wplovin.com>
 */
?>
	<footer id="footer-main">
		<div id="footer-wrap">
		<?php if ( is_active_sidebar( 'footer-1' ) ) { ?>	
			<section id="sidebar-footer" class="cf">
				<?php dynamic_sidebar( 'footer-1' ); ?>
			</section>
		<?php } ?>
	
			<div id="credits">
				<?php if ( has_nav_menu( 'social' ) ) {
					wp_nav_menu( array( 'theme_location' => 'social', 'menu_class' => 'social-menu full-padding cf', 'container'=> 'none', 'depth' => 1 ) ); 
				} ?>
				<span>
				<?php printf( __( 'This website is powered by %s and %s', 'pisces' ), '<a href="http://www.wordpress.org/" title="WordPress">WordPress</a>', '<a href="http://wplovin.com/pisces/" title="Pisces theme by wplovin">Pisces</a><i class="fa fa-heart"></i>' ); ?>
				</span>
			</div>
		</div>
	</footer>
	</div>
	
<?php wp_footer(); ?>
</body>
</html>