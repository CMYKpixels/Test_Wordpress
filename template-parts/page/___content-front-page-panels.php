<?php
/**
* Template part for displaying pages on front page
*
* @package WordPress
* @subpackage Twenty_Seventeen
* @since 1.0
* @version 1.0
*/
?>

<article id="panel1" class="container">
	<div class="panel-content row wrap">
		<div class="panel-image" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/fast.jpg')">

			<?php
			$fast = new WP_Query( array('name'=>'fast',));
			if ( $fast->have_posts() ) {
				while ( $fast->have_posts() ) {
					$fast->the_post();?>

					<header class="entry-header">
						<?php echo '<h1>' . get_the_title() . '</h1>'; ?>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<?php echo "<p>".get_the_content(),"</p>"; ?>
						<?php twentyseventeen_edit_link( get_the_ID() ); ?>
					</div><!-- .entry-content -->

			</div><!-- .panel-image -->
			<?php }
			wp_reset_postdata();
			} ?>
	</div><!-- .panel-content -->
</article><!-- #post-## -->
