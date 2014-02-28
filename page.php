<?php
/**
 * Single page template.
 *
 * @package WordPress
 * @subpackage Pisces
 * @since Pisces 1.0
 * @author wplovin <hello@wplovin.com>
 */
?><?php get_header(); ?>
	<section id="content-main" class="half-padding-h single-entry">
	
		<div class="single-wrapper">
			
			<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'none' ); ?>
			<?php endwhile; endif; ?>
	
			<?php comments_template(); ?>
		
		</div>
		
		<?php get_sidebar(); ?>
		
	</section>
<?php get_footer(); ?>