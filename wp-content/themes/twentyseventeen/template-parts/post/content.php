<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>

<article <?php 
						if ( is_home()  ) {
							echo 'class="blockArticle"';
						}?> id="post-<?php the_ID(); ?>" <?php post_class(); ?>
						>
	<div 	<?php if ( is_home() && false !== the_post_thumbnail_url() ) : ?>
							class='articleBlock'
							style="
							background: linear-gradient(0, rgba(0, 0, 0, 0.5) 100%, rgba(0, 0, 0, 0.2) 30%), 50% 50% url(<?php the_post_thumbnail_url( 'twentyseventeen-featured-image' ); ?>);     background-size: cover;"
						<?php endif; ?>></div>
	<?php
	if ( is_front_page() && is_home()  ) {
		echo '<a href="' . esc_url( get_permalink() ) . '" >';
	}
	// <a href="' . esc_url( get_permalink() ) . '" rel="bookmark">'
	if ( is_sticky() && is_home() ) :
		echo twentyseventeen_get_svg( array( 'icon' => 'thumb-tack' ) );
	endif;
	?>
	<header class="entry-header">
		<?php
		if ( is_single() ) {
			the_title( '<h1 class="entry-title">', '</h1>' );
		} elseif ( is_front_page() && is_home() ) {
			the_title( '<h3 class="entry-title">', '</h3>' );
		} else {
			the_title( '<h2 class="entry-title">', '</h2>' );
		}
		?>
	</header><!-- .entry-header -->
	<div class="entry-content">
		<?php

		/* translators: %s: Name of current post */
			the_content( sprintf(
				__( '<span class="screen-reader-text"> "%s"</span>', 'twentyseventeen' ),
				get_the_title()
			) );
		
		// wp_link_pages( array(
		// 	'before'      => '<div class="page-links">' . __( 'Pages:', 'twentyseventeen' ),
		// 	'after'       => '</div>',
		// 	'link_before' => '<span class="page-number">',
		// 	'link_after'  => '</span>',
		// ) );
	
		?>
	</div><!-- .entry-content -->

	<?php
	// if ( is_single() ) {
	// 	twentyseventeen_entry_footer();
	// }
	?>
<?php 
						if ( is_home()  ) {
							echo '</a>';
						}?>
</article><!-- #post-## -->
