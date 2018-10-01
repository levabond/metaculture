<?php
/**
 * Displays header site branding
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<div class="site-branding">
	<div class="wrap">

		<?php the_custom_logo(); ?>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">	
			<div style="width: 100%; max-width: 900px; height: 30vh; z-index: 10; margin: 0 auto;"
				data-vide-bg="/wp-content/uploads/2018/09/metaculture"
				data-vide-options="loop: true, muted: true, position: 50% 50%"></div>
		</a>
		<?php if ( ( twentyseventeen_is_frontpage() || ( is_home() && is_front_page() ) ) && ! has_nav_menu( 'top' ) ) : ?>
	<?php endif; ?>

	</div><!-- .wrap -->
</div><!-- .site-branding -->
