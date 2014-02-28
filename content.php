<?php
/**
 * Main post content template.
 *
 * Used for all post formats.
 *
 * @package WordPress
 * @subpackage Pisces
 * @since Pisces 1.0
 * @author wplovin <hello@wplovin.com>
 */
?><article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="full-padding">
	
		<?php if ( get_the_title() || has_post_thumbnail() ) : ?>
			<header class="entry-header">
				<?php if ( has_post_thumbnail() ) : ?>
				
					<?php if ( is_singular() ) : ?>
						<div class="post-thumbnail">
							<?php the_post_thumbnail( 'full' ); ?>
						</div>
					<?php else : ?>
						<div class="post-thumbnail">
							<a href="<?php the_permalink(); ?>" title="<?php echo sprintf( __( 'Continue reading %s', 'pisces' ), get_the_title() ); ?>"><?php the_post_thumbnail( 'archive-thumbnail' ); ?></a>
						</div>
					<?php endif; ?>
					
				<?php endif; ?>
				
				<h1 class="entry-title">
				
					<?php if ( is_singular() ) : ?>
						<?php the_title(); ?>
					<?php else : ?>
						<a href="<?php the_permalink(); ?>" title="<?php echo sprintf( __( 'Continue reading %s', 'pisces' ), get_the_title() ); ?>">
							<?php the_title(); ?>
						</a>
					<?php endif; ?>
					
				</h1>
			</header>
		<?php endif; ?>
		
		<section class="entry-content">
			<?php the_content( __( 'Continue reading &rarr;', 'pisces' ) ) ; ?>
		</section>

		<?php if ( is_singular() ) : ?>
			<?php wp_link_pages( array( 
				'before'   =>   '<div class="page-links"><span>' . __( 'Continue reading: ', 'pisces') . '</span>', 
				'after'    =>   '</div>' ) 
			); ?>
		<?php endif; ?>
		
		<?php if ( !is_page() && !is_archive() && !is_home() && !is_search() ) : ?>
		<footer class="entry-meta">
				<?php wplovin_post_meta(); ?>
		</footer>
		<?php endif; ?>
		
	</div>

</article>
