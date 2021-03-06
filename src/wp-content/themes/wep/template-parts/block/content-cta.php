<?php

/**
 * Content block template - CTA with optional right side image
 */

global $heading, $button, $title, $shortcode;

// Block image
$css   = [];
$attributes = null;
$image = get_field( 'image' );

// Block colours
$bg_colour = get_field( 'bg_colour' );
if ( $bg_colour ) {
	$css[] = 'background-color:' . $bg_colour;
}
$colour = get_field( 'colour' );
if ( $colour ) {
	$css[] = 'color:' . $colour;
}

// Block style
if ( count( $css ) ) {
  $attributes = ' style="' . implode( ';', $css ) . '"';
}

?>
<div class="block block-cta"<?php echo $attributes ?>>
	<?php wep_edit_link( get_the_ID() ); ?>
	<?php if ( $title || $button || ( get_the_content() != '' ) ) : ?>
		<div class="container px-5">
			<div class="row align-items-center">
				<div class="col">
					<?php if ( $title ) :
						printf( '<%s>%s</%s>', $heading, $title, $heading );
					endif; ?>
					<?php the_content() ?>
					<?php echo $button ?>
				</div>
				<?php if ( $image ) : ?>
					<div class="col-12 col-md-6 col-lg-4">
						<img src="<?php echo $image[ 'sizes' ][ 'block-cta' ] ?>" alt="<?php echo $image[ 'alt' ] ?>"
							 title="<?php echo $image[ 'title' ] ?>" data-2x="<?php echo $image[ 'sizes' ][ 'block-cta-2x' ] ?>">
					</div>
				<?php endif; ?>
			</div>
		</div>
	<?php endif;
	if ( $shortcode ) :
		echo do_shortcode( $shortcode );
	endif; ?>
</div>