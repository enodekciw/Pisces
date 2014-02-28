<?php
/**
 * Comments template.
 *
 * This template holds the comments and respond form logic.
 *
 * @package WordPress
 * @subpackage Pisces
 * @since Pisces 1.0
 * @author wplovin <hello@wplovin.com>
 */
?><?php
if ( post_password_required() )
	return;
?>

<?php if ( comments_open() || get_comments_number() ) : ?>
<div id="comments" class="comments-area">

	<?php if ( have_comments() ) : ?>
		<h2 class="comments-title">
			<?php
				printf( _nx( 'One comment on &ldquo;%2$s&rdquo;', '%1$s comments on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'pisces' ),
					number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>' );
			?>
		</h2>

		<ol class="comment-list">
			<?php
				wp_list_comments( array(
					'style'       => 'ol',
					'short_ping'  => true,
					'avatar_size' => 54,
				) );
			?>
		</ol>

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
			<nav class="navigation comment-navigation" role="navigation">
				<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'pisces' ) ); ?></div>
				<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'pisces' ) ); ?></div>
			</nav>
		<?php endif; ?>

		<?php if ( ! comments_open() && get_comments_number() ) : ?>
		<p class="no-comments"><?php _e( 'Comments are closed.' , 'pisces' ); ?></p>
		<?php endif; ?>

	<?php endif; // have_comments() ?>

	<?php comment_form(); ?>
		
</div>

<?php else : ?>

	<?php if ( !is_page() ) : ?>
		<div id="comments" class="comments-area">
		<p class="no-comments"><?php _e( 'Comments are disabled.' , 'pisces' ); ?></p>
		</div>
	<?php endif; ?>
	
<?php endif; ?>