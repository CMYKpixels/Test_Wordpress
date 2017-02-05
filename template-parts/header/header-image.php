:<?php
/**
* Displays header media
*
* @package WordPress
* @subpackage Twenty_Seventeen
* @since 1.0
* @version 1.0
*/

?>
<div class="custom-header">

	<div class="custom-header-media">
		<?php the_custom_header_markup(); ?>
	</div>

	<div class="site-branding">
		<div class="wrap custom-wrapper">
			<div class="row">

			<?php
			get_template_part( 'template-parts/header/site', 'branding' );
		 	get_template_part( 'template-parts/header/form', 'incentive' );
			?>
			</div>
		</div><!-- .wrap -->
	</div><!-- .site-branding -->
</div><!-- .custom-header -->
