<?php
/**
 * 'NOT FOUND' content template.
 *
 * @package WordPress
 * @subpackage Pisces
 * @since Pisces 1.0
 * @author wplovin <hello@wplovin.com>
 */
?>
<article id="post-not-found" class="post">
	<div class="full-padding">
	
		<section class="entry-content">
		
			<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>
				<p><?php printf( __( 'No posts published so far. <a href="%1$s">Ready to speak out?</a>.', 'pisces' ), admin_url( 'post-new.php' ) ); ?></p>
			<?php elseif ( is_search() ) : ?>
				<p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'pisces' ); ?></p>
				<?php get_search_form(); ?>
			<?php else : ?>
				<p><?php _e( 'Ooops.. Perhaps searching can help?', 'pisces' ); ?></p>
				<?php get_search_form(); ?>
			<?php endif; ?>
			
		</section>

	</div>
</article>
