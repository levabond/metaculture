<?php
/**
 * Displays header media
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */
	// 	<div class="custom-header-media">
	// 		<?php the_custom_header_markup(); 
	// 	</div>

	// <?php get_template_part( 'template-parts/header/site', 'branding' ); 


?>
<div>
	<?php get_template_part( 'template-parts/header/site', 'branding' ); ?>
	<ul class="navbar-nav mr-auto">
		<li class="nav-item"><a href="#">Heart</a></li>
	</ul>
</div><!-- .custom-header -->
