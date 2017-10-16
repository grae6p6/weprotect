<?php

/**
 * Content block template - Image banner or colour with title
 */

global $heading, $button, $title, $shortcode;

// Block image
$css = [];
$attributes = null;
$image = get_field( 'image' );
if( $image ) {
	$css[] = 'background-image:url(' . $image['sizes']['block-image'] . ')';
}

// Block colours
$bg_colour = get_field( 'bg_colour' );
if( $bg_colour ) {
	$css[] = 'background-color:' . $bg_colour;
}
$colour = get_field( 'colour' );
if( $colour ) {
	$css[] = 'color:' . $colour;
}

// Block style
if ( count( $css ) ) {
  $attributes = ' style="' . implode( ';', $css ) . '"';
}

// Add retina image src
if( $image ) {
  $attributes .= ' data-2x="' . $image[ 'sizes' ][ 'block-image-2x' ] . '"';
}

?>
<div class="block block-image"<?php echo $attributes ?>>
	<?php wep_edit_link( get_the_ID() ); ?>
	<?php if( $title || $button || ( get_the_content() != '' ) ) : ?>
    <div class="container">
		<div class="row align-items-end">
			<header class="article col-12 col-md-10 col-lg-8">
				<?php if( $title ) :
					printf( '<%s>%s</%s>', $heading, $title, $heading );
				endif; ?>
				<?php the_content() ?>
				<?php echo $button ?>
			</header>
		</div>
	</div>
	<?php endif;
	if( $shortcode ) :
		echo do_shortcode( $shortcode );
	endif; ?>
</div>