<?php
/**
 * Blog posts archive template.
 *
 * @package WordPress
 * @subpackage Pisces
 * @since Pisces 1.0
 * @author wplovin <hello@wplovin.com>
 */
?><?php get_header(); ?>

	<?php wplovin_archive_header(); ?>
	
	<section id="content-main" class="container-archive half-padding-h archive-list">
		
		<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'content' ); ?>
		<?php endwhile; else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>
		
	</section>
	
	<?php wplovin_archive_pager(); ?>
	
<?php get_footer(); ?>